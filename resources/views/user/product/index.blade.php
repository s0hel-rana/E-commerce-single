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
                            <div class="btn btn-sm btn-warning"><a href="#">Add to Cart</a></div>
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
                         <div class="buy_bt"><a href="#">Buy Now</a></div>
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