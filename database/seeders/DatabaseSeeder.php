<?php

namespace Database\Seeders;

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
        Program::factory(100)->create();
        Project::factory(100)->create();
        Complaint::factory(100)->create();
    }
}
