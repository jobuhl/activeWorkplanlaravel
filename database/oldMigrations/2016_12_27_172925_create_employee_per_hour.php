<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeePerHour extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_per_hour', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date');
            $table->string('start');
            $table->string('end');

            $table->timestamps();

            $table->integer('retail_store_id')->unsigned();
            $table->foreign('retail_store_id')->references('id')->on('retail_store');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employee_per_hour');
    }
}
