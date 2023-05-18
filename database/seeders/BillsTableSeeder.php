<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class BillsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('bills')->insert(
            [
                ['id_user'=>'10','id_status'=>'1','id_voucher'=>1,'address'=>'Linh đông',],
                ['id_user'=>'2','id_status'=>'2','id_voucher'=>2,'address'=>'Linh đông',],
                ['id_user'=>'3','id_status'=>'3','id_voucher'=>3,'address'=>'Linh đông',],
                ['id_user'=>'4','id_status'=>'4','id_voucher'=>4,'address'=>'Linh đông',],
                ['id_user'=>'5','id_status'=>'5','id_voucher'=>5,'address'=>'Linh đông',],
                ['id_user'=>'6','id_status'=>'6','id_voucher'=>6,'address'=>'Linh đông',],
                ['id_user'=>'7','id_status'=>'7','id_voucher'=>7,'address'=>'Linh đông',],
                
            ]
        );
    }
}
