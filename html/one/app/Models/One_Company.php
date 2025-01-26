<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class One_Company extends Model
{
    use HasFactory;
	protected $fillable = [
		'name',
		'tel',
		'kind'
	];
}
