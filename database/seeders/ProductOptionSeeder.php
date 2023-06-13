<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductOptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('product_option')->insert([
            // Hải sản pizza
            ['product_id' => 1, 'option_id' => 1,],

            ['product_id' => 1, 'option_id' => 2,],

            ['product_id' => 1, 'option_id' => 3,],

            ['product_id' => 2, 'option_id' => 1,],

            ['product_id' => 2, 'option_id' => 2,],

            ['product_id' => 2, 'option_id' => 3,],

            ['product_id' => 3, 'option_id' => 1,],

            ['product_id' => 3, 'option_id' => 2,],

            ['product_id' => 3, 'option_id' => 3,],

            ['product_id' => 4, 'option_id' => 1,],

            ['product_id' => 4, 'option_id' => 2,],

            ['product_id' => 4, 'option_id' => 3,],

            ['product_id' => 5, 'option_id' => 1,],

            ['product_id' => 5, 'option_id' => 2,],

            ['product_id' => 5, 'option_id' => 3,],

            ['product_id' => 6, 'option_id' => 1,],

            ['product_id' => 6, 'option_id' => 2,],

            ['product_id' => 6, 'option_id' => 3,],

            // pizza bò
            ['product_id' => 7, 'option_id' => 1,],

            ['product_id' => 7, 'option_id' => 2,],

            ['product_id' => 7, 'option_id' => 3,],

            ['product_id' => 8, 'option_id' => 1,],

            ['product_id' => 8, 'option_id' => 2,],

            ['product_id' => 8, 'option_id' => 3,],

            ['product_id' => 9, 'option_id' => 1,],

            ['product_id' => 9, 'option_id' => 2,],

            ['product_id' => 9, 'option_id' => 3,],

            ['product_id' => 10, 'option_id' => 1,],

            ['product_id' => 10, 'option_id' => 2,],

            ['product_id' => 10, 'option_id' => 3,],

            ['product_id' => 11, 'option_id' => 1,],

            ['product_id' => 11, 'option_id' => 2,],

            ['product_id' => 11, 'option_id' => 3,],
            // pizza gà
            ['product_id' => 12, 'option_id' => 1,],

            ['product_id' => 12, 'option_id' => 2,],

            ['product_id' => 12, 'option_id' => 3,],

            ['product_id' => 13, 'option_id' => 1,],

            ['product_id' => 13, 'option_id' => 2,],

            ['product_id' => 13, 'option_id' => 3,],

            ['product_id' => 14, 'option_id' => 1,],

            ['product_id' => 14, 'option_id' => 2,],

            ['product_id' => 14, 'option_id' => 3,],
            // piiza heo
            ['product_id' => 15, 'option_id' => 1,],

            ['product_id' => 15, 'option_id' => 2,],

            ['product_id' => 15, 'option_id' => 3,],

            ['product_id' => 16, 'option_id' => 1,],

            ['product_id' => 16, 'option_id' => 2,],

            ['product_id' => 16, 'option_id' => 3,],

            ['product_id' => 17, 'option_id' => 1,],

            ['product_id' => 17, 'option_id' => 2,],

            ['product_id' => 17, 'option_id' => 3,],

            ['product_id' => 18, 'option_id' => 1,],

            ['product_id' => 18, 'option_id' => 2,],

            ['product_id' => 18, 'option_id' => 3,],

            ['product_id' => 19, 'option_id' => 1,],

            ['product_id' => 19, 'option_id' => 2,],

            ['product_id' => 19, 'option_id' => 3,],

            ['product_id' => 20, 'option_id' => 1,],

            ['product_id' => 20, 'option_id' => 2,],

            ['product_id' => 20, 'option_id' => 3,],

            // ăn chay
            ['product_id' => 21, 'option_id' => 1,],
            ['product_id' => 21, 'option_id' => 2,],
            ['product_id' => 21, 'option_id' => 3,],
            ['product_id' => 22, 'option_id' => 1,],
            ['product_id' => 22, 'option_id' => 2,],
            ['product_id' => 22, 'option_id' => 3,],

            // Thức uống
            ['product_id' => 39, 'option_id' => 4,],

            ['product_id' => 39, 'option_id' => 5,],

            ['product_id' => 40, 'option_id' => 4,],

            ['product_id' => 40, 'option_id' => 5,],

            ['product_id' => 41, 'option_id' => 4,],

            ['product_id' => 41, 'option_id' => 5,],

            ['product_id' => 42, 'option_id' => 4,],

            ['product_id' => 42, 'option_id' => 5,],

            ['product_id' => 43, 'option_id' => 4,],

            ['product_id' => 43, 'option_id' => 5,],

            ['product_id' => 44, 'option_id' => 4,],

            ['product_id' => 44, 'option_id' => 5,],

            ['product_id' => 45, 'option_id' => 4,],

            ['product_id' => 45, 'option_id' => 5,],

            ['product_id' => 46, 'option_id' => 4,],

            ['product_id' => 46, 'option_id' => 5,],

            ['product_id' => 47, 'option_id' => 4,],

            ['product_id' => 47, 'option_id' => 5,],

            ['product_id' => 48, 'option_id' => 4,],

            ['product_id' => 48, 'option_id' => 5,],

            ['product_id' => 49, 'option_id' => 4,],

            ['product_id' => 49, 'option_id' => 5,],

            ['product_id' => 50, 'option_id' => 4,],

            ['product_id' => 50, 'option_id' => 5,],

            ['product_id' => 51, 'option_id' => 4,],

            ['product_id' => 51, 'option_id' => 5,],


        ]);
    }
}
