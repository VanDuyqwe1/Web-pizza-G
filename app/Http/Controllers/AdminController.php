<?php
// Tâm An: 12/4/23
namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\FlareClient\View;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Session\Session;


class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

    }
    public function showCategoryRoot()
    {

        $categories_lv_1 = DB::table('categories')->where('parent_id', '0')->get();
        $categories_lv_2 = DB::table('categories')->where('parent_id', '1')->get();
        // [pizza, món phụ, tráng miệng, thức uống]
        // [hải sản, bò, gà, heo, ăn chay]
        // Lấy tất cả sản phẩn của pizza>hải sản
        $products = DB::table('products')->where('category_id', $categories_lv_2[0]->id)->get();

        return view('thucdon', compact('categories_lv_1', 'categories_lv_2', 'products'));
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
     */
    public function showProductById($id_category)
    {
        // hiển thị pizza thức uống tráng miệng... (bắt buộc có)
        $categories_lv_1 = DB::table('categories')->where('parent_id', 0)->get();

        // Lấy con của pizza thức uống các thứ
        $categories_lv_2 = DB::table('categories')->where('parent_id', $id_category)->get();

        // categories_lv_2 0 có giá trị 
        // -> nhấn bò gà vịt các thứ
        // -> nhấn vào thức uống tráng miệng
        // Nếu lấy không được -> người dùng đang nhấn vào categories con & thức uống tráng miệng
        if (count($categories_lv_2) == 0) {
            // lấy những categori con cùng cấp
            $parent_id = DB::table('categories')->where('id', $id_category)->get();

            if ($parent_id[0]->parent_id != 0) {
                $categories_lv_2 = DB::table('categories')->where('parent_id', $parent_id[0]->parent_id)->get();
                $products = DB::table('products')->where('category_id', $id_category)->get();
                return view('thucdon', compact('categories_lv_1', 'categories_lv_2', 'products'));
            }
        }
        if (count($categories_lv_2) != 0) { 
            $products = DB::table('products')->where('category_id', $categories_lv_2[0]->id)->get();
            return view('thucdon', compact('categories_lv_1', 'categories_lv_2', 'products'));
        }
        if (count($categories_lv_2) == 0) {
            $products = DB::table('products')->where('category_id', $id_category)->get();
            return view('thucdon', compact('categories_lv_1', 'categories_lv_2', 'products'));
        }

        //     $categories_lv_1 = DB::table('categories')->where('parent_id', $id_category)->get();
        //     $categories_lv_2 = DB::table('categories')->where('parent_id', $categories_lv_1[0]->id)->get();
        //     $products = DB::table('products')->where('category_id',$id_category)->get();

        // //     $categories = DB::table('categories')->get();
        // //     $products = DB::table('products')->get();

        // //     // $productBestSale = Product::orderBy('count_buy', 'desc')->limit(5)->get();

        // //     // $productsLLatest = Product::orderBy('count_buy', 'asc')->limit(3)->get();

        // //     // return view('thucdon', compact('productBestSale', 'productsLLatest'));
        // //     //$categories_lv_1 = DB::table('categories')->where('parent_id', '0')->get();
        // //     // $categories_lv_2 = DB::table('categories')->where('parent_id', '1')->get();

        // //     $categories_lv_2 = [];

        // //     if ($id == 1) {
        // //         $categories_lv_2 = DB::table('categories')->where('parent_id', '1')->get();
        // //     } else if ($id == 7) {
        // //         $categories_lv_2 = DB::table('categories')->where('parent_id', '7')->get();
        // //     } else {
        // //     }



        //     function data_tree($products, $categories, $id_lv_1)
        //     {
        //         $categories_lv_1 = [];
        //         // $categories_lv_2 =[];
        //         foreach ($categories as $item) {
        //             if ($item->parent_id == $id_lv_1) {
        //                 $categories_lv_1[] = $item;
        //                 $categories_lv_2 = data_tree($products, $categories, $item->id);
        //             }
        //             // else{
        //             //     foreach ($products as $item) {
        //             //         if($item->id == $id){
        //             //             $categories_lv_1[] = $item;
        //             //             $categories_lv_2 = data_tree($products, $categories, $item->id);
        //             //             $categories_lv_1 = array_merge($categories_lv_1, $categories_lv_2);
        //             //         }
        //             //     }

        //             // }

        //         }
        //         return $categories_lv_1;
        // };
        //     $categories_lv_1 = data_tree($products, $categories, 0);

        //     // $product_parentId_pizza =  DB::table('products')->where([
        //     //     ['category_id', '=', '2'],
        //     //     ['category_id', '=', '3'],
        //     //     ['category_id', '=', '4'],
        //     //     ['category_id', '=', '5'],
        //     //     ])
        //     //     ->get();   

        // return view('thucdon', compact('categories_lv_1', 'categories_lv_2','products'));

        //     return view('thucdon', compact('categories_lv_1', 'categories_lv_2', 'id', 'categories'));
    }



    public function phanLoaiTheoCategories()
    {
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
    public function destroy(CustomAuthController $user)
    {
        //Xoa user
	//Thực hiện câu lệnh xóa với giá trị id = $id trả về

    $user->delete();
    return redirect()->route('list.user');
    }
  
}
