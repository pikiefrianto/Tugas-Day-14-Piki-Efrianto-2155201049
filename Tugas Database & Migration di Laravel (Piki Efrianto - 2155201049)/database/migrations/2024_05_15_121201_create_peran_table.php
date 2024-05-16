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
        Schema::create('peran', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('film_id'); // Kolom foreign key
            $table->unsignedBigInteger('cast_id'); // Kolom foreign key
            $table->string('nama','50');

            // Menambahkan foreign key constraint
            $table->foreign('film_id')->references('id')->on('film')->onDelete('cascade');
            $table->foreign('cast_id')->references('id')->on('cast')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('peran', function (Blueprint $table) {
            // Menghapus foreign key constraint sebelum menghapus tabel
            $table->dropForeign(['film_id']);
            $table->dropForeign(['cast_id']);
        });
        Schema::dropIfExists('peran');
    }
};
