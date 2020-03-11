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
        Referred_program::create(['name'=>'Officer']);
        Referred_program::create(['name'=>'PM']);
        Referred_program::create(['name'=>'Partner']);
        Referred_program::create(['name'=>'DCD/CD']);
    }
}
