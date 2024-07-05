<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('places', function (Blueprint $table) {
            $table->id("idPlace");
            $table->string('identifiantPlace');
            $table->string('typePlace');
            $table->string('coordonnee');
            $table->integer('is_freePlace');
            $table->integer("place_categ")->foreign('place_categ')->references('idCategoriePlaces')->on('categorie_places');
           // $table->integer('categ_idcateg_ev')->foreign('categ_idcateg_ev')->references('idCategoriePlaces')->on('categorie_places');
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
        Schema::dropIfExists('places');
    }
}
