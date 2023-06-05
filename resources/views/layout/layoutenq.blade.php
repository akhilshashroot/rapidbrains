<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="@if(isset($data['description'])){{$data['description']}}@else A talent marketplace to build remote teams, rapidly. From RapidBrains, companies can hire pre-screened contract remote engineers and developers with flexible engagements from hourly to full-time @endif">
  <meta name="keywords" content="@if(isset($data['keywords'])){{$data['keywords']}}@else remote engineers, remote developers, remote talents, hire contractors, talent marketplace, affordable, hire engineers, hire developers, hire talents, hire contractors, fulltime employees, partime employees @endif">
  <meta name="author" content="rapidbrains">
  @if(isset($data['roboto']))<meta name="robots" content="noindex">@endif
  <link rel="canonical"  href="@if(isset($data['canonical'])){{$data['canonical']}}@else https://www.rapidbrains.com @endif" />
  <title>@if(isset($data['title'])) {{$data['title']}}@else RapidBrains - Build your remote team, rapidly @endif</title>
  <link rel="shortcut icon" href="{{asset('assets/img/favicon.png')}}">
  <link rel="stylesheet" href="{{asset('assets/css/plugins.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/colors/navy.css')}}">
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
    /* @media (min-width: 1400px){
.container-xxl, .container-xl, .container-lg, .container-md, .container-sm, .container {
    max-width: 1957px !important;
}
    } */
    
 /* .ssform{
  border: 1px solid;
 } */
    .selected-resources .resource {
    display: flex;
    justify-content: space-between;
    margin-bottom: 20px;
    background: #f2f2f2;
    border-radius: 15px;
    padding: 10px 15px;
    align-items: center;
}
.role-name{
  margin-bottom: 0;
    font-size: 16px;
    font-weight: 600;

}
    @media (min-width: 1400px){
.col-xxl-9 {
    flex: 0 0 auto;
    width: 132% !important;
}
}
     .ui-autocomplete { 
            cursor:pointer; 
            height:180px; 
            overflow-y:scroll;
        }   
    .grecaptcha-badge{
    display:none;
}
body{
        font-weight: 400;
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
.frcyxW1 {
    /* font-weight: 400; */
    /* font-size: 13px; */
    /* line-height: 123%; */
    background-color: #e5f4fd;
    color: #5eb9f0;
    border-color: transparent;
    

}
#remove-re{
    display:none;
}
.lbl-txt{
font-weight: bold;
    padding-bottom: 10px;
}
.pds{
    padding-top:10px;
}
.dta-remote{
  color: #fff;
    background-color: #5eb9f0;
    border-color: #5eb9f0;
    
}
.dta-remote:hover, .dta-remote:focus {
    background-color: #5eb9f0;
    color: #fff;
    border-color: transparent;
}
@media (max-width: 720px){

    .frcyxW {
width: 38%
}
#phone{
    margin-right: 61px; 
 
  }
  #continue2{
   
    margin-left: 39px;

  }
}

@media (min-width: 992px){
    .frcyxW {
width: 18%
}
.ml{
margin-left: 50rem;
}
.ml1{
  margin-left: 5rem;
}
}


@media (min-width: 720px){
  #phone{
    margin-right: 120px; 
    width: 575px;
  }
    .frcyxW {
width: 15%
}
}
.scsk{
    display:none;
}
.cpk{
  margin-top: 59px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}
#more {display: none;}
#more1 {display: none;}
#more2 {display: none;}
#section2,#section3,#name-err,#mail-err{display: none;}
.border{
  border-color:#5eb9f0 !important;
 }
 @media (min-width: 992px){
.ssp {
  padding-top: 1.25rem;
    padding-bottom: 0.25rem;
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
      @include('header-enq')
      @endif
   @yield('section')


  <!-- /.content-wrapper -->
  @if(Route::currentRouteName() == 'welcome')
  @include('footer')
  @elseif(Route::currentRouteName() == 'AlphaLp')
  @include('footer_alpha')
  @elseif(Route::currentRouteName() == 'BetaLp')
  @include('footer_beta')

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
                       <input type="text" class="form-control" id="phone1" name="phone" placeholder="Phone" required>
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
                <button class="btn btn-primary d-block w-100">Enquire Now</button>

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

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>
  <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
  <link href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
   
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  <script src="{{asset('assets/js/plugins.js')}}"></script>
  <script src="{{asset('assets/js/theme.js')}}"></script>
  <script src="{{asset('assets/js/contact.js')}}"></script>
  <script src="{{asset('assets/js/newsletter.js')}}"></script>





  </div>

 <script>
 window.localStorage.clear();
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

<script>

if ($("#hire_now").length > 0) {

    $("#hire_now").validate({
    submitHandler: function(form) {
      var inputText=$("#hire_email").val();
      console.log(inputText);
         var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
     if(!inputText.match(mailformat))

     {
       $("#error-display1").css('display','block');

     return false;
     }

    $.ajaxSetup({
    headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
    });
    $('#submit').html('Please Wait...');
    $("#submit"). attr("disabled", true);
    $.ajax({
    url: "{{route('hireFunction')}}",
    type: "POST",
    data: $('#hire_now').serialize(),
    success: function( response ) {
     if(response.statuscode==403){
               swal({
    title: response.message,

    type: 'warning',
    showConfirmButton:true,
    confirmButtonText: 'Okay'
    });
             }else if(response.statuscode==402){
               swal({
   title: response.message,
    type: 'success',
    showConfirmButton:true,
    confirmButtonText: 'Okay'
    });

    }
    document.getElementById("hire_now").reset();
    $("#error-display1").css('display','none');
    }
    });
    }
    })
    }
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

<script>
  var valclick = new Array();
    $(document).ready(function() {
        BindControls();
    });

    function BindControls() {
        var Countries = [
        "Angular",  
"Android",  
"ASP.NET", 
"AWS",  
"Blockchain",  
"C Sharp",  
"DevOps",  
"Flutter",  
"Golang",  
"Ionic",  
"Java" , 
"MERN",  
"PHP", 
"Python",  
"MEAN",  
"React",  
"Ruby on Rails",  
"Machine Learning",  
"Salesforce",  
"SAP",  
"Drupal",  
"Django",  
"React Node",  
"Backend",  
"Frontend",  
"Postgresql",  
"Fullstack",  
"JavaScript",  
"Node",
"React Native", 
"Shopify", 
"Wordpress", 
"Kotlin", 
"Xamarin", 
"IOS", 
"Magento", 
"UI/UX", 
"SEO", 
"Laravel", 
"Jira", 
"Ansible", 
"Apache kafka", 
"Azure", 
"Bitbucket", 
"Apache Spark", 
"Bootstrap", 
"C++", 
"BrowserStack", 
"Confluence", 
"Docker", 
"ElasticSearch", 
"Express JS", 
"Firebase", 
"Flask", 
"Git", 
"Kubernetes", 
"GitHub", 
"Grape JS", 
"Jenkins", 
"Joomla", 
"AEM", 
"GitLab", 
"Grafana", 
"HTML CSS", 
"Keras", 
"Kibana", 
"Logstash", 
"Material UI", 
"Mendix", 
"MicrosoftDynamics", 
"MongoDB",  
"Moodle", 
"MySQL", 
".NET Core", 
"Next JS",  
"NumPy", 
"Oracle", 
"Pandas", 
"Power BI", 
"Prometheus", 
"Puppet", 
"PyTorch",  
"RabbitMQ", 
"Redis", 
"Ruby", 
"Rust", 
"Scala",
"SenchaJs", 
"Sharepoint", 
"Slack", 
"Solidity", 
"Spring Boot", 
"Swift", 
"Tech Support", 
"TensorFlow", 
"Terraform", 
"TestRail", 
"TypeScript", 
"Unity", 
"Unreal Engine", 
"Vue JS" ];

        $('#tags').autocomplete({
            source: Countries,
            minLength: 0,
            scroll: true
        }).focus(function() {
            $(this).autocomplete("search", "");
        });
    }

    
    function areaExp(id,event){
  
   
    
      // if(set1){
      //   valclick.push(set1);
      // }


     
    

      var element = id;

var index = valclick.indexOf(element);
if (index !== -1) {
  valclick.splice(index, 1);
  localStorage.setItem('skill-id', valclick);
} else {
  valclick.push(id);
  localStorage.setItem('skill-id', valclick);
}
	
console.log(valclick)


        var para = document.getElementById("data-remote-"+id);
            para.classList.toggle("dta-remote");
					
            var para1 = document.getElementById("add-re-"+id);
            para1.classList.toggle("scsk");
            var para2= document.getElementById("remove-re-"+id);
            para2.classList.toggle("scsk");

		
    }

    $(document).ready(function () {
 
    $('#tags').on('autocompleteselect', function (e, ui) {
        //$('#tagsname').html('You selected: ' + ui.item.value);
        areaCheck( ui.item.value)
    });
});


function areaCheck(item){
    const arr = [
        "random",
        "Angular",  
"Android",  
"ASP.NET", 
"AWS",  
"Blockchain",  
"C Sharp",  
"DevOps",  
"Flutter",  
"Golang",  
"Ionic",  
"Java" , 
"MERN",  
"PHP", 
"Python",  
"MEAN",  
"React",  
"Ruby on Rails",  
"Machine Learning",  
"Salesforce",  
"SAP",  
"Drupal",  
"Django",  
"React Node",  
"Backend",  
"Frontend",  
"Postgresql",  
"Fullstack",  
"JavaScript",  
"Node",
"React Native", 
"Shopify", 
"Wordpress", 
"Kotlin", 
"Xamarin", 
"IOS", 
"Magento", 
"UI/UX", 
"SEO", 
"Laravel", 
"Jira", 
"Ansible", 
"Apache kafka", 
"Azure", 
"Bitbucket", 
"Apache Spark", 
"Bootstrap", 
"C++", 
"BrowserStack", 
"Confluence", 
"Docker", 
"ElasticSearch", 
"Express JS", 
"Firebase", 
"Flask", 
"Git", 
"Kubernetes", 
"GitHub", 
"Grape JS", 
"Jenkins", 
"Joomla", 
"AEM", 
"GitLab", 
"Grafana", 
"HTML CSS", 
"Keras", 
"Kibana", 
"Logstash", 
"Material UI", 
"Mendix", 
"MicrosoftDynamics", 
"MongoDB",  
"Moodle", 
"MySQL", 
".NET Core", 
"Next JS",  
"NumPy", 
"Oracle", 
"Pandas", 
"Power BI", 
"Prometheus", 
"Puppet", 
"PyTorch",  
"RabbitMQ", 
"Redis", 
"Ruby", 
"Rust", 
"Scala",
"SenchaJs", 
"Sharepoint", 
"Slack", 
"Solidity", 
"Spring Boot", 
"Swift", 
"Tech Support", 
"TensorFlow", 
"Terraform", 
"TestRail", 
"TypeScript", 
"Unity", 
"Unreal Engine", 
"Vue JS" ];		
      let id = arr.indexOf(item);


      var element = id;

var index = valclick.indexOf(element);
if (index !== -1) {
  valclick.splice(index, 1);
  localStorage.setItem('skill-id', valclick);
} else {
  valclick.push(id);
  localStorage.setItem('skill-id', valclick);
}
	
console.log(valclick)


  var para = document.getElementById("data-remote-"+id);
      para.classList.toggle("dta-remote");
              
      var para1 = document.getElementById("add-re-"+id);
      para1.classList.toggle("scsk");
      var para2= document.getElementById("remove-re-"+id);
      para2.classList.toggle("scsk");
      
}

</script>

<script>
function myFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "View more"; 
    moreText.style.display = "none";
    $('html, body').animate({
        scrollTop: $("#enqform").offset().top
    }, 700);
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "View less"; 
    moreText.style.display = "inline";
  
  }
}


const arr1 = [
        "random",
        "Angular",  
"Android",  
"ASP.NET", 
"AWS",  
"Blockchain",  
"C Sharp",  
"DevOps",  
"Flutter",  
"Golang",  
"Ionic",  
"Java" , 
"MERN",  
"PHP", 
"Python",  
"MEAN",  
"React",  
"Ruby on Rails",  
"Machine Learning",  
"Salesforce",  
"SAP",  
"Drupal",  
"Django",  
"React Node",  
"Backend",  
"Frontend",  
"Postgresql",  
"Fullstack",  
"JavaScript",  
"Node",
"React Native", 
"Shopify", 
"Wordpress", 
"Kotlin", 
"Xamarin", 
"IOS", 
"Magento", 
"UI/UX", 
"SEO", 
"Laravel", 
"Jira", 
"Ansible", 
"Apache kafka", 
"Azure", 
"Bitbucket", 
"Apache Spark", 
"Bootstrap", 
"C++", 
"BrowserStack", 
"Confluence", 
"Docker", 
"ElasticSearch", 
"Express JS", 
"Firebase", 
"Flask", 
"Git", 
"Kubernetes", 
"GitHub", 
"Grape JS", 
"Jenkins", 
"Joomla", 
"AEM", 
"GitLab", 
"Grafana", 
"HTML CSS", 
"Keras", 
"Kibana", 
"Logstash", 
"Material UI", 
"Mendix", 
"MicrosoftDynamics", 
"MongoDB",  
"Moodle", 
"MySQL", 
".NET Core", 
"Next JS",  
"NumPy", 
"Oracle", 
"Pandas", 
"Power BI", 
"Prometheus", 
"Puppet", 
"PyTorch",  
"RabbitMQ", 
"Redis", 
"Ruby", 
"Rust", 
"Scala",
"SenchaJs", 
"Sharepoint", 
"Slack", 
"Solidity", 
"Spring Boot", 
"Swift", 
"Tech Support", 
"TensorFlow", 
"Terraform", 
"TestRail", 
"TypeScript", 
"Unity", 
"Unreal Engine", 
"Vue JS" ];	




$('#continue1').click(function(){

  var arrayk=new Array();
  var allskill=localStorage.getItem('skill-id');
  var add_skill=$("#add-skill").val();
  if(!allskill && !add_skill){
    
    document.getElementById("display-skill").style.display = 'block';
    return false;
  }
  document.getElementById("display-skill").style.display = 'none';
if(allskill){
  const myArraySkill = allskill.split(",");
// let word = myArray[1];
console.log(myArraySkill)
for(var i = 0; i < myArraySkill.length; i++){
   arrayk.push(arr1[myArraySkill[i]]);
}
$('#skill').val(arrayk.toString());
console.log(arrayk.toString());
}

document.getElementById("section1").style.display = 'none';
document.getElementById("section2").style.display = 'block';
window.scrollTo(0, 60);

});

const cards = document.querySelectorAll('.card12');
        cards.forEach(card => {
            card.addEventListener('click', selectCard);
        });


function selectCard(es){

  document.getElementById("display-skill2").style.display = 'none';

if(es==1){
  localStorage.setItem('experience', "Junior level");
  jQuery('#card-junior').addClass('border');
  jQuery('#card-mid').removeClass('border');
  jQuery('#card-senior').removeClass('border');

}else if(es==2){
  localStorage.setItem('experience', "Mid level");

  jQuery('#card-mid').addClass('border');
  jQuery('#card-junior').removeClass('border');
  jQuery('#card-senior').removeClass('border');

}else if(es==3){
  localStorage.setItem('experience', "Senior level");

  jQuery('#card-senior').addClass('border');
  jQuery('#card-junior').removeClass('border');
  jQuery('#card-mid').removeClass('border');

}
}
$('#back1').click(function(){
  $("#skill").attr('value',' ');
  document.getElementById("section1").style.display = 'block';
document.getElementById("section2").style.display = 'none';
});
// const searchForLetter = (arr1 = [], letter = '') => {
//    for(let i = 0; i < arr1.length; i++){
//       const el = arr1[i];
//       if(el.includes(letter)){
     
//       //document.getElementById("data-remote-"+i).style.display = 'none';
//       arrayk.push(arr1[i])

//       };
//     console.log(arrayk)
//     // document.getElementById("data-remote-"+id);
//    };
//    //return false;
// };
$('#continue2').click(function(){
  var step2val=  localStorage.getItem('experience');
  $('#experience').val(step2val);
  if(!step2val){
    
    document.getElementById("display-skill2").style.display = 'block';
    return false;
  }
  document.getElementById("section2").style.display = 'none';
document.getElementById("section3").style.display = 'block';
window.scrollTo(0, 60);

});
$('#back2').click(function(){
  document.getElementById("section2").style.display = 'block';
document.getElementById("section3").style.display = 'none';
});

</script>
<link rel="stylesheet" href="https://unicons.iconscout.com/release-pro/v4.0.0/css/solid.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
<script>
        const phoneInputField = document.querySelector("#phone");
        console.log(phoneInputField);
        const phoneInput = window.intlTelInput(phoneInputField, {
            autoPlaceholder: false,
            initialCountry: "IN",
            autoInsertDialCode: true,
            utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
        });

        $("[name=phone]").on("blur", function() {
  console.log($(this).val())
  console.log(phoneInput.s.dialCode) //get counrty code
  var phn=$(this).val();
  $("#phoneno").val(phn);
  $("#countrycode").val(phoneInput.s.dialCode);
  
})

    </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.2.3/flatpickr.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.2.3/flatpickr.css">
<script>
      $("#time").flatpickr({
    enableTime: true,
    dateFormat: "F, d Y H:i"
});


// let phoneNumberField = $('input[type="phone]');
// var iti = window.intlTelInputGlobals.getInstance(phoneNumberField);
// console.log(iti.getNumber());

    </script>



<script>
  jQuery(document).ready(function() {

  $("#enqform").validate({
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

document.getElementById("mail-err").style.display = 'none';
document.getElementById("name-err").style.display = 'none';

 $('#submit1').html('Please Wait...');

 $("#submit1"). attr("disabled", true);
 $.ajax({
 url: "{{route('enquire-newform')}}",
 type: "POST",
 data: $('#enqform').serialize(),
 success: function( response ) {
    if(response.status == 'notok') {
        $('#submit1').html('Submit');
        $("#submit1"). attr("disabled", false);
        if(response.email && response.name){
            document.getElementById("mail-err").style.display = 'block';
          document.getElementById("name-err").style.display = 'block';
          return false;
          }else if(response.email && !response.name){
            document.getElementById("mail-err").style.display = 'block';
          document.getElementById("name-err").style.display = 'none';
          return false;
          }else if(!response.email && response.name){
            document.getElementById("mail-err").style.display = 'none';
          document.getElementById("name-err").style.display = 'block';
          return false;
          }

    } else {
        $('#submit1').html('Submit');
 $("#submit1"). attr("disabled", false);
 window.localStorage.clear();
 //alert('Ajax form has been submitted successfully');
 document.getElementById("enqform").reset();
 swal({
 title: 'We will get back to you at the earliest.',
 text: "You won't be able to revert this!",
 type: 'success',
 showConfirmButton:true,
 confirmButtonText: 'Okay'
 }).then(() => {
 location.reload();
});

    }




 }
 });
 }
 });
});
</script>
</body>

</html>

