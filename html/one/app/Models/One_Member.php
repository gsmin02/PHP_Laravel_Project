<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class One_Member extends Model
{
    use HasFactory;
	
	protected $fillable = [
		'name',
		'user_id',
		'pw',
		'tel',
		'address',
		'rank'
	];
}
