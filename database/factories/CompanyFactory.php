<?php

namespace Database\Factories;

use App\Models\Company;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Company>
 */
class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->fake()->company,
            'email' => $this->fake()->unique()->safeEmail,
            'logo' => $this->fake()->imageUrl(100, 100),
            'website' => $this->fake()->url,
        ];
    }
}
