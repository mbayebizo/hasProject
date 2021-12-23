<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolesPermissionsTable extends Migration
{
    public function up()
    {
        Schema::create('roles_permissions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('permissions_name')->nullable();
            $table->timestamps();
        });

        DB::table('roles_permissions')->insert(
            [
                ['permissions_name' => 'Administrator'],
                ['permissions_name' => 'Manager'],
                ['permissions_name' => 'Enleveur'],
                ['permissions_name' => 'Agent Saisie'],
            ]);
    }

    public function down()
    {
        Schema::dropIfExists('roles_permissions');
    }
}
