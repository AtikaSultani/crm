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

        // Complaints
        Permission::create(['name' => 'Create Complaint']);
        Permission::create(['name' => 'View Complaints']);
        Permission::create(['name' => 'Delete Complaint']);
        Permission::create(['name' => 'Edit Complaint']);
        Permission::create(['name' => 'Export Complaints']);

        // Project
        Permission::create(['name' => 'Create Project']);
        Permission::create(['name' => 'View Projects']);
        Permission::create(['name' => 'Delete Project']);
        Permission::create(['name' => 'Edit Project']);

        // Program
        Permission::create(['name' => 'Create Program']);
        Permission::create(['name' => 'View Programs']);
        Permission::create(['name' => 'Delete Program']);
        Permission::create(['name' => 'Edit Program']);

        // Users
        Permission::create(['name' => 'View Users']);
        Permission::create(['name' => 'Delete User']);
        Permission::create(['name' => 'Edit User']);
        Permission::create(['name' => 'Assign Role']);

        // Roles
        Permission::create(['name' => 'Create Role']);
        Permission::create(['name' => 'View Roles']);
        Permission::create(['name' => 'Delete Role']);
        Permission::create(['name' => 'Edit Role']);
        Permission::create(['name' => 'Grant Permissions']);

        // Settings
        Permission::create(['name' => 'View Activity Log']);
        Permission::create(['name' => 'View Backups']);
        Permission::create(['name' => 'Download Backup']);
        Permission::create(['name' => 'Create Backup']);
    }
}
