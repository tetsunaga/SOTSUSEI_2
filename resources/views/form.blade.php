@extends('layouts.app')
 @section('content')
     <!-- Bootstrapの定形コード… -->
     <div class="card-body">
         <div class="card-title">
             製品の個数
        </div>
         <!-- バリデーションエラーの表示に使用-->
     
         <!-- バリデーションエラーの表示に使用-->
         <!-- 本登録フォーム -->
         <form action="{{url('/form')}}" method="POST" class="form-inline">
             {{ csrf_field() }}

             <!-- 製品名 -->
             <div>
             ID
            </div>
            <div>
            <input type="text" name="product_id" class="form-control">
            </div>
             <div>
             製品名
            </div>
            <div>
            <input type="text" name="product_name" class="form-control">
            </div>
            <div>
            個数
            </div>
            <div>
            <input type="text" name="quantities" class="form-control">
            </div>
            <!-- 登録ボタン -->
             <div class="form-group">
                 <div class="col-sm-offset-3 col-sm-6">
                     <button type="submit" class="btn btn-primary">
                         Save
                     </button>
                 </div>
             </div>
         </form>
     </div>
     <!-- products: 既に登録されてる製品のリスト -->
 @endsection