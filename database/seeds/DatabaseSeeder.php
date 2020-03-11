<?php

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
        $this->call(UsersTablesSeeder::class);
        $this->call(ProvinceTableSeeder::class);
        $this->call(DistrictTableSeeder::class);
        $this->call(BroadCategoryTableSeeder::class);
        $this->call(SpecificCategoryTableSeeder::class);
        $this->call(ReferredProgramTableSeeder::class);
    }
}
