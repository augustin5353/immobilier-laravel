<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('biens', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->string('descrition');            
            $table->integer('nombrePiece');         
            $table->integer('prix');         
            $table->string('adresse');         
            $table->string('ville');         
            $table->integer('nombreChampbre');         
            $table->integer('nombreEtage');         
            $table->decimal('superficie');         
            $table->boolean('estVendu')->default(1);         

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('biens');
    }
};
