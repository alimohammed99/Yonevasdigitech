<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="#" target="_self">
        <img src="admin/assets/img/logo-ct-dark.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold">Argon Dashboard 2</span>
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" href="{{url('redirect')}}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="{{url('book_categories')}}">
          <div class="icon icon-shape icon-sm bg-gradient-secondary me-2 d-flex align-items-center justify-content-center shadow-primary text-center rounded-circle">
                  <i class="fa fa-list" aria-hidden="true"></i>
                  </div>
            <span class="nav-link-text ms-1">Book Categories</span>
          </a>
        </li>


        <li class="nav-item">
          <a class="nav-link " href="{{url('admin_paper_categories')}}">
          <div class="icon icon-shape icon-sm bg-gradient-secondary me-2 d-flex align-items-center justify-content-center shadow-primary text-center rounded-circle">
                  <i class="fa fa-list" aria-hidden="true"></i>
                  </div>
            <span class="nav-link-text ms-1">Paper Categories</span>
          </a>
        </li>


        
        <li class="nav-item">
        <a class="nav-link " href="{{url('books')}}">
        <div class="icon icon-shape icon-sm bg-gradient-success me-2 d-flex align-items-center justify-content-center shadow-primary text-center rounded-circle">
            <i class="fa fa-book" aria-hidden="true"></i>
            </div>
            <span class="nav-link-text ms-1">Books</span>
          </a>
        </li>


        <li class="nav-item">
        <a class="nav-link " href="{{url('books_under_paper')}}">
        <div class="icon icon-shape icon-sm bg-gradient-success me-2 d-flex align-items-center justify-content-center shadow-primary text-center rounded-circle">
            <i class="fa fa-book" aria-hidden="true"></i>
            </div>
            <span class="nav-link-text ms-1">Books under Paper</span>
          </a>
        </li>




        
        <li class="nav-item">
        <a class="nav-link " href="{{url('admin_seeing_careers')}}">
        <div class="icon icon-shape icon-sm bg-gradient-success me-2 d-flex align-items-center justify-content-center shadow-primary text-center rounded-circle">
            <i class="fa fa-wpforms" aria-hidden="true"></i>
            </div>
            <span class="nav-link-text ms-1">Careers</span>
          </a>
        </li>





        <li class="nav-item">
        <a class="nav-link " href="{{url('transactions')}}">
        <div class="icon icon-shape icon-sm bg-gradient-success me-2 d-flex align-items-center justify-content-center shadow-primary text-center rounded-circle">
        <i class="fas fa-chart-line"></i>
            </div>
            <span class="nav-link-text ms-1">All Transactions</span>
          </a>
        </li>






        <li class="nav-item">
        <a class="nav-link " href="{{url('orders')}}">
        <div class="icon icon-shape icon-sm bg-gradient-success me-2 d-flex align-items-center justify-content-center shadow-primary text-center rounded-circle">
        <i class="fas fa-poll-h"></i>
            </div>
            <span class="nav-link-text ms-1">Order History</span>
          </a>
        </li>
























        <!-- <li class="nav-item">
          <a class="nav-link " href="./pages/virtual-reality.html">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-app text-info text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Virtual Reality</span>
          </a>
        </li> -->
        <!-- <li class="nav-item">
          <a class="nav-link " href="./pages/rtl.html">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-world-2 text-danger text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">RTL</span>
          </a>
        </li> -->
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Others</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="{{url('application_form')}}">
  <div class="icon icon-shape icon-sm bg-gradient-dark me-2 d-flex align-items-center justify-content-center shadow-primary text-center rounded-circle">
            <i class="fa fa-wpforms" aria-hidden="true"></i>
            </div>
            <span class="nav-link-text ms-1">Application Form</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="{{url('marital_status')}}">
  <div class="icon icon-shape icon-sm bg-gradient-danger me-2 d-flex align-items-center justify-content-center shadow-primary text-center rounded-circle">
            <i class="fa fa-ring" aria-hidden="true"></i>
            </div>
            <span class="nav-link-text ms-1">Marital status</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="{{url('should_we_contact_them')}}">
  <div class="icon icon-shape icon-sm bg-gradient-info me-2 d-flex align-items-center justify-content-center shadow-primary text-center rounded-circle">
            <i class="fas fa-archive" aria-hidden="true"></i>
            </div>
            <span class="nav-link-text ms-1">Contact previous Employer</span>
          </a>
        </li>
        <li class="nav-item">
        <a class="nav-link " href="{{url('teaching_experience')}}">
  <div class="icon icon-shape icon-sm bg-gradient-warning me-2 d-flex align-items-center justify-content-center shadow-primary text-center rounded-circle">
            <i class="fas fa-chalkboard-teacher" aria-hidden="true"></i>
            </div>
            <span class="nav-link-text ms-1">Teaching experience</span>
          </a>
        </li>
        <li class="nav-item">
        <a class="nav-link " href="{{url('travel_for_work')}}">
  <div class="icon icon-shape icon-sm bg-gradient-success me-2 d-flex align-items-center justify-content-center shadow-primary text-center rounded-circle">
            <i class="fas fa-plane-departure" aria-hidden="true"></i>
            </div>
            <span class="nav-link-text ms-1">Travel for work</span>
          </a>
        </li>
        <li class="nav-item">
        <a class="nav-link " href="{{url('medical_conditions')}}">
  <div class="icon icon-shape icon-sm bg-gradient-secondary me-2 d-flex align-items-center justify-content-center shadow-primary text-center rounded-circle">
            <i class="fa fa-heartbeat" aria-hidden="true"></i>
            </div>
            <span class="nav-link-text ms-1">Medical Condition</span>
          </a>
        </li>
        
        <li class="nav-item">
        <a class="nav-link " href="{{url('has_sub_categories')}}">
        <div class="icon icon-shape icon-sm bg-gradient-success me-2 d-flex align-items-center justify-content-center shadow-primary text-center rounded-circle">
        <i class="fa fa-list" aria-hidden="true"></i>
            </div>
            <span class="nav-link-text ms-1">Has Sub-Categories?</span>
          </a>
        </li>


      </ul>
    </div>
    <div class="sidenav-footer mx-3 ">
      <div class="card card-plain shadow-none" id="sidenavCard">
        <!-- <img class="w-50 mx-auto" src="./assets/img/illustrations/icon-documentation.svg" alt="sidebar_illustration"> -->
        <div class="card-body text-center p-3 w-100 pt-0">
          <!-- <div class="docs-info">
            <h6 class="mb-0"> eed help?</h6>
            <p class="text-xs font-weight-bold mb-0">Please check our docs</p>
          </div> -->
        </div>
      </div>
      <!-- <a href="https://www.creative-tim.com/learning-lab/bootstrap/license/argon-dashboard" target="_blank" class="btn btn-dark btn-sm w-100 mb-3">Documentation</a>
      <a class="btn btn-primary btn-sm mb-0 w-100" href="https://www.creative-tim.com/product/argon-dashboard-pro?ref=sidebarfree" type="button">Upgrade to pro</a> -->
    </div>
  </aside>