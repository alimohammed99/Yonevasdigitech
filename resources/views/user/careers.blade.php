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

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

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

#hover:hover{
border-right:10px groove tomato;
border-bottom:5px double tomato;
background-color:;
color:;
padding:15px;
transition:0.2s;
}


#hover:hover{
border-right:10px groove tomato;
border-bottom:5px double tomato;
background-color:;
color:;
padding:15px;
transition:0.2s;
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
                <a id="hover"  class="nav-link pl-lg-0" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a id="hover" class="nav-link" href="{{url('categories')}}">Categories</a>
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


        @if(session()->has('error'))
          <div class="alert alert-danger alert-dismissible">
            <button class="close" type="button" data-dismiss="alert">x</button>
            {{session()->get('error')}}
          </div>
        @endif
  <!-- contact section -->

  <section class="contact_section layout_padding">
    <div class="container">
    <div class="section-heading">
              <h2>Become a member</h2>
              <span> Apply for a role now <i class="fa fa-angle-right"></i></span>
         
        
          </div>
          <h5 class="text-danger" style="padding-bottom:">* If you do not have an answer to any of the questions, do not leave it blank, put N/A instead.</h5> <br>
          <h5 class="text-danger" style="padding-bottom:50px">* Make sure you click submit before closing your browser, otherwise your application may not be submited.</h5>
          <form class="edit-profile m-b30" action="{{url('submit_career_form')}}" method="POST" enctype="multipart/form-data">

          @csrf
								<div class="row">
									<div class="col-12">
										<div class="ml-auto">
											<h3>1. Personal Information</h3> 
										</div>
									</div>
									<div class="form-group col-6">
										<label class="col-form-label">First Name</label>
										<div>
                    <!-- <div class="form-group col-6">
										<label class="col-form-label">SurName</label>
										<div> -->
											<input class="form-control" name="first_name" type="text" placeholder="Enter First Name..." required="required">
										</div>
									</div>
                  <div class="form-group col-6">
										<label class="col-form-label">SurName</label>
										<div>
                    <!-- <div class="form-group col-6">
										<label class="col-form-label">SurName</label>
										<div> -->
											<input class="form-control" name="surname" type="text" placeholder="Enter Surname..." required="required">
										</div>
									</div>
									<div class="form-group col-6">
										<label class="col-form-label">Middle Initial</label>
										<div>
											<input class="form-control" name="middle_initial" type="text" placeholder="Enter first letter of your middle name if you have one">
											<!-- <span class="help">If you want your invoices addressed to a company. Leave blank to use your full name.</span> -->
										</div>
									</div>
                  <div class="form-group col-6">
										<label class="col-form-label">Date of Birth</label>
										<div>
											<input name="date_of_birth" class="form-control" type="date" required="required">
										
										</div>
									</div>


               
                  <div class="form-group col-6">
        <label for="price">Marital Status</label> <br>
                <select style="color:tomato" name="marital_status" id="level" class="form-control" >

                    <!-- <option value="">------select Class--------</option> -->

                    @foreach($marital_status as $marital_status)
                    <option style="color:black" value="{{$marital_status->id}}" required="">{{$marital_status->status}}</option>
                    @endforeach

            </select>

        </div>



                  <div class="form-group col-6">
										<label class="col-form-label">Address</label>
										<div>
											<input class="form-control" name="address" type="text" placeholder="Enter residential address" required="required">
											<!-- <span class="help">If you want your invoices addressed to a company. Leave blank to use your full name.</span> -->
										</div>
									</div>









              
                  <div class="form-group col-6">
                        <div class="form-group">
                            <label class="form-label"></label>
                            <select name="countries" id="countries" class="form-control">
                                <option value="">Select Country</option>
                                @foreach(App\Models\Countries::orderBy('name_country')->get() as $key => $value)
                                    <option value="{{ $value->id }}" required="required">{{ $value->name_country }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>




                    <div class="form-group col-6">
                        <div class="form-group">
                            <label class="form-label"></label>
                            <select name="states" id="states" class="form-control">
                                <option value="" required="required">Select State</option>

                            </select>
                        </div>
                    </div>



    
                  
                    <div class="form-group col-6">
                        <div class="form-group">
                            <label class="form-label"></label>
                            <select name="cities" id="cities" class="form-control">
                                <option value="" required="required">Select City</option>

                            </select>
                        </div>
                    </div>









                  <div class="form-group col-6">
										<label class="col-form-label">Zip Code</label>
										<div>
											<input class="form-control" name="zipcode" type="text" placeholder="Enter Zip code" required="required">
											<!-- <span class="help">If you want your invoices addressed to a company. Leave blank to use your full name.</span> -->
										</div>
									</div>
                
									<div class="form-group col-6">
										<label class="col-form-label">Phone No.</label>
										<div>
											<input class="form-control" name="phone" type="text" placeholder="Enter phone number" required="required">
										</div>
									</div>
                  <div class="form-group col-6">
										<label class="col-form-label">Email</label>
										<div>
											<input class="form-control" type="email" name="email" placeholder="Enter email address" required="required">
											<!-- <span class="help">If you want your invoices addressed to a company. Leave blank to use your full name.</span> -->
										</div>
									</div>
									
									<div class="seperator"></div>
									
									<div class="col-12 m-t20">
										<div class="ml-auto m-b5">
											<h3>2. Education Background</h3>
										</div>
									</div>
									<div class="form-group col-6">
										<label class="col-form-label">What is the highest level of Education you have completed?</label>
										<div>
											<input class="form-control" name="highest_level_of_education" type="text" placeholder="E.g B.Sc / OND / HND / Diploma" required="required">
										</div>
									</div>
									<div class="form-group col-6">
										<label class="col-form-label">Name of Elementary School and year completed</label>
										<div>
											<input class="form-control" name="elementay_school" type="text" placeholder="E.g Iqra College, 2022" required="required">
										</div>
									</div>
                  <div class="form-group col-6">
										<label class="col-form-label">Name of Secondary School and year completed</label>
										<div>
											<input class="form-control" name="secondary_school" type="text" placeholder="E.g Iqra College, 2022" required="required">
										</div>
									</div>

                  <div class="form-group col-6">
										<label class="col-form-label">Name of University/Polytechnic/College and year completed</label>
										<div>
											<input class="form-control" type="text" name="higher_institution" placeholder="E.g Iqra College, 2022" required="required">
										</div>
									</div>

									<div class="m-form__seperator m-form__seperator--dashed m-form__seperator--space-2x"></div>

									<div class="col-12 m-t20">
										<div class="ml-auto">
											<h3 class="m-form__section">3. Employment History</h3>
										</div>
									</div>

									<div class="form-group col-6">
										<label class="col-form-label">Name of Previous Employer</label>
										<div>
											<input name="previous_employer" class="form-control" type="text" placeholder="" required="required">
										</div>
									</div>
									<div class="form-group col-6">
										<label class="col-form-label">Job Start</label>
										<div>
											<input class="form-control" name="job_start" type="month" required="required">
										</div>
									</div>
                  <div class="form-group col-6">
										<label class="col-form-label">Job End</label>
										<div>
											<input class="form-control" name="job_end" type="month" required="required">
										</div>
									</div>
									<div class="form-group col-6">
										<label class="col-form-label">Reasons for leaving</label>
										<div>
											<input class="form-control" name="reasons_for_leaving" type="text" required="required">
										</div>
									</div>
									<div class="form-group col-6">
										<label class="col-form-label">Employer Contact</label>
										<div>
											<input class="form-control" type="text" name="previous_employer_phone" placeholder="Employer's phone number" required="required">
										</div>
									</div>


                          <div class="form-group col-6">
        <label for="price">Should we contact them?</label> <br>
                <select style="color:tomato" name="should_we_contact_them" id="level" class="form-control" >

                    <!-- <option value="">------select Class--------</option> -->

                    @foreach($ShouldWeContactThem as $ShouldWeContactThem)
                    <option style="color:black" value="{{$ShouldWeContactThem->id}}" required="">{{$ShouldWeContactThem->should_we_contact_them}}</option>
                    @endforeach

            </select>

        </div>



		<div class="form-group col-6">
        <label for="price">Do you have teaching experience?</label> <br>
                <select style="color:tomato" name="teaching_experience" id="level" class="form-control" >

                    <!-- <option value="">------select Class--------</option> -->

                    @foreach($TeachingExperience as $TeachingExperience)
                    <option style="color:black" value="{{$TeachingExperience->id}}" required="">{{$TeachingExperience->teaching_experience}}</option>
                    @endforeach

            </select>

        </div>







                  <div class="form-group col-6">
										<label class="col-form-label">Years of experience</label>
										<div>
											<input class="form-control" name="years_of_experience" type="number" placeholder="Write years of experience" required="required">
										</div>
									</div>
                  <div class="form-group col-12">
										<label class="col-form-label">List all Computer Packages you are most familiar with</label>
										<textarea class="form-control" placeholder="E.g  Microsoft powerpoint, Office Word, Photoshop" name="computer_packages" rows="10" cols="30" required="required"></textarea> <br>
									</div>


                  <div class="seperator"></div>
									
									<div class="col-12 m-t20">
										<div class="ml-auto m-b5">
											<h3>4. Hobby</h3>
										</div>
									</div>
									<div class="form-group col-6">
										<label class="col-form-label">What do you do in your free time?</label>
										<div>
											<input class="form-control" type="text" name="free_time" placeholder="" required="required">
										</div>
									</div>
									<div class="form-group col-6">
										<label class="col-form-label">How often do you travel outside of your residential home?</label>
										<div>
											<input class="form-control" type="text" name="how_often_do_you_travel" required="required">
										</div>
									</div>
                  <div class="form-group col-6">
										<label class="col-form-label">Do you belong to any group of Individuals or Organizations? If so, name them</label>
										<div>
											<input class="form-control" type="text" name="groups" required="required">
										</div>
									</div>
                  <div class="form-group col-6">
										<label class="col-form-label">How many languages can you speak?</label>
										<div>
											<input class="form-control" type="number" name="languages" required="required">
										</div>
									</div>
                  <div class="form-group col-6">
										<label class="col-form-label">How soon are you available to start this job?</label>
										<div>
											<input class="form-control" type="text" name="how_soon" required="required">
										</div>
									</div>




									<div class="form-group col-6">
        <label for="price">Are you open to travel for work, or relocate if job requires?</label> <br>
                <select style="color:tomato" name="travel_for_work" id="level" class="form-control" >

                    <!-- <option value="">------select Class--------</option> -->

                    @foreach($TravelForWork as $TravelForWork)
                    <option style="color:black" value="{{$TravelForWork->id}}" required="">{{$TravelForWork->travel_for_work}}</option>
                    @endforeach

            </select>

        </div>





		<div class="form-group col-6">
        <label for="price">Do you have any medical conditions that we should know of?</label> <br>
                <select style="color:tomato" name="medical_conditions" id="level" class="form-control" >

                    <!-- <option value="">------select Class--------</option> -->

                    @foreach($MedicalConditions as $MedicalConditions)
                    <option style="color:black" value="{{$MedicalConditions->id}}" required="">{{$MedicalConditions->medical_conditions}}</option>
                    @endforeach

            </select>

        </div>













                  <div class="col-12">
										<input class="btn btn-success" type="submit" value="submit">
                    <button type="reset" class="btn">Clear</button>
									</div>
								</div>
							</form>
							<!-- <form class="edit-profile">
								<div class="row">
									<div class="col-12 m-t20">
										<div class="ml-auto">
											<h3 class="m-form__section">4. Add Item</h3>
										</div>
									</div>
									<div class="col-12">
										<table id="item-add" style="width:100%;">
											<tr class="list-item">
												<td>
													<div class="row">
														<div class="col-md-4">
															<label class="col-form-label">Course Name</label>
															<div>
																<input class="form-control" type="text" value="">
															</div>
														</div>
														<div class="col-md-3">
															<label class="col-form-label">Course Category</label>
															<div>
																<input class="form-control" type="text" value="">
															</div>
														</div>
														<div class="col-md-3">
															<label class="col-form-label">Course Category</label>
															<div>
																<input class="form-control" type="text" value="">
															</div>
														</div>
														<div class="col-md-2">
															<label class="col-form-label">Close</label>
															<div class="form-group">
																<a class="delete" href="#"><i class="fa fa-close"></i></a>
															</div>
														</div>
													</div>
												</td>
											</tr>
										</table>
									</div>
									<div class="col-12">
										<button type="button" class="btn-secondry add-item m-r5"><i class="fa fa-fw fa-plus-circle"></i>Add Item</button>
										<button type="reset" class="btn">Save changes</button>
									</div>
								</div>
							</form> -->
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

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>



<script type="text/javascript">
        $('#countries').on('change', function() {
                get_state_by_country();
            });
                function get_state_by_country(){
                    var country_id = $('#countries').val();
                    $.post('{{route('getStates')}}',{_token:'{{ csrf_token() }}', country_id:country_id}, function(data){
                        $('#states').html(null);
                        $('#states').append($('<option value="{{ $value->id }}">Select State</option>', {

                        }));
                        for (var i = 0; i < data.length; i++) {
                            $('#states').append($('<option>', {
                                value: data[i].id,
                                text: data[i].name_state
                            }));

                        }
                });
            }
     </script>
     <script type="text/javascript">
        $('#states').on('change', function() {
                get_state_by_state();
            });
                function get_state_by_state(){
                    var state_id = $('#states').val();
                    $.post('{{route('getCities')}}',{_token:'{{ csrf_token() }}', state_id:state_id}, function(data){
                        $('#cities').html(null);
                        $('#cities').append($('<option value="{{ $value->id }}">Select City</option>', {

                        }));
                        for (var i = 0; i < data.length; i++) {
                            $('#cities').append($('<option>', {
                                value: data[i].id,
                                text: data[i].name_city
                            }));

                        }
                });
            }
     </script>

</html>