<?php

namespace App\Http\Controllers;

use App\Models\Admin\Category;
use App\Models\Admin\Product;
use App\Models\Admin\SubCategory;
use Illuminate\Http\Request;

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
    public function singleProduct(){
        return view('user.product.index');
    }
    //user profile
    public function userProfile(){
        return view('user.profile.user_profile');
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
