<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentclassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('studentclasses', function (Blueprint $table) {
            $table->integer('classid')->references('id')->on('class_teachers');
            $table->integer('studentid')->references('id')->on('users');;
            $table->double('First')->nullable();
            $table->double('Mid')->nullable();
            $table->double('Final')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('studentclasses');
    }
}
