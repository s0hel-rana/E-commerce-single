<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Category;
use App\Models\Admin\Product;
use App\Models\Admin\SubCategory;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $products = Product::latest()->get();
        return view('admin.product.all_product',compact('products'));
    }
    public function addProduct(){
        $categories = Category::all();
        $subcategories = SubCategory::all();
        return view('admin.product.add_product',compact('categories','subcategories'));
    }
    public function store(Request $request){

        $validated = $request->validate([
            'product_name' => 'required|unique:products|max:255',
            'description' => 'required',
            'price' => 'required',
            'category_id' => 'required',
            'subcategory_id' => 'required',
            'qty' => 'required',
            'image' => 'required|image|mimes:jpeg,jpg,png,gif,svg|max:2048',
        ]);

        $image = $request->file('image');
        $img_name = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        $request->image->move(public_path('upload'),$img_name);
        $img_url = 'upload/' . $img_name;

        $category_id = $request->category_id;
        $subcategory_id = $request->subcategory_id;

        Product::insert([
            'product_name' =>$request->product_name,
            'description' =>$request->description,
            'price' =>$request->price,
            'category_id' =>$request->category_id,
            'subcategory_id' =>$request->subcategory_id,
            'image' =>$request->$img_url,
            'qty' =>$request->qty,
            'slug'=>strtolower(str_replace(' ','-',$request->product_name))
        ]);

        Category::where('id',$category_id)->increment('product_count',1);
        SubCategory::where('id',$subcategory_id)->increment('product_count',1);

        toastr()->success('Product has been created successfully!');
        return redirect()->route('all_product');
    }
}
