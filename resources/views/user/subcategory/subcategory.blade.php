@extends('user.layouts.template')
@section('main-content')
<!-- category section start -->
<div class="category_section">
    <div class="fashion_section">
        <div id="main_slider">
          <div class="container">
             <h1 class="fashion_taital">{{ $subcategory->subcategory_name }} - ({{ $subcategory->product_count }})</h1>
             <div class="fashion_section_2">
                <div class="row">
                @foreach ($products as $product )
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
 <!-- category section end -->
    
@endsection