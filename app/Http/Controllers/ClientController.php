<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function categoryPage(){
        return view('user.category.category_page');
    }
    //product
    public function singleProduct(){
        return view('user.product.index');
    }
    //user profile
    public function userProfile(){
        return view('user.profile.user_profile');
    }

}
