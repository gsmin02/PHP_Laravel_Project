<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\One_Gubun;

class GubunController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		if (session()->get('session_rank') != 2) {
            return view('admin.main.login');
        }
		$data['tmp'] = $this->qstring();
		
		$text1 = request('text1');
		$data['text1'] = $text1;
        $data['list'] = $this->getlist($text1);
		
		return view('admin.gubun.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		$data['tmp'] = $this->qstring();
		
		return view('admin.gubun.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		$row = new One_Gubun;
		$this->save_row($request, $row);
		
		$tmp = $this->qstring();
		return redirect('gubun' . $tmp);
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
        $data['row'] = One_Gubun::find($id);
		
		return view('admin.gubun.show', $data);
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
        $data['row'] = One_Gubun::find($id);
		
		return view('admin.gubun.edit', $data);
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
		$row = One_Gubun::find($id);
		$this->save_row($request, $row);

		$tmp = $this->qstring();
		return redirect('gubun' . $tmp);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        One_Gubun::find($id)->delete();
		
		$tmp = $this->qstring();
		return redirect('gubun' . $tmp);
    }
	
	public function getlist($text1)
	{
		$result = One_Gubun::where('name', 'like', '%' . $text1 . '%') -> orderby('name', 'asc')
		->paginate(5)->appends( ['text1' => $text1] );
		
		return $result;
	}
	
	public function save_row(Request $request, $row)
	{
		$request->validate([
			'name' => 'required|max:20'
		],
		[
			'name.required' => 'Name is required.',
			'name.max' => 'Up to 20 characters.'
		]);
		
		$row->name=$request->input('name');
		
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