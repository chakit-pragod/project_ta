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
        Schema::create('attendances', function (Blueprint $table) {
            $table->id();
            $table->char('status');
            $table->dateTime('approve_at', precision: 0);
            $table->string('note');
            $table->unsignedBigInteger('user_id'); 
            $table->unsignedBigInteger('teaching_id');
            $table->unsignedBigInteger('ta_id');

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('teaching_id')->references('id')->on('teaching')->onDelete('cascade');
            $table->foreign('ta_id')->references('id')->on('tas')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attendances');
    }
};
