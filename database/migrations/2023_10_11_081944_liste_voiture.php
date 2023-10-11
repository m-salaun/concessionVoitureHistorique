<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ListeVoiture extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listVoiture', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_Modele');
            $table->date('date'); 
            $table->unsignedBigInteger('kilometre');
            $table->integer('puissances');
            $table->text('energie');
            $table->integer('prix');
            $table->timestamps();

            $table->foreign('id_Modele')->references('id')->on('modeles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('listVoiture');
    }
}
