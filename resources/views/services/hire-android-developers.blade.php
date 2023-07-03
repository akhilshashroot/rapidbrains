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
                 <h1 class="display-1 fs-62 mb-5 mx-md-10 mx-lg-0">Hire Android Developers Remotely in 24 Hours!</h1>
                 <p class="lead fs-16 mb-8">Hire expert Android developers from RapidBrains to realize your groundbreaking app ideas.</p>
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
                 <h3 class="display-4 mb-4">Strengthen Your Team by Hiring Remote Android Developers Dedicated to Your Project</h3>
                 <p class="lead fs-16 mb-0">Expand your team's capabilities by hiring remote dedicated Android developers. Unlock the power of mobile app development and achieve seamless user experiences with their expertise and dedication.</p>
                 <a href="https://talents.rapidbrains.com/filter?skill=android" class="btn btn-primary rounded-pill" style="margin-top: 25px; color: #fff;">Hire Android Developers</a>
               </div>
               <!--/column -->
               <div class="col-lg-6">
                 <div class="accordion accordion-wrapper" id="accordionExample">
                   <div class="card plain accordion-item">
                     <div class="card-header" id="headingOne">
                       <button class="collapsed fs-15" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Expertise in Android SDK, Java, and Kotlin for robust app development.</button>
                     </div>
                     <!--/.card-header -->
                     <!--/.accordion-collapse -->
                   </div>
                   <!--/.accordion-item -->
                   <div class="card plain accordion-item">
                     <div class="card-header" id="headingTwo">
                       <button class="collapsed fs-15" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Proven experience in designing intuitive user interfaces and smooth user experiences.</button>
                     </div>
                     <!--/.card-header -->
                     <!--/.accordion-collapse -->
                   </div>
                   <!--/.accordion-item -->
                   <div class="card plain accordion-item">
                     <div class="card-header" id="headingThree">
                       <button class="collapsed fs-15" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Knowledge of APIs, third-party libraries, and integration for enhanced functionality.</button>
                     </div>
                     <!--/.card-header -->
                     <!--/.accordion-collapse -->
                   </div>
                   <!--/.accordion-item -->
                   <div class="card plain accordion-item">
                     <div class="card-header" id="headingFour">
                       <button class="collapsed fs-15" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">Adaptable to different Android versions and devices, ensuring broad compatibility.</button>
                     </div>
                     <!--/.card-header -->

                     <!--/.accordion-collapse -->
                   </div>
                   <!--/.accordion-item -->
                   <div class="card plain accordion-item">
                     <div class="card-header" id="headingFour">
                       <button class="collapsed fs-15" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">Strong debugging and problem-solving skills for efficient bug resolution.</button>
                     </div>
                     <!--/.card-header -->

                     <!--/.accordion-collapse -->
                   </div>
                   <!--/.accordion-item -->
                   <div class="card plain accordion-item">
                     <div class="card-header" id="headingFour">
                       <button class="collapsed fs-15" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">Current on industry trends & best practices for cutting-edge app development.</button>
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
    <h2 class="display-4 mb-3 text-center">Why RapidBrains for Hiring Android Developers?</h2>
    <p class="lead text-center mb-10 px-md-16 px-lg-0">Our Benefits</p>
    <div class="row">
      <div class="col-lg-6 mb-0">
        <div id="accordion-1" class="accordion-wrapper">
          <div class="card accordion-item">
            <div class="card-header" id="accordion-heading-1-1">
              <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-1-1" aria-expanded="true" aria-controls="accordion-collapse-1-1">Experienced Android Developers</button>
            </div>
            <!-- /.card-header -->
            <div id="accordion-collapse-1-1" class="accordion-collapse collapse show" aria-labelledby="accordion-heading-1-1" data-bs-target="#accordion-1">
              <div class="card-body">
                <p>Our Android developers are highly experienced and talented in creating secure,
                  responsive, and customized Android applications.</p>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.collapse -->
          </div>
          <!-- /.card -->
          <div class="card accordion-item">
            <div class="card-header" id="accordion-heading-1-2">
              <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-1-2" aria-expanded="true" aria-controls="accordion-collapse-1-2">Highly Flexible</button>
            </div>
            <!-- /.card-header -->
            <div id="accordion-collapse-1-2" class="accordion-collapse collapse show" aria-labelledby="accordion-heading-1-2" data-bs-target="#accordion-1">
              <div class="card-body">
                <p>RapidBrains offer flexible solutions to enterprises in teaming the Android
                  developers as needed to meet your business objectives.</div>
              <!-- /.card-body -->
            </div>
            <!-- /.collapse -->
          </div>
          <!-- /.card -->
          <div class="card accordion-item">
            <div class="card-header" id="accordion-heading-1-3">
              <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-1-3" aria-expanded="true" aria-controls="accordion-collapse-1-3">Enterprise Scalability & Performance</button>
            </div>
            <!-- /.card-header -->
            <div id="accordion-collapse-1-3" class="accordion-collapse collapse show" aria-labelledby="accordion-heading-1-3" data-bs-target="#accordion-1">
              <div class="card-body">
                <p>Our Android developers develop and deliver Android applications by offering
                  enterprise-level performance and scalability</p>
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
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-2-2" aria-expanded="true" aria-controls="accordion-collapse-2-2">Customized App Development Services</button>
                </div>
                <!-- /.card-header -->
                <div id="accordion-collapse-2-2" class="accordion-collapse collapse show" aria-labelledby="accordion-heading-2-2" data-bs-target="#accordion-2">
                  <div class="card-body">
                    <p>Android app developers at RapidBrains are well versed in Android technology
                      and provide customized unique solutions.</p>
                    </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.collapse -->
              </div>
              <!-- /.card -->
        <div id="accordion-2" class="accordion-wrapper">
          <div class="card accordion-item">
            <div class="card-header" id="accordion-heading-2-2">
              <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-2-2" aria-expanded="true" aria-controls="accordion-collapse-2-2">Cost-Effective Service</button>
            </div>
            <!-- /.card-header -->
            <div id="accordion-collapse-2-2" class="accordion-collapse collapse show" aria-labelledby="accordion-heading-2-2" data-bs-target="#accordion-2">
              <div class="card-body">
                <p>Android application development services offered by our Android Developers
                  are competitively priced and highly affordable.

</p>
                </div>
              <!-- /.card-body -->
            </div>
            <!-- /.collapse -->
          </div>
          <!-- /.card -->
          <div class="card accordion-item">
            <div class="card-header" id="accordion-heading-2-3">
              <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-2-3" aria-expanded="true" aria-controls="accordion-collapse-2-3">On-time Project Delivery</button>
            </div>
            <!-- /.card-header -->
            <div id="accordion-collapse-2-3" class="accordion-collapse collapse show" aria-labelledby="accordion-heading-2-3" data-bs-target="#accordion-2">
              <div class="card-body">
                <p>Experience and development practice skills result in the rapid development of
                  Android applications with on-time project delivery.</p>
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
             <h2 class="fs-15 text-uppercase text-muted mb-3">Hire Android Developers in 24 Hours</h2>
             <h3 class="display-4 mb-10 px-xl-10">4-Steps Easy Strategy To Hire Top Android Developers Remotely</h3>
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
                   <h3 class="display-4 mb-10 px-xxl-15">Android Aces Beyond Borders: Unleash Remote Development Brilliance!</h3>
                   <p style="margin-top: -25px;"> Get experienced remote Android developers for your projects. Quality results, efficient communication, and global talent pool. Start today!.</p>
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
                 <h4>Versatility</h4>
                 <p class="mb-0">Android developers have the flexibility to create diverse applications for smartphones, tablets, wearables, and other devices.</p>
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
                 <h4>Wide User Base</h4>
                 <p class="mb-0">Android has a large user base globally, providing developers with a broader market and potential for app success.</p>
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
                 <h4>Open-Source Platform</h4>
                 <p class="mb-0">Android's open-source nature allows developers to customize and modify the platform according to their needs.</p>
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
                 <h4>High Demand</h4>
                 <p class="mb-0">The demand for Android apps continues to grow, offering developers abundant opportunities for employment and freelance work.</p>
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
                 <h4>Rich Development Tools</h4>
                 <p class="mb-0">Android provides a comprehensive set of development tools, libraries, and frameworks that facilitate app creation.</p>
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
                 <h4>Integration Capabilities</h4>
                 <p class="mb-0">Android apps can seamlessly integrate with other applications, services, and hardware devices, enhancing functionality.</p>
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
                 <h4>Extensive Developer Community</h4>
                 <p class="mb-0">Android has a vibrant community of developers who actively share knowledge, resources, and support.</p>
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
                 <h4>Google Play Store</h4>
                 <p class="mb-0">Android developers can distribute their apps through the Google Play Store, reaching millions of potential users.</p>
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
                   <button class="collapsed fs-15" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-3-1" aria-expanded="false" aria-controls="accordion-collapse-3-1">How do I find remote Android developers?</button>
                 </div>
                 <!-- /.card-header -->
                 <div id="accordion-collapse-3-1" class="collapse" aria-labelledby="accordion-heading-3-1" data-bs-target="#accordion-3">
                   <div class="card-body">
                     <p class="fs-14">You can find remote Android developers through various platforms like job boards, freelance websites, and professional networking sites. You can also partner with remote staffing agencies or reach out to development firms specializing in remote work.</p>
                   </div>
                   <!-- /.card-body -->
                 </div>
                 <!-- /.collapse -->
               </div>
               <!-- /.card -->
               <div class="card accordion-item">
                 <div class="card-header" id="accordion-heading-3-2">
                   <button class="collapsed fs-15" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-3-2" aria-expanded="false" aria-controls="accordion-collapse-3-2">What qualifications should I look for in remote Android developers?</button>
                 </div>
                 <!-- /.card-header -->
                 <div id="accordion-collapse-3-2" class="collapse" aria-labelledby="accordion-heading-3-2" data-bs-target="#accordion-3">
                   <div class="card-body">
                     <p class="fs-14">Look for developers with strong proficiency in Android SDK, Java, Kotlin, and relevant frameworks. Experience in app development, knowledge of design patterns, and familiarity with version control systems are also important.</p>
                   </div>
                   <!-- /.card-body -->
                 </div>
                 <!-- /.collapse -->
               </div>
               <!-- /.card -->
               <div class="card accordion-item">
                 <div class="card-header" id="accordion-heading-3-3">
                   <button class="collapsed fs-15" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-3-3" aria-expanded="false" aria-controls="accordion-collapse-3-3">How can I assess the skills of remote Android developers?</button>
                 </div>
                 <!-- /.card-header -->
                 <div id="accordion-collapse-3-3" class="collapse" aria-labelledby="accordion-heading-3-3" data-bs-target="#accordion-3">
                   <div class="card-body">
                     <p class="fs-14">Conduct technical interviews and code assessments to evaluate their knowledge and problem-solving abilities. Additionally, reviewing their past projects and requesting code samples can provide insights into their coding style and quality.</p>
                   </div>
                   <!-- /.card-body -->
                 </div>
                 <!-- /.collapse -->
               </div>
               <!-- /.card -->
               <div class="card accordion-item">
                 <div class="card-header" id="accordion-heading-3-4">
                   <button class="collapsed fs-15" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-3-4" aria-expanded="false" aria-controls="accordion-collapse-3-4">How can remote Android developers ensure effective communication?</button>
                 </div>
                 <!-- /.card-header -->
                 <div id="accordion-collapse-3-4" class="collapse" aria-labelledby="accordion-heading-3-4" data-bs-target="#accordion-3">
                   <div class="card-body">
                     <p class="fs-14">Remote developers should have good communication skills and be adept at using collaboration tools like video conferencing, project management software, and messaging platforms to maintain regular communication and updates.</p>
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
