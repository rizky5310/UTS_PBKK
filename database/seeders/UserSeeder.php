<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'username' => 'admin', // Pastikan username diisi
            'email' => 'admin@ifump.net',
            'password' => Hash::make('password'),
            'email_verified_at' => now(),
        ]);
    }
}