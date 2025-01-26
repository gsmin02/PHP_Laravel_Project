<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\One_Company;

class CompanyController extends Controller
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
		
		return view('admin.company.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		$data['tmp'] = $this->qstring();
		$a_kind = array("Large Corp","SME","Venture","Sole Prop");
		$n_kind = count($a_kind);
		$data['a_kind'] = $a_kind;
		$data['n_kind'] = $n_kind;
        return view('admin.company.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		$row = new One_Company;
		$this->save_row($request, $row);
		
		$tmp = $this->qstring();
		return redirect('company' . $tmp);
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
        $data['row'] = One_Company::find($id);
		return view('admin.company.show', $data);
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
        $data['row'] = One_Company::find($id);
		$a_kind = array("Large Corp","SME","Venture","Sole Prop");
		$n_kind = count($a_kind);
		$data['a_kind'] = $a_kind;
		$data['n_kind'] = $n_kind;
		return view('admin.company.edit', $data);
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
		$row = One_Company::find($id);
		$this->save_row($request, $row);
		
		$tmp = $this->qstring();
		return redirect('company' . $tmp);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
		One_Company::find($id)->delete();
		
		$tmp = $this->qstring();
		return redirect('company' . $tmp);
    }
	
	public function getlist($text1)
	{
		$result = One_Company::where('name', 'like', '%' . $text1 . '%') -> orderby('name', 'asc')
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
			'kind' => 'required|max:10'
		],
		[
			'name.required' => 'Name is required.',
			'tel1.required' => 'Tel is required.',
			'tel2.required' => 'Tel is required.',
			'tel3.required' => 'Tel is required.',
			'kind.required' => 'Kind is required.'
		]);
		
        $tel1 = $request->input('tel1');
		$tel2 = $request->input('tel2');
		$tel3 = $request->input('tel3');
		$tel = sprintf("%-3s%-4s%-4s", $tel1, $tel2, $tel3);
		
		$row->name=$request->input('name');
		$row->tel=$tel;
		$row->kind=$request->input('kind');
		
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