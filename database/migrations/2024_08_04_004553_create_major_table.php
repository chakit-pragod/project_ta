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
        Schema::create('major', function (Blueprint $table) {
            $table->id();
            $table->string('name_th', 1024);
            $table->string('name_en', 1024);
            $table->enum('major_type', ['N', 'S']); // normal and specials
            $table->foreignId('cur_id')->constrained('curriculums')->onDelete('cascade');
            // $table->char('status', 1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('major');
    }
};
