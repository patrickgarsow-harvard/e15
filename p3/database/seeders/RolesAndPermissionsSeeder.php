<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // reset cached roles and permissions
      app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

      // USER MODEL
      $userPermission1 = Permission::create(['name' => 'create:user', 'description' => 'Create Users']);
      $userPermission2 = Permission::create(['name' => 'read:user', 'description' => 'Read Users']);
      $userPermission3 = Permission::create(['name' => 'update:user', 'description' => 'Update Users']);
      $userPermission4 = Permission::create(['name' => 'delete:user', 'description' => 'Delete Users']);

      // ROLE MODEL
      $rolePermission1 = Permission::create(['name' => 'create:role', 'description' => 'Create Roles']);
      $rolePermission2 = Permission::create(['name' => 'read:role', 'description' => 'Read Roles']);
      $rolePermission3 = Permission::create(['name' => 'update:role', 'description' => 'Update Roles']);
      $rolePermission4 = Permission::create(['name' => 'delete:role', 'description' => 'Delete Roles']);

      // PERMISSION MODEL
      $permission1 = Permission::create(['name' => 'create:permission', 'description' => 'Create Permissions']);
      $permission2 = Permission::create(['name' => 'read:permission', 'description' => 'Read Permissions']);
      $permission3 = Permission::create(['name' => 'update:permission', 'description' => 'Update Permissions']);
      $permission4 = Permission::create(['name' => 'delete:permission', 'description' => 'Delete Permissions']);

      // ADMIN MODEL
      $adminPermission1 = Permission::create(['name' => 'read:admin', 'description' => 'Read Admin']);
      $adminPermission2 = Permission::create(['name' => 'update:admin', 'description' => 'Update Admin']);

      $superAdminRole = Role::create(['name' => 'super-admin']);
      $adminRole = Role::create(['name' => 'admin']);
      $developerRole = Role::create(['name' => 'developer']);
      $employeeRole = Role::create(['name' => 'employee']);
      $moderatorRole = Role::create(['name' => 'moderator']);
      $volunteerRole = Role::create(['name' => 'volunteer']);
      $userRole = Role::create(['name' => 'user']);

      $superAdminRole->syncPermissions([
        $userPermission1,
        $userPermission2,
        $userPermission3,
        $userPermission4,
        $rolePermission1,
        $rolePermission2,
        $rolePermission3,
        $rolePermission4,
        $permission1,
        $permission2,
        $permission3,
        $permission4,
        $adminPermission1,
        $adminPermission2,
      ]);

      $adminRole->syncPermissions([
        $userPermission1,
        $userPermission2,
        $userPermission3,
        $userPermission4,
        $rolePermission1,
        $rolePermission2,
        $rolePermission3,
        $rolePermission4,
        $permission1,
        $permission2,
        $permission3,
        $permission4,
        $adminPermission1,
        $adminPermission2,
      ]);

      $moderatorRole->syncPermissions([
        $userPermission2,
        $rolePermission2,
        $permission2,
        $adminPermission1,
      ]);

      $developerRole->syncPermissions([
        $adminPermission1,
      ]);

    //   $superAdmin = User::create([
    //     'name' => 'Super Admin',
    //     'permission_id' => 1,
    //     'email_verified_at' => now(),
    //     'password' => Hash::make('password'),
    //     'remember_token' => Str::random(10),

    //   ]);
    }
}
