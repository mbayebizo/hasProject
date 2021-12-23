<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserActivityLogsTable extends Migration
{
    public function up()
    {
        Schema::create('user_activity_logs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('user_name')->nullable();
            $table->string('email')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('status')->nullable();
            $table->string('role_name')->nullable();
            $table->string('modify_user')->nullable();
            $table->string('date_time')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('user_activity_logs');
    }
}
