<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

/*
	테이블 구조 정리
	
	One_Company	업체	 : id, name(업체명), tel(업체 번호), kind(업체 구분)
	
	One_Concept	컨셉	 : id, name(컨셉명), description(컨셉 설명), picture(컨셉 이미지)
	
	One_Gubun	구분	 : id, name(카테고리명)
	
	One_Ledger	장부	 : id, inout(매매 구분), trade_date(거래일), product_id(제품id),
						unit_price(단가), in_num(매입 수), out_num(매출 수), total_price(총 가격), memo(비고)
	
	One_Member	회원	 : id, name(회원명), user_id(개인id), pw(비밀번호), tel(전화번호), address(주소)
	
	One_Product	제품	 : id, gubun_id(구분id), concept_id(컨셉id), name(제품명),
						stock(재고), description(설명), pic(제품 이미지)

*/

class AdminController extends Controller
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
		
		return redirect(url('/concept'));
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