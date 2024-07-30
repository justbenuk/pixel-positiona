<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Employer;
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
            'title' => fake()->jobTitle,
            'salary' => fake()->randomElement(['£50,000', '£100,000', '£45,000', '£60,000', '£20,000']),
            'location' => 'Remote',
            'schedule' => fake()->randomElement(['Full Time', 'Part Time', 'Flexible', '3 Days Per Week']),
            'url' => fake()->url,
            'featured' => false,
        ];
    }
}
