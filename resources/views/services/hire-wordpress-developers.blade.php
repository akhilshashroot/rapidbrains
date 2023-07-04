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
   </style>
   <!--<section class="wrapper bg-gray">
     <div class="container pt-12 pt-md-16 text-center">
       <div class="row">
         <div class="col-lg-8 col-xxl-7 mx-auto text-center" data-cues="slideInDown" data-group="page-title" data-delay="600">
           <h1 class="display-1 fs-58 mb-7">Build your remote team, rapidly!</h1>
           <div class="d-flex justify-content-center" data-cues="slideInDown" data-group="page-title-buttons" data-delay="900">
             <span><a href="https://talents.rapidbrains.com/" class="btn btn-lg btn btn-primary me-2">Hire Now</a></span>
           </div>
         </div>
       </div>
     </div>
     <figure class="position-absoute" style="bottom: 0; left: 0; z-index: 2;"><img src="https://www.rapidbrains.com/assets/img/photos/Web Banner-min.jpg
   " alt="RapidBrains Home" /></figure>
   </section>-->
   <section class="wrapper overflow-hidden image-wrapper" id="sect-bg" style="padding-bottom: 240px" >



   <div class="container pt-19 pt-md-21 text-center position-relative">
           <div class="position-absolute" style="top: -15%; left: 50%; transform: translateX(-50%);" data-cue="fadeIn"></div>
           <div class="row position-relative">
             <div class="col-lg-8 col-xxl-7 mx-auto position-relative">
               <div class="position-absolute shape grape w-5 d-none d-lg-block" style="top: -5%; left: -15%;" data-cue="fadeIn" data-delay="1500"><img src="https://www.rapidbrains.com/assets/img/svg/pie.svg" class="svg-inject icon-svg w-100 h-100" alt="" /></div>
               <div class="position-absolute shape violet w-10 d-none d-lg-block" style="bottom: 30%; left: -20%;" data-cue="fadeIn" data-delay="1500"><img src="https://www.rapidbrains.com/assets/img/svg/scribble.svg" class="svg-inject icon-svg w-100 h-100" alt="" /></div>
               <div class="position-absolute shape fuchsia w-6 d-none d-lg-block" style="top: 0%; right: -25%; transform: rotate(70deg);" data-cue="fadeIn" data-delay="1500"><img src="https://www.rapidbrains.com/assets/img/svg/tri.svg" class="svg-inject icon-svg w-100 h-100" alt="" /></div>
               <div class="position-absolute shape yellow w-6 d-none d-lg-block" style="bottom: 25%; right: -17%;" data-cue="fadeIn" data-delay="1500"><img src="https://www.rapidbrains.com/assets/img/svg/circle.svg" class="svg-inject icon-svg w-100 h-100" alt="" /></div>
               <div data-cues="slideInDown" data-group="page-title">
                 <h1 class="display-1 fs-62 mb-5 mx-md-10 mx-lg-0">Hire WordPress Developers Remotely in 24 Hours!</h1>
                 <p class="lead fs-16 mb-8">Get skilled WordPress developers hired remotely for your projects within just 24 hours, ensuring quick and efficient website development and customization.</p>
                 <div class="d-flex justify-content-center" data-cues="slideInDown"  >
                 <!--<span><a class="btn btn-lg btn-primary rounded-xl mx-1" href="https://talents.rapidbrains.com/" style="color:#fff;">Hire Talents</a></span>-->
                 <!-- <span><a class="btn btn-lg btn-fuchsia rounded-xl mx-1">Contact Us</a></span> -->
               </div>
               </div>

               <!-- /div -->
             </div>
             <!-- /column -->
           </div>
         <!-- /.container -->
         </div>
         <!-- /.container -->

         <!-- /.container -->
       </section>
   <!-- /section -->
   <!--section starts-->

   <section class="wrapper bg-soft-red">
       <div class="container py-14 py-md-16">
         <div class="card bg-light rounded-4 shadow" style="margin-top: -300px;">
           <div class="card-body p-md-10 p-xl-11">
             <div class="row gx-lg-8 gx-xl-12 gy-10">
               <div class="col-lg-6" style="margin-top: 50px;">
                 <h3 class="display-4 mb-4">Unleash remote WordPress wizards for an elevated website experience!</h3>
                 <p class="lead fs-16 mb-0">Experience the magic of remote WordPress wizards who will elevate your website to new heights, delivering a seamless and captivating user experience with their expertise and innovative solutions.</p>
                 <a href="https://talents.rapidbrains.com/filter?skill=wordpress" class="btn btn-primary rounded-pill" style="margin-top: 25px; color: #fff;">Hire WordPress Developers</a>
               </div>
               <!--/column -->
               <div class="col-lg-6">
                 <div class="accordion accordion-wrapper" id="accordionExample">
                   <div class="card plain accordion-item">
                     <div class="card-header" id="headingOne">
                       <button class="collapsed fs-15" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Skilled in dynamic front-end development using WordPress for immersive user experiences.</button>
                     </div>
                     <!--/.card-header -->
                     <!--/.accordion-collapse -->
                   </div>
                   <!--/.accordion-item -->
                   <div class="card plain accordion-item">
                     <div class="card-header" id="headingTwo">
                       <button class="collapsed fs-15" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Seamlessly integrate WordPress plugins for enhanced functionality and customization</button>
                     </div>
                     <!--/.card-header -->
                     <!--/.accordion-collapse -->
                   </div>
                   <!--/.accordion-item -->
                   <div class="card plain accordion-item">
                     <div class="card-header" id="headingThree">
                       <button class="collapsed fs-15" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">WordPress expert for full-stack development, end-to-end solutions.</button>
                     </div>
                     <!--/.card-header -->
                     <!--/.accordion-collapse -->
                   </div>
                   <!--/.accordion-item -->
                   <div class="card plain accordion-item">
                     <div class="card-header" id="headingFour">
                       <button class="collapsed fs-15" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">Experienced in creating custom WordPress themes for unique and visually appealing websites</button>
                     </div>
                     <!--/.card-header -->

                     <!--/.accordion-collapse -->
                   </div>
                   <!--/.accordion-item -->
                   <div class="card plain accordion-item">
                     <div class="card-header" id="headingFour">
                       <button class="collapsed fs-15" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">WordPress e-commerce pro, optimizing seamless transactions</button>
                     </div>
                     <!--/.card-header -->

                     <!--/.accordion-collapse -->
                   </div>
                   <!--/.accordion-item -->
                   <div class="card plain accordion-item">
                     <div class="card-header" id="headingFour">
                       <button class="collapsed fs-15" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">Optimize WordPress for visibility and organic traffic</button>
                     </div>
                     <!--/.card-header -->

                     <!--/.accordion-collapse -->
                   </div>
                   <!--/.accordion-item -->
                 </div>
                 <!--/.accordion -->
               </div>
               <!--/column -->
               <!--<div class="col-lg-6 col-xl-5 mx-auto text-center">
                   <h2 class="display-6 mb-3">Take a look at our talent pool</h2>
                   <p class="lead mb-5 px-md-16 px-lg-3">Salary starts from $1200/month</p>
                   <a href="https://talents.rapidbrains.com/filter?skill=react" class="btn btn-primary rounded-pill">Show Talents</a>
               </div>-->
             </div>
             <!--/.row -->
           </div>
           <!--/.card-body -->
         </div>
         <!--/.card -->
       </div>
       <!-- /.container -->

     </section>
     <!-- /section -->

     <!--section ends-->


   <!--section starts-->

<section class="wrapper bg-soft-yellow" style="padding-top: 50px;">
  <div class="container py-14 py-md-5">
    <h2 class="display-4 mb-3 text-center">Why Hire Remote WordPress Developers from RapidBrains</h2><br>
    <p class="lead text-center mb-10 px-md-16 px-lg-0">Benefits</p>
    <div class="row">
      <div class="col-lg-6 mb-0">
        <div id="accordion-1" class="accordion-wrapper">
          <div class="card accordion-item">
            <div class="card-header" id="accordion-heading-1-1">
              <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-1-1" aria-expanded="true" aria-controls="accordion-collapse-1-1">Skills and Expertise</button>
            </div>
            <!-- /.card-header -->
            <div id="accordion-collapse-1-1" class="accordion-collapse collapse show" aria-labelledby="accordion-heading-1-1" data-bs-target="#accordion-1">
              <div class="card-body">
                <p>You can access a variety of specialized skills and expertise that are not easily
                    accessible in-house by hiring a WordPress developer.
                    </p>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.collapse -->
          </div>
          <!-- /.card -->
          <div class="card accordion-item">
            <div class="card-header" id="accordion-heading-1-2">
              <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-1-2" aria-expanded="true" aria-controls="accordion-collapse-1-2">Faster Development
            </button>
            </div>
            <!-- /.card-header -->
            <div id="accordion-collapse-1-2" class="accordion-collapse collapse show" aria-labelledby="accordion-heading-1-2" data-bs-target="#accordion-1">
              <div class="card-body">
                <p>Projects can be finished more quickly and effectively with the help of an
                    experienced WordPress developer

                    </p>
            </div>
              <!-- /.card-body -->
            </div>
            <!-- /.collapse -->
          </div>
          <!-- /.card -->
          <div class="card accordion-item">
            <div class="card-header" id="accordion-heading-1-3">
              <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-1-3" aria-expanded="true" aria-controls="accordion-collapse-1-3">High-Quality Results</button>
            </div>
            <!-- /.card-header -->
            <div id="accordion-collapse-1-3" class="accordion-collapse collapse show" aria-labelledby="accordion-heading-1-3" data-bs-target="#accordion-1">
              <div class="card-body">
                <p>A skilled WordPress developer is equipped to meet your needs and exceed your
                    expectations with high-quality results

                    </p>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.collapse -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.accordion-wrapper -->
      </div>
      <!--/column -->
      <div class="col-lg-6">
          <div id="accordion-2" class="accordion-wrapper">
              <div class="card accordion-item">
                <div class="card-header" id="accordion-heading-2-2">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-2-2" aria-expanded="true" aria-controls="accordion-collapse-2-2">Cost Savings</button>
                </div>
                <!-- /.card-header -->
                <div id="accordion-collapse-2-2" class="accordion-collapse collapse show" aria-labelledby="accordion-heading-2-2" data-bs-target="#accordion-2">
                  <div class="card-body">
                    <p>You have access to a flexible, budget-friendly solution that delivers the
                        outcomes you require without compromising quality.
                        </p>
                    </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.collapse -->
              </div>
              <!-- /.card -->
        <div id="accordion-2" class="accordion-wrapper">
          <div class="card accordion-item">
            <div class="card-header" id="accordion-heading-2-2">
              <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-2-2" aria-expanded="true" aria-controls="accordion-collapse-2-2">Improved Maintenance and Support</button>
            </div>
            <!-- /.card-header -->
            <div id="accordion-collapse-2-2" class="accordion-collapse collapse show" aria-labelledby="accordion-heading-2-2" data-bs-target="#accordion-2">
              <div class="card-body">
                <p>Your website or application can receive better maintenance and support from
                    a skilled WordPress developer.
                    </p>
                </div>
              <!-- /.card-body -->
            </div>
            <!-- /.collapse -->
          </div>
          <!-- /.card -->
          <div class="card accordion-item">
            <div class="card-header" id="accordion-heading-2-3">
              <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-2-3" aria-expanded="true" aria-controls="accordion-collapse-2-3">Improved User Experience</button>
            </div>
            <!-- /.card-header -->
            <div id="accordion-collapse-2-3" class="accordion-collapse collapse show" aria-labelledby="accordion-heading-2-3" data-bs-target="#accordion-2">
              <div class="card-body">
                <p>Your website or application's user experience can be enhanced by a WordPress
                    developer, making it more accessible and user-friendly.
                    </p>
                </div>
              <!-- /.card-body -->
            </div>
            <!-- /.collapse -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.accordion-wrapper -->
      </div>
      <!--/column -->
    </div>
    <!--/.row -->
  </div>
  <!-- /.container -->
  </div>
</section>

<!--section ends-->

  <!--section ends-->


     <!--section starts-->

     <section class="wrapper bg-light">
       <div class="container py-14 py-md-16 text-center">
         <div class="row">
           <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">
             <h2 class="fs-15 text-uppercase text-muted mb-3">Hire WordPress Developers in 24 Hours</h2>
             <h3 class="display-4 mb-10 px-xl-10">4-Steps Easy Strategy To Hire Top WordPress Developers Remotely</h3>
           </div>
           <!-- /column -->
         </div>
         <!-- /.row -->
         <div class="position-relative">
           <div class="shape rounded-circle bg-soft-blue rellax w-16 h-16" data-rellax-speed="1" style="bottom: -0.5rem; right: -2.2rem; z-index: 0;"></div>
           <div class="shape bg-dot yellow rellax w-16 h-17" data-rellax-speed="1" style="top: -0.5rem; left: -2.5rem; z-index: 0;"></div>
           <div class="row gx-md-5 gy-5 text-center">
             <div class="col-md-6 col-xl-3">
               <div class="card shadow-lg">
                 <div class="card-body">
                   <img src="https://www.rapidbrains.com/assets/img/android/requirements.webp" style="width:50px; height:50px" alt="requirements"  loading="lazy"/>
                   <h4 style="padding-top: 15px;">Role Essentials</h4>
                   <p class="mb-2">Define job responsibilities, required skills and experience for the role.</p>
                 </div>
                 <!--/.card-body -->
               </div>
               <!--/.card -->
             </div>
             <!--/column -->
             <div class="col-md-6 col-xl-3">
               <div class="card shadow-lg">
                 <div class="card-body">
                   <img src="https://www.rapidbrains.com/assets/img/android/sourcing.webp" style="width:50px; height:50px" alt="sourcing"  loading="lazy" />
                   <h4 style="padding-top: 15px;">Talent Hunt</h4>
                   <p class="mb-2">Find top talent matching job specifications from a vast pool.</p>
                 </div>
                 <!--/.card-body -->
               </div>
               <!--/.card -->
             </div>
             <!--/column -->
             <div class="col-md-6 col-xl-3">
               <div class="card shadow-lg">
                 <div class="card-body">
                   <img src="https://www.rapidbrains.com/assets/img/android/screening.webp" style="width:50px; height:50px" alt="screening"  loading="lazy"/>
                   <h4 style="padding-top: 15px;">Assess Candidates</h4>
                   <p class="mb-2">Interview to evaluate technical expertise, soft skills, and experience.</p>
                 </div>
                 <!--/.card-body -->
               </div>
               <!--/.card -->
             </div>
             <!--/column -->
             <div class="col-md-6 col-xl-3">
               <div class="card shadow-lg">
                 <div class="card-body">
                   <img src="https://www.rapidbrains.com/assets/img/android/onboarding.webp" style="width:50px; height:50px" alt="onboarding" loading="lazy"/>
                   <!--svg-inject-->
                   <h4 style="padding-top: 15px;">Seal the Deal</h4>
                   <p class="mb-2">Select the best fit for company needs and culture, then onboard.</p>

                 </div>
                 <!--/.card-body -->
               </div>
               <!--/.card -->
             </div>
             <!--/column -->
           </div>
           <!--/.row -->
         </div>
         <!-- /.position-relative -->
       </div>
       <!-- /.container -->
     </section>
     <!-- /section -->

     <!--section ends-->

     <!--section starts-->

     <section class="wrapper bg-light" style="margin-top: -50px;">
       <div class="container py-14 py-md-16">
           <div class="row text-center">
               <div class="col-xl-10 mx-auto">
                   <h3 class="display-4 mb-10 px-xxl-15">Boost Your Website's Productivity, Relevance, and Security with Skilled Remote WordPress Developers from RapidBrains</h3>
                   <p style="margin-top: -25px;">Hire the best WordPress developers to build Open source applications for rapid business transformation and creation of business value.</p>
               </div>
               <!-- /column -->
           </div><br><br><br>
         <div class="row gx-md-8 gx-xl-12 gy-10">
           <div class="col-lg-6">
             <div class="d-flex flex-row">
               <div>
                 <span class="icon btn btn-sm btn-circle btn-primary pe-none me-5"><i class="uil uil-comment-exclamation"></i></span>
               </div>
               <div>
                 <h4>Boost CMS Productivity</h4>
                 <p class="mb-0">Engage WordPress developers to
maintain your CMS site's productivity and ensure timely updates in line with current trends
and relevance.</p>
               </div>
             </div>
           </div>
           <!-- /column -->
           <div class="col-lg-6">
             <div class="d-flex flex-row">
               <div>
                 <span class="icon btn btn-sm btn-circle btn-primary pe-none me-5"><i class="uil uil-comment-exclamation"></i></span>
               </div>
               <div>
                 <h4>WordPress Plugin Development</h4>
                 <p class="mb-0">Remote WordPress developers can create custom plugins
to meet your needs and elevate your brand</p>
               </div>
             </div>
           </div>
           <!-- /column -->
           <div class="col-lg-6">
             <div class="d-flex flex-row">
               <div>
                 <span class="icon btn btn-sm btn-circle btn-primary pe-none me-5"><i class="uil uil-comment-exclamation"></i></span>
               </div>
               <div>
                 <h4>WordPress Blog Development</h4>
                 <p class="mb-0">Hire expert WordPress developers to leverage the flexible
platform for development and integration of WordPress blog.</p>
               </div>
             </div>
           </div>
           <!-- /column -->
           <div class="col-lg-6">
             <div class="d-flex flex-row">
               <div>
                 <span class="icon btn btn-sm btn-circle btn-primary pe-none me-5"><i class="uil uil-comment-exclamation"></i></span>
               </div>
               <div>
                 <h4>WordPress Ecommerce Development</h4>
                 <p class="mb-0">Dedicated WordPress experts for WordPress
eCommerce Development services to meet your business requirements.</p>
               </div>
             </div>
           </div>
           <!-- /column -->
           <div class="col-lg-6">
             <div class="d-flex flex-row">
               <div>
                 <span class="icon btn btn-sm btn-circle btn-primary pe-none me-5"><i class="uil uil-comment-exclamation"></i></span>
               </div>
               <div>
                 <h4>Seamless Integration</h4>
                 <p class="mb-0">Offshore WordPress developer for Custom API and integration
services to create functionally rich experience for users</p>
               </div>
             </div>
           </div>
           <!-- /column -->
           <div class="col-lg-6">
             <div class="d-flex flex-row">
               <div>
                 <span class="icon btn btn-sm btn-circle btn-primary pe-none me-5"><i class="uil uil-comment-exclamation"></i></span>
               </div>
               <div>
                 <h4>Reliable Support and Maintenance</h4>
                 <p class="mb-0">WordPress expert available for hire,
specializing in providing comprehensive support and maintenance services to ensure your
website remains up-to-date and secure.</p>
               </div>
             </div>
           </div>
           <!-- /column -->
         </div>
         <!-- /.row -->
       </div>
       <!-- /.container -->
     </section>
     <!-- /section -->

     <!--section ends-->

     <section class="wrapper bg-soft-yellow">
       <div class="container py-14 py-md-16">
         <div class="row gx-lg-8 gx-xl-12 gy-10">
           <div class="col-lg-6 mb-0">
             <h2 class="fs-15 text-uppercase text-primary mb-3">FAQ</h2>
             <h3 class="display-3 mb-4">Get the answers you need, fast and easy..</h3>
             <p class="lead mb-6">Save time and find solutions with our comprehensive FAQs, covering a range of topics and expertly crafted for your convenience</p>
             <!--<a href="#" class="btn btn-primary rounded-pill">All FAQ</a>-->
           </div>
           <!--/column -->
           <div class="col-lg-6">
             <div id="accordion-3" class="accordion-wrapper">
               <div class="card accordion-item">
                 <div class="card-header" id="accordion-heading-3-1">
                   <button class="collapsed fs-15" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-3-1" aria-expanded="false" aria-controls="accordion-collapse-3-1">What level of expertise do WordPress developers at RapidBrains have?</button>
                 </div>
                 <!-- /.card-header -->
                 <div id="accordion-collapse-3-1" class="collapse" aria-labelledby="accordion-heading-3-1" data-bs-target="#accordion-3">
                   <div class="card-body">
                     <p class="fs-14">: At RapidBrains, our WordPress developers are highly skilled and experienced in
developing websites and applications using the WordPress platform. They have a
strong understanding of WordPress architecture, themes, plugins, and customization.
Our developers stay updated with the latest WordPress trends and best practices to
deliver high-quality solutions.</p>
                   </div>
                   <!-- /.card-body -->
                 </div>
                 <!-- /.collapse -->
               </div>
               <!-- /.card -->
               <div class="card accordion-item">
                 <div class="card-header" id="accordion-heading-3-2">
                   <button class="collapsed fs-15" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-3-2" aria-expanded="false" aria-controls="accordion-collapse-3-2">Can I hire dedicated remote WordPress developers from RapidBrains?</button>
                 </div>
                 <!-- /.card-header -->
                 <div id="accordion-collapse-3-2" class="collapse" aria-labelledby="accordion-heading-3-2" data-bs-target="#accordion-3">
                   <div class="card-body">
                     <p class="fs-14">Absolutely! RapidBrains offers the option to hire dedicated remote WordPress
developers for your project. By hiring dedicated developers, you can ensure their full
attention and expertise dedicated to your project's specific requirements. This leads
to efficient development, timely delivery, and seamless collaboration.</p>
                   </div>
                   <!-- /.card-body -->
                 </div>
                 <!-- /.collapse -->
               </div>
               <!-- /.card -->
               <div class="card accordion-item">
                 <div class="card-header" id="accordion-heading-3-3">
                   <button class="collapsed fs-15" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-3-3" aria-expanded="false" aria-controls="accordion-collapse-3-3">How does the hiring process work at RapidBrains?</button>
                 </div>
                 <!-- /.card-header -->
                 <div id="accordion-collapse-3-3" class="collapse" aria-labelledby="accordion-heading-3-3" data-bs-target="#accordion-3">
                   <div class="card-body">
                     <p class="fs-14">The hiring process at RapidBrains is simple and straightforward. After you share
your project requirements, our team evaluates them and presents you with profiles of
skilled WordPress developers who match your criteria. You can review the profiles,
conduct interviews, and select the developer who best suits your project's needs. We
aim to make the onboarding process quick and hassle-free.
</p>
                   </div>
                   <!-- /.card-body -->
                 </div>
                 <!-- /.collapse -->
               </div>
               <!-- /.card -->
               <div class="card accordion-item">
                 <div class="card-header" id="accordion-heading-3-4">
                   <button class="collapsed fs-15" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-3-4" aria-expanded="false" aria-controls="accordion-collapse-3-4">Is the confidentiality of my project information ensured?</button>
                 </div>
                 <!-- /.card-header -->
                 <div id="accordion-collapse-3-4" class="collapse" aria-labelledby="accordion-heading-3-4" data-bs-target="#accordion-3">
                   <div class="card-body">
                     <p class="fs-14">Yes, RapidBrains understands the importance of confidentiality and data security.
We take the protection of your project information seriously. We are open to signing
non-disclosure agreements (NDAs) to ensure the confidentiality and privacy of your
sensitive data. You can trust us to handle your project with the utmost
professionalism and discretion.</p>
                   </div>
                   <!-- /.card-body -->
                 </div>
                 <!-- /.collapse -->
               </div>
               <!-- /.card -->
             </div>
             <!-- /.accordion-wrapper -->
           </div>
           <!--/column -->
         </div>
         <!--/.row -->
       </div>
       <!-- /.container -->
     </section>
     <!-- /section -->

   <!--Section-->

<!--section ends-->

@include('services.logo')
<!-- /section -->

<!--section ends-->




<!--section starts-->
@endsection
