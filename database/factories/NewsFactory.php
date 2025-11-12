<?php

namespace Database\Factories;

use App\Models\Customer; // <-- PENTING: Import Customer
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str; // <-- PENTING: Import Str

class NewsFactory extends Factory
{
    public function definition(): array
    {
        $title = fake()->sentence(6); // Membuat 1 kalimat judul
        $slug = Str::slug($title);    // Membuat slug dari judul tsb

        return [
            // Ini adalah KUNCINYA:
            // Otomatis membuat customer baru dan memakai ID-nya
            'customer_id' => Customer::factory(), 

            'tanggal' => fake()->date(),
            'title' => $title,
            'slug' => $slug,
            'kategory' => fake()->randomElement(['Teknologi', 'Inovasi', 'Robotika', 'Edukasi']),
            'description' => fake()->paragraphs(3, true), // 3 paragraf
            'thumbnail' => 'images/banner-image.png', // Ganti dengan path gambar default Anda
        ];
    }
}