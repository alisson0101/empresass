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
        Schema::create('vagas', function (Blueprint $table) {
        $table->id();
        $table->string('cargo');
        $table->float('renumeracao');
        $table->string('exigencias');
        $table->string('responsa');
        $table->string('cnpj');
        $table->foreign('cnpj')->references('cnpj')->on('empresas')->onDelete('cascade');
        $table->timestamps();
    });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vagas');
    }
};
