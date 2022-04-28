<?php

namespace Database\Factories;

use App\Models\section;
use Illuminate\Database\Eloquent\Factories\Factory;

class SectionFactory extends Factory
{
    protected $model = section::class;

    public function definition()
    {
        return [
            'section_name'=>$this->faker->randomElement(['giiiiiiii','ddddddddddddd','fffffffffffffff']),
            'slug'=>$this->faker->randomElement(['giiiiiiii','ddddddddddddd','fffffffffffffff']),
            'desc'=>$this->faker->randomElement(['giiiiiiii','ddddddddddddd','fffffffffffffff']),
            'status'=>$this->faker->numberBetween(0,1),
            'popular'=>$this->faker->numberBetween(0,1),
            'image'=>$this->faker->randomElement(['1.jpg','2.jpg','default.jpg']),

        ];
    }
}
