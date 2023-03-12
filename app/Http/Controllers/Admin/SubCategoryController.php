<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Category;
use App\Models\Admin\SubCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    public function index(){
        $subCategories = SubCategory::latest()->get();
        return view('admin.sub_category.all_sub_category',compact('subCategories'));
    }
    public function addSubCategory(){
        $categories = Category::all();
        return view('admin.sub_category.add_sub_category',compact('categories'));
    }
    public function store(Request $request){

        $validated = $request->validate([
            'subcategory_name' => 'required|unique:sub_categories|max:255',
        ]);
        $category_id = $request->category_id;

        SubCategory::insert([
            'subcategory_name' =>$request->subcategory_name,
            'slug'=>strtolower(str_replace(' ','-',$request->subcategory_name)),
            'category_id' =>$request->category_id
        ]);

        Category::where('id',$category_id)->increment('subcategory_count',1);

        toastr()->success('Sub Category has been created successfully!');
        return redirect()->route('all_sub_category');
    }
    public function edit($id){
        $categories = Category::all();
        $subCategory = SubCategory::find($id);
        return view('admin.sub_category.edit',compact('subCategory','categories'));
    }
    public function update (Request $request,$id){
        $subCategory = SubCategory::find($id);
        $subCategory->update([
            'subcategory_name' => $request->subcategory_name,
            'category_id' => $request->category_id,
            'slug'=>strtolower(str_replace(' ','-',$request->subcategory_name)),
        ]);
        toastr()->success('Sub Category has been updated successfully!');
        return redirect()->route('all_sub_category');
    }
    public function delete($id){
        $subCategory = SubCategory::find($id);
        $subCategory->delete();
        toastr()->success('Sub Category has been deleted successfully!');
        return redirect()->route('all_sub_category');
    }
    
}
