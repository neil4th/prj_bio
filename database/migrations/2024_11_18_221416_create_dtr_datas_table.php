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
        Schema::create('dtr_datas', function (Blueprint $table) {
            $table->id();
            $table->string('emp_id')->nullable();
            $table->date('day');
            $table->string('time_in_morning')->nullable();
            $table->string('time_out_morning')->nullable();
            $table->string('time_in_afternoon')->nullable();
            $table->string('time_out_afternoon')->nullable();
            $table->integer('undertime_morning')->nullable(); // in minutes
            $table->integer('undertime_afternoon')->nullable(); // in minutes
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
        Schema::dropIfExists('dtr_datas');
    }
};
