@extends('user.layouts.template')
@section('main-content')
<h3>User Pending</h3>
<div class="col-8">
    <div class="box_main">
        <h2>your pending product</h2>
        <div class="table-resposive">
            <table class="table">
                <thead>
                <tr>
                    <th>SN</th>
                    <th>Phone</th>
                    <th>VIllage</th>
                    <th>City</th>
                    <th>Code</th>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Price</th>
                </tr>
                </thead>
                <tbody>

                @php $i=1;
                 @endphp
                @foreach($pendingOrders as $pendingOrder)
                        <tr>
                            <td>{{$i++}}</td>
                            <td>{{$pendingOrder->phone }} </td>
                            <td>{{$pendingOrder->village }} </td>
                            <td>{{$pendingOrder->city }} </td>
                            <td>{{$pendingOrder->code }} </td>
                            <td>{{$pendingOrder->product_name }} </td>
                            <td>{{$pendingOrder->qty}} </td>
                            <td>{{$pendingOrder->price}} </td>
                        </tr>
                @endforeach
                </tbody>

            </table>
        </div>
    </div>
</div>
@endsection