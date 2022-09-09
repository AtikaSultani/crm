<?php

namespace Database\Factories;

use App\Models\BroadCategory;
use App\Models\District;
use App\Models\Program;
use App\Models\Project;
use App\Models\Province;
use App\Models\SpecificCategory;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Complaint>
 */
class ComplaintFactory extends Factory
{

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $gender = ['Male', 'Female'];
        $status = ['Registered', 'Under Investigation', 'Solved'];
        $quarter = ['First Quarter', 'Second Quarter', 'Third Quarter', 'Fourth Quarter'];

        return [
            'caller_name'              => fake()->name,
            'tel_no_received'          => fake()->phoneNumber,
            'gender'                   => $gender[fake()->numberBetween(0, 1)],
            'received_date'            => fake()->dateTimeBetween('-4 years', now()),
            'status'                   => $status[fake()->numberBetween(0, 2)],
            'Quarter'                  => $quarter[fake()->numberBetween(0, 2)],
            'referred_to'              => fake()->name,
            'beneficiary_file'         => null,
            'broad_category_id'        => BroadCategory::all()->random()->id,
            'specific_category_id'     => SpecificCategory::all()->random()->id,
            'person_who_shared_action' => fake()->name,
            'close_date'               => fake()->date('Y-m-d'),
            'description'              => fake()->text(20),
            'province_id'              => Province::all()->random()->id,
            'district_id'              => District::all()->random()->id,
            'village'                  => fake()->text(10),
            'user_id'                  => User::all()->random()->id,
            'project_id'               => Project::all()->random()->id,
            'program_id'               => Program::all()->random()->id
        ];
    }
}

