<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        // Create Roles
        Role::firstOrCreate(['name' => 'admin']);
        Role::firstOrCreate(['name' => 'instructor']);
        Role::firstOrCreate(['name' => 'student']);

        // Create Admin User
        $admin = User::firstOrCreate(
            ['email' => 'admin@gmail.com'],
            [
                'name' => 'Admin',
                'password' => Hash::make('password'),
            ]
        );

        // Assign Admin Role
        $admin->assignRole('admin');
    }
}
