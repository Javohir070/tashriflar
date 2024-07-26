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
        Schema::create('tashrifs', function (Blueprint $table) {
            $table->id();
            $table->string('fish');
            $table->string('tashkilot');
            $table->string('jinsi');
            $table->string('maqsad');
            $table->string('sana');
            $table->string('sabab');
            $table->string('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tashrifs');
    }
};
