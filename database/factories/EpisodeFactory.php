<?php

namespace Database\Factories;

use App\Models\Episode;
use App\Models\Master\Language;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Episode>
 */
class EpisodeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->name(),
            'meta_info' => null,
            'video_link' => null,
            'thumbnail_link' => null,
        ];
    }

    public function configure()
    {
        return $this->afterCreating(function(Episode $episode){
            $lang = Language::all()->random(rand(1,5))->pluck('id')->toArray();
            $lang[count($lang)] = Language::where('name', '=', 'Japanese')->first()->id;

            $episode->language()->sync($lang);
        });
    }
}
