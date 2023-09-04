@extends('layout.layoutnewheader')
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

  .row-cols-2>* {
  flex: 0 0 auto;
  width: 50%;
}
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
.new-mar{
  margin-top:30px;
}
}

@media (min-width: 992px){
.px-lg-33 {
    padding-right: 0.1rem !important;
    padding-left: 0.1rem !important;
}
#sect-bg{
  background-image:  url({{asset('assets/img/photos/rapidbrains-cover.webp')}});

}
#sect-bg1{
 display:block;

}
#sect-bg2{
 display:none;

}
}
@media (min-width: 720px){
  .cssk{
    width: 90% !important;
  }

#sect-bg{
  background-image:  url({{asset('assets/img/photos/rapidbrains-cover.webp')}});

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
.rotator-fade{
  color:#ff5f7a !important;
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
  <figure class="position-absoute" style="bottom: 0; left: 0; z-index: 2;"><img src="{{asset('assets/img/photos/Web Banner-min.jpg')}}
" alt="RapidBrains Home" /></figure>
</section>-->
<section class="wrapper overflow-hidden image-wrapper" data-image-src="url({{asset('assets/img/photos/rapidbrains-cover.webp')}})"  style="background-image: url({{asset('assets/img/photos/rapidbrains-cover.webp')}});padding-bottom: 90px" >


  

<div class="container pt-19 pt-md-21 text-center position-relative new-mar">
        <div class="position-absolute" style="top: -15%; left: 50%; transform: translateX(-50%);" data-cue="fadeIn"></div>
        <div class="row position-relative">
          <div class="col-lg-8 col-xxl-7 mx-auto position-relative">
            <div class="position-absolute shape grape w-5 d-none d-lg-block" style="top: -5%; left: -15%;" data-cue="fadeIn" data-delay="1500"><img src="{{asset('assets/img/svg/pie.svg')}}" class="svg-inject icon-svg w-100 h-100" alt="" /></div>
            <div class="position-absolute shape violet w-10 d-none d-lg-block" style="bottom: 30%; left: -20%;" data-cue="fadeIn" data-delay="1500"><img src="{{asset('assets/img/svg/scribble.svg')}}" class="svg-inject icon-svg w-100 h-100" alt="" /></div>
            <div class="position-absolute shape fuchsia w-6 d-none d-lg-block" style="top: 0%; right: -25%; transform: rotate(70deg);" data-cue="fadeIn" data-delay="1500"><img src="{{asset('assets/img/svg/tri.svg')}}" class="svg-inject icon-svg w-100 h-100" alt="" /></div>
            <div class="position-absolute shape yellow w-6 d-none d-lg-block" style="bottom: 25%; right: -17%;" data-cue="fadeIn" data-delay="1500"><img src="{{asset('assets/img/svg/circle.svg')}}" class="svg-inject icon-svg w-100 h-100" alt="" /></div>
            <div data-cues="slideInDown" data-group="page-title">
              <h1 class="display-1 fs-64 mb-5 mx-md-10 mx-lg-0">Talent marketplace to hire best remote<br /><span class="rotator-fade text-primary">Developers.,Architects.,Technical Leads.,Consultants.</span></h1>
              <p class="lead fs-24 mb-8">Build your remote team, Rapidly! </p>
              <div class="d-flex justify-content-center" data-cues="slideInDown"  >
              <span><a class="btn btn-lg btn-primary rounded-xl mx-1" href="https://talents.rapidbrains.com/" style="color:#fff;">Hire Talents</a></span>
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


<section class="wrapper bg-light ccs">

  <div class="container py-14 py-md-16 psb">
  <div class="row mt-11">
			<div class="col-lg-6 col-xl-53 mx-auto text-center">
				<h2 class="display-6 mb-3">Yes, you are in good company!</h2>
				<p class="lead mb-5 px-md-16 px-lg-33">With 14+ years of experience, we have served 1200+ companies from 80+ countries</p>

			</div>
			<!-- /column -->
		</div>
    <div class="swiper-container clients mb-0" data-margin="30" data-dots="false" data-autoplay-timeout="3000" data-items-xxl="7" data-items-xl="6" data-items-lg="5" data-items-md="4" data-items-xs="2">
      <div class="swiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide px-5"><img src="{{asset('assets/img/clients/1.webp')}}" alt="1" width="110" height="30" loading="lazy"/></div>
          <div class="swiper-slide px-5"><img src="{{asset('assets/img/clients/2.webp')}}" alt="2" width="110" height="30" loading="lazy" /></div>
          <div class="swiper-slide px-5"><img src="{{asset('assets/img/clients/3.webp')}}" alt="3" width="110" height="30" loading="lazy" /></div>
          <div class="swiper-slide px-5"><img src="{{asset('assets/img/clients/4.webp')}}" alt="4" width="110" height="30" loading="lazy" /></div>
          <div class="swiper-slide px-5"><img src="{{asset('assets/img/clients/5.webp')}}" alt="5" width="110" height="30" loading="lazy" /></div>
          <div class="swiper-slide px-5"><img src="{{asset('assets/img/clients/6.webp')}}" alt="6" width="110" height="30" loading="lazy" /></div>
          <div class="swiper-slide px-5"><img src="{{asset('assets/img/clients/7.webp')}}" alt="7" width="110" height="30" loading="lazy" /></div>
          <div class="swiper-slide px-5"><img src="{{asset('assets/img/clients/8.webp')}}" alt="8" width="110" height="30" loading="lazy" /></div>

        </div>
        <!--/.swiper-wrapper -->
      </div>
      <!-- /.swiper -->
    </div>
    <!-- /.swiper-container -->
  </div>
  <!-- /.container -->
</section>

<section class="wrapper bg-light" style="margin-top:-4rem;" >
  <div class="container py-14 py-md-16">
    <div class="row">
      <div class="col-lg-8 col-xl-7 col-xxl-6 cssk">
        <h3 class="display-4 mb-9">The smartest way to hire the best remote developers</h3>
      </div>
      <!-- /column -->
    </div>
    <!-- /.row -->
    <div class="row gx-md-8 gy-8">
      <div class="col-md-6 col-lg-3">
        <div class="icon btn btn-block btn-lg btn-soft-yellow pe-none mb-5"> <i class="uil uil-wallet"></i> </div>
        <h4>Reduce employee cost by 60%
</h4>
        <p class="mb-3">Hire pre-screened remote talents with strong technical and communication skills at unbeatable rates.</p>
        <a href="https://www.rapidbrains.com/benefits" class="more hover link-yellow">Learn More</a>
      </div>
      <!--/column -->
      <div class="col-md-6 col-lg-3">
        <div class="icon btn btn-block btn-lg btn-soft-red pe-none mb-5"> <i class="uil uil-building"></i> </div>
        <h4>Expand without a legal entity</h4>
        <p class="mb-3">We make sure that everything is in compliance with local labour law and act as a layer of legal insulation.</p>
        <a href="https://www.rapidbrains.com/benefits" class="more hover link-red">Learn More</a>
      </div>
      <!--/column -->
      <div class="col-md-6 col-lg-3">
        <div class="icon btn btn-block btn-lg btn-soft-leaf pe-none mb-5"> <i class="uil uil-globe"></i> </div>
        <h4>Hire Talent Across The World</h4>
        <p class="mb-3">Get access to a wider talent pool and hire the top developers from anywhere in the world.</p>
        <a href="https://www.rapidbrains.com/benefits" class="more hover link-leaf">Learn More</a>
      </div>
      <!--/column -->
      <div class="col-md-6 col-lg-3">
        <div class="icon btn btn-block btn-lg btn-soft-blue pe-none mb-5"> <i class="uil uil-dollar-sign"></i> </div>
        <h4>Zero Hiring Cost</h4>
        <p class="mb-3">Talents can be interviewed at free of cost and you need to pay only when they join your company.</p>
        <a href="https://www.rapidbrains.com/benefits" class="more hover link-blue">Learn More</a>
      </div>
      <!--/column -->
    </div>
    <!--/.row -->
  </div>
  <!-- /.container -->
</section>
<!-- /section -->

    <!--Hero Image Ends-->

    <!--What makes us different Starts-->


             <section class="wrapper bg-light">
  <div class="container py-14 py-md-16">
    <div class="row gx-md-8 gy-10 align-items-center">
      <div class="col-lg-6 offset-lg-1 order-lg-2 position-relative">
        <figure class="rounded"><img class="img-fluid"   width="510" height="481" src="{{asset('assets/img/photos/about27@2x.webp')}}" srcset="{{asset('assets/img/photos/about27@2x.webp')}} 2x" alt="about27" loading="lazy"/></figure>
        <div class="card shadow-lg position-absolute d-none d-md-block" style="top: 15%; left: -7%">
          <div class="card-body py-4 px-5">
            <div class="d-flex flex-row align-items-center">
              <div>
                <img src="{{asset('assets/img/icons/solid/alarm.svg')}}" class="svg-inject icon-svg icon-svg-xs solid-mono text-primary me-3" alt="alarm" />
              </div>
              <div>

                <h3 class="fs-25 counter mb-0 text-nowrap">24 hours</h3>
                <p class="fs-16 lh-sm mb-0 text-nowrap">To build team</p>
              </div>
            </div>
          </div>
          <!--/.card-body -->
        </div>
        <!--/.card -->
        <div class="card shadow-lg position-absolute text-center d-none d-md-block" style="bottom: 10%; left: -10%;">
          <div class="card-body p-6">
            <div class="progressbar semi-circle orange mb-3" data-value="80"></div>
            <h4 class="mb-0">Time Saving</h4>
          </div>
          <!--/.card-body -->
        </div>
        <!--/.card -->
      </div>
      <!--/column -->
      <div class="col-lg-5">
        <h3 class="display-4 mb-4 me-lg-n5">Hire the best remote developers and build your team, rapidly!</h3>
        <p class="mb-6">Companies can hire top remote developers worldwide, scale up or scale down in a matter of days with flexible engagements from hourly to full-time employment.</p>
        <p class="mb-6">With over 100k+  skilled remote software developers to choose from, hiring the best remote developers for your projects is super easy. Hire the top remote software engineers globally who are willing to work in your timezone without setting up a local entity - The smartest way to find and hire the best remote developers around the world, making hiring and employing easy and economical for companies and talents.</p>
      </div>
      <!--/column -->
    </div>
    <!--/.row -->
  </div>
  <!-- /.container -->
</section>
<!-- /section -->




             <!--             What makes us different Ends-->
             <!--Steps Starts-->

<!-- /section -->

             <!--Steps Ends-->
                      <!--pricing starts-->
             <section class="wrapper bg-light"  style="margin-top: -78px;">
	<div class="container py-14 py-md-16">
		<div class="row text-center">
			<div class="col-xl-10 mx-auto">
				<!--<h2 class="fs-15 text-uppercase text-primary mb-3">Job Positions</h2>-->
				<h3 class="display-4 mb-10 px-xxl-15">Hire the best talent in every technology. Take a look at our talent pool</h3>
			</div>
			<!-- /column -->
		</div>
		<!-- /.row -->
		<div class="row gy-6">
			<div class="col-md-6 col-lg-4">
				<a href="https://talents.rapidbrains.com/filter?skill=developer" class="card shadow-lg lift h-100">
					<div class="card-body p-5 d-flex flex-row">
						<div>
							<span class="avatar bg-red text-white w-11 h-11 fs-20 me-4">SE</span>
						</div>
						<div>
							<h4 class="mb-1">Software Engineers</h4>
						    <p class="mb-0 text-body">Java, Node.js, React.js, Vue.js </p>
							<span class="badge bg-pale-blue text-blue rounded py-1 mb-2">Starting from $1000/month</span>
						</div>
					</div>
				</a>
			</div>
			<!--/column -->
			<div class="col-md-6 col-lg-4">
				<a href="https://talents.rapidbrains.com/filter?skill=android" class="card shadow-lg lift h-100">
					<div class="card-body p-5 d-flex flex-row">
						<div>
							<span class="avatar bg-green text-white w-11 h-11 fs-20 me-4">MD</span>
						</div>
						<div>
						<h4 class="mb-1">Mobile Developer</h4>
						    <p class="mb-0 text-body">Kotlin, Flutter, Swift </p>
							<span class="badge bg-pale-blue text-blue rounded py-1 mb-2">Starting from $1200/month</span>
						</div>
					</div>
				</a>
			</div>
			<!--/column -->
			<div class="col-md-6 col-lg-4">
				<a href="https://talents.rapidbrains.com/filter?skill=aws" class="card shadow-lg lift h-100">
					<div class="card-body p-5 d-flex flex-row">
						<div>
							<span class="avatar bg-yellow text-white w-11 h-11 fs-20 me-4">CE</span>
						</div>
						<div>
						<h4 class="mb-1">Cloud Engineers</h4>
						    <p class="mb-0 text-body">Linux, AWS, GCP, Azure </p>
							<span class="badge bg-pale-violet text-violet rounded py-1 mb-2">Starting from $1000/month</span>
						</div>
					</div>
				</a>
			</div>
			<!--/column -->
			<div class="col-md-6 col-lg-4">
				<a href="https://talents.rapidbrains.com/filter?skill=devops" class="card shadow-lg lift h-100">
					<div class="card-body p-5 d-flex flex-row">
						<div>
							<span class="avatar bg-purple text-white w-11 h-11 fs-20 me-4">DE</span>
						</div>
						<div>

							<h4 class="mb-1">DevOps Engineers</h4>
						    <p class="mb-0 text-body">Terraform, Ansible, Kubernetes</p>
							<span class="badge bg-pale-blue text-blue rounded py-1 mb-2">Starting from $1200/month</span>
						</div>
					</div>
				</a>
			</div>
			<!--/column -->
			<div class="col-md-6 col-lg-4">
				<a href="https://talents.rapidbrains.com/filter?skill=html" class="card shadow-lg lift h-100">
					<div class="card-body p-5 d-flex flex-row">
						<div>
							<span class="avatar bg-orange text-white w-11 h-11 fs-20 me-4">WD</span>
						</div>
						<div>

							<h4 class="mb-1">Web Developers</h4>
						    <p class="mb-0 text-body">Wordpress, Magento, HTML, Php</p>
							<span class="badge bg-pale-aqua text-aqua rounded py-1 mb-2">Starting from $1000/month</span>
						</div>
					</div>
				</a>
			</div>
			<!--/column -->
			<div class="col-md-6 col-lg-4">
				<a href="https://talents.rapidbrains.com/filter?talent_id=qa" class="card shadow-lg lift h-100">
					<div class="card-body p-5 d-flex flex-row">
						<div>
							<span class="avatar bg-pink text-white w-11 h-11 fs-20 me-4">TE</span>
						</div>
						<div>

							<h4 class="mb-1">Test Engineers</h4>
						    <p class="mb-0 text-body">Selenium, BrowserStack, Testrail</p>
							<span class="badge bg-pale-blue text-blue rounded py-1 mb-2">Starting from $900/month</span>

						</div>
					</div>
				</a>
			</div>
			<!--/column -->
		</div>
		<!--/.row -->
		<div class="row mt-11">
			<div class="col-lg-6 col-xl-5 mx-auto text-center">
				<h2 class="display-6 mb-3">Still not able to find the right talent?</h2>
				<p class="lead mb-5 px-md-16 px-lg-3">Make a request. Our hiring team got you covered.</p>
				<span id="getintouch" class="btn btn-primary rounded-pill"  style="color:#fff;">Get in Touch</span>
			</div>
			<!-- /column -->
		</div>
		<!-- /.row -->
	</div>
	<!-- /.container -->
</section>
<!-- /section -->
<!--pricing ends-->

<!--Section-->

<section class="wrapper bg-soft-ash" style="margin-top: -78px;">
      <div class="container py-14 py-md-16">
        <div class="row gx-lg-8 gx-xl-12 gy-10 gy-lg-0">
          <div class="col-lg-4 mt-lg-2">
            <h2 class="fs-15 text-uppercase text-muted mb-3"></h2>
            <h6 class="display-4 mb-3 pe-xxl-1">Hire the best developers from the Top-Notch Companies</h6>
            <p class="lead fs-18 mb-0 pe-xxl-5" style="padding-top: 15px;">Unlock the power of top-tier talent with experienced developers from the world's leading companies</p>
          </div>
          <!-- /column -->
          <div class="col-lg-8" style="padding-top: 72px;">
            <div class="row row-cols-2 row-cols-md-4 gx-0 gx-md-8 gx-xl-12 gy-12">
              <div class="col">
                <figure class="px-3 px-md-0 px-xxl-2"><img src="https://rapidbrains.com/assets/img/company-logo/Apple-logo.webp" alt="Apple-logo" loading="lazy"/></figure>
              </div>
              <!--/column -->
              <div class="col">
                <figure class="px-3 px-md-0 px-xxl-2"><img src="https://rapidbrains.com/assets/img/company-logo/Microsoft-logo.webp" alt="Microsoft-logo" loading="lazy"/></figure>
              </div>
              <!--/column -->
              <div class="col">
                <figure class="px-3 px-md-0 px-xxl-2"><img src="https://rapidbrains.com/assets/img/company-logo/Google-logo.webp" alt="Google-logo" loading="lazy"/></figure>
              </div>
              <!--/column -->
              <div class="col">
                <figure class="px-3 px-md-0 px-xxl-2"><img src="https://rapidbrains.com/assets/img/company-logo/Meta-logo.webp" alt="Meta-logo" loading="lazy"/></figure>
              </div>
              <!--/column -->
              <div class="col">
                <figure class="px-3 px-md-0 px-xxl-2"><img src="https://rapidbrains.com/assets/img/company-logo/Amazon-logo.webp" alt="Amazon-logo" loading="lazy"/></figure>
              </div>
              <!--/column -->
              <div class="col">
                <figure class="px-3 px-md-0 px-xxl-2"><img src="https://rapidbrains.com/assets/img/company-logo/Oracle-logo.webp" alt="Oracle-logo" loading="lazy"/></figure>
              </div>
              <!--/column -->
              <div class="col">
                <figure class="px-3 px-md-0 px-xxl-2"><img src="https://rapidbrains.com/assets/img/company-logo/IBM-logo.webp" alt="IBM-logo" loading="lazy"/></figure>
              </div>
              <!--/column -->
              <div class="col">
                <figure class="px-3 px-md-0 px-xxl-2"><img src="https://rapidbrains.com/assets/img/company-logo/Deloitte-logo.webp" alt="Deloitte-logo" loading="lazy"/></figure>
              </div>
              <!--/column -->
            </div>
            <!--/.row -->
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </section>

  <!-- /section -->
<!--Join Us Starts-->

<section class="wrapper bg-soft-yellow">
  <div class="container py-5 py-md-14">
    <div class="row gx-lg-0 gy-10 align-items-center">
        <!--/column -->
      <div class="col-lg-5">
        <h2 class="display-4 mb-3">Join the remote work revolution!</h2>
        <p class="lead fs-lg">Join us and get access to the best brains in the world</p>
            <p class="mb-0">Our mission is to make companies more profitable by reducing the employee cost through remote talents around the world and a vision to create opportunity for everyone by connecting the right talents to the right organisations</p>
            </div>
      <!--/column -->
      <div class="col-lg-6 order-lg-2 offset-lg-1 grid">
        <div class="row gx-md-5 gy-5 align-items-center counter-wrapper isotope">
          <div class="item col-md-6">
            <div class="card shadow-lg">
              <div class="card-body">
                <div class="d-flex d-lg-block d-xl-flex flex-row">

                  <div>
                    <div class="icon btn btn-circle btn-lg btn-soft-purple pe-none mx-auto me-4 mb-lg-3 mb-xl-0"> <i class="uil uil-presentation-check"></i> </div>
                  </div>

                  <div>
                    <h3 class="counter mb-1">100k+</h3>
                    <p class="mb-0">Total Talents</p>
                  </div>
                </div>
              </div>
              <!--/.card-body -->
            </div>
            <!--/.card -->
          </div>
          <!--/column -->
          <div class="item col-md-6">
            <div class="card shadow-lg">
              <div class="card-body">
                <div class="d-flex d-lg-block d-xl-flex flex-row">
                  <div>
                    <div class="icon btn btn-circle btn-lg btn-soft-red pe-none mx-auto me-4 mb-lg-3 mb-xl-0"> <i class="uil uil-users-alt"></i> </div>
                  </div>
                  <div>
                    <h3 class="counter mb-1">85+ </h3>
                    <p class="mb-0">Countries Served</p>
                  </div>
                </div>
              </div>
              <!--/.card-body -->
            </div>
            <!--/.card -->
          </div>
          <!--/column -->
          <div class="item col-md-6">
            <div class="card shadow-lg">
              <div class="card-body">
                <div class="d-flex d-lg-block d-xl-flex flex-row">
                  <div>
                    <div class="icon btn btn-circle btn-lg btn-soft-yellow pe-none mx-auto me-4 mb-lg-3 mb-xl-0"> <i class="uil uil-user-check"></i> </div>
                  </div>
                  <div>
                    <h3 class="counter mb-1">1.2k+</h3>
                    <p class="mb-0">Happy Customers</p>
                  </div>
                </div>
              </div>
              <!--/.card-body -->
            </div>
            <!--/.card -->
          </div>
          <!--/column -->
          <div class="item col-md-6">
            <div class="card shadow-lg">
              <div class="card-body">
                <div class="d-flex d-lg-block d-xl-flex flex-row">
                  <div>
                    <div class="icon btn btn-circle btn-lg btn-soft-aqua pe-none mx-auto me-4 mb-lg-3 mb-xl-0"> <i class="uil uil-trophy"></i> </div>
                  </div>
                  <div>
                    <h3 class="counter mb-1">14+</h3>
                    <p class="mb-0">Years in Industry </p>
                  </div>
                </div>
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
 <!--/section -->

 <!--         Join our community Ends   -->

             <!--Screening Process Starts-->

             <section class="wrapper bg-light">
  <div class="container py-14 py-md-16">
    <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
        <!--/column -->
      <div class="col-lg-5">
        <!--<h2 class="fs-15 text-uppercase text-muted mb-3">What We Do?</h2>-->
        <h3 class="display-4 mb-5">RapidBrains Screening Process</h3>
        <p>With RapidBrains you can hire employee without having to set up a local entity. We do hiring, onboarding, HR activities and comply with the local labour law for minimum wage, tax, health insurance, termination and so on.</p>
            <a href="https://www.rapidbrains.com/process" class="btn btn-primary rounded-pill" style="color: #ffffff;">More Details</a>
      </div>
      <!--/column -->
      <div class="col-lg-7 order-lg-2">
          <div class="row gx-md-5 gy-5">
          <div class="col-md-5 offset-md-1 align-self-end">
            <div class="card bg-pale-yellow">
              <div class="card-body">
                <img src="{{asset('assets/img/icons/lineal/telephone-3.svg')}}" class="svg-inject icon-svg icon-svg-md text-yellow mb-3" alt="telephone" loading="lazy"/>
                <h4>Attitude Check</h4>
                <p class="mb-0">Communication and attitude are key when screening candidates. We make sure that they will be a good fit for your company.</p>
              </div>
              <!--/.card-body -->
            </div>
            <!--/.card -->
          </div>
          <!--/column -->
          <div class="col-md-6 align-self-end">
            <div class="card bg-pale-red">
              <div class="card-body">
                <img src="{{asset('assets/img/icons/lineal/shield.svg')}}" class="svg-inject icon-svg icon-svg-md text-red mb-3" alt="shield" loading="lazy"/>
                <h4>Skill-set Review</h4>
                <p class="mb-0">Checking the talent's skill set is atmost important. RapidBrains setup screening tests for each technology to ensure candidate's experience.</p>
              </div>
              <!--/.card-body -->
            </div>
            <!--/.card -->
          </div>
          <!--/column -->
          <div class="col-md-5">
            <div class="card bg-pale-leaf">
              <div class="card-body">
                <img src="{{asset('assets/img/icons/lineal/cloud-computing-3.svg')}}" class="svg-inject icon-svg icon-svg-md text-leaf mb-3" alt="cloud-computing" loading="lazy"/>
                <h4>Experience Screening</h4>
                <p class="mb-0">RapidBrains do a thorough check on the experience of the employees with rigorous interviews and tests.</p>
              </div>
              <!--/.card-body -->
            </div>
            <!--/.card -->
          </div>
          <!--/column -->
          <div class="col-md-6 align-self-start">
            <div class="card bg-pale-primary">
              <div class="card-body">
                <img src="{{asset('assets/img/icons/lineal/analytics.svg')}}" class="svg-inject icon-svg icon-svg-md text-primary mb-3" alt="analytics" loading="lazy"/>
                <h4>Background Verification</h4>
                <p class="mb-0">A thorough verification of the background of the employees is done to ensure that they are who they say they are.</p>
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
             <!--Why comapnies love RB Starts-->
             <section class="wrapper bg-soft-orange" style="background-color:#FEFEFE !important;">
  <div class="container py-14 py-md-16">
    <h2 class="display-4 mb-3">How We Do It?</h2>
    <p class="lead fs-lg mb-8">It’s just four steps to build your amazing remote team</p>
    <div class="row gx-lg-8 gx-xl-12 gy-6 process-wrapper line">
      <div class="col-md-6 col-lg-3"> <span class="icon btn btn-circle btn-lg btn-soft-primary pe-none mb-4"><span class="number">01</span></span>
        <h4 class="mb-1">Shortlist</h4>
        <p class="mb-0">A pool of 1000+ candidates for you to choose from. Still not able to find the right one? Our hiring team got you covered.
</p>
      </div>
      <!--/column -->
      <div class="col-md-6 col-lg-3"> <span class="icon btn btn-circle btn-lg btn-primary pe-none mb-4"><span class="number">02</span></span>
        <h4 class="mb-1">Schedule</h4>
        <p class="mb-0">You can set your own process. If you don’t have one, we screen them with subject matter experts and get you feedback on every candidate.</p>
      </div>
      <!--/column -->
      <div class="col-md-6 col-lg-3"> <span class="icon btn btn-circle btn-lg btn-soft-primary pe-none mb-4"><span class="number">03</span></span>
        <h4 class="mb-1">Hire</h4>
        <p class="mb-0">As simple as one click. No need to worry about employment paperworks or local labour laws. RapidBrains does it all!</p>
      </div>
      <!--/column -->
      <div class="col-md-6 col-lg-3"> <span class="icon btn btn-circle btn-lg btn-soft-primary pe-none mb-4"><span class="number">04</span></span>
        <h4 class="mb-1">Onboard</h4>
        <p class="mb-0">Once you’ve picked your choice - voila! You can start with a meeting to kick it off or start assigning tasks.</p>
      </div>
      <!--/column -->
    </div>
    <!--/.row -->
  </div>
  <!-- /.container -->
</section>



<section class="wrapper bg-soft-orange">
  <div class="container py-10 py-md-16">
    <div class="row gx-md-10 gx-xl-12 gy-10">
        <h2 class="display-3 mb-10 text-center">Why do companies love RapidBrains?</h2>
      <div class="col-lg-6">
        <div class="d-flex flex-row">
            <div class="card card-border-start border-red">
                <div class="card-body">
                    <h4>Cost-effective</h4>
                    <p class="mb-0">With RapidBrains you can hire pre-screened remote talents with strong technical and communication
                        skills at unbeatable rates when compared to our competitors</p>
                </div>
            </div>
        </div>
      </div>
      <!-- /column -->
      <div class="col-lg-6">
        <div class="d-flex flex-row">
            <div class="card  card-border-end border-yellow">
                <div class="card-body">
                    <h4>No employer costs</h4>
                    <p class="mb-0">RapidBrains take care of all employer costs including government requirements,
                        benefits, taxes, fees healthcare insurance and even expense management and monthly reimbursement</p>
                </div>
            </div>

        </div>
      </div>
      <!-- /column -->
      <div class="col-lg-6">
        <div class="d-flex flex-row">
            <div class="card shadow-lg card-border-end border-green">
                <div class="card-body">
                    <h4>Flexible Engagements</h4>
                    <p class="mb-0">Choose an engagement model that best fits your business.
                        Take up an employee for either an hourly or monthly basis. Totally up to you!</p>
                </div>
            </div>
        </div>
      </div>
      <!-- /column -->
      <div class="col-lg-6">
        <div class="d-flex flex-row">
            <div class="card  card-border-start border-purple">
                <div class="card-body">
                    <h4>No lock-in period</h4>
                    <p class="mb-0">There’s no long term contract or commitment required. Want someone for 2 weeks? Or maybe 2 months? We got you!</p>
                </div>
            </div>
        </div>
      </div>
      <!-- /column -->
      <!-- /column -->
      <div class="col-lg-6">
        <div class="d-flex flex-row">
            <div class="card  card-border-start border-orange">
                <div class="card-body">
                    <h4>Custom Hiring Process</h4>
                    <p class="mb-0">Our recruiting team can adapt to any of your processes - be it a machine test,
                        multiple rounds of interviews, our candidates will show their best.

                    </p>
                </div>
            </div>
        </div>
      </div>
      <!-- /column -->
      <!-- /column -->
      <div class="col-lg-6">
        <div class="d-flex flex-row">
            <div class="card shadow-lg  card-border-end border-pink">
                <div class="card-body">
                    <h4>Upskilling and training</h4>
                    <p class="mb-0">We upskill and train your employees from time-to-time to help them with a staged career progression.
                        Or if you want to train an employee for a specific skillset we got you covered.</p>
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

             <!--Why comapnies love RB Ends-->


			 <!--Hiring Starts-->
            <section class="wrapper">
  <div class="container py-14 py-md-16">
    <h2 class="display-4 mb-3">RapidBrains Vs Traditional Hiring</h2>
    <p class="lead fs-lg">We do more to deliver you the suitable remote talents that satisfy and fit into the right skill set you are looking for. </p>
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
              <div class="h4 mb-1">RapidBrains</div>
              <!--<div class="fs-15 fw-normal text-secondary">$9 / Monthly</div>-->
            </th>
            <th>
              <div class="h4 mb-1">Traditional Hiring</div>
            </th>

          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="option text-start">Time to hire talent</td>
            <td>Immediate</td>
            <td>3 to 7 days</td>

          </tr>
          <tr>
            <td class="option text-start">Recruitment cost</td>
            <td>Zero</td>
            <td>Recruiter's Salary</td>

          </tr>
          <tr>
            <td class="option text-start">Pre-screened talents</td>
            <td>Yes</td>
            <td>No</td>

          </tr>
          <tr>
            <td class="option text-start">Quality Assurance / Replacement</td>
            <td>Yes</td>
            <td>No</td>
          <tr>
            <td class="option text-start">Background Verification</td>
            <td>Yes</td>
            <td>No</td>

          </tr>
          <tr>
            <td class="option text-start">Notice Period</td>
            <td>Immediate</td>
            <td>30 to 60 days</td>

          </tr>
          <tr>
            <td class="option text-start">Statutory Compliance in HR, Payroll and Tax</td>
            <td>Zero</td>
            <td>Your Team</td>

          </tr>
          <tr>
            <td class="option text-start">Termination cost</td>
            <td>Zero</td>
            <td>Very High</td>

          </tr>

        </tbody>

      </table>
    </div>
    <!-- /.table-responsive -->
  </div>
  <!-- /.container -->
</section>
<!-- /section -->


            <!--Hiring Ends-->



           <!--Save your time starts  -->
           <!-- /section -->
           <section class="wrapper bg-light" style="margin-top: -60px;">
            <div class="container py-14 py-md-16">
              <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">

                <div class="col-lg-8">
                  <div class="swiper-container text-center mb-6" data-margin="30" data-dots="true" data-items-xl="3" data-items-md="2" data-items-xs="1" style="border-bottom-width: -30px;">
                    <div class="swiper">
                      <div class="swiper-wrapper">
                        <div class="swiper-slide">
                          <img class="rounded-circle w-20 mx-auto mb-4" src="https://www.rapidbrains.com/assets/img/awards/svg/clutch-01.svg" srcset="https://www.rapidbrains.com/assets/img/awards/svg/clutch-01.svg" alt="" />
                          <h4 class="mb-1">Clutch's top 100 IT firms of 2021</h4>
                          <!--<nav class="nav social justify-content-center text-center mb-0">
                            <a href="#"><i class="uil uil-youtube"></i></a>
                            <a href="#"><i class="uil uil-facebook-f"></i></a>
                            <a href="#"><i class="uil uil-dribbble"></i></a>
                          </nav>-->
                          <!-- /.social -->
                        </div>
                        <!--/.swiper-slide -->
                        <div class="swiper-slide">
                          <img class="rounded-circle w-20 mx-auto mb-4" src="https://www.rapidbrains.com/assets/img/awards/svg/ccss-01.svg" srcset="https://www.rapidbrains.com/assets/img/awards/svg/ccss-01.svg" alt="" />
                          <h4 class="mb-1">Crown Commercial Service Supplier, UK</h4>
                          <!--<nav class="nav social justify-content-center text-center mb-0">
                            <a href="#"><i class="uil uil-linkedin"></i></a>
                            <a href="#"><i class="uil uil-tumblr-square"></i></a>
                            <a href="#"><i class="uil uil-facebook-f"></i></a>
                          </nav>-->
                          <!-- /.social -->
                        </div>
                        <!--/.swiper-slide -->
                        <div class="swiper-slide">
                          <img class="rounded-circle w-20 mx-auto mb-4" src="https://www.rapidbrains.com/assets/img/awards/svg/bizz.svg" srcset="https://www.rapidbrains.com/assets/img/awards/svg/bizz.svg" alt="" />
                          <h4 class="mb-1">The BIZZ Award by WorldCob, USA</h4>
                          <!--<nav class="nav social justify-content-center text-center mb-0">
                            <a href="#"><i class="uil uil-youtube"></i></a>
                            <a href="#"><i class="uil uil-facebook-f"></i></a>
                            <a href="#"><i class="uil uil-dribbble"></i></a>
                          </nav>-->
                          <!-- /.social -->
                        </div>
                        <!--/.swiper-slide -->
                        <div class="swiper-slide">
                          <img class="rounded-circle w-20 mx-auto mb-4" src="https://www.rapidbrains.com/assets/img/awards/svg/IQC-01.svg" srcset="https://www.rapidbrains.com/assets/img/awards/svg/IQC-01.svg" alt="" />
                          <h4 class="mb-1">International Quality Crown Award, London</h4>
                          <!--<nav class="nav social justify-content-center text-center mb-0">
                            <a href="#"><i class="uil uil-twitter"></i></a>
                            <a href="#"><i class="uil uil-facebook-f"></i></a>
                            <a href="#"><i class="uil uil-dribbble"></i></a>
                          </nav>-->
                          <!-- /.social -->
                        </div>
                        <!--/.swiper-slide -->
                        <div class="swiper-slide">
                          <img class="rounded-circle w-20 mx-auto mb-4" src="https://www.rapidbrains.com/assets/img/awards/svg/consultants-01.svg" srcset="https://www.rapidbrains.com/assets/img/awards/svg/consultants-01.svg" alt="" />
                          <h4 class="mb-1">Consultant of the <br>Year 2015</h4>
                          <!--<nav class="nav social justify-content-center text-center mb-0">
                            <a href="#"><i class="uil uil-facebook-f"></i></a>
                            <a href="#"><i class="uil uil-slack"></i></a>
                            <a href="#"><i class="uil uil-dribbble"></i></a>
                          </nav>-->
                          <!-- /.social -->
                        </div>
                         <!--/.swiper-slide -->
                         <div class="swiper-slide">
                          <img class="rounded-circle w-20 mx-auto mb-4" src="https://www.rapidbrains.com/assets/img/awards/svg/CIP-01.svg" srcset="https://www.rapidbrains.com/assets/img/awards/svg/CIP-01.svg" alt="" />
                          <h4 class="mb-1">International Gold Star Millenium Award</h4>
                          <!--<nav class="nav social justify-content-center text-center mb-0">
                            <a href="#"><i class="uil uil-youtube"></i></a>
                            <a href="#"><i class="uil uil-facebook-f"></i></a>
                            <a href="#"><i class="uil uil-dribbble"></i></a>
                          </nav>-->
                          <!-- /.social -->
                        </div>
                         <!--/.swiper-slide -->
                         <div class="swiper-slide">
                          <img class="rounded-circle w-20 mx-auto mb-4" src="https://www.rapidbrains.com/assets/img/awards/svg/IAC-01.svg" srcset="https://www.rapidbrains.com/assets/img/awards/svg/IAC-01.svg" alt="" />
                          <h4 class="mb-1">Global Achievers Award for Business Excellence</h4>
                          <!--<nav class="nav social justify-content-center text-center mb-0">
                            <a href="#"><i class="uil uil-youtube"></i></a>
                            <a href="#"><i class="uil uil-facebook-f"></i></a>
                            <a href="#"><i class="uil uil-dribbble"></i></a>
                          </nav>-->
                          <!-- /.social -->
                        </div>
                         <!--/.swiper-slide -->
                         <div class="swiper-slide">
                          <img class="rounded-circle w-20 mx-auto mb-4" src="https://www.rapidbrains.com/assets/img/awards/svg/IEDRA-01-01.svg" srcset="https://www.rapidbrains.com/assets/img/awards/svg/IEDRA-01-01.svg" alt="" />
                          <h4 class="mb-1">Fastest Growing Indian Company Excellence Award</h4>
                          <!--<nav class="nav social justify-content-center text-center mb-0">
                            <a href="#"><i class="uil uil-youtube"></i></a>
                            <a href="#"><i class="uil uil-facebook-f"></i></a>
                            <a href="#"><i class="uil uil-dribbble"></i></a>
                          </nav>-->
                          <!-- /.social -->
                        </div>
                         <!--/.swiper-slide -->
                         <div class="swiper-slide">
                          <img class="rounded-circle w-20 mx-auto mb-4" src="https://www.rapidbrains.com/assets/img/awards/svg/cool%20startup-01.svg" srcset="https://www.rapidbrains.com/assets/img/awards/svg/cool%20startup-01.svg" alt="" />
                          <h4 class="mb-1">Siliconindia 50 cool startups of the year</h4>
                          <!--<nav class="nav social justify-content-center text-center mb-0">
                            <a href="#"><i class="uil uil-youtube"></i></a>
                            <a href="#"><i class="uil uil-facebook-f"></i></a>
                            <a href="#"><i class="uil uil-dribbble"></i></a>
                          </nav>-->
                          <!-- /.social -->
                        </div>
                      </div>
                      <!--/.swiper-wrapper -->
                    </div>
                    <!-- /.swiper -->
                  </div>
                  <!-- /.swiper-container -->
                </div>
                <!--/column -->
                <div class="col-lg-4">
                  <h2 class="fs-15 text-uppercase text-primary mb-3">RapidBrains Award-Winning Excellence</h2>
                  <h3 class="display-5 mb-5">Celebrating Our Industry Accolades and Achievements</h3>
                  <p>Discover RapidBrains impressive collection of accolades, showcasing our dedication to excellence and commitment to delivering outstanding remote development solutions.</p>
                </div>
                <!--/column -->
              </div>
              <!--/.row -->
            </div>
            <!-- /.container -->
          </section>
          <!-- /section -->




   @include('services.logo')

    <section class="wrapper bg-gray">
      <div class="container py-15 py-md-17 pb-md-19">
        <div class="row align-items-center gy-8 mb-13">
          <div class="col-lg-7 text-center text-lg-start">
            <h3 class="display-3 mb-0 pe-xl-10 pe-xxl-15">Why remote working is preferred by the international hires?</h3>
          </div>
          <!-- /column -->
          <div class="col-lg-5">
            <div class="row gy-6 text-center">
              <div class="col-md-6">
                <div class="progressbar semi-circle fuchsia" data-value="60"></div>
                <h4 class="mb-0">Cost savings</h4>
              </div>
              <!-- /column -->
              <div class="col-md-6">
                <div class="progressbar semi-circle orange" data-value="95"></div>
                <h4 class="mb-0">Retention Rate</h4>
              </div>
              <!-- /column -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->
    <!--Save your time ends-->

    <section class="wrapper bg-light">

  <div class="container py-20 py-md-20" style= "adding-top: 10rem !important;
    padding-bottom: 1rem !important;">


     <div class="card image-wrapper shadow-lg mt-n21 mt-md-n23 bg-full bg-image mb-14" id="lazy" data-image-src="{{asset('assets/img/photos/RapidBrains-footerbg.webp')}}">
        <div class="card-body">
          <div class="row text-center">
            <div class="col-xl-11 col-xxl-9 mx-auto">
              <h2 class="fs-16 text-uppercase text-black mb-3">Join the remote work revolution!</h2>
              <h3 class="display-2 mb-8 px-lg-8 text-black">Let us know the skills you need and we'll find the best talent for you</h3>

            </div>
            <!--/column -->
          </div>
          <!-- /.row -->
          <div class="d-flex justify-content-center">
            <span><span class="btn btn-white rounded" id="callbackreq">Request a call back</span></span>
          </div>
        </div>
        <!--/.card-body -->
      </div>
      <!--/.card -->





      <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "Article",
          "mainEntityOfPage": {
            "@type": "WebPage",
            "@id": "https://www.rapidbrains.com/"
          },
          "headline": "What is the mission of RapidBrains?",
          "description": "To make companies more profitable by reducing the employee cost through remote talents around the world.",
          "image": "",  
          "author": {
            "@type": "",
            "name": ""
          },  
          "publisher": {
            "@type": "Organization",
            "name": "",
            "logo": {
              "@type": "ImageObject",
              "url": ""
            }
          },
          "datePublished": ""
        }
        </script>



        <script type="application/ld+json">
          {
            "@context": "https://schema.org/", 
            "@type": "BreadcrumbList", 
            "itemListElement": [{
              "@type": "ListItem", 
              "position": 1, 
              "name": "RapidBrains: Hire Best Remote Software Developers",
              "item": "https://www.rapidbrains.com/"  
            },{
              "@type": "ListItem", 
              "position": 2, 
              "name": "How do you hire remote talents from RapidBrains?",
              "item": "https://talents.rapidbrains.com/"  
            },{
              "@type": "ListItem", 
              "position": 3, 
              "name": "How do I get job from Turing?",
              "item": "https://jobs.rapidbrains.com/"  
            }]
          }
          </script>

          


























  </div>
  </section>

@endsection
