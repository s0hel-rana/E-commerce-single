@extends('admin.layouts.template')
@section('page_content')
All Orders
@endsection
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Page/</span> All Orders</h4>
        <div class="card">
            <h5 class="card-header">Available Orders Information</h5>
            <div class="table-responsive text-nowrap">
              <table class="table">
                <thead class="table-light">
                  <tr>
                    <th>Id</th>
                    <th>User Id</th>
                    <th>Phone</th>
                    <th>VIllage</th>
                    <th>City</th>
                    <th>Code</th>
                    <th>Product Name</th>
                    <th>Qty</th>
                    <th>Price</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                  @php
                    $i = 1;
                  @endphp
                  @foreach ($pendingOrders as $pendingOrder)
                  <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $pendingOrder->userId }}</td>
                    <td>{{ $pendingOrder->phone }}</td>
                    <td>{{ $pendingOrder->village }}</td>
                    <td>{{ $pendingOrder->city }}</td>
                    <td>{{ $pendingOrder->code }}</td>
                    <td>{{ $pendingOrder->product_name }}</td>
                    <td>{{ $pendingOrder->qty }}</td>
                    <td>{{ $pendingOrder->price }}</td>
                    <td>
                        <a href="#" class="btn btn-sm btn-success">Approve now</a>
                    </td>
                  </tr>
                  @endforeach
                  
                </tbody>
              </table>
            </div>
          </div>
    </div>
@endsection