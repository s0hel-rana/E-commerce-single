@extends('admin.layouts.template')
@section('page_content')
Add Product
@endsection
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Page/</span> Product</h4>
    <div class="row">
        <!-- Basic Layout -->
        <div class="col-xxl">
          <div class="card mb-4">
            <div class="card-header d-flex align-items-center justify-content-between">
              <h5 class="mb-0">Add Product</h5>
              <small class="text-muted float-end">Input Information</small>
            </div>
            <div class="card-body">
              <form action="{{ route('store_product') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label" for="basic-default-name">Product</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="product_name" name="product_name" placeholder="Electronics" />
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label" for="basic-default-name">Description</label>
                  <div class="col-sm-10">
                    <textarea name="description" class="form-control" id="" cols="" rows="10"></textarea>
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label" for="basic-default-name">Select Category</label>
                  <div class="col-sm-10">
                    <select class="form-select" id="category_id" name="category_id" aria-label="Default select example">
                        <option selected>select category</option>
                        @foreach($categories as $category)
                          <option value="{{$category->id}}">{{$category->category_name}}</option>
                        @endforeach
                    </select>
                  </div>
                </div>

                  <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-default-name">Select Sub-Category</label>
                    <div class="col-sm-10">
                      <select class="form-select" id="subcategory_id" name="subcategory_id" aria-label="Default select example">
                          <option selected>select sub category</option>
                          @foreach($subcategories as $subcategory)
                            <option value="{{$subcategory->id}}">{{$subcategory->subcategory_name}}</option>
                          @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-default-name">Price</label>
                    <div class="col-sm-10">
                      <input type="number" class="form-control" id="price" name="price" placeholder="price" />
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-default-name">Image</label>
                    <div class="col-sm-10">
                      <input type="file" accept="image/*" class="form-control" id="image" name="image" placeholder="image" />
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-default-name">Quantity</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="qty" name="qty" placeholder="qty" />
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-default-name">Slug</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="slug" name="slug" placeholder="slug" />
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