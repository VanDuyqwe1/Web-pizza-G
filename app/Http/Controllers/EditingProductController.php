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
        $configs = $model->editingConfigs();
        return view('admin.editing', [
            'user' => $adminUser,
            'modelName' => $modelName,
            'configs' => $configs
        ]);
    }

    public function store(Request $request, $modelName)
    {
        $adminUser = Auth::guard('admin')->user();
        //doi duong dan co 
        $model = '\App\Models\\' . ucfirst($modelName);
        $model =  new $model;
        $configs = $model->editingConfigs();
        //bắt validatedd
        $arrayValidateFields = [];
        foreach ($configs as $config) {
            if (!empty($config['validate'])) {
                $arrayValidateFields[$config['field']] = $config['validate'];
            }
        }
       
        $validated = $request->validate($arrayValidateFields);
           
        
        echo "valied suxx";
        //báo lỗi

        
       
       
    }


}
