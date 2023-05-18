<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       
    }
    public function showProductRoot()
    {
        // Tìm category và product ban đầu
        $all_category = Category::all();
        $root_category = $all_category->where('parent_id', 0);
        self::format_tree($root_category,$all_category);
        $categories_lv_2 = Category::where('parent_id', '1')->get();

        //$products = DB::table('products')->where('category_id', $categories_lv_2[0]->id)->get();
        $categoryId = $categories_lv_2[0]->id;

        // truy vấn cái products option
        $products = Product::where('category_id', $categoryId)
            ->with('options')
            ->get();

        return view('menu', compact('root_category', 'products'));
               
    }
    
    function format_tree($root_category, $all_category)
    {
        foreach ($root_category as $cate) {
            $cate->children = $all_category->where('parent_id', $cate->id)->values();
            if ($cate->children->isNotEmpty()) {
                self::format_tree($cate->children, $all_category);
            }
        }
    }

    // Tìm sản phẩm theo menu
    public function showProductById($id_category)
    {
        // Tìm category và product ban đầu
        $all_category = Category::all();
        $root_category = $all_category->where('parent_id', 0);
        self::format_tree($root_category,$all_category);

        // Lấy con của pizza thức uống các thứ
        $categories_lv_2 = Category::where('parent_id', $id_category)->get();

        // categories_lv_2 0 có giá trị 
        // -> nhấn bò gà vịt các thứ
        // -> nhấn vào thức uống tráng miệng
        // Nếu lấy không được -> người dùng đang nhấn vào categories con & thức uống tráng miệng
        $result = "";
        if (count($categories_lv_2) == 0) {
            // lấy những categori con cùng cấp
            $parent_id = Category::where('id', $id_category)->get();

            if ($parent_id[0]->parent_id != 0) {
                $categories_lv_2 = Category::where('parent_id', $parent_id[0]->parent_id)->get();

                //$products = DB::table('products')->where('category_id', $id_category)->get();
                  // truy vấn cái products option
                  $products = Product::where('category_id', $id_category)
                  ->with('options')
                  ->get();
                 return view('menu', compact('root_category', 'products', 'result'));
            }
        }
        if (count($categories_lv_2) != 0) { 
            $products = Product::where('category_id', $categories_lv_2[0]->id)
                ->with('options')
                ->get();
            return view('menu', compact('root_category', 'products', 'result'));
        }
        if (count($categories_lv_2) == 0) {
            $products = Product::where('category_id', $id_category)
            ->with('options')
            ->get();
            return view('menu', compact('root_category', 'products', 'result'));
        }

        
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
    public function show(string $id)
    {
        //
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
