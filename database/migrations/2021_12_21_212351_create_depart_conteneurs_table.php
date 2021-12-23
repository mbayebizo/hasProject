<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepartConteneursTable extends Migration
{
    public function up()
    {
        Schema::create('depart_conteneurs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('pays');
            $table->string('nom_conteneur')->unique();
            $table->date('date_depart');
            $table->date('date_arrive');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('depart_conteneurs');
    }
}
