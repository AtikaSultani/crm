<?php

/** @var Factory $factory */

use App\Models\BroadCategory;
use App\Models\Complaint;
use App\Models\District;
use App\Models\Program;
use App\Models\Project;
use App\Models\Province;
use App\Models\SpecificCategory;
use App\User;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(Complaint::class, function (Faker $faker) {
    $gender = ['Male', 'Female'];
    $status = ['Registered', 'Under Investigation', 'Solved'];
    $term = ['T1', 'T2', 'T3'];

    return [
        'caller_name'              => $faker->name,
        'tel_no_received'          => $faker->phoneNumber,
        'gender'                   => $gender[$faker->numberBetween(0, 1)],
        'received_date'            => $faker->dateTimeBetween('-4 years', now()),
        'status'                   => $status[$faker->numberBetween(0, 2)],
        'term'                  => $term[$faker->numberBetween(0, 2)],
        'referred_to'              => $faker->name,
        'beneficiary_file'         => null,
        'broad_category_id'        => BroadCategory::all()->random()->id,
        'specific_category_id'     => SpecificCategory::all()->random()->id,
        'person_who_shared_action' => $faker->name,
        'close_date'               => $faker->date('Y-m-d'),
        'description'              => $faker->text(20),
        'province_id'              => Province::all()->random()->id,
        'district_id'              => District::all()->random()->id,
        'village'                  => $faker->text(10),
        'user_id'                  => User::all()->random()->id,
        'project_id'               => Project::all()->random()->id,
        'program_id'               => Program::all()->random()->id
    ];
});
