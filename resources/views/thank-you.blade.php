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
<section class="wrapper overflow-hidden image-wrapper" id="sect-bg" style="padding-bottom: 90px" >
    


<div class="container pt-19 pt-md-21 text-center position-relative">
        <div class="position-absolute" style="top: -15%; left: 50%; transform: translateX(-50%);" data-cue="fadeIn"></div>
        <div class="row position-relative">
          <div class="col-lg-8 col-xxl-7 mx-auto position-relative">
            <div class="position-absolute shape grape w-5 d-none d-lg-block" style="top: -5%; left: -15%;" data-cue="fadeIn" data-delay="1500"><img src="{{asset('assets/img/svg/pie.svg')}}" class="svg-inject icon-svg w-100 h-100" alt="" /></div>
            <div class="position-absolute shape violet w-10 d-none d-lg-block" style="bottom: 30%; left: -20%;" data-cue="fadeIn" data-delay="1500"><img src="{{asset('assets/img/svg/scribble.svg')}}" class="svg-inject icon-svg w-100 h-100" alt="" /></div>
            <div class="position-absolute shape fuchsia w-6 d-none d-lg-block" style="top: 0%; right: -25%; transform: rotate(70deg);" data-cue="fadeIn" data-delay="1500"><img src="{{asset('assets/img/svg/tri.svg')}}" class="svg-inject icon-svg w-100 h-100" alt="" /></div>
            <div class="position-absolute shape yellow w-6 d-none d-lg-block" style="bottom: 25%; right: -17%;" data-cue="fadeIn" data-delay="1500"><img src="{{asset('assets/img/svg/circle.svg')}}" class="svg-inject icon-svg w-100 h-100" alt="" /></div>
            <div data-cues="slideInDown" data-group="page-title">
              <h1 class="display-1 fs-64 mb-5 mx-md-10 mx-lg-0">A talent marketplace to hire best remote<br /></h1>
              <p class="lead fs-24 mb-8">Build your remote team, Rapidly! </p>
              <div class="d-flex justify-content-center" data-cues="slideInDown"  >
              <span><a class="btn btn-lg btn-primary rounded-xl mx-1" href="javascript: history.go(-1)" style="color:#fff;">Go back</a></span>
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

<section class="wrapper bg-light" style="margin-top: 192px;">

</section>
@endsection