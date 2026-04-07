<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // Creamos la tabla 'propiedades' con los campos exactos
        Schema::create('propiedades', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_inmueble'); 
            $table->string('ubicacion');
            $table->decimal('valor', 15, 2);
            $table->string('estado');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('propiedades');
    }
};