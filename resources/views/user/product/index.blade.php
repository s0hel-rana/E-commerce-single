@extends('user.layouts.template')
@section('main-content')
<div class="details_section">
    <div id="main_slider">
      <div class="container">
         <h1 class="fashion_taital">Products Details</h1>
         <div class="details_section_2">
            <div class="row">
                <div class="col-lg-4">
                    <div class="box-main">
                        <div class="tshirt_img"><img style="height: 300px; width:250px;" src="{{ asset('/upload/'.$product->image) }}"></div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="box_main" style="margin-top: 44px;">
                        <div class="product-info">
                            <h4 class="shirt_text text-left">{{ $product->product_name }}</h4>
                            <p class="price_text text-left">Price  <span style="color: #262626;">${{ number_format($product->price, 2) }}</span></p>
                        </div>
                        <div class="my-3 product-details">
                            <p class="lead">{{ $product->description }}</p>
                            <ul class="mt-4 bg-light p-2">
                                <li><b>Category : </b>{{ $product->category->category_name  }}</li>
                                <li><b>SubCategory : </b>{{ $product->subcategory->subcategory_name  }}</li>
                                <li><b>Product Qty : </b>{{ $product->qty }}</li>
                            </ul>
                        </div>
                        <div class="btn_main">
                            <form action="{{ route('add_to_product_cart') }}" method="post">
                                @csrf
                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                <input type="hidden" name="price" value="{{ $product->price }}">
                                <div class="form-group">
                                    <label for="qty">How many pics?</label>
                                    <input class="form-control" type="number" min="1" placeholder="1" name="qty">
                                </div>
                                <input type="submit" class="btn btn-sm btn-warning" value="Add to Cart">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
         </div>
      </div>

      <div class="fashion_section">
        <div id="main_slider">
          <div class="container">
             <h1 class="fashion_taital">Related Products</h1>
             <div class="fashion_section_2">
                <div class="row">
                @foreach ($related_products as $product )
                   <div class="col-lg-4 col-sm-4">
                      <div class="box_main">
                      <h4 class="shirt_text">{{ $product->product_name }}</h4>
                      <p class="price_text">Price  <span style="color: #262626;">${{ number_format($product->price, 2) }}</span></p>
                      <div class="tshirt_img"><img style="height: 300px; width:250px;" src="{{ asset('/upload/'.$product->image) }}"></div>
                      <div class="btn_main">
                        <form action="{{ route('add_to_product_cart') }}" method="post">
                            @csrf
                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                            <input type="hidden" name="price" value="{{ $product->price }}">
                            <input type="hidden" name="qty" value="1">
                            <input type="submit" class="btn btn-sm btn-warning" value="Buy Now">
                        </form>
                         <div class="seemore_bt"><a href="{{ route('product_details',[$product->id,$product->slug]) }}">See More</a></div>
                      </div>
                      </div>
                   </div>
                   @endforeach
                </div>
             </div>
          </div>
        </div>
     </div>

    </div>
 </div>
@endsection