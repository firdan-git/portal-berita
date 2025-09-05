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
        Schema::create('komentars', function (Blueprint $table) {
             $table->id();
                $table->foreignId('berita_id')->constrained('beritas')->onDelete('cascade'); // pastikan 'beritas' tabel benar
                $table->foreignId('user_id')->nullable()->constrained('users')->onDelete('set null');
                $table->text('isi');
                $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('komentars');
    }
};