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
                 <h1 class="display-1 fs-62 mb-5 mx-md-10 mx-lg-0">Hire Just the Best DevOps Devlopers</h1>
                 <p class="lead fs-18 mb-8">Our top-notch DevOps developers can help you improve the quality of your app development because they are adept at coming up with original ideas.</p>
                 <a href="https://talents.rapidbrains.com/filter?skill=devops" class="btn btn-lg btn-primary btn-icon btn-icon-end">Hire Developers <i class="uil uil-arrow-up-right"></i></a>
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

   <!--section ends-->

   <!--section starts-->

   <section class="wrapper bg-light">
  <div class="container py-14 py-md-16">
    <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
      <div class="col-lg-5 order-lg-2">
        <figure><img class="w-auto" style="width: 500px; heighr: 500px;" src="https://www.rapidbrains.com/assets/img/services/rapidbrains-devops.webp" srcset="https://www.rapidbrains.com/assets/img/services/rapidbrains-devops.webp" alt="DevOps Logo" /></figure>
      </div>
      <!--/column -->
      <div class="col-lg-7">
        <h2 class="fs-15 text-uppercase text-line text-primary mb-3">Our Benefits</h2>
        <h3 class="display-2 mb-7">Why hire remote DevOps developers from RapidBrains?</h3>
        <p>Unleash the expertise of our remote DevOps experts to turn your ideas into profitable companies. Utilize their wealth of experience to increase output and streamline processes. Trust our experienced staff to work smoothly with your current employees, ensuring extraordinary achievements and impressive results.</p>
        <div class="accordion accordion-wrapper" id="accordionExample">
          <div class="card plain accordion-item">
            <div class="card-header" id="headingOne">
              <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Cost-effective</button>
            </div>
            <!--/.card-header -->
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
              <div class="card-body">
                <p>With RapidBrains you can hire pre-screened remote talents with strong technical and communication skills at unbeatable rates when compared to our competitors.</p>
              </div>
              <!--/.card-body -->
            </div>
            <!--/.accordion-collapse -->
          </div>
          <!--/.accordion-item -->
          <div class="card plain accordion-item">
            <div class="card-header" id="headingTwo">
              <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Upskilling and training</button>
            </div>
            <!--/.card-header -->
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
              <div class="card-body">
                <p>We upskill and train your employees from time-to-time to help them with a staged career progression. Or if you want to train an employee for a specific skillset we got you covered.</p>
              </div>
              <!--/.card-body -->
            </div>
            <!--/.accordion-collapse -->
          </div>
          <!--/.accordion-item -->
          <div class="card plain accordion-item">
            <div class="card-header" id="headingThree">
              <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"> Custom Hiring Process </button>
            </div>
            <!--/.card-header -->
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
              <div class="card-body">
                <p>Our recruiting team can adapt to any of your processes - be it a machine test, multiple rounds of interviews, our candidates will show their best.</p>
              </div>
              <!--/.card-body -->
            </div>
            <!--/.accordion-collapse -->
          </div>
          <!--/.accordion-item -->
          <div class="card plain accordion-item">
            <div class="card-header" id="headingFour">
              <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">No lock-in period</button>
            </div>
            <!--/.card-header -->
            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
              <div class="card-body">
                <p>There’s no long term contract or commitment required. Want someone for 2 weeks? Or maybe 2 months? We got you!</p>
              </div>
              <!--/.card-body -->
            </div>
            <!--/.accordion-collapse -->
          </div>
          <!--/.accordion-item -->
        </div>
        <!--/.accordion -->
      </div>
      <!--/column -->
    </div>
    <!--/.row -->
  </div>
  <!-- /.container -->
</section>
<!-- /section -->

<!--section ends-->

<!--Screening Process Starts-->

<section class="wrapper bg-light" style="margin-top: -85px;">
  <div class="container py-14 py-md-16">
    <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
        <!--/column -->
      <div class="col-lg-5">
        <!--<h2 class="fs-15 text-uppercase text-muted mb-3">What We Do?</h2>-->
        <h3 class="display-4 mb-5">Our Service Is Meticulously Tailored to Meet Your Specific Requirements</h3>
        <p>RapidBrains enables you to hire employees effortlessly, eliminating the need for setting up a local entity. We handle hiring, onboarding, HR tasks, and ensure compliance with local labor laws, including minimum wage, taxes, health insurance, and termination procedures.</p>
            <a href="https://www.rapidbrains.com/process" class="btn btn-primary rounded-pill" style="color: #ffffff;">Learn More</a>
      </div>
      <!--/column -->
      <div class="col-lg-7 order-lg-2">
          <div class="row gx-md-5 gy-5">
          <div class="col-md-5 offset-md-1 align-self-end">
            <div class="card bg-pale-yellow">
              <div class="card-body">
                <img src="https://www.rapidbrains.com/assets/img/icons/lineal/telephone-3.svg" class="svg-inject icon-svg icon-svg-md text-yellow mb-3" alt="telephone" loading="lazy"/>
                <h4>Attitude Check</h4>
                <p class="mb-0">Communication and attitude are crucial in candidate screening. We ensure they're a good fit for your company.</p>
              </div>
              <!--/.card-body -->
            </div>
            <!--/.card -->
          </div>
          <!--/column -->
          <div class="col-md-6 align-self-end">
            <div class="card bg-pale-red">
              <div class="card-body">
                <img src="https://www.rapidbrains.com/assets/img/icons/lineal/shield.svg" class="svg-inject icon-svg icon-svg-md text-red mb-3" alt="shield" loading="lazy"/>
                <h4>Reviewing Skill Sets</h4>
                <p class="mb-0">Skill-set evaluation is crucial. RapidBrains administers technology-specific screening tests to ensure candidates possess the necessary expertise.</p>
              </div>
              <!--/.card-body -->
            </div>
            <!--/.card -->
          </div>
          <!--/column -->
          <div class="col-md-5">
            <div class="card bg-pale-leaf">
              <div class="card-body">
                <img src="https://www.rapidbrains.com/assets/img/icons/lineal/cloud-computing-3.svg" class="svg-inject icon-svg icon-svg-md text-leaf mb-3" alt="cloud-computing" loading="lazy"/>
                <h4>Experience Screening</h4>
                <p class="mb-0">RapidBrains meticulously evaluates employee experience through rigorous interviews and tests.</p>
              </div>
              <!--/.card-body -->
            </div>
            <!--/.card -->
          </div>
          <!--/column -->
          <div class="col-md-6 align-self-start">
            <div class="card bg-pale-primary">
              <div class="card-body">
                <img src="https://www.rapidbrains.com/assets/img/icons/lineal/analytics.svg" class="svg-inject icon-svg icon-svg-md text-primary mb-3" alt="analytics" loading="lazy"/>
                <h4>Background Verification</h4>
                <p class="mb-0">We conduct extensive background checks to verify the authenticity of our employees.</p>
              </div>
              <!--/.card-body -->
            </div>
            <!--/.card -->
          </div>
          <!--/column -->
        </div>
        <!--/.row -->
      </div>

    </div>
    <!--/.row -->
  </div>
  <!-- /.container -->
</section>
<!-- /section -->

<!--Screening process ends-->

<!--Talent Pool-->

<!--Section Starts-->

<section class="wrapper bg-soft-red">
  <div class="container py-14 py-md-16">
    <div class="row mb-8">
      <div class="col-lg-8 mx-auto text-center">
        <h2 class="fs-16 text-uppercase text-black mb-3">Connect with Top Talent Worldwide!</h2>
        <h3 class="display-4 mb-0">Trusted by over 1.2K customers, we help you tap into a vast pool of skilled DevOps developers</h3>
      </div>
      <!-- /column -->
    </div>
    <!-- /.row -->
    <div class="row">
      <div class="col-lg-5 mx-auto text-center">
      <a href="https://talents.rapidbrains.com/filter?skill=devops" class="btn btn-lg btn-primary btn-icon btn-icon-end">Hire DevOps Developers <i class="uil uil-arrow-up-right"></i></a>
      </div>
      <!-- /column -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container -->
</section>
<!-- /section -->

<!--Section Ends-->


<!--Section Starts-->

<section class="wrapper">
  <div class="container py-14 py-md-16">
    <div class="row d-flex align-items-start gy-10">
      <div class="col-lg-5 position-lg-sticky" style="top: 8rem;">
        <h3 class="display-3 mb-5">Must-Have Skills to Look for When Hiring Remote DevOps Developers</h3>
        <p class="mb-7">Your Roadmap to Essential Skills for Remote DevOps Developer Opportunities. Explore the Expertise that Distinguishes Exceptional Remote DevOps Developers, Accelerating Project Success.</p>
        <!--<a href="https://talents.rapidbrains.com/filter?skill=react" class="btn btn-lg btn-primary btn-icon btn-icon-end">Hire Now <i class="uil uil-arrow-up-right"></i></a>-->
      </div>
      <!-- /column -->
      <div class="col-lg-6 ms-auto">
        <div class="card bg-soft-fuchsia mb-6">
          <div class="card-body d-flex flex-row">
            <div>
              <img src="https://www.rapidbrains.com/assets/img/icons/lineal/browser.svg" class="svg-inject icon-svg icon-svg-md text-aqua me-5" alt="Browser" /> 
            </div>
            <div>
              <h3 class="fs-21 mb-2">Software Development Experience</h3>
              <p class="mb-0">Strong software dev understanding & effective collaboration for streamlined development.</p>
            </div>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
        <div class="card bg-soft-aqua mb-6">
          <div class="card-body d-flex flex-row">
            <div>
            <img src="https://www.rapidbrains.com/assets/img/icons/lineal/tools.svg" class="svg-inject icon-svg icon-svg-md text-grape me-5" alt="Tools" />
              
            </div>
            <div>
              <h3 class="fs-21 mb-2">Familiarity with Automation Tools</h3>
              <p class="mb-0">Automation tools for efficient software delivery. Expertise in build, test, and deployment pipelines.</p>
            </div>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
        <div class="card bg-soft-yellow mb-6">
          <div class="card-body d-flex flex-row">
            <div>
              <img src="https://www.rapidbrains.com/assets/img/icons/lineal/settings-3.svg" class="svg-inject icon-svg icon-svg-md text-yellow me-5" alt="Implementation" /> 
            </div>
            <div>
              <h3 class="fs-21 mb-2"> Implementation Management</h3>
              <p class="mb-0">Proficiency in config management for automated provisioning and scalable infrastructure.</p>
            </div>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
        <div class="card bg-soft-leaf mb-6">
          <div class="card-body d-flex flex-row">
            <div>
              <img src=" https://www.rapidbrains.com/assets/img/icons/lineal/cloud-computing.svg" class="svg-inject icon-svg icon-svg-md text-leaf me-5" alt="cloud-computing" />
            </div>
            <div>
              <h3 class="fs-21 mb-2">Cloud Computing and Infrastructure as Code</h3>
              <p class="mb-0">Cloud platform experience & Infrastructure as Code proficiency for resource provisioning and management.</p>
            </div>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
        
        <div class="card bg-soft-orange mb-6">
          <div class="card-body d-flex flex-row">
            <div>
            <img src="https://www.rapidbrains.com/assets/img/icons/lineal/minimize.svg" class="svg-inject icon-svg icon-svg-md text-aqua me-5" alt="minimize" />
            </div>
            <div>
              <h3 class="fs-21 mb-2">Containerization and Orchestration</h3>
              <p class="mb-0">Docker and Kubernetes expertise for containerization, deployment, and scaling automation.</p>
            </div>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
        <div class="card bg-soft-grape">
          <div class="card-body d-flex flex-row">
            <div>
              <img src="https://www.rapidbrains.com/assets/img/icons/lineal/computer.svg" class="svg-inject icon-svg icon-svg-md text-orange me-5" alt="computer" />
            </div>
            <div>
              <h3 class="fs-21 mb-2">Monitoring and Logging</h3>
              <p class="mb-0">Monitoring proficiency for proactive issue identification and resolution. Effective setup of monitoring and logging.</p>
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

<!--Section Ends-->

<!--Section Starts-->

<section class="wrapper bg-soft-yellow">
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

   <!--Section-->

<!--section ends-->

@include('services.logo')
<!-- /section -->

<!--section ends-->




<!--section starts-->
@endsection
