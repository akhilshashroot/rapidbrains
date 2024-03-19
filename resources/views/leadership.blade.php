@extends('layout.layout')
@section('section')
<style>
    @media (max-width: 720px){
   
}
@media (min-width: 720px){
.cs{

    width: max-content; 
    height: max-content;
}
}
@media (max-width: 720px){
.hed {
  color: #fff !important;
    background-color: #343f52  !important;
    border-color: #343f52  !important;
  
}
/* .pt-19 {
    padding-top: 13rem!important;
} */
.ccs{
  margin-top: -4rem;
}
#sect-bg{
  background-image:  url({{asset('assets/img/photos/RapidBrains-footerbg.webp')}});

}

#sect-bg1{
 display:none;

}
#sect-bg2{
 display:block;

}
} 

@media (min-width: 992px){
.px-lg-33 {
    padding-right: 0.1rem !important;
    padding-left: 0.1rem !important;
}
#sect-bg{
  background-image:  url({{asset('assets/img/photos/RapidBrains-footerbg.webp')}});

}
#sect-bg1{
 display:block;

}
#sect-bg2{
 display:none;

}
}
@media (min-width: 720px){

#sect-bg{
  background-image:  url({{asset('assets/img/photos/RapidBrains-footerbg.webp')}});

}
#sect-bg1{
 display:block;

}
#sect-bg2{
 display:none;

}
}
@media (min-width: 768px){
.py-md-16x {
    padding-top: 10rem !important;
    padding-bottom: 7rem !important;
}
}

.py-13c {
    padding-top: 8rem !important;
    padding-bottom: 2rem !important;
}
    </style>
   
   <section class="wrapper image-wrapper bg-image" data-image-src="https://www.rapidbrains.com/assets/img/photos/RapidBrains-footerbg.webp" style="padding-bottom: 100px;">
        <div class="container py-13c py-md-16x">
          <div class="row mb-3">
            <div class="col-md-10 col-lg-12 col-xl-10 col-xxl-9 mx-auto text-center">
              <h2 class="display-4 mb-3">Meet The Makers</h2>
              <p class="lead fs-lg mb-6 px-xl-10 px-xxl-4">An innovative collective of like-minded folks making useful and enduring technology products.</p>
            <!--/column -->
            </div>
          </div>
          </div>
      <!-- /.container -->
      </div>
      <!-- /.container -->
    
      <!-- /.container -->
    </section>
     
          <div class="container py-14 py-md-16" style="margin-top: -204px;">
        
          <!--/.row -->
          <div class="row grid-view gx-md-8 gx-xl-10 gy-8 gy-lg-0 text-center">
            <div class="col-md-6 col-lg-3">
              <div class="position-relative">
                <div class="shape rounded bg-soft-yellow rellax d-md-block" data-rellax-speed="0" style="bottom: -0.75rem; right: -0.75rem; width: 98%; height: 98%; z-index:0"></div>
                <div class="card">
                  <div class="card-body">
                    <img class="rounded-circle w-15 mb-4" src="https://www.rapidbrains.com/assets/img/leadership/anees-ceo.jpg" srcset="https://www.rapidbrains.com/assets/img/leadership/anees-ceo.jpg" alt="" />
                    <h4 class="mb-1">Anees T</h4>
                    <div class="meta mb-2 fs-12">Founder & CEO</div>
                    <!-- /.social -->
                  </div>
                  <!--/.card-body -->
                </div>
                <!-- /.card -->
              </div><br><br>
              <!-- /div -->
            </div>
            <!--/column -->
            <div class="col-md-6 col-lg-3">
              <div class="position-relative">
                <div class="shape rounded bg-soft-red rellax d-md-block" data-rellax-speed="0" style="bottom: -0.75rem; right: -0.75rem; width: 98%; height: 98%; z-index:0"></div>
                <div class="card">
                  <div class="card-body">
                    <img class="rounded-circle w-15 mb-4" src="https://www.rapidbrains.com/assets/img/leadership/febina.jpg" srcset="https://www.rapidbrains.com/assets/img/leadership/febina.jpg" alt="" />
                    <h4 class="mb-1">Febina K V</h4>
                    <div class="meta mb-2 fs-12">Chief Product Officer</div>
                    <!-- /.social -->
                  </div>
                  <!--/.card-body -->
                </div>
                <!-- /.card -->
              </div><br><br>
              <!-- /div -->
            </div>
            <!--/column -->
            <div class="col-md-6 col-lg-3">
              <div class="position-relative">
                <div class="shape rounded bg-soft-green rellax d-md-block" data-rellax-speed="0" style="bottom: -0.75rem; right: -0.75rem; width: 98%; height: 98%; z-index:0"></div>
                <div class="card">
                  <div class="card-body">
                    <img class="rounded-circle w-15 mb-4" src="https://www.rapidbrains.com/assets/img/leadership/sandeep.jpg" srcset="https://www.rapidbrains.com/assets/img/leadership/sandeep.jpg" alt="" />
                    <h4 class="mb-1">Sandeep Anand</h4>
                    <div class="meta mb-2 fs-12">Chief Administrative Officer</div>
                    <!-- /.social -->
                  </div>
                  <!--/.card-body -->
                </div>
                <!-- /.card -->
              </div><br><br>
              <!-- /div -->
            </div>
            <!--/column -->
            <div class="col-md-6 col-lg-3">
              <div class="position-relative">
                <div class="shape rounded bg-soft-blue rellax d-md-block" data-rellax-speed="0" style="bottom: -0.75rem; right: -0.75rem; width: 98%; height: 98%; z-index:0"></div>
                <div class="card">
                  <div class="card-body">
                    <img class="rounded-circle w-15 mb-4" src="https://www.rapidbrains.com/assets/img/leadership/sachin.jpg" srcset="https://www.rapidbrains.com/assets/img/leadership/sachin.jpg" alt="" />
                    <h4 class="mb-1">Sachin Raveendran</h4>
                    <div class="meta mb-2 fs-12">Chief Operating Officer</div>
                    <!-- /.social -->
                  </div>
                  <!--/.card-body -->
                </div>
                <!-- /.card -->
              </div><br><br>
              <!-- /div -->
            </div>
            <!--/column -->
            
            <div class="col-md-6 col-lg-3">
              <div class="position-relative">
                <div class="shape rounded bg-soft-blue rellax d-md-block" data-rellax-speed="0" style="bottom: -0.75rem; right: -0.75rem; width: 98%; height: 98%; z-index:0"></div>
                <div class="card">
                  <div class="card-body">
                    <img class="rounded-circle w-15 mb-4" src="https://www.rapidbrains.com/assets/img/leadership/arjun.jpg" srcset="https://www.rapidbrains.com/assets/img/leadership/arjun.jpg" alt="" />
                    <h4 class="mb-1">Arjun Narayanan</h4>
                    <div class="meta mb-2 fs-12">Chief Growth Officer</div>
                    <!-- /.social -->
                  </div>
                  <!--/.card-body -->
                </div>
                <!-- /.card -->
              </div><br><br>
              <!-- /div -->
            </div>
            <!--/column -->
            <div class="col-md-6 col-lg-3">
              <div class="position-relative">
                <div class="shape rounded bg-soft-green rellax d-md-block" data-rellax-speed="0" style="bottom: -0.75rem; right: -0.75rem; width: 98%; height: 98%; z-index:0"></div>
                <div class="card">
                  <div class="card-body">
                    <img class="rounded-circle w-15 mb-4" src="https://www.rapidbrains.com/assets/img/leadership/krishnaprasad.jpg" srcset="https://www.rapidbrains.com/assets/img/leadership/krishnaprasad.jpg" alt="" />
                    <h4 class="mb-1">Krishna Prasad K</h4>
                    <div class="meta mb-2 fs-12">Head of Technical Department</div>
                    <!-- /.social -->
                  </div>
                  <!--/.card-body -->
                </div>
                <!-- /.card -->
              </div><br><br>
              <!-- /div -->
            </div>
            <!--/column -->
            
            <!--/column -->
            <div class="col-md-6 col-lg-3">
              <div class="position-relative">
                <div class="shape rounded bg-soft-green rellax d-md-block" data-rellax-speed="0" style="bottom: -0.75rem; right: -0.75rem; width: 98%; height: 98%; z-index:0"></div>
                <div class="card">
                  <div class="card-body">
                    <img class="rounded-circle w-15 mb-4" src="https://www.rapidbrains.com/assets/img/leadership/noyal.jpg" srcset="https://www.rapidbrains.com/assets/img/leadership/noyal.jpg" alt="" />
                    <h4 class="mb-1">Noyal T. Hari</h4>
                    <div class="meta mb-2 fs-12">Vice President - Legal Affairs</div>
                    <!-- /.social -->
                  </div>
                  <!--/.card-body -->
                </div>
                <!-- /.card -->
              </div>
              <!-- /div -->
            </div>
            <!--/column -->
            <div class="col-md-6 col-lg-3 d-none">
              <div class="position-relative">
                <div class="shape rounded bg-soft-blue rellax d-md-block" data-rellax-speed="0" style="bottom: -0.75rem; right: -0.75rem; width: 98%; height: 98%; z-index:0"></div>
                <div class="card">
                  <div class="card-body">
                    <img class="rounded-circle w-15 mb-4" src="https://www.rapidbrains.com/assets/img/leadership/rantel.jpg" srcset="https://www.rapidbrains.com/assets/img/leadership/rantel.jpg" alt="" />
                    <h4 class="mb-1">Rantel P</h4>
                    <div class="meta mb-2 fs-12">Director of Software Services</div>
                    <!-- /.social -->
                  </div>
                  <!--/.card-body -->
                </div>
                <!-- /.card -->
              </div>
              <!-- /div -->
            </div>
            <!--/column -->
            <div class="col-md-6 col-lg-3">
              <div class="position-relative">
                <div class="shape rounded bg-soft-yellow rellax d-md-block" data-rellax-speed="0" style="bottom: -0.75rem; right: -0.75rem; width: 98%; height: 98%; z-index:0"></div>
                <div class="card">
                  <div class="card-body">
                    <img class="rounded-circle w-15 mb-4" src="https://www.rapidbrains.com/assets/img/leadership/azim.jpg" srcset="https://www.rapidbrains.com/assets/img/leadership/azim.jpg" alt="" />
                    <h4 class="mb-1">Azim Kadersha</h4>
                    <div class="meta mb-2 fs-12">Director of Operations - Australia</div>
                    <!-- /.social -->
                  </div>
                  <!--/.card-body -->
                </div>
                <!-- /.card -->
              </div>
              <!-- /div -->
            </div>
            <!--/column -->
            <div class="col-md-6 col-lg-3">
              <div class="position-relative">
                <div class="shape rounded bg-soft-yellow rellax d-md-block" data-rellax-speed="0" style="bottom: -0.75rem; right: -0.75rem; width: 98%; height: 98%; z-index:0"></div>
                <div class="card">
                  <div class="card-body">
                    <img class="rounded-circle w-15 mb-4" src="https://www.rapidbrains.com/assets/img/leadership/aadhil.jpg" srcset="https://www.rapidbrains.com/assets/img/leadership/aadhil.jpg" alt="" />
                    <h4 class="mb-1">Aadhil Bin Ashraf</h4>
                    <div class="meta mb-2 fs-12">Manager - Operations</div>
                    <!-- /.social -->
                  </div>
                  <!--/.card-body -->
                </div>
                <!-- /.card -->
              </div>
              <!-- /div -->
            </div>
            <!--/column -->
            <div class="col-md-6 col-lg-3">
              <div class="position-relative">
                <div class="shape rounded bg-soft-yellow rellax d-md-block" data-rellax-speed="0" style="bottom: -0.75rem; right: -0.75rem; width: 98%; height: 98%; z-index:0"></div>
                <div class="card">
                  <div class="card-body">
                    <img class="rounded-circle w-15 mb-4" src="https://www.rapidbrains.com/assets/img/leadership/javed.jpg" srcset="https://www.rapidbrains.com/assets/img/leadership/javed.jpg" alt="" />
                    <h4 class="mb-1">Javed K</h4>
                    <div class="meta mb-2 fs-12">Manager - Quality Assurance</div>
                    <!-- /.social -->
                  </div>
                  <!--/.card-body -->
                </div>
                <!-- /.card -->
              </div>
              <!-- /div -->
            </div>
            <!--/column -->
            <div class="col-md-6 col-lg-3">
              <div class="position-relative">
                <div class="shape rounded bg-soft-yellow rellax d-md-block" data-rellax-speed="0" style="bottom: -0.75rem; right: -0.75rem; width: 98%; height: 98%; z-index:0"></div>
                <div class="card">
                  <div class="card-body">
                    <img class="rounded-circle w-15 mb-4" src="https://www.rapidbrains.com/assets/img/leadership/christina.jpg" srcset="https://www.rapidbrains.com/assets/img/leadership/christina.jpg" alt="" />
                    <h4 class="mb-1">Christina Margreat</h4>
                    <div class="meta mb-2 fs-12">Manager - Talent Operations</div>
                    <!-- /.social -->
                  </div>
                  <!--/.card-body -->
                </div>
                <!-- /.card -->
              </div>
              <!-- /div -->
            </div>
            <!--/column -->
          </div>
          <!--/.row -->
        </div>
        <!-- /.container -->     
@include('services.logo')
@endsection