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
                 <h1 class="display-1 fs-62 mb-5 mx-md-10 mx-lg-0">Accelerate with DevOps Experts</h1>
                 <p class="lead fs-18 mb-8">Streamline Development & Deployment With RapidBrains</p>
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
                 <h3 class="display-4 mb-4">Empower Your Team with Remote DevOps</h3>
                 <p class="lead fs-lg mb-0">Optimize Infrastructure and Accelerate Growth</p><br>
                 <a href="https://talents.rapidbrains.com/filter?skill=react" class="btn btn-primary rounded-pill" style="color: #fff;">Hire DevOps Developers</a>
               </div>
               <!--/column -->
               <div class="col-lg-6">
                 <div class="accordion accordion-wrapper" id="accordionExample">
                   <div class="card plain accordion-item">
                     <div class="card-header" id="headingOne">
                       <button class="collapsed fs-15" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Hire top remote DevOps engineers from RapidBrains instantly.</button>
                     </div>
                     <!--/.card-header -->
                     <!--/.accordion-collapse -->
                   </div>
                   <!--/.accordion-item -->
                   <div class="card plain accordion-item">
                     <div class="card-header" id="headingTwo">
                       <button class="collapsed fs-15" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Ensure smooth operations and consistent infrastructure.</button>
                     </div>
                     <!--/.card-header -->
                     <!--/.accordion-collapse -->
                   </div>
                   <!--/.accordion-item -->
                   <div class="card plain accordion-item">
                     <div class="card-header" id="headingThree">
                       <button class="collapsed fs-15" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Timely updates and maintenance.</button>
                     </div>
                     <!--/.card-header -->
                     <!--/.accordion-collapse -->
                   </div>
                   <!--/.accordion-item -->
                   <div class="card plain accordion-item">
                     <div class="card-header" id="headingFour">
                       <button class="collapsed fs-15" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">Manage cross-platform connections, security, and automation.</button>
                     </div>
                     <!--/.card-header -->

                     <!--/.accordion-collapse -->
                   </div>
                   <!--/.accordion-item -->
                   <div class="card plain accordion-item">
                     <div class="card-header" id="headingFour">
                       <button class="collapsed fs-15" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">Boost business with development, automation, plugin integration, and API expertise.</button>
                     </div>
                     <!--/.card-header -->

                     <!--/.accordion-collapse -->
                   </div>
                   <!--/.accordion-item -->
                   <div class="card plain accordion-item">
                     <div class="card-header" id="headingFour">
                       <button class="collapsed fs-15" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">Seamless collaboration and total control.</button>
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

     <section class="wrapper bg-soft-red" style="padding-top: -50px;">
       <div class="container py-14 py-md-5">
         <h2 class="display-4 mb-3 text-center">Elevate Your Business with RapidBrains Remote DevOps</h2>
         <p class="lead text-center mb-10 px-md-16 px-lg-0">Unleash Efficiency, Reliability, & Collaboration</p>
         <div class="row">
           <div class="col-lg-6 mb-0">
             <div id="accordion-1" class="accordion-wrapper">
               <div class="card accordion-item">
                 <div class="card-header" id="accordion-heading-1-1">
                   <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-1-1" aria-expanded="true" aria-controls="accordion-collapse-1-1">Boost efficiency</button>
                 </div>
                 <!-- /.card-header -->
                 <div id="accordion-collapse-1-1" class="accordion-collapse collapse show" aria-labelledby="accordion-heading-1-1" data-bs-target="#accordion-1">
                   <div class="card-body">
                     <p>Speed up software development cycles with automated tools and processes for rapid feature and product releases</p>
                   </div>
                   <!-- /.card-body -->
                 </div>
                 <!-- /.collapse -->
               </div>
               <!-- /.card -->
               <div class="card accordion-item">
                 <div class="card-header" id="accordion-heading-1-2">
                   <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-1-2" aria-expanded="true" aria-controls="accordion-collapse-1-2">Enhance reliability</button>
                 </div>
                 <!-- /.card-header -->
                 <div id="accordion-collapse-1-2" class="accordion-collapse collapse show" aria-labelledby="accordion-heading-1-2" data-bs-target="#accordion-1">
                   <div class="card-body">
                     <p>Pre-screened DevOps engineers at RapidBrains are highly skilled to take over your projects instantly and deliver in time.
                       </p>
                     </div>
                   <!-- /.card-body -->
                 </div>
                 <!-- /.collapse -->
               </div>
               <!-- /.card -->
               <div class="card accordion-item">
                 <div class="card-header" id="accordion-heading-1-3">
                   <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-1-3" aria-expanded="true" aria-controls="accordion-collapse-1-3">Foster collaboration</button>
                 </div>
                 <!-- /.card-header -->
                 <div id="accordion-collapse-1-3" class="accordion-collapse collapse show" aria-labelledby="accordion-heading-1-3" data-bs-target="#accordion-1">
                   <div class="card-body">
                     <p>Bridge the gap between development and operations teams for seamless communication and teamwork.</p>
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
                     <div class="card-header" id="accordion-heading-2-1">
                       <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-2-1" aria-expanded="true" aria-controls="accordion-collapse-2-1">Optimize costs</button>
                     </div>
                     <!-- /.card-header -->
                     <div id="accordion-collapse-2-1" class="accordion-collapse collapse show" aria-labelledby="accordion-heading-2-1" data-bs-target="#accordion-2">
                       <div class="card-body">
                         <p>Reduce development and operational expenses through process automation and minimized downtime.</p>
                         </div>
                       <!-- /.card-body -->
                     </div>
                     <!-- /.collapse -->
                   </div>
                   <!-- /.card -->
             <div id="accordion-2" class="accordion-wrapper">
               <div class="card accordion-item">
                 <div class="card-header" id="accordion-heading-2-2">
                   <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-2-2" aria-expanded="true" aria-controls="accordion-collapse-2-2">Strengthen security</button>
                 </div>
                 <!-- /.card-header -->
                 <div id="accordion-collapse-2-2" class="accordion-collapse collapse show" aria-labelledby="accordion-heading-2-2" data-bs-target="#accordion-2">
                   <div class="card-body">
                     <p>Implement robust security measures throughout the software development process with Remote DevOps.</p>
                     </div>
                   <!-- /.card-body -->
                 </div>
                 <!-- /.collapse -->
               </div>
               <!-- /.card -->
               <div class="card accordion-item">
                 <div class="card-header" id="accordion-heading-2-3">
                   <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-2-3" aria-expanded="true" aria-controls="accordion-collapse-2-3">Embrace flexibility</button>
                 </div>
                 <!-- /.card-header -->
                 <div id="accordion-collapse-2-3" class="accordion-collapse collapse show" aria-labelledby="accordion-heading-2-3" data-bs-target="#accordion-2">
                   <div class="card-body">
                     <p>Benefit from adaptable scheduling and remote work options with our DevOps engineers.</p>
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

     <!--section starts-->

     <section class="wrapper bg-light">
       <div class="container py-14 py-md-16 text-center">
         <div class="row">
           <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">
             <h2 class="fs-15 text-uppercase text-muted mb-3">Streamlined Hiring of DevOps Engineers</h2>
             <h3 class="display-4 mb-10 px-xl-10">Discover our quick process to identify and recruit top-notch DevOps Engineers, tailored to your organization's needs.</h3>
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
                   <h3 class="display-4 mb-10 px-xxl-15">RapidBrains: Your Go-To for Expert Remote ReactJS Developers</h3>
                   <p style="margin-top: -25px;">Empowering Innovation with Top-Notch ReactJS Talent & Unleashing Excellence in ReactJS Development Remotely</p>
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
                 <h4>DevOps-Powered Development</h4>
                 <p class="mb-0">Experience the cutting-edge of modern application development powered by expert DevOps engineers, and take your digital products to the next level.</p>
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
                 <h4>Continuous Delivery</h4>
                 <p class="mb-0">Maximize your productivity and efficiency by focusing on continuous integration, delivery, and deployment - key pillars of modern software development practices.</p>
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
                 <h4>Streamlined Development</h4>
                 <p class="mb-0">Empower your team to work smarter, not harder with our solutions that automate and simplify software development processes, freeing up your time to focus on what really matters - delivering high-quality software to your customers.</p>
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
                 <h4>Accelerated Development</h4>
                 <p class="mb-0">Stay ahead of the competition with our solutions that shorten development cycles and expedite new feature releases, allowing you to deliver innovative software faster and more frequently than ever before.</p>
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
                 <h4>Market-Ready Solutions</h4>
                 <p class="mb-0">Be ready for anything the market throws your way with our solutions that boost your competitiveness and responsiveness to market changes, enabling you to deliver innovative and reliable software that meets your customers' needs and exceeds their expectations.</p>
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
                 <h4>Stable Software</h4>
                 <p class="mb-0">Ensure the stability of your software with our testing and monitoring tools, designed to help you catch issues early, streamline your development process, and deliver high-quality, reliable software to your customers.</p>
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
                 <h4>Reliable Operations</h4>
                 <p class="mb-0">Keep your operations running smoothly with our solutions that minimize the risk of outages and reduce downtime, ensuring your software is always available when your customers need it most.</p>
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
                 <h4>Collaborative Development</h4>
                 <p class="mb-0">Break down communication barriers and bridge the gap between development and operations teams with our collaborative development solutions, designed to help you work together seamlessly and deliver software that meets your business goals and customer needs.</p>
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

     <section class="wrapper bg-soft-blue">
       <div class="container py-14 py-md-16">
         <div class="row gx-lg-8 gx-xl-12 gy-10">
           <div class="col-lg-6 mb-0">
             <h2 class="fs-15 text-uppercase text-primary mb-3">FAQ</h2>
             <h3 class="display-3 mb-4">Get the answers you need,<br> fast and easy..</h3>
             <p class="lead mb-6">Save time and find solutions with our comprehensive FAQs, <br>covering a range of topics and expertly crafted for your convenience</p>
             <!--<a href="#" class="btn btn-primary rounded-pill">All FAQ</a>-->
           </div>
           <!--/column -->
           <div class="col-lg-6">
             <div id="accordion-3" class="accordion-wrapper">
               <div class="card accordion-item">
                 <div class="card-header" id="accordion-heading-3-1">
                   <button class="collapsed fs-15" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-3-1" aria-expanded="false" aria-controls="accordion-collapse-3-1">What is Rapid Brains, and how can they help with hiring remote DevOps engineers?</button>
                 </div>
                 <!-- /.card-header -->
                 <div id="accordion-collapse-3-1" class="collapse" aria-labelledby="accordion-heading-3-1" data-bs-target="#accordion-3">
                   <div class="card-body">
                     <p class="fs-14">Rapid Brains is an online platform that connects businesses with skilled professionals in various fields, including DevOps engineering. By leveraging their network of experienced remote DevOps engineers, Rapid Brains can help your organization find the right candidate to meet your specific needs, streamlining the hiring process and ensuring that you get access to top talent from around the world.</p>
                   </div>
                   <!-- /.card-body -->
                 </div>
                 <!-- /.collapse -->
               </div>
               <!-- /.card -->
               <div class="card accordion-item">
                 <div class="card-header" id="accordion-heading-3-2">
                   <button class="collapsed fs-15" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-3-2" aria-expanded="false" aria-controls="accordion-collapse-3-2">What are the benefits of hiring a remote DevOps engineer through Rapid Brains?</button>
                 </div>
                 <!-- /.card-header -->
                 <div id="accordion-collapse-3-2" class="collapse" aria-labelledby="accordion-heading-3-2" data-bs-target="#accordion-3">
                   <div class="card-body">
                     <p class="fs-14">Hiring a remote DevOps engineer through Rapid Brains offers several benefits, including access to a global talent pool, cost savings due to reduced overhead expenses, and increased flexibility in terms of work hours and availability. Additionally, Rapid Brains can streamline the hiring process by pre-screening candidates and providing support throughout the onboarding process, saving you time and effort.</p>
                   </div>
                   <!-- /.card-body -->
                 </div>
                 <!-- /.collapse -->
               </div>
               <!-- /.card -->
               <div class="card accordion-item">
                 <div class="card-header" id="accordion-heading-3-3">
                   <button class="collapsed fs-15" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-3-3" aria-expanded="false" aria-controls="accordion-collapse-3-3">How does Rapid Brains ensure the quality of remote DevOps engineers in their talent pool?</button>
                 </div>
                 <!-- /.card-header -->
                 <div id="accordion-collapse-3-3" class="collapse" aria-labelledby="accordion-heading-3-3" data-bs-target="#accordion-3">
                   <div class="card-body">
                     <p class="fs-14">Rapid Brains ensures the quality of remote DevOps engineers by thoroughly vetting candidates through a rigorous selection process. This process may include evaluating their technical skills, work experience, and problem-solving abilities, as well as conducting interviews and background checks. By maintaining a high standard of quality for their talent pool, Rapid Brains ensures that you have access to top-tier DevOps engineers for your organization's needs.</p>
                   </div>
                   <!-- /.card-body -->
                 </div>
                 <!-- /.collapse -->
               </div>
               <!-- /.card -->
               <div class="card accordion-item">
                 <div class="card-header" id="accordion-heading-3-4">
                   <button class="collapsed fs-15" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-3-4" aria-expanded="false" aria-controls="accordion-collapse-3-4">Can Rapid Brains help with onboarding and training of the hired remote DevOps engineer?</button>
                 </div>
                 <!-- /.card-header -->
                 <div id="accordion-collapse-3-4" class="collapse" aria-labelledby="accordion-heading-3-4" data-bs-target="#accordion-3">
                   <div class="card-body">
                     <p class="fs-14">While specific services may vary, Rapid Brains typically offers support throughout the onboarding and training process for remote DevOps engineers. This support may include assistance with setting up communication and collaboration tools, facilitating introductions to your team, and providing access to any necessary training resources. Rapid Brains aims to ensure a smooth transition for both the remote DevOps engineer and your organization.</p>
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

<!--section ends-->






<!--section starts-->

<!--section starts-->
@include('services.logo')
<!-- /section -->

<!--section ends-->




<!--section starts-->
@endsection
