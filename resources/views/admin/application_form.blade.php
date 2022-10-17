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
        <h1 style="color:#5e72e4; font-style:italic; font-family:broadway; font-size:32px; margin-top:30px; border-radius:70px 10px 70px 10px; background-color:white; padding:15px; margin-bottom:52px">APPLICATION FORM  </h1>






        @if(session()->has('message'))
          <div class="alert alert-success alert-dismissible">
          {{session()->get('message')}}
            <button class="close" type="button" data-bs-dismiss="alert"> X</button>
         
          </div>
        @endif
        







<!-- Button to Open the Modal -->
<button style="background-color:#5e72e4;   box-shadow: 5px 5px 5px  black;" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
  Add Application Form
</button>

<!-- The Modal -->
<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div style="border-radius:50px" class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 style="" class="modal-title">Add Application Form</h4>
        <button type="button" class="close" data-bs-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      <form style"width:50%" class="form" action="{{url('upload_application_form')}}" method="post" enctype="multipart/form-data">
          @csrf



        <div class="form-group">
        <label for="price">Application Form</label> <br>
          <input type="file" name="file" required="required"> <br>
          <span style="font-size:22px; color:red">Upload .pdf documents only</span>
        </div>

        <div class="form-group">
          <input style="background-color:green; border-radius:50px; font-size:22px; padding:27px; color:white" type="submit" class="btn btn-success" value="Submit">
        </div>



        </form>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" style="background:red" data-bs-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div> <br><br>








<div class="table-responsive">

<table style="" id="example" class="table table-lg table-bordered table-hover">
  <thead class="thead-dark">
    <tr style="text-align:center">
      <th style="text-align:center" scope="col">File</th>
      <th style="text-align:center" style="" colspan="" scope="">VIEW</th>
      <th style="text-align:center" style="" colspan="" scope="">DOWNLOAD</th>
      <th style="text-align:center" style="" colspan="" scope="">DELETE</th>
    </tr>
  </thead>
  <tbody>
@foreach($data as $data)
<tr style="text-align:center">
<td>{{$data->form}}</td>
<td class=""> <a class="btn btn-warning" href="{{url('view_application_form', $data->id)}}"><i class="fa fa-eye"></i></a></td>
<td class=""> <a class="btn btn-success" href="{{url('download_application_form', $data->form)}}"><i class="  fa fa-arrow-circle-down"></i></a></td>
<td class=""><a onclick="return confirm('Are you sure?')"  class="btn btn-danger" href="{{url('delete_application_form', $data->id)}}"><i class="fa fa-trash"></i></a> </td>

      </tr>

@endforeach

  
  </tbody>
</table>

















  <!--   Core JS Files   -->
@include("admin.script")
</body>

</html>