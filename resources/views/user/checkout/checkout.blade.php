@extends('user.layouts.template')
@section('main-content')
<div class="row">
    <div class="col-4">
        <div class="box_main">
            <h2>product will send at</h2>
            <p>Village : {{ $shipping->village }}</p>
            <p>City : {{ $shipping->city }}</p>
            <p>Postal Code : {{ $shipping->code }}</p>
            <p>Phone : {{ $shipping->phone }}</p>
        </div>
    </div>

    <div class="col-8">
        <div class="box_main">
            <h2>your final product</h2>
            <div class="table-resposive">
                <table class="table">
                    <thead>
                    <tr>
                        <th>SN</th>
                        <th>Product</th>
                        <th>Image</th>
                        <th>Quantity</th>
                        <th>Price</th>
                    </tr>
                    </thead>
                    <tbody>
    
                    @php $i=1;
                    $total = 0;
                     @endphp
                    @foreach($cartItems as $cart)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$cart->product->product_name }} </td>
                                <td><img style="height: 40px; width:50px;" src="{{ asset('/upload/'.$cart->product->image) }}"</td>
                                <td>{{$cart->qty}} </td>
                                <td>{{$cart->price}} </td>
                            </tr>
                            @php
                                $total += $cart->price;
                            @endphp
                    @endforeach
                    <tr>
                        <td><b>Total</b></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><b>{{ $total }}</b></td>
                    </tr>

                    </tbody>
    
                </table>
            </div>
        </div>
    </div>
</div>
@endsection