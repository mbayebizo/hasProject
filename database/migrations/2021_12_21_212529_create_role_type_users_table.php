<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoleTypeUsersTable extends Migration
{
    public function up()
    {
        Schema::create('role_type_users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('role_type')->nullable();
            $table->timestamps();
        });

        DB::table('role_type_users')->insert([
            ['role_type' => 'Admin'],
            ['role_type' => 'Super Admin'],
            ['role_type' => 'Agent Saisie '],
            ['role_type' => 'Enleveur'],
        ]);
    }

    public function down()
    {
        Schema::dropIfExists('role_type_users');
    }
}
