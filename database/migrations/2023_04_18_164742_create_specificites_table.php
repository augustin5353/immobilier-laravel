<?php

use App\Models\Specificite;
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
        Schema::create('specificites', function (Blueprint $table) {
            $table->id();
            $table->string('designation');
            $table->string('description');
            $table->timestamps();
        });
        Schema::create('bien_potion', function (Blueprint $table) {
            $table->foreignIdFor(Bien::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Specificite::class)->constrained()->cascadeOnDelete();
            $table->primary(['bien_id', 'specificites_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('post_tag');
        Schema::dropIfExists('specificites');
    }
};
