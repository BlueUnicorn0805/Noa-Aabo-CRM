<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'first_name' => 'John',
                'last_name' => 'Doe',
                'email' => 'john.doe@example.com',
                'password' => bcrypt('password123'),
                'phone_number' => '123-456-7890',
                'username' => 'johndoe',
                'is_active' => true,
                'address' => '123 Main St',
                'role' => 'Admin',
                'city' => 'New York',
                'state' => 'NY',
                'zip_code' => '10001',
                'remember_token' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'first_name' => 'Jane',
                'last_name' => 'Smith',
                'email' => 'jane.smith@example.com',
                'password' => bcrypt('password123'),
                'phone_number' => '987-654-3210',
                'username' => 'janesmith',
                'is_active' => true,
                'address' => '456 Maple Ave',
                'role' => 'Manager',
                'city' => 'Los Angeles',
                'state' => 'CA',
                'zip_code' => '90001',
                'remember_token' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'first_name' => 'Mark',
                'last_name' => 'Johnson',
                'email' => 'mark.johnson@example.com',
                'password' => bcrypt('password123'),
                'phone_number' => null, // phone number is optional
                'username' => 'markjohnson',
                'is_active' => false,
                'address' => '789 Oak Dr',
                'role' => 'Technician',
                'city' => 'Chicago',
                'state' => 'IL',
                'zip_code' => '60601',
                'remember_token' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
