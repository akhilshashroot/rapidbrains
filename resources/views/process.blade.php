@extends('layout.layoutheader2')

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
   
<section class="wrapper image-wrapper bg-image" data-image-src="https://www.rapidbrains.com/assets/img/photos/RapidBrains-footerbg.webp">
    <div class="container pt-10 pt-md-14 pb-14 pb-md-0">
       <div class="row gx-md-8 gx-lg-12 gy-3 gy-lg-0 mb-13" >
         <div class="text-center" style="padding-top: 100px;">
           <h3 class="display-1 fs-50 lh-xxs mb-0">Get access to the <br> best brains in the world</h3><br>
         </div>
         <!-- /column -->
         <div class="text-center" style="padding-bottom: 175px;">
           <p class="lead fs-20 my-3">RapidBrains is a talent marketplace which helps companies to <br> build their remote team rapidly</p>
          
         </div>
         <!-- /column -->
       </div>
       <!-- /.row -->
       {{-- <div class="position-relative">
         <!--<div class="shape bg-dot primary rellax w-17 h-21" data-rellax-speed="1" style="top: -2.5rem; right: -2.7rem;"></div>-->
         <figure class="rounded mb-md-n20"><img src="https://www.rapidbrains.com/assets/img/common/our-capabilities.webp" srcset="https://www.rapidbrains.com/assets/img/common/our-capabilities.webp" alt="about18" /></figure>
       </div> --}}
     </div>

</section>
<!-- /section -->















{{-- @extends('layout.layout')
@section('section')--}}
<style>
figure img {
    width: 90%  !important;
    /* max-width: 100%; */
    height: auto !important;
}
@media (min-width: 992px){
.mb-lg-16 {
    margin-bottom: 5rem !important;
}
}
</style>
  {{-- <section class="wrapper bg-gray"> 
  <div class="container pt-8 pt-md-14">
    <div class="row gx-lg-0 gx-xl-8 gy-10 gy-md-13 gy-lg-0 mb-7 mb-md-10 mb-lg-16 align-items-center">
      <div class="col-md-8 offset-md-2 col-lg-6 offset-lg-1 position-relative order-lg-2" data-cue="zoomIn">
        <div class="shape bg-dot primary rellax w-17 h-19" data-rellax-speed="1" style="top: -1.7rem; left: -1.5rem;"></div>
        <div class="shape rounded bg-soft-primary rellax d-md-block" data-rellax-speed="0" style="bottom: -1.8rem; right: -0.8rem; width: 85%; height: 90%;"></div>
        <figure class="rounded"><img src="https://www.rapidbrains.com/assets/img/photos/RB/RB2/the_process.jpg" srcset="https://www.rapidbrains.com/assets/img/photos/RB/RB2/the_process.jpg 2x" alt="" /></figure>
      </div>
      <!--/column -->
      <div class="col-lg-5 mt-lg-n10 text-center text-lg-start" data-cues="slideInDown" data-group="page-title" data-delay="600">
        <h1 class="display-1 mb-5">Get access to the best brains in the world</h1>
        <p class="lead fs-25 lh-sm mb-7 px-md-10 px-lg-0">RapidBrains is a talent marketplace which helps companies to build their remote team rapidly.</p>
        <div class="d-flex justify-content-center justify-content-lg-start" data-cues="slideInDown" data-group="page-title-buttons" data-delay="900">
        </div>
      </div>
      <!--/column -->
    </div>
    <!-- /.row -->
    </div>
</section>
<!-- /section --> --}}

<section class="wrapper bg-light"  style="margin-top: -100px;">
            <div class="container pt-14 pt-md-17 pb-14 pb-md-10">
                <div class="row text-center">
                  <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">
                    <h2 class="fs-15 text-uppercase text-muted mb-3">Our</h2>
                    <h3 class="display-4 mb-9 px-xl-11">Process Flow</h3>
                  </div>
                  <!-- /column -->
                </div><br>
                <div class="position-relative" style="text-align:center;">
                    <!--<div class="shape bg-dot primary rellax w-17 h-21" data-rellax-speed="1" style="top: -2.5rem; right: -2.7rem;"></div>-->
                    <figure ><img src="https://www.rapidbrains.com/assets/img/photos/process-flow.webp" srcset="https://www.rapidbrains.com/assets/img/photos/process-flow.webp" alt="" /></figure>
                </div>
            </div>
        </section><br><br>
        
    <!--Hero Ends-->
    <section class="wrapper bg-light"  style="margin-top: -78px;">
      <div class="container pt-14 pt-md-17 pb-14 pb-md-10">
        <div class="row text-center">
          <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">
            <h2 class="fs-16 text-uppercase text-gradient gradient-1 mb-3">RapidBrains Screening Process:</h2>
            <h3 class="display-4 mb-9 px-xl-11">The service we offer is specifically designed to meet your needs.</h3>
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
        <div class="row gy-8 mb-17">
          <div class="col-md-6 col-lg-6">
            <div class="d-flex flex-row">
              <div>
                <img src="https://www.rapidbrains.com/assets/img/icons/solid/script.svg" class="svg-inject icon-svg icon-svg-sm solid-duo text-grape-fuchsia me-4" alt="" />
              </div>
              <div>
                <h3 class="fs-22 mb-1"> Communication & Attitude Check</h3>
                <p class="mb-0">Communication and attitude are key when screening candidates. You want to make sure that they will be a good fit for the team and the company.</p>
              </div>
            </div>
          </div>
          <!--/column -->
          <div class="col-md-6 col-lg-6">
            <div class="d-flex flex-row">
              <div>
                <img src="https://www.rapidbrains.com/assets/img/icons/solid/verify.svg" class="svg-inject icon-svg icon-svg-sm solid-duo text-grape-fuchsia me-4" alt="" />
              </div>
              <div>
                <h3 class="fs-22 mb-1">Skill-set review</h3>
                <p class="mb-0">Checking the talent's skill set is atmost important. RapidBrains setup screening tests for each technology to ensure candidate's experience.</p>
              </div>
            </div>
          </div>
          <!--/column -->
          <div class="col-md-6 col-lg-6">
            <div class="d-flex flex-row">
              <div>
                <img src="https://www.rapidbrains.com/assets/img/icons/solid/cloud-network.svg" class="svg-inject icon-svg icon-svg-sm solid-duo text-grape-fuchsia me-4" alt="" />
              </div>
              <div>
                <h3 class="fs-22 mb-1">Experience screening</h3>
                <p class="mb-0">RapidBrains do a thorough check on the experience of the employees with rigorous interviews and tests.</p>
              </div>
            </div>
          </div>
          <!--/column -->
          <div class="col-md-6 col-lg-6">
            <div class="d-flex flex-row">
              <div>
                <img src="https://www.rapidbrains.com/assets/img/icons/solid/director.svg" class="svg-inject icon-svg icon-svg-sm solid-duo text-grape-fuchsia me-4" alt="" />
              </div>
              <div>
                <h3 class="fs-22 mb-1">Background Verification</h3>
                <p class="mb-0">A thorough verification of the background of the employees is done to ensure that they are who they say they are.</p>
              </div>
            </div>
          </div>
          <!--/column -->
          
       
        </div>
        <!--/.row -->

        <!--section-->

       
        <!--FAQ STARTS-->
        
        <section class="wrapper bg-light" style="margin-top: -70px;">
  <div class="container py-14 py-md-16">
      <div class="row">
          <div class="col-lg-11 col-xxl-10 mx-auto text-center">
            <h2 class="fs-15 text-uppercase text-muted mb-3">FAQ</h2>
            <h3 class="display-4 mb-10 px-lg-12 px-xl-10 px-xxl-15">If you don't see an answer to your question, you can send us an email from our contact form.</h3>
          </div>
          <!--/column -->
        </div>
    <div class="row gx-md-8 gx-xl-12 gy-10">
      <div class="col-lg-6">
        <div class="d-flex flex-row">
          <div>
            <span class="icon btn btn-sm btn-circle btn-primary pe-none me-5"><i class="uil uil-comment-exclamation"></i></span>
          </div>
          <div>
            <h4>Why do we need RapidBrains?</h4>
            <p class="mb-0">If you want to hire an employee in other countries, you need to set up an entity, open office space, open a local bank account, send a team there to run the operations and learn the labour law, HR policies, Payroll, taxes and other compliances. With RapidBrains you can hire any employee around the world without having to set up a local entity. We do hiring, onboarding, and HR activities and comply with the local labour law like termination, maternity leave, minimum wage, TDS, PF, health insurance and so on.

</p>
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
            <h4>How does RapidBrains work?</h4>
            <p class="mb-0">All employees will be on the payroll of RapidBrains who work dedicatedly for your company just like your own employees. When RapidBrains onboards any employee, we will sign a localised contract with all details of their roles and responsibilities of the company they are going to work for. RapidBrains will raise invoices to the company on the 1st of every month which includes the salary of the employees and our service charge. Paying salaries, taxes, social contributions etc comes under the responsibility of RapidBrains.</p>
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
            <h4>What are the employer's costs?</h4>
            <p class="mb-0">Employer's cost varies from country to country including government requirements, benefits, taxes, government fees, provident fund, mandatory medical insurance etc which depends on salary and changes every year. Apart from that, RapidBrains take care of all employee cost including employee wage, payroll processing, severance payouts and legal fees
            </p>
                
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
            <h4>What is Employer of Record (EOR)?</h4>
            <p class="mb-0">An Employer of Record (EOR) is a third-party company that hires and pays employees on behalf of another company and takes responsibility for all legal and formal employment processes. This way the companies can hire talents without having to set up a local entity or risk violating local employment laws. RapidBrains provide services way beyond EOR and handle the recruitment process, screenings, interviews, training and onboarding.
</p>
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
            <h4>What's the process for finding an ideal talent for our team?</h4>
            <p class="mb-0">Below are the steps we implement to ensure a seamless selection and onboarding process:

              <br>1. Requirement Gathering: Understand the specific job requirements by thoroughly reviewing and comprehending the job description.
              <br> 2. Tap the Talent Pool: Identify suitable candidates from our pool of pre-screened and background-verified resources.
              <br> 3. Interview Scheduling: Prepare candidates for your interviews/tests and ensure their availability for the scheduled interviews.
              <br>4. Negotiations: Engage in discussions with selected candidates regarding rates, working hours, and other specifics aligned with your requirements.
              <br>5. Onboarding & Talent Management: Manage the entire lifecycle of resources, including upskilling, mentoring, and overseeing projects.
              <br>6. Contract Preparation: Prepare employment contracts and Non-Disclosure Agreements (NDAs) in the best interests of your company.
              <br>7. Timesheet Processing: Collect timesheets for efficient payroll processing and project tracking.
              <br>8. Payroll Management: Enroll the candidates in our payroll system, handling salaries and other benefits.
              <br>9. Tax Compliance: Ensure compliance with local tax and employment laws, including income tax, insurance, and social contributions.
              <br>10. Contract Termination: Facilitate a smooth transition of resources upon project completion, handling necessary statutory declarations, conflicts, and renewals or terminations as needed.
</p>
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
            <h4>How is our Intellectual Property secured?</h4>
            <p class="mb-0">Security is a top priority for us. We take several measures to ensure the protection of your intellectual property (IP)
              . We employ a multi-faceted approach to protect your sensitive data.
              
              <br>a) We've had the privilege of working with many Fortune 500 companies who provide restricted mode laptops for their remote developers, equipped with monitoring software for Security Threat Protection.
              
              <br>b) We strictly enforce Non-Disclosure Agreements (NDAs) with all our talents, and these NDAs and Contracts are legally bound by their home country as the jurisdiction. This ensures the Confidentiality, Non-Solicitation, and Non-Compete clauses are upheld, safeguarding your IP.
              
              <br>c) We maintain stringent background verification criteria. This minimizes the risk of any unauthorized sharing or misuse of your IP. For projects involving sensitive data, we rely on experienced talents with a track record of confidentiality with our previous projects
</p>
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
            <h4>Where are your developers located?</h4>
            <p class="mb-0">Our pool of developers is spread across the globe, with a significant number of them based in India. This allows us to offer competitive and affordable rates with a wide range of skills and expertise without compromising on quality. Rest assured, we can help you find developers with the specific skills you require, no matter where they are located.
</p>
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
        
        <!--FAQ ENDS-->
        
  </div>

  
  {{-- cutom schema  --}}

  <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [{
    "@type": "Question",
    "name": "Why do we need RapidBrains?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "If you want to hire an employee in other countries, you need to set up an entity, open office space, open a local bank account, send a team there to run the operations and learn the labour law, HR policies, Payroll, taxes and other compliances. With RapidBrains you can hire any employee around the world without having to set up a local entity. We do hiring, onboarding, and HR activities and comply with the local labour law like termination, maternity leave, minimum wage, TDS, PF, health insurance and so on."
    }
  },{
    "@type": "Question",
    "name": "How does RapidBrains work?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "All employees will be on the payroll of RapidBrains who work dedicatedly for your company just like your own employees. When RapidBrains onboards any employee, we will sign a localised contract with all details of their roles and responsibilities of the company they are going to work for. RapidBrains will raise invoices to the company on the 1st of every month which includes the salary of the employees and our service charge. Paying salaries, taxes, social contributions etc comes under the responsibility of RapidBrains."
    }
  },{
    "@type": "Question",
    "name": "What are the employer's costs?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Employer's cost varies from country to country including government requirements, benefits, taxes, government fees, provident fund, mandatory medical insurance etc which depends on salary and changes every year. Apart from that, RapidBrains take care of all employee cost including employee wage, payroll processing, severance payouts and legal fees"
    }
  },{
    "@type": "Question",
    "name": "What is Employer of Record (EOR)?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "An Employer of Record (EOR) is a third-party company that hires and pays employees on behalf of another company and takes responsibility for all legal and formal employment processes. This way the companies can hire talents without having to set up a local entity or risk violating local employment laws. RapidBrains provide services way beyond EOR and handle the recruitment process, screenings, interviews, training and onboarding."
    }
  }]
}
</script>


{{--end of cutom schema  --}}



  @include('services.logo')
@endsection
