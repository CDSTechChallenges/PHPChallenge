<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\todos;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        todos::insert([
            [
                'name' => 'Buy groceries',
                'work' => 'Shopping',
                'duedate' => '2024-08-30',
            ],
            [
                'name' => 'Finish Laravel project',
                'work' => 'Development',
                'duedate' => '2024-09-15',
            ]
        ]);
    }
}
