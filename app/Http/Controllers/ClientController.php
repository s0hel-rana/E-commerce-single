<?php

namespace App\Http\Controllers;

use App\Models\Admin\Category;
use App\Models\Admin\Product;
use App\Models\Admin\SubCategory;
use App\Models\Cart;
use App\Models\Order;
use App\Models\ShippingInfo;
use App\Models\User;
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
        $product = Product::all();
        $carts = Cart::latest()->get();
        return view('user.add_to_cart.addtocart',compact('product','carts'));
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
    //remove add to cart
    public function remove($id){
        Cart::findOrFail($id)->delete();
        toastr()->success('Items is removed successfully!');
        return redirect()->route('add_to_cart');
    }
    public function getShippingAddress(){
        return view('user.shipping.shippingadd');
    }
    public function addShippingAddress(Request $request){
        $validated = $request->validate([
            'phone' => 'required',
            'village' => 'required',
            'city' => 'required',
            'code' => 'required',
        ]);
        ShippingInfo::create([
            'user_id' => Auth::id(),
            'phone' => $request->phone,
            'village' => $request->village,
            'city' => $request->city,
            'code' => $request->code
            
        ]);
        toastr()->success('shipping has been successfully!');
        return redirect()->route('check_out');
    }
    public function checkOut(){
        $userId = Auth::id();
        $cartItems = Cart::where('user_id',$userId)->get();
        $shipping = ShippingInfo::where('user_id',$userId)->first();
        return view('user.checkout.checkout',compact('cartItems','shipping'));
    }

    //order 
    public function placeOrder(){
        $userId = Auth::id();
        $shipping = ShippingInfo::where('user_id',$userId)->first();
        $cartItems = Cart::where('user_id',$userId)->get();

        foreach($cartItems as $item){
            Order::create([
                'userId' => $userId,
                'phone' => $shipping->phone,
                'village' => $shipping->village,
                'city' => $shipping->city,
                'code' => $shipping->code,
                'product_name' => $item->product->product_name,
                'qty' => $item->qty,
                'price' => $item->price
            ]);
            $id = $item->id;
            Cart::findOrFail($id)->delete();
        }
        ShippingInfo::where('user_id',$userId)->first()->delete();

        toastr()->success('Your order has been placed successfully!');
        return redirect()->route('user_pending_order');
    }
    //user profile
    public function userProfile(){
        return view('user.profile.user_profile');
    }
    //user pending order
    public function pendingOrder(){
        $pendingOrders = Order::where('status','pending')->latest()->get();
        return view('user.profile.user_pending_order',compact('pendingOrders'));
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
