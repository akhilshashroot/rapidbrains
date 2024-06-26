<style>

    .dropdown-item{
  color:#596273 !important;
  font-weight:500 !important;

}
 </style>
<header class="wrapper bg-soft-primary">





      <nav class="navbar navbar-expand-lg center-nav transparent position-absolute navbar-light">
        <div class="container flex-lg-row flex-nowrap align-items-center">
          <div class="navbar-brand w-100">
          <a href="/">
            <img src="{{asset('assets/img/RapidBrains-logo.svg')}}" srcset="{{asset('assets/img/RapidBrains-logo@2x.svg')}}" alt="RapidBrains Logo"  class="img-logo"  />
            </a>
          </div>
          <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
            <div class="offcanvas-header d-lg-none">
            <h3 class="text-white fs-30 mb-0">RapidBrains</h3>
              <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body ms-lg-auto d-flex flex-column h-100">
                <ul class="navbar-nav">
                <a class="nav-link"  href="{{route('jobList.index')}}">All Jobs</a>
                    
                    </li>
                    <li class="nav-item ">
                      <a class="nav-link " href="{{route('remote.index')}}">Remote Jobs</a>
                      
                    </li>
                    <li class="nav-item ">
                      <a class="nav-link"  href="{{route('onsite.index')}}">Onsite Jobs</a>
                      
                    </li>
                   
                    
                
                </ul>
                <!-- /.navbar-nav -->
                <div class="offcanvas-footer d-lg-none">
                  <div>

                    <a href="mailto:contact@rapidbrains.com" class="link-inverse">contact@rapidbrains.com</a>
                    <br /> +91 97784 26317 <br />


                    <nav class="nav social social-white mt-4">
                    <a href="https://www.linkedin.com/company/rapidbrains"><i class="uil uil-linkedin"></i></a>
                    <a href="https://www.facebook.com/rapidbrains"><i class="uil uil-facebook-f"></i></a>
                    <a href="https://www.instagram.com/_rapidbrains/"><i class="uil uil-instagram"></i></a>
                    <a href="https://twitter.com/rapidbrains"><i class="uil uil-twitter"></i></a>
                    <!--  <a href="#"><i class="uil uil-youtube"></i></a>-->
                    <!--</nav>-->
                    <!-- /.social -->
                  </div>
                </div>
                <!-- /.offcanvas-footer -->
              </div>
              <!-- /.offcanvas-body -->
            </div>
            <!-- /.navbar-collapse -->
            <div class="navbar-other w-100 d-flex ms-auto">
              <ul class="navbar-nav flex-row align-items-center ms-auto">


                  <nav class="nav-item justify-content-end text-end">
                     <a class="btn btn-primary btn-sm rounded-pill" href="{{route('enquiry.page')}}" >Enquire</a>
                    <!--<a href="#"><i class="uil uil-twitter"></i></a>-->
                    <!--<a href="#"><i class="uil uil-facebook-f"></i></a>-->
                    <!--<a href="#"><i class="uil uil-dribbble"></i></a>-->
                    <!--<a href="#"><i class="uil uil-instagram"></i></a>-->
                  </nav>
                  <!-- /.social -->

                <li class="nav-item d-lg-none">
                  <button class="hamburger offcanvas-nav-btn"><span></span></button>
                </li>
              </ul>
              <!-- /.navbar-nav -->
            </div>
            <!-- /.navbar-other -->
          </div>
          <!-- /.navbar-collapse-wrapper -->
        </div>
        <!-- /.container -->
      </nav>
      <!-- /.navbar -->




      </header>
