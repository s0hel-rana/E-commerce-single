<?php

namespace App\Http\Controllers;

use App\Models\Admin\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $allProducts = Product::latest()->get();
        return view('user.home',compact('allProducts'));
    }
}
