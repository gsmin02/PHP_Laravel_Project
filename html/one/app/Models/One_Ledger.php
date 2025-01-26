<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class One_Ledger extends Model
{
    use HasFactory;
	protected $fillable = [
		'inout',
		'trade_date',
		'product_id',
		'unit_price',
		'in_num',
		'out_num',
		'total_price',
		'memo'
	];
}
