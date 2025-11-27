<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'email' => 'alexey@example.com',
            'gender' => 'male',
            'password' => Hash::make('password123'),
        ]);

        User::create([
            'email' => 'diman@example.com',
            'gender' => 'other',
            'password' => Hash::make('password123'),
        ]);

        User::create([
            'email' => 'glag@example.com',
            'gender' => 'female',
            'password' => Hash::make('password123'),
        ]);

        User::create([
            'email' => 'lipton@example.com',
            'gender' => 'other',
            'password' => Hash::make('password123'),
        ]);
    }
}
