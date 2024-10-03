<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SmtpSetting>
 */
class SmtpSettingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'mailer' => $this->faker->randomElement(['smtp', 'sendmail', 'mailgun']),
            'host' => $this->faker->domainName(),
            'port' => $this->faker->numberBetween(25, 587),
            'username' => $this->faker->userName(),
            'password' => $this->faker->password(),
            'encryption' => $this->faker->randomElement(['tls', 'ssl']),
            'from_address' => $this->faker->safeEmail(),
        ];
    }
}
