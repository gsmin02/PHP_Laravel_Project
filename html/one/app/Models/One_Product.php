<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class One_Product extends Model
{
    use HasFactory;
	protected $fillable = [
		'gubun_id',
		'concept_id',
		'name',
		'price',
		'stock',
		'description',
		'picture'
	];
}
