<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'id' => 1,
            'is_admin' => 1,
            'name' => 'Demo Admin',
            'email' =>'admin@demo.com',
            'password' => Hash::make('password'),
            'remember_token' => null,
        ]);

        User::create([
            'id' => 2,
            'is_admin' => 0,
            'name' => 'Demo User',
            'email' =>'user@demo.com',
            'password' => Hash::make('password'),
            'remember_token' => null,
        ]);
    }
}
