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
            $table->string('student_id', 11);
            $table->string('fName', 1024);
            $table->string('lName', 1024);
            $table->string('card_id', 13); 
            $table->string('phone', 11);
            $table->string('email', 30);
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('subject_id');
            $table->boolean('type_ta');
            $table->string('uploadfile'); 
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('subject_id')->references('id')->on('subjects');
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
