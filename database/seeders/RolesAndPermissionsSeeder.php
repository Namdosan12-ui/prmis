<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    public function run()
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // Create permissions
        Permission::create(['name' => 'manage users']);
        Permission::create(['name' => 'view reports']);
        Permission::create(['name' => 'manage patients']);
        Permission::create(['name' => 'manage laboratory']);
        Permission::create(['name' => 'manage transactions']);
        Permission::create(['name' => 'manage queuing']);
        Permission::create(['name' => 'send emails']);

        // Create roles and assign existing permissions
        $role = Role::create(['name' => 'admin']);
        $role->givePermissionTo(Permission::all());

        Role::create(['name' => 'front desk'])->givePermissionTo(['manage patients', 'manage transactions', 'manage queuing']);
        Role::create(['name' => 'radiologist'])->givePermissionTo(['manage laboratory', 'send emails']);
        Role::create(['name' => 'medical technologist'])->givePermissionTo(['manage laboratory', 'send emails']);
        Role::create(['name' => 'physician'])->givePermissionTo(['view reports', 'manage patients']);
        Role::create(['name' => 'pharmacy staff'])->givePermissionTo(['manage transactions']);
    }
}
