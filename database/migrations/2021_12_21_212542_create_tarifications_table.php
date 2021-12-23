<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTarificationsTable extends Migration
{
    public function up()
    {
        Schema::create('tarifications', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nom');
            $table->string('category');
            $table->double('prix');
            $table->string('pays');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tarifications');
    }
}
