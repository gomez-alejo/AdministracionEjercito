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
        Schema::create('army_corps', function (Blueprint $table) {
            $table->id(); // Laravel generará 'id' como BIGINT UNSIGNED AUTO_INCREMENT
            $table->integer('denomination');
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('army_corps');
    }
};
