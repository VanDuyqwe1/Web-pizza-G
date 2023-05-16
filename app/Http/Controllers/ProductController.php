<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Detail_cart;
use App\Models\Product;
use App\Models\Product_option;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
       return view('thucdon');
        
    }

    public function showProductRoot()
    {
        // Tìm category và product ban đầu
        $all_category = Category::all();
        $root_category = $all_category->where('parent_id', 0);
        self::format_tree($root_category,$all_category);
        $categories_lv_2 = DB::table('categories')->where('parent_id', '1')->get();
        $products = DB::table('products')->where('category_id', $categories_lv_2[0]->id)->get();
        

        return view('thucdon', compact('root_category', 'products'));
               
    }

    public function showProductById($id_category)
    {
        // Tìm category và product ban đầu
        $all_category = Category::all();
        $root_category = $all_category->where('parent_id', 0);
        self::format_tree($root_category,$all_category);

        // Lấy con của pizza thức uống các thứ
        $categories_lv_2 = DB::table('categories')->where('parent_id', $id_category)->get();

        // categories_lv_2 0 có giá trị 
        // -> nhấn bò gà vịt các thứ
        // -> nhấn vào thức uống tráng miệng
        // Nếu lấy không được -> người dùng đang nhấn vào categories con & thức uống tráng miệng
        $result = "";
        if (count($categories_lv_2) == 0) {
            // lấy những categori con cùng cấp
            $parent_id = DB::table('categories')->where('id', $id_category)->get();

            if ($parent_id[0]->parent_id != 0) {
                $categories_lv_2 = DB::table('categories')->where('parent_id', $parent_id[0]->parent_id)->get();
                $products = DB::table('products')->where('category_id', $id_category)->get();
                return view('thucdon', compact('root_category', 'products', 'result'));
            }
        }
        if (count($categories_lv_2) != 0) { 
            $products = DB::table('products')->where('category_id', $categories_lv_2[0]->id)->get();
            return view('thucdon', compact('root_category', 'products', 'result'));
        }
        if (count($categories_lv_2) == 0) {
            $products = DB::table('products')->where('category_id', $id_category)->get();
            return view('thucdon', compact('root_category', 'products', 'result'));
        }

        
    }
    function format_tree($root_category, $all_category, $parent_id = 0, $str = "")
    {
        foreach ($root_category as $cate) {
            $cate->children = $all_category->where('parent_id', $cate->id)->values();
            if ($cate->children->isNotEmpty()) {
                self::format_tree($cate->children, $all_category);
            }
        }
    }

    public function autocompleteSearch(Request $request)
    {
        $query = $request->get('query');
        $filterResult = Product::where('name', 'LIKE', '%'. $query . '%')->get();
        return response()->json($filterResult);
    }
    public function handleForm(Request $request)
    {
        // Tìm category và product ban đầu
        $all_category = Category::all();
        $root_category = $all_category->where('parent_id', 0);
        self::format_tree($root_category,$all_category);
        $categories_lv_2 = DB::table('categories')->where('parent_id', '1')->get();

        // tìm theo từ khóa
        $keyword = $request->search;
        $products = Product::where('name', 'LIKE', '%'. $keyword . '%')->get();

        return view('thucdon', compact('root_category', 'products'));

    }


    public function create()
    {
        //
    }
    public function searchproduct()
    {
        return view('searchproduct');
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
    // public function showProductById($id_category)
    // {
    //     // hiển thị pizza thức uống tráng miệng... (bắt buộc có)
    //     $categories_lv_1 = DB::table('categories')->where('parent_id', 0)->get();

    //     // Lấy con của pizza thức uống các thứ
    //     $categories_lv_2 = DB::table('categories')->where('parent_id', $id_category)->get();

    //     // categories_lv_2 0 có giá trị 
    //     // -> nhấn bò gà vịt các thứ
    //     // -> nhấn vào thức uống tráng miệng
    //     // Nếu lấy không được -> người dùng đang nhấn vào categories con & thức uống tráng miệng
    //     if (count($categories_lv_2) == 0) {
    //         // lấy những categori con cùng cấp
    //         $parent_id = DB::table('categories')->where('id', $id_category)->get();

    //         if ($parent_id[0]->parent_id != 0) {
    //             $categories_lv_2 = DB::table('categories')->where('parent_id', $parent_id[0]->parent_id)->get();
    //             $products = DB::table('products')->where('category_id', $id_category)->get();
    //             return view('thucdon', compact('categories_lv_1', 'categories_lv_2', 'products'));
    //         }
    //     }
    //     if (count($categories_lv_2) != 0) { 
    //         $products = DB::table('products')->where('category_id', $categories_lv_2[0]->id)->get();
    //         return view('thucdon', compact('categories_lv_1', 'categories_lv_2', 'products'));
    //     }
    //     if (count($categories_lv_2) == 0) {
    //         $products = DB::table('products')->where('category_id', $id_category)->get();
    //         return view('thucdon', compact('categories_lv_1', 'categories_lv_2', 'products'));
    //     }

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
    // }



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
    public function destroy(string $id)
    {
        //
    }
}
