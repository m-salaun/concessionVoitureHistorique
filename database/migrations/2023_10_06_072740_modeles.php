<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Modeles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modeles', function (Blueprint $table) {
            $table->id();
            $table->text('modele');
            $table->unsignedBigInteger('idMarque');
            $table->text('nombreEnStock');
            $table->timestamps();

            $table->foreign('idMarque')->references('id')->on('cars');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('modeles');

    }
}