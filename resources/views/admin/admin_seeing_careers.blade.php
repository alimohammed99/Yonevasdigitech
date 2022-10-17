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
        <h1 style="color:#5e72e4; font-style:italic; font-family:broadway; font-size:32px; margin-top:30px; border-radius:70px 10px 70px 10px; background-color:white; padding:15px; margin-bottom:52px">ALL APPLICATIONS  </h1>






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
      <th style="text-align:center" scope="col">SURNAME</th>
      <th style="text-align:center" scope="col">MIDDLE INITIAL</th>
      <th style="text-align:center" scope="col">DATE OF BIRTH</th>
      <th style="text-align:center" scope="col">MARITAL STATUS</th>
      <th style="text-align:center" scope="col">ADDRESS</th>
      <th style="text-align:center" scope="col">COUNTRY</th>
      <th style="text-align:center" scope="col">STATE</th>
      <th style="text-align:center" scope="col">CITY</th>
      <th style="text-align:center" scope="col">ZIPCODE</th>
      <th style="text-align:center" scope="col">PHONE</th>
      <th style="text-align:center" scope="col">EMAIL</th>
      <th style="text-align:center" scope="col">HIGHEST LEVEL OF EDUCATION</th>
      <th style="text-align:center" scope="col">ELEMENTARY SCHOOL & YEAR COMPLETED</th>
      <th style="text-align:center" scope="col">SECONDARY SCHOOL & YEAR COMPLETED</th>
      <th style="text-align:center" scope="col">HIGHER INSTITUTION & YEAR COMPLETED</th>
      <th style="text-align:center" scope="col">PREVIOUS EMPLOYER</th>
      <th style="text-align:center" scope="col">JOB START</th>
      <th style="text-align:center" scope="col">JOB END</th>
      <th style="text-align:center" scope="col">REASONS FOR LEAVING</th>
      <th style="text-align:center" scope="col">PREVIOUS EMPLOYER'S CONTACT</th>
      <th style="text-align:center" scope="col">SHOULD WE CONTACT THEM</th>
      <th style="text-align:center" scope="col">TEACHING EXPERIENCE</th>
      <th style="text-align:center" scope="col">YEARS OF  EXPERIENCE</th>
      <th style="text-align:center" scope="col">COMPUTER PACKAGES</th>
      <th style="text-align:center" scope="col">FREE TIME</th>
      <th style="text-align:center" scope="col">HOW OFTEN DO YOU TRAVEL</th>
      <th style="text-align:center" scope="col">GROUPS</th>
      <th style="text-align:center" scope="col">LANGUAGES</th>
      <th style="text-align:center" scope="col">HOW SOON CAN YOU START WORK</th>
      <th style="text-align:center" scope="col">CAN YOU TRAVEL FOR WORK</th>
      <th style="text-align:center" scope="col">DO YOU HAVE MEDICAL CONDITIONS</th>

    </tr>
  </thead>
  <tbody>

@foreach($data as $data)


<tr>
    <td>{{$data->first_name}}</td>
    <td>{{$data->surname}}</td>
    <td>{{$data->middle_initial}}</td>
    <td>{{$data->date_of_birth}}</td>
    <td>{{$data->status}}</td>
    <td>{{$data->address}}</td>
    <td>{{$data->name_country}}</td>
    <td>{{$data->name_state}}</td>
    <td>{{$data->name_city}}</td>
    <td>{{$data->zipcode}}</td>
    <td>{{$data->phone}}</td>
    <td>{{$data->email}}</td>
    <td>{{$data->highest_level_of_education}}</td>
    <td>{{$data->elementay_school}}</td>
    <td>{{$data->secondary_school}}</td>
    <td>{{$data->higher_institution}}</td>
    <td>{{$data->previous_employer}}</td>
    <td>{{$data->job_start}}</td>
    <td>{{$data->job_end}}</td>
    <td>{{$data->reasons_for_leaving}}</td>
    <td>{{$data->previous_employer_phone}}</td>
    <td>{{$data->should_we_contact_them}}</td>
    <td>{{$data->teaching_experience}}</td>
    <td>{{$data->years_of_experience}}</td>
    <td>{{$data->computer_packages}}</td>
    <td>{{$data->free_time}}</td>
    <td>{{$data->how_often_do_you_travel}}</td>
    <td>{{$data->groups}}</td>
    <td>{{$data->languages}}</td>
    <td>{{$data->how_soon}}</td>   
    <td>{{$data->travel_for_work}}</td>
    <td>{{$data->medical_conditions}}</td>


@endforeach
  
  </tbody>
</table>

















  <!--   Core JS Files   -->
@include("admin.script")
</body>

</html>