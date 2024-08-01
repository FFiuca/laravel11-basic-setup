<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Master\Status;

use App\Models\Anime;
use App\Models\Master\Category;
use App\Models\Master\Language;
use App\Models\Master\Tag;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Anime>
 */
class AnimeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $fake = fake();

        $name = $fake->name();
        $slug = Str::slug($name);
        $status = Status::all()->pluck('id')->toArray();

        return [
            'status_id' => $status[array_rand($status)],
            'name' => $name,
            'slug' => $slug,
        ];
    }

    public function configure()
    {
        return $this->afterCreating(function(Anime $anime){
            $category = Category::all()->random(rand(1,4))->pluck('id')->toArray();

            $user = User::all();
            $countUser = $user->count();
            $author = $user->random(rand(1,$countUser))->pluck('id')->unique()->values()->toArray();
            $artist = $user->random(rand(1,$countUser))->pluck('id')->unique()->values()->toArray();

            $lang = Language::all()->random(rand(1,5))->pluck('id')->toArray();
            $lang[count($lang)] = Language::where('name', '=', 'Japanese')->first()->id;

            // $tag = [];
            if(rand(0,1)==1){
                $anime->factory()->hasTag(rand(1,4))->create();
            }else{
                $tag = Tag::all();
                $tag = $tag->random(rand(1,$tag->count()))->pluck('id')->toArray();
                $anime->tag()->sync($tag);
            }

            $anime->category()->sync($category);
            $anime->artist()->sync($artist);
            $anime->author()->sync($author);
            $anime->language()->sync($lang);


        });
    }
}
