<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\Jangbu;

class CrosstabController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
		$text1 = $request->input('text1');
		if(!$text1) $text1=date("Y");
		
		$data['text1'] = $text1;
        $data['list'] = $this->getlist($text1);
		
		return view('crosstab.index', $data);
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
	
	public function getlist($text1)
	{
		$result = Jangbu::leftjoin('products', 'jangbus.products_id','=','products.id')->
			select('products.name as products_name',
				DB::raw('sum( if(month(jangbus.writeday)=1, jangbus.numo, 0) ) as s1,
					sum( if(month(jangbus.writeday)=2, jangbus.numo, 0) ) as s2,
					sum( if(month(jangbus.writeday)=3, jangbus.numo, 0) ) as s3,
					sum( if(month(jangbus.writeday)=4, jangbus.numo, 0) ) as s4,
					sum( if(month(jangbus.writeday)=5, jangbus.numo, 0) ) as s5,
					sum( if(month(jangbus.writeday)=6, jangbus.numo, 0) ) as s6,
					sum( if(month(jangbus.writeday)=7, jangbus.numo, 0) ) as s7,
					sum( if(month(jangbus.writeday)=8, jangbus.numo, 0) ) as s8,
					sum( if(month(jangbus.writeday)=9, jangbus.numo, 0) ) as s9,
					sum( if(month(jangbus.writeday)=10, jangbus.numo, 0) ) as s10,
					sum( if(month(jangbus.writeday)=11, jangbus.numo, 0) ) as s11,
					sum( if(month(jangbus.writeday)=12, jangbus.numo, 0) ) as s12'))->
			where(DB::raw('year(jangbus.writeday)'), '=', $text1)->
			where('jangbus.io', '=', 1)->
			orderby('products.name')->
			groupby('products.name')->
			paginate(5)->appends($text1);
		
		return $result;
	}
	
	public function getlist_product()
	{
		//
	}
	
	public function save_row(Request $request, $row)
	{
		//
		
	}
	
	public function qstring()
	{
		//
	}
	
}