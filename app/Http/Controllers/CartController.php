<?php

  
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Session;
use App\Models\Cart;
class CartController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {
        $products = Product::all();
        return view('menu', compact('products'));
        
    }

    public function product(){
        $products = Product::all();
        
        return view('cart', compact('products'));
    }
  
    /**
     * Write code on Method
     * 
     * 
     *
     * @return response()
     */
    public function cart(Request $request)
    {
        $email = $request->email_account;
        $password = $request->password_account;
        $result = DB::table('users')->where('email',$email)->where('password',$password)->first();
        if($result){
            //$id = [Session::put('id',$result->id)];
            
        }
        
        $user = Auth::id();
        
        //lay id dang nhap cua nguoi dung
        $customer_id = Session::get('id');
        
        echo "$user";

        $products = DB::table('products')
        
        ->where('products.category_id', '9')->where('products.count_buy','>','60')
        
        ->get();

        $detail_cart = DB::table('detail_cart')
        ->join('products', 'detail_cart.id_product','=','products.id')
        ->join('users','detail_cart.id_cart','=','users.id')
        ->join('options','detail_cart.id_product_option','=','options.id')
        ->where('users.id',$user)
        ->select('detail_cart.quantity','detail_cart.id_product','products.name','products.image','products.description','products.price','users.usersname','options.add_price')
        ->get();

        
        return view('cart',compact('products'),compact('detail_cart'));
    }
    public function addToCart(Request $request){
        $data = $request->all();
        
        //$customer_id = [Session::get('id')];
        $user = [Auth::id()];
        $data+=$user;
        //echo "<pre>";print_r($data);die;
        DB::table('detail_cart')->insert(['id_cart'=>$data[0],'id_product'=>$data['id'],'id_product_option'=>1,'quantity'=>1]);
        return redirect('cart');
    }

    public function show(){
        
        return view('cart',compact('detail_cart'));
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    // public function addToCart($id)
    // {
    //     $product = Product::findOrFail($id);
          
    //     $cart = session()->get('cart', []);
  
    //     if(isset($cart[$id])) {
    //         $cart[$id]['quantity']++;
    //     } else {
    //         $cart[$id] = [
    //             "name" => $product->name,
    //             "quantity" => 1,
    //             "price" => $product->price,
    //             "image" => $product->image
    //         ];
    //     }
        
          
    //     session()->put('cart', $cart);
    //     return redirect()->back()->with('success', 'Product added to cart successfully!');
    // }
    
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function update(Request $request)
    {
        if($request->id && $request->quantity){
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart updated successfully');
        }
        
        
        
        // $$name = $request->input('name');

        // $customer_id = Session::get('id');
        // $update = DB::table('detail_cart')
        // ->where("id_cart",$customer_id)
        // ->update(['quantity'=> $request->quantity]);

        
    }
    public function updateCartQuantity($id=null,$quantity=null){
        
    }
    public function deleteCartProduct($id){
        DB::table('detail_cart')->where('id_product',$id)->delete();
        return redirect('cart');
        
    }
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function remove(Request $request)
    {
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            $delete = DB::table('detail_cart')
            ->where("id_cart",$customer_id)->delete();
            session()->flash('success', 'Product removed successfully');
        }
        
    }

}
