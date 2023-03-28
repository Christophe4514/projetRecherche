<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIntervationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('intervations', function (Blueprint $table) {
            $table->id();
            $table->string('heure_debut_intervention');
            $table->string('heure_fin_intervention');
            $table->string('num_intervation');
            $table->integer('seminaire_id', false, true);
            $table->integer('theme_id', false, true);
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
        Schema::dropIfExists('intervations');
    }
}
