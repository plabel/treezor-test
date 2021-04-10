<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWsUtilisateurTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('ws_utilisateur', function (Blueprint $table) {
            $table->id();
            $table->string('nom', 100);
            $table->string('prenom', 100);
            $table->text('email');
            $table->date('date_naissance');
            $table->boolean('actif')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('ws_utilisateur');
    }
}
