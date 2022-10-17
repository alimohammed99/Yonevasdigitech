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


#hover:hover{
border-right:10px groove tomato;
border-bottom:5px double tomato;
background-color:;
color:;
padding:15px;
transition:0.2s;
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
                <a id="hover" class="nav-link" href="{{url('find_books')}}"> Find Books/Articles</a>
              </li>
             
              <li class="dropdown nav-item">
              <a class="dropbtn nav-link" href="#"> Careers</a>
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
              <a class="dropbtn nav-link" href="#"><i class="fa fa-user"></i> My Account</a>
  <div class="dropdown-content">
  <a id="cart" style="color:tomato; border-radius:; background-color:" class="nav-link cart" href="{{url('show_my_cart')}}"><i class="fa fa-shopping-cart"></i> My Cart [ {{$count}} ]  </a>


  <a id="cart" style="color:tomato; border-radius:; background-color:" class="nav-link cart" href="{{url('show_my_books')}}"><i class="fa fa-book"></i> My Library [ {{$purchased_books}} ]  </a>

  </div>
</li>





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
    <!-- end header section -->
  </div>

  <!-- blog section -->

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

  <section class="blog_section layout_padding">
    <div class="container">
        <h1 class="text-center">ABOUT US</h1> <br><br>
    <div class="section-heading">
              <h2>Facts :</h2>
              <!-- <a href="{{url('categories')}}">Search by categories <i class="fa fa-angle-right"></i></a> -->








            </div>
            <div class=" container row">
            <div class="col-lg-12">

       
Yonevas digitech is an e-learning environment created to support student growth in their various
professions.Students who study at Yonevas College use the library tools to conduct researches
and enhance learning, the library books contains hundreds of printed textbooks. The book
categories consists of articles, fictions and nonfiction, researched papers on various topics by
<b>Yonevas research group</b>, different genres including : science , arts , investigations, self-help,
romance, mystery, fantacy , and many other literature.
</div>
        </div> 
          </div>
  

     
    </div> <br> <br>













    <div class="container">
    <div class="section-heading">
              <h2>Mision :    </h2>
              <!-- <a href="{{url('categories')}}">Search by categories <i class="fa fa-angle-right"></i></a> -->








            </div>
            <div class=" container row">
            <div class="col-lg-12">

       
            Yonevas Digitech is committed to providing students with the most efficient digital experience
by making the materials available in digital formats, majority of the student’s handouts are found
in the online store including related topics in different areas of study. Yonevas digitech works
with different research institutions to ensure that information available in the library are up to
date and comply with the Government rules and most updated academic syllables.
        </div> 
          </div>
  

     
    </div> <br><br>










    <div class="container">
    <div class="section-heading">
              <h2>Careers :    </h2>
              <!-- <a href="{{url('categories')}}">Search by categories <i class="fa fa-angle-right"></i></a> -->








            </div>
            <div class=" container row">
            <div class="col-lg-12">

       
            The library has created job opportunities for Students and Individuals who are interested in
further education and research. Lots of students find the opportunity to explore their career goals
with the help of our staff and professors in Education. <br> <br>

<!-- <a class="btn btn-success" href="{{url('careers')}}">
              Seek opportunities
            </a> -->
        </div> 
          </div>
  

     
    </div>  <br><br>



  </section>

  <!-- end blog section -->
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
              <a href="https://www.instagram.com/p/CinYrWNLLuX/?igshid=YmMyMTA2M2Y=">
                <i class="fa fa-instagram" aria-hidden="true"></i>
              </a>
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
              <a href="">
                <!-- <i class="fa fa-map-marker" aria-hidden="true"></i> -->
                <span>
                Yonevas College
                  </span>
                </a>
                <a href="">
                  <!-- <i class="fa fa-map-marker" aria-hidden="true"></i> -->
                <span>
                Library
                </span>
              </a>
              <a href="">
                <!-- <i class="fa fa-map-marker" aria-hidden="true"></i> -->
                <span>
                Y-Psl
                </span>
              </a>
              <a href="">
                <!-- <i class="fa fa-map-marker" aria-hidden="true"></i> -->
                <span>
                Articles
                </span>
              </a>
              <a href="">
                <!-- <i class="fa fa-map-marker" aria-hidden="true"></i> -->
                <span>
                Textbooks
                </span>
              </a>
              <a href="">
                <!-- <i class="fa fa-map-marker" aria-hidden="true"></i> -->
                <span>
                Crime/Investigation
                </span>
              </a>
              <a href="">
                <!-- <i class="fa fa-map-marker" aria-hidden="true"></i> -->
                <span>
                Self-help Journals
                </span>
              </a>
              <a href="">
                <!-- <i class="fa fa-map-marker" aria-hidden="true"></i> -->
                <span>
                career
                </span>
              </a>
              <a href="">
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
              <a href="">
                <!-- <i class="fa fa-map-marker" aria-hidden="true"></i> -->
                <span>
                Events  
                  </span>
                </a>
                <a href="">
                  <!-- <i class="fa fa-map-marker" aria-hidden="true"></i> -->
                <span>
                Enrollment
                </span>
              </a>
              <a href="">
                <!-- <i class="fa fa-map-marker" aria-hidden="true"></i> -->
                <span>
                Calendar
                </span>
              </a>
              <a href="">
                <!-- <i class="fa fa-map-marker" aria-hidden="true"></i> -->
                <span>
                Online courses
                </span>
              </a>
              <a href="">
                <!-- <i class="fa fa-map-marker" aria-hidden="true"></i> -->
                <span>
                Contact Us
                </span>
              </a>
              <a href="">
                <!-- <i class="fa fa-map-marker" aria-hidden="true"></i> -->
                <span>
                Scholarship programs
                </span>
              </a>
              <a href="">
                <!-- <i class="fa fa-map-marker" aria-hidden="true"></i> -->
                <span>
                student life
                </span>
              </a>
              <a href="">
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