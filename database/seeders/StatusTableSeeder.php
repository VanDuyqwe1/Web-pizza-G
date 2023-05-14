<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class StatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('status')->insert(
            [
                ['name'=>'Chuẩn bị nguyên liệu', 'describe'=>'Nhân viên đang xem thông tin đơn hàng'],
                ['name'=>'Làm bột', 'describe'=>'Chúng tôi đang nhào nặn ra những chiếc bánh ngon nhất'],
                ['name'=>'Làm nước sốt', 'describe'=>'Nước sốt với thành phần chính là cà chua tự nhiên'],
                ['name'=>'Nưỡng bánh', 'describe'=>'Giai đoạn quan trọng nhất để xem bánh của bạn khét hay sống'],
                ['name'=>'Giao hàng', 'describe'=>'Nhân viên chúng tôi đang giao với vận tốc bàn thờ'],
                ['name'=>'Hoàn thành', 'describe'=>'Đơn hàng đã đến tay của bạn'],
                ['name'=>'Huỷ đơn', 'describe'=>'Đơn hàng đã bị huỷ bỏ'],
            ]
        );
    }
}
