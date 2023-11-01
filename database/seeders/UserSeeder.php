<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'fullname' => 'admin',
                'email' => 'admin@gmail.com',
                'role' => 'admin',
                'password' => bcrypt('admin')
            ],
            [
                'fullname' => 'user',
                'email' => 'user@gmail.com',
                'role' => 'user',
                'password' => bcrypt('user')
            ],
        ];

        foreach ($userData as $key => $val) {
            User::create($val);
        }
    }
}
