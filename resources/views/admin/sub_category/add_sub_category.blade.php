@extends('admin.layouts.template')
@section('page_content')
Add Sub Category
@endsection
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Page/</span> Add Sub Category</h4>
    <div class="row">
        <!-- Basic Layout -->
        <div class="col-xxl">
          <div class="card mb-4">
            <div class="card-header d-flex align-items-center justify-content-between">
              <h5 class="mb-0">Add Sub Category</h5>
              <small class="text-muted float-end">Input Information</small>
            </div>
            <div class="card-body">
              <form>
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label" for="basic-default-name">Sub Category Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="sub_category_name" name="sub_category_name" placeholder="Electronics" />
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label" for="basic-default-name">Select Category</label>
                  <div class="col-sm-10">
                    <select class="form-select" id="category_name" name="category_name" aria-label="Default select example">
                        <option selected>select category</option>
                        {{-- @foreach($categories as $category)
                          <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach --}}
                        {{-- <select class="form-control" name="category_id">
                          @foreach($categories as $category)
                              <option @selected($category->id == $sub_category->category_id)
                                  value="{{$category->id}}">{{$category->name}}</option>
                          @endforeach
                      </select> --}}
                      </select>
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