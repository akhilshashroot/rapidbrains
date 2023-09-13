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
  <style>
    @media only screen and (max-width: 600px){
.file-css {
  padding-bottom: 13px;

}
}


.text-inverse a:not(.btn):hover, .form-check-input:checked, .btn-primary, .btn-primary:hover, .btn-check:focus+.btn-primary, .btn-primary:focus, .btn-primary.pe-none:not(.btn-circle):not(.btn-block), .btn-outline-primary, .btn-outline-primary:hover, .btn-check:active+.btn-outline-primary, .btn-check:checked+.btn-outline-primary, .btn-outline-primary.active, .btn-outline-primary.dropdown-toggle.show, .btn-outline-primary:active, .navbar.navbar-light.fixed .btn:not(.btn-expand), blockquote, .post-meta li a:hover, .hero-slider:before, .lg-outer .lg-item:after, .loader, .tp-loader.spinner {
    border-color: #343f52;
    background-color: #343f52;
}
input[type=file]::file-selector-button {
  width:120px;
  background-color: #9499a3 !important;
  color: #fff !important;
  border-color: transparent !important;
  border-radius: 50rem !important;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  transform: translateY(0) !important;
  letter-spacing: -.01rem;
  box-shadow: none;
 }
 .invalid-feedback-file{
  color: #dc3545  !important;
 }
 a {
    color: #212121 ;
    
}
/* 
  ##Device = Tablets, Ipads (portrait)
  ##Screen = B/w 768px to 1024px
*/

@media (min-width: 768px) and (max-width: 1024px) {
  
  .cdp {
  
  width: 50%  !important;
}
  
}

/* 
  ##Device = Tablets, Ipads (landscape)
  ##Screen = B/w 768px to 1024px
*/

@media (min-width: 768px) and (max-width: 1024px) and (orientation: landscape) {
  .cdp {
  
  width: 50%  !important;
}
  
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
</head>

<body>
  <div class="content-wrapper">
  @include('headerjobs') 
    <!-- /header -->
    <section class="wrapper image-wrapper text-black" id="sect-bg" >
      <div class="container pt-17 pb-20 pt-md-19 pb-md-21 text-center">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h1 class="display-1 mb-3">Apply Now</h1>
            
            <!-- /nav -->
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
          <div class="col-lg-7 col-xl-6 col-xxl-9 mx-auto mt-n20">
            <div class="card shadow-lg">
              <div class="card-body p-11 text-center">
                <h2 class="mb-3 text-center">Get selected to the best companies in the world</h2>
                <p class="lead mb-6 text-center">Application takes less than a minute.</p>
                <form class="joinForm needs-validation text-start mb-3" id="joinForm" enctype="multipart/form-data" method="post" novalidate>
                  @csrf
                
      



                  <input type="hidden" class="form-control"  id="job_id" name="job_id">

                <div class="messages"></div>
                    <div style="display:none;" class="alert alert-success alert-dismissible fade show" id="success-msg"><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>We have received your application. Stay tuned, we’ll get back to you very soon.
                    </div>
                    <div style="display:none;" class="alert alert-danger alert-dismissible fade show" id="danger-msg"><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>Something went wrong!.
                    </div>
                    <div class="row gx-4">
                      <div class="col-md-6">
                        <div class="form-floating mb-4">
                          <input id="form_name" type="text" id="name" name="name" class="form-control" placeholder="Jane" required>
                          <label for="form_name">Full Name  *</label>
                          <div class="valid-feedback"> Looks good! </div>
                          <div class="invalid-feedback"> Please enter your full name. </div>
                        </div>
                      </div>
                      <!-- /column -->
                      <div class="col-md-6">
                        <div class="form-floating mb-4">
                          <input id="form_email" type="email"  id="email"  name="email" class="form-control" placeholder="jane.doe@example.com" required>
                          <label for="form_email">Email *</label>
                          <div class="valid-feedback"> Looks good! </div>
                          <div class="invalid-feedback"> Please provide a valid email address. </div>
                        </div>
                      </div>
                      <!-- /column -->
                      <div class="col-md-6">
                        <div class="form-floating mb-4">
                          <input id="form_email" type="text" name="phone" id="phone"  class="form-control" placeholder="jane.doe@example.com" >
                          <label for="form_email">Phone No </label>
                          
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-floating mb-4">
                          <input id="form_email" type="text" name="experience" id="experience"  class="form-control" placeholder="jane.doe@example.com" >
                          <label for="form_email">Experience in Years </label>
                     
                        </div>
                      </div>
                      <!--column-->
                      <div class="col-12">
                        <div class="form-floating mb-4">
                          <textarea id="form_message" name="skill" id="skill" class="form-control" placeholder="Your message" style="height: 150px" required></textarea>
                          <label for="form_message">Skills & Tools known *</label>
                          <div class="valid-feedback"> Looks good! </div>
                          <div class="invalid-feedback"> Please enter your Skills & Tools. </div>
                        </div>
                      </div>
                      <!-- /column -->
                  
                      <div class="col-md-6">
                        <div class="form-select-wrapper mb-4">
                          <select class="form-select" id="employmenttype"  name="employmenttype" required>
                            <option selected disabled value="">Employment type *</option>
                            <option value="Full-Time">Full-Time</option>
                            <option value="Part-Time">Part-Time</option>
                          </select>
                          <div class="valid-feedback"> Looks good! </div>
                          <div class="invalid-feedback"> Please select a Employment type. </div>
                        </div>
                      </div>
                     
                      <!-- /column -->
                      <div class="col-md-6">
                        <div class="form-select-wrapper mb-4">
                          <select class="form-select"  id="availability" name="availability" required>
                            <option selected disabled value="">Availability *</option>
                            <option value="Immediate">Immediate</option>
                            <option value="7 Days">7 Days</option>
                            <option value="15 Days">15 Days</option>
                            <option value="30 Days">30 Days</option>
                            <option value="60 Days">60 Days</option>
                            <option value="90 Days">90 Days</option>
          
                          </select>
                          <div class="valid-feedback"> Looks good! </div>
                          <div class="invalid-feedback"> Please select a Availability. </div>
                        </div>
                      </div>

                      <div class="col-md-6">
                      <div class="form-floating mb-4">
                          <input id="form_email" type="text"  id="ectc"  name="ectc" class="form-control" placeholder="jane.doe@example.com" required>
                          <label for="form_email">Monthly Rate *</label>
                          <div class="valid-feedback"> Looks good! </div>
                          <div class="invalid-feedback"> Please enter Monthly Rate. </div>

                        </div>
                      </div>
                     
                      <!-- /column -->
                      <div class="col-md-6 cdp">
                      <div class="form-select-wrapper mb-4">
                          <select class="form-select"  id="price" name="price" required>
                            <option selected disabled value="">Select USD/INR *</option>
                       
                                    <option value="USD">USD</option>
                                    <option value="INR">INR</option>
                                  
          
                          </select>
                          <div class="valid-feedback"> Looks good! </div>
                          <div class="invalid-feedback"> Please select  USD or INR. </div>
                        </div>
                      </div>
                    
                      <div style="text-align: center;padding-top: 12px;" class="form-select-wrapper mb-4">
                    <!-- <label for="resume"  class="file-css" style="font-size: 15px;">Upload your Resume: &nbsp;&nbsp;</label> -->
                     <a  class="btn btn-soft-blue rounded-pill mb-2 me-1" onclick="document.getElementById('resume').click()">Upload Resume</a> 
                    <input type="file"  onchange="return fileValidation()" style="display:none;" name="resume" id="resume" class="center-block">
                    <p id="img-hide"><!-- Selected file will get here --></p>

                    <div class="invalid-feedback-file" style="display:none;"> Upload either pdf or docx format. </div>
                    <!-- <div class="form-select-wrapper mb-4">
                           <p> </p> 
                          <p> Upload your Resume</p>
                          <input type="file" name="resume" id="resume" class="center-block">
                          <div class="invalid-feedback-file" style="display:none;"> Upload file either pdf or docx format. </div>
          
                        </div> -->
                      </div>
                      <!-- /column -->
                      <div class="col-12 text-center">
                        <input type="submit" id="join-us" class="btn btn-primary rounded-pill btn-login w-100 mb-2" value="Apply Now">
                      </div>
                      <!-- /column -->
                    </div>
                    <!-- /.row -->
                  </form>

                <!-- /form -->
              
                <!--/.social -->
              </div>
              <!--/.card-body -->
            </div>
            <!--/.card -->
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->
  </div>
  <!-- /.content-wrapper -->
            <!--Hashroot Ends-->
            
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
                    
                     <div class="col-md-12">
                       <div class="form-floating">
                       <input type="text" class="form-control" id="email" name="email" placeholder="Email *" required="">
                         <label for="email" class="form-label">Your Email *</label>
                       </div>
                     </div>
                     <div class="col-md-12">
                       <div class="form-floating">
                       <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone" >
                         <label for="phone" class="form-label">Your Phone No.</label>
                       </div>
                     </div>
                     <div class="col-md-12">
                      <div class="form-floating">
                        <textarea id="skill" name="skill" class="form-control" placeholder="Skillset Required" style="height: 100px"  spellcheck="false"></textarea>
                        <label for="skill" class="form-label">Skills Required *</label>

                      </div>
                    </div>
                   </div>
                 </div>
               </div>
            
 
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



<div class="modal fade" id="gettouch" role="dialog">
  <div class="modal-dialog modal-dialog-centered modal-sm">
                     <div class="modal-content text-center">
                       <div class="modal-body">
                         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                         <h2 class="mb-3 text-start"></h2>
                         <p class=" text-muted">Please provide the following details and we will get back to you</p>
                    
                         <form method="post" id="gettouchForm" class="text-start mb-3" novalidate="novalidate"  enctype="multipart/form-data">
               <input type="hidden" id="type" name="enquirenow" value="gettouch">
            
               <div class="row">
                 <div class="col-xl-12">
                   <div class="row gy-3 gx-3">
                     <div class="col-md-12">
                       <div class="form-floating">
                       <input type="text" class="form-control"  id="name" name="name"  placeholder="Name *" required="">
                         <label for="name" class="form-label">Your Name *</label>
                       </div>
                     </div>
                    
                     <div class="col-md-12">
                       <div class="form-floating">
                       <input type="text" class="form-control" id="email" name="email" placeholder="Email *" required="">
                         <label for="email" class="form-label">Your Email *</label>
                       </div>
                     </div>
                     <div class="col-md-12">
                       <div class="form-floating">
                       <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone" >
                         <label for="phone" class="form-label">Your Phone No.</label>
                       </div>
                     </div>
                     <div class="col-md-12">
                      <div class="form-floating">
                        <textarea id="skill" name="skill" class="form-control" placeholder="Skillset Required" style="height: 100px"  spellcheck="false"></textarea>
                        <label for="skill" class="form-label">Skills Required *</label>

                      </div>
                    </div>
                   </div>
                 </div>
               </div>
            
 
              <div class="btn-container mx-auto pt-5">
                <button class="btn btn-primary d-block w-100" id="submit" type="submit">Get in Touch</button>
 
                  </div>
 
                                     
                                 </div></form>
                         <!--/.social -->
                       </div>
                       <!--/.modal-content -->
                     </div>
                     <!--/.modal-body -->
                   </div>
  
  
  
            </div>
  




<!---- get in touch  popup end-->

<!---- Request a call back  popup start-->



<div class="modal fade" id="callback" role="dialog">
  <div class="modal-dialog modal-dialog-centered modal-sm">
                     <div class="modal-content text-center">
                       <div class="modal-body">
                         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                         <h2 class="mb-3 text-start"></h2>
                         <p class=" text-muted">Please provide the following details and we will get back to you</p>
                    
                         <form method="post" id="callbackForm" class="text-start mb-3" novalidate="novalidate" action="#" enctype="multipart/form-data">
               <input type="hidden" id="type" name="enquirenow" value="callback">
            
               <div class="row">
                 <div class="col-xl-12">
                   <div class="row gy-3 gx-3">
                     <div class="col-md-12">
                       <div class="form-floating">
                       <input type="text" class="form-control"  id="name" name="name"  placeholder="Name *" required="">
                         <label for="name" class="form-label">Your Name *</label>
                       </div>
                     </div>
                    
                     <div class="col-md-12">
                       <div class="form-floating">
                       <input type="text" class="form-control" id="phone" name="phone" placeholder="Your Phone Nmber *" required="">
                         <label for="email" class="form-label">Your Phone No. *</label>
                       </div>
                     </div>
                    
                    
                   </div>
                 </div>
               </div>
            
 
              <div class="btn-container mx-auto pt-5">
                <button class="btn btn-primary d-block w-100" >Request a call back</button>
 
                  </div>
 
                                     
                                 </div></form>
                         <!--/.social -->
                       </div>
                       <!--/.modal-content -->
                     </div>
                     <!--/.modal-body -->
                   </div>
  
  
  
            </div>
  




<!---- Request a call back  popup end-->





  <div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
      <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>  
<script src='https://www.google.com/recaptcha/api.js'></script>
<script src="https://www.google.com/recaptcha/api.js?render=6LfQ4ZwiAAAAAIn9IPpCNTDhl1Rob-TMHcSHOqVk"></script>

  <script src="./assets/js/plugins.js"></script>
  <script src="./assets/js/theme.js"></script>
  <script src="{{asset('assets/js/contact.js')}}"></script>
  <script src="{{asset('assets/js/newsletter.js')}}"></script>
  



  </div>


<script>
    const queryString = window.location.search;
const urlParams = new URLSearchParams(queryString);
const job_id = urlParams.get('id')
document.querySelector("[name='job_id']").value = job_id;

    $("#success-msg").css('display','none');
    $("#danger-msg").css('display','none');
  jQuery(document).ready(function(){
  
    
      $('#joinForm').on('submit',function(e){

      $("#join-us").attr("disabled", true);
//  //alert('Ajax form has been submitted successfully');
//  document.getElementById("enquirenowForm").reset(); 
      //  if(jQuery('#name').val() && jQuery('#name').val() && jQuery('#name').val()){
        
      //  }
        $.ajaxSetup({
           headers: {
               'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
           }
       });
       var formData = new FormData(this);
        jQuery.ajax({
           url: "{{route('apply.job')}}",
           method: 'post',
           data: formData,
cache:false,
contentType: false,
processData: false,
           success: function(result){
              console.log(result);
              if(result.statuscode==403){
                
                $(".invalid-feedback-file").css('display','block');
              }else if(result.statuscode==402){
                $("#success-msg").css('display','block');
                $("#join-us").attr("disabled", false);
                $("#img-hide").css('display','none');

               
                document.getElementById("joinForm").reset(); 
              }else if(result.statuscode==406){
                $("#danger-msg").css('display','block');

                $("#join-us").attr("disabled", false);
              }else{
               $("#join-us").attr("disabled", false);

              }
           }});
        });
     });
</script>

<script>
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
</script>

<script type="text/javascript" id="zsiqchat">var $zoho=$zoho || {};$zoho.salesiq = $zoho.salesiq || {widgetcode: "e8a50fb1948e401c9a980efd4bddfc162c3573e2a4fc425eecfcba4ac759b357c91048c69334de286a88564a5a798944", values:{},ready:function(){}};var d=document;s=d.createElement("script");s.type="text/javascript";s.id="zsiqscript";s.defer=true;s.src="https://salesiq.zoho.in/widget";t=d.getElementsByTagName("script")[0];t.parentNode.insertBefore(s,t);</script>

</body>

</html>

