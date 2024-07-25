<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Master\Status;

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
}
