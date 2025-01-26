<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\One_Member;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		// if(session()->get("rank")!=1) return redirect("/");
		
		$data['tmp'] = $this->qstring();
		
		$text1 = request('text1');
		$data['text1'] = $text1;
        $data['list'] = $this->getlist($text1);
		
		return view('admin.member.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		$data['tmp'] = $this->qstring();
        return view('admin.member.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		if (session()->get('session_rank') != 2) {
            return view('admin.main.login');
        }
		$check = request('check');
		
		$row = new One_Member;
		$this->save_row($request, $row);
		
		
		if($check == 0) {
			return redirect('main');
		}
		
		$tmp = $this->qstring();
		return redirect('member' . $tmp);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
		$data['tmp'] = $this->qstring();
        $data['row'] = One_Member::find($id);
		return view('admin.member.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
		$data['tmp'] = $this->qstring();
        $data['row'] = One_Member::find($id);
		return view('admin.member.edit', $data);
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
		$row = One_Member::find($id);
		$this->save_row($request, $row);
		
		$tmp = $this->qstring();
		return redirect('member' . $tmp);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        One_Member::find($id)->delete();
		
		$tmp = $this->qstring();
		return redirect('member' . $tmp);
    }
	
	public function getlist($text1)
	{
		$result = One_Member::where('name', 'like', '%' . $text1 . '%') -> orderby('name', 'asc')
		->paginate(5)->appends( ['text1' => $text1] );
		
		return $result;
	}
	
	public function save_row(Request $request, $row)
	{
		$request->validate([
			'user_id' => 'required|max:20',
			'pw' => 'required|max:20',
			'name' => 'required|max:20'
		],
		[
			'user_id.required' => 'ID is required.',
			'pw.required' => 'PW is required.',
			'name.required' => 'Name is required.',
			'user_id.max' => 'Up to 20 characters.',
			'pw.max' => 'Up to 20 characters.',
			'name.max' => 'Up to 20 characters.'
		]);
		
        $tel1 = $request->input("tel1");
		$tel2 = $request->input("tel2");
		$tel3 = $request->input("tel3");
		$tel = sprintf("%-3s%-4s%-4s", $tel1, $tel2, $tel3);
		
		$row->name=$request->input('name');
		$row->user_id=$request->input('user_id');
		$row->pw=$request->input('pw');
		$row->tel=$tel;
		$row->address=$request->input('address');
		$row->rank=$request->input('rank');
		
		$row->save();
	}
	
	public function qstring()
	{
		$text1 = request("text1") ? request("text1") : "";
		$page = request("page") ? request("page") : "1";
		
		$tmp = $text1 ? "?text1=$text1&page=$page" : "?page=$page";
		
		return $tmp;
	}
	
}