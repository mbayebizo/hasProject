<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlanificationsTable extends Migration
{
    public function up()
    {
        Schema::create('planifications', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name_exp')->nullable(true);
            $table->boolean('societe_exp')->default(false)->nullable(true);
            $table->string('adresse_exp')->nullable(true);
            $table->string('ville_exp')->nullable(true);
            $table->string('pays_exp')->nullable(true);
            $table->string('email_exp')->nullable(true);
            $table->string('phone_exp')->nullable(true);
            $table->string('name_dest')->nullable(true);
            $table->boolean('societe_dest')->default(false)->nullable(true);
            $table->string('ville_dest')->nullable(true);
            $table->string('pays_dest')->nullable(true);
            $table->string('email_dest')->nullable(true);
            $table->string('phone_dest')->nullable(true);
            $table->string('nom_colis')->nullable(true);
            $table->string('qte_colis')->nullable(true);
            $table->date('date_enlevement')->nullable(true);
            $table->integer('decharge')->default(0);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('planifications');
    }
}
