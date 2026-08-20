<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Admin',
            'login' => 'Admin',
            'email' => 'a@a.ru',
            'password' => bcrypt('Rjvfh503064@'),
            'is_admin' => 1
        ]);
        User::factory()->create([
            'name' => 'User',
            'login' => 'User',
            'email' => 'u@u.ru',
            'password' => bcrypt('Rjvfh503064@'),
            'is_admin' => 0
        ]);
    }
}
