<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create admin user
        User::updateOrCreate(
            ['email' => 'admin@terobos.com'],
            [
                'name' => 'Admin Terobos',
                'email' => 'admin@terobos.com',
                'password' => Hash::make('admin123'),
                'email_verified_at' => now(),
            ]
        );

        // Create additional test users if needed
        if (app()->environment('local')) {
            User::factory(5)->create();
        }
    }
}
