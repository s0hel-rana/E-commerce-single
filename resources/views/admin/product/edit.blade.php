@extends('admin.layouts.template')
@section('page_content')
Edit Product
@endsection
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Page/</span>Edit Product</h4>
    <div class="row">
        <!-- Basic Layout -->
        <div class="col-xxl">
          <div class="card mb-4">
            <div class="card-header d-flex align-items-center justify-content-between">
              <h5 class="mb-0">Edit Product</h5>
              <small class="text-muted float-end">Edit Information</small>
            </div>
            <div class="card-body">
              <form action="{{ route('update_product',$product->id) }}" method="post">
                @csrf
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label" for="basic-default-name">Product Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="product_name" name="product_name" value="{{ $product->product_name }}" />
                  </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-default-name">Description</label>
                    <div class="col-sm-10">
                      <textarea name="description" class="form-control" id="" cols="" rows="10">{{ $product->description }}</textarea>
                    </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label" for="basic-default-name">Category</label>
                  <div class="col-sm-10">
                    <select class="form-control" name="category_id">
                      @foreach($categories as $category)
                          <option @selected($category->id == $product->category_id)
                              value="{{$category->id}}">{{$category->category_name}}</option>
                      @endforeach
                  </select>
                    {{-- <input type="text" class="form-control" id="category_id" name="category_id" value="{{ $product->category_id }}" /> --}}
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label" for="basic-default-name">Sub-Category</label>
                  <div class="col-sm-10">
                    <select class="form-control" name="subcategory_id">
                      @foreach($subcategories as $subcategory)
                          <option @selected($subcategory->id == $product->subcategory_id)
                              value="{{$subcategory->id}}">{{$subcategory->subcategory_name}}</option>
                      @endforeach
                  </select>
                  </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-default-name">Price</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="price" name="price" value="{{ $product->price }}" />
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-default-name">Qty</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="qty" name="qty" value="{{ $product->qty }}" />
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-default-name">Slug</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="slug" name="slug" value="{{ $product->slug }}" />
                    </div>
                </div>

                <div class="row justify-content-end">
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
</div>
@endsection