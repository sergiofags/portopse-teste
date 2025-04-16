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
        Schema::create('process', function (Blueprint $table) {
            $table->id();

            $table->foreignId('id_vacancy')->constrained('vacancy');
            $table->foreignId('id_candidacy')->constrained('candidacy');

            $table->enum('status', ['Pendente', 'Aberto', 'Fechado']);
            $table->date('start_date');
            $table->date('end_date');
            $table->string('number_process')->unique();
            $table->string('edital');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('process');
    }
};
