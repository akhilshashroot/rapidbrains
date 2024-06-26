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
      <div class="container py-14 pt-md-15 pb-md-18">
        <div class="row text-center">
          <div class="col-lg-9 col-xxl-7 mx-auto" data-cues="zoomIn" data-group="welcome" data-interval="-200">
            <h1 class="display-1 mb-4">Remote hiring has never been this rapid!</h1>
            <p class="lead fs-24 lh-sm px-md-5 px-xl-15 px-xxl-10 mb-7">A talent marketplace to build amazing remote teams, rapidly</p>
            </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
        
        <!-- /div -->
        <div class="row mt-12" data-cue="fadeIn" data-delay="1600">
          <div class="col-lg-8 mx-auto">
            <figure><img class="img-fluid" src="./assets/img/illustrations/i12.png" srcset="./assets/img/illustrations/i12@2x.png 2x" alt="i12"></figure>
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->
    
    
    
    
    <section class="wrapper bg-light">
      <div class="container">
        <div class="row gx-lg-0 gy-10 mb-15 mb-md-18 align-items-center">
          <div class="col-lg-6">
            <div class="row g-6 text-center">
              <div class="col-md-6">
                <div class="row">
                  <div class="col-lg-12 order-md-1">
                    <div class="card shadow-lg mb-md-6 mt-lg-6">
                      <div class="card-body">
                        <div class="icon btn btn-circle btn-lg btn-soft-purple pe-none mb-3"> <i class="uil uil-mobile-android"></i> </div>
                        <h4>Expand without a legal entity</h4>
                        <p class="mb-2">We make sure that everything is in compliance with local labour law and act as a layer of legal insulation.</p>
                        <!--<a href="#" class="more hover link-purple">Learn More</a>-->
                      </div>
                      <!--/.card-body -->
                    </div>
                    <!--/.card -->
                  </div>
                  <!-- /column -->
                  <!-- /column -->
                  <div class="col-lg-12">
                    <div class="card shadow-lg">
                      <div class="card-body">
                        <div class="icon btn btn-circle btn-lg btn-soft-purple pe-none mb-3"> <i class="uil uil-monitor"></i> </div>
                        <h4>Reduce employee cost by 60%</h4>
                        <p class="mb-2">Hire pre-screened remote talents with strong technical and communication skills at unbeatable rates.</p>
                        
                      </div>
                      <!--/.card-body -->
                    </div>
                    <!--/.card -->
                  </div>
                  <!-- /column -->
                </div>
                <!-- /.row -->
              </div>
              <!-- /column -->
              <div class="col-md-6">
                <div class="row">
                    <div class="col-lg-12 order-md-2 ">
                    <div class="card shadow-lg mb-md-6 mt-lg-6">
                      <div class="card-body">
                        <div class="icon btn btn-circle btn-lg btn-soft-purple pe-none mb-3"> <i class="uil uil-mobile-android"></i> </div>
                        <h4>Build worldwide talent team rapidly</h4>
                        <p class="mb-2">RapidBrains onboards your new team in as little as 24 hours, and saves you 100% on hiring costs.</p>
                      </div>
                      <!--/.card-body -->
                    </div>
                    <!--/.card -->
                  </div>
                  <!-- /column -->
                  <!--<div class="col-lg-12 order-md-2">-->
                  <!--  <figure class="rounded mb-6 mb-md-0"><img src="./assets/img/photos/se2.jpg" srcset="./assets/img/photos/se2@2x.jpg 2x" alt=""></figure>-->
                  <!--</div>-->
                  <!-- /column -->
                  <div class="col-lg-12">
                    <div class="card shadow-lg mb-md-6 mt-lg-6">
                      <div class="card-body">
                        <div class="icon btn btn-circle btn-lg btn-soft-purple pe-none mb-3"> <i class="uil uil-mobile-android"></i> </div>
                        <h4>Up-skilling and training process</h4>
                        <p class="mb-2">We upskill and train the employees from time-to-time to help them with a staged career progression</p>
                      </div>
                      <!--/.card-body -->
                    </div>
                    <!--/.card -->
                  </div>
                  <!-- /column -->
                </div>
                <!-- /.row -->
              </div>
              <!-- /column -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /column -->
          <div class="col-lg-5 offset-lg-1">
            <h2 class="display-4 mb-3">Why RapidBrains?</h2>
            <p>We enable enables businesses to hire remote developers from a pool of talents and assist in selecting the best remote talent that has the required skill set. The team of hiring specialist at RapidBrains follow a strategic selection process and offers business-friendly policies.</p>
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
        
      </div>
      <!-- /.container -->
      
    </section>
    <!-- /section -->
    
    
    <!--Why us starts -->
    <section class="wrapper bg-light">
  <div class="container py-14 py-md-16">
    <div class="row text-center">
      <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">
        <h2 class="fs-15 text-uppercase text-muted mb-3">Reasons why companies love RapidBrains?</h2>
        <h3 class="display-4 mb-9 px-xl-11">Hire the world's best brains</h3>
      </div>
      <!-- /column -->
    </div>
    <!-- /.row -->
    <div class="row gx-lg-8 gx-xl-12 gy-8">
      <div class="col-md-6 col-lg-4">
        <div class="d-flex flex-row">
          <div>
            <img src="./assets/img/icons/lineal/target.svg" class="svg-inject icon-svg icon-svg-sm text-aqua me-4" alt="target" />
          </div>
          <div>
            <h4 class="mb-1">Background Verified & Screened Talents</h4>
            <p class="mb-0">It's important to do the due diligence and run a background check before hire. RapidBrains will verify their identity and ensure that they don't have any skeletons in their closet that could come back to bite you later.
</p></div>
        </div>
      </div>
      <!--/column -->
      <div class="col-md-6 col-lg-4">
        <div class="d-flex flex-row">
          <div>
            <img src="./assets/img/icons/lineal/medal.svg" class="svg-inject icon-svg icon-svg-sm text-yellow me-4" alt="medal" />
          </div>
          <div>
            <h4 class="mb-1">Preparing employment contracts</h4>
            <p class="mb-0">RapidBrains prepare employment contracts on behalf of our clients. We make sure that the contract is in the best interest of our client and it protects their rights.</p>
          </div>
        </div>
      </div>
      <!--/column -->
      <div class="col-md-6 col-lg-4">
        <div class="d-flex flex-row">
          <div>
            <img src="./assets/img/icons/lineal/clock-3.svg" class="svg-inject icon-svg icon-svg-sm text-red me-4" alt="clock" />
          </div>
          <div>
            <h4 class="mb-1">Handling all HR Activities</h4>
            <p class="mb-0">RapidBrains handle all HR activities, including recruitment, onboarding, training, development, and performance management. We are dedicated to supporting our employees and helping them reach their full potential.</p></div>
        </div>
      </div>
      <!--/column -->
      <div class="col-md-6 col-lg-4">
        <div class="d-flex flex-row">
          <div>
            <img src="./assets/img/icons/lineal/check.svg" class="svg-inject icon-svg icon-svg-sm text-pink me-4" alt="check" />
          </div>
          <div>
            <h4 class="mb-1">Compliance with local labour law</h4>
            <p class="mb-0">You will get into lot of trouble if you didn't comply with the local labour law. This includes minimum wage, casual, sick and maternity leave, termination, mandatory health insurance, provident fund etc. We make sure that everything is in compliance with local labour law and act as a layer of legal insulation for companies.</p>
          </div>
        </div>
      </div>
      <!--/column -->
      <div class="col-md-6 col-lg-4">
        <div class="d-flex flex-row">
          <div>
            <img src="./assets/img/icons/lineal/shop-2.svg" class="svg-inject icon-svg icon-svg-sm text-green me-4" alt="shop 2" />
          </div>
          <div>
            <h4 class="mb-1">Processing and funding payroll</h4>
            <p class="mb-0">Employees will be on the payroll of RapidBrains and technically work for you and report to the company just like any employee. This way you don't setup an entity to hire an employee in that country</p>
          </div>
        </div>
      </div>
      <!--/column -->
      <div class="col-md-6 col-lg-4">
        <div class="d-flex flex-row">
          <div>
            <img src="./assets/img/icons/lineal/team.svg" class="svg-inject icon-svg icon-svg-sm text-purple me-4" alt="team" />
          </div>
          <div>
            <h4 class="mb-1">Depositing and filing taxes</h4>
            <p class="mb-0">RapidBrains ensures full compliance with local tax and employment laws.  We ensure that all in-country tax registrations are made as required by local laws and calculate all regulatory payroll items including individual income tax, social contributions, and insurance payments.</p>
          </div>
        </div>
      </div>
      <!--/column -->
      
      <div class="col-md-6 col-lg-4">
        <div class="d-flex flex-row">
          <div>
            <img src="./assets/img/icons/lineal/shop-2.svg" class="svg-inject icon-svg icon-svg-sm text-green me-4" alt="shop 2" />
          </div>
          <div>
            <h4 class="mb-1">Collecting and processing time sheets</h4>
            <p class="mb-0">Timesheets allow you to easily process your payroll, bill the end customers, track and manage projects while saving time and costs. RapidBrains make it straight and simple with our easy-to-use platform.</p>
                
            </div>
        </div>
      </div>
      <!--/column -->
      
      <div class="col-md-6 col-lg-4">
        <div class="d-flex flex-row">
          <div>
            <img src="./assets/img/icons/lineal/shop-2.svg" class="svg-inject icon-svg icon-svg-sm text-green me-4" alt="shop 2" />
          </div>
          <div>
            <h4 class="mb-1">Employee onboarding</h4>
            <p class="mb-0">RapidBrains onboards your new team in as little as 24 hours, and saves you 100% on hiring costs. This process includes completing all the necessary paperworks, providing orientation and manages all employment-related inquiries and make sure that our employees are able to hit the ground running and be productive from day one.</p>
                
            </div>
        </div>
      </div>
      <!--/column -->
      
      <div class="col-md-6 col-lg-4">
        <div class="d-flex flex-row">
          <div>
            <img src="./assets/img/icons/lineal/shop-2.svg" class="svg-inject icon-svg icon-svg-sm text-green me-4" alt="shop 2" />
          </div>
          <div>
            <h4 class="mb-1">Contract termination & severance</h4>
            <p class="mb-0">RapidBrains have a team of experienced professionals who will work with you to ensure a smooth transition. We take care of all appropriate statutory declarations, handle any conflicts, and oversee all employee renewals and terminations.
</p>
            </div>
        </div>
      </div>
      <!--/column -->
      
      
    </div>
    <!--/.row -->
  </div>
  <!-- /.container -->
</section>
<!-- /section -->
    
    <!--why us ends-->
    
    <section class="wrapper bg-light">
      <div class="container pb-8 pb-lg-10">
        <div class="row gx-lg-8 gx-xl-12 gy-10 mb-15 mb-md-18 align-items-center">
          <div class="col-lg-7">
            <figure><img class="w-auto" src="{{asset('assets/img/common/i9.webp')}}" srcset="{{asset('assets/img/common/i9.webp')}} 2x" alt="i9" /></figure>
          </div>
          <!--/column -->
          <div class="col-lg-5">
            <h3 class="display-4 mb-3">Have Perfect Control</h3>
            <p class="lead fs-lg lh-sm">We are focused on establishing long-term relationships with customers.</p>
            <div class="row gy-3">
              <div class="col-xl-6">
                <ul class="icon-list bullet-bg bullet-soft-primary mb-0">
                  <li><span><i class="uil uil-check"></i></span><span>Talent Acquisition Team.</span></li>
                  <li class="mt-3"><span><i class="uil uil-check"></i></span><span>No Employer cost</span></li>
                </ul>
              </div>
              <!--/column -->
              <div class="col-xl-6">
                <ul class="icon-list bullet-bg bullet-soft-primary mb-0">
                  <li><span><i class="uil uil-check"></i></span><span>Scalability</span></li>
                  <li class="mt-3"><span><i class="uil uil-check"></i></span><span>Dedicated 24/7 support</span></li>
                </ul>
              </div>
              <!--/column -->
            </div>
            <!--/.row -->
          </div>
          <!--/column -->
        </div>
        <!--/.row -->
        </div>


         {{-- <!--table Starts-->
         <section class="wrapper">
          <div class="container py-14 py-md-16">
            <h2 class="display-4 mb-3 text-center">Onsite job vs Remote job</h2>
            <!--<p class="lead fs-lg">We do more to deliver you the suitable remote talents that satisfy and fit into the right skill set you are looking for. </p> -->
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
                      <div class="h4 mb-1">Onsite</div>
                      <!--<div class="fs-15 fw-normal text-secondary">$9 / Monthly</div>-->
                    </th>
                    <th>
                      <div class="h4 mb-1">Remote</div>
                    </th>
        
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="option text-start">Location</td>
                    <td>Onsite jobs require employees to work at a physical workplace, often a company office or facility</td>
                    <td>Remote jobs allow individuals to work from any location with an internet connection, such as home or co-working spaces.</td>
        
                  </tr>
                  <tr>
                    <td class="option text-start">Commute</td>
                    <td>Onsite jobs necessitate regular commuting, which can consume valuable time and lead to stress.</td>
                    <td>Remote jobs eliminate the need for commuting, providing more flexibility and reducing transportation costs.</td>
        
                  </tr>
                  <tr>
                    <td class="option text-start">Work Environment</td>
                    <td>Onsite jobs offer a structured work environment with designated workspaces, promoting a sense of professionalism and collaboration.</td>
                    <td>Remote jobs provide the flexibility to create a personalized work environment, tailored to individual preferences and comfort.</td>
        
                  </tr>
                  <tr>
                    <td class="option text-start">Work-Life Balance</td>
                    <td>Onsite jobs may have fixed working hours, making it harder to maintain a balanced life.</td>
                    <td>Remote jobs often offer better work-life balance since employees can manage their schedules and have more time for personal commitments.</td>
                  <tr>
                    <td class="option text-start">Collaboration</td>
                    <td>Onsite jobs foster face-to-face interactions, making it easier to collaborate with colleagues, share ideas, and build strong team dynamics.</td>
                    <td>Remote jobs rely on virtual communication tools, requiring effective online collaboration skills.</td>
        
                  </tr>
                  <tr>
                    <td class="option text-start">Distractions</td>
                    <td>Onsite jobs may have distractions from office activities or noisy environments.</td>
                    <td>Remote jobs could be disrupted by distractions at home, such as family members or household chores.</td>
        
                  </tr>
                  <tr>
                    <td class="option text-start">Technology</td>
                    <td>Onsite jobs generally have access to company-provided infrastructure and support.</td>
                    <td>Remote jobs require reliable internet access and proper technology setup for effective communication and work performance.</td>
        
                  </tr>
                  <tr>
                    <td class="option text-start">Job Opportunities</td>
                    <td>Onsite jobs limit job opportunities to a specific geographic location.</td>
                    <td>Remote jobs open up possibilities to work with companies and clients from anywhere in the world.</td>
        
                  </tr>
                  <tr>
                    <td class="option text-start">Company Culture</td>
                    <td>Onsite jobs provide employees with a direct experience of the company's culture through in-person interactions and social activities.</td>
                    <td>Remote jobs require companies to foster a virtual company culture to maintain team cohesion.</td>
        
                  </tr>
                  <tr>
                    <td class="option text-start">Health Considerations</td>
                    <td>Onsite jobs may expose employees to potential health risks related to commuting and shared office spaces.</td>
                    <td>Remote jobs reduce these risks but can present challenges in maintaining proper ergonomics and promoting physical activity.</td>
        
                  </tr>

                </tbody>
        
              </table>
            </div>
            <!-- /.table-responsive -->
          </div>
          <!-- /.container -->
        </section>
        <!-- /section -->
        
        
         <!--table Ends--> --}}



<section class="wrapper bg-light">
  <div class="container py-14 py-md-5">
    <h2 class="display-4 mb-3 text-center">Remote working is the next revolution!</h2>
    <p class="lead text-center mb-10 px-md-16 px-lg-0">Our Benefits</p>
    <div class="row">
      <div class="col-lg-6 mb-0">
        <div id="accordion-1" class="accordion-wrapper">
          <div class="card accordion-item">
            <div class="card-header" id="accordion-heading-1-1">
              <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-1-1" aria-expanded="true" aria-controls="accordion-collapse-1-1">Cost-effective compared to competitors</button>
            </div>
            <!-- /.card-header -->
            <div id="accordion-collapse-1-1" class="accordion-collapse collapse show" aria-labelledby="accordion-heading-1-1" data-bs-target="#accordion-1">
              <div class="card-body">
                <p>We offer lower prices than all our competitors while maintaining the same or better quality</p>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.collapse -->
          </div>
          <!-- /.card -->
          <div class="card accordion-item">
            <div class="card-header" id="accordion-heading-1-2">
              <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-1-2" aria-expanded="true" aria-controls="accordion-collapse-1-2">No-lock in period</button>
            </div>
            <!-- /.card-header -->
            <div id="accordion-collapse-1-2" class="accordion-collapse collapse show" aria-labelledby="accordion-heading-1-2" data-bs-target="#accordion-1">
              <div class="card-body">
                <p>There’s no long term contract or commitment required. Want someone for 2 weeks? Or maybe 2 months? We got you!</div>
              <!-- /.card-body -->
            </div>
            <!-- /.collapse -->
          </div>
          <!-- /.card -->
          <div class="card accordion-item">
            <div class="card-header" id="accordion-heading-1-3">
              <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-1-3" aria-expanded="true" aria-controls="accordion-collapse-1-3">Scale up or down at any point in time</button>
            </div>
            <!-- /.card-header -->
            <div id="accordion-collapse-1-3" class="accordion-collapse collapse show" aria-labelledby="accordion-heading-1-3" data-bs-target="#accordion-1">
              <div class="card-body">
                <p>Increase or decrease your team size in a matter of hours. No questions asked!
 </p> </div>
              <!-- /.card-body -->
            </div>
            <!-- /.collapse -->
          </div>
          <!-- /.card -->
          <div class="card accordion-item">
            <div class="card-header" id="accordion-heading-1-4">
              <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-1-4" aria-expanded="true" aria-controls="accordion-collapse-1-4">Flexible Engagements - Hourly or Monthly</button>
            </div>
            <!-- /.card-header -->
            <div id="accordion-collapse-1-4" class="accordion-collapse collapse show" aria-labelledby="accordion-heading-1-4" data-bs-target="#accordion-1">
              <div class="card-body">
                <p>Choose an engagement model that best fits your business. Take up an employee for either an hourly or monthly basis. Totally up to you!</p>
                     </div>
              <!-- /.card-body -->
            </div>
            <!-- /.collapse -->
          </div>
          <!-- /.card -->
          
          <div class="card accordion-item">
            <div class="card-header" id="accordion-heading-1-5">
              <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-1-5" aria-expanded="true" aria-controls="accordion-collapse-1-5">Health Insurance and other benefits</button>
            </div>
            <!-- /.card-header -->
            <div id="accordion-collapse-1-5" class="accordion-collapse collapse show" aria-labelledby="accordion-heading-1-5" data-bs-target="#accordion-1">
              <div class="card-body">
                <p>The essential part of handling payroll is the calculation and withholding of statutory deductions from pay, including pensions, health insurance and local taxes. RapidBrains take care of all of these and ensure the payroll is accurate and compliant. Expense management and monthly reimbursement are included at no extra cost.
</p> </div>
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
              <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-2-1" aria-expanded="true" aria-controls="accordion-collapse-2-1">Custom Hiring Process</button>
            </div>
            <!-- /.card-header -->
            <div id="accordion-collapse-2-1" class="accordion-collapse collapse show" aria-labelledby="accordion-heading-2-1" data-bs-target="#accordion-2">
              <div class="card-body">
                <p>Our recruiting team can adapt to any of your processes - be it a machine test - multiple rounds of interviews - our candidates will show their best.

</p>
                </div>
              <!-- /.card-body -->
            </div>
            <!-- /.collapse -->
          </div>
          <!-- /.card -->
          <div class="card accordion-item">
            <div class="card-header" id="accordion-heading-2-2">
              <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-2-2" aria-expanded="true" aria-controls="accordion-collapse-2-2">24/7 and across time zones</button>
            </div>
            <!-- /.card-header -->
            <div id="accordion-collapse-2-2" class="accordion-collapse collapse show" aria-labelledby="accordion-heading-2-2" data-bs-target="#accordion-2">
              <div class="card-body">
                <p>Our support team works across time zones so you don’t have to worry about stopping even for the night!</p>
                </div>
              <!-- /.card-body -->
            </div>
            <!-- /.collapse -->
          </div>
          <!-- /.card -->
          <div class="card accordion-item">
            <div class="card-header" id="accordion-heading-2-3">
              <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-2-3" aria-expanded="true" aria-controls="accordion-collapse-2-3">No employer costs</button>
            </div>
            <!-- /.card-header -->
            <div id="accordion-collapse-2-3" class="accordion-collapse collapse show" aria-labelledby="accordion-heading-2-3" data-bs-target="#accordion-2">
              <div class="card-body">
                <p>RapidBrains take care of all employer costs including government requirements, benefits, taxes, fees healthcare insurance and even expense management and monthly reimbursement
</p>
                    
                </div>
              <!-- /.card-body -->
            </div>
            <!-- /.collapse -->
          </div>
          <!-- /.card -->
          <div class="card accordion-item">
            <div class="card-header" id="accordion-heading-2-4">
              <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-2-4" aria-expanded="true" aria-controls="accordion-collapse-2-4">Upskilling and training</button>
            </div>
            <!-- /.card-header -->
            <div id="accordion-collapse-2-4" class="accordion-collapse collapse show" aria-labelledby="accordion-heading-2-4" data-bs-target="#accordion-2">
              <div class="card-body">
                <p>We upskill and train your employees from time-to-time to help them with a staged career progression. Or if you want to train an employee for a specific skillset we got you covered.</div>
              <!-- /.card-body -->
            </div>
            <!-- /.collapse -->
          </div>
          
          <div class="card accordion-item">
            <div class="card-header" id="accordion-heading-2-5">
              <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-2-5" aria-expanded="true" aria-controls="accordion-collapse-2-5">Hire the best talent, boundary-less</button>
            </div>
            <!-- /.card-header -->
            <div id="accordion-collapse-2-5" class="accordion-collapse collapse show" aria-labelledby="accordion-heading-2-5" data-bs-target="#accordion-2">
              <div class="card-body">
                <p>Remote is the new normal. RapidBrains help companies to hire without taking location into consideration enabling them to hire best talents across the globe.</p>
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
@include('services.logo')
@endsection