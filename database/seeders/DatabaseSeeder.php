<?php

namespace Database\Seeders;

use App\Models\Inventory;
use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $roles = [
            'user',
            'admin'
        ];
    
        foreach ($roles as $roleName) {
            $allRoles[$roleName] = Role::firstOrCreate(['name' => $roleName]);
        }
    
        $permissions = [
            'view_appointments',
            'api_all_appointments',
            'edit_appointments',
            'new_appointments',
            'delete_appointments',
    
            'view_inventories',
            'api_all_inventories',
            'edit_inventories',
            'new_inventories',
            'delete_inventories',
    
            'view_medicalrecords',
            'api_all_medicalrecords',
            'edit_medicalrecords',
            'new_medicalrecords',
            'delete_medicalrecords',
    
            'view_roles',
            'api_all_roles',
            'edit_roles',
            'new_roles',
            'delete_roles',
    
            'view_treatments',
            'api_all_treatments',
            'edit_treatments',
            'new_treatments',
            'delete_treatments',
        ];
    
        foreach ($permissions as $permName) {
            $allPermissions[$permName] = Permission::firstOrCreate(['name' => $permName]);
        }
    
        $allRoles['admin']->permission()->sync(array_values($allPermissions));
    
        $allRoles['user']->permission()->sync([
            $allPermissions['view_appointments']->id,
            $allPermissions['view_inventories']->id,
            $allPermissions['view_medicalrecords']->id,
            $allPermissions['view_roles']->id,
            $allPermissions['view_treatments']->id,
        ]);

        User::create([
            'dni' => '12345678Z',
            'pfpimg' => null,
            'name' => 'Admin',
            'surname' => 'Admin',
            'address' => '123 Main St, City',
            'phone_number' => '000000001',
            'email' => 'admin@admin.com',
            'email_verified_at' => null,
            'password' => 'admin',
            'specialization' => null,
            'availability' => null,
            'state' => 'Active',
            'role_id' => 2,
            'remember_token' => null,
        ]);

        User::create([
            'dni' => '87654321Z',
            'pfpimg' => null,
            'name' => 'User',
            'surname' => 'User',
            'address' => '1234 Main St, City',
            'phone_number' => '111222333',
            'email' => 'user@user.com',
            'email_verified_at' => null,
            'password' => 'user',
            'specialization' => null,
            'availability' => null,
            'state' => 'Active',
            'role_id' => 1,
            'remember_token' => null,
        ]);

        Inventory::factory(10);
    }    
}
