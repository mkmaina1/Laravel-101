<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Dojo;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Infinite>
 */
class InfiniteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' =>fake()->name(),
            'location' => fake()->city(),
            'bio' => fake()->realText(200),
            'dojo_id' => Dojo::inRandomOrder()->first()->id,
            //
        ];
    }
}
