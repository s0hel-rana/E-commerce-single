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
        $filename = '';
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $filename = date('Ymdmhs') . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('/upload'), $filename);
        }

        $category_id = $request->category_id;
        $subcategory_id = $request->subcategory_id;

        Product::create([
            'product_name' => $request->product_name,
            'description' => $request->description,
            'price' => $request->price,
            'category_id' => $request->category_id,
            'subcategory_id' => $request->subcategory_id,
            'image' => $filename,
            'qty' => $request->qty,
            'slug'=>strtolower(str_replace(' ','-',$request->product_name)),
        ]);

        Category::where('id',$category_id)->increment('product_count',1);
        SubCategory::where('id',$subcategory_id)->increment('product_count',1);

        toastr()->success('Product has been created successfully!');
        return redirect()->route('all_product');
    }
    public function edit($id)
    {   $categories = Category::find($id);
        $subcategories = SubCategory::find($id);
        $product = Product::find($id);
        return view('admin.product.edit', compact('product','categories','subcategories'));
    }
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $filename = '';
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $filename = date('Ymdmhs') . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('/upload'), $filename);
        }
        $product->update([
            'product_name' => $request->product_name,
            'description' => $request->description,
            'price' => $request->price,
            'category_id' => $request->category_id,
            'subcategory_id' => $request->subcategory_id,
            'image' => $filename,
            'qty' => $request->qty,
            'slug'=>strtolower(str_replace(' ','-',$request->product_name)),
        ]);
        toastr()->success('Product has been updated  successfully!');
        return redirect()->route('all_product');
    }
    public function delete($id)
    {
        $product = Product::find($id);
        $image = str_replace('\\', '/', public_path('/upload' . $product->image));
        if (is_file($image)){
            unlink($image);
            $product->delete();
            toastr()->success('Deleted  successfully!');
            return redirect()->route('all_product');
        }else {
            $product->delete();
            toastr()->success('Deleted  successfully!');
            return redirect()->back();
        }
       
        

    }
}
