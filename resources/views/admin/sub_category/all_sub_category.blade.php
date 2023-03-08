@extends('admin.layouts.template')
@section('page_content')
All Sub Category
@endsection
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Page/</span> All Sub Category</h4>
        <div class="card">
            <h5 class="card-header"><a class="btn btn-sm btn-info" href="{{ route('add_sub_category') }}">Add Sub Category</a></h5>
            <div class="table-responsive text-nowrap">
              <table class="table">
                <thead class="table-light">
                  <tr>
                    <th>Id</th>
                    <th>Sub-Category Name</th>
                    <th>Category Name</th>
                    <th>Slug</th>
                    <th>Product Count</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                  @foreach ($subCategories as $key => $subCategory )
                    <tr>
                      <td>{{ ++$key }}</td>
                      <td>{{ $subCategory->subcategory_name }}</td>
                      <td>{{ $subCategory->category->category_name }}</td>
                      <td>{{ $subCategory->slug }}</td>
                      <td>{{ $subCategory->product_count }}</td>
                      <td>
                          <a href="{{ route('edit_subcategory',$subCategory->id) }}" class="btn btn-sm btn-primary">Edit</a>
                          <a href="{{ route('delete_subcategory',$subCategory->id) }}" class="btn btn-sm btn-danger" onclick="return confirm('are you sure?')">Delete</a>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
    </div>
@endsection