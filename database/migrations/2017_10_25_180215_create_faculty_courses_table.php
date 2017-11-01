<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFacultyCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faculty_courses', function (Blueprint $table) {
            //$table->increments('id');
            $table->string('coursecode');
            $table->string('fid');
            $table->foreign('coursecode')->references('coursecode')->on('courses');
            $table->foreign('fid')->references('name')->on('faculties');
            $table->primary(array('coursecode','fid'));
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
        Schema::dropIfExists('faculty_courses');
    }
}
