<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permission::create([
            'name' => 'View users',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'View roles',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'View Permissions',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'View Hero',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'View Category',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'View Travel',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'Create users',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'Create roles',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'Create Permissions',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'Create Hero',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'Create Category',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'Create Travel',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'Edit users',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'Edit roles',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'Edit Permissions',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'Edit Hero',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'Edit Category',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'Edit Travel',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'Delete users',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'Delete roles',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'Delete Permissions',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'Delete Hero',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'Delete Category',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'Delete Travel',
            'guard_name' => 'web',
        ]);
    }
}
