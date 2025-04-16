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
        Schema::create('complementary_experience', function (Blueprint $table) {
            $table->id();

            $table->foreignId('id_person')->constrained('person');

            $table->enum('type_experience', ['Idioma', 'Curso']);
            $table->string('title');
            $table->string('description');
            $table->enum('level_language', ['Básico', 'Intermediário', 'Avancado', 'Fluente/Nativo']);
            $table->string('certificate');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('institution');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('complementary_experience');
    }
};
