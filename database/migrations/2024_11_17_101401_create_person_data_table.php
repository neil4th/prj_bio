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
        Schema::create('person_datas', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('middlename')->nullable();
            $table->string('lastname');
            $table->string('name_ext')->nullable();
            $table->string('dateofbirth');
            $table->string('sex')->nullable();
            $table->string('address')->nullable();
            $table->string('contact_number');
            $table->string('email')->nullable();
            $table->string('civil_status');
            $table->string('citizenship');
            $table->string('height')->nullable();
            $table->string('weight')->nullable();
            $table->string('religion')->nullable();
            $table->string('spouse')->nullable();
            $table->string('spouse_occupation')->nullable();
            $table->string('name_of_children')->nullable();
            $table->string('father')->nullable();
            $table->string('father_occupation')->nullable();
            $table->string('mother')->nullable();
            $table->string('mother_occupation')->nullable();
            $table->string('language_dialect')->nullable();
            $table->string('contact_person_name')->nullable();
            $table->string('contact_person_number')->nullable();
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
        Schema::dropIfExists('person_data');
    }
};
