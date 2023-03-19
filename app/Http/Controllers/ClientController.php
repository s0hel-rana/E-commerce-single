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
