<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Slider>
 */
class SliderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'notice'=>$this->faker->text('50'),
            'slug'=>$this->faker->unique()->slug,
            'slide_photo'=>$this->faker->imageUrl('800','500'),
            'status'=>$this->faker->randomElement(['1','0']),
        ];
    }
}
