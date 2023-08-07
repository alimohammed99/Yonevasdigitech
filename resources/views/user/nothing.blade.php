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
    #cart:hover{
  color: tomato;
  background-color: white;
}


.accordion {
  background-color: #eee;
  color: #444;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
  transition: 0.4s;
}

.accordion:hover {
  background-color: #ccc;
}

.panel {
  padding: 0 30px;
  background-color: white;
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.2s ease-out;
}
    </style>



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
  top: -5px;

}
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 190px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 2;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  border-bottom:2px solid #063547;
  /* width:15px; */
}

.dropdown-content a:hover {background-color:   #f9f9f9;}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  /* background-color: #3e8e41; */
}


#hover:hover{
border-right:10px groove tomato;
border-bottom:5px double tomato;
background-color:;
color:;
padding:15px;
transition:0.2s;
}
</style>

</head>

<body>

  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="{{url('/')}}">
            <span>
              YonevasDigiTech
            </span>
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a id="hover" class="nav-link pl-lg-0" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
              </li>
           
              <li class="nav-item">
                <a id="hover" class="nav-link" href="{{url('categories')}}">Categories</a>
              </li>
              <li class="nav-item">
                <a id="hover" class="nav-link" href="{{url('find_books')}}"> Find Books</a>
              </li>
             
                     
              <li class="dropdown nav-item">
              <a class="dropbtn nav-link" href="javascript:;"> Careers</a>
  <div class="dropdown-content">
  <a href="{{url('careers')}}">Apply online</a>
  <a href="{{url('download_application_form')}}">Download Application form</a>

  </div>
</li>

              <li class="nav-item">
                <a id="hover" class="nav-link" href="{{url('about_us')}}">About Us</a>
              </li>
              <li class="nav-item">
                <a id="hover" class="nav-link" href="{{url('contact_us')}}">Contact Us</a>
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
                        <li class="nav-item"><a href="{{ route('login') }}" class="nav-link">Log in</a></li>

                        @if (Route::has('register'))
                           <li class="nav-item"> <a href="{{ route('register') }}" class="nav-link">Register</a></li>
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
        

    <!-- end header section -->
    <!-- slider section -->
    <section class="slider_section ">
      <div id="customCarousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container ">
              <div class="row">
                <div class="col-md-6">
                  <div class="detail-box">
                    <h5>
                      Yonevas Library 
                    </h5>
                    <h1>
                      For All Your <br>
                      Reading Needs
                    </h1>
                    <p>
                    Yonevas digital library is an e-learning platform for researchers and learners. Our database
systems contain hundreds and thousands of texts, journals, articles, papers, handouts, and many
other resources including audio recordings and videos, all designed for learning and skill
acquisition. Our site visitors find lots of resources including self-help books, short stories
containing facts, crime/investigation, romance, fantasy, fiction, literature, science and history books.
                    </p>
                    <a href="{{url('categories')}}">
                      Read More
                    </a>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="images/slider-img.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container ">
              <div class="row">
                <div class="col-md-6">
                  <div class="detail-box">
                    <h5>
                      Yonevas Digital Library   
                         <!-- <a href="{{url('paystack')}}">paystack</a> -->
                    </h5>
                    <h1>
                      For All Your <br>
                      Reading Needs
                    </h1>
                    <p>
        Yonevas digital library is an e-learning platform for researchers and learners. Our database
systems contain hundreds and thousands of texts, journals, articles, papers, handouts, and many
other resources including audio recordings and videos, all designed for learning and skill
acquisition. Our site visitors find lots of resources including self-help books, short stories
containing facts, crime/investigation, romance, fantasy, fiction, literature, science and history books.
                    </p>
                    <a href="{{url('categories')}}">
                      Read More
                    </a>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="images/slider-img.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container ">
              <div class="row">
                <div class="col-md-6">
                  <div class="detail-box">
                    <h5>
                      Yonevas Digital Library
                    </h5>
                    <h1>
                      For All Your <br>
                      Reading Needs
                    </h1>
                    <p>
        Yonevas digital library is an e-learning platform for researchers and learners. Our database
systems contain hundreds and thousands of texts, journals, articles, papers, handouts, and many
other resources including audio recordings and videos, all designed for learning and skill
acquisition. Our site visitors find lots of resources including self-help books, short stories
containing facts, crime/investigation, romance, fantasy, fiction, literature, science and history books.
                    </p>
                    <a href="{{url('categories')}}">
                      Read More
                    </a>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="images/slider-img.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel_btn_box">
          <a class="carousel-control-prev" href="#customCarousel1" role="button" data-slide="prev">
            <i class="fa fa-angle-left" aria-hidden="true"></i>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#customCarousel1" role="button" data-slide="next">
            <i class="fa fa-angle-right" aria-hidden="true"></i>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </section>
    <!-- end slider section -->
  </div>


  <!-- catagory section -->







<!-- card group -->





<div class="card-group">
  <div class="card bg-primary">
    <div class="card-body text-center">
      <p class="card-text">Some text inside the first card</p>
    </div>
  </div>
  <div class="card bg-warning">
    <div class="card-body text-center">
      <p class="card-text">Some text inside the second card</p>
    </div>
  </div>
  <div class="card bg-success">
    <div class="card-body text-center">
      <p class="card-text">Some text inside the third card</p>
    </div>
  </div>
  <div class="card bg-danger">
    <div class="card-body text-center">
      <p class="card-text">Some text inside the fourth card</p>
    </div>
  </div>
</div>



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
        </div>
      
  <div class="row">
  @foreach($cat as $cat)
  <div class="col-sm-6 col-md-4">
    <div class="box ">
   <div class="img-box ali">

        @php

             if($cat->sub_category == 0){
              

        @endphp
            
                <a href="{{url('books_by_categories', $cat->id)}}"><img class="catlist" src="categoriesimage/{{$cat->image}}" alt=""></a>

        @php  

             }else{



        @endphp
              <a href="{{url('paper_categories')}}"><img class="catlist" src="categoriesimage/{{$cat->image}}" alt=""></a>


        @php
            
            }  

        @endphp

              </div>



              
              <div class="detail-box">
                <h5>
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
                </h5>
               
                <!-- <p>
                  fact that a reader will be distracted by the readable content of a page when looking at its layout.
                  The
                  point of using
                </p> -->
              </div>
            </div>
          
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </section>

  <!-- end catagory section -->
 
  <!-- about section -->

  <section class="about_section layout_padding">
    <div class="container ">
      <div class="row">
        <div class="col-md-6">
            <div class="img-box ali">
            <img src="images/about-img.png" alt="">
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                About Our Bookstore
              </h2>
            </div>
            <p>
            Our store contains more than 5,600 printable texts, including academic journals, articles,
research papers, science, arts, comedy, mystery/fantasy, investigation, college handouts,
self-help and individual records. You can find audio and video documentaries as well as guides
to further research or related studies.
            </p>
            <a href="{{url('about_us')}}">
              Read More
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->

  <!-- client section -->

  <section class="client_section layout_padding">
    <div class="container ">
      <div class="heading_container heading_center">
        <h2>
          What Says Customers
        </h2>
        <hr>
      </div>
      <div class="row">
        <div class="col-md-6 mx-auto">
          <div class="client_container ">
            <div class="detail-box">
              <p>
              The library has so many helpful materials to rely on for research purposes and the assistance is very responsive too....love this kind of platform.
              </p>
              <span>
                <i class="fa fa-quote-left" aria-hidden="true"></i>
              </span>
            </div>
            <div class="client_id">
              <!-- <div class="img-box">
                <img src="images/c1.jpg" alt="">
              </div> -->
              <div class="client_name">
                <h5>
                Christy E.
                </h5>
                <h6>
                  Education Consultant
                </h6>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 mx-auto">
          <div class="client_container ">
            <div class="detail-box">
              <p>
              Finally there is a place to find textbooks and study guides without stress. This library is just one in a million.
              </p>
              <span>
                <i class="fa fa-quote-left" aria-hidden="true"></i>
              </span>
            </div>
            <div class="client_id">
              <!-- <div class="img-box">
                <img src="images/c2.jpg" alt="">
              </div> -->
              <div class="client_name">
                <h5>
                Loveth N.
                </h5>
                <h6>
                Student
                </h6>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 mx-auto">
          <div class="client_container ">
            <div class="detail-box">
              <p>
              Very cool platform, I'm not a student of Yonevas College, but I found a lot of useful materials here for my project writing and defence. This is great. 
              </p>
              <span>
                <i class="fa fa-quote-left" aria-hidden="true"></i>
              </span>
            </div>
            <div class="client_id">
              <!-- <div class="img-box">
                <img src="images/c3.jpg" alt="">
              </div> -->
              <div class="client_name">
                <h5>
                Emeka J.
                </h5>
                <h6>
                  Student
                </h6>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end client section -->
  <section class="client_section layout_padding">
    <div class="container ">
      <div class="heading_container heading_center">
        <h2 style="margin-bottom:70px">
         FAQs
        </h2>
        <hr>
      </div>
      <div class="row">
        <div class="col-lg-12 mx-auto">
        <button class="accordion">How do I find a book?  <span style="float:right; font-size:30px">+</span></button>
<div class="panel">
  <p>You can look up books by typing in keywords(book title) in the search box, or enter book ID if you know it.</p>
</div>

<button class="accordion">What is the best way to contact a librarian? <span style="float:right; font-size:30px">+</span></button>
<div class="panel">
  <p>You can schedule a meeting to speak to the library representative through webform, or email.</p>
</div>

<button class="accordion">What kind of opportunities are available for students? <span style="float:right; font-size:30px">+</span></button>
<div class="panel">
  <p>Students can apply as virtual assistants, research team members, writer, editor, presenter, and many more.</p>
</div>

<button class="accordion">What are library hours?  <span style="float:right; font-size:30px">+</span></button>
<div class="panel">
  <p>Library hours can be found by clicking the link on the home page, or just clicking hours.</p>
</div>

<button class="accordion">Why do I not have access to Papers?  <span style="float:right; font-size:30px">+</span></button>
<div class="panel">
  <p> Information under the category with name ‘Papers’ is exclusive to registered students, if you are a registered student, you will be asked to provide your Student ID to continue and once you verify your ID, you should have access to all information available under that category.</p>
</div>

<button class="accordion">What is MyLibrary?  <span style="float:right; font-size:30px">+</span></button>
<div class="panel">
  <p>MyLibrary is a profile that keeps track of  all your activities in the library such as; books you've purchased, borrowed, or saved in your cart for future purchase. It is your individual account you created during sign up.</p>
</div>
      </div>
    </div>
  </section>

  <!-- blog section -->

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


  <!-- end blog section -->

  <!-- contact section -->

  <section class="contact_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-6 ">
          <div class="heading_container ">
            <h2 class="">
        
              Contact Us

            </h2>

            

          </div>
  
        
          <form action="{{url('users_send_email')}}" method="post">
            @csrf
        
            <div class="form-group">
              <label for="">Name</label>
              <input type="text" class="form-control" placeholder="Enter your name" name="name" value="{{ old('name') }}" required="required"/>
              @error('name') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
              <label for="">Email</label>
              <input type="email" class="form-control" placeholder="Enter your email" name="email" value="{{ old('email') }}" required="required"/>
              @error('email') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
              <label for="">Subject</label>
              <input type="text" class="form-control" placeholder="Enter subject here" name="subject" value="{{ old('subject') }}" required="required"/>
              @error('subject') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
          <div class="form-group">
          <label for="">Message</label>
              <input type="text" class="message-box" name="message" value="{{ old('message') }}" placeholder="Enter message here...." required="required"/>
              @error('message') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="btn-box">
              <button>
                SEND
              </button>
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
  <script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}
</script>
</body>

</html>