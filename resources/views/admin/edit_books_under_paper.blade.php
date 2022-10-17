<!--
=========================================================
* Argon Dashboard 2 - v2.0.4
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-dashboard
* Copyright 2022 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- <link rel="apple-touch-icon" sizes="76x76" href="admin/assets/img/apple-icon.png"> -->
  <!-- <link rel="icon" type="image/png" href="admin/assets/img/favicon.png"> -->
  <base href = "/public">
  <title>
   YonevasDigiTech
  </title>
 @include("admin.css")
</head>

<body class="g-sidenav-show   bg-gray-100">
  <div class="min-height-300 bg-primary position-absolute w-100"></div>
 @include("admin.sidebar")
  <main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
   @include("admin.navbar")
    <!-- End Navbar -->
   
	<div class="container" align="center" style="text-align:center; margin-top:35px">
        <h1 style="color:#5e72e4; font-style:italic; font-family:broadway; font-size:32px; margin-top:30px; border-radius:70px 10px 70px 10px; background-color:white; padding:15px; margin-bottom:52px">EDIT BOOK</h1>



        @if(session()->has('message'))
          <div class="alert alert-success alert-dismissible">
            <button class="close" type="button" data-dismiss="alert">x</button>
            {{session()->get('message')}}
          </div>
        @endif
        

        


        <form style="width:100%" class="form" action="{{url('update_books_under_paper', $data->id)}}" method="post" enctype="multipart/form-data">
          @csrf


          <div class="form-group">
        <label style="font-size:20px"  for="price">Book Category</label> <br>
                <select class="form-control" style="color:tomato" name="category_id" id="level" class="c" >

                    <!-- <option  value="">------select Category--------</option> -->

                    @foreach($dataaa as $dataaa)
                    <option style="color:tomato" value="{{$dataaa->id}}" required="">{{$dataaa->category_name}}</option>
                    @endforeach

            </select>

        </div>

   
       <div class="form-group">
        <label style="font-size:20px" for="price">Book Title</label>
          <input style="color:tomato" class="form-control" value="{{$data->book_title}}" type="text" name="book_title"  required>
        </div>


        <div class="form-group">
        <label style="font-size:20px"  for="price">Book Author</label>
          <input style="color:tomato" class="form-control" value="{{$data->book_author}}" type="text" name="book_author"  required>
        </div>

        

        <div class="form-group">
         <label style="font-size:20px"  for="img">Old Book</label>
         <input style="color:tomato" class="form-control" value="{{$data->book}}" type="text" name="book_price" disabled required>
        </div>
       </div>

       <div class="form-group">
         <label style="font-size:20px"  for="imgg"><span style="font-size:22px">Change Book</span></label> <br> <br>
         <input class="form-control" type="file" name="book">
       </div>





            <div class="form-group">
         <label style="font-size:20px"  for="img">Old Image</label>
         <img height="300" width="300" src="/paperbooksimages/{{$data->image}}" alt="">
       </div>

       <div class="form-group">
         <label style="font-size:20px"  for="imgg"><span style="font-size:22px">Change Image</span></label> <br> <br>
         <input type="file" name="book_image">
       </div>




        <div class="form-group">
        <label style="font-size:20px"  for="price">Price</label>
          <input style="color:tomato" class="form-control" value="{{$data->book_price}}" type="text" name="book_price" required>
        </div>





        <div class="form-group">
        <label style="font-size:20px"  for="price">Book Abstract</label>
          <input style="color:tomato" class="form-control" value="{{$data->book_abstract}}" type="text" name="book_abstract"  required>
        </div>

        <div class="form-group">
          <input style="background-color:green; border-radius:50px; font-size:22px; padding:27px; color:white" type="submit" class="btn btn-success" value="Update">
        </div>

        <div class="form-group">
      <a class="btn btn-info" href="{{url('books_under_paper')}}">View all Books</a>
        </div>



     

        </form>

 <!-- <a style="color:blue; font-size:22px" href="{{url('view_genders')}}" class="btn btn-info">View All Genders</a> -->

 








        </div>

  <!--   Core JS Files   -->
@include("admin.script")
</body>

</html>