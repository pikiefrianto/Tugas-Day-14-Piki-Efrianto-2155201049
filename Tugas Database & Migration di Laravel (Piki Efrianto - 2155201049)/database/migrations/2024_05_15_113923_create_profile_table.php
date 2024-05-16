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
        Schema::create('profile', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('age');
            $table->text('bio')->nullable();
            $table->string('address')->nullable();
            $table->unsignedBigInteger('user_id'); // Kolom foreign key
            $table->timestamps();

            // Menambahkan foreign key constraint
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**s
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('profile', function (Blueprint $table) {
            // Menghapus foreign key constraint sebelum menghapus tabel
            $table->dropForeign(['user_id']);
        });
        Schema::dropIfExists('profile');
    }
};
