<?php

namespace App\Http\Controllers;
use Cart;
use DB;
use Session;
use App\Order;
use App\Product;
use App\OrderProduct;
use App\Mail\OrderPlaced;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\CheckoutRequest;
//use Gloudemans\Shoppingcart\Facades\Cart;
use Cartalyst\Stripe\Laravel\Facades\Stripe;
use Cartalyst\Stripe\Exception\CardErrorException;

class CheckoutController extends Controller
{
public function login_checkout(){
    return view('login_checkout');
}
public function add_customer(Request $request){
    $data = array();
    $data['usersname'] = $request->usersname;
    $data['email'] = $request->email;
    $data['password'] = $request->password;
    $data['number_phone'] = $request->number_phone;

    $user_id = DB::table('users')->insertGetId($data);

    Session::put('id',$user_id);
    Session::put('usersname',$request->usersname);
    return Redirect('/checkout');
}

    public function index(){
        return view('checkout');
    }
    public function addToCart($id)
    {
        $product = Product::findOrFail($id);
          
        $cart = session()->get('cart', []);
  
        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "name" => $product->name,
                "quantity" => 1,
                "price" => $product->price,
                "image" => $product->image
            ];
        }
          
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product added to cart successfully!');
        
    }
    public function cart()
    {
        return view('cart');
    }
    public function destroyCart(){
        Cart::destroy();
    }
    public function save_checkout_customer(Request $request){
        $data = array();
    $data['name'] = $request->name;
    $data['email'] = $request->email;
    $data['phone'] = $request->phone;
    $data['address'] = $request->address;

    $user_id = DB::table('checkout')->insertGetId($data);

    Session::put('id',$user_id);
    // Session::put('name',$request->name);
    //Cart::destroy();
    }
    public function payment(){

    }
    public function logout_checkout(){
        Session::flush();
        return Redirect('/login-checkout');
    }
    public function login_customer(Request $request){
        $email = $request->email_account;
        $password = $request->password_account;
        $result = DB::table('users')->where('email',$email)->where('password',$password)->first();
        if($result){
            Session::put('id',$result->id);
            return Redirect('/checkout');
        }else{
            return Redirect('/login-checkout');
        }
    
    }
}
