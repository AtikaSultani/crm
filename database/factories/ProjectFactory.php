<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\District;
use App\Models\Program;
use App\Models\Project;
use App\Models\Province;
use Faker\Generator as Faker;

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

$factory->define(Project::class, function (Faker $faker) {
    return [
        "project_name"           => $faker->realText(10),
        "project_code"           => $faker->text(5),
        "partner_name"               => $faker->text(10),
        "start_date"             => $faker->date('Y-m-d'),
        "end_date"               => $faker->date('Y-m-d'),
        "donors"                 => $faker->text(15),
        "activities"             => $faker->text(40),
        "direct_beneficiaries"   => $faker->text(5),
        "indirect_beneficiaries" => $faker->text(5),

        "total_budget"                 => $faker->numberBetween(1, 2300),
        'province_id'            => Province::all()->random()->id,
        'project_manager'        => $faker->name,
        'program_id'             => Program::all()->random()->id
    ];
});
