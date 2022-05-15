<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
            //admin
[
    'full_name'=>'SuperAdmin',
    'user_name'=>'Admin',
    'email'=>'SuperAdmin@email.com',
    'password'=>Hash::make('superadmin'),
    'role'=>'admin',
    'status'=>1,
],

// user
[
    'full_name'=>'user',
    'user_name'=>'user',
    'email'=>'user@email.com',
    'password'=>Hash::make('user'),
    'role'=>'user',
    'status'=>1,
],

        ]);
    }
}
