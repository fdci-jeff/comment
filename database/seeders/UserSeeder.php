<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::insert([
            array(
                'email' => 'admin@admin.com',
                'name' => 'Jeff',
                'password' => bcrypt('123456')
            ),
            array(
                'email' => 'admin2@admin.com',
                'name' => 'David',
                'password' => bcrypt('123456')
            ),
        ]);
    }
}
