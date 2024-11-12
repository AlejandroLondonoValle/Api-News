<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();

        User::factory()->create([
            'name' => 'User',
            'last_name' => 'Admin',
            'is_admin' => true,
            'password' => bcrypt('password'), // Password: password
            'email' => 'user@riwi.com',
        ]);
    }
}
