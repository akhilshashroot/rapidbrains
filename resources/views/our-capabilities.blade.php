@extends('layout.layout')
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
           <h3 class="display-1 fs-50 lh-xxs mb-0">Our Capabilities</h3><br>
         </div>
         <!-- /column -->
         <div class="text-center">
           <p class="lead fs-20 my-3">True certainty of success comes through honesty & integrity, which has <br>been delivered through insight, support & expertise.</p>
          
         </div>
         <!-- /column -->
       </div>
       <!-- /.row -->
       <div class="position-relative">
         <!--<div class="shape bg-dot primary rellax w-17 h-21" data-rellax-speed="1" style="top: -2.5rem; right: -2.7rem;"></div>-->
         <figure class="rounded mb-md-n20"><img src="https://www.rapidbrains.com/assets/img/common/our-capabilities.webp" srcset="https://www.rapidbrains.com/assets/img/common/our-capabilities.webp" alt="about18" /></figure>
       </div>
     </div>

</section>
<!-- /section -->


  <!--section starts-->

<section class="wrapper bg-light" style="margin-top: 175px;">
    <div class="container py-14 py-md-16">
        <div class="row">
            <div class="col-lg-11 col-xxl-10 mx-auto text-center">
              <!--<h2 class="fs-15 text-uppercase text-muted mb-3">FAQ</h2>-->
              <p>RapidBrains help clients among the world corporate leaders with new opportunities and confront the most strategic challenges in a global perspective. 
                We bring in-front of you with a global perspective for the clients; lay out with strategic services that would be through our expertise across the client lifecycle. <br><br>
                Our expertise would be part of your end-to-end requirements and rapidly expanding needs, strategic industry and functional consulting skills across the globe. Our teams deliver cutting-edge expertise, 
                quality measurement and measurable services to clients across the globe.</p>
            </div>
            <!--/column -->
          </div>
    </div>
    <!-- /.container -->
  </section>
  <!-- /section -->

<!--section ends-->

<!--section-->

<section class="wrapper bg-light" style="margin-top: -100px;">
    <div class="container py-14 py-md-16 text-center" >
      <div class="row">
        <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">
          <!--<h2 class="fs-15 text-uppercase text-muted mb-3">What We Do?</h2>-->
          <h3 class="display-4 mb-10 px-xl-10">Our Strategic Process</h3>
        </div>
        <!-- /column -->
      </div>
      <!-- /.row -->
      <div class="position-relative">
        <div class="shape rounded-circle bg-soft-blue rellax w-16 h-16" data-rellax-speed="1" style="bottom: -0.5rem; right: -2.2rem; z-index: 0;"></div>
        <div class="shape bg-dot yellow rellax w-16 h-17" data-rellax-speed="1" style="top: -0.5rem; left: -2.5rem; z-index: 0;"></div>
        <div class="row gx-md-5 gy-5 text-center">
          <div class="col-md-6 col-lg-6 ">
            <div class="card shadow-lg">
              <div class="card-body">
                <img src="./assets/img/icons/lineal/paper-plane.svg" class="svg-inject icon-svg icon-svg-md text-yellow mb-3" alt="" />
                <h4>What we offer?</h4>
                <p class="mb-2 fs-14">Business is directly related to technology and hence one needs to be technologically updated to create technologically enabled business strategy for the successful business-operating model in the future. 
                    We are well versed in latest technological trend in the industry, and can provide competitive intelligence on this front. 
                    We conduct research and can work with your internal IT team to set priorities and project timeline.</p>
              </div>
              <!--/.card-body -->
            </div>
            <!--/.card -->
          </div>
          <!--/column -->
          <div class="col-md-6 col-lg-6">
            <div class="card shadow-lg">
              <div class="card-body">
                <img src="./assets/img/icons/lineal/puzzle-2.svg" class="svg-inject icon-svg icon-svg-md text-green mb-3" alt="" />
                <h4>What we did?</h4>
                <p class="mb-2 fs-14">Based on employee suggestions, we developed RapidBrains People, which is much more than just a digital people directory. 
                    RapidBrains People are capable of collaborative business networking, where employee profiles begin with corporate strategies. 
                    Each profile is populated with standard company information and our employees are encouraged to expand their profiles. 
                    Employees internal skills and resume information are automatically pulled into profiles.</p>
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

  <!-------------Section----------->

   <section class="wrapper bg-soft-ash">
    <div class="container py-10 py-md-16">
        <div class="row">
            <div class="col-lg-11 col-xxl-10 mx-auto text-center">
                <h3 class="display-4 mb-10 px-xl-10">RapidBrains Difference</h3>
              <p>Build with expert team to drive innovative ideas with the innovative technical experts with sound business outlook and up-to-date knowledge of today's dynamically evolving IT Market</p>
            </div>
            <!--/column -->
          </div><br><br>
        
      <div class="row gx-md-10 gx-xl-12 gy-10">
        <div class="col-lg-12">
          <div class="d-flex flex-row">
              <div class="card card-border-start border-red">
                  <div class="card-body">
                      <h4 style="padding-bottom: 10px;">RapidBrains Endeavors</h4>
                      <p class="mb-0">RapidBrains acumen has been envisioned as integrated hub of innovative and leading contour thinking from thought leaders. 
                        Whether it's business, technology or operations, we build value, businesses and operating models for the future.</p>
                  </div>
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

  <!-------------Section----------->

  <section class="wrapper bg-light">
    <div class="container py-10 py-md-16">
      <div class="row gx-md-10 gx-xl-12 gy-10">
        <div class="col-lg-12">
          <div class="d-flex flex-row">
              <div class="card card-border-start border-yellow">
                  <div class="card-body">
                      <h4 style="padding-bottom: 10px;">A new breed to IT solutions</h4>
                      <p class="mb-0">Bring you a new breed of business management solutions that compliments all the fluctuations of the present dynamic business market. 
                        Our Walkway to clients is to help organizations realize the value of implementing successful technological strategies which capitalize on unique and 
                        innovative management trend & technologies to their own benefit, no matter however complex, large or small it may be. We have excellent track record of 
                        presenting end-to-end strategic services to business with IT perspective. It is vital build strategies that are agile to regulate market dynamics, 
                        innovative to stay ahead of competition, transformation to take utmost advantage of the latest technology and optimal to sustain profits.</p>
                  </div>
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

  <!-------------Section----------->

  <section class="wrapper bg-soft-ash">
    <div class="container py-10 py-md-16">
      <div class="row gx-md-10 gx-xl-12 gy-10">
        <div class="col-lg-12">
          <div class="d-flex flex-row">
              <div class="card card-border-start border-green">
                  <div class="card-body">
                      <h4 style="padding-bottom: 10px;">Knowledge to drive you to right solution</h4>
                      <p class="mb-0">Our service specialists are always ready to serve you promptly, effectively and accurately. 
                        All these virtues have brought us a pool of clients having diverse requirement, knowledge and business savvy to understand the environment. 
                        Your development objectives can be achieved through our professionals who are skilled in a range of disciplines, which improves their ability to share best practices and drive innovative solutions. 
                        This factor will also help your company to minimize risks and will help in getting faster results. When the traditional sources of technology are becoming irrelevant, the best bet for nations, companies and individuals to succeed is the power of their ideas. 
                        We believe that acknowledging such ideas and learning from them is vital as we make progress in today’s environment.</p>
                  </div>
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

  <!-------------Section----------->

  <section class="wrapper bg-light">
    <div class="container py-10 py-md-16">
      <div class="row gx-md-10 gx-xl-12 gy-10">
        <div class="col-lg-12">
          <div class="d-flex flex-row">
              <div class="card card-border-start border-blue">
                  <div class="card-body">
                      <h4 style="padding-bottom: 10px;">Progressive Training</h4>
                      <p class="mb-0">Day by day, the technologies are keep on changing and new technologies are emerging up. 
                        Through this, the professionals constantly need to learn new skills and technologies to keep up with the latest trends. 
                        As changes in technology have accelerated, it’s become even more essential for people to master technology to be productive, 
                        invaluable employees who optimize, program and invent solutions—and even grow companies of their own. 
                        RapidBrains provide industry-leading technical training that delivers the most relevant and intuitive technology training.</p>
                  </div>
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

  <!-------------Section----------->

  <section class="wrapper bg-soft-ash">
    <div class="container py-10 py-md-16">
      <div class="row gx-md-10 gx-xl-12 gy-10">
        <div class="col-lg-12">
          <div class="d-flex flex-row">
              <div class="card card-border-start border-orange">
                  <div class="card-body">
                      <h4 style="padding-bottom: 10px;">Manage Project End to end</h4>
                      <p class="mb-0">RapidBrains Operations and Process Transformation drives the design and delivery of value-oriented operations transformations by taking an end-to-end 
                        approach to achieving excellence in execution. Our Versatility, uninterrupted availability, extensive knowledge of the current market, experienced hands 
                        and state of the heart products enables us to play well in the big picture. Through the Expert innovative combinations of the right technology strategy, 
                        the right business, the right operating model and the right execution path, we deliver the success to the business and emerge from them more quickly, developing 
                        competitive advantage regardless of economic conditions.</p>
                  </div>
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

  <!-------------Section----------->

  <section class="wrapper bg-light">
    <div class="container py-10 py-md-16">
      <div class="row gx-md-10 gx-xl-12 gy-10">
        <div class="col-lg-12">
          <div class="d-flex flex-row">
              <div class="card card-border-start border-pink">
                  <div class="card-body">
                      <h4 style="padding-bottom: 10px;">Recommend the best</h4>
                      <p class="mb-0">RapidBrains focus on understanding and visualizing the right solutions, along with the probable hindrances, 
                        thereafter work out proactive strategy that makes an impact on the business. We don’t mind to walk a mile more so as to do enough research 
                        through which we confidently help our clients to make an effective decision by opting the preferred path for the Business. 
                        We make sure that we mitigate the risk for your company before approaching you with our solution.RapidBrains has the culture that provides 
                        the best solution to every business. We provide the intersection of business and technology, where we deliver our clients gain measurable 
                        benefits that transcend cost-cutting to deliver a true execution advantage, simpler and flexible responses, and rigorous process execution across 
                        for the organization to lead it to certainty outcomes.</p>
                  </div>
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

  <!-------------Section----------->

  <section class="wrapper bg-soft-ash">
    <div class="container py-10 py-md-16">
      <div class="row gx-md-10 gx-xl-12 gy-10">
        <div class="col-lg-12">
          <div class="d-flex flex-row">
              <div class="card card-border-start border-red">
                  <div class="card-body">
                      <h4 style="padding-bottom: 10px;">From a big picture to digital picture</h4>
                      <p class="mb-0">RapidBrains Innovations at the intersection of business and technology are leading to the creation of new services, products and applications. 
                        These have the potential to change business environment beyond current interpretation. It is at the point of intersection of idea, expertise management, 
                        miniaturize, machine data, cloud technologies, smart networks and analytics that break through innovations happen. An institution must renew their core 
                        technology into new frontiers and bringing more efficiency, or addressing new ideas and new innovations. Take your picture from the present series and lead 
                        your business stands to benefit from this dual mission of Renew-New.</p>
                  </div>
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

  <!-------------Section----------->

  <section class="wrapper bg-light">
    <div class="container py-10 py-md-16">
      <div class="row gx-md-10 gx-xl-12 gy-10">
        <div class="col-lg-12">
          <div class="d-flex flex-row">
              <div class="card card-border-start border-yellow">
                  <div class="card-body">
                      <h4 style="padding-bottom: 10px;">Specific about the statement of work</h4>
                      <p class="mb-0">When we try to say what really defines our brand, we didn’t find the answer in the RapidBrains branding. We got the answer through our clients. 
                        Today, we have come across 1000+ clients that are changing the world through a broad mind relationship. We are doing it by taking our customers beyond the contract.
                         We build relation which benefit both parties are sustained by emotions, behaviour and actions that go beyond that explicit or implied contract. 
                         In business, a contract can safeguard all that is in within the “enclosed of control”. In the present uncertain world where businesses are facing new challenges 
                        and undergoing changes every day, what we deliver is too truly worthwhile is that which cannot be scripted in any contract - called values.</p>
                  </div>
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
  
@include('services.logo')
@endsection