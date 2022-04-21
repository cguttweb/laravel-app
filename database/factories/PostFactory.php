<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    // >>> App\Models\Posts::factory()->times(200)->create([user_id' => 2]);
    public function definition()
    {
        return [
            'body' => $this->faker->sentence(20),
        ];
    }
}
