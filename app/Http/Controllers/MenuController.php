<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function menu()
    {
     $menu = 'MENU';
     
     return view('menu', compact('cost'));
     
}
}