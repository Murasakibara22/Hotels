<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrenotazionisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prenotazionis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('details');
            $table->date('arrive');
            $table->date('depart');
            $table->string('NbAdultes');
            $table->string('NbEnfants');
            $table->string('contact');
            $table->timestamps();
            $table->unsignedBigInteger('id_users');
            $table->foreign('id_users')->on('users')->references('id')->onDelete('cascade');

            $table->unsignedBigInteger('id_pagamentidi');
            $table->foreign('id_pagamentidi')->on('pagamentidis')->references('id')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prenotazionis');
    }
}
