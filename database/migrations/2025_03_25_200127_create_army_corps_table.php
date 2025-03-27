<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('army_corps', function (Blueprint $table) {
            $table->id(); 
            $table->string('denomination');
            $table->timestamps();
        });
        
    }


    public function down(): void
    {
        Schema::dropIfExists('army_corps');
    }
};
