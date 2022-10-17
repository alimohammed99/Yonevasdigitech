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
        <h1 style="color:#5e72e4; font-style:italic; font-family:broadway; font-size:32px; margin-top:30px; border-radius:70px 10px 70px 10px; background-color:white; padding:15px; margin-bottom:52px">ALL CATEGORIES UNDER PAPER</h1>






        @if(session()->has('message'))
          <div class="alert alert-success alert-dismissible">
          {{session()->get('message')}}
            <button class="close" type="button" data-bs-dismiss="alert"> X</button>
         
          </div>
        @endif
        


        @if(session()->has('error'))
          <div class="alert alert-danger alert-dismissible">
          {{session()->get('error')}}
            <button class="close" type="button" data-bs-dismiss="alert"> X</button>
         
          </div>
        @endif
        




<!-- Button to Open the Modal -->
<button style="background-color:#5e72e4;   box-shadow: 5px 5px 5px  black;" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
  Add Categories
</button>

<!-- The Modal -->
<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div style="border-radius:50px" class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 style="" class="modal-title">Add Categories</h4>
        <button type="button" class="close" data-bs-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      <form style="width:50%" class="form" action="{{url('upload_paper_categories')}}" method="post" enctype="multipart/form-data">
          @csrf

          <div class="form-group">
        <label for="price">Choose Book Category</label> <br>
                <select class="form-control" style="color:tomato" name="category_id" id="level" class="c" >

                    <!-- <option  value="">------select Category--------</option> -->

                    @foreach($data2 as $data2)
                    <option style="color:tomato" value="{{$data2->id}}" required="">{{$data2->category_name}}</option>
                    @endforeach

            </select>

        </div>

       <div class="form-group">
        <label for="price">Category Name</label>
          <input style="color:tomato" class="form-control col-lg-12" type="text" name="category_name" placeholder="Enter Category Name....." required>
        </div>

<!-- 
        <div class="form-group">
        <label for="price">Category Description</label>
          <input style="color:tomato" class="form-control" type="text" name="category_description" placeholder="Enter Category Description....." required>
        </div> -->



        <div class="form-group">
        <label for="img">Category Image</label> <br>
          <input type="file" name="file" required>
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
      <!-- <th style="text-align:center" scope="col">CATEGORY ID</th> -->
      <th style="text-align:center" scope="col">CATEGORY NAME</th>
      <!-- <th scope="col">CATEGORY DESCRIPTION</th> -->
      <th scope="col">CATEGORY IMAGE</th>
      <th style="text-align:center" style="" colspan="" scope="">EDIT</th>
      <th style="text-align:center" style="" colspan="" scope="">DELETE</th>
    </tr>
  </thead>
  <tbody>
  @foreach($data as $data)
      <tr style="color:black" class="table-">
      <!-- <td>{{$data->category_id}}</td> -->
      <td>{{$data->category_name}}</td>
      <!-- <td>{{$data->category_description}}</td> -->
      <td><img style="height:" height="100" width="100" src="papercategoriesimage/{{$data->image}}" alt=""></td>
      <td class=""> <a class="btn btn-info" href="{{url('edit_paper_categories', $data->id)}}"><i class="fa fa-edit"></i></a></td>
      <td class=""><a onclick="return confirm('Are you sure?')"  class="btn btn-danger" href="{{url('delete_paper_categories', $data->id)}}"><i class="fa fa-trash"></i></a> </td>
    </tr>
    @endforeach

  
  </tbody>
</table>

















  <!--   Core JS Files   -->
@include("admin.script")
</body>

</html>