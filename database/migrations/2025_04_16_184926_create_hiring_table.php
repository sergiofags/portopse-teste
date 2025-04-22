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
        Schema::create('hiring', function (Blueprint $table) {
            $table->id();

            $table->foreignId('id_vacancy')->constrained('vacancy');
            $table->foreignId('id_person')->constrained('person');
            $table->foreignId('id_candidacy')->constrained('candidacy');
            $table->foreignId('id_classification')->constrained('classification');

            $table->date('date_hiring');
            $table->date('date_exam');
            $table->string('guilding_teacher');
            $table->string('academic_record');
            $table->string('contract_number');
            $table->string('insurance_policy');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hiring');
    }
};
