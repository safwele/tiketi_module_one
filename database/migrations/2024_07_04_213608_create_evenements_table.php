<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEvenementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evenements', function (Blueprint $table) {
            $table->id('idEvenement');
            $table->string('nomEvenement');
            $table->integer('nbrplaceidEvenement');
            $table->string('tokenidEvenement',94)->unique();
            $table->dateTime("heureDebutEvenement");
            $table->string("isValidateEvenement");
            $table->integer('comptes_ev')->foreign('comptes_ev')->references('idComptes')->on('comptes');
            $table->integer('categ_idcateg_ev')->foreign('categ_idcateg_ev')->references('idCategoriePlaces')->on('categorie_places');
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
        Schema::dropIfExists('evenements');
    }
}
