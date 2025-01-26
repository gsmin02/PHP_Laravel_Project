<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\One_Product;
use App\Models\One_Ledger;

class RevenueController extends Controller
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
		if(!$text1) $text1=date("Y-m-d");
		
		$data['text1'] = $text1;
        $data['list'] = $this->getlist($text1);
		
		return view('admin.revenue.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		$data['list_product']=$this->getlist_product();
		
		$data['tmp'] = $this->qstring();
        return view('admin.revenue.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		$row = new One_Ledger;
		$this->save_row($request, $row);
		
		$check = request('check');
		if($check == 1) {
			return redirect('main');
		}
		
		$tmp = $this->qstring();
		return redirect('revenue' . $tmp);
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
        $data['row'] = One_Ledger::leftjoin('one__products', 'one__ledgers.product_id','=','one__products.id')->
			select('one__ledgers.*','one__products.name as product_name')->
			where('one__ledgers.id','=', $id)->first();
			
		return view('admin.revenue.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
		$data['list_product'] = $this->getlist_product();
		
		$data['tmp'] = $this->qstring();
        $data['row'] = One_Ledger::find($id);
		return view('admin.revenue.edit', $data);
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
		$row = One_Ledger::find($id);
		$this->save_row($request, $row);
		
		$tmp = $this->qstring();
		return redirect('revenue' . $tmp);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        One_Ledger::find($id)->delete();
		
		$tmp = $this->qstring();
		return redirect('revenue' . $tmp);
    }
	
	public function getlist($text1)
	{
		$result = One_Ledger::leftjoin('one__products', 'one__ledgers.product_id','=','one__products.id')->
			select('one__ledgers.*','one__products.name as product_name')->
			where('one__ledgers.inout', '=', 1)->
			where('one__ledgers.trade_date','=', $text1)->
			orderby('one__ledgers.id', 'desc')->
			paginate(5)->appends(['text1'=>$text1]);
		
		return $result;
	}
	
	public function getlist_product()
	{
		$result = One_Product::orderby('name')->get();
		
		return $result;
	}
	
	public function save_row(Request $request, $row)
	{
		$request->validate([
			'trade_date' => 'required|date',
			'product_id' => 'required'
		],
		[
			'trade_date.required' => 'The date is required.',
			'product_id.required' => 'Product name is required.',
			'trade_date.date' => 'The date format is invalid.'
		]);
		
		$row->inout=1;
		$row->trade_date=$request->input('trade_date');
		$row->product_id=$request->input('product_id');
		$row->unit_price=$request->input('unit_price');
		$row->in_num=0;
		$row->out_num=$request->input('out_num');
		$row->total_price=$request->input('total_price');
		$row->memo=$request->input('memo');
		
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