@extends('layout.layoutheader2')
@section('section')

<style>
  .col-xl-53 {
     flex: 0 0 auto;
     width: 70%;
   }
   .lgc{
     background-color: #f6f7f9 !important;
   }

   @media (min-width: 768px){
 .pb-md-20 {
     padding-bottom: 5rem !important;
 }
 .psb{
   padding-top: 1rem !important;
 }

 }



 @media (min-width: 1400px){
 .col-xxl-6 {

     width: 60%  !important;
 }

 }
 @media (min-width: 1200px){
 .col-xl-7 {

     width: 68.333333% !important;
 }
 }


 @media (min-width: 900px){
 .spx {
     margin-right: -13px !important;

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
   background-image:  url(https://www.rapidbrains.com/assets/img/photos/RapidBrains-footerbg.webp);

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
   background-image:  url(https://www.rapidbrains.com/assets/img/photos/rapidbrains-cover.webp);

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
   background-image:  url(https://www.rapidbrains.com/assets/img/photos/rapidbrains-cover.webp);

 }
 #sect-bg1{
  display:block;

 }
 #sect-bg2{
  display:none;

 }
 }
 .image-wrapper.bg-overlay-light-300:before {
   background: rgba(250, 255, 240, 0) !important;


 }
 @media (min-width: 992px) {
.col-lg-5 {
  top: 8rem;
  position: sticky;
  }
}
 </style>
<section class="wrapper overflow-hidden image-wrapper" id="sect-bg" style="padding-bottom: 240px" >
{{-- <section class="wrapper bg-gray"> --}}
  <div class="container py-14 pt-md-16 pb-md-9">
    <figure class="rounded"><img src="{{asset('assets/img/common/about5.webp')}}" srcset="{{asset('assets/img/common/about5.webp')}} 2x" alt="about5" /></figure>
    <div class="row">
      <div class="col-xl-10 mx-auto">
        <div class="card image-wrapper bg-full bg-image   text-black mt-n5 mt-lg-0 mt-lg-n50p mb-lg-n50p border-radius-lg-top" data-image-src="{{asset('assets/img/photos/RapidBrains-footerbg.webp')}}">
          <div class="card-body p-9 p-xl-10">
            <div class="row align-items-center counter-wrapper gy-4 text-center">
              <div class="col-6 col-lg-3">
                <h3 class="counter counter-lg text-black">21k+</h3>
                <p>Profiles Generated</p>
              </div>
              <!--/column -->
              <div class="col-6 col-lg-3">
                <h3 class="counter counter-lg text-black">85+</h3>
                <p>Countries Served</p>
              </div>
              <!--/column -->
              <div class="col-6 col-lg-3">
                <h3 class="counter counter-lg text-black">1.2k+</h3>
                <p>Happy Customers</p>
              </div>
              <!--/column -->
              <div class="col-6 col-lg-3">
                <h3 class="counter counter-lg text-black">14+</h3>
                <p>Years in Industry</p>
              </div>
              <!--/column -->
            </div>
            <!--/.row -->
          </div>
          <!--/.card-body -->
        </div>
        <!--/.card -->
      </div>
      <!-- /column -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container -->
</section>
<!-- /section -->
<!--Hero Image Ends-->
<!--Who are we Starts-->

<section class="wrapper bg-light">
  <div class="container py-14 py-md-16">
    <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
      <div class="col-md-8 col-lg-6 col-xl-5 order-lg-2 position-relative">
        <div class="shape bg-soft-primary rounded-circle rellax w-20 h-20" data-rellax-speed="1" style="top: -2rem; right: -1.9rem;"></div>
        <figure class="rounded"><img src="{{asset('assets/img/common/about7.webp')}}" srcset="{{asset('assets/img/common/about7.webp')}} 2x" alt="about7"></figure>
      </div>
      <!--/column -->
      <div class="col-lg-6">
        <h1 class="display-4 mb-3">Who Are We?</h1>
        <p class="lead fs-lg">A talent marketplace to build remote teams, rapidly!</p> 
        <p class="mb-6">With a massive pool of top talents to choose from, you can find the perfect candidate for your team. RapidBrains offers an easy-to-use platform where you can view profiles, shortlist, hire, and communicate with candidates all in one place. It's the simplest way to find and hire the best remote talent around the world thereby making remote hiring easy and economical for both companies and talents.
</p>
        <div class="row gx-xl-10 gy-6">
          <div class="col-md-6">
            <div class="d-flex flex-row">
              <div>
                <img src="./assets/img/icons/lineal/target.svg" class="svg-inject icon-svg icon-svg-sm me-4" alt="" />
              </div>
              <div>
                <h4 class="mb-1">Our Mission</h4>
                <p class="mb-0">To make companies more profitable by reducing the employee cost through remote talents around the world.</p>
              </div>
            </div>
          </div>
          <!--/column -->
          <div class="col-md-6">
            <div class="d-flex flex-row">
              <div>
                <img src="./assets/img/icons/lineal/award-2.svg" class="svg-inject icon-svg icon-svg-sm me-4" alt="" />
              </div>
              <div>
                <h4 class="mb-1">Vision</h4>
                <p class="mb-0">To create opportunity for everyone by connecting the right talents to the right organisations</p>
              </div>
            </div>
          </div>
          <!--/column -->
        </div>
        <!--/.row -->
      </div>
      <!--/column -->
    </div>
    <!--/.row -->
  </div>
  <!-- /.container -->
</section>
<!-- /section -->
<!--Who are we ends-->

<!--Hiring Starts-->
            <section class="wrapper bg-gray">
  <div class="container py-14 py-md-16">
    <h2 class="display-4 mb-3">RapidBrians Vs Traditional Hiring</h2>
    <p class="lead fs-lg">We do more to deliver you the suitable remote talents that satisfy and fit into the right skill set you are looking for. </p>
    <div class="row">

      <!--/column -->
    </div>
    <!--/.row -->
    <div class="table-responsive">
      <table class="table table-borderless table-striped text-center">
        <thead>
          <tr>
            <th class="w-25"></th>
            <th>
              <div class="h4 mb-1">RapidBrains</div>
              <!--<div class="fs-15 fw-normal text-secondary">$9 / Monthly</div>-->
            </th>
            <th>
              <div class="h4 mb-1">Traditional Hiring</div>
            </th>
            
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="option text-start">Time to hire talent</td>
            <td>Immediate</td>
            <td>3 to 7 days</td>
            
          </tr>
          <tr>
            <td class="option text-start">Recruitment cost</td>
            <td>Zero</td>
            <td>Recruiter's Salary</td>
            
          </tr>
          <tr>
            <td class="option text-start">Pre-screened talents</td>
            <td>Yes</td>
            <td>No</td>
            
          </tr>
          <tr>
            <td class="option text-start">Quality Assurance / Replacement</td>
            <td>Yes</td>
            <td>No</td>
          <tr>
            <td class="option text-start">Background Verification</td>
            <td>Yes</td>
            <td>No</td>
            
          </tr>
          <tr>
            <td class="option text-start">Notice Period</td>
            <td>Immediate</td>
            <td>30 to 60 days</td>
            
          </tr>
          <tr>
            <td class="option text-start">Statutory Compliance in HR, Payroll and Tax</td>
            <td>Zero</td>
            <td>Your Team</td>
            
          </tr>
          <tr>
            <td class="option text-start">Termination cost</td>
            <td>Zero</td>
            <td>Very High</td>
            
          </tr>
          
        </tbody>
        
      </table>
    </div>
    <!-- /.table-responsive -->
  </div>
  <!-- /.container -->
</section>
<!-- /section -->
            

            <!--Hiring Ends-->
            
            <!--Awards Starts-->
            
            
            <section class="wrapper bg-light">
      <div class="container py-14 py-md-16">
        <div class="row">
          <div class="col-lg-12 col-xl-10 col-xxl-8 mx-auto text-center">
               <h2 class="display-3 text-center mb-4">Awards & Achievements</h2>
            <h4 class="mt-4 mb-10">HashRoot is a synonym to credibility and then brings in more and more recognitions to us.
          Every business concern earns to gain recognition for its outstanding achievements and innovative services or
          products in order to distinguish themselves from competitors.</h4>
          </div>
          <!--/column -->
        </div>
        <!--/.row -->
        
        <div class="row  gx-md-8 gx-xl-12 gy-10 text-center">
          <div class="col-md-6 col-lg-4 mx-auto">
            <div class="card shadow-lg ">
              <figure class="card-img-top overlay overlay-1 bg-soft-primary">
                <a href="#"><img class="img-fluid"  src="./assets/img/awards/svg/bizz.svg" style="width: 70%;" alt="bizz award" /></a>
                <figcaption>
                  <h5 class="from-top mb-0 fs-sm">HashRoot joined the elite group of companies that have consistently
                  demonstrated business excellence.</h5>
                </figcaption>
              </figure>
              <div class="card-body p-5">
                <h6 >The Bizz Awards 2019</h6>
              </div>
              <!--/.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!--/column -->
          
          
          
                    <div class="col-md-6 col-lg-4 mx-auto">
            <div class="card shadow-lg">
              <figure class="card-img-top overlay overlay-1 bg-soft-primary">
                <a href="#"><img class="img-fluid" src="./assets/img/awards/svg/clutch-01.svg" style="width: 70%;"  alt="Clutch" /></a>
                <figcaption>
                  <h5 class="from-top mb-0 fs-sm">
                  HashRoot was named to Clutch's annual list of the top 100 IT firms in India for 2021 in a press
                  release on 23 March 2021 at Washington DC. Clutch is the leading ratings and reviews platform for IT,
                  Marketing, and Business service providers.
                </h5>
                </figcaption>
              </figure>
              <div class="card-body p-5">
                <h6>Clutch's top 100 IT firms in India</h6>
              </div>
              <!--/.card-body -->
            </div>
            <!-- /.card -->
          </div>
          
          
          
           <div class="col-md-6 col-lg-4 mx-auto">
            <div class="card shadow-lg">
              <figure class="card-img-top overlay overlay-1 bg-soft-primary">
                <a href="#"><img class="img-fluid" src="./assets/img/awards/svg/ccss-01.svg" style="width: 70%;" alt="crown commercial service supplier" /></a>
                <figcaption>
                  <h5 class="from-top mb-0 fs-sm">HashRoot is now an approved G-Cloud 12 supplier by the Crown Commercial
                  Service (CCS)</h5>
                </figcaption>
              </figure>
              <div class="card-body p-5">
                <h6>Crown Commercial Service Supplier</h6>
              </div>
              <!--/.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!--/column -->
          
          
          
           <div class="col-md-6 col-lg-4 mx-auto">
            <div class="card shadow-lg">
              <figure class="card-img-top overlay overlay-1 bg-soft-primary">
                <a href="#"><img class="img-fluid" src="./assets/img/awards/svg/IQC-01.svg" style="width: 70%;" alt="international quality crowm award" /></a>
                <figcaption>
                  <h5 class="from-top mb-0 fs-sm">HashRoot has been awarded the "International Quality Crown Award (IQC)" in
                  category GOLD by 27th International IQC Convention at London, United Kingdom  </h5>
                </figcaption>
              </figure>
              <div class="card-body p-5">
                <h6>International Quality Crown Award</h6>
              </div>
              <!--/.card-body -->
            </div>
            <!-- /.card -->
          </div>
          
          <div class="col-md-6 col-lg-4 mx-auto">
            <div class="card shadow-lg">
              <figure class="card-img-top overlay overlay-1 bg-soft-primary">
                <a href="#"><img class="img-fluid" src="./assets/img/awards/svg/consultants-01.svg" style="width: 70%;" alt="consultant of the year" /></a>
                <figcaption>
                  <h5 class="from-top mb-0 fs-sm">Awarded as the Consultant of the Year 2015 by Consultant Review Magazine in
                  the domain Infrastructure Management Service.</h5>
                </figcaption>
              </figure>
              <div class="card-body p-5">
                <h6>Consultant of the Year
                  2015</h6>
              </div>
              <!--/.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!--/column -->
          
          
          
          <div class="project item col-md-6 col-lg-4 "> 
            <div class="card shadow-lg">
              <figure class="card-img-top overlay overlay-1 bg-soft-primary">
                <a href="#"><img class="img-fluid" src="./assets/img/awards/svg/CIP-01.svg" style="width: 70%;" alt="gold star millenium award" /></a>
                <figcaption>
                  <h5 class="from-top mb-0 fs-sm">For Excellence in Promoting Global Integration and Economic Development by
                  Mr. Korn Dabbaransi, Former Dy. PM of Thailand, at the International Conference on "Indo-Thai
                  Friendship and Economic Co-operation" on 18th January 2015, Bangkok, Thailand.</h5>
                </figcaption>
              </figure>
              <div class="card-body p-5">
                <h6>International Gold Star Millenium Award</h6>
              </div>
              <!--/.card-body -->
            </div>
            <!-- /.card -->
          </div>
          
          
          
           <div class="col-md-6 col-lg-4 mx-auto">
            <div class="card shadow-lg">
              <figure class="card-img-top overlay overlay-1 bg-soft-primary">

                <a href="#"><img class="img-fluid" src="./assets/img/awards/svg/IAC-01.svg" style="width: 70%;" alt="global achievers award" /></a>
                <figcaption>
                  <h5 class="from-top mb-0 fs-sm">Global achievers award for business excellence by International Achievers
                  Summit for outstanding achievements at the 6th International Achievers summit on Global Corporate
                  Achievements and social responsibilities at Bangkok, Thailand.</h5>
                </figcaption>
              </figure>
              <div class="card-body p-5">
                <h6 class="mb-0">Global Achievers Award for Business Excellence</h6>
              </div>
              <!--/.card-body -->
            </div>
            <!-- /.card -->
          </div>
          
     
          <div class="col-md-6 col-lg-4 mx-auto">
            <div class="card shadow-lg">
              <figure class="card-img-top overlay overlay-1 bg-soft-primary">
                <a href="#"><img class="img-fluid" src="./assets/img/awards/svg/IEDRA-01-01.svg" style="width: 70%;" alt="fasterst growing comapny" /></a>
                <figcaption>
                  <h5 class="from-top mb-0 fs-sm">Awarded By Indian Economic Development and Research Association (IEDRA) on
                  the occasion of National Seminar on "Outstanding contribution to National Development" on Friday 29th
                  August 2014 at New Delhi.</h5>
                </figcaption>
              </figure>
              <div class="card-body p-5">
                <h6>Fastest Growing Indian Company Excellence Award</h6>
              </div>
              <!--/.card-body -->
            </div>
            <!-- /.card -->
          </div>
          
          
          
               
                    <div class="col-md-6 col-lg-4 mx-auto">
            <div class="card shadow-lg">
              <figure class="card-img-top overlay overlay-1 bg-soft-primary">
                <a href="#"><img class="img-fluid" src="./assets/img/awards/svg/cool startup-01.svg" style="width: 70%;" alt="50 cool startups" /></a>
                <figcaption>
                  <h5 class="from-top mb-0 fs-sm">HashRoot has been identified in the "50 cool startups of the year" by
                  Siliconindia. Better work-life balance, pay scale &amp; benefits, development opportunities are some
                  of
                  the factors that were considered while preparing the list.</h5>
                </figcaption>
              </figure>
              <div class="card-body p-5">
                <h6>Siliconindia 50 cool startups of the year</h6>
              </div>
              <!--/.card-body -->
            </div>
            <!-- /.card -->
          </div>
          
         

          
        </div>
        <!--/.row -->
        
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->
            
            <!--Awards Ends-->
            
            
            <!--Hashroot Starts-->
            
            <!-- /section -->
    <section class="wrapper bg-light ">
      <div class="container py-10 py-md-10">
     
        <!--/.row -->
        <div class="card bg-soft-violet mb-10">
          <div class="card-body p-12 pb-0">
            <div class="row">
              <div class="col-lg-4 pb-12 align-self-center">
                <!--<div class="post-category mb-3 text-violet">Web Design</div>-->
                <h3 class="h1 post-title mb-3">Our Capabilities</h3>
                <p>Help customers among the world corporate leaders with create new opportunities and confront the most strategic challenges in a global perspective. We bring in front you with a global perspective for the clients; lay out with strategic services that would be through our expertise across the client life cycle.</p>
                   
              </div>
              <!-- /column -->
              <div class="col-lg-7 pb-12 offset-lg-1 align-self-end">
                <figure><img class="img-fluid" src="{{asset('assets/img/common/about18.webp')}}" srcset="{{asset('assets/img/common/about18.webp')}} 2x" alt="about18"  loading="lazy"/></figure>
              </div>
              <!-- /column -->
            </div>
            <!-- /.row -->
          </div>
          <!--/.card-body -->
        </div>
        <!--/.card -->
        <div class="card bg-soft-blue mb-10">
          <div class="card-body p-12">
            <div class="row gy-10 align-items-center">
              <div class="col-lg-4 order-lg-2 offset-lg-1">
                <h3 class="h1 post-title mb-3">Our Difference</h3>
                <p>Build with expert team to drive innovative ideas with the innovative technical experts with sound business outlook and up to date knowledge of today's dynamically evolving IT Market.</p>
              </div>
              <!-- /column -->
              <div class="col-lg-7">
                <figure><img class="img-fluid" src="{{asset('assets/img/common/about19@2x.webp')}}" srcset="{{asset('assets/img/common/about19@2x.webp')}} 2x" alt="about19"  loading="lazy"/></figure>
              </div>
              <!-- /column -->
            </div>
            <!-- /.row -->
          </div>
          <!--/.card-body -->
        </div>
        <!--/.card -->
        <div class="row gx-md-8 gx-xl-10">
          <div class="col-lg-6">
            <div class="card bg-soft-leaf mb-10">
              <div class="card-body p-12 pb-0">
                <h3 class="h1 post-title mb-3">Life @ RapidBrains</h3>
                <p style="height:163px">We give emphasis primarily on corporate governance, this leads to an effective decision-making process wherein we make most of our employees participate in decision-making processes, nerveless forget that what we are today is the thrive of our employees.</p>
              </div>
              <!--/.card-body -->
              <img class="card-img-bottom" src="{{asset('assets/img/common/about11.webp')}}" srcset="{{asset('assets/img/common/about11.webp')}} 2x" alt="about11"  loading="lazy"/>
            </div>
            <!--/.card -->
          </div>
          <!-- /column -->
          <div class="col-lg-6">
            <div class="card bg-soft-pink">
              <div class="card-body p-12 pb-0">
                <h3 class="h1 post-title mb-3">Our Culture</h3>
                <p style="height:163px">A successful Manager has a frantic challenge of getting the best out of his workforce irrespective of any critical situation. He can do so only by keeping them motivated. A motivated workforce is an assurance of quality performance delivered.</p>
              </div>
              <!--/.card-body -->
              <img class="card-img-bottom" src="{{asset('assets/img/common/about10.webp')}}" srcset="{{asset('assets/img/common/about10.webp')}} 2x" alt="about10"  loading="lazy"/>
            </div>
            <!--/.card -->
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </section>
    @include('services.logo')
@endsection