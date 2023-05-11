<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class VouchersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('vouchers')->insert([
            ['code' => '100000','expiry' => '2023-12-20','discount' => 100000,'used' => 0,],
            ['code' => '100001','expiry' => '2023-9-23','discount' => 100001,'used' => 1,],
            ['code' => '100002','expiry' => '2023-8-28','discount' => 100002,'used' => 0,],
            ['code' => '100003','expiry' => '2023-6-2','discount' => 100003,'used' => 1,],
            ['code' => '100004','expiry' => '2023-8-7','discount' => 100004,'used' => 0,],
            ['code' => '100005','expiry' => '2023-8-23','discount' => 100005,'used' => 1,],
            ['code' => '100006','expiry' => '2023-8-13','discount' => 100006,'used' => 0,],
            ['code' => '100007','expiry' => '2023-9-14','discount' => 100007,'used' => 1,],
            ['code' => '100008','expiry' => '2023-9-16','discount' => 100008,'used' => 0,],
            ['code' => '100009','expiry' => '2023-9-11','discount' => 100009,'used' => 1,],
            ['code' => '100010','expiry' => '2023-7-28','discount' => 100010,'used' => 0,],
            ['code' => '100011','expiry' => '2023-11-2','discount' => 100011,'used' => 1,],
            ['code' => '100012','expiry' => '2023-9-25','discount' => 100012,'used' => 0,],
            ['code' => '100013','expiry' => '2023-7-27','discount' => 100013,'used' => 1,],
            ['code' => '100014','expiry' => '2023-9-13','discount' => 100014,'used' => 0,],
            ['code' => '100015','expiry' => '2023-12-10','discount' => 100015,'used' => 1,],
            ['code' => '100016','expiry' => '2023-6-17','discount' => 100016,'used' => 0,],
            



            // Chưa dùng
            ['code' => '200000','expiry' => '2023-12-16','discount' => 200000,'used' => 0,],
['code' => '200001','expiry' => '2023-12-16','discount' => 200001,'used' => 0,],
['code' => '200002','expiry' => '2023-9-16','discount' => 200002,'used' => 0,],
['code' => '200003','expiry' => '2023-8-7','discount' => 200003,'used' => 0,],
['code' => '200004','expiry' => '2023-10-29','discount' => 200004,'used' => 0,],
['code' => '200005','expiry' => '2023-11-19','discount' => 200005,'used' => 0,],
['code' => '200006','expiry' => '2023-12-8','discount' => 200006,'used' => 0,],
['code' => '200007','expiry' => '2023-10-23','discount' => 200007,'used' => 0,],
['code' => '200008','expiry' => '2023-11-12','discount' => 200008,'used' => 0,],
['code' => '200009','expiry' => '2023-10-30','discount' => 200009,'used' => 0,],
['code' => '200010','expiry' => '2023-8-9','discount' => 200010,'used' => 0,],
['code' => '200011','expiry' => '2023-7-1','discount' => 200011,'used' => 0,],
['code' => '200012','expiry' => '2023-6-30','discount' => 200012,'used' => 0,],
['code' => '200013','expiry' => '2023-10-17','discount' => 200013,'used' => 0,],
['code' => '200014','expiry' => '2023-12-25','discount' => 200014,'used' => 0,],
['code' => '200015','expiry' => '2023-7-22','discount' => 200015,'used' => 0,],
['code' => '200016','expiry' => '2023-6-30','discount' => 200016,'used' => 0,],
['code' => '200017','expiry' => '2023-11-5','discount' => 200017,'used' => 0,],
['code' => '200018','expiry' => '2023-8-7','discount' => 200018,'used' => 0,],
['code' => '200019','expiry' => '2023-10-17','discount' => 200019,'used' => 0,],
['code' => '200020','expiry' => '2023-6-30','discount' => 200020,'used' => 0,],
['code' => '200021','expiry' => '2023-9-12','discount' => 200021,'used' => 0,],
['code' => '200022','expiry' => '2023-11-13','discount' => 200022,'used' => 0,],
['code' => '200023','expiry' => '2023-7-24','discount' => 200023,'used' => 0,],
['code' => '200024','expiry' => '2023-7-18','discount' => 200024,'used' => 0,],
['code' => '200025','expiry' => '2023-7-10','discount' => 200025,'used' => 0,],
['code' => '200026','expiry' => '2023-10-30','discount' => 200026,'used' => 0,],
['code' => '200027','expiry' => '2023-7-22','discount' => 200027,'used' => 0,],
['code' => '200028','expiry' => '2023-9-18','discount' => 200028,'used' => 0,],


// đã dùng 
['code' => '300000','expiry' => '2023-12-11','discount' => 300000,'used' => 1,],
['code' => '300001','expiry' => '2023-8-11','discount' => 300001,'used' => 1,],
['code' => '300002','expiry' => '2023-8-4','discount' => 300002,'used' => 1,],
['code' => '300003','expiry' => '2023-6-16','discount' => 300003,'used' => 1,],
['code' => '300004','expiry' => '2023-7-25','discount' => 300004,'used' => 1,],
['code' => '300005','expiry' => '2023-9-18','discount' => 300005,'used' => 1,],
['code' => '300006','expiry' => '2023-10-2','discount' => 300006,'used' => 1,],
['code' => '300007','expiry' => '2023-10-29','discount' => 300007,'used' => 1,],
['code' => '300008','expiry' => '2023-12-28','discount' => 300008,'used' => 1,],
['code' => '300009','expiry' => '2023-6-26','discount' => 300009,'used' => 1,],
['code' => '300010','expiry' => '2023-11-26','discount' => 300010,'used' => 1,],
['code' => '300011','expiry' => '2023-11-13','discount' => 300011,'used' => 1,],
['code' => '300012','expiry' => '2023-12-20','discount' => 300012,'used' => 1,],
['code' => '300013','expiry' => '2023-9-15','discount' => 300013,'used' => 1,],
['code' => '300014','expiry' => '2023-6-25','discount' => 300014,'used' => 1,],

        ]);
    }
}
