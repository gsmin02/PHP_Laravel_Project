<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('one__ledgers', function (Blueprint $table) {
            $table->id();
			$table->tinyinteger('inout')->nullable();
			$table->date('trade_date')->nullable();
			$table->integer('product_id')->nullable();
			$table->integer('unit_price')->nullable();
			$table->integer('in_num')->nullable();
			$table->integer('out_num')->nullable();
			$table->integer('total_price')->nullable();
			$table->string('memo', 100)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('one__ledgers');
    }
};
