@extends('layout.layout')
@section('css_after')
<style>
    @media only screen and (max-width: 600px){
.file-css {
  padding-bottom: 13px;

}
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
  </style>
@endsection
@section('section')
<section class="wrapper image-wrapper bg-image  text-white" data-image-src="./assets/img/photos/RapidBrains-BG.jpg">
      <div class="container pt-17 pb-20 pt-md-19 pb-md-21 text-center">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h1 class="display-1 mb-3">Join Our Community</h1>
            
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
                <h2 class="mb-3 text-center">Signup and get access to the best jobs in the world</h2>
                <p class="lead mb-6 text-center">Registration takes less than a minute.</p>
                @if(session()->has('error'))
    <div class="alert alert-error">
        {{ session()->get('error') }}
    </div>
@endif
@if(session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
@endif
                <form method="post" id="joinForm" class="text-start mb-3" novalidate="novalidate" action="{{route('rapidbrains.store')}}" enctype="multipart/form-data">
               @csrf
            
               <div class="row">
                 <div class="col-xl-12">
                   <div class="row gy-3 gx-3">
                     <div class="col-md-6">
                       <div class="form-floating">
                       <input type="text" class="form-control"  id="name" name="name"  placeholder="Name *" required="">
                         <label for="name" class="form-label">Your Name *</label>
                       </div>
                     </div>
                     <div class="col-md-6">
                       <div class="form-floating">
                       <input type="text" class="form-control"  id="email" name="email"  placeholder="email *" required="">
                         <label for="name" class="form-label">Your email *</label>
                       </div>
                     </div>
                    
                     <div class="col-md-6">
                       <div class="form-floating">
                       <input type="text" class="form-control" id="phone" name="phone" placeholder="Your Phone Nmber *">
                         <label for="email" class="form-label">Your Phone No.</label>
                       </div>
                     </div>
                     <div class="col-md-6">
                       <div class="form-floating">
                       <input id="experience" type="text" name="experience" id="experience"  class="form-control" placeholder="Your Phone Nmber *" >
                       
                         <label for="email" class="form-label">Your Experience</label>
                       </div>
                     </div>
                     <div class="col-md-12">
                       <div class="form-floating">
                       <textarea  name="skill" id="skill" class="form-control" placeholder="Your message" style="height: 150px" required></textarea>
                         <label for="email" class="form-label">Please enter your Skills & Tools.</label>
                       </div>
                     </div>

                     <div class="col-md-6">
                       <div class="form-floating">
                       <select class="form-select" id="employmenttype"  name="employmenttype" required>
                            <option selected disabled value="">Employment type *</option>
                            <option value="Full-time">Full-time</option>
                            <option value="Part-time">Part-time</option>
                          </select>
                         <label for="email" class="form-label">Please select a Employment type</label>
                       </div>
                     </div>

                     <div class="col-md-6">
                       <div class="form-floating">
                       <select class="form-select"  id="availability" name="availability" required>
                            <option selected disabled value="">Availability *</option>
                            <option value="Immediate">Immediate</option>
                            <option value="7 days">7 days</option>
                            <option value="15 days">15 days</option>
                            <option value="30 days">30 days</option>
                            <option value="60 days">60 days</option>
                            <option value="90 days">90 days</option>
          
                          </select>
                         <label for="email" class="form-label">Please select a Availability.</label>
                       </div>
                     </div>

                     <div class="col-md-12">
                       <div class="form-floating">
                       <div style="text-align: center;padding-top: 12px;" class="form-select-wrapper mb-4">
                    <!-- <label for="resume"  class="file-css" style="font-size: 15px;">Upload your Resume: &nbsp;&nbsp;</label> -->
                     <a  class="btn btn-soft-blue rounded-pill mb-2 me-1" onclick="document.getElementById('resume').click()">Upload Resume</a> 
                    <input type="file"  onchange="return fileValidation()" style="display:none;" name="resume" id="resume" class="center-block">
                    <p id="img-hide"><!-- Selected file will get here --></p>

                    <div class="invalid-feedback-file" style="display:none;"> Upload either pdf or docx format. </div>
                    
                      </div>
                       </div>
                     </div>
                    
                    
                   </div>
                 </div>
               </div>
<!--</br>
               <div class="row">
               <div class="col-md-12">
               <div id="callbackcaptchadiv"></div>
</div></div>-->
<div id="recaptcha" class="g-recaptcha"
          data-sitekey="6LefZI0iAAAAAJAXcSt0Vc0DeQZ348f-sUd2Ysgi"
          data-callback="onSubmit"
          data-size="invisible"></div>

              <div class="btn-container mx-auto pt-5">
                
                <button class="btn btn-primary d-block w-100" id="join" type="submit">Join</button>
 
                  </div>
 
                                     
                                 </div></form>

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
@endsection