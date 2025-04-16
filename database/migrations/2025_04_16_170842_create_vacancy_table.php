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
        Schema::create('vacancy', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('responsibilities')->nullable();
            $table->text('requirements')->nullable();
            $table->string('workload');
            $table->float('remuneration');
            $table->string('benefits')->nullable();
            $table->integer('quantity');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('type_vacancy');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vacancy');
    }
};
