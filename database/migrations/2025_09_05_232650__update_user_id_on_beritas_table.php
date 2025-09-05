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
        Schema::table('beritas', function (Blueprint $table) {
            // Drop foreign key lama
            $table->dropForeign(['user_id']);

            // Ubah kolom user_id jadi nullable
            $table->unsignedBigInteger('user_id')->nullable()->change();

            // Tambah foreign key baru dengan nullOnDelete
            $table->foreign('user_id')
                ->references('id')->on('users')
                 ->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('beritas', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->foreignId('user_id')->constrained('users')->change();
        });
    }
};