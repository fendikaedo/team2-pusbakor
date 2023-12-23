<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin PUSBAKOR',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('adminhandal'),
            'role' => 'admin', // Tetapkan role 'admin'
        ]);
    }
}
