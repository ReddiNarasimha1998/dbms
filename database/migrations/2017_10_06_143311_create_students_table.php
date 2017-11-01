<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->string('firstname')->default('firstname');
            $table->string('middlename')->default('middlename');
            $table->string('lastname')->default('lastname');
            $table->string('deptid');
            $table->string('hostel')->default('hostel');
            $table->string('roomnumber')->default('roomnumber');
            //$table->string('gender');
            $table->string('mess_block')->default('mess_block');
            $table->bigInteger('phone_number')->default('0000000000');
            $table->string('messrollno')->default('messrollnumbber');
            $table->string('roll_number')->default('roll_number');
            $table->string('email');
            $table->foreign('email')->references('username')->on('users');
            $table->foreign('roll_number')->references('rollnumber')->on('users');
            $table->foreign('deptid')->references('deptid')->on('departments');
           // $table->unique(array('mess_block','messrollno'));
            //$table->unique(array('hostel','roomnumber'));
            $table->primary('roll_number');
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
        Schema::dropIfExists('students');
    }
}
