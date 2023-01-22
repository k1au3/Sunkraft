<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class CreateUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name'=>'User',
                'email' => 'user@kimcode.com',
                'password' => bcrypt('123456'),
                'role' => 0
            ],
            [
                'name'=>'Editor',
                'email' => 'editor@kimcode.com',
                'password' => bcrypt('123456'),
                'role' => 1
            ],
            [
                'name'=>'Admin',
                'email' => 'admin@kimcode.com',
                'password' => bcrypt('123456'),
                'role' => 2
            ]
            ];

            foreach($users as $user)
            {
                User::create($user);
            }
    }
}
