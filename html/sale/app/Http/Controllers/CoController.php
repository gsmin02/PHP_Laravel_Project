<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Co;

class CoController extends Controller
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
		
		return view('co.index', $data);
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
		$a_cokind = array("대기업","중소기업","벤처","개인");
		$n_cokind = count($a_cokind);
		$data['a_cokind'] = $a_cokind;
		$data['n_cokind'] = $n_cokind;
        return view('co.create', $data);
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
		$row = new Co;
		$this->save_row($request, $row);
		
		$tmp = $this->qstring();
		return redirect('co' . $tmp);
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
        $data['row'] = Co::find($id);
		return view('co.show', $data);
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
        $data['row'] = Co::find($id);
		$a_cokind = array("대기업","중소기업","벤처","개인");
		$n_cokind = count($a_cokind);
		$data['a_cokind'] = $a_cokind;
		$data['n_cokind'] = $n_cokind;
		return view('co.edit', $data);
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
		$row = Co::find($id);
		$this->save_row($request, $row);
		
		$tmp = $this->qstring();
		return redirect('co' . $tmp);
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
		Co::find($id)->delete();
		
		$tmp = $this->qstring();
		return redirect('co' . $tmp);
    }
	
	public function getlist($text1)
	{
		/*
		$result = Member::where('name', 'like', '%' . $text1 . '%') -> orderby('name', 'asc')
		->paginate(5)->appends( ['text1' => $text1] );
		
		return $result;
		*/
		
		$result = Co::where('coname', 'like', '%' . $text1 . '%') -> orderby('coname', 'asc')
		->paginate(5)->appends( ['text1' => $text1] );
		
		return $result;
	}
	
	public function save_row(Request $request, $row)
	{	
		$request->validate([
			'coname' => 'required|max:20',
			'cotel1' => 'required|max:3',
			'cotel2' => 'required|max:4',
			'cotel3' => 'required|max:4',
			'cokind' => 'required|max:10'
		],
		[
			'coname.required' => '회사이름은 필수입력입니다.',
			'cotel1.required' => '회사전화는 필수입력입니다.',
			'cotel2.required' => '회사전화는 필수입력입니다.',
			'cotel3.required' => '회사전화는 필수입력입니다.',
			'cokind.required' => '회사분류는 필수입력입니다.'
		]);
		
        $cotel1 = $request->input('cotel1');
		$cotel2 = $request->input('cotel2');
		$cotel3 = $request->input('cotel3');
		$cotel = sprintf("%-3s%-4s%-4s", $cotel1, $cotel2, $cotel3);
		
		$row->coname=$request->input('coname');
		$row->cotel=$cotel;
		$row->cokind=$request->input('cokind');
		
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