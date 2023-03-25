<?php

namespace App\Http\Controllers;

use App\Models\Admin\Category;
use App\Models\Admin\Product;
use App\Models\Admin\SubCategory;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClientController extends Controller
{
    public function categoryPage($id){
        $category = Category::findOrFail($id);
        $products = Product::where('category_id',$id)->latest()->get();
        return view('user.category.category_page',compact('category','products'));
    }
    public function subCategory($id){
        $subcategory = SubCategory::findOrFail($id);
        $products = Product::where('subcategory_id',$id)->latest()->get();
        return view('user.subcategory.subcategory',compact('subcategory','products'));
    }
    //product
    public function productDetails($id){
        $product = Product::findOrFail($id);
        $category_id = Product::where('id',$id)->value('category_id');
        $related_products = Product::where('category_id',$category_id)->latest()->get();
        return view('user.product.index',compact('product','related_products'));
    }
    public function addToCart(){
        return view('user.add_to_cart.addtocart');
    }
    //add to cart
    public function addToProductCart(Request $request){
        $product_price = $request->price;
        $cart_qty = $request->qty;
        $price = $product_price * $cart_qty;

        $product_cart = new Cart();
        $product_cart->product_id = $request->product_id;
        $product_cart->user_id = Auth::id();
        $product_cart->qty = $request->qty;
        $product_cart->price = $price;
        $product_cart->save();
        toastr()->success('Your items added to cart successfully!');
        return redirect()->route('add_to_cart');
    }
    //user profile
    public function userProfile(){
        return view('user.profile.user_profile');
    }
    //user pending order
    public function pendingOrder(){
        return view('user.profile.user_pending_order');
    }
    //user history
    public function userHistory(){
        return view('user.profile.user_history');
    }
    // gift idea
    public function giftIdea(){
        return view('user.giftIdea.giftidea');
    }
    //new release
    public function newRelease(){
        return view('user.newRelease.newrelease');
    }
    //today deals
    public function todayDeals(){
        return view('user.todayDeals.todaydeals');
    }
    //customer service
    public function customerService(){
        return view('user.customerService.customerservice');
    }

}
