<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Employer;

class JobFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title' => $this->faker->jobTitle(),
            'salary' => $this->faker->randomElement([
                '$50,000 USD',
                '$90,000 USD',
                '$150,000 USD',
            ]),
            'employer_id' => Employer::factory(),
        ];
    }
}
