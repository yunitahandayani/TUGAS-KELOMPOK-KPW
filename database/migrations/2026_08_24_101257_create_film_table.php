<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('film', function (Blueprint $table) {
            $table->id(); 
            $table->string('judul', 45);
            $table->text('ringkasan');
            $table->integer('tahun');
            $table->string('poster', 45);
            $table->unsignedBigInteger('genre_id');
            $table->timestamps();

            // Foreign key ke tabel genre
            $table->foreign('genre_id')->references('id')->on('genre')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('film');
    }
};