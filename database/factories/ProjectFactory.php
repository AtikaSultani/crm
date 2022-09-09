<?php

namespace Database\Factories;

use App\Models\Program;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "project_name"           => fake()->realText(10),
            "project_code"           => fake()->text(5),
            "partner_name"           => fake()->text(10),
            "start_date"             => fake()->date(),
            "end_date"               => fake()->date(),
            "donors"                 => fake()->text(15),
            "activities"             => fake()->text(40),
            "direct_beneficiaries"   => fake()->text(5),
            "indirect_beneficiaries" => fake()->text(5),
            "total_budget"           => fake()->numberBetween(1, 2300),
            'project_manager'        => fake()->name,
            'program_id'             => Program::all()->random()->id
        ];
    }
}
