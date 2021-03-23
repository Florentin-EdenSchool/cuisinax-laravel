<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PlatIngredient extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plat_ingredients', function (Blueprint $table) {
            $table->unsignedBigInteger('id_plat');
            $table->foreign('id_plat')
                ->references('id_plat')
                ->on('plats')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->unsignedBigInteger('id_ingredient');
            $table->foreign('id_ingredient')
                ->references('id_ingredient')
                ->on('ingredients')
                ->onDelete('cascade')
                ->onUpdate('cascade');
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
        Schema::dropIfExists('plat_ingredient');
    }
}
