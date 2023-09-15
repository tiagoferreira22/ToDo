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
            'name' => 'Alessandro Kobs',
            'email' => 'alessandro@gmail.com',
            'password' => Hash::make('123456'),
        ]);

        User::create([
            'name' => 'Alessandro Kobs2',
            'email' => 'alessandro2@gmail.com',
            'password' => Hash::make('123456'),
        ]);
    }
}
