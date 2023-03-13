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
  <link rel="stylesheet" href="{{asset('assets/css/plugins.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/colors/navy.css')}}">
    <!--<link rel="stylesheet" href="{{asset('assets/css/colors/pink.css')}}">-->
    @yield('css_after')
</head>
<style>
    .grecaptcha-badge{
    display:none;
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
.error{
  color:#ff0000 !important;
  padding: 1.6rem 1rem !important;
}


@media only screen and (min-width: 768px){
 
   .img-logo{
  width:200px !important;
  margin-right:3rem !important;
  }
}

@media (min-width: 768px){
.py-md-20 {
    padding-top: 17rem !important;
}
}
    .cs {

    min-height: 125px !important;
}
    .mt-3{
        color:#fff !important;

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
   .bg-dark {
    background:  #F68A77  !important;
  }
  .text-light{
    color:#fff;
  }
   div.dataTables_wrapper div.dataTables_processing {

    top: 80% !important;
   }
    .new-h a:hover {
    background: blue;
     }  
    .parallax:before {
        background: none;
    }
    .p-class{
        color:#fff;
        text-align:center;
    }
    div.dataTables_wrapper div.dataTables_filter input{
        width: 482px !important;
        
        resize: none;
        outline: none;
    }


    @media only screen and (max-width: 600px) {
      div.dataTables_wrapper div.dataTables_filter input{
        width: 291px !important;
       
        resize: none;
        outline: none;
    }
    
}
.form-control{
  height: calc(2.5rem + 2px);
    line-height: 1.25;
}


@media only screen and (max-width: 768px){
    html,
    body{
    width:100%;
    overflow-x:hidden;
    }
}


@media only screen and (max-width: 600px){
div.dataTables_wrapper div.dataTables_filter input {
    width: 255px !important;
    resize: none;
    outline: none;
}
}
    .paging_simple_numbers{
        text-align: right;
    }
    tfoot {
    display: table-header-group;
    }
   
    .tdhcc {
    background-color: #fff !important;
    color: #343f52 !important;
    }
    div.dataTables_wrapper div.dataTables_filter input::-webkit-input-placeholder {
   text-align: center;
    }
    
    div.dataTables_wrapper div.dataTables_filter input::-moz-placeholder { /* Firefox 18- */
       text-align: center;  
    }
    
    div.dataTables_wrapper div.dataTables_filter input::-moz-placeholder {  /* Firefox 19+ */
       text-align: center;  
    }
    
    div.dataTables_wrapper div.dataTables_filter input:-ms-input-placeholder {  
       text-align: center; 
    }
  .dataTables_filter{
    padding-bottom: 10px;
  }
    #footer {
            position: fixed;
            padding: 10px 10px 0px 10px;
            bottom: 0;
            width: 100%;
            /* Height of the footer*/ 
            height: 60px;
            background: #ff5f7a;
        }



    /* .search-class {
      display: none;
    }
    @media (max-width: 768px) {
     .search-class{
        padding: 1px 1px 4px 100px;
      }
    } */
    .button-touch {
        background: #55565b;
        border-color: #55565b;
        color: #fff;
    }

    .button-touch:hover {
        background: #000000;
        border-color: #000000;
        color: #fff;
    }
    .dataTables_filter{
        /* float: right; */
    }
    div.dataTables_wrapper div.dataTables_filter {
    text-align: center !important;
    }
    .btn.btn-sm {
    min-width: 5rem !important;
}
   .btn:hover
  {
  background-color:#000000  !important;
  border-color: #000000  !important;

  } 
   .btn.new,.checker,.remover,.new
  {
 
  border-color: #343f52  !important;

  }
  .checker,.remover
  {
  
    border-color: #343f52  !important;

  }
  table.dataTable td {
   
    font-weight: 500 !important;
  }

  @media only screen and (min-width: 767px){
    .fullscreen-bg {
    min-height: 70vh;
    max-height: 100vh;
}
  }

.fullscreen-bg {
    height: 70vh;
}
table tbody tr td {
  font-size: 14px !important;
}
table.dataTable th {
  font-size: 16px !important;
  font-weight: 600 !important
}

input[type=search]:focus {
  border: 1px solid rgba(63,120,224,.7);
}
@media (min-width: 768px){
.pt-md-23 {
    padding-top: 3.5rem !important;
}
}

@media (max-width: 720px){
.pb-14 {
    padding-bottom: 1.5rem !important;
}
.pt-1444 {
    padding-top: -1.5rem !important;
}
}
</style>


<body>
  <div class="content-wrapper">
      <!--Header Starts  -->
      <!--Header Starts  -->

      @include('rates.header')

    
   
  <!-- /.content-wrapper -->




  <section class="wrapper bg-gray">
     <div class="container pt-10 pt-md-14 pb-14 pb-md-0">
        <div class="row gx-md-8 gx-lg-12 gy-3 gy-lg-0 mb-13">
          <div class="col-lg-6">
            <h1 class="display-1 fs-60 lh-xxs mb-0">If you have projects, we got the talents!</h1>
          </div>
          <!-- /column -->
          <div class="col-lg-6">
            <p class="lead fs-22 my-3">Creating opportunity for everyone by connecting the right talents to the right organisations around the world.</p>
           
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
        <div class="position-relative">
          <div class="shape bg-dot primary rellax w-17 h-21" data-rellax-speed="1" style="top: -2.5rem; right: -2.7rem;"></div>
          <figure class="rounded mb-md-n20"><img src="{{asset('assets/img/photos/about18@2x.jpg')}}" srcset="./assets/img/photos/about18@2x.jpg 2x" alt="" /></figure>
        </div>
      </div>

</section>
<!-- /section -->
<section class="wrapper bg-light">
      <div class="container pt-1444 pt-md-23 pb-14 pb-md-17">
</div>

</section>
    <!--Hero Image Ends-->
    <!-- <section class="wrapper bg-light">
      <div class="container pb-15 pb-md-17">
                   
        
        
        
      </div>
     
    </section> -->





           

                @include('rates.rapidbrainrate') 












                <section class="wrapper bg-light">
    
    <div class="container py-20 py-md-20" style= "adding-top: 10rem !important;
      padding-bottom: 1rem !important;">
        
      
       <div class="card image-wrapper shadow-lg mt-n21 mt-md-n23 bg-full bg-image mb-14" data-image-src="{{asset('assets/img/photos/RapidBrains-footerbg.jpg')}}">
          <div class="card-body">
            <div class="row text-center">
              <div class="col-xl-11 col-xxl-9 mx-auto">
                <h2 class="fs-16 text-uppercase text-black mb-3">Join Our Community</h2>
                <h3 class="display-2 mb-8 px-lg-8 text-black">Let us know the skills you need and we'll find the best talent for you</h3>
  
              </div>
              <!--/column -->
            </div>
            <!-- /.row -->
            <div class="d-flex justify-content-center">
              <span><a class="btn btn-white rounded" id="callbackreq">Request a call back</a></span>
            </div>
          </div>
          <!--/.card-body -->
        </div>
        <!--/.card -->
               
                          
              
               
      
    </div>
    </section>


  @include('rates.footer')
 







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


  <script src="https://talents.rapidbrains.com/stakefield/vendors/jquery/jquery-2.1.4.min.js"></script>

<!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"
    integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script> -->
<!-- Vendor Scripts -->
<script src="https://www.google.com/recaptcha/api.js?render=6LdCYXQgAAAAAGJDbZqCi-9I1LeUghbJwSEw2mKj"></script>
<script src="https://talents.rapidbrains.com/stakefield/vendors/tether/dist/js/tether.min.js"></script>
<script src="https://talents.rapidbrains.com/stakefield/vendors/bootstrap/js/bootstrap.min.js"></script>
<script src="https://talents.rapidbrains.com/stakefield/vendors/stellar/jquery.stellar.min.js"></script>
<script src="https://talents.rapidbrains.com/stakefield/vendors/isotope/javascripts/isotope.pkgd.min.js"></script>
<script src="https://talents.rapidbrains.com/stakefield/vendors/isotope/javascripts/packery-mode.pkgd.js"></script>
<script src="https://talents.rapidbrains.com/stakefield/vendors/owl-carousel/dist/owl.carousel.min.js"></script>
<script src="https://talents.rapidbrains.com/stakefield/vendors/waypoint/waypoints.min.js"></script>
<script src="https://talents.rapidbrains.com/stakefield/vendors/counter-up/jquery.counterup.min.js"></script>
<script src="https://talents.rapidbrains.com/stakefield/vendors/fancyBox/source/jquery.fancybox.pack.js"></script>
<script src="https://talents.rapidbrains.com/stakefield/vendors/fancyBox/source/helpers/jquery.fancybox-thumbs.js"></script>
<script src="https://talents.rapidbrains.com/stakefield/vendors/image-stretcher-master/image-stretcher.js"></script>
<script src="https://talents.rapidbrains.com/stakefield/vendors/wow/wow.min.js"></script>
<script src="https://talents.rapidbrains.com/stakefield/vendors/rateyo/jquery.rateyo.min.js"></script>
<script src="https://talents.rapidbrains.com/stakefield/vendors/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<script src="https://talents.rapidbrains.com/stakefield/vendors/bootstrap-slider-master/src/js/bootstrap-slider.js"></script>
<script src="https://talents.rapidbrains.com/stakefield/vendors/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
<script src="https://talents.rapidbrains.com/stakefield/js/mega-menu.js"></script>
<script src="https://talents.rapidbrains.com/stakefield/vendors/retina/retina.min.js"></script>
<script src="https://talents.rapidbrains.com/stakefield/js/jquery.validate.js"></script>

<!-- Custom Script -->
<script src="https://talents.rapidbrains.com/stakefield/js/jquery.main.js"></script>


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
const queryString = window.location.search;
const urlParams = new URLSearchParams(queryString);
const talent_id = urlParams.get('talent_id')
const position = urlParams.get('skill')
// if(position || talent_id){
//   const element = document.getElementById("w3-container");
//   console.log(element)
//   element.scrollIntoView();
// }


$(function () {

    var table = $('.table').DataTable({
        processing: true,
        serverSide: true,
        scrollX: true,
        "pageLength": 25,
        language: {
        searchPlaceholder: "Search for Tech stack here",
        search: "",
        emptyTable: "No profiles available",

    },
        ajax: {
          url: "{{ route('customsearch.index') }}",
       
            data: function (d) {
                d.approved = $('#approved').val(),
                d.search = $('input[type="search"]').val(),
                d.talent_id=talent_id,
                d.position=position
            }
        },
        columns: [
            { data: 'DT_RowIndex', DT_RowIndex: 'DT_RowIndex',  orderable: false, searchable: false },
            {data: 'tech_stack',  width: '420px',name: 'tech_stack'},
            {data: 'oneto3', width: '220px', name: 'oneto3'},
            {data: 'threeto5', width:'220px',name: 'threeto5'},
            {data: 'fiveto8', name: 'fiveto8', width:'220px'},
            {data: 'eightplus', name: 'eightplus', width:'220px'},
        

            
        ]
    });
  // hello();
    $('#approved').change(function(){
        table.draw();
    });
      
  });
    $(document).ready(function(){
    // Append all paragraphs
  
   // $('#filterTable_filter').before('<div id="theAppendedDiv">The Appended Div<div>')
   $( "input[type='search']" ).addClass('form-control');

   $(".dataTables_filter").prepend('');
    // Append an element with ID container
  
});
</script>

 <script src="https://www.google.com/recaptcha/api.js" async defer></script>
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

