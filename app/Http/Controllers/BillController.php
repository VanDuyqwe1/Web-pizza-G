<?php

namespace App\Http\Controllers;

use App\Models\Bill;
use App\Models\BillDetail;
use App\Models\Status;
use Illuminate\Support\Str;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Facades\Crypt;
 
use Illuminate\Http\Request;

class BillController extends Controller
{
    /**
     * Display a listing of the resource.
     * hiển thị mặc định lúc đầu là id_status =1 (chuẩn bị nguyên liệu)
     */
    public function index($id_user = 10, $id_status = 1)
    {

        // Danh sách các trạng thái trả về để hiển thị butotn 
        $list_status = Status::all();

        // Danh sách các đơn hàng có id_status mặc đinh là 1 (chuẩn bị đơn hàng) để hiển thị đầu tiên
        $list_bills = Bill::where('id_status', $id_status)
            ->where('id_user', 10)
            ->join('vouchers', 'bills.id_voucher', '=', 'vouchers.id')
            ->select('bills.*', 'vouchers.discount')
            ->get();
      


        

        return view('bill_tracking.tracking', compact('list_bills', 'list_status'));
    }




    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     * Hiển thị thông tin đc chỉ định (lấy theo id_status truyền vào)
     */
    public function show($slug,$id_status)
    {

        // Danh sách các trạng thái trả về để hiển thị butotn 
        $list_status = Status::all();
        
        // Danh sách các đơn hàng có id_status mặc đinh là 1 (chuẩn bị đơn hàng) để hiển thị đầu tiên
        // $list_bills = Bill::where('id_status', $id_status)
        //     ->where('id_user', 10)
        //     ->join('vouchers', 'bills.id_voucher', '=', 'vouchers.id')
        //     ->select('bills.*', 'vouchers.discount')
        //     ->get();
        $list_bills = Bill::where('id_status', Crypt::decryptString($id_status))
        ->where('id_user', 10)
        ->leftJoin('vouchers', 'bills.id_voucher', '=', 'vouchers.id')
        ->select('bills.*', 'vouchers.discount')
        ->get();

        
        return view('bill_tracking.tracking', compact('list_bills', 'list_status'));
        
    }
    public function bill_detail($id_bill)
    {
        // Danh sách các trạng thái trả về để hiển thị butotn 
        $list_status = Status::all();
        $bill = Bill::where('id', $id_bill)->get();
        $products = BillDetail::where('id_bill', $id_bill)->get();
        return view('billDetail', compact('list_status', 'bill','products'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    
}
