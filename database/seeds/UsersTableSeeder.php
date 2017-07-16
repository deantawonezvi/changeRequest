<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
            'name'=>'User',
            'email'=>'user@user.com',
            'department'=>'it',
            'phone_number'=>'0888888877',
            'role'=>'user',
            'password'=>bcrypt('123456')
        ]);

        \App\User::create([
            'name'=>'Manager',
            'email'=>'manager@manager.com',
            'department'=>'it',
            'role'=>'manager',
            'phone_number'=>'0888888888',
            'password'=>bcrypt('123456')
        ]);
        \App\Manager::create([
            'name'=>'Manager',
            'email'=>'manager@manager.com',
            'department'=>'it',
            'phone_number'=>'0888888888',
        ]);
        \App\User::create([
            'name'=>'Line Manager',
            'email'=>'linemanager@linemanager.com',
            'department'=>'it',
            'role'=>'line_manager',
            'phone_number'=>'0888888899',

            'password'=>bcrypt('123456')
        ]);
        \App\LineManager::create([
            'name'=>'Line Manager',
            'email'=>'linemanager@linemanager.com',
            'department'=>'it',
            'phone_number'=>'0888888899',

        ]);
    }
}
