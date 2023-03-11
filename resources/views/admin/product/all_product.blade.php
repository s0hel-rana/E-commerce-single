@extends('admin.layouts.template')
@section('page_content')
All Products
@endsection
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Page/</span> All Products</h4>
        <div class="card">
            <h5 class="card-header">Available Products Information</h5>
            <div class="table-responsive text-nowrap">
              <table class="table">
                <thead class="table-light">
                  <tr>
                    <th>Id</th>
                    <th>Product Name</th>
                    <th>Description</th>
                    <th>Category</th>
                    <th>Sub-Category</th>
                    <th>price</th>
                    <th>Image</th>
                    <th>Quantity</th>
                    <th>Slug</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                  @foreach ($products as $key => $product )
                  <tr>
                    <td>{{ ++$key }}</td>
                    <td>{{ $product->product_name }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->category->category_name  }}</td>
                    <td>{{ $product->subcategory->subcategory_name  }}</td>
                    <td>{{ $product->price }}</td>
                    <td><img src="{{ asset('/upload/'.$product->image) }}" alt="" style="height:80px;width:120px;"></td>
                    <td>{{ $product->qty }}</td>
                    <td>{{ $product->slug }}</td>
                    <td>
                        <a href="{{ route('edit_product',$product->id) }}" class="btn btn-sm btn-primary">Edit</a>
                        <a href="{{ route('delete_product',$product->id) }}" class="btn btn-sm btn-danger" onclick="return confirm('are you sure?')">Delete</a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
    </div>
@endsection