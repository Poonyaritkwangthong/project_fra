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
        Schema::create('informant_scores', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('informant_id')->unsigned();
            $table->bigInteger('question_id')->unsigned();
            $table->bigInteger('choice_id')->unsigned();
            $table->integer('score');
            $table->timestamps();

            // Foreign key constraints (ถ้ามี)
            $table->foreign('informant_id')->references('id')->on('informants')->onDelete('cascade');
            $table->foreign('question_id')->references('id')->on('questions')->onDelete('cascade');
            $table->foreign('choice_id')->references('id')->on('choices')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('informant_scores');
    }
};
