<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class CustomAuthController extends Controller
{

    public function index()
    {
        return view('auth.login');
    }  
      
    public function customLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
   
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')
                        ->withSuccess('Signed in');
        }
  
        return redirect("login")->withSuccess('Login details are not valid');
    }

    public function registration()
    {
        return view('auth.registration');
    }
      
    public function customRegistration(Request $request)
    {  
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'image' => ['image'],
            
        ]);
           
        $data = $request->all();
        $check = $this->create($data);

        //bổ xung khi dăng kí thành công tự dộng đăng nhập
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')
                        ->withSuccess('Signed in');
        }
         
        //hàm cũ trả về trang đăng nhập
        // return redirect("dashboard")->withSuccess('You have signed-in');
    }

    public function create(array $data)
    {
        if(request()->hasfile('avatar')){
            $avatarName = time().'.'.request()->avatar->getClientOriginalExtension();
            request()->avatar->move(public_path('avatars'), $avatarName);
        }

      return User::create([
        'name' => $data['name'],
        'avatar' => $avatarName ?? NULL,
        'phone' => $data['phone'],
        'email' => $data['email'],
        'password' => Hash::make($data['password'])

      ]);
    }    
    
    public function dashboard()
    {
        if(Auth::check()){

            $products = Product::all();

            $productBestSale = Product::orderBy('count_buy', 'desc')->limit(5)->get();
            $productsLLatest = Product::orderBy('count_buy', 'asc')->limit(3)->get();
    
            return view('homepage', compact('productBestSale', 'productsLLatest'));
        }
  
        return redirect("login")->withSuccess('You are not allowed to access');
    }
    
    public function voucher()
    {
       
            return view('voucher');
        
  
      
    }
    public function promotion()
    {
       
            return view('promotion');
        
  
      
    }
    public function menu()
    {
       
            return view('menu');
        
  
      
    }
    public function orderTracking()
    {
       
            return view('orderTracking');
        
  
      
    }
    public function storeListing()
    {
       
            return view('storeListing');
        
  
      
    }
    public function blog()
    {
       
            return view('blog');
        
  
      
    }
    
    public function signOut() {
        Session::flush();
        Auth::logout();
  
        return Redirect('login');
    }


    public function show()
    {

        $users = User::all();
        $user = Auth::user();
        return view('viewuser', [ 'nguoidung' => $user, 'users' => $users ]);
        
    }  
    public function home(){
        $products = Product::all();
        // return view('viewuser'); 
        return view('homepage', ['products' => $products ]);
    }
}
