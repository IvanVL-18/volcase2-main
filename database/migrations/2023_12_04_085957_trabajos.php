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
        Schema::create('trabajos', function (Blueprint $table) {
            $table->id();
            $table->string('trabajo')->nullable();
            $table->text('descripcion')->nullable();
            $table->date('fecha_Inicio')->nullable();
            $table->date('fecha_Fin')->nullable();
            $table->text('comentario')->nullable();
            $table->enum('status',['Asignada','Completada']);
            // Agregar la clave foránea
            $table->foreignId('ID_Trabajador')->constrained('users');
        
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trabajos');
    }
};
