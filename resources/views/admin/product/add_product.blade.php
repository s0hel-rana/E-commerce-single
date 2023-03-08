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
              <form>
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
                    <label class="col-sm-2 col-form-label" for="basic-default-name">Price</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="price" name="price" placeholder="Electronics" />
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-default-name">Category</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="category_name" name="category_name" placeholder="category" />
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-default-name">Sub Categoy</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="sub_category_name" name="sub_category_name" placeholder="sub category" />
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-default-name">count</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="count" name="count" placeholder="count" />
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-default-name">Image</label>
                    <div class="col-sm-10">
                      <input type="file" class="form-control" id="image" name="image" placeholder="image" />
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