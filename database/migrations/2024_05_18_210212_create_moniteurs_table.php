<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoniteursTable extends Migration
{
    public function up()
    {
        Schema::create('moniteurs', function (Blueprint $table) {
            $table->id();
            $table->string('nom_complet');
            $table->date('date_naissance');
            $table->string('adresse')->nullable();
            $table->string('email')->nullable();
            $table->string('telephone')->nullable();
            $table->string('cin')->unique();
            $table->date('date_recrutement');
            $table->enum('type_moniteur', ['theorique', 'pratique']);
            $table->foreignId('vehicule_id')->constrained('vehicules')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('moniteurs');
    }
}
