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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->string('agence');
            $table->string('codebus');
            $table->string('categorie');
            $table->string('depart');
            $table->string('destination');
            $table->integer('prix');
            $table->string('jour');
            $table->string('heure');
            $table->string('voyageur');
            $table->string('cni');
            $table->string('telephone');
            $table->string('username');
            $table->string('date_reservation');
            $table->string('heure_reservation');
            $table->integer('etat');
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
        Schema::dropIfExists('reservations');
    }
};
