<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Userinfo>
 */
class UserinfoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'fname' => fake()->firstName($gender = 'male'),
            'lname' => fake()->lastName,
            'profile_pic' => fake()->imageUrl($width = 640, $height = 480),
            'phone' => fake()->e164PhoneNumber,
            'address' => fake()->address,
            'postal_code' => fake()->postcode,
            'city' => fake()->city,
            'state' => fake()->state,
            'country' => fake()->country
        ];
    }
}
