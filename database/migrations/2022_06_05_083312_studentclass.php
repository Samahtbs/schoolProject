<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Studentclass extends Migration
{

    public function up()
    {
        Schema::create('studentclass', function (Blueprint $table) {
            $table->integer('classid');
            $table->integer('studentid');
            $table->double('First')->nullable();
            $table->double('Mid')->nullable();
            $table->double('Final')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('studentclass');
    }
}
