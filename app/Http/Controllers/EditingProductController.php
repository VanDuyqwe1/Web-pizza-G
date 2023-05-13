<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EditingProductController extends Controller
{
    
    public function create(Request $request, $modelName)
    {
        $adminUser = Auth::guard('admin')->user();
        //doi duong dan co 
        $model = '\App\Models\\' . ucfirst($modelName);
        $model =  new $model;
        return view('admin.editing', [
            'user' => $adminUser,
            'modelName' => $modelName
        ]);
    }
}
