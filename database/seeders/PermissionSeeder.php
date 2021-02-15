<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        $admin = Role::create(['name' => 'admin']);
        $officer = Role::create(['name' => 'officer']);

        Permission::create(['name' => 'create officers']);
        Permission::create(['name' => 'edit officers']);
        Permission::create(['name' => 'view officers']);
        Permission::create(['name' => 'delete officers']);

        Permission::create(['name' => 'create post']);
        Permission::create(['name' => 'edit post']);
        Permission::create(['name' => 'view post']);
        Permission::create(['name' => 'delete post']);

        $admin->syncPermissions([
            'create officers',
            'edit officers',
            'view officers',
            'delete officers',
        ]);
        
        $officer->syncPermissions([
            'create post',
            'edit post',
            'view post',
            'delete post'
        ]);

    }
}
