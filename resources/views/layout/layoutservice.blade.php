<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="@if(isset($data['description'])){{$data['description']}}@else A talent marketplace to build remote teams, rapidly. From RapidBrains, companies can hire pre-screened contract remote engineers and developers with flexible engagements from hourly to full-time @endif">
  <meta name="keywords" content="@if(isset($data['keywords'])){{$data['keywords']}}@else remote engineers, remote developers, remote talents, hire contractors, talent marketplace, affordable, hire engineers, hire developers, hire talents, hire contractors, fulltime employees, partime employees @endif">
  <meta name="author" content="rapidbrains">
  <link rel="canonical"  href="@if(isset($data['canonical'])){{$data['canonical']}}@else https://www.rapidbrains.com @endif" />
  <title>@if(isset($data['title'])) {{$data['title']}}@else RapidBrains - Build your remote team, rapidly @endif</title>
  <link rel="shortcut icon" href="{{asset('assets/img/favicon.png')}}">
  <link rel="stylesheet"   href="{{asset('assets/css/plugins-home.css')}}">
  <link rel="stylesheet"   rel="preload"   href="{{asset('assets/css/style-service.css')}}"  as="style">
    <link rel="stylesheet" media="print" onload="this.onload=null;this.removeAttribute('media');"  href="{{asset('assets/css/colors/navy.css')}}">

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
    .grecaptcha-badge{
    display:none;
}
.ms-auto {
  margin-left: auto !important;
}
.accordion-wrapper .card {
  margin-bottom: 1.25rem;
}
.accordion-wrapper .card.plain {
  background: none;
  border: 0;
  margin-bottom: 0;
  box-shadow: none;
}
.accordion-wrapper .card.plain .card-body {
  padding: 0 0 0 1.1rem;
}
.accordion-wrapper .card.plain .card-header {
  padding: 0 0 0.8rem 0;
}
.accordion-wrapper .card.plain .card-header button {
  padding: 0 0 0 1.1rem;
}
.accordion-wrapper .card.plain .card-header button:before {
  left: 0;
}
.accordion-wrapper .card-header {
  margin-bottom: 0;
  background: none;
  border: 0;
  padding: 0.9rem 1.3rem 0.85rem;
}
.accordion-wrapper .card-header button {
  cursor: pointer;
  width: 100%;
  padding: 0 0 0 1rem;
  text-align: left;
  margin: 0;
  border: 0;
  font-size: 0.85rem;
  font-weight: 700;
  color: #343f52;
  transition: all 150ms ease-in-out;
  background: none;
}
@media (prefers-reduced-motion: reduce) {
  .accordion-wrapper .card-header button {
    transition: none;
  }
}
.accordion-wrapper .card-header button:before {
  font-family: "Unicons";
  position: absolute;
  left: 1.3rem;
  content: "\e932";
  font-size: 1.15rem;
  font-weight: normal;
  width: 1rem;
  margin-top: -0.25rem;
  margin-left: -0.3rem;
  display: inline-block;
  color: #343f52;
}
.accordion-wrapper .card-header button.collapsed {
  color: #343f52;
}
.accordion-wrapper .card-header button.collapsed:before {
  content: "\e92d";
}

.accordion-wrapper .card-header button:hover {
  color: #343f52;
}
.accordion-item .card-body {
  padding: 0 1.25rem 0.25rem 2.35rem;
}
.accordion-item.icon .card-body {
  padding: 0 1.25rem 0.25rem 2.8rem;
}
.accordion-item.icon button {
  padding: 0 0 0 1.5rem;
  display: flex;
  align-items: center;
}
.accordion-item.icon button:before {
  display: none;
}
.accordion-item.icon button>span {
  position: absolute;
  left: 1.3rem;
}
.accordion-item.icon button>span i {
  font-size: 1rem;
}
.accordion-collapse>.card-footer {
  background: #273444;
  padding: 0;
}
.overlap-grid {
  display: flex;
  flex-wrap: wrap;
  position: relative;
}
@media (min-width: 768px) {
  .overlap-grid-2 .item:nth-child(1) {
    width: 70%;
    margin-top: 0;
    margin-left: 30%;
    z-index: 3;
  }
  .overlap-grid-2 .item:nth-child(2) {
    width: 55%;
    margin-top: -45%;
    margin-left: 0;
    z-index: 4;
  }
  .overlap-grid-2 .item:nth-child(3) {
    width: 60%;
    margin-top: -35%;
    margin-left: 40%;
    z-index: 2;
  }
}
@media (max-width: 767px) {
  .overlap-grid-2 .item {
    width: 100%;
  }
  .overlap-grid-2 .item+.item {
    margin-top: 1.5rem;
  }
}

.dropdown-item{
  color:#596273 !important;
  font-weight:500 !important;

}
.dropdown-toggle::after {
    font-family: "Unicons" !important;
    display: inline-block !important;
    margin-left: 0.05rem !important;
    vertical-align: -3px !important;
    font-weight: 700 !important;
    content: "" !important;
    border: 0 !important;
    content: "\e92d" !important;
}
.collapse:not(.show) {
  display: none;
}
.collapsing {
  height: 0;
  overflow: hidden;
  transition: height 0.35s ease;
}
@media (prefers-reduced-motion: reduce) {
  .collapsing {
    transition: none;
  }
}
.collapsing.collapse-horizontal {
  width: 0;
  height: auto;
  transition: width 0.35s ease;
}
@media (prefers-reduced-motion: reduce) {
  .collapsing.collapse-horizontal {
    transition: none;
  }
}
.collapse-link {
  font-size: 0.85rem;
  font-weight: 700;
  color: #3f78e0;
}
.collapse-link:before {
  font-family: "Unicons";
  content: "\e932";
  font-size: 1.15rem;
  font-weight: normal;
  width: 1rem;
  margin-left: -0.3rem;
  margin-right: 0.4rem;
  display: inline-block;
  vertical-align: -4px;
}
.collapse-link.collapsed {
  color: #343f52;
}
.collapse-link.collapsed:before {
  content: "\e92d";
}
.collapse-link:hover {
  color: #3f78e0;
}
@media (max-width: 575.98px){
.shape {
    display: none;
}
}
</style>

<body>
  <div class="content-wrapper">
      <!--Header Starts  -->
      <!--Header Starts  -->
      @if(Route::currentRouteName() == 'join')
      @include('header2')
      @else
      @include('header')
      @endif
   @yield('section')
    
   
  <!-- /.content-wrapper -->
  @if(Route::currentRouteName() == 'welcome')
  @include('footer')
  @else
      @include('footer2')
      @endif







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
























  <!--<div class="progress-wrap">-->
  <!--  <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">-->
  <!--    <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />-->
  <!--  </svg>-->
  <!--</div>-->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script> 
  <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script> 

  <script src="{{asset('assets/js/plugin-service.js')}}"></script>
  <script src="{{asset('assets/js/theme-home.js')}}"></script>
  <script src="{{asset('assets/js/contact.js')}}"></script>
  <script src="{{asset('assets/js/newsletter.js')}}"></script>

  



  </div>

 
 <script>

$(function() {
        $('#lazy').lazy();
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
 success: function (label, element) {
      
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

