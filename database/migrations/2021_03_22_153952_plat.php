<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Plat extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plats', function (Blueprint $table) {
            $table->id('id_plat');
            $table->unsignedBigInteger('id_origine');
            $table->foreign('id_origine')
                ->references('id_origine')
                ->on('origines')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->unsignedBigInteger('id_type_plat');
            $table->foreign('id_type_plat')
                ->references('id_type_plat')
                ->on('type_plats')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->unsignedBigInteger('id_type_nourriture');
            $table->foreign('id_type_nourriture')
                ->references('id_type_nourriture')
                ->on('type_nourritures')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->integer('prix');
            $table->integer('poids');
            $table->string('libelle');
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
        Schema::dropIfExists('plats');
    }
}