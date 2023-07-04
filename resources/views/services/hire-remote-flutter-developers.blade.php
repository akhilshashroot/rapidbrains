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
                 <h1 class="display-1 fs-62 mb-5 mx-md-10 mx-lg-0">Hire Flutter Developers Remotely in 24 Hours!</h1>
                 <p class="lead fs-18 mb-8">Unlock the Potential of Global Flutter Developers for Trusted, <br> Innovative Cross-Platform Solutions!</p>
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
                 <h3 class="display-4 mb-4"> Supercharge Your Team's Success with Remote Flutter Developers.</h3>
                 <p class="lead fs-16 mb-0">Empower your team with remote Flutter developers to supercharge success. Leverage their expertise for high-quality app development and accelerated growth.</p><br>
                 <a href="https://talents.rapidbrains.com/filter?skill=flutter" class="btn btn-primary rounded-pill" style="color: #fff;">Hire Flutter Developers</a>
               </div>
               <!--/column -->
               <div class="col-lg-6">
                 <div class="accordion accordion-wrapper" id="accordionExample">
                   <div class="card plain accordion-item">
                     <div class="card-header" id="headingOne">
                       <button class="collapsed fs-15" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Scale your projects with top-notch remote Flutter developers from RapidBrains.</button>
                     </div>
                     <!--/.card-header -->
                     <!--/.accordion-collapse -->
                   </div>
                   <!--/.accordion-item -->
                   <div class="card plain accordion-item">
                     <div class="card-header" id="headingTwo">
                       <button class="collapsed fs-15" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Achieve flawless performance and exceptional functionality remotely</button>
                     </div>
                     <!--/.card-header -->
                     <!--/.accordion-collapse -->
                   </div>
                   <!--/.accordion-item -->
                   <div class="card plain accordion-item">
                     <div class="card-header" id="headingThree">
                       <button class="collapsed fs-15" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Trust our Flutter developers for prompt updates and maintenance.</button>
                     </div>
                     <!--/.card-header -->
                     <!--/.accordion-collapse -->
                   </div>
                   <!--/.accordion-item -->
                   <div class="card plain accordion-item">
                     <div class="card-header" id="headingFour">
                       <button class="collapsed fs-15" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">Fortify your Flutter applications' security and optimize your workflows with our 
                        experts</button>
                     </div>
                     <!--/.card-header -->

                     <!--/.accordion-collapse -->
                   </div>
                   <!--/.accordion-item -->
                   <div class="card plain accordion-item">
                     <div class="card-header" id="headingFour">
                       <button class="collapsed fs-15" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">Seamlessly handle cross-platform integration, security, and automation remotely.</button>
                     </div>
                     <!--/.card-header -->

                     <!--/.accordion-collapse -->
                   </div>
                   <!--/.accordion-item -->
                   <div class="card plain accordion-item">
                     <div class="card-header" id="headingFour">
                       <button class="collapsed fs-15" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">Stay ahead with the latest Flutter updates and security patches</button>
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

     <section class="wrapper bg-soft-red" style="padding-top: 50px;">
         <div class="container py-14 py-md-5">
           <h2 class="display-4 mb-3 text-center">How Remote Flutter Developers<br> Make differences
         </h2>
           <p class="lead text-center mb-10 px-md-16 px-lg-0">Benefits</p>
           <div class="row">
             <div class="col-lg-6 mb-0">
               <div id="accordion-1" class="accordion-wrapper">
                 <div class="card accordion-item">
                   <div class="card-header" id="accordion-heading-1-1">
                     <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-1-1" aria-expanded="true" aria-controls="accordion-collapse-1-1">Flexibility</button>
                   </div>
                   <!-- /.card-header -->
                   <div id="accordion-collapse-1-1" class="accordion-collapse collapse show" aria-labelledby="accordion-heading-1-1" data-bs-target="#accordion-1">
                     <div class="card-body">
                       <p>By teaming up remote Flutter developers, you may scale Flutter developers as
                         necessary to achieve your business goals.
                         </p>
                     </div>
                     <!-- /.card-body -->
                   </div>
                   <!-- /.collapse -->
                 </div>
                 <!-- /.card -->
                 <div class="card accordion-item">
                   <div class="card-header" id="accordion-heading-1-2">
                     <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-1-2" aria-expanded="true" aria-controls="accordion-collapse-1-2">Experienced Flutter Developers</button>
                   </div>
                   <!-- /.card-header -->
                   <div id="accordion-collapse-1-2" class="accordion-collapse collapse show" aria-labelledby="accordion-heading-1-2" data-bs-target="#accordion-1">
                     <div class="card-body">
                       <p>Our Flutter developers are highly experienced and talented in creating secure,
                         responsive, and compatible Flutter mobile applications.
                          </div>
                     <!-- /.card-body -->
                   </div>
                   <!-- /.collapse -->
                 </div>
                 <!-- /.card -->
                 <div class="card accordion-item">
                   <div class="card-header" id="accordion-heading-1-3">
                     <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-1-3" aria-expanded="true" aria-controls="accordion-collapse-1-3">Customized App Development Services</button>
                   </div>
                   <!-- /.card-header -->
                   <div id="accordion-collapse-1-3" class="accordion-collapse collapse show" aria-labelledby="accordion-heading-1-3" data-bs-target="#accordion-1">
                     <div class="card-body">
                       <p>Remote Flutter experts are well versed in Flutter technology that offers
                         customized and creative unique mobile applications.</p>
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
                         <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-2-2" aria-expanded="true" aria-controls="accordion-collapse-2-2">Cost and Time Efficiency</button>
                       </div>
                       <!-- /.card-header -->
                       <div id="accordion-collapse-2-2" class="accordion-collapse collapse show" aria-labelledby="accordion-heading-2-2" data-bs-target="#accordion-2">
                         <div class="card-body">
                           <p>Hiring Flutter developers remotely saves time and cost by making the
                             procedures swift and efficient.</p>
                           </div>
                         <!-- /.card-body -->
                       </div>
                       <!-- /.collapse -->
                     </div>
                     <!-- /.card -->
               <div id="accordion-2" class="accordion-wrapper">
                 <div class="card accordion-item">
                   <div class="card-header" id="accordion-heading-2-2">
                     <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-2-2" aria-expanded="true" aria-controls="accordion-collapse-2-2">Quick Support and Maintenance Response</button>
                   </div>
                   <!-- /.card-header -->
                   <div id="accordion-collapse-2-2" class="accordion-collapse collapse show" aria-labelledby="accordion-heading-2-2" data-bs-target="#accordion-2">
                     <div class="card-body">
                       <p>By hiring remote Flutter developers, quick support and maintenance in
                         emergencies, queries or concerns are available round the clock
     
       </p>
                       </div>
                     <!-- /.card-body -->
                   </div>
                   <!-- /.collapse -->
                 </div>
                 <!-- /.card -->
                 <div class="card accordion-item">
                   <div class="card-header" id="accordion-heading-2-3">
                     <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-2-3" aria-expanded="true" aria-controls="accordion-collapse-2-3">Clean Coding Practice</button>
                   </div>
                   <!-- /.card-header -->
                   <div id="accordion-collapse-2-3" class="accordion-collapse collapse show" aria-labelledby="accordion-heading-2-3" data-bs-target="#accordion-2">
                     <div class="card-body">
                       <p>Guaranteed top-notch Flutter apps that are secure, reliable, and bug-free by
                         adhering to effective and clean development techniques.
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

     <!--section starts-->

     <section class="wrapper bg-light">
       <div class="container py-14 py-md-16 text-center">
         <div class="row">
           <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">
             <h2 class="fs-15 text-uppercase text-muted mb-3">Hire Flutter Developers in 24 Hours</h2>
             <h3 class="display-4 mb-10 px-xl-10">4-Steps Easy Strategy To Hire Top Flutter Developers Remotely</h3>
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


     <!--section ends-->

     <!--section starts-->

     <section class="wrapper bg-light" style="margin-top: -50px;">
       <div class="container py-14 py-md-16">
           <div class="row text-center">
               <div class="col-xl-10 mx-auto">
                   <h3 class="display-4 mb-10 px-xxl-15">Drive Success with Skilled Remote Flutter Developers from 
                    RapidBrains.</h3>
                   <p style="margin-top: -25px;">Unleash the Potential of Expert Flutter Developers, Igniting Innovation and Achieving 
                    Remarkable Results</p>
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
                 <h4>Empowering Flutter Development</h4>
                 <p class="mb-0">Experience the forefront of app development guided by our 
                    proficient Flutter developers, taking your digital products to new heights.</p>
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
                 <h4>Turbocharge Flutter Development</h4>
                 <p class="mb-0"> Streamline processes and automate tasks, enabling your 
                    team to deliver high-quality software with speed and efficiency.</p>
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
                 <p class="mb-0">Gain a competitive edge in a dynamic market with our solutions. 
                    Propel your business forward and exceed customer expectations with innovative 
                    and reliable flutter applications</p>
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
                 <p class="mb-0">Ensure uninterrupted operations for Flutter developers with 
                    our solutions, minimizing disruptions and maximizing uptime for your software.</p>
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
                 <h4>Seamless Deployment</h4>
                 <p class="mb-0">Boost productivity as a Flutter developer with seamless integration, 
                    continuous delivery, and efficient deployment - the pillars of modern software development..</p>
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
                 <h4>Agile Release Cycle</h4>
                 <p class="mb-0">Stay ahead of the competition with our solutions that enable rapid 
                    development cycles, quick feature deployments, and cutting-edge software releases.</p>
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
                <h4>Robust Software Delivery</h4>
                <p class="mb-0">Fortify your Flutter applications with our comprehensive testing 
                    and monitoring tools. Identify and address issues early and deliver top-notch software with unwavering stability.</p>
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
                <h4>Collaborative Flutter Development:</h4>
                <p class="mb-0">Promote collaboration, streamline teamwork, and deliver tailored Flutter apps that align with business objectives and customer needs.</p>
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
                   <button class="collapsed fs-15" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-3-1" aria-expanded="false" aria-controls="accordion-collapse-3-1"> What level of expertise do Flutter developers at RapidBrains have?</button>
                 </div>
                 <!-- /.card-header -->
                 <div id="accordion-collapse-3-1" class="collapse" aria-labelledby="accordion-heading-3-1" data-bs-target="#accordion-3">
                   <div class="card-body">
                     <p class="fs-14">At RapidBrains, our Flutter developers are highly skilled and experienced. They have a 
                        proven track record of building successful cross-platform mobile applications using Flutter. Our 
                        developers stay updated with the latest Flutter advancements and follow best practices to deliver 
                        exceptional results</p>
                   </div>
                   <!-- /.card-body -->
                 </div>
                 <!-- /.collapse -->
               </div>
               <!-- /.card -->
               <div class="card accordion-item">
                 <div class="card-header" id="accordion-heading-3-2">
                   <button class="collapsed fs-15" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-3-2" aria-expanded="false" aria-controls="accordion-collapse-3-2">Can I hire dedicated remote Flutter developers from RapidBrains?</button>
                 </div>
                 <!-- /.card-header -->
                 <div id="accordion-collapse-3-2" class="collapse" aria-labelledby="accordion-heading-3-2" data-bs-target="#accordion-3">
                   <div class="card-body">
                     <p class="fs-14">Certainly! RapidBrains provides the option to hire dedicated remote Flutter developers for 
                        your project. By hiring dedicated developers, you can ensure their full focus on your project's 
                        specific requirements, leading to efficient development and seamless collaboration.</p>
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
                     <p class="fs-14">The hiring process at RapidBrains is straightforward. After sharing your project 
                        requirements, our team evaluates them and presents you with suitable profiles of skilled Flutter 
                        developers. You can review the profiles, conduct interviews, and select the developer who best 
                        suits your project. We aim to streamline the onboarding process for a quick project initiation.</p>
                   </div>
                   <!-- /.card-body -->
                 </div>
                 <!-- /.collapse -->
               </div>
               <!-- /.card -->
               <div class="card accordion-item">
                 <div class="card-header" id="accordion-heading-3-4">
                   <button class="collapsed fs-15" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-3-4" aria-expanded="false" aria-controls="accordion-collapse-3-4"> Is the confidentiality of my project information ensured?</button>
                 </div>
                 <!-- /.card-header -->
                 <div id="accordion-collapse-3-4" class="collapse" aria-labelledby="accordion-heading-3-4" data-bs-target="#accordion-3">
                   <div class="card-body">
                     <p class="fs-14"> Yes, RapidBrains understands the importance of confidentiality and data security. We 
                        prioritize the protection of your project information. We are open to signing non-disclosure 
                        agreements (NDAs) to safeguard the confidentiality and privacy of your sensitive data</p>
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

   <!--Section-->

<!--section ends-->

@include('services.logo')
<!-- /section -->

<!--section ends-->




<!--section starts-->
@endsection
