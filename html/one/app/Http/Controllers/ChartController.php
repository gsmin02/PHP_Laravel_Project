<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\One_Product;
use App\Models\One_Ledger;
use App\Models\One_Gubun;

class ChartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
		if (session()->get('session_rank') != 2) {
            return view('admin.main.login');
        }
		$text1 = $request->input('text1');
		if(!$text1) $text1=date("Y-m-d", strtotime("-1 month"));
		
		$text2 = $request->input('text2');
		if(!$text2) $text2=date("Y-m-d");
		
		$data['text1'] = $text1;
		$data['text2'] = $text2;
		$list = $this->getlist($text1, $text2);
		
		$str_label="";
		$str_data="";
		
		foreach($list as $row)
		{
			$str_label .= "'$row->gubun_name',";
			$str_data .= $row->cnumo.',';
		}
		
		$data['str_label'] = $str_label;
		$data['str_data'] = $str_data;
		
		$data['test'] = "test";
		
		return view('admin.chart.index', $data);
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
	
	public function getlist($text1, $text2)
	{
		$result = One_Ledger::leftjoin('one__products', 'one__ledgers.product_id','=','one__products.id')->
			leftjoin('one__gubuns', 'one__products.gubun_id', '=', 'one__gubuns.id')->
			select('one__gubuns.name as gubun_name', DB::raw('count(one__ledgers.out_num) as cnumo'))->
			wherebetween('one__ledgers.trade_date', array($text1, $text2))->
			where('one__ledgers.inout', '=', 1)->
			orderby('cnumo', 'desc')->
			groupby('one__gubuns.name')->
			limit(14)->
			paginate(14)->appends(['text1'=>$text1, 'text2'=>$text2]);
		
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