<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BillDetailTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('bill_detail')->insert([
            // ['id_bill' => 0, 'id_product'=>14,'quantity'=>4,'id_option' => 3],
            ['id_bill' => 1, 'id_product'=>1,'quantity'=>2,'id_option' => 1],
            ['id_bill' => 1, 'id_product'=>2,'quantity'=>2,'id_option' => 2],
            ['id_bill' => 1, 'id_product'=>3,'quantity'=>2,'id_option' => 3],
            // ['id_bill' => 0, 'id_product'=>14,'quantity'=>4,'id_option' => 3],
            ['id_bill' => 2, 'id_product'=>3,'quantity'=>2,'id_option' => 1],
            ['id_bill' => 2, 'id_product'=>4,'quantity'=>2,'id_option' => 2],
            ['id_bill' => 2, 'id_product'=>5,'quantity'=>2,'id_option' => 3],
            // ['id_bill' => 0, 'id_product'=>14,'quantity'=>4,'id_option' => 3],
            ['id_bill' => 3, 'id_product'=>6,'quantity'=>2,'id_option' => 1],
            ['id_bill' => 3, 'id_product'=>7,'quantity'=>2,'id_option' => 2],
            ['id_bill' => 3, 'id_product'=>8,'quantity'=>2,'id_option' => 3],
            // ['id_bill' => 0, 'id_product'=>14,'quantity'=>4,'id_option' => 3],
            ['id_bill' => 4, 'id_product'=>9,'quantity'=>2,'id_option' => 1],
            ['id_bill' => 4, 'id_product'=>10,'quantity'=>2,'id_option' => 2],
            ['id_bill' => 4, 'id_product'=>11,'quantity'=>2,'id_option' => 3],
            // ['id_bill' => 0, 'id_product'=>14,'quantity'=>4,'id_option' => 3],
            ['id_bill' => 5, 'id_product'=>12,'quantity'=>2,'id_option' => 1],
            ['id_bill' => 5, 'id_product'=>13,'quantity'=>2,'id_option' => 2],
            ['id_bill' => 5, 'id_product'=>14,'quantity'=>2,'id_option' => 3],
            // ['id_bill' => 0, 'id_product'=>14,'quantity'=>4,'id_option' => 3],
            ['id_bill' => 6, 'id_product'=>15,'quantity'=>2,'id_option' => 1],
            ['id_bill' => 6, 'id_product'=>16,'quantity'=>2,'id_option' => 2],
            ['id_bill' => 6, 'id_product'=>17,'quantity'=>2,'id_option' => 3],
            
            // ['id_bill' => 0, 'id_product'=>14,'quantity'=>4,'id_option' => 3],
            ['id_bill' => 7, 'id_product'=>15,'quantity'=>2,'id_option' => 1],
            ['id_bill' => 7, 'id_product'=>16,'quantity'=>2,'id_option' => 2],
            ['id_bill' => 7, 'id_product'=>17,'quantity'=>2,'id_option' => 3],
            

        ]);
    }
}
