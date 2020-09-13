<?php

use App\Models\Complaint;
use App\Models\Project;
use App\Models\Program;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call(PermissionsTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(UsersTablesSeeder::class);
        $this->call(ProvinceTableSeeder::class);
        $this->call(DistrictTableSeeder::class);
        $this->call(BroadCategoryTableSeeder::class);
        $this->call(SpecificCategoryTableSeeder::class);
      // $this->call(programTableSeeder::class);
        $this->call('ProgramSeeder');
        $this->call('ProjectSeeder');
        $this->call('ComplaintSeeder');
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


/**
 * Program seeder
 */
class ComplaintSeeder extends Seeder
{

    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(Complaint::class, 100)->create();
    }
}
