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
        Schema::create('classification', function (Blueprint $table) {
            $table->id();

            $table->foreignId('id_candidacy')->constrained('candidacy');
            
            $table->float('cr_score');
            $table->float('interview_score');
            $table->enum('situation', ['Habilitado', 'Inabilitado', 'Desclassificado']);
            $table->enum('reason_disqualified', ['Esperar RH']);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('classification');
    }
};
