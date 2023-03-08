<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    public function index(){
        return view('admin.sub_category.all_sub_category');
    }
    public function addSubCategory(){
        return view('admin.sub_category.add_sub_category');
    }
    
}
