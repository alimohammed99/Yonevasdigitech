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

  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">

<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">

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
#hover:hover{
border-right:10px groove tomato;
border-bottom:5px double tomato;
background-color:;
color:;
padding:15px;
transition:0.2s;
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
                <a id="hover"  class="nav-link pl-lg-0" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a id="hover"  class="nav-link" href="{{url('categories')}}">Categories</a>
              </li>
              <li class="nav-item">
                <a id="hover"  class="nav-link" href="{{url('find_books')}}"> Find Books/Articles</a>
              </li>
             
                    
              <li class="dropdown nav-item">
              <a class="dropbtn nav-link" href="javascript:;"> Careers</a>
  <div class="dropdown-content">
  <a href="{{url('careers')}}">Apply online</a>
  <a href="{{url('download_application_form')}}">Download Application form</a>

  </div>
</li>

              <li class="nav-item">
                <a id="hover"  class="nav-link" href="{{url('about_us')}}">About Us</a>
              </li>
              <li class="nav-item">
                <a id="hover"  class="nav-link" href="{{url('contact_us')}}">Contact Us</a>
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

  @if(session()->has('message'))
          <div class="alert alert-success alert-dismissible">
            <button class="close" type="button" data-dismiss="alert">x</button>
            {{session()->get('message')}}
          </div>
        @endif
        
  <!-- contact section -->

  <section class="contact_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-6 ">
          <div class="heading_container ">
           
<h1 style="color:black; font-style:italic; font-family:broadway; border-radius:30px; font-size:32px; margin-top:30px; background-color:tomato; padding:15px; margin-bottom:52px">MY CART</h1>
          </div>
          <div class="table-responsive">

<table style="" id="example" class="table table-lg table-bordered table-hover">
    <tr>
    <th style="color:tomato">Book Title</th>
    <th style="color:tomato">Book Author</th>
    <th style="color:tomato">Image</th>
        <th style="color:tomato">Price</th>
        <th style="color:tomato">Action</th>
    </tr>

    


    <?php $totalPrice = 0; ?>

    @foreach($my_cart as $my_cart)

    <tr>
        <td>
    
          {{$my_cart->book_title}}
      
        </td>

        <td>
        <!-- <input type="text" name="quantity[]" value="{{$my_cart->book_author}}" hidden> -->
          {{$my_cart->book_author}}
        </td>


        <td><img style="height:" height="100" width="100" src="booksimages/{{$my_cart->image}}" alt=""></td>


        <td>
        <!-- <input type="text" name="price[]" value="{{$my_cart->book_price}}" hidden> -->
          {{$my_cart->book_price}}
        </td>
        <td><a onclick="return confirm('Are you sure?')"  href="{{url('deletecart', $my_cart->id)}}" class="btn btn-danger">Remove<a> </td>
    </tr>

  
    <?php $totalPrice = $totalPrice + $my_cart->book_price ?>

    @endforeach

    <tr>
      <td style="border:none"></td>
      <td style="border:none"></td>
      <td style="font-size:22px">Total  =      ₦{{$totalPrice}}</td>
      <td style="border:none"></td>
    </tr>



</table>

</div>

@php



if(empty($empty_or_not)){

  @endphp


  <marquee class="text-info" style="cursor:not-allowed; font-size:22px; behavior=" direction="left">Cart is Empty</marquee>

  @php

}else{

  @endphp

  <input type="hidden" value="{{json_encode($all_books) }}" id="books_arr">

<button onclick="payWithPaystack()" class="btn btn-success" type="button" id="order">Order Now <input type="hidden" id="all_books[]" name=""></button>

@php

}

@endphp


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
  <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <script src="https://js.paystack.co/v1/inline.js"></script>
  <!-- jQery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.js"></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
  </script>










<script>

$.ajaxSetup({
    headers:{
        'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
    }
})

let books = [];
let totalBookPrice = 0;
totalBookPrice =  {{$totalPrice}};
let total = totalBookPrice * 100;

function payWithPaystack() {
    books = $('#books_arr').val();

    var handler = PaystackPop.setup({ 
        key: 'pk_test_d2d7a9e4e0d99eebf57d012e91830257871ef456', //put your public key here
        email: 'kidtalented1@gmail.com', //put your customer's email here
        amount: total, //amount the customer is supposed to pay
        metadata: {
            custom_fields: [
                {
                    books:books
                }
            ]
        },
        callback: function (response) {
            //after the transaction have been completed
            //make post call  to the server with to verify payment 
            //using transaction reference as post data
            console.log("response", response)
            $.post("{{ url('verify_payment') }}", {reference:response.reference}, function(result){
                console.log("result==>", result);
                if(result.status == 200)
                    //successful transaction
                    alert(result.message);
                else
                    //transaction failed
                    alert(result.message);

                    
            });
        },
        onClose: function () {
            //when the user close the payment modal
            alert('Transaction cancelled');
        }
    });
    handler.openIframe(); //open the paystack's payment modal
}
</script>





















<script>
  $(document).ready(function () {
    $('#example').DataTable();
});
</script>



  <!-- End Google Map -->

</body>

</html>