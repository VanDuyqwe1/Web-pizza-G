<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\File;

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

        foreach ($configs as $config) {
            if (!empty($config['editing']) && $config['editing'] == true) {
                switch ($config['type']) {
                    case 'image':

                        //upload ảnh
                        if ($request->hasFile('image')) {
                            $name = $request->file($config['field'])->getClientOriginalName();

                            $path = $request->file($config['field'])->storeAs(
                                'public',
                                $name
                            );
                            $model->{$config['field']} = '/' . str_replace("public", "storage", $path);
                        }

                        break;

                    default:
                        $model->{$config['field']} = $request->input($config['field']);

                        break;
                }
            }
        }

        return view('admin.editing', [
            'success' => $model->save(),
            'modelName' => $modelName,
            'configs' => $configs
        ]);
    }
}
