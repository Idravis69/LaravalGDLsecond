<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->text('typeboite');
            $table->text('immatriculation');
            $table->text('couleur');
            $table->integer('nportes');
            $table->integer('klm');
            $table->integer('nplaces');
            $table->boolean('climatisation');
            $table->text('carburant');
            $table->text('categorie');
            $table->text('photo');
            $table->text('permis');
            $table->integer('prixparj');
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
        Schema::dropIfExists('cars');
    }
};
