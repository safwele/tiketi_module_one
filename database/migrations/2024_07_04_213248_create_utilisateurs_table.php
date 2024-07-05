<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUtilisateursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('utilisateurs', function (Blueprint $table) {
            $table->id('idUtilisateur');
            $table->string('nomUtilisateur');
            $table->string('postnomUtilisateur');
            $table->string('prenomUtilisateur');
            $table->string("genreUtilisateur");
            $table->string("emailUtilisateur");
            $table->string("telUtilisateur");
            $table->integer('comptes_user')->foreign('comptes_user')->references('idComptes')->on('comptes');
            // clé étrangere de la table comptes
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('utilisateurs');
    }
}
