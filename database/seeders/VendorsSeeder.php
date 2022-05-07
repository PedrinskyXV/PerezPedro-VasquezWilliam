<?php

namespace Database\Seeders;

use App\Models\Vendor;
use Illuminate\Database\Seeder;

class VendorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Vendor::insert(
            [
                [
                    'dui' => '00000000-1',
                    'address' => 'Tecla',
                    'nit' => '0614-290209-020-5',
                    'user_id' => 1,
                    'created_at' => now(),
                    /* 'updated_at' => now() */
                ],
                [
                    'dui' => '00000000-2',
                    'address' => 'Tecla x2',
                    'nit' => '0614-290209-000-7',
                    'user_id' => 2,
                    'created_at' => now(),
                    /* 'updated_at' => now() */
                ],
                [
                    'dui' => '00000000-3',
                    'address' => 'Mariona',
                    'nit' => '0614-290209-000-5',
                    'user_id' => 3,
                    'created_at' => now(),
                    /* 'updated_at' => now() */
                ],
                [
                    'dui' => '00000000-9',
                    'address' => 'La libertad',
                    'nit' => '0614-290209-000-1',
                    'user_id' => 4,
                    'created_at' => now(),
                    /* 'updated_at' => now() */
                ],
            ]
        );
    }
}
