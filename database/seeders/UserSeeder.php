<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{

    public function run()
    {
        User::truncate();

        User::create([
            'name' => 'admin',
            'email' => 'admin@email.com',
            'no_telepon' => '0812345678',
            'role'  => 'superadmin',
            'password' => Hash::make('11111111')
        ]);

        User::create([
            'name' => 'pendaftar',
            'email' => 'pendaftar@email.com',
            'no_telepon' => '0822345678',
            'role'  => 'pendaftar',
            'password' => Hash::make('11111111')
        ]);
    }
}
