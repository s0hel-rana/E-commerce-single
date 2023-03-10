@extends('admin.layouts.template')
@section('page_content')
All Category
@endsection
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Page/</span> All Category</h4>
    
        <div class="card">
            <h5 class="card-header"><a class="btn btn-sm btn-info" href="{{ route('add_category') }}">Add Category</a></h5>
            <div class="table-responsive text-nowrap">
              <table class="table">
                <thead class="table-light">
                  <tr>
                    <th>Id</th>
                    <th>Category Name</th>
                    <th>Sub Category Count</th>
                    <th>Slug</th>
                    <th>Product Count</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                  @foreach ($categories as $key => $category )
                  <tr>
                    <td>{{ ++$key }}</td>
                    <td>{{ $category->category_name }}</td>
                    <td>{{ $category->subcategory_count }}</td>
                    <td>{{ $category->slug }}</td>
                    <td>{{ $category->product_count }}</td>
                    <td>
                        <a href="{{ route('edit_category',$category->id) }}" class="btn btn-sm btn-primary">Edit</a>
                        <a href="{{route('delete_category',$category->id)}}" class="btn btn-sm btn-danger" onclick="return confirm('are you sure?')">Delete</a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
    </div>
@endsection