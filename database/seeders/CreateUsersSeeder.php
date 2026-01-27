<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
               'name'=>'Admin User',
               'email'=>'admin@abcdesigns.in',
               'type'=>1,
               'password'=> bcrypt('123456'),
            ],
            [
               'name'=>'Manager User',
               'email'=>'manager@abcdesigns.in',
               'type'=> 2,
               'password'=> bcrypt('123456'),
            ],
            [
               'name'=>'User',
               'email'=>'user@abcdesigns.in',
               'type'=>0,
               'password'=> bcrypt('123456'),
            ],
        ];
    
        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}
