<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\News;       
use App\Models\Customer; 
use App\Models\TopikPembelajaran;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str; 

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 1. Membuat User Admin
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        // 2. Membuat SATU Penulis spesifik 
        $adminAuthor = Customer::factory()->create([
            'name' => 'Admin Terobos',
            'email' => 'admin@terobos.com',
            'password' => bcrypt('password'), 
        ]);
        
        // --- BERITA 1 ---
        $title1 = 'Robotika Menjadi Ekstrakurikuler Unggulan di SMK';
        News::create([
            'customer_id' => $adminAuthor->id, 
            'tanggal' => now(),
            'title' => $title1,
            'slug' => Str::slug($title1),
            'kategory' => 'Edukasi',
            'description' => 'Kegiatan ekstrakurikuler robotika di SMK Negeri 1 Surakarta berhasil menarik minat siswa. Dengan dukungan platform Terobos, siswa kini dapat belajar merakit dan memprogram robot dari komponen daur ulang...',
            'thumbnail' => 'images/banner-image.png' 
        ]);

        // --- BERITA 2 ---
        $title2 = 'Inovasi Baru: Sensor Jarak dari Limbah Elektronik';
        News::create([
            'customer_id' => $adminAuthor->id, 
            'tanggal' => now()->subDays(1),
            'title' => $title2,
            'slug' => Str::slug($title2),
            'kategory' => 'Teknologi',
            'description' => 'Tim Terobos berhasil mengembangkan prototipe sensor jarak ultrasonik baru yang memanfaatkan komponen dari limbah elektronik. Langkah ini diharapkan dapat mengurangi biaya produksi perangkat ajar...',
            'thumbnail' => 'images/banner-image.png' 
        ]);

        // --- BERITA 3 ---
        $title3 = 'Komunitas Terobos Gelar Kompetisi Robotik Pertama';
        News::create([
            'customer_id' => $adminAuthor->id,
            'tanggal' => now()->subDays(2),
            'title' => $title3,
            'slug' => Str::slug($title3),
            'kategory' => 'Komunitas',
            'description' => 'Kompetisi robotik internal pertama Terobos sukses digelar akhir pekan lalu. Acara ini diikuti oleh lebih dari 50 tim dari berbagai sekolah mitra yang memamerkan kreativitas mereka...',
            'thumbnail' => 'images/banner-image.png'
        ]);

            // pembelajaran 1
        $title1 = 'Omnidirectional Robot';
        TopikPembelajaran::create([
            'title' => $title1,
            'slug' => \Illuminate\Support\Str::slug($title1),
            'description' => 'Belajar sistem robot bergerak ke segala arah.',
            'image' => 'path/ke/gambar-omni.png', 
            'icon' => 'fas fa-robot', 
            'teknologi' => 'Motor omni, pengontrol, sensor.',
            'learning_outcomes' => 'Dasar robotika, pemrograman gerak.',
            'untuk' => 'Pelajar SMA/SMK, Mahasiswa Teknik.',
            'modul' => 'Teori robotika, simulasi, praktek.',
            'perangkat' => 'IMU Controller + Simulator Terobos.',
            'harga' => 300000, 
            'order' => 1,
        ]);

        // pembelajaran 2
        $title2 = 'Robot Lengan (Arm Robot)';
        TopikPembelajaran::create([
            'title' => $title2,
            'slug' => \Illuminate\Support\Str::slug($title2),
            'description' => 'Mempelajari kinematika dan pemrograman robot lengan.',
            'image' => 'path/ke/gambar-lengan.png',
            'icon' => 'fas fa-robot-arm',
            'teknologi' => 'Motor Servo, Kontroler, Gripper.',
            'learning_outcomes' => 'Dasar kinematika, Inverse Kinematics.',
            'untuk' => 'Mahasiswa Teknik, Hobiis.',
            'modul' => 'Teori, Simulasi, Praktek.',
            'perangkat' => 'Servo Controller + Simulator.',
            'harga' => 450000, 
            'order' => 2,
        ]);
    }
}