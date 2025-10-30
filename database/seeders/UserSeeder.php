<?php
// database/seeders/UserSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User; // Import User
// Kita TIDAK PERLU 'use Illuminate\Support\Facades\Hash;' lagi

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Buat User 1 (Admin)
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@gmail.com',
            'password' => 'password' // <-- DIUBAH: Jangan pakai Hash::make()
        ]);

        // Buat User 2 (Staf)
        User::create([
            'name' => 'Staf User',
            'email' => 'staf@gmail.com',
            'password' => 'password' // <-- DIUBAH: Jangan pakai Hash::make()
        ]);
    }
}