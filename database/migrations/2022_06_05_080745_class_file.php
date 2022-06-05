<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ClassFile extends Migration
{
    public function up()
    {
        Schema::create('classFile', function (Blueprint $table) {
            $table->integer('classid');
            $table->string('FileName');
            $table->string('FileDecoded');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('classFile');
    }
}
