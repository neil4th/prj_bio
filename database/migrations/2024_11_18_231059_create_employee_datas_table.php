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
        Schema::create('employee_datas', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('person_id');
            $table->string('employee_number')->unique; //bps-2020-01
            $table->string('employment_date');
            $table->string('employment_status');
            $table->string('position');
            $table->string('department');
            $table->string('supervisor');
            $table->string('manager');
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
        Schema::dropIfExists('employee_datas');
    }
};
