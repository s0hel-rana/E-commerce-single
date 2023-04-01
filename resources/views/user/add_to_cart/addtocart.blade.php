@extends('user.layouts.template')
@section('main-content')

<h2 class="mt-8">Add to Cart</h2>
    <div class="row">
        <div class="col-12">
            <div class="box_main">
                <div class="table-resposive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>SN</th>
                            <th>Product</th>
                            <th>Image</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
        
                        @php $i=1;
                        $total = 0;
                         @endphp
                        @foreach($carts as $cart)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$cart->product->product_name }} </td>
                                    <td><img style="height: 40px; width:50px;" src="{{ asset('/upload/'.$cart->product->image) }}"</td>
                                    <td>{{$cart->qty}} </td>
                                    <td>{{$cart->price}} </td>
                                    <td>
                                        <a class="btn btn-danger" href="{{ route('cart_remove',$cart->id) }}" onclick="return confirm('are you sure !!!')" style="font-size:13px"><i class="fa fa-times" aria-hidden="true"></i></a>
                                    </td>
                                </tr>
                                @php
                                    $total += $cart->price;
                                @endphp
                        @endforeach
                        @if ($total > 0)
                        <tr>
                            <td><b>Total</b></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><b>{{ $total }}</b></td>
                            <td>
                                <a href="{{ route('shipping_address') }}" class="btn btn-sm btn-outline-primary">Checkout now</a>
                            </td>
                        </tr>
                        @endif

                        </tbody>
        
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection