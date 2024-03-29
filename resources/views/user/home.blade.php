@extends('user.layouts.template')
@section('main-content')
<!-- fashion section start -->
<div class="fashion_section">
    <div id="main_slider">
      <div class="container">
         <h1 class="fashion_taital">All Products</h1>
         <div class="fashion_section_2">
            <div class="row">
            @foreach ($allProducts as $product )
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
 <!-- fashion section end -->
 <!-- electronic section start -->
 <div class="fashion_section">
    <div id="electronic_main_slider" class="carousel slide" data-ride="carousel">
       <div class="carousel-inner">
          <div class="carousel-item active">
             <div class="container">
                <h1 class="fashion_taital">Electronic</h1>
                <div class="fashion_section_2">
                   <div class="row">
                      <div class="col-lg-4 col-sm-4">
                         <div class="box_main">
                            <h4 class="shirt_text">Laptop</h4>
                            <p class="price_text">Start Price  <span style="color: #262626;">$ 100</span></p>
                            <div class="electronic_img"><img src="{{ asset('home/images/laptop-img.png') }}"></div>
                            <div class="btn_main">
                               <div class="buy_bt"><a href="#">Buy Now</a></div>
                               <div class="seemore_bt"><a href="#">See More</a></div>
                            </div>
                         </div>
                      </div>
                      <div class="col-lg-4 col-sm-4">
                         <div class="box_main">
                            <h4 class="shirt_text">Mobile</h4>
                            <p class="price_text">Start Price  <span style="color: #262626;">$ 100</span></p>
                            <div class="electronic_img"><img src="{{ asset('home/images/mobile-img.png') }}"></div>
                            <div class="btn_main">
                               <div class="buy_bt"><a href="#">Buy Now</a></div>
                               <div class="seemore_bt"><a href="#">See More</a></div>
                            </div>
                         </div>
                      </div>
                      <div class="col-lg-4 col-sm-4">
                         <div class="box_main">
                            <h4 class="shirt_text">Computers</h4>
                            <p class="price_text">Start Price  <span style="color: #262626;">$ 100</span></p>
                            <div class="electronic_img"><img src="{{ asset('home/images/computer-img.png') }}"></div>
                            <div class="btn_main">
                               <div class="buy_bt"><a href="#">Buy Now</a></div>
                               <div class="seemore_bt"><a href="#">See More</a></div>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
          <div class="carousel-item">
             <div class="container">
                <h1 class="fashion_taital">Electronic</h1>
                <div class="fashion_section_2">
                   <div class="row">
                      <div class="col-lg-4 col-sm-4">
                         <div class="box_main">
                            <h4 class="shirt_text">Laptop</h4>
                            <p class="price_text">Start Price  <span style="color: #262626;">$ 100</span></p>
                            <div class="electronic_img"><img src="{{ asset('home/images/laptop-img.png') }}"></div>
                            <div class="btn_main">
                               <div class="buy_bt"><a href="#">Buy Now</a></div>
                               <div class="seemore_bt"><a href="#">See More</a></div>
                            </div>
                         </div>
                      </div>
                      <div class="col-lg-4 col-sm-4">
                         <div class="box_main">
                            <h4 class="shirt_text">Mobile</h4>
                            <p class="price_text">Start Price  <span style="color: #262626;">$ 100</span></p>
                            <div class="electronic_img"><img src="{{ asset('home/images/mobile-img.png') }}"></div>
                            <div class="btn_main">
                               <div class="buy_bt"><a href="#">Buy Now</a></div>
                               <div class="seemore_bt"><a href="#">See More</a></div>
                            </div>
                         </div>
                      </div>
                      <div class="col-lg-4 col-sm-4">
                         <div class="box_main">
                            <h4 class="shirt_text">Computers</h4>
                            <p class="price_text">Start Price  <span style="color: #262626;">$ 100</span></p>
                            <div class="electronic_img"><img src="{{ asset('home/images/computer-img.png') }}"></div>
                            <div class="btn_main">
                               <div class="buy_bt"><a href="#">Buy Now</a></div>
                               <div class="seemore_bt"><a href="#">See More</a></div>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
          <div class="carousel-item">
             <div class="container">
                <h1 class="fashion_taital">Electronic</h1>
                <div class="fashion_section_2">
                   <div class="row">
                      <div class="col-lg-4 col-sm-4">
                         <div class="box_main">
                            <h4 class="shirt_text">Laptop</h4>
                            <p class="price_text">Start Price  <span style="color: #262626;">$ 100</span></p>
                            <div class="electronic_img"><img src="{{ asset('home/images/laptop-img.png') }}"></div>
                            <div class="btn_main">
                               <div class="buy_bt"><a href="#">Buy Now</a></div>
                               <div class="seemore_bt"><a href="#">See More</a></div>
                            </div>
                         </div>
                      </div>
                      <div class="col-lg-4 col-sm-4">
                         <div class="box_main">
                            <h4 class="shirt_text">Mobile</h4>
                            <p class="price_text">Start Price  <span style="color: #262626;">$ 100</span></p>
                            <div class="electronic_img"><img src="{{ asset('home/images/mobile-img.png') }}"></div>
                            <div class="btn_main">
                               <div class="buy_bt"><a href="#">Buy Now</a></div>
                               <div class="seemore_bt"><a href="#">See More</a></div>
                            </div>
                         </div>
                      </div>
                      <div class="col-lg-4 col-sm-4">
                         <div class="box_main">
                            <h4 class="shirt_text">Computers</h4>
                            <p class="price_text">Start Price  <span style="color: #262626;">$ 100</span></p>
                            <div class="electronic_img"><img src="{{ asset('home/images/computer-img.png') }}"></div>
                            <div class="btn_main">
                               <div class="buy_bt"><a href="#">Buy Now</a></div>
                               <div class="seemore_bt"><a href="#">See More</a></div>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
       <a class="carousel-control-prev" href="#electronic_main_slider" role="button" data-slide="prev">
       <i class="fa fa-angle-left"></i>
       </a>
       <a class="carousel-control-next" href="#electronic_main_slider" role="button" data-slide="next">
       <i class="fa fa-angle-right"></i>
       </a>
    </div>
 </div>
 <!-- electronic section end -->
 <!-- jewellery  section start -->
 <div class="jewellery_section">
    <div id="jewellery_main_slider" class="carousel slide" data-ride="carousel">
       <div class="carousel-inner">
          <div class="carousel-item active">
             <div class="container">
                <h1 class="fashion_taital">Jewellery Accessories</h1>
                <div class="fashion_section_2">
                   <div class="row">
                      <div class="col-lg-4 col-sm-4">
                         <div class="box_main">
                            <h4 class="shirt_text">Jumkas</h4>
                            <p class="price_text">Start Price  <span style="color: #262626;">$ 100</span></p>
                            <div class="jewellery_img"><img src="{{ asset('home/images/jhumka-img.png') }}"></div>
                            <div class="btn_main">
                               <div class="buy_bt"><a href="#">Buy Now</a></div>
                               <div class="seemore_bt"><a href="#">See More</a></div>
                            </div>
                         </div>
                      </div>
                      <div class="col-lg-4 col-sm-4">
                         <div class="box_main">
                            <h4 class="shirt_text">Necklaces</h4>
                            <p class="price_text">Start Price  <span style="color: #262626;">$ 100</span></p>
                            <div class="jewellery_img"><img src="{{ asset('home/images/neklesh-img.png') }}"></div>
                            <div class="btn_main">
                               <div class="buy_bt"><a href="#">Buy Now</a></div>
                               <div class="seemore_bt"><a href="#">See More</a></div>
                            </div>
                         </div>
                      </div>
                      <div class="col-lg-4 col-sm-4">
                         <div class="box_main">
                            <h4 class="shirt_text">Kangans</h4>
                            <p class="price_text">Start Price  <span style="color: #262626;">$ 100</span></p>
                            <div class="jewellery_img"><img src="{{ asset('home/images/kangan-img.png') }}"></div>
                            <div class="btn_main">
                               <div class="buy_bt"><a href="#">Buy Now</a></div>
                               <div class="seemore_bt"><a href="#">See More</a></div>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
          <div class="carousel-item">
             <div class="container">
                <h1 class="fashion_taital">Jewellery Accessories</h1>
                <div class="fashion_section_2">
                   <div class="row">
                      <div class="col-lg-4 col-sm-4">
                         <div class="box_main">
                            <h4 class="shirt_text">Jumkas</h4>
                            <p class="price_text">Start Price  <span style="color: #262626;">$ 100</span></p>
                            <div class="jewellery_img"><img src="{{ asset('home/images/jhumka-img.png') }}"></div>
                            <div class="btn_main">
                               <div class="buy_bt"><a href="#">Buy Now</a></div>
                               <div class="seemore_bt"><a href="#">See More</a></div>
                            </div>
                         </div>
                      </div>
                      <div class="col-lg-4 col-sm-4">
                         <div class="box_main">
                            <h4 class="shirt_text">Necklaces</h4>
                            <p class="price_text">Start Price  <span style="color: #262626;">$ 100</span></p>
                            <div class="jewellery_img"><img src="{{ asset('home/images/neklesh-img.png') }}"></div>
                            <div class="btn_main">
                               <div class="buy_bt"><a href="#">Buy Now</a></div>
                               <div class="seemore_bt"><a href="#">See More</a></div>
                            </div>
                         </div>
                      </div>
                      <div class="col-lg-4 col-sm-4">
                         <div class="box_main">
                            <h4 class="shirt_text">Kangans</h4>
                            <p class="price_text">Start Price  <span style="color: #262626;">$ 100</span></p>
                            <div class="jewellery_img"><img src="{{ asset('home/images/kangan-img.png') }}"></div>
                            <div class="btn_main">
                               <div class="buy_bt"><a href="#">Buy Now</a></div>
                               <div class="seemore_bt"><a href="#">See More</a></div>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
          <div class="carousel-item">
             <div class="container">
                <h1 class="fashion_taital">Jewellery Accessories</h1>
                <div class="fashion_section_2">
                   <div class="row">
                      <div class="col-lg-4 col-sm-4">
                         <div class="box_main">
                            <h4 class="shirt_text">Jumkas</h4>
                            <p class="price_text">Start Price  <span style="color: #262626;">$ 100</span></p>
                            <div class="jewellery_img"><img src="{{ asset('home/images/jhumka-img.png') }}"></div>
                            <div class="btn_main">
                               <div class="buy_bt"><a href="#">Buy Now</a></div>
                               <div class="seemore_bt"><a href="#">See More</a></div>
                            </div>
                         </div>
                      </div>
                      <div class="col-lg-4 col-sm-4">
                         <div class="box_main">
                            <h4 class="shirt_text">Necklaces</h4>
                            <p class="price_text">Start Price  <span style="color: #262626;">$ 100</span></p>
                            <div class="jewellery_img"><img src="{{ asset('home/images/neklesh-img.png') }}"></div>
                            <div class="btn_main">
                               <div class="buy_bt"><a href="#">Buy Now</a></div>
                               <div class="seemore_bt"><a href="#">See More</a></div>
                            </div>
                         </div>
                      </div>
                      <div class="col-lg-4 col-sm-4">
                         <div class="box_main">
                            <h4 class="shirt_text">Kangans</h4>
                            <p class="price_text">Start Price  <span style="color: #262626;">$ 100</span></p>
                            <div class="jewellery_img"><img src="{{ asset('home/images/kangan-img.png') }}"></div>
                            <div class="btn_main">
                               <div class="buy_bt"><a href="#">Buy Now</a></div>
                               <div class="seemore_bt"><a href="#">See More</a></div>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
       <a class="carousel-control-prev" href="#jewellery_main_slider" role="button" data-slide="prev">
       <i class="fa fa-angle-left"></i>
       </a>
       <a class="carousel-control-next" href="#jewellery_main_slider" role="button" data-slide="next">
       <i class="fa fa-angle-right"></i>
       </a>
       <div class="loader_main">
          <div class="loader"></div>
       </div>
    </div>
 </div>
 <!-- jewellery  section end -->
    
@endsection