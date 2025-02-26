<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    public function run()
    {
        // Menambahkan data dummy
        DB::table('products')->insert([
            [
                'productCode' => 'P006',
                'productName' => 'Produk A',
                'productLine' => 'Kategori 1',
                'productDescription' => 'Deskripsi produk A yang sangat detail.',
            ],
            [
                'productCode' => 'P007',
                'productName' => 'Produk B',
                'productLine' => 'Kategori 2',
                'productDescription' => 'Deskripsi produk B dengan berbagai fitur menarik.',
            ],
            [
                'productCode' => 'P008',
                'productName' => 'Produk C',
                'productLine' => 'Kategori 1',
                'productDescription' => 'Deskripsi produk C yang inovatif dan berguna.',
            ],
            [
                'productCode' => 'P009',
                'productName' => 'Produk D',
                'productLine' => 'Kategori 3',
                'productDescription' => 'Deskripsi produk D yang memiliki keunggulan teknis.',
            ],
            [
                'productCode' => 'P0010',
                'productName' => 'Produk E',
                'productLine' => 'Kategori 2',
                'productDescription' => 'Deskripsi produk E dengan kualitas terbaik di kelasnya.',
            ],
        ]);
    }
}
