<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create(['name' => 'Admin'])->givePermissionTo(Permission::all());
        Role::create(['name' => 'User'])->givePermissionTo(['Create Complaint', 'View Complaints']);
        Role::create(['name' => 'Guest'])->givePermissionTo(['View Complaints']);
    }
}
