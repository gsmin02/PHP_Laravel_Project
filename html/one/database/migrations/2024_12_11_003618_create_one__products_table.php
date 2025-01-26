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
        Schema::create('one__products', function (Blueprint $table) {
            $table->id();
			$table->integer('gubun_id')->nullable();
			$table->integer('concept_id')->nullable();
			$table->string('name',50)->nullable();
			$table->integer('stock')->nullable();
			$table->string('description',100)->nullable();
			$table->string('pic',255)->nullable();
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
        Schema::dropIfExists('one__products');
    }
};
