@extends('layout.layoutheader1')
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
   <section class="wrapper overflow-hidden image-wrapper" id="sect-bg" style="padding-bottom: 200px" >



   <div class="container pt-19 pt-md-21 text-center position-relative">
           <div class="position-absolute" style="top: -15%; left: 50%; transform: translateX(-50%);" data-cue="fadeIn"></div>
           <div class="row position-relative">
             <div class="col-lg-8 col-xxl-7 mx-auto position-relative">
               <div class="position-absolute shape grape w-5 d-none d-lg-block" style="top: -5%; left: -15%;" data-cue="fadeIn" data-delay="1500"><img src="https://www.rapidbrains.com/assets/img/svg/pie.svg" class="svg-inject icon-svg w-100 h-100" alt="" /></div>
               <div class="position-absolute shape violet w-10 d-none d-lg-block" style="bottom: 30%; left: -20%;" data-cue="fadeIn" data-delay="1500"><img src="https://www.rapidbrains.com/assets/img/svg/scribble.svg" class="svg-inject icon-svg w-100 h-100" alt="" /></div>
               <div class="position-absolute shape fuchsia w-6 d-none d-lg-block" style="top: 0%; right: -25%; transform: rotate(70deg);" data-cue="fadeIn" data-delay="1500"><img src="https://www.rapidbrains.com/assets/img/svg/tri.svg" class="svg-inject icon-svg w-100 h-100" alt="" /></div>
               <div class="position-absolute shape yellow w-6 d-none d-lg-block" style="bottom: 25%; right: -17%;" data-cue="fadeIn" data-delay="1500"><img src="https://www.rapidbrains.com/assets/img/svg/circle.svg" class="svg-inject icon-svg w-100 h-100" alt="" /></div>
               <div data-cues="slideInDown" data-group="page-title">
                 <h1 class="display-1 fs-64 mb-5 mx-md-10 mx-lg-0">Global Approach</h1>
                 <p class="lead fs-24 mb-8">We value trust, much more than anything else and we believe, Trust is Business!</p>
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
   <!-- divider -->
   <section class="wrapper bg-white upper-end"></section>


   <!--section starts-->

   <section class="wrapper bg-light">
     <div class="container py-14 py-md-16">
         <div class="row">
             <div class="col-lg-11 col-xxl-10 mx-auto text-center">
               <!--<h2 class="fs-15 text-uppercase text-muted mb-3">FAQ</h2>-->
               <p>A little, yet powerful emotion with which we served our clients, for we have learnt that customer delight and
                 satisfaction is the best business strategy. Its so heart whelming and encouraging to see their goals being achieved
                 through us, their myriad colors of achievement coming true through us, and the warmth of the client's hearts adding
                 strength to our brand. We are patient enough to listen to every smallest requirement client had which enabled us to
                 provide the best, which spread the ray of, smile across every individual associated with it.
                 What we got back was trust from our clients much more powerful than words which speak of glory only.</p>
             </div>
             <!--/column -->
           </div>
     </div>
     <!-- /.container -->
   </section>
   <!-- /section -->

   <!--section ends-->

   <!-------------Section----------->

   <section class="wrapper bg-soft-ash">
     <div class="container py-10 py-md-16">
       <div class="row gx-md-10 gx-xl-12 gy-10">
         <div class="col-lg-12">
           <div class="d-flex flex-row">
               <div class="card card-border-start border-purple">
                   <div class="card-body">
                       <h4 style="padding-bottom: 10px fs-14;">We listen to you</h4>
                       <p class="mb-0 fs-14">Irrespective of the client demography, we ask questions to our clients and we will gather and analyse the most
                         relevant information. The next step from our part will be to develop innovative strategies that create value for the client.
                         We understand the challenges and opportunities our clients face in the real world because we have honed our own skills in the
                         real world. Customer satisfaction is direct indicator of consumer purchase intentions and customer loyalty. Within organizations,
                         the collection, analysis and dissemination of these data send a message about the importance of tending to customers and ensuring
                         that they have a positive experience with the company's goods and services. We pride ourselves in our customer care and
                         responsiveness to our existing and new customers, which in turn results in a positive word of mouth, hence resulting in new prospects.</p>
                   </div>
               </div>
           </div>
         </div>
         <!-- /column -->
       </div>
       <!-- /.row -->
     </div>
     <!-- /.container -->


     <section class="wrapper bg-soft-ash" style="margin-top: -150px;">
       <div class="container py-14 py-md-16">
         <div class="row">
           <div class="col-lg-6 mb-0">
             <div id="accordion-1" class="accordion-wrapper">
               <div class="card accordion-item">
                 <div class="card-header" id="accordion-heading-1-1">
                   <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-1-1" aria-expanded="false" aria-controls="accordion-collapse-1-1">We showcase the best talents to you</button>
                 </div>
                 <!-- /.card-header -->
                 <div id="accordion-collapse-1-1" class="collapse" aria-labelledby="accordion-heading-1-1" data-bs-target="#accordion-1">
                   <div class="card-body">
                     <p>Fulfilment of customer’s expectations is the motto of our employees. HashRoot have a strong team of internationally renowned consultants who have access to the latest in global technology and developments and we are proud to leverage their vast expertise to you. Our strategy says to pay equal weightage to technology enhancement ensuring reliable and representative measures of satisfaction.</p>
                   </div>
                   <!-- /.card-body -->
                 </div>
                 <!-- /.collapse -->
               </div>
               <!-- /.card -->
               <div class="card accordion-item">
                 <div class="card-header" id="accordion-heading-2-1">
                   <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-2-1" aria-expanded="false" aria-controls="accordion-collapse-2-1">Enables better decision making</button>
                 </div>
                 <!-- /.card-header -->
                 <div id="accordion-collapse-2-1" class="collapse" aria-labelledby="accordion-heading-2-1" data-bs-target="#accordion-2">
                   <div class="card-body">
                     <p>Our technological solutions will always help to improve decision making, as we would be using more technologies.</p>
                   </div>
                   <!-- /.card-body -->
                 </div>
                 <!-- /.collapse -->
               </div>
               <!-- /.card -->
               <div class="card accordion-item">
                 <div class="card-header" id="accordion-heading-1-3">
                   <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-1-3" aria-expanded="false" aria-controls="accordion-collapse-1-3">Ensuring reduction of costs</button>
                 </div>
                 <!-- /.card-header -->
                 <div id="accordion-collapse-1-3" class="collapse" aria-labelledby="accordion-heading-1-3" data-bs-target="#accordion-1">
                   <div class="card-body">
                     <p>RapidBrains will ensure that the solutions that we recommend would help you to reduce the business costs and will help you to become more competitive in the global market.</p>
                   </div>
                   <!-- /.card-body -->
                 </div>
                 <!-- /.collapse -->
               </div>
               <!-- /.card -->
               <div class="card accordion-item">
                 <div class="card-header" id="accordion-heading-2-2">
                   <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-2-2" aria-expanded="false" aria-controls="accordion-collapse-2-2">Leverages/exploits existing/emerging technologies</button>
                 </div>
                 <!-- /.card-header -->
                 <div id="accordion-collapse-2-2" class="collapse" aria-labelledby="accordion-heading-2-2" data-bs-target="#accordion-2">
                   <div class="card-body">
                     <p>Always make sure that solutions follows the latest technological advancements and will be keeping in tune with the global practices.</p>
                   </div>
                   <!-- /.card-body -->
                 </div>
                 <!-- /.collapse -->
               </div>
               <!-- /.card -->
               <div class="card accordion-item">
                 <div class="card-header" id="accordion-heading-1-3">
                   <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-1-3" aria-expanded="false" aria-controls="accordion-collapse-1-3">Improves productivity</button>
                 </div>
                 <!-- /.card-header -->
                 <div id="accordion-collapse-1-3" class="collapse" aria-labelledby="accordion-heading-1-3" data-bs-target="#accordion-1">
                   <div class="card-body">
                     <p>Our solutions will be aimed at improving the work productivity of your company so that you would be able to work.</p>
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
                 <div class="card-header" id="accordion-heading-1-2">
                   <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-1-2" aria-expanded="false" aria-controls="accordion-collapse-1-2">In tune with your business strategy</button>
                 </div>
                 <!-- /.card-header -->
                 <div id="accordion-collapse-1-2" class="collapse" aria-labelledby="accordion-heading-1-2" data-bs-target="#accordion-1">
                   <div class="card-body">
                     <p>RapidBrains makes sure that the business solution that we recommend would always be in tune with your business goals and we always look forward to help you reach the optimum growth.
                       We are also confident of our superior solutions and recommendations about current market as we use the latest in modern technology to provide an unmatched solution to our clients.</p>
                   </div>
                   <!-- /.card-body -->
                 </div>
                 <!-- /.collapse -->
               </div>
               <!-- /.card -->
               <div class="card accordion-item">
                 <div class="card-header" id="accordion-heading-2-3">
                   <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-2-3" aria-expanded="false" aria-controls="accordion-collapse-2-3">Ensures acceptable levels of control and risk management</button>
                 </div>
                 <!-- /.card-header -->
                 <div id="accordion-collapse-2-3" class="collapse" aria-labelledby="accordion-heading-2-3" data-bs-target="#accordion-2">
                   <div class="card-body">
                     <p>Ensure that our technological solutions will follow proper risk management and will always ensure proper backup.</p>
                   </div>
                   <!-- /.card-body -->
                 </div>
                 <!-- /.collapse -->
               </div>
               <!-- /.card -->


               <div class="card accordion-item">
                 <div class="card-header" id="accordion-heading-1-4">
                   <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-1-4" aria-expanded="false" aria-controls="accordion-collapse-1-4">Optimizes the skills and capabilities of the organization</button>
                 </div>
                 <!-- /.card-header -->
                 <div id="accordion-collapse-1-4" class="collapse" aria-labelledby="accordion-heading-1-4" data-bs-target="#accordion-1">
                   <div class="card-body">
                     <p>Help companies to realise their potential and reach desired goals. Our solutions always help companies to maximise the potential of workers to meet the desired objectives.</p>
                   </div>
                   <!-- /.card-body -->
                 </div>
                 <!-- /.collapse -->
               </div>
               <!-- /.card -->

               <div class="card accordion-item">
                 <div class="card-header" id="accordion-heading-2-4">
                   <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-2-4" aria-expanded="false" aria-controls="accordion-collapse-2-4">Promotes timely execution</button>
                 </div>
                 <!-- /.card-header -->
                 <div id="accordion-collapse-2-4" class="collapse" aria-labelledby="accordion-heading-2-4" data-bs-target="#accordion-2">
                   <div class="card-body">
                     <p>Always keep to deadlines and ensure that the solution that we give will help you to improve cost efficiency, as it would reduce the operating time.</p>
                   </div>
                   <!-- /.card-body -->
                 </div>
                 <!-- /.collapse -->
               </div>
               <!-- /.card -->
               <div class="card accordion-item">
                 <div class="card-header" id="accordion-heading-1-3">
                   <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-1-3" aria-expanded="false" aria-controls="accordion-collapse-1-3">Promotes collaboration across the extended enterprise</button>
                 </div>
                 <!-- /.card-header -->
                 <div id="accordion-collapse-1-3" class="collapse" aria-labelledby="accordion-heading-1-3" data-bs-target="#accordion-1">
                   <div class="card-body">
                     <p>Our solutions will help the company to make a mark among the parent group and will also help the parent group to reach their desired goals.</p>
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


   </section>



@include('services.logo')
@endsection
