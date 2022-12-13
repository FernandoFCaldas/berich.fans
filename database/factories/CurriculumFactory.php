<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class CurriculumFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'fname' => fake()->name(),
            'lname' => fake()->name(),
            'linkedin' => fake()->name(),
            'emailforcontact' => fake()->safeEmail(),
            'zip' => fake()->name(),
            'twitter' => fake()->name(),
            'instagram' => fake()->name(),
            'country' => fake()->name(),
            'state' => fake()->name(),
            'city' => fake()->name(),
            'job' => fake()->name(),
            'description' => fake()->name(),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
