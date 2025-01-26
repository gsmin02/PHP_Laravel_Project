<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\One_Concept;
use Image;

class ConceptController extends Controller
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
		
		return view('admin.concept.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		$data['tmp'] = $this->qstring();
		
		return view('admin.concept.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		$row = new One_Concept;
		$this->save_row($request, $row);
		
		$tmp = $this->qstring();
		return redirect('concept' . $tmp);
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
        $data['row'] = One_Concept::find($id);
		
		return view('admin.concept.show', $data);
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
        $data['row'] = One_Concept::find($id);
		
		return view('admin.concept.edit', $data);
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
		$row = One_Concept::find($id);
		$this->save_row($request, $row);

		$tmp = $this->qstring();
		return redirect('concept' . $tmp);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        One_Concept::find($id)->delete();
		
		$tmp = $this->qstring();
		return redirect('concept' . $tmp);
    }
	
	public function getlist($text1)
	{
		$result = One_Concept::where('name', 'like', '%' . $text1 . '%') -> orderby('name', 'asc')
		->paginate(6)->appends( ['text1' => $text1] );
		
		return $result;
	}
	
	public function save_row(Request $request, $row)
	{
		$request->validate([
			'name' => 'required'
		],
		[
			'name.required' => 'Name is required.'
		]);
		
		$row->name=$request->input('name');
		$row->description=$request->input('description');
		
		if($request->hasFile('picture'))
		{
			$picture = $request->file('picture');
			$picture_name = $picture->getClientOriginalName();
			$picture->storeAs('public/product_img', $picture_name);
			
			$image = Image::make( $picture )
				->resize(null, 800, function($constraint) { $constraint-> aspectRatio(); })
				->save('storage/product_img/thumb/' . $picture_name);
			
			$row->picture = $picture_name;
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
	
}