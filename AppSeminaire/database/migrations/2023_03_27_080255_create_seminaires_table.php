<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeminairesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seminaires', function (Blueprint $table) {
            $table->id();
            $table->string('lieu');
            $table->string('heure_debut');
            $table->string('heure_fin');
            $table->string('num_jour');
            $table->string('jour');
            $table->string('mois');
            $table->string('annee');
            $table->integer('moderateur_id', false, true);
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
        Schema::dropIfExists('seminaires');
    }
}
