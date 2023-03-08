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
                    <th>price</th>
                    <th>Category Name</th>
                    <th>Sub Category Name</th>
                    <th>Count</th>
                    <th>Image</th>
                    <th>Slug</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                  <tr>
                    <td>1</td>
                    <td>s c</td>
                    <td>s c</td>
                    <td>p</td>
                    <td>p</td>
                    <td>p</td>
                    <td>p</td>
                    <td>p</td>
                    <td>p</td>
                    <td>
                        <a href="#" class="btn btn-sm btn-primary">Edit</a>
                        <a href="#" class="btn btn-sm btn-danger">Delete</a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
    </div>
@endsection