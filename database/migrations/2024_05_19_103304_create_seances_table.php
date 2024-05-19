<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seances', function (Blueprint $table) {
            $table->id();
            $table->enum('type_seance', ['theorique', 'pratique']);
            $table->date('date_debut');
            $table->date('date_fin');
            $table->string('horaire');
            $table->foreignId('moniteur_id')->constrained('moniteurs')->onDelete('cascade');
            $table->foreignId('candidat_id')->constrained('condidats')->onDelete('cascade');
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
        Schema::dropIfExists('seances');
    }
}
