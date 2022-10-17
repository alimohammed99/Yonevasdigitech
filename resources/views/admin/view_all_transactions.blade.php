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
  <link rel="apple-touch-icon" sizes="76x76" href="admin/assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="admin/assets/img/favicon.png">
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
        <h1 style="color:#5e72e4; font-style:italic; font-family:broadway; font-size:32px; margin-top:30px; border-radius:70px 10px 70px 10px; background-color:white; padding:15px; margin-bottom:52px">ALL TRANSACTIONS  </h1>






        @if(session()->has('message'))
          <div class="alert alert-success alert-dismissible">
          {{session()->get('message')}}
            <button class="close" type="button" data-bs-dismiss="alert"> X</button>
         
          </div>
        @endif
        














<div class="table-responsive">

<table style="" id="example" class="table table-lg table-bordered table-hover">
  <thead class="thead-dark">
    <tr style="text-align:center">
      <th style="text-align:center" scope="col">FIRST NAME</th>
      <th style="text-align:center" scope="col">LAST NAME</th>
      <th style="text-align:center" scope="col">EMAIL</th>
      <th style="text-align:center" scope="col">PHONE</th>
      <th style="text-align:center" scope="col">BOOK ID</th>
      <th style="text-align:center" scope="col">BOOK TITLE</th>
      <th style="text-align:center" scope="col">BOOK IMAGE</th>
      <th style="text-align:center" scope="col">AMOUNT</th>
      <th style="text-align:center" scope="col">REFERENCE NUMBER</th>
      <th style="text-align:center" scope="col">STATUS</th>
    </tr>
  </thead>
  <tbody>

  <?php $totalAmount = 0; ?>

@foreach($data as $data)


<tr>
    <td>{{$data->first_name}}</td>
    <td>{{$data->last_name}}</td>
    <td>{{$data->email}}</td>
    <td>{{$data->phone}}</td>
    <td>{{$data->book_id}}</td>
    <td>{{$data->book_title}}</td>
    <td><img style="height:" height="100" width="100" src="booksimages/{{$data->image}}" alt=""></td>
    <td>{{$data->amount}}</td>
    <td>{{$data->reference_number}}</td>
    <td>{{$data->status}}</td>
</tr>

<?php $totalAmount = $totalAmount + $data->amount ?>
@endforeach

  </tbody>
  <tr>
 

        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td style="background-color:green; color:white; border-radius:12px; font-size:25px; text-shadow:red 6px 8px 4px" class="">TOTAL AMOUNT = ₦{{$totalAmount}}</td>
        <td></td>
        <td></td>
</tr>
  
</table>

















  <!--   Core JS Files   -->
@include("admin.script")
</body>

</html>