<?php

use Illuminate\Database\Seeder;

class Shop extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shops')->insert([
            'id' => 1,
            'name' => 'Zara',
            'description' => 'Tienda de ropa multinacional',
            'password' => 'zara12345',
            'email' => 'zara@gmail.com',
            'likes' => 10
            ]);
        DB::table('shops')->insert([
            'id' => 2,
            'name' => 'PcComponentes',
            'description' => 'Tienda de tecnologia',
            'password' => 'PcComponentes12345',
            'email' => 'pccomponentes@gmail.com',
            'likes' => 8
            ]);
        DB::table('shops')->insert([
            'id' => 3,
            'name' => 'Eroski',
            'description' => 'Supermercado de alimentos',
            'password' => 'eroski12345',
            'email' => 'eroski@gmail.com',
            'likes' => 8
                ]);
    }
}
