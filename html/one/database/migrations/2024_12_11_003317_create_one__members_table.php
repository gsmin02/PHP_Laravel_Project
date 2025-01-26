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
        Schema::create('one__members', function (Blueprint $table) {
            $table->id();
			
			$table->string('name',20);
			$table->string('user_id',20);
			$table->string('pw',20);
			$table->string('tel',11)->nullable();
			$table->string('address',100)->nullable();
			$table->tinyinteger('rank')->nullable()->default(0);
			
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
        Schema::dropIfExists('one__members');
    }
};
