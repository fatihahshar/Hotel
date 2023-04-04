<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Hotel>
 */
class HotelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'roomname'=> $this->faker->words(rand(2,3),true),
            'roomdescription' => $this->faker->text,
            'roomquantity' => $this->faker->numberBetween(2,10),
            'price' => $this->faker->randomFloat(2,300,2000),
            'created_at' => now(),
        ];
    }
}
