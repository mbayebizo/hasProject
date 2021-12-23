<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepartmentsTable extends Migration
{
    public function up()
    {
        Schema::create('departments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('department')->nullable();
            $table->timestamps();
        });
        DB::table('departments')->insert([
            ['department' => 'Has France'],
            ['department' => 'Has Senegal'],
            ['department' => 'Has Mali'],
            ['department' => 'Has Cote Ivoire'],
        ]);
    }

    public function down()
    {
        Schema::dropIfExists('departments');
    }
}
