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
        Schema::create('person', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_user')->constrained('users');
            $table->string('name');
            $table->string('profile_photo')->nullable();
            $table->sting('about')->nullable();
            $table->string('linkedin_profile')->nullable();
            $table->string('cpf')->unique();
            $table->date('birthDate');
            $table->enum('gender', ['Masculino', 'Feminino', 'Outro']);
            $table->boolean('deficiency')->default(false);
            $table->boolean('militar_service')->default(false);
            $table->string('phone');
            $table->string('street_addres')->nullable();
            $table->string('neighborhood')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('house_number')->nullable();
            $table->string('complement')->nullable();
            $table->string('cep')->nullable();
            $table->string('reference')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('person');
    }
};
