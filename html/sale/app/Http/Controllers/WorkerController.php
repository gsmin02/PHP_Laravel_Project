<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Worker;

class WorkerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$data['tmp'] = $this->qstring();
		
		$text1 = request('text1');
		$data['text1'] = $text1;
        $data['list'] = $this->getlist($text1);
		
		return view('worker.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		/*
		$data['tmp'] = $this->qstring();
        return view('member.create', $data);
		*/
		$data['tmp'] = $this->qstring();
        return view('worker.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		/*
		$row = new Member;
		$this->save_row($request, $row);
		
		$tmp = $this->qstring();
		return redirect('member' . $tmp);
		*/
		$row = new Worker;
		$this->save_row($request, $row);
		
		$tmp = $this->qstring();
		return redirect('worker' . $tmp);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
		/*
		$data['tmp'] = $this->qstring();
        $data['row'] = Member::find($id);
		return view('member.show', $data);
		*/
		$data['tmp'] = $this->qstring();
        $data['row'] = Worker::find($id);
		return view('worker.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
		/*
		$data['tmp'] = $this->qstring();
        $data['row'] = Member::find($id);
		return view('member.edit', $data);
		*/
		$data['tmp'] = $this->qstring();
        $data['row'] = Worker::find($id);
		return view('worker.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
		/*
		$row = Member::find($id);
		$this->save_row($request, $row);
		
		$tmp = $this->qstring();
		return redirect('member' . $tmp);
		*/
		$row = Worker::find($id);
		$this->save_row($request, $row);
		
		$tmp = $this->qstring();
		return redirect('worker' . $tmp);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
		/*
        Member::find($id)->delete();
		
		$tmp = $this->qstring();
		return redirect('member' . $tmp);
		*/
		Worker::find($id)->delete();
		
		$tmp = $this->qstring();
		return redirect('worker' . $tmp);
    }
	
	public function getlist($text1)
	{
		/*
		$result = Member::where('name', 'like', '%' . $text1 . '%') -> orderby('name', 'asc')
		->paginate(5)->appends( ['text1' => $text1] );
		
		return $result;
		*/
		
		$result = Worker::where('name', 'like', '%' . $text1 . '%') -> orderby('name', 'asc')
		->paginate(5)->appends( ['text1' => $text1] );
		
		return $result;
	}
	
	public function save_row(Request $request, $row)
	{	
		$request->validate([
			'name' => 'required|max:20',
			'tel1' => 'required|max:3',
			'tel2' => 'required|max:4',
			'tel3' => 'required|max:4',
			'gender' => 'required|max:10'
		],
		[
			'name.required' => '이름은 필수입력입니다.',
			'tel1.required' => '전화는 필수입력입니다.',
			'tel2.required' => '전화는 필수입력입니다.',
			'tel3.required' => '전화는 필수입력입니다.',
			'gender.required' => '성별은 필수입력입니다.'
		]);
		
        $tel1 = $request->input('tel1');
		$tel2 = $request->input('tel2');
		$tel3 = $request->input('tel3');
		$tel = sprintf("%-3s%-4s%-4s", $tel1, $tel2, $tel3);
		
		$row->name=$request->input('name');
		$row->phone=$tel;
		$row->gender=$request->input('gender');
		
		$row->save();
	}
	
	public function qstring()
	{
		/*
		$text1 = request("text1") ? request("text1") : "";
		$page = request("page") ? request("page") : "1";
		
		$tmp = $text1 ? "?text1=$text1&page=$page" : "?page=$page";
		
		return $tmp;
		*/
		
		$text1 = request("text1") ? request("text1") : "";
		$page = request("page") ? request("page") : "1";
		
		$tmp = $text1 ? "?text1=$text1&page=$page" : "?page=$page";
		
		return $tmp;
	}
	
}