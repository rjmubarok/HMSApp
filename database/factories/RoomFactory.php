<?php

namespace Database\Factories;

use App\Models\Floor;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Room>
 */
class RoomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'room_name'=>$this->faker->text('20'),
            'room_number'=>$this->faker->randomDigit(),
            'slug'=>$this->faker->unique()->slug,
            'description'=>$this->faker->sentence('10'),
            'price'=>$this->faker->numberBetween(100,1000),
            'room_photo'=>$this->faker->imageUrl('400','400'),
            'total_bed'=>$this->faker->randomElement(['one', 'tow','three','four']),
            'abailable_bed'=>$this->faker->randomElement(['one', 'tow','three','four']),
            'floor_id'=>$this->faker->randomElement(Floor::pluck('id')->toArray()),
            'status'=>$this->faker->randomElement(['1','0']),
        ];
    }
}
