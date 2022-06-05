<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ClassTeacher extends Migration
{
    public function up()
    {
        Schema::create('classteachers', function (Blueprint $table) {
            $table->id();
            $table->string('ClassName');
            $table->integer('teacherId');
        });
    }

    public function down()
    {
        Schema::dropIfExists('class');
    }
}
