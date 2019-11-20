<?php

use Illuminate\Database\Seeder;

class Product extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'id' => 1,
            'name' => 'camiseta',
            'description' => 'camiseta azul con estampados',
            'stock' => '5',
            'price' => '20',
            ]);
        DB::table('products')->insert([
            'id' => 2,
            'name' => 'Pantalon',
            'description' => 'Pantalon de vaquero con roturas',
            'stock' => '20',
            'price' => '45.99',
            ]);
        DB::table('products')->insert([
            'id' => 3,
            'name' => 'Zapatillas',
            'description' => 'Zapatillas blancas',
            'stock' => '2',
            'price' => '60',
            ]);
        DB::table('products')->insert([
            'id' => 4,
            'name' => 'camiseta',
            'description' => 'camiseta azul con estampados',
            'stock' => '5',
            'price' => '20',
            ]);
        DB::table('products')->insert([
            'id' => 5,
            'name' => 'Calcetines',
            'description' => 'Calcetines cortos blancos',
            'stock' => '50',
            'price' => '1',
            ]);
        DB::table('products')->insert([
            'id' => 6,
            'name' => 'Disco Duro',
            'description' => 'Disco duro de 1TB',
            'stock' => '5',
            'price' => '100',
            ]);
        DB::table('products')->insert([
            'id' => 7,
            'name' => 'teclado',
            'description' => 'teclado con luces',
            'stock' => '5',
            'price' => '10',
            ]);
            DB::table('products')->insert([
                'id' => 8,
                'name' => 'raton',
                'description' => 'raton inalambrico',
                'stock' => '22',
                'price' => '20',
                ]);
        DB::table('products')->insert([
            'id' => 9,
            'name' => 'Peras',
            'description' => 'Peras verdes frescas',
            'stock' => '5',
            'price' => '0.20',
            ]);
        DB::table('products')->insert([
            'id' => 10,
            'name' => 'Macarrones',
            'description' => 'Macarrones de colores',
            'stock' => '200',
            'price' => '2.10',
            ]);
        
    }
}
