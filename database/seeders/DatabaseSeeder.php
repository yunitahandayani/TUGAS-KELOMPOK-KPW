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
        // Panggil RoleSeeder terlebih dahulu sebelum seeder lainnya
        $this->call([
            RoleSeeder::class,
            FilmSeeder::class,
        ]);

        // User test jika ingin langsung diberi role_id (contoh: role_id = 1 untuk admin)
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'role_id' => 1,
        ]);
    }
}