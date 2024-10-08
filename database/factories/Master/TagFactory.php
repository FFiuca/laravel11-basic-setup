<?php

namespace Database\Factories\Master;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Master\Tag;

// class factory must be same structure with related model
class TagFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->word()
        ];
    }
}
