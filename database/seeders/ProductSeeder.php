<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    public function run(): void
    {

        DB::table('products')->insert([
            'name' => 'Batik Kamboja',
            'description' => 'This is a test product.',
            'price' => 120000,
            'image' => 'images/product/1.png',
            'category' => 'MAN',
            'location' => 'Malang',
            'rating' => 5,
        ]);

        DB::table('products')->insert([
            'name' => 'Test Product 2',
            'description' => 'This is a test product.',
            'price' => 9.99,
            'image' => 'images/product/2.png',
            'category' => 'WOMAN',
            'location' => 'Surabaya',
            'rating' => 5,
        ]);

        DB::table('products')->insert([
            'name' => 'Test Product 3',
            'description' => 'This is a test product.',
            'price' => 9.99,
            'image' => 'images/product/3.png',
            'location' => 'Jakarta',
            'category' => 'CHILDREN',
            'rating' => 5,
        ]);

        DB::table('products')->insert([
            'name' => 'Test Product 4',
            'description' => 'This is a test product.',
            'price' => 9.99,
            'image' => 'images/product/4.png',
            'location' => 'Jogja',
            'category' => 'WOMAN',
            'rating' => 5,
        ]);
    }
}
