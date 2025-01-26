<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\One_Gubun;
use App\Models\One_Concept;
use App\Models\One_Product;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['concept'] = $this->getlist_concept();
		
		return view('main.index', $data);
    }
	
	public function list($concept_id)
	{
		if($concept_id == 0)
		{
			$text1 = request('text1');
			$data['text1'] = $text1;
			$data['list'] = $this->get_Search($text1);
			$data['concept'] = null;
		} else
		{
			$data['list'] = $this->getlist_list($concept_id);
			$data['concept'] = $this->get_concept($concept_id);
		}
		return view('main.list', $data);
	}
	
	public function detail($detail_id)
	{
		$data['detail'] = $this->getlist_detail($detail_id);
		return view('main.detail', $data);
	}
	
	public function category($category_id)
	{
		$data['list'] = $this->getlist_category($category_id);
		$data['concept'] = $this->get_category($category_id);
		return view('main.list', $data);
	}
	
	public function getlist_concept()
	{
		$result = One_Concept::orderBy('name', 'asc')->get();
		
		return $result;
	}
	
	public function get_concept($id)
	{
		$result = One_Concept::find($id);
		
		return $result;
	}
	
	public function getlist_list($id)
	{
		$result = One_Product::where('concept_id', $id)->get();
		
		return $result;
	}
	
	public function getlist_detail($id)
	{
		$result = One_Product::find($id);
		
		return $result;
	}
	
	public function getlist_category($id)
	{
		$result = One_Product::where('gubun_id', $id)->get();
		
		return $result;
	}
	
	public function get_category($id)
	{
		$result = One_Gubun::find($id);
		
		return $result;
	}
	
	public function get_Search($text1)
	{
		$result = One_Product::inRandomOrder()->get();
		
		$result = One_Product::where('one__products.name', 'like', '%'.$text1.'%')
		->orderby('one__products.name', 'asc')
		->paginate(6)
		->appends(['text1' => $text1]);
		
		return $result;
	}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		//
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		//
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
		//
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
		//
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
		//
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
	
}