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
        Schema::create('about_pages', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('short_desc');
            $table->string('image')->nullable();
            $table->string('description')->nullable();
            $table->string('dop');
            $table->string('website')->nullable();
            $table->string('city');
            $table->integer('phone');
            $table->string('email');
            $table->integer('age');
            $table->string('degree');
            $table->string('freelance');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about_pages');
    }
};
