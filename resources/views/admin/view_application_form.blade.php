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
  <base href="/public">
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
    <div class="container">

<!-- <h1 style="text-align:center; font-size:33px; color:white">ADD LEVELS</h1> -->


@if(session()->has('message'))
      <div class="alert alert-success alert-dismissible">
        <button class="close" type="button" data-dismiss="alert">x</button>
        {{session()->get('message')}}
      </div>
@endif





<div class=" container col-lg-12" style="overflow:scroll;" class="image-responsive">



<iframe style="overflow:scroll" src="/assets2/{{$data->form}}" height="700" width="700" frameborder="0"></iframe>


</div>







</div>


  <!--   Core JS Files   -->
@include("admin.script")
</body>

</html>