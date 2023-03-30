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
        Schema::create('voyages', function (Blueprint $table) {
            $table->id();
            $table->string('codeagence');
            $table->string('depart');
            $table->string('codebus');
            $table->string('chauffeur');
            $table->string('categorie');
            $table->string('destination');
            $table->integer('prix');
            $table->integer('places');
            $table->string('jour');
            $table->string('heure');
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
        Schema::dropIfExists('voyages');
    }
};
