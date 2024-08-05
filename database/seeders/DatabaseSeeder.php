<?php

namespace Database\Seeders;

use App\Models\Master\Category;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\StatusSeeder;
use Database\Seeders\LanguageSeeder;
use App\Models\Master\Tag;
use Database\Factories\TagFactory;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Tag::factory(10)->create();

        // seeder
        $this->call(StatusSeeder::class);
        $this->call(LanguageSeeder::class);
        $this->call(CategorySeeder::class);

    }
}
