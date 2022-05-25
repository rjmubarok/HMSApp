<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Floor>
 */
class FloorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'floor_name'=>$this->faker->text('20'),
            'floor_no'=>$this->faker->randomDigit(),
            'slug'=>$this->faker->unique()->slug,
            'floor_description'=>$this->faker->sentence('10'),
            'total_room'=>$this->faker->numberBetween(1,8),
            'floor_photo'=>$this->faker->imageUrl('400','400'),
            'status'=>$this->faker->randomElement(['1','0']),
        ];
    }
}
