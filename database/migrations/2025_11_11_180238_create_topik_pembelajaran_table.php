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
        Schema::create('topik_pembelajaran', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // "Omnidirectional Robot"
            $table->string('slug')->unique(); // Untuk URL yang rapi
            $table->text('description'); // "Belajar sistem robot bergerak..."
            $table->string('image')->nullable(); // Path ke gambar "Omnidirectional Robot"
            $table->string('icon')->nullable(); // "fas fa-robot" (ikon di sebelah judul)

            // Field Detail dari Gambar
            $table->string('teknologi'); // "Motor omni, pengontrol, sensor."
            $table->string('learning_outcomes'); // "Dasar robotika, pemrograman gerak."
            $table->string('untuk'); // "Pelajar SMA/SMK, Mahasiswa Teknik."
            $table->string('modul'); // "Teori robotika, simulasi, praktek."
            $table->string('perangkat'); // "IMU Controller + Simulator Terobos."

            // Harga (disimpan sebagai integer/angka)
            $table->unsignedInteger('harga')->default(0); // "xxx.xxx"

            $table->integer('order')->default(0); // Untuk pengurutan
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('topik_pembelajaran');
    }
};
