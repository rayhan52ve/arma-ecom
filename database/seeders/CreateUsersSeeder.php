<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name'=>'Admin',
                'email'=>'admin@admin.com',
                'role'=>'admin',
                'password'=> bcrypt('123'),
            ],
            [
                'name'=>'User',
                'email'=>'user@user.com',
                'role'=>'user',
                'password'=> bcrypt('123'),
            ],
            [
                'name'=>'Employee',
                'email'=>'employee@employee.com',
                'role'=>'employee',
                'password'=> bcrypt('123'),
            ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }

}
