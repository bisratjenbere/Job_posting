<?php

namespace Database\Factories;

use App\Models\Employer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'employer_id' => Employer::factory(),
            'title' => $this->faker->jobTitle(),
            'Salary' => $this->faker->randomElement(['$50,000', '$60,000', '$70,000']),
            'location' => $this->faker->city(),
            'schedule' => $this->faker->randomElement(['Full Time', 'Part Time', 'Remote']),
            'Url' => $this->faker->url(),
            'featured' => $this->faker->boolean(20),

        ];
    }
}
