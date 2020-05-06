<?php

use Illuminate\Database\Seeder;
use App\Models\Project;
use App\Models\Program;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTablesSeeder::class);
        $this->call(ProvinceTableSeeder::class);
        $this->call(DistrictTableSeeder::class);
        $this->call(BroadCategoryTableSeeder::class);
        $this->call(SpecificCategoryTableSeeder::class);
        $this->call('ProgramSeeder');
        $this->call('ProjectSeeder');
    }
}


/**
 * Project seeder
 */
class ProjectSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(Project::class, 30)->create();
    }
}



/**
 * Program seeder
 */
class ProgramSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(Program::class, 30)->create();
    }
}