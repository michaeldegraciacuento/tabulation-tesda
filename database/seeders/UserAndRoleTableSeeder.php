<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class UserAndRoleTableSeeder extends Seeder
{
    public function run()
    {
        $adminRole = Role::create(['name' => 'admin']); 
        
        $cashierRole = Role::create(['name' => 'cashier']);
        $teacherRole = Role::create(['name' => 'teacher']);
        $parentsRole = Role::create(['name' => 'parent']);
        $studentRole = Role::create(['name' => 'student']);
        
        $admin = User::create([ 
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);
        $admin->assignRole('admin');

        $cashier = User::create([ 
            'name' => 'Cashier',
            'email' => 'cashier@cashier.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);

        $cashier->assignRole('cashier'); 

        $teacher = User::create([ 
            'name' => 'Teacher',
            'email' => 'teacher@teacher.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);

        $teacher->assignRole('teacher'); 

        $parent = User::create([ 
            'name' => 'Parent',
            'email' => 'parent@parent.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);
 
        $parent->assignRole('parent'); 

        $student = User::create([ 
            'name' => 'Student',
            'email' => 'student@student.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);
 
        $student->assignRole('student'); 
    }
}
