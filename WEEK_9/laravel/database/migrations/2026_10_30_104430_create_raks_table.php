<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('raks', function (Blueprint $table) {
            $table->id();
            $table->string('nama_zona');
            $table->string('no_lorong');
            $table->string('kode_rak');
            $table->integer('kapasitas_fisik');
            $table->timestamps();
        });
    }

 
    public function down(): void
    {
        Schema::dropIfExists('raks');
    }
};
