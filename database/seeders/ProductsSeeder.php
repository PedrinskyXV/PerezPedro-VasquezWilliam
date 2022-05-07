<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::insert(
            [
                [
                    'name' => 'Stella Artois',
                    'description' => 'Buena cerveza',
                    'unit_price' => 6.75,
                    'stock' => 24,
                    'warranty' => 0,
                    'id_vendedor' => 1,
                    'created_at' => now(),
                    /* 'updated_at' => now() */
                ],
                [
                    'name' => 'Agua cristal',
                    'description' => '5 galones',
                    'unit_price' => 2.6,
                    'stock' => 10,
                    'warranty' => 0,
                    'id_vendedor' => 2,
                    'created_at' => now(),
                    /* 'updated_at' => now() */
                ],
                [
                    'name' => 'Longaniza premiun',
                    'description' => 'Dany',
                    'unit_price' => 2.95,
                    'stock' => 30,
                    'warranty' => 0,
                    'id_vendedor' => 1,
                    'created_at' => now(),
                    /* 'updated_at' => now() */
                ],
                [
                    'name' => 'Pizza congelada Krispy',
                    'description' => 'De jamon con queso',
                    'unit_price' => 4.75,
                    'stock' => 6,
                    'warranty' => 0,
                    'id_vendedor' => 1,
                    'created_at' => now(),
                    /* 'updated_at' => now() */
                ],
                [
                    'name' => 'Papel toalla',
                    'description' => 'Scott 12 unidades',
                    'unit_price' => 5.95,
                    'stock' => 30,
                    'warranty' => 0,
                    'id_vendedor' => 2,
                    'created_at' => now(),
                    /* 'updated_at' => now() */
                ],
                [
                    'name' => 'Sorbete de chocolate',
                    'description' => 'con chispas de gallete de chollate',
                    'unit_price' => 7.65,
                    'stock' => 2,
                    'warranty' => 0,
                    'id_vendedor' => 3,
                    'created_at' => now(),
                    /* 'updated_at' => now() */
                ],
                [
                    'name' => 'Foco',
                    'description' => 'luz blanca de 60 lumenes',
                    'unit_price' => 2.45,
                    'stock' => 12,
                    'warranty' => 0,
                    'id_vendedor' => 4,
                    'created_at' => now(),
                    /* 'updated_at' => now() */
                ],
                [
                    'name' => 'Foco',
                    'description' => 'luz blanca de 60 lumenes',
                    'unit_price' => 2.45,
                    'stock' => 12,
                    'warranty' => 0,
                    'id_vendedor' => 4,
                    'created_at' => now(),
                    /* 'updated_at' => now() */
                ],
                [
                    'name' => 'Cereal zucaritas',
                    'description' => 'Para crecer grandototote y fuertotote',
                    'unit_price' => 3.85,
                    'stock' => 15,
                    'warranty' => 0,
                    'id_vendedor' => 2,
                    'created_at' => now(),
                    /* 'updated_at' => now() */
                ],
                [
                    'name' => 'Xiaomi x3 pro',
                    'description' => '256gb, gorila glass 6, 8gb de ram',
                    'unit_price' => 350,
                    'stock' => 3,
                    'warranty' => 1,
                    'id_vendedor' => 1,
                    'created_at' => now(),
                    /* 'updated_at' => now() */
                ],
            ]
        );
    }
}
