<?php

namespace Database\Factories;

use App\Models\Floor;
use App\Models\room;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\order>
 */
class orderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'customer_name'=>$this->faker->name('10'),
            'email'=>$this->faker->email(),
            'customer_address'=>$this->faker->address(),
            'customer_city'=>$this->faker->name(),
            'dob'=>$this->faker->date(),
            'customer_phone'=>$this->faker->numberBetween('10000000000,10000000000'),
            'customer_postcode'=>$this->faker->numberBetween('10000,10000'),
            'floor_id'=>$this->faker->randomElement(Floor::pluck('id')->toArray()),
            'room_id'=>$this->faker->randomElement(room::pluck('id')->toArray()),
            'condition'=>$this->faker->randomElement(['pending','processing','accept', 'cancelled']),
            'customer_photo'=>$this->faker->imageUrl('300','300'),
            'status'=>$this->faker->randomElement(['1','0']),
        ];
    }
}
