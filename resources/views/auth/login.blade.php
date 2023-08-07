

<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <link rel="icon" href="images/favicon.png" type="image/gif" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>YonevasDigiTech</title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />

  <style>
.dropbtn {
  /* background-color: #4CAF50;
  color: white; */
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  border-bottom:2px solid #063547;
}


#hover:hover{
border-right:10px groove #ffd700;
border-bottom:5px double #ffd700;
background-color:;
color:;
padding:15px;
transition:0.2s;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  /* background-color: #3e8e41; */
}
</style>

</head>

<body class="sub_page">

<div style="background:#063547; border-bottom:2px solid #ffd700" class="topbar">
      <div style="background:#063547" class="pt-3 container">
        <div style="align-items: flex-start;" class="row" >
          <div class="col-11 pl-0 text-sm">
            <div style="font-size:18px; color:white" class="site-info">
            <a style="color:#ffd700" href="javascript:;"><span class="mai-call text-primary"></span> How can we help you today?</a>
            <span class="divider ml-2">|</span>
              <a style="color:#ffd700" href="tel:+2347048778559"><span class="mai-call text-primary">   <i style="color:#ffd700" class="fa fa-phone" aria-hidden="true"></i></span>  Call +234 704 877 8559</a>
              <span class="divider mr-2">|</span>
              <a style="color:#ffd700" href="#"><span class="mai-mail text-primary">   <i style="color:#ffd700  " class="fa fa-envelope" aria-hidden="true"></i></span>support@yonevasdigitech.study</a>
            </div>
          </div>
          <div class="col-1 pr-0 pl-0 text-right text-sm">
            <div style="font-size:20px" class="social-mini-button">
              <a id="soc-links" style="color:#ffd700" href="#"><span id="soc-links" class="pr-2 fa fa-facebook"></span></a>
              <a id="soc-links" style="color:#ffd700" href="#"><span id="soc-links" class="pr-2 fa fa-youtube"></span></a>
              <a id="soc-links" style="color:#ffd700" href="#"><span id="soc-links" class="pr-2 fa fa-instagram"></span></a>
              <a id="soc-links" style="color:#ffd700" href="#"><span id="soc-links" class="pr-2 fa fa-whatsapp"></span></a>
            </div>
          </div>
        </div> <!-- .row -->
      </div> <!-- .container -->
    </div>
</div>

<div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="{{url('/')}}">
            <span style="font-size:42px; color:#ffd700">
              Library
            </span>
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a style="color:#ffd700" id="hover" class="nav-link pl-lg-0" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
              </li>
           
              <li class="nav-item">
                <a style="color:#ffd700" id="hover" class="nav-link" href="{{url('categories')}}">Categories</a>
              </li>
              <li class="nav-item">
                <a style="color:#ffd700" id="hover" class="nav-link" href="{{url('find_books')}}"> Find Books</a>
              </li>
             
                     
              <li class="dropdown nav-item">
              <a style="color:#ffd700" class="dropbtn nav-link" href="javascript:;"> Careers</a>
  <div class="dropdown-content">
  <a style="color:black" href="{{url('careers')}}">Apply online</a>
  <a style="color:black" href="{{url('download_application_form')}}">Download Application form</a>

  </div>
</li>

              <li class="nav-item">
                <a style="color:#ffd700" id="hover" class="nav-link" href="{{url('about_us')}}">About Us</a>
              </li>
              <li class="nav-item">
                <a style="color:#ffd700" id="hover" class="nav-link" href="{{url('contact_us')}}">Contact Us</a>
              </li>



            


              @if (Route::has('login'))

                    @auth



                    <li class="dropdown nav-item">
              <a class="dropbtn nav-link" href="javascript:;"><i class="fa fa-user"></i> My Account</a>
  <div class="dropdown-content">
  <a id="cart" style="color:tomato; border-radius:; background-color:" class="nav-link cart" href="{{url('show_my_cart')}}"><i class="fa fa-shopping-cart"></i> My Cart [ {{$count}} ]  </a>


  <a id="cart" style="color:tomato; border-radius:; background-color:" class="nav-link cart" href="{{url('show_my_books')}}"><i class="fa fa-book"></i> My Library [ {{$purchased_books}} ]  </a>

  </div>
</li>



                    <!-- <li class="nav-item cart">
                    <a id="cart" style="color:white; border-radius:20px; background-color:tomato" class="nav-link cart" href="{{url('show_my_cart')}}"><i class="fa fa-shopping-cart"></i> My Cart [ {{$count}} ]  </a>
</li> -->


<!-- &nbsp; &nbsp;



                    <li class="nav-item cart">
                    <a id="cart" style="color:white; border-radius:20px; background-color:green " class="nav-link cart" href="{{url('show_my_books')}}"><i class="fa fa-book"></i> My Library [ {{$purchased_books}} ]  </a>
                    </li> -->
                    <x-app-layout>

                    </x-app-layout>
                    @else
                        <li class="nav-item"><a style="color:#ffd700" href="{{ route('login') }}" class="nav-link">Log in</a></li>

                        @if (Route::has('register'))
                           <li class="nav-item"> <a style="color:#ffd700"href="{{ route('register') }}" class="nav-link">Register</a></li>
                        @endif
                    @endauth
          
            @endif

            </ul>
            <!-- <from class="search_form">
              <input type="text" class="form-control" placeholder="Search here...">
              <button class="" type="submit">
                <i class="fa fa-search" aria-hidden="true"></i>
              </button>
            </from>
          </div> -->
        </nav>
      </div>
    </header>
    <!-- end header section -->
  </div>

  <!-- contact section -->

  <section class="contact_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-6 ">
          <div class="heading_container ">
            <h2 class="">
              Log In
            </h2>
          </div>
          <x-jet-validation-errors class="mb-4" />
          @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif
     
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full form-control" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class=" form-control block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>


            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </form>
        </div>
        <div class="col-md-6">
          <div class="img-box">
            <img src="images/contact-img.png" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end contact section -->

  <!-- info section -->

  

  <!-- end info section -->

  <!-- footer section -->
  <footer class="footer_section">
    <div class="container">
      <p>
        &copy; <span id="displayYear"></span> All Rights Reserved By Yonevas Digital Technology
 
      </p>
    </div>
  </footer>
  <!-- footer section -->

  <!-- jQery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.js"></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
  </script>
  <!-- End Google Map -->

</body>

</html>
