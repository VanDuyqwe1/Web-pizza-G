<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OptionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('options')->insert([
            // pizza
            [
                'name' => 'Bánh nhỏ',
                'add_price' => 0,
            ],
            [
                'name' => 'Bánh vừa',
                'add_price' => 90000,
            ],
            [
                'name' => 'Bánh lớn',
                'add_price' => 160000,
            ],

            // Thức uống
            [
                'name' => 'Chai nhỏ',
                'add_price' => 10000,
            ],
            [
                'name' => 'Chai lớn',
                'add_price' => 20000,
            ],



        ]);
    }
}
