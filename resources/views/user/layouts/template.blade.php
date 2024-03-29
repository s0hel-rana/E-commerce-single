@php
   $categories = App\Models\Admin\Category::latest()->get();
   $subcategories = App\Models\Admin\SubCategory::latest()->get();
   $carts = App\Models\Cart::all();
@endphp
<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Sflyer</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="{{ asset('home/css/bootstrap.min.css') }}">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="{{ asset('home/css/style.css') }}">
      <!-- Responsive-->
      <link rel="stylesheet" href="{{ asset('home/css/responsive.css') }}">
      <!-- fevicon -->
      <link rel="icon" href="{{ asset('home/images/fevicon.png') }}" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="{{ asset('home/css/jquery.mCustomScrollbar.min.css') }}">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- fonts -->
      <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
      <!-- font awesome -->
      <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <!--  -->
      <!-- owl stylesheets -->
      <link href="https://fonts.googleapis.com/css?family=Great+Vibes|Poppins:400,700&display=swap&subset=latin-ext" rel="stylesheet">
      <link rel="stylesheet" href="{{ asset('home/css/owl.carousel.min.css') }}">
      <link rel="stylesoeet" href="{{ asset('home/css/owl.theme.default.min.css') }}">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   </head>
   <body>
      <!-- banner bg main start -->
      <div class="banner_bg_main" style="height: 330px;">
         <!-- header top section start -->
         <nav class="navbar navbar-expand navbar-light bg-success topbar mb-4 static-top shadow">
            <ul class="navbar-nav ml-auto mt-2" style="font-size: 18px;">
                <li class="nav-item dropdown no-arrow"><a href="{{ route('home_page') }}">Home</a></li>
                <li class="nav-item dropdown no-arrow"><a href="{{ route('gift_idea') }}">Gift Ideas</a></li>
                <li class="nav-item dropdown no-arrow"><a href="{{ route('new_release') }}">New Releases</a></li>
                <li class="nav-item dropdown no-arrow"><a href="{{ route('today_deals') }}">Today's Deals</a></li>
                <li class="nav-item dropdown no-arrow"><a href="{{ route('customer_service') }}">Customer Service</a></li>
                <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ Auth::user()->name }}</span>
                        <img style="width: 32px; height:32px;" class="img-profile rounded-circle"
                            src="{{ asset('upload/20230321030205.png') }}">
                    </a>
                    <!-- Dropdown - User Information -->
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                        aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="{{ route('user_profile') }}">
                            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                            Profile
                        </a>
                        <a class="dropdown-item" href="{{ route('user_pending_order') }}">
                            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                            Pending Order
                        </a>
                        <a class="dropdown-item" href="{{ route('user_history') }}">
                            <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                            History
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                            Logout
                        </a>
                    </div>
                </li>

            </ul>

        </nav>
         <!-- header top section start -->
         <!-- logo section start -->
         <div class="logo_section">
            <div class="container">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="logo"><a href="index.html"><img src="{{ asset('home/images/logo.png') }}"></a></div>
                  </div>
               </div>
            </div>
         </div>
         <!-- logo section end -->
         <!-- header section start -->
         <div class="header_section">
            <div class="container">
               <div class="containt_main">
                  <div id="mySidenav" class="sidenav">
                     <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                     <a href="{{ route('home_page') }}">Home</a>
                        @foreach ($categories as $category )
                           <a href="{{ route('category_page',[$category->id,$category->slug]) }}">{{ $category->category_name }}</a>
                        @endforeach
                  </div>
                  <span class="toggle_icon" onclick="openNav()">
                     <img src="{{ asset('home/images/toggle-icon.png') }}">
                  </span>
                  <div class="dropdown">
                     <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">All Category 
                     </button>
                     <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        @foreach ($categories as $category )
                           <a class="dropdown-item" href="{{ route('category_page',[$category->id,$category->slug]) }}">{{ $category->category_name }}</a>
                        @endforeach
                     </div>
                  </div>
                  <div class="dropdown">
                     <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">All Sub-Category 
                     </button>
                     <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        @foreach ($subcategories as $subcategory )
                           <a class="dropdown-item" href="{{ route('sub_category',[$subcategory->id,$subcategory->slug]) }}">{{ $subcategory->subcategory_name }}</a>
                        @endforeach
                     </div>
                  </div>
                  <div class="main">
                     <!-- Another variation with a button -->
                     <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search this blog">
                        <div class="input-group-append">
                           <button class="btn btn-secondary" type="button" style="background-color: #f26522; border-color:#f26522 ">
                           <i class="fa fa-search"></i>
                           </button>
                        </div>
                     </div>
                  </div>
                  <div class="header_box">
                     <div class="lang_box ">
                        <a href="#" title="Language" class="nav-link" data-toggle="dropdown" aria-expanded="true">
                        <img src="{{ asset('home/images/flag-uk.png') }}" alt="flag" class="mr-2 " title="United Kingdom"> English <i class="fa fa-angle-down ml-2" aria-hidden="true"></i>
                        </a>
                        <div class="dropdown-menu ">
                           <a href="#" class="dropdown-item">
                           <img src="{{ asset('home/images/flag-france.png') }}" class="mr-2" alt="flag">
                           French
                           </a>
                        </div>
                     </div>
                     <div class="login_menu">
                        <ul>
                           <li><a href="#">
                              <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                              <span class="padding_10">{{ $carts->count('qty') }}</span></a>
                           </li>
                           <li><a href="#">
                              <i class="fa fa-user" aria-hidden="true"></i>
                              <span class="padding_10">{{ Auth::user()->name }}</span></a>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- header section end -->
        {{-- @include('user.slider') --}}
      </div>
      <!-- banner bg main end -->
      <div class="container py-5" style="margin-top: 200px;">
         @yield('main-content')
      </div>
      <!-- footer section start -->
      <div class="footer_section layout_padding">
         <div class="container">
            <div class="footer_logo"><a href="index.html"><img src="{{ asset('home/images/footer-logo.png') }}"></a></div>
            <div class="input_bt">
               <input type="text" class="mail_bt" placeholder="Your Email" name="Your Email">
               <span class="subscribe_bt" id="basic-addon2"><a href="#">Subscribe</a></span>
            </div>
            <div class="footer_menu">
               <ul>
                  <li><a href="{{ route('home_page') }}">Home</a></li>
                  <li><a href="{{ route('gift_idea') }}">Gift Ideas</a></li>
                  <li><a href="{{ route('new_release') }}">New Releases</a></li>
                  <li><a href="{{ route('today_deals') }}">Today's Deals</a></li>
                  <li><a href="{{ route('customer_service') }}">Customer Service</a></li>
               </ul>
            </div>
            <div class="location_main">Help Line  Number : <a href="#">+8801713616087</a></div>
         </div>
      </div>
      <!-- footer section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <p class="copyright_text">© 2022 All Rights Reserved. Design by <a href="#">Sohel Rana</a></p>
         </div>
      </div>
      <!-- copyright section end -->
      <!-- Javascript files-->
      <script src="{{ asset('home/js/jquery.min.js') }}"></script>
      <script src="{{ asset('home/js/popper.min.js') }}"></script>
      <script src="{{ asset('home/js/bootstrap.bundle.min.js') }}"></script>
      <script src="{{ asset('home/js/jquery-3.0.0.min.js') }}"></script>
      <script src="{{ asset('home/js/plugin.js') }}"></script>
      <!-- sidebar -->
      <script src="{{ asset('home/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
      <script src="{{ asset('home/js/custom.js') }}"></script>
      <script>
         function openNav() {
           document.getElementById("mySidenav").style.width = "250px";
         }
         
         function closeNav() {
           document.getElementById("mySidenav").style.width = "0";
         }
      </script>
   </body>
</html>