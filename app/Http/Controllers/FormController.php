<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;
use Validator;
use App\Models\Product;

class FormController extends Controller
{
    public function store(Request $request)
    {
        //バリデーション
        $validator = Validator::make($request->all(), [
         'product_name' => 'required|max:255',
        ]);
       
        //バリデーション:エラー 
        if ($validator->fails()) {
        return redirect('/')
        ->withInput()
        ->withErrors($validator);
        }
        //以下に登録処理を記述（Eloquentモデル）
        // Eloquent モデル
         $product = new Product;
         $product->product_name = $request->product_name;
         $product->quantities = $request->quantities;
         
         $product->save(); 

         return redirect('/product');
        }
        

    

    
    public function form()
        {
            return view('form');
        }
    public function product()
        {
            return view('product');
        }    

}