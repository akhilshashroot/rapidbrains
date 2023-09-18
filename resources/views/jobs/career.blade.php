<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Connecting the right talents to the right organizations around the world. RapidBrains offers full-time, long-term jobs for remote talents at top companies.">
  <meta name="keywords" content="hire developers, hire talents, remote team, build remote team, hire remote talents, hire remote engineers, hire remote developers">
  <meta name="author" content="rapidbrains">
  <link rel="canonical" href="https://www.rapidbrains.com/jobs" />
  <title>RapidBrains Jobs | Apply for Remote Software Developer Jobs</title>
  <link rel="shortcut icon" href="{{asset('assets/img/favicon.png')}}">
  <link rel="stylesheet" href="{{asset('assets/css/plugins.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/colors/navy.css')}}">
    <!--<link rel="stylesheet" href="{{asset('assets/css/colors/pink.css')}}">-->
    @yield('css_after')
</head>
<style>
   

 .invalid-feedback-file{
  color: #dc3545  !important;
 }
 a {
    color: #212121 ;
    
}
.error{
  color:#ff0000 !important;
  padding: 1.6rem 1rem !important;
}
.swal2-popup .swal2-styled.swal2-confirm {

background-color:  #F68A77  !important;
}
.swal2-content,.swal2-animate-success-icon{
display:none !important;
}
.swal2-title{
font-size: 15px !important;
}
.swal2-popup .swal2-title{
letter-spacing: .025rem !important;
font-weight: 400 !important;
}
.colortext{
  color:black;
}

@media (min-width: 720px){

#sect-bg{
  background-image:  url({{asset('assets/img/photos/rapidbrains-cover.webp')}});

}

}
@media (min-width: 992px){

#sect-bg{
  background-image:  url({{asset('assets/img/photos/rapidbrains-cover.webp')}});

}

}
 @media (max-width: 720px){

#sect-bg{
  background-image:  url({{asset('assets/img/photos/RapidBrains-footerbg.webp')}});

}


} 
  </style>


<body>
  <div class="content-wrapper">
      <!--Header Starts  -->
      <!--Header Starts  -->

      @include('headerjobs')

    
   
  <!-- /.content-wrapper -->




  <section class="wrapper image-wrapper text-black" id="sect-bg" >
      <div class="container pt-17 pb-20 pt-md-19 pb-md-21 text-center">
        <div class="row">
          <div class="col-md-10 col-xl-8 mx-auto">
            <div class="post-header">
              <h1 class="display-1 mb-5 colortext" >{{$job->position}}</h1>
              @if($type=='remote')
              <ul class="post-meta fs-17 mb-5">
              <li class="colortext"> Job Id - {{$job->jobid}}</li>
                <!-- <li class="colortext"><i class="uil uil-clock"></i> {{$job->jobType}}</li> -->
                <li class="colortext"> Exp - {{$job->experience}}</li>
                <li class="colortext"><i class="uil uil-location-arrow"></i> {{$job->location}}</li>
                <li class="colortext"><i class="uil uil-moneybag"></i> {{$job->salary}}</li>
                <li class="colortext"> Contract Duration - {{$job->contract_duration}}</li>
                <li class="colortext"> No. of openings - {{$job->openings}}</li>
                <li class="colortext"> Work Time - {{$job->work_time}}</li>


              </ul>
              @else
              <ul class="post-meta fs-17 mb-5">
              <li class="colortext"> Job Id - {{$job->jobid}}</li>
                <!-- <li class="colortext"><i class="uil uil-clock"></i> {{$job->jobType}}</li> -->
                <li class="colortext"> Exp - {{$job->experience}}</li>
                <li class="colortext"><i class="uil uil-location-arrow"></i> {{$job->location}}</li>
                <li class="colortext"><i class="uil uil-moneybag"></i> {{$job->salary}}</li>
            
                <li class="colortext"> No. of openings - {{$job->openings}}</li>
                <li class="colortext"> Notice Period - {{$job->work_time}}</li>


              </ul>
              @endif
              <!-- /.post-meta -->
            </div>
            <!-- /.post-header -->
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->




    <section class="wrapper bg-light">
      <div class="container pb-14 pb-md-16">
        <div class="row">
          <div class="col-lg-10 mx-auto">
            <div class="blog single mt-n17">
              <div class="card shadow-lg">
                <div class="card-body">
                  <h2 class="h1 mb-3">Overview</h2>
                  {!!$job->responsibilities!!}
                  <h3 class="h2 mb-3 mt-9">Job Description</h3>
                  {!!$job->description!!}
                
                  <!--/.row -->
                  <h3 class="h2 mb-3 mt-9">Skills & Requirements</h3>
              
                  <div class="row gy-3 gx-xl-8 mb-10">
                  <p>{{$job->skill}}</p>
                    <!--/column -->
                    
                    <!--/column -->
                  </div>
                  <!--/.row -->
                 
                   @if($status==1 && $is_view ==1)
                  <a id="apply-now" class="btn btn-primary rounded-pill">Apply Now</a>
                  @endif
               
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.blog -->
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </section>







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
























  <!--<div class="progress-wrap">-->
  <!--  <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">-->
  <!--    <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />-->
  <!--  </svg>-->
  <!--</div>-->


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script> 
  <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script> 

 <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
  <!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/r/bs-3.3.5/jq-2.1.4,dt-1.10.8/datatables.min.css"/>  --> 
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>  
  <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'></link>  
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">

  <script src="{{asset('assets/js/plugins.js')}}"></script>
  <script src="{{asset('assets/js/theme.js')}}"></script>
  <script src="{{asset('assets/js/contact.js')}}"></script>
  <script src="{{asset('assets/js/newsletter.js')}}"></script>

  



  </div>


  <script>
//     $("li").removeAttr("style");
// $("span").removeAttr("style");
// $("p").removeAttr("style");
// $("ul").removeAttr("style");
  const queryString = window.location.search;
const urlParams = new URLSearchParams(queryString);
const job_id = urlParams.get('id')
    $(document).on('click','#apply-now',function(e) {
    
     location.href = "/apply-job?id="+job_id;
    //  window.open("/apply-job?id="+job_id);
});



</script>

 <script>
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
        grecaptcha.execute();
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
 
</body>

</html>

