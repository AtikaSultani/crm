<?php

use Illuminate\Database\Seeder;
use App\Projects;
class ProjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Projects::create(['project_name' => 'OHW']);
        Projects::create(['project_name' => 'OHW2']);
    }
}
