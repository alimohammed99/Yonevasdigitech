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
        <h1 style="color:#5e72e4; font-style:italic; font-family:broadway; font-size:32px; margin-top:30px; border-radius:70px 10px 70px 10px; background-color:white; padding:15px; margin-bottom:52px">EDIT CATEGORY</h1>



        @if(session()->has('message'))
          <div class="alert alert-success alert-dismissible">
            <button class="close" type="button" data-dismiss="alert">x</button>
            {{session()->get('message')}}
          </div>
        @endif
        



        <form style="width:100%" class="form" action="{{url('update_paper_categories', $data->id)}}" method="post" enctype="multipart/form-data">
          @csrf

        <div class="form-group">
          <label style="font-size:22px;" for="title">Category ID</label> 
          <input style="color:tomato; border-bottom-right-radius:30px;  border-bottom-left-radius:30px; padding:30px; width:40%" class="form-control" name="category_id" type="text" value="{{$data->category_id}}" required>
        </div>

       <div class="form-group">
        <label style="font-size:22px" for="price">Category Name</label> <br>
          <input style="color:tomato; border-radius:30px; padding:30px;  width:40%" class="form-control" type="text" name="category_name" value="{{$data->category_name}}" required>
        </div>


        
        <div class="form-group">
         <label style="font-size:20px"  for="img">Old Image</label>
         <img height="300" width="300" src="/papercategoriesimage/{{$data->image}}" alt="">
       </div>


  


        <div class="form-group">
        <label for="img">Change Image</label> <br>
          <input type="file" name="file">
        </div>


    

     <div class="form-group">
          <input style="background-color:green; border-radius:50px; font-size:22px; padding:27px; color:white" type="submit" class="btn btn-success" value="Update">
        </div>


        <div class="form-group">
      <a class="btn btn-info" href="{{url('admin_paper_categories')}}">View all Categories</a>
        </div>



        </form>

 <!-- <a style="color:blue; font-size:22px" href="{{url('view_genders')}}" class="btn btn-info">View All Genders</a> -->

 








        </div>

  <!--   Core JS Files   -->
@include("admin.script")
</body>

</html>