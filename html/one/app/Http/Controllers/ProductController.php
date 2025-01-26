<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\One_Product;
use App\Models\One_Gubun;
use App\Models\One_Concept;
use Image;

class ProductController extends Controller
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
		
		return view('admin.product.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		$data['list_gubun']= $this->getlist_gubun();
		$data['list_concept']= $this->getlist_concept();
		$data['tmp'] = $this->qstring();
		
		return view('admin.product.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		$row = new One_Product;
		$this->save_row($request, $row);
		
		$tmp = $this->qstring();
		return redirect('products' . $tmp);
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
		$data['row'] = One_Product::leftJoin('one__gubuns', 'one__products.gubun_id', '=', 'one__gubuns.id')
		->leftJoin('one__concepts', 'one__products.concept_id', '=', 'one__concepts.id')
		->select('one__products.*', 'one__gubuns.name as gubuns_name', 'one__concepts.name as concepts_name')
		->where('one__products.id','=', $id)->first();
		
		return view('admin.product.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
		$data['list_gubun']= $this->getlist_gubun();
		$data['list_concept']= $this->getlist_concept();
		$data['tmp'] = $this->qstring();
        $data['row'] = One_Product::find($id);
		
		return view('admin.product.edit', $data);
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
		$row = One_Product::find($id);
		$this->save_row($request, $row);

		$tmp = $this->qstring();
		return redirect('products' . $tmp);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        One_Product::find($id)->delete();
		
		$tmp = $this->qstring();
		return redirect('products' . $tmp);
    }
	
	public function getlist($text1)
	{
		$result = One_Product::leftJoin('one__gubuns', 'one__products.gubun_id', '=', 'one__gubuns.id')
		->leftJoin('one__concepts', 'one__products.concept_id', '=', 'one__concepts.id')
		->select('one__products.*','one__gubuns.id as gubuns_id', 'one__concepts.id as concepts_id')
		->where('one__products.name', 'like', '%'.$text1.'%')
		->orderby('one__products.name', 'asc')
		->paginate(6)
		->appends(['text1' => $text1]);

		return $result;
	}
	
	public function save_row(Request $request, $row)
	{
		$request->validate([
			'name' => 'required',
			'stock' => 'required|numeric'
		],
		[
			'name.required' => 'Name is required.',
			'stock.required' => 'stock is required.'
		]);
		
		$row->gubun_id=$request->input('gubuns_id');
		$row->concept_id=$request->input('concepts_id');
		$row->name=$request->input('name');
		$row->price=$request->input('price');
		$row->stock=$request->input('stock');
		$row->description=$request->input('description');
		
		if($request->hasFile('pic'))
		{
			$picture = $request->file('pic');
			$picture_name = $picture->getClientOriginalName();
			$picture->storeAs('public/product_img', $picture_name);
			
			$image = Image::make( $picture )
				->resize(null, 800, function($constraint) { $constraint-> aspectRatio(); })
				->save('storage/product_img/thumb/' . $picture_name);
			
			$row->pic = $picture_name;
		}
		
		$row->save();
		
	}
	
	public function qstring()
	{
		$text1 = request("text1") ? request("text1") : "";
		$page = request("page") ? request("page") : "1";
		
		$tmp = $text1 ? "?text1=$text1&page=$page" : "?page=$page";
		
		return $tmp;
	}
	
	public function getlist_gubun()
	{
		$result = One_Gubun::orderby('name')->get();
		
		return $result;
	}
	
	public function getlist_concept()
	{
		$result = One_Concept::orderby('name')->get();
		
		return $result;
	}
	
	public function stock()
	{
		DB::statement('drop table if exists one__temps;');
		DB::statement('create table one__temps(
			id int not null auto_increment,
			product_id int,
			stock int default 0,
			primary key(id));');
		DB::statement('update one__products set stock=0;');
		DB::statement('insert into one__temps (product_id, stock)
			select product_id, sum(in_num)-sum(out_num)
			from one__ledgers
			group by product_id;');
		DB::statement('update one__products join one__temps on one__products.id=one__temps.product_id
			set one__products.stock=one__temps.stock; ');
			
		return redirect('products');
	}
}