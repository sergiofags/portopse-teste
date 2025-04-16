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
        Schema::create('experience', function (Blueprint $table) {
            $table->id();

            $table->foreignId('id_person')->constrained('person');

            $table->enum('type_experience', ['Acadêmica', 'Profissional']);
            $table->enum('status', ['Trancado', 'Cursando', 'Formado', 'EmpregoAnterior', 'EmpregoAtual']);
            $table->string('company_institution')->nullable();
            $table->string('course_position')->nullable();
            $table->string('level')->nullable();
            $table->string('activity')->nullable();
            $table->string('semester_module')->nullable();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('experience');
    }
};
