<?php

use Illuminate\Database\Seeder;
use App\Referred_program;

class ReferredProgramTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Referred_program::create(['referred_program_name'=>'Officer']);
        Referred_program::create(['referred_program_name'=>'PM']);
        Referred_program::create(['referred_program_name'=>'Partner']);
        Referred_program::create(['referred_program_name'=>'DCD/CD']);
    }
}
