<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\One_Member;

class LoginController extends Controller
{
	public function check()
	{
		$user_id = request('user_id');
		$pw = request('pw');
		
		$row = One_Member::where('user_id', '=', $user_id)->
			where('pw', '=', $pw)->first();
			
		if($row)
		{
			session()->put('session_id', $row->id);
			session()->put('session_user_id', $row->user_id);
			session()->put('session_name', $row->name);
			session()->put('session_rank', $row->rank);
		}
		
		return redirect(url('/main'));
	}
	
	public function admin_check()
	{
		$user_id = request('user_id');
		$pw = request('pw');
		
		$row = One_Member::where('user_id', '=', $user_id)->
			where('pw', '=', $pw)->first();
			
		if($row)
		{
			session()->put('session_id', $row->id);
			session()->put('session_user_id', $row->user_id);
			session()->put('session_name', $row->name);
			session()->put('session_rank', $row->rank);
		}
		
		return redirect(url('/admin'));
	}
	
	public function logout()
	{
		session()->forget('session_user_id');
		session()->forget('session_name');
		session()->forget('session_rank');
		
		return redirect(url('/main'));
	}
	
	public function admin_logout()
	{
		session()->forget('session_user_id');
		session()->forget('session_name');
		session()->forget('session_rank');
		
		return redirect(url('/admin'));
	}
	
}