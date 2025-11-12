<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\News;       
use App\Models\Customer; 
use App\Models\TopikPembelajaran;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str; 

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

        // Sync all users to Firebase
        $this->syncUsersToFirebase();
    }

    private function syncUsersToFirebase()
    {
        $users = User::all();
        
        foreach ($users as $user) {
            try {
                $user->syncToFirebase();
                echo "Synced user: {$user->email}\n";
            } catch (\Exception $e) {
                echo "Failed to sync {$user->email}: {$e->getMessage()}\n";
            }
        }
    }
}