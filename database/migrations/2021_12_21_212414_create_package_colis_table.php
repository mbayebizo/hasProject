<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackageColisTable extends Migration
{
    public function up()
    {
        Schema::create('package_colis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name_exp');
            $table->boolean('societe_exp')->nullable(true);
            $table->string('adresse_exp');
            $table->string('ville_exp');
            $table->string('pays_exp');
            $table->string('email_exp')->nullable(true);
            $table->string('phone_exp');
            $table->string('name_dest');
            $table->boolean('societe_dest')->default(false)->nullable(true);
            $table->string('ville_dest');
            $table->string('pays_dest');
            $table->string('email_dest')->nullable(true);
            $table->string('phone_dest');
            $table->string('nom_colis');
            $table->string('qte_colis');
            $table->dateTime('date_groupage')->nullable(true);
            $table->longText('code_bare')->nullable(true);
            $table->string("index_suivie")->unique();
            $table->string('reference')->unique();
            $table->date('date_arrive_prevu')->nullable(true);
            $table->date('date_depart_prevu')->nullable(true);
            $table->string('nom_conteneur');
            $table->integer('etat');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('package_colis');
    }
}
