<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        return view('admin.category.all_category');
    }
    public function addCategory(){
        return view('admin.category.add_category');
    }
}