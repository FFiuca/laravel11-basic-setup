<?php

namespace Database\Seeders;

use Exception;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Master\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::beginTransaction();

        $animeCategories = [
            ['name' => 'Action'],
            ['name' => 'Adventure'],
            ['name' => 'Comedy'],
            ['name' => 'Drama'],
            ['name' => 'Fantasy'],
            ['name' => 'Horror'],
            ['name' => 'Mystery'],
            ['name' => 'Romance'],
            ['name' => 'Sci-Fi'],
            ['name' => 'Slice of Life'],
            ['name' => 'Supernatural'],
            ['name' => 'Magic'],
            ['name' => 'Military'],
            ['name' => 'Police'],
            ['name' => 'Psychological'],
            ['name' => 'Sports'],
            ['name' => 'Historical'],
            ['name' => 'Music'],
            ['name' => 'Demon'],
            ['name' => 'Isekai'],
            ['name' => 'Josei'],
            ['name' => 'Shoujo'],
            ['name' => 'Shounen'],
            ['name' => 'Seinen'],
            ['name' => 'Ecchi'],
            ['name' => 'Hentai'],
            ['name' => 'Mecha'],
            ['name' => 'Yaoi'],
            ['name' => 'Yuri'],
            ['name' => 'Samurai'],
            ['name' => 'Vampire'],
            ['name' => 'Aliens'],
            ['name' => 'Superhero'],
            ['name' => 'Gore'],
            ['name' => 'Parody'],
            ['name' => 'Tragedy'],
            ['name' => 'Psychological Horror'],
            ['name' => 'Romantic Comedy'],
            ['name' => 'Game'],
            ['name' => 'Cooking'],
            ['name' => 'Survival'],
            ['name' => 'Harem'],
            ['name' => 'Reverse Harem']
        ];


        Schema::disableForeignKeyConstraints();
        Category::truncate();
        Schema::enableForeignKeyConstraints();

        Category::insert($animeCategories);

        DB::commit();
    }

}
