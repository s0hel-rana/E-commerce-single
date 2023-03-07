<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        return view('admin.product.all_product');
    }
    public function addProduct(){
        return view('admin.product.add_product');
    }
}
