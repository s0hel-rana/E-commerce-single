@extends('user.layouts.template')
@section('main-content')
<div class="row">
    <div class="col-12">
        <div class="box_main">
            <form action="{{ route('add_shipping_address') }}" method="post">
                @csrf
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="phone">Phone Number :</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="phone" name="phone"  />
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="village">Village :</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="village" name="village"  />
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="city">City :</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="city" name="city"  />
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="code">Postal Code :</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="code" name="code"  />
                    </div>
                </div>
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Next</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection