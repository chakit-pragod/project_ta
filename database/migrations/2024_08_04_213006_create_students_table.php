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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('fName', 1024);
            $table->string('lName', 1024);
            $table->string('card_id', 13);
            $table->string('phone', 11);
            $table->string('email', 30);
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('subjects_id')->constrained('subjects');
            $table->boolean('type_ta');
            $table->string('uploadfile')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};