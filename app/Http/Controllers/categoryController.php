<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;

class categoryController extends Controller
{
    public function getCategory(){
        return response()->json(category::all(),200);
    }

    public function getCategoryId($id){
        $category = category::find($id);
        if(is_null($category)){
            return response()->json(['Mensaje' => 'Registro no encontrado'],404);
        }
        return response()->json($category,200);
    }

    public function insertCategory(Request $request){
        $category = category::create($request->all());
        return response($category,200);
    }

    public function updateCategory(Request $request, $id){
        $category = category::find($id);
        if(is_null($category)){
            return response()->json(['Mensaje' => 'Registro no encontrado'],404);
        }
        $category->cat_nom = $request->cat_nom;
        $category->cat_obs = $request->cat_obs;
        $category->save();
        return response($category,200);
    }

    public function deleteCategory($id){
        $category = category::find($id);
        if(is_null($category)){
            return response()->json(['Mensaje' => 'Registro no encontrado'],404);
        }
        $category->delete();
        return response()->json(['Mensaje' => 'Registro eliminado'],200);
    }
}
