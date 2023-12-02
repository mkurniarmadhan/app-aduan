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

        Schema::create('kategori_aduan', function (Blueprint $table) {
            $table->id();
            $table->string('kategori_aduan');
        });

        Schema::create('aduans', function (Blueprint $table) {
            $table->string('aduan_id')->primary();
            $table->foreignId('user_id');
            $table->foreignId('kategori_id')->references('id')->on('kategori_aduan')->cascadeOnDelete();
            $table->string('judul');
            $table->text('isi');
            $table->text('lampiran')->default(null)->nullable();
            $table->boolean('status')->default(false);
            $table->text('tanggapan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aduans');
    }
};
