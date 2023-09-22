<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="@if(isset($data['description'])){{$data['description']}}@else A talent marketplace to build remote teams, rapidly. From RapidBrains, companies can hire pre-screened contract remote engineers and developers with flexible engagements from hourly to full-time @endif">
  <meta name="keywords" content="@if(isset($data['keywords'])){{$data['keywords']}}@else remote engineers, remote developers, remote talents, hire contractors, talent marketplace, affordable, hire engineers, hire developers, hire talents, hire contractors, fulltime employees, partime employees @endif">
  <meta name="author" content="rapidbrains">
  <meta name="google-site-verification" content="Zv6WZ0yzns6Zo2AU1lvWhmo9lPRo23wGWFR2GIld6Vk"/>
  <link rel="canonical"  href="@if(isset($data['canonical'])){{$data['canonical']}}@else https://www.rapidbrains.com @endif" />
  <title>@if(isset($data['title'])) {{$data['title']}}@else RapidBrains - Build your remote team, rapidly @endif</title>
  <link rel="shortcut icon" href="{{asset('assets/img/favicon.png')}}">
  <link rel="stylesheet"   href="{{asset('assets/css/plugin-newhome.css')}}">
  <link rel="stylesheet"  rel="preload"   href="{{asset('assets/css/style-newhome.css')}}"    as="style">
    <link rel="stylesheet" media="print" onload="this.onload=null;this.removeAttribute('media');"  href="{{asset('assets/css/colors/grape.css')}}">

    <!--<link rel="stylesheet" href="{{asset('assets/css/colors/pink.css')}}">-->
    @yield('css_after')
</head>
<script async src="https://www.googletagmanager.com/gtag/js?id=G-37SPRD22NF"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-37SPRD22NF');
</script>

<style>


@media (min-width: 992px){
/* .navbar-expand-lg .navbar-nav .dropdown-menu .dropdown-toggle:after {
 
    right: -1rem;
  
} */
.rgt{
  --bs-dropdown-min-width: 14rem  !important;
}
}

.uil-dollar-sign-alt:before {
  content: "\ea9e";
}
.uil-dollar-sign:before {
  content: "\ea9f";
}
.px-3 {
    padding-right: 0.75rem !important;
    padding-left: 0.75rem !important;
}
  .g-12, .gy-12 {
    --bs-gutter-y: 5.5rem !important;
}


.g-0, .gx-0 {
    --bs-gutter-x: 0;
}

@media (min-width: 992px){
.navbar-expand-lg .navbar-nav .nav-link {
    padding-right: var(--bs-navbar-nav-link-padding-x) !important;
    padding-left: var(--bs-navbar-nav-link-padding-x)!important;
}
.px-3 {
    padding-right: 0.5rem !important;
    padding-left: 2.5rem !important;
}
}
  [data-cue=fadeIn], [data-cues=fadeIn]>* {
    opacity: 0;
}
    body{
        font-weight: 400;
    }
    .w-100 {
    width: 100% !important;
}
.d-inline-flex {
    display: inline-flex !important;
}
    .mb-0 {
    margin-bottom: 0 !important;
}
    .w-6 {
    width: 1.5rem !important;
}
.shape.fuchsia .svg-fill {
    fill: #953bff;
}
.shape.yellow .svg-fill {
    fill: #ff8955;
}
.shape.grape .svg-fill {
    fill: #ff8955;
}
.shape .svg-fill {
    fill: #953bff;
}
    .w-5 {
    width: 1.25rem !important;
}
.w-10 {
    width: 2.5rem !important;
}
    a:link {
  color: #60697b;

}
.btn-primary{
    background-color: #343F52 !important;
    border-color: #343F52 !important;
}
  .ft-pad{
    padding-bottom: 6px;
  }
.grecaptcha-badge{
    display:none;
}
.ms-auto {
     margin-left: auto !important;
}
.dropdown-item{
  color:#596273 !important;
  font-weight:500 !important;

}
.hed {
    color: #000 !important;
    background-color: #fff  !important;
    border-color: #fff  !important;
}
.sks{
  color: #fff !important;
    background-color: #343f52  !important;
    border-color: #343f52  !important;
}
@media (min-width: 768px){
.py-md-6 {
    padding-top: 2rem !important;
    padding-bottom: 1.5rem !important;
}
}
.swiper-controls {
  position: absolute !important;
  pointer-events: none;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
}
.swiper-controls .swiper-navigation {
  pointer-events: all;
}
.swiper-controls .swiper-navigation .swiper-button {
  background: rgba(255, 255, 255, 0.7);
  color: #343f52;
  border: 0;
  box-shadow: 0rem 0.25rem 0.75rem rgba(30, 34, 40, 0.02);
  width: 2.2rem;
  height: 2.2rem;
  line-height: inherit;
  border-radius: 100%;
  text-shadow: none;
  transition: all 0.2s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
  .swiper-controls .swiper-navigation .swiper-button {
    transition: none;
  }
}
.swiper-controls .swiper-navigation .swiper-button:hover {
  background: rgba(255, 255, 255, 0.9);
}
.swiper-controls .swiper-navigation .swiper-button:focus {
  outline: 0;
}
.swiper-controls .swiper-navigation .swiper-button:after {
  font-family: "Unicons";
  font-size: 1.2rem;
}
.swiper-controls .swiper-navigation .swiper-button.swiper-button-prev {
  left: 1rem;
}
.swiper-controls .swiper-navigation .swiper-button.swiper-button-prev:after {
  content: "\e949";
}
.swiper-controls .swiper-navigation .swiper-button.swiper-button-next {
  right: 1rem;
}
.swiper-controls .swiper-navigation .swiper-button.swiper-button-next:after {
  content: "\e94c";
}
.swiper-controls .swiper-navigation .swiper-button.swiper-button-disabled {
  background: rgba(255, 255, 255, 0.7);
}
.swiper-controls .swiper-pagination {
  bottom: -2.8rem;
  position: absolute !important;
  pointer-events: all;
}
.swiper-controls .swiper-pagination .swiper-pagination-bullet {
  -webkit-backface-visibility: visible;
  transition: all 0.2s ease-in-out;
  position: relative;
  display: inline-block;
  width: 0.5rem;
  height: 0.5rem;
  margin: 0 0.3rem;
  padding: 0;
  background: #aab0bc;
  opacity: 0.5;
  border-radius: 100%;
  border: 3px solid transparent;
  transform: scale(0.6);
}
@media (prefers-reduced-motion: reduce) {
  .swiper-controls .swiper-pagination .swiper-pagination-bullet {
    transition: none;
  }
}
.swiper-controls .swiper-pagination .swiper-pagination-bullet:hover {
  transform: scale(1);
}
.swiper-controls .swiper-pagination .swiper-pagination-bullet:focus {
  outline: 0;
}
.swiper-controls .swiper-pagination .swiper-pagination-bullet.swiper-pagination-bullet-active {
  transform: scale(1);
  background: none;
  border-color: #aab0bc;
}
</style>
<body >
<div class="">
  <div class="content-wrapper">
      <!--Header Starts  -->
      <!--Header Starts  -->

      @include('header4')

   @yield('section')


  <!-- /.content-wrapper -->

  @include('footer')








<!---- Enquire now popup start-->



<div class="modal fade" id="enquirenow" role="dialog">
  <div class="modal-dialog modal-dialog-centered modal-sm">
                     <div class="modal-content text-center">
                       <div class="modal-body">
                         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                         <h2 class="mb-3 text-start"></h2>
                         <p class=" text-muted">Please provide the following details and we will get back to you</p>

                         <form method="post" id="enquirenowForm" class="text-start mb-3" novalidate="novalidate" action="#" enctype="multipart/form-data">
                            @csrf
               <input type="hidden" id="type" name="enquirenow" value="enquirenow">

               <div class="row">
                 <div class="col-xl-12">
                   <div class="row gy-3 gx-3">
                     <div class="col-md-12">
                       <div class="form-floating">
                       <input type="text" class="form-control"  id="name" name="name"  placeholder="Name *" required="">
                         <label for="name" class="form-label">Your Name *</label>
                       </div>
                     </div>

                     <div class="col-md-12" id="emaildiv">
                       <div class="form-floating">
                       <input type="text" class="form-control" id="email" name="email" placeholder="Email *" required="">
                         <label for="email" class="form-label">Your Email *</label>
                       </div>
                     </div>
                     <div class="col-md-12">
                       <div class="form-floating">
                       <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone" required>
                         <label for="phone" class="form-label">Your Phone No.</label>
                       </div>
                     </div>
                     <div class="col-md-12" id="skilldiv">
                      <div class="form-floating">
                        <textarea id="skill" name="skill" class="form-control" placeholder="Skillset Required" style="height: 100px"  spellcheck="false"></textarea>
                        <label for="skill" class="form-label">Skills Required *</label>

                      </div>
                    </div>
                   </div>
                 </div>
               </div>

<div id="recaptcha1" class="g-recaptcha"
          data-sitekey="{{env('INVISIBLE_RECAPTCHA_SITEKEY')}}"
          data-callback="onSubmit"
          data-size="invisible"></div>

              <div class="btn-container mx-auto pt-5">
                <button class="btn btn-primary d-block w-100" id="submit" type="submit">Enquire Now</button>

                  </div>


                                 </div></form>
                         <!--/.social -->
                       </div>
                       <!--/.modal-content -->
                     </div>
                     <!--/.modal-body -->
                   </div>



            </div>




<!---- Enquire now popup end-->

<!---- get in touch  popup start-->








<!---- get in touch  popup end-->

<!---- Request a call back  popup start-->









<!---- Request a call back  popup end-->























  <div class="progress-wrap" style="display: none;">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
      <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>
  <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
  <script src="{{asset('assets/js/plugins-home.js')}}"></script>
  <script src="{{asset('assets/js/theme.js')}}"></script>
  <script src="{{asset('assets/js/contact.js')}}"></script>
  <script src="{{asset('assets/js/newsletter.js')}}"></script>





  </div>
  </div>

 <script>
$(window).scroll(function(){

    if ($(this).scrollTop() > 400) {

       $('#enquirenowID').addClass('ssk');
       $('#enquirenowID').removeClass('hed');
       $('#light').hide();
       $('#dark').show();

    } else {
       $('#enquirenowID').removeClass('ssk');
       $('#enquirenowID').addClass('hed');
       $('#light').show();
       $('#dark').hide();

    }
});


    $("#enquirenowForm").validate({
 rules: {
 name: {
 required: true,
 maxlength: 50
 },
 email: {
 required: true,
 maxlength: 50,
 email: true,
 },

 },
 messages: {
 name: {
 required: "Please enter name",
 maxlength: "Your name maxlength should be 50 characters long."
 },
 email: {
 required: "Please enter valid email",
 email: "Please enter valid email",
 maxlength: "The email name should less than or equal to 50 characters",
 },
 },

 submitHandler: function(form) {
 $.ajaxSetup({
 headers: {
 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
 }
 });
 $('#submit').html('Please Wait...');

 $("#submit"). attr("disabled", true);
 $.ajax({
 url: "{{route('enquire')}}",
 type: "POST",
 data: $('#enquirenowForm').serialize(),
 success: function( response ) {
    if(response.status == 'notok') {
        $('#submit').html('Submit');
        $("#submit"). attr("disabled", false);

 swal({
 title: 'Sorry',
 text: msg,
 type: 'error',
 showConfirmButton:true,
 confirmButtonText: 'Okay'
 });
    } else {
        $('#submit').html('Submit');
 $("#submit"). attr("disabled", false);
 //alert('Ajax form has been submitted successfully');
 document.getElementById("enquirenowForm").reset();
 swal({
 title: 'We will get back to you at the earliest.',
 text: "You won't be able to revert this!",
 type: 'success',
 showConfirmButton:true,
 confirmButtonText: 'Okay'
 });
 $('#enquirenow').modal('hide');
  $('body').removeClass('modal-open');
    }




 }
 });
 }
 })
    $("#gettouchForm").validate({
 rules: {
 name: {
 required: true,
 maxlength: 50
 },
 email: {
 required: true,
 maxlength: 50,
 email: true,
 },

 },
 messages: {
 name: {
 required: "Please enter name",
 maxlength: "Your name maxlength should be 50 characters long."
 },
 email: {
 required: "Please enter valid email",
 email: "Please enter valid email",
 maxlength: "The email name should less than or equal to 50 characters",
 },

 },
 success: function (label, element) {
    console.log('hi');
        grecaptcha.execute();
        },
 submitHandler: function(form) {
 $.ajaxSetup({
 headers: {
 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
 }
 });
 $('#touchsubmit').html('Please Wait...');
 $("#touchsubmit"). attr("disabled", true);
 $.ajax({
 url: "{{route('enquire')}}",
 type: "POST",
 data: $('#gettouchForm').serialize(),
 success: function( response ) {
    if(response.status == 'notok') {
        $('#touchsubmit').html('Submit');
        $("#touchsubmit"). attr("disabled", false);
        if(response.data['g-recaptcha-response']) {
            var msg = response.data['g-recaptcha-response'][0];
        } else {
            var msg = 'something went wrong';
        }
 swal({
 title: 'Sorry',
 text: msg,
 type: 'error',
 showConfirmButton:true,
 confirmButtonText: 'Okay'
 });
    } else {
        console.log(response);
 $('#touchsubmit').html('Submit');
 $("#touchsubmit"). attr("disabled", false);
 //alert('Ajax form has been submitted successfully');
 document.getElementById("gettouchForm").reset();
 swal({
 title: 'We will get back to you at the earliest.',
 text: "You won't be able to revert this!",
 type: 'success',
 showConfirmButton:true,
 confirmButtonText: 'Okay'
 });
 $('#gettouch').modal('hide');
  $('body').removeClass('modal-open');
    }

 }
 });
 }
 })
 $("#callbackForm").validate({
 rules: {
 name: {
 required: true,
 maxlength: 50
 },
 phone: {
 required: true,

 },

 },
 messages: {
 name: {
 required: "Please enter name",
 maxlength: "Your name maxlength should be 50 characters long."
 },
 phone: {
 required: "Please enter phone number",

 },

 },
 success: function (label, element) {
    console.log('hi');
        grecaptcha.execute();
        },
 submitHandler: function(form) {
 $.ajaxSetup({
 headers: {
 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
 }
 });
 $('#callbacksubmit').html('Please Wait...');
 $("#callbacksubmit"). attr("disabled", true);
 $.ajax({
 url: "{{route('enquire')}}",
 type: "POST",
 data: $('#callbackForm').serialize(),
 success: function( response ) {
    if(response.status == 'notok') {
        $('#callbacksubmit').html('Submit');
        $("#callbacksubmit"). attr("disabled", false);
        if(response.data['g-recaptcha-response']) {
            var msg = response.data['g-recaptcha-response'][0];
        } else {
            var msg = 'something went wrong';
        }
 swal({
 title: 'Sorry',
 text: msg,
 type: 'error',
 showConfirmButton:true,
 confirmButtonText: 'Okay'
 });
    } else {
        $('#callbacksubmit').html('Submit');
 $("#callbacksubmit"). attr("disabled", false);
 //alert('Ajax form has been submitted successfully');
 document.getElementById("callbackForm").reset();
 swal({
 title: 'We will get back to you at the earliest.',
 text: "You won't be able to revert this!",
 type: 'success',
 showConfirmButton:true,
 confirmButtonText: 'Okay'
 });
 $('#callback').modal('hide');
  $('body').removeClass('modal-open');
    }

 }
 });
 }
 })
 function onloadCallback() {
    document.getElementById("join").disabled = false;
  };
function enableBtn(){
   document.getElementById("join").disabled = false;
 }
        $("#success-msg").css('display','none');
    $("#danger-msg").css('display','none');

        $("#joinForm").validate({
            rules: {
        name: "required",
        email: {
             required: true,
             email: true //for length of lastname
         }
     },
     // in 'messages' user have to specify message as per rules
     messages: {
         name: " Please enter your name",
         email: {
 required: "Please enter email",
 email: "Please enter valid email"
 }
     },
     success: function (label, element) {
        grecaptcha.execute();
        }
 })
 $(function() {
        $('#lazy').lazy();
    });
 function fileValidation() {
        $(".invalid-feedback-file").css('display','none');
        var fileInput =
            document.getElementById('resume');

        var filePath = fileInput.value;

        // Allowing file type
        var allowedExtensions =
/(\.pdf|\.docx)$/i;

        if (!allowedExtensions.exec(filePath)) {
            $(".invalid-feedback-file").css('display','block');
            fileInput.value = '';
            return false;
        }
    }
    $(document).ready(function() {
            $('input[type="file"]').change(function(e) {
                var geekss = e.target.files[0].name;
                $("#img-hide").css('display','block');
                $("#img-hide").text(geekss);

            });
        });
        $("#contactForm").validate({
            rules: {
        name: "required",
        email: {
             required: true,
             email: true //for length of lastname
         },
         surname: "required",
         department: "required",
         message: "required",
     },
     // in 'messages' user have to specify message as per rules
     messages: {
         name: " Please enter your firstname",
         email: {
 required: "Please enter email",
 email: "Please enter valid email"
 },
 surname: " Please enter your lastname",
 department: " Please select department",
 message: " Please enter message",
     },
     success: function (label, element) {
        grecaptcha.execute();
        }
 })
 </script>
 <script type="text/javascript" id="zsiqchat">var $zoho=$zoho || {};$zoho.salesiq = $zoho.salesiq || {widgetcode: "e8a50fb1948e401c9a980efd4bddfc162c3573e2a4fc425eecfcba4ac759b357c91048c69334de286a88564a5a798944", values:{},ready:function(){}};var d=document;s=d.createElement("script");s.type="text/javascript";s.id="zsiqscript";s.defer=true;s.src="https://salesiq.zoho.in/widget";t=d.getElementsByTagName("script")[0];t.parentNode.insertBefore(s,t);</script>
 <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "name": "RapidBrains",
  "url": "https://www.rapidbrains.com",
  "logo": "https://www.rapidbrains.com/assets/img/RapidBrains-logo.svg",
  "contactPoint": {
    "@type": "ContactPoint",
    "telephone": "9778426319",
    "contactType": "sales",
    "areaServed": "IN",
    "availableLanguage": "en"
  },
  "sameAs": [
    "https://www.facebook.com/rapidbrains",
    "https://twitter.com/rapidbrains",
    "https://www.instagram.com/_rapidbrains/",
    "https://www.youtube.com/channel/UCA0r0At5LeSDxqQ52POEpgQ",
    "https://www.linkedin.com/company/rapidbrains"
  ]
}
</script>


</body>

</html>

