<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::all();
        return view('admin.category.all_category',compact('categories'));
    }
    public function addCategory(){
        return view('admin.category.add_category');
    }
    //__category store method__//
    public function storeCategory (Request $request){

        $validated = $request->validate([
            'category_name' => 'required|unique:categories|max:255',
        ]);

        $category = new Category();
        $category->category_name = $request->category_name;
        $category->slug = strtolower(str_replace(' ','-',$request->category_name));
        $category->save();
        toastr()->success('Category has been created successfully!');
        return redirect()->route('all_category');
    }
}
