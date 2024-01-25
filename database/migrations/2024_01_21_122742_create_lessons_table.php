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
        Schema::create('lessons', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('course_id')->constrained()->onDelete('cascade');
            $table->integer('order')->unique()->nullable();
            $table->string('title')->nullable();
            $table->tinyText('summary')->nullable();
            $table->string('slug')->nullable();
            $table->longText('body')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lessons');
    }
};
