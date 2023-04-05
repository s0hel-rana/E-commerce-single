<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(){
        $pendingOrders = Order::where('status','pending')->latest()->get();
        return view('admin.order.all_pending_order',compact('pendingOrders'));
    }
}
