<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\Jangbu;

require "../vendor/autoload.php";
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;

class GiganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
		$text1 = $request->input('text1');
		if(!$text1) $text1=date("Y-m-d", strtotime("-1 month"));
		
		$text2 = $request->input('text2');
		if(!$text2) $text2=date("Y-m-d");
		
		$text3 = $request->input('text3');
		if(!$text3) $text3=0;
		
		$data['text1'] = $text1;
        $data['text2'] = $text2;
        $data['text3'] = $text3;
        $data['list'] = $this->getlist($text1, $text2, $text3);
		
		$data['list_product'] = $this->getlist_product();
		
		return view('gigan.index', $data);
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
	
	public function getlist($text1, $text2, $text3)
	{
		if($text3==0) {
			$result = Jangbu::leftjoin('products', 'jangbus.products_id','=','products.id')->
			select('jangbus.*','products.name as products_name')->
			wherebetween('jangbus.writeday', array($text1, $text2))->
			orderby('jangbus.id', 'desc')->
			paginate(5)->appends(['text1'=>$text1, 'text2'=>$text2, 'text3'=>$text3]);
		} else {
			$result = Jangbu::leftjoin('products', 'jangbus.products_id','=','products.id')->
			select('jangbus.*','products.name as products_name')->
			wherebetween('jangbus.writeday', array($text1, $text2))->
			where('jangbus.products_id', "=", $text3)->
			orderby('jangbus.id', 'desc')->
			paginate(5)->appends(['text1'=>$text1, 'text2'=>$text2, 'text3'=>$text3]);
		}
		
		return $result;
	}
	
	public function getlist_all($text1, $text2, $text3)
	{
		if($text3==0) {
			$result = Jangbu::leftjoin('products', 'jangbus.products_id','=','products.id')->
			select('jangbus.*','products.name as products_name')->
			wherebetween('jangbus.writeday', array($text1, $text2))->
			orderby('jangbus.id', 'desc')->get();
		} else {
			$result = Jangbu::leftjoin('products', 'jangbus.products_id','=','products.id')->
			select('jangbus.*','products.name as products_name')->
			wherebetween('jangbus.writeday', array($text1, $text2))->
			where('jangbus.products_id', "=", $text3)->
			orderby('jangbus.id', 'desc')->get();
		}
		
		return $result;
	}
	
	public function getlist_product()
	{
		$result = Product::orderby('name')->get();
		
		return $result;
	}
	
	public function save_row(Request $request, $row)
	{
		//
		
	}
	
	public function qstring()
	{
		//
	}
	
	public function excel() {
		$text1 = request('text1');
		$text2 = request('text2');
		$text3 = request('text3');
		
		$list = $this->getlist_all($text1, $text2, $text3);
		
		$sheet = new Spreadsheet();
		
		$sheet->getActiveSheet()->getColumnDimension("A")->setWidth(12);
		$sheet->getActiveSheet()->getColumnDimension("B")->setWidth(25);
		$sheet->getActiveSheet()->getColumnDimension("C")->setWidth(12);
		$sheet->getActiveSheet()->getColumnDimension("D")->setWidth(12);
		$sheet->getActiveSheet()->getColumnDimension("E")->setWidth(12);
		$sheet->getActiveSheet()->getColumnDimension("F")->setWidth(12);
		$sheet->getActiveSheet()->getColumnDimension("G")->setWidth(12);
		
		$sheet->getActiveSheet()->getStyle("A")->getAlignment()->setHorizontal("center");
		$sheet->getActiveSheet()->getStyle("B")->getAlignment()->setHorizontal("left");
		$sheet->getActiveSheet()->getStyle("C:F")->getAlignment()->setHorizontal("right");
		$sheet->getActiveSheet()->getStyle("G")->getAlignment()->setHorizontal("left");
		
		$sheet->setActiveSheetIndex(0)->setCellValue("A1", "매출입장");
		$sheet->getActiveSheet()->getStyle("A1")->getFont()->setSize(13);
		$sheet->getActiveSheet()->getStyle("A1")->getFont()->setBold(true);
		
		$sheet->setActiveSheetIndex(0)->setCellValue("G1", "기간: $text1 - $text2");
		$sheet->getActiveSheet()->getStyle("G1")->getAlignment()->setHorizontal("right");
		
		$sheet->getActiveSheet()->getStyle("A2:G2")->getAlignment()->setHorizontal("center");
		$sheet->getActiveSheet()->getStyle("A2:G2")->getFill()
			->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
			->getStartColor()->setARGB("FFCCCCCC");
		
		$sheet->setActiveSheetIndex(0)
			->setCellValue("A2", "날짜")
			->setCellValue("B2", "제품명")
			->setCellValue("C2", "단가")
			->setCellValue("D2", "매입수량")
			->setCellValue("E2", "매출수량")
			->setCellValue("F2", "금액")
			->setCellValue("G2", "비고");
		
		$i=3;
		foreach($list as $row)
		{
			$sheet->setActiveSheetIndex(0)
				->setCellValue("A$i", $row->writeday)
				->setCellValue("B$i", $row->products_name)
				->setCellValue("C$i", $row->price ? $row->price : "")
				->setCellValue("D$i", $row->numi ? $row->numi : "")
				->setCellValue("E$i", $row->numo ? $row->numo : "")
				->setCellValue("F$i", $row->prices ? $row->prices : "")
				->setCellValue("G$i", $row->bigo);
			$i++;
		}
		
		$sheet->setActiveSheetIndex(0);
		
		$fname="매출입장($text1 - $text2).xlsx";
		header("Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
		header("Content-Disposition: attachment;filename=$fname");
		header("Cache-Control: max-age=0");
		
		$writer = IOFactory::createWriter($sheet, "Xlsx");
		$writer->save("php://output");
	}
	
	
}