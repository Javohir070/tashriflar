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
            $table->string('tashkilot',600);
            $table->string('jinsi');
            $table->string('email');
            $table->string('maqsad',1024);
            $table->string('sana');
            $table->string('sabab',1024)->nullable();
            $table->string('image',1024);
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
