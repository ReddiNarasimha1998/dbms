<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHostelComplaintsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hostelcomplaints', function (Blueprint $table) {
            $table->integer('id');
            $table->integer('reference_no')->unique();
            $table->string('rollnumber');
            $table->text('type');
            $table->longText('description');
            $table->string('status');
            $table->timestamps();
            $table->primary('id');
            $table->foreign('rollnumber')->references('rollnumber')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('complaints');
    }
}
