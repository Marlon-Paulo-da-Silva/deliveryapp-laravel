<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
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
                'full_name' => 'Marlon Paulo Admin',
                'username' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('101823'),
                'role' => 'admin',
                'status' => 'active'

            ],
            [
                'full_name' => 'Marlon Establishment',
                'username' => 'establishment',
                'email' => 'establishment@gmail.com',
                'password' => Hash::make('101823'),
                'role' => 'establishment',
                'status' => 'active'

            ],
            [
                'full_name' => 'Marlon Cliente',
                'username' => 'customer',
                'email' => 'customer@gmail.com',
                'password' => Hash::make('101823'),
                'role' => 'customer',
                'status' => 'active'

            ]
            ]);
    }
}
