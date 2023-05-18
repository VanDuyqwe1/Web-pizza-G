<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Detail_CartTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('detail_cart')->insert([
            ['id_cart' => '1', 'id_product' => '1', 'id_product_option' => '1', 'quantity' => '1',],
            ['id_cart' => '1', 'id_product' => '2', 'id_product_option' => '2', 'quantity' => '2',],
            ['id_cart' => '1', 'id_product' => '3', 'id_product_option' => '3', 'quantity' => '3',],
            ['id_cart' => '1', 'id_product' => '39', 'id_product_option' => '4', 'quantity' => '3',],
            ['id_cart' => '1', 'id_product' => '40', 'id_product_option' => '5', 'quantity' => '3',],


        ]);
    }
}
