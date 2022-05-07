<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert(
            [
                [
                    'name' => 'Giovanni',
                    'password' => md5('1234'),
                    'created_at' => now(),
                    /* 'updated_at' => now() */
                ],
                [
                    'name' => 'Pedro',
                    'password' => md5('1234'),
                    'created_at' => now(),
                    /* 'updated_at' => now() */
                ],
                [
                    'name' => 'William',
                    'password' => md5('1234'),
                    'created_at' => now(),
                    /* 'updated_at' => now() */
                ],
                [
                    'name' => 'Mario',
                    'password' => md5('1234'),
                    'created_at' => now(),
                    /* 'updated_at' => now() */
                ],
            ]
        );
    }
}
