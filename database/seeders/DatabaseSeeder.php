<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        // Usuario Admin
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => Hash::make('password123'),
            'role' => 'admin',
        ]);

        // Usuario Empleado
        User::create([
            'name' => 'Empleado User',
            'email' => 'empleado@example.com',
            'password' => Hash::make('password123'),
            'role' => 'empleado',
        ]);

        // Usuario Normal
        User::create([
            'name' => 'Usuario Normal',
            'email' => 'user@example.com',
            'password' => Hash::make('password123'),
            'role' => 'user',
        ]);
    }
}
