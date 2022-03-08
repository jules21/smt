<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            ['name'=>'User 1','email'=>'user1@gmail.com', 'password'=> bcrypt("password")],
            ['name'=>'User 2','email'=>'user2@gmail.com', 'password'=> bcrypt("password")],
            ['name'=>'User 3','email'=>'user3@gmail.com', 'password'=> bcrypt("password")],
        ];

        foreach ($users as $user){
            User::create($user);
        }
    }
}
