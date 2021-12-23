<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePositionTypesTable extends Migration
{
    public function up()
    {
        Schema::create('position_types', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('position')->nullable();
            $table->timestamps();
        });

        DB::table('position_types')->insert([
            ['position' => 'Manager'],
            ['position' => 'Enleveur'],
            ['position' => 'Agent Saisie'],
        ]);
    }

    public function down()
    {
        Schema::dropIfExists('position_types');
    }
}
