<?php

namespace Database\Seeders;

use App\Models\User;
use Database\Seeders\permissions\Moderator;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Role;
use App\Models\Permission;
use Spatie\Permission\PermissionRegistrar;
use Database\Seeders\permissions\AllPermissions;

class PermissionsTableSeeder extends Seeder
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

        // create permissions
        foreach (AllPermissions::Permissions as $key => $permission) {
            foreach ($permission as $permissionOption) {
                Permission::create([
                    'name' => $permissionOption,
                    'group' => $key,
                    'guard_name' => 'web',
                ]);
            }
        }

        //admin
        $adminRole = Role::create(['name' => User::ADMIN_ROLE]);
        $adminRole->givePermissionTo(AllPermissions::Permissions);

        $admin = User::create([
            'first_name' => 'admin',
            'email' => 'admin@isnad.com',
            'role' => 'admin',
            'email_verified_at' => now(),
            'password' => '$2y$12$fC3tXLnmFM6DF4y6l50nJuxE3s4ug9vANtUn2h8nmE8PQLOYdnSKS', // 123456
            'remember_token' => Str::random(10),
        ]);

        $admin->assignRole($adminRole);

        //moderator
        $moderator = Role::create(['name' => User::MODERATOR_ROLE]);
        $moderator->givePermissionTo(Moderator::Permissions);
    }
}
