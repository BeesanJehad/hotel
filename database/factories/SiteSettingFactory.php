<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SiteSetting>
 */
class SiteSettingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'logo' => $this->fake()->imageUrl(640, 480, 'business'), // Generates a random image URL
            'phone' => $this->fake()->phoneNumber(), // Generates a random phone number
            'address' => $this->fake()->address(), // Generates a random address
            'email' => $this->fake()->unique()->safeEmail(), // Generates a unique email
            'facebook' => $this->fake()->url(), // Generates a random URL for Facebook
            'twitter' => $this->fake()->url(), // Generates a random URL for Twitter
            'copyright' => $this->fake()->sentence(5), // Generates a short copyright text
        ];
    }
}
