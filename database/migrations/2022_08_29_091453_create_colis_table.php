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
        Schema::create('colis', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('expediteur');
            $table->string('destinataire');
            $table->string('ville1');
            $table->string('ville2');
            $table->string('telephone1');
            $table->string('telephone2');
            $table->string('nom');
            $table->integer('frais_commission');
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
        Schema::dropIfExists('colis');
    }
};
