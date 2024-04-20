<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Company;
use App\Models\Employee;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create one admin user
        User::factory()->create([
            'role' => 'admin',
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('password')
        ]);

        // Create 5 companies
        $companies = Company::factory(5)->create();

        // Create 10 employees for each company
        $companies->each(function ($company) {
            Employee::factory(10)->create(['company_id' => $company->id]);
        });
    }
}
