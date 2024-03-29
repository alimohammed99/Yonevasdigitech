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

.dropdown-content a:hover {background-color:   #f9f9f9;}

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

  @if(session()->has('message'))
          <div class="alert alert-success alert-dismissible">
            <button class="close" type="button" data-dismiss="alert">x</button>
            {{session()->get('message')}}
          </div>
        @endif



        
        @if(session()->has('error'))
          <div class="alert alert-danger alert-dismissible">
            <button class="close" type="button" data-dismiss="alert">x</button>
            {{session()->get('error')}}
          </div>
        @endif

        


  <!-- catagory section -->




  <section class="catagory_section layout_padding">
    <div class="catagory_container">
      <div class="container ">
        <div class="heading_container heading_center">
          <h2>
            Books Categories
          </h2>
          <p>
          Various books and articles available on this site are sorted according to genres, search them by their categories.
          </p>
        </div><br>
      

<div class="card-group">
           @foreach($cat as $cat)

      <div class="col-sm-6 col-md-4 p-0">
                  
        <div class="card">

            <div style="width:" class="card-body text-center">

              <div class="img">
                  @php

                  if($cat->sub_category == 0){
              

                  @endphp

                    <a href="{{url('books_by_categories', $cat->id)}}"><img style="max-width:50px" class="catlist" src="categoriesimage/{{$cat->image}}" alt=""></a>

                  @php  

                  }else{



                  @endphp
                   <a href="{{url('paper_categories')}}"><img style="max-width:50px"  class="catlist" src="categoriesimage/{{$cat->image}}" alt=""></a>


                  @php

                  }  

                  @endphp
              </div> <br>
        

              <div class="text">
                @php

                    if($cat->sub_category == 0){

                @endphp
                   <a id="link" href="{{url('books_by_categories', $cat->id)}}">{{$cat->category_name}}</a>

                @php

                }else{

                @endphp

                 <a id="link" href="{{url('paper_categories')}}">{{$cat->category_name}}</a>

                @php
                }

                @endphp
              </div>


            </div>
        </div>

      </div>
          @endforeach
</div>


  </section>


  <!-- end catagory section -->



























  <section class="blog_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <!-- <h2>
          Some of Our Books
          
        </h2> -->
        <!-- <a class="text-right "href="products.html">view all products <i class="fa fa-angle-right"></i></a> -->
      </div>
      <div class="section-heading">
              <h2>Latest Books</h2>
              <a href="{{url('find_books')}}">view all Books <i class="fa fa-angle-right"></i></a>
            </div>
      <div class="row">
      @foreach($book_limit as $book_limit)
        <div class="col-md-6">
              <div class="box" style="overflow:hidden; max-width:570px;">
            <div class="img-box">
            <img class="img-responsive" style="max-width:570px; max-height:500px; min-width:500px; min-height:350px" src="booksimages/{{$book_limit->image}}" alt="">
              <h4 class="blog_date">
              <span style="color:white; font-size:22px">
              ₦{{$book_limit->book_price}}
                </span>
              </h4>
            </div>
            <div class="detail-box">
              <h5>
                Author: {{$book_limit->book_author}}
              </h5>
              <h6 style="font-size:18px">
                Title: {{$book_limit->book_title}}
</h6>
        
              <ul class="stars d-flex">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                          </ul> <br>
                          <a class="btn btn-info" style="color:white" href="{{url('read_book_abstract', $book_limit->id)}}">
              Read Abstract
              </a>
              <form class="form pt-3" action="{{url('addcart', $book_limit->id)}}" method="POST">
                              @csrf
                              <div class="form-group">






                              @if(Auth::user())

@php



$check = DB::table("purchased_books_tables")->where("user_id", Auth::user()->id)->where("book_id", $book_limit->book_id)->first();

@endphp

@if($check)

<a style="color:white " href="{{url('users_download_books', $book_limit->book)}}" class="btn btn-success"> Download   <i class="fa fa-arrow-down"></i></a>

@else

  <input type="submit" style="background-color:red ; color:white; opacity:0.8" class="btn" value="Add to Cart">

@endif

@else

<input type="submit" style="background-color:red ; color:white; opacity:0.8" class="btn" value="Add to Cart">
@endif











                              </div>
              </form>
            </div>
        
          </div>
        
        </div>
        @endforeach
      </div>
  
    </div>
    
  </section>

      
      </div>
    </div>
  </section>









  <!-- info section -->
  <section class="info_section layout_padding2">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-lg-3 info-col">
          <div class="info_detail">
            <h4>
              About our Book store
            </h4>
            <p>
            Our store contains more than 5,600 printable texts, including academic journals, articles, research papers, science, arts, comedy, mystery/fantasy, investigation, college handouts, self-help and individual records. You can find audio and video documentaries as well as guides to further research or related studies.
            </p>
            <div class="info_social">
            <a href="https://www.facebook.com/Yonevascollege/">
                <i class="fa fa-facebook" aria-hidden="true"></i>
              </a>
              <a href="https://api.whatsapp.com/send?phone=2347048778559">
                <i class="fa fa-whatsapp" aria-hidden="true"></i>
              </a>
              <a href="https://youtube.com/channel/UC7--ERLy6wd7UjvDqepxReA">
                <i class="fa fa-youtube" aria-hidden="true"></i>
              </a>
              <p href="https://www.instagram.com/p/CinYrWNLLuX/?igshid=YmMyMTA2M2Y=">
                <i class="fa fa-instagram" aria-hidden="true"></i>
              </p>
            </div>
          </div>
        </div>
        
        <div class="col-md-6 col-lg-3 info-col">
          <div class="info_contact">
            <h4>
              Address
            </h4>
            <div class="contact_link_box">
              <a href="#">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span>
                25, Dr. K.C Emmanuel street, Jankande Estate, Oke-Afa, Isolo-Lagos.
                </span>
              </a>
              <a href="tel:+2347048778559">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>
                  Call +234 704 877 8559
                </span>
              </a>
              <a href="#">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span>
                  support@yonevasdigitech.study
                </span>
              </a>
            </div>
          </div>
        </div>
       <div class="col-md-6 col-lg-3 info-col">
          <div class="info_contact">
            <h4>
              Useful Links
            </h4>
            <div class="contact_link_box">
              <a href="javascript:;">
                <!-- <i class="fa fa-map-marker" aria-hidden="true"></i> -->
                <span>
                Yonevas College
                  </span>
                </a>
                <a href="javascript:;">
                  <!-- <i class="fa fa-map-marker" aria-hidden="true"></i> -->
                <span>
                Library
                </span>
              </a>
              <a href="javascript:;">
                <!-- <i class="fa fa-map-marker" aria-hidden="true"></i> -->
                <span>
                Y-Psl
                </span>
              </a>
              <a href="javascript:;">
                <!-- <i class="fa fa-map-marker" aria-hidden="true"></i> -->
                <span>
                Articles
                </span>
              </a>
              <a href="javascript:;">
                <!-- <i class="fa fa-map-marker" aria-hidden="true"></i> -->
                <span>
                Textbooks
                </span>
              </a>
              <a href="javascript:;">
                <!-- <i class="fa fa-map-marker" aria-hidden="true"></i> -->
                <span>
                Crime/Investigation
                </span>
              </a>
              <a href="javascript:;">
                <!-- <i class="fa fa-map-marker" aria-hidden="true"></i> -->
                <span>
                Self-help Journals
                </span>
              </a>
              <a href="javascript:;">
                <!-- <i class="fa fa-map-marker" aria-hidden="true"></i> -->
                <span>
                career
                </span>
              </a>
              <a href="javascript:;">
                <!-- <i class="fa fa-map-marker" aria-hidden="true"></i> -->
                <span>
                My Library
                </span>
              </a>
       
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 info-col">
          <div class="info_contact">
            <h4>
              Useful Links
            </h4>
            <div class="contact_link_box">
              <a href="javascript:;">
                <!-- <i class="fa fa-map-marker" aria-hidden="true"></i> -->
                <span>
                Events  
                  </span>
                </a>
                <a href="javascript:;">
                  <!-- <i class="fa fa-map-marker" aria-hidden="true"></i> -->
                <span>
                Enrollment
                </span>
              </a>
              <a href="javascript:;">
                <!-- <i class="fa fa-map-marker" aria-hidden="true"></i> -->
                <span>
                Calendar
                </span>
              </a>
              <a href="javascript:;">
                <!-- <i class="fa fa-map-marker" aria-hidden="true"></i> -->
                <span>
                Online courses
                </span>
              </a>
              <a href="{{url('contact_us')}}">
                <!-- <i class="fa fa-map-marker" aria-hidden="true"></i> -->
                <span>
                Contact Us
                </span>
              </a>
              <a href="javascript:;">
                <!-- <i class="fa fa-map-marker" aria-hidden="true"></i> -->
                <span>
                Scholarship programs
                </span>
              </a>
              <a href="javascript:;">
                <!-- <i class="fa fa-map-marker" aria-hidden="true"></i> -->
                <span>
                student life
                </span>
              </a>
              <a href="javascript:;">
                <!-- <i class="fa fa-map-marker" aria-hidden="true"></i> -->
                <span>
                Survey
                </span>
              </a>
           
       
            </div>
          </div>
        </div>
        <!-- <div class="col-md-6 col-lg-3 info-col">
          <div class="map_container">
            <div class="map">
              <div id="googleMap"></div>
            </div>
          </div>
        </div> -->
      </div>
    </div>
  </section>

  <!-- end info section -->

  <!-- footer section -->
  <footer class="footer_section">
    <div class="container">
      <p>
        &copy; <span id="displayYear"></span> All Rights Reserved By Yonevas Digital Technology
        <!-- <a href="https://html.design/">Free Html Templates</a> -->
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