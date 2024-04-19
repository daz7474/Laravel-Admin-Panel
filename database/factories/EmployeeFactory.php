<?php

namespace Database\Factories;

use App\Models\Employee;
use App\Models\Company;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'first_name' => $this->fake()->firstName,
            'last_name' => $this->fake()->lastName,
            'company_id' => Company::factory(),
            'email' => $this->fake()->unique()->safeEmail,
            'phone' => $this->fake()->phoneNumber,
        ];
    }
}
