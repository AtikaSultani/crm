<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionsTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create(['name' => 'Create Complaint']);
        Permission::create(['name' => 'View Complaints']);
        Permission::create(['name' => 'Delete Complaint']);
        Permission::create(['name' => 'Edit Complaint']);
    }
}
