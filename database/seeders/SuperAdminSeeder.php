<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * Creates the ONE default SuperAdmin account.
     * All Admin/Staff accounts must be created by this SuperAdmin
     * from inside the dashboard — no public registration.
     */
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'superadmin@everify.gov.np'],
            [
                'name' => 'Super Admin',
                'password' => Hash::make('SuperAdmin@123'),
                'role' => 'superadmin',
                'email_verified_at' => now(),
            ]
        );
    }
}
