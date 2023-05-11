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
     background-image:  url(https://www.rapidbrains.com/assets/img/common/rapidbrains-cover3.webp);

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
     background-image:  url(https://www.rapidbrains.com/assets/img/common/rapidbrains-cover3.webp);

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
                 <h1 class="display-1 fs-52 mb-5 mx-md-10 mx-lg-0">MERN Stack Development for Enterprise Web Solutions</h1>
                 <p class="lead fs-18 mb-8">Maximize Your Online Presence with Expert Developers</p>
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
                 <h3 class="display-4 mb-4">Maximize Web Development Potential with Remote MERN Stack Developers</h3>
                 <p class="lead fs-lg mb-0">Build High-Performance Custom Web Apps with Expert Developers</p><br>
                 <a href="https://talents.rapidbrains.com/filter?skill=react" class="btn btn-primary rounded-pill">Hire MERN Stack Developers</a>
               </div>
               <!--/column -->
               <div class="col-lg-6">
                 <div class="accordion accordion-wrapper" id="accordionExample">
                   <div class="card plain accordion-item">
                     <div class="card-header" id="headingOne">
                       <button class="collapsed fs-15" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Hire remote MERN Stack developers for custom web applications with exceptional performance for your startup or company.</button>
                     </div>
                     <!--/.card-header -->
                     <!--/.accordion-collapse -->
                   </div>
                   <!--/.accordion-item -->
                   <div class="card plain accordion-item">
                     <div class="card-header" id="headingTwo">
                       <button class="collapsed fs-15 data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Our experienced MERN Stack developers can build interactive, real-time web apps as an extension of your team.</button>
                     </div>
                     <!--/.card-header -->
                     <!--/.accordion-collapse -->
                   </div>
                   <!--/.accordion-item -->
                   <div class="card plain accordion-item">
                     <div class="card-header" id="headingThree">
                       <button class="collapsed fs-15" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Latest MERN Stack technologies and skills are utilized to develop enterprise-grade custom web applications.</button>
                     </div>
                     <!--/.card-header -->
                     <!--/.accordion-collapse -->
                   </div>
                   <!--/.accordion-item -->
                   <div class="card plain accordion-item">
                     <div class="card-header" id="headingFour">
                       <button class="collapsed fs-15" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">Our MERN Stack developers are skilled to work from scratch or adapt to existing systems as per the project's needs.</button>
                     </div>
                     <!--/.card-header -->

                     <!--/.accordion-collapse -->
                   </div>
                   <!--/.accordion-item -->
                   <div class="card plain accordion-item">
                     <div class="card-header" id="headingFour">
                       <button class="collapsed fs-15" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">Maximize your web development potential by hiring MERN Stack developers to build fast, secure, and scalable web apps.</button>
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
         <h2 class="display-4 mb-3 text-center">Hire Top MERN Stack Developers With RapidBrains</h2>
         <p class="lead text-center mb-10 px-md-16 px-lg-0">Leverage Rapid Development, Seamless Collaboration & Customized Solutions for Business</p>
         <div class="row">
           <div class="col-lg-6 mb-0">
             <div id="accordion-1" class="accordion-wrapper">
               <div class="card accordion-item">
                 <div class="card-header" id="accordion-heading-1-1">
                   <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-1-1" aria-expanded="true" aria-controls="accordion-collapse-1-1">Accelerate Your Web Development</button>
                 </div>
                 <!-- /.card-header -->
                 <div id="accordion-collapse-1-1" class="accordion-collapse collapse show" aria-labelledby="accordion-heading-1-1" data-bs-target="#accordion-1">
                   <div class="card-body">
                     <p>Our MERN stack developers deliver responsive web applications rapidly, ensuring your project stays on track and within budget.</p>
                   </div>
                   <!-- /.card-body -->
                 </div>
                 <!-- /.collapse -->
               </div>
               <!-- /.card -->
               <div class="card accordion-item">
                 <div class="card-header" id="accordion-heading-1-2">
                   <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-1-2" aria-expanded="true" aria-controls="accordion-collapse-1-2">Enhance Team Collaboration</button>
                 </div>
                 <!-- /.card-header -->
                 <div id="accordion-collapse-1-2" class="accordion-collapse collapse show" aria-labelledby="accordion-heading-1-2" data-bs-target="#accordion-1">
                   <div class="card-body">
                     <p>Our remote-ready teams follow industry best practices and have extensive experience with project management tools, fostering effective communication and collaboration.
                       </p>
                     </div>
                   <!-- /.card-body -->
                 </div>
                 <!-- /.collapse -->
               </div>
               <!-- /.card -->
               <div class="card accordion-item">
                 <div class="card-header" id="accordion-heading-1-3">
                   <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-1-3" aria-expanded="true" aria-controls="accordion-collapse-1-3">Experienced Professionals</button>
                 </div>
                 <!-- /.card-header -->
                 <div id="accordion-collapse-1-3" class="accordion-collapse collapse show" aria-labelledby="accordion-heading-1-3" data-bs-target="#accordion-1">
                   <div class="card-body">
                     <p>Our highly skilled and knowledgeable MERN stack developers bring deep expertise in the underlying technologies to your project.</p>
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
                       <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-2-1" aria-expanded="true" aria-controls="accordion-collapse-2-1">Customized Solutions</button>
                     </div>
                     <!-- /.card-header -->
                     <div id="accordion-collapse-2-1" class="accordion-collapse collapse show" aria-labelledby="accordion-heading-2-1" data-bs-target="#accordion-2">
                       <div class="card-body">
                         <p>Our MERN stack developers create feature-rich, efficient web applications designed specifically for your business's unique requirements.</p>
                         </div>
                       <!-- /.card-body -->
                     </div>
                     <!-- /.collapse -->
                   </div>
                   <!-- /.card -->
             <div id="accordion-2" class="accordion-wrapper">
               <div class="card accordion-item">
                 <div class="card-header" id="accordion-heading-2-2">
                   <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-2-2" aria-expanded="true" aria-controls="accordion-collapse-2-2">Unparalleled Flexibility</button>
                 </div>
                 <!-- /.card-header -->
                 <div id="accordion-collapse-2-2" class="accordion-collapse collapse show" aria-labelledby="accordion-heading-2-2" data-bs-target="#accordion-2">
                   <div class="card-body">
                     <p>Choose the ideal engagement model for your needs, ensuring a seamless and adaptable working relationship with our team.</p>
                     </div>
                   <!-- /.card-body -->
                 </div>
                 <!-- /.collapse -->
               </div>
               <!-- /.card -->
               <div class="card accordion-item">
                 <div class="card-header" id="accordion-heading-2-3">
                   <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-2-3" aria-expanded="true" aria-controls="accordion-collapse-2-3">Streamline Your Process</button>
                 </div>
                 <!-- /.card-header -->
                 <div id="accordion-collapse-2-3" class="accordion-collapse collapse show" aria-labelledby="accordion-heading-2-3" data-bs-target="#accordion-2">
                   <div class="card-body">
                     <p>By hiring our MERN stack developers, you'll optimize your web development workflow, saving time and resources to focus on your core business goals.</p>
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
             <h2 class="fs-15 text-uppercase text-muted mb-3">Hire MERN Stack Developers in 24 Hours</h2>
             <h3 class="display-4 mb-10 px-xl-10">4-Steps Easy Strategy To Hire Best MERN Stack Developers Remotely</h3>
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

      <section class="wrapper">
       <div class="container py-14 py-md-16">
         <div class="row d-flex align-items-start gy-10">
           <div class="col-lg-5 position-lg-sticky" style="top: 8rem; position:sticky;">
             <h3 class="display-2 mb-5">Unleash the Power of MERN Stack with RapidBrains</h3>
             <p class="mb-7">Tailored Solutions for Your Web and Mobile Development Needs. Our team of experts has the knowledge and experience to create customized solutions that meet your unique requirements. From concept to launch, we'll work with you every step of the way to deliver top-quality solutions that exceed your expectations.</p>
             <a href="https://talents.rapidbrains.com/filter?skill=react" class="btn btn-lg btn-primary btn-icon btn-icon-end" style="color: #fff;">Hire Now<i class="uil uil-arrow-up-right"></i></a>
           </div>
           <!-- /column -->
           <div class="col-lg-6 ms-auto">
             <div class="card bg-soft-fuchsia mb-6">
               <div class="card-body d-flex flex-row">
                 <div>

                   <span class="icon btn btn-sm btn-circle btn-primary pe-none me-5"><i class="uil uil-check-circle"></i></span>
                 </div>
                 <div>
                   <!--<h3 class="fs-21 mb-2">User Research</h3>-->
                   <p class="mb-0">Choose from a pool of talented developers to match your project's unique requirements.</p>
                 </div>
               </div>
               <!-- /.card-body -->
             </div>
             <!-- /.card -->
             <div class="card bg-soft-aqua mb-6">
               <div class="card-body d-flex flex-row">
                 <div>
                   <span class="icon btn btn-sm btn-circle btn-primary pe-none me-5"><i class="uil uil-check-circle"></i></span>
                 </div>
                 <div>
                   <!--<h3 class="fs-21 mb-2">Strategy & Planning</h3>-->
                   <p class="mb-0">Adjust solutions to meet your company's demands, with more affordable pricing as the engagement duration increases.</p>
                 </div>
               </div>
               <!-- /.card-body -->
             </div>
             <!-- /.card -->
             <div class="card bg-soft-yellow mb-6">
               <div class="card-body d-flex flex-row">
                 <div>
                   <span class="icon btn btn-sm btn-circle btn-primary pe-none me-5"><i class="uil uil-check-circle"></i></span>
                 </div>
                 <div>
                   <!--<h3 class="fs-21 mb-2">App Design</h3>-->
                   <p class="mb-0">Receive guidance from our experienced professionals to select the best-suited team for your project.</p>
                 </div>
               </div>
               <!-- /.card-body -->
             </div>
             <!-- /.card -->
             <div class="card bg-soft-leaf mb-6">
               <div class="card-body d-flex flex-row">
                 <div>
                   <span class="icon btn btn-sm btn-circle btn-primary pe-none me-5"><i class="uil uil-check-circle"></i></span>
                 </div>
                 <div>
                   <!--<h3 class="fs-21 mb-2">Brand Design</h3>-->
                   <p class="mb-0">Our MERN Stack developers are prepared to begin working on your project right away, using a planned and systematic approach.</p>
                 </div>
               </div>
               <!-- /.card-body -->
             </div>
             <!-- /.card -->
             <div class="card bg-soft-orange mb-6">
               <div class="card-body d-flex flex-row">
                 <div>
                   <span class="icon btn btn-sm btn-circle btn-primary pe-none me-5"><i class="uil uil-check-circle"></i></span>
                 </div>
                 <div>
                   <!--<h3 class="fs-21 mb-2">Motion Graphic</h3>-->
                   <p class="mb-0">Develop robust web architectures, seamless mobile apps, and unique custom software without compromising flexibility or scalability.</p>
                 </div>
               </div>
               <!-- /.card-body -->
             </div>
             <!-- /.card -->
             <div class="card bg-soft-grape">
               <div class="card-body d-flex flex-row">
                 <div>
                   <span class="icon btn btn-sm btn-circle btn-primary pe-none me-5"><i class="uil uil-check-circle"></i></span>
                 </div>
                 <div>
                   <!--<h3 class="fs-21 mb-2">Web Design</h3>-->
                   <p class="mb-0">Discover top MERN Stack developers with RapidBrains – it's just a click away!</p>
                 </div>
               </div>
               <!-- /.card-body -->
             </div>
             <!-- /.card -->
           </div>
           <!-- /column -->
         </div>
         <!-- /.row -->
       </div>
       <!-- /.container -->
     </section>
     <!-- /section -->

      <!--section ends-->

      <!--section starts-->

     <section class="wrapper bg-soft-blue">
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
                   <button class="collapsed fs-15" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-3-1" aria-expanded="false" aria-controls="accordion-collapse-3-1">Why should I hire MERN Stack developers from RapidBrains?</button>
                 </div>
                 <!-- /.card-header -->
                 <div id="accordion-collapse-3-1" class="collapse" aria-labelledby="accordion-heading-3-1" data-bs-target="#accordion-3">
                   <div class="card-body">
                     <p class="fs-14">RapidBrains provides customized solutions, flexible engagement models, expert recommendations, and immediate availability of talented MERN Stack developers to cater to your unique project requirements.
                       Our developers deliver scalable and flawless solutions to ensure the success of your web and mobile development projects.</p>
                   </div>
                   <!-- /.card-body -->
                 </div>
                 <!-- /.collapse -->
               </div>
               <!-- /.card -->
               <div class="card accordion-item">
                 <div class="card-header" id="accordion-heading-3-2">
                   <button class="collapsed fs-15" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-3-2" aria-expanded="false" aria-controls="accordion-collapse-3-2"> How does the pricing model work for hiring MERN Stack developers from RapidBrains?</button>
                 </div>
                 <!-- /.card-header -->
                 <div id="accordion-collapse-3-2" class="collapse" aria-labelledby="accordion-heading-3-2" data-bs-target="#accordion-3">
                   <div class="card-body">
                     <p class="fs-14">Our pricing model is designed to become more affordable as the duration of the engagement increases. We offer flexible engagement models that can be adjusted according to your company's demands and project requirements.</p>
                   </div>
                   <!-- /.card-body -->
                 </div>
                 <!-- /.collapse -->
               </div>
               <!-- /.card -->
               <div class="card accordion-item">
                 <div class="card-header" id="accordion-heading-3-3">
                   <button class="collapsed fs-15" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-3-3" aria-expanded="false" aria-controls="accordion-collapse-3-3">How can I be sure of the quality of the MERN Stack developers from RapidBrains?</button>
                 </div>
                 <!-- /.card-header -->
                 <div id="accordion-collapse-3-3" class="collapse" aria-labelledby="accordion-heading-3-3" data-bs-target="#accordion-3">
                   <div class="card-body">
                     <p class="fs-14">We pride ourselves on providing expert recommendations and selecting the best-suited team or individual for your project based on their experience and expertise. Our developers are well-versed in the latest technologies and follow industry best practices to deliver high-quality solutions.</p>
                   </div>
                   <!-- /.card-body -->
                 </div>
                 <!-- /.collapse -->
               </div>
               <!-- /.card -->
               <div class="card accordion-item">
                 <div class="card-header" id="accordion-heading-3-4">
                   <button class="collapsed fs-15" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-3-4" aria-expanded="false" aria-controls="accordion-collapse-3-4">How do I monitor the progress of my project when working with remote MERN Stack developers from RapidBrains?</button>
                 </div>
                 <!-- /.card-header -->
                 <div id="accordion-collapse-3-4" class="collapse" aria-labelledby="accordion-heading-3-4" data-bs-target="#accordion-3">
                   <div class="card-body">
                     <p class="fs-14">We understand the importance of transparency and communication in remote working environments. Our MERN Stack developers will provide regular progress updates and maintain open communication channels with you throughout the development process. Additionally, we can utilize project management tools and platforms that you prefer, ensuring you have full visibility into your project's progress.</p>
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






@include('services.logo')
<!-- /section -->

<!--section ends-->




<!--section starts-->
@endsection
<!--section ends-->



