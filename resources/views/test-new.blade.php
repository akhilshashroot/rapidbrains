@extends('layout.layoutenq')
@section('section')
<section class="wrapper image-wrapper bg-image  text-white" data-image-src="{{asset('assets/img/photos/RapidBrains-BG.jpg')}}">
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
                <form class="joinForm needs-validation text-start mb-3"  id="enqform" enctype="multipart/form-data" method="post" novalidate>
                  @csrf
                
      




                <div class="messages"></div>
                    <div style="display:none;" class="alert alert-success alert-dismissible fade show" id="success-msg"><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>We have received your application. Stay tuned, we’ll get back to you very soon.
                    </div>
                    <div style="display:none;" class="alert alert-danger alert-dismissible fade show" id="danger-msg"><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>Something went wrong!.
                    </div>
                    <div class="row gx-4">
                      <div class="col-md-12">
                        <div class="form-floating mb-4">
                          <input id="tags" type="text" class="form-control">
                          <label for="tags" class="form-label">Desired areas of expertise (e.g., JavaScript, Python, etc.) </label>

                        </div>
                      </div>
                      <!-- /column -->
                     
           <span class="lbl-txt">Designer</span>
<div>
           <span class="frcyxW "  id="data-remote-1" onclick="areaExp(1,event)"><span id="add-re-1">+</span><span id="remove-re-1" class="scsk">-</span>&nbsp;
             Other </span>
           <span class="frcyxW"  id="data-remote-2"  onclick="areaExp(2,event)"><span id="add-re-2">+</span><span id="remove-re-2"  class="scsk">-</span> &nbsp;
            Other </span>
           <span class="frcyxW"  id="data-remote-3"  onclick="areaExp(3,event)"><span id="add-re-3">+</span><span id="remove-re-3"  class="scsk">-</span> &nbsp;
            Other </span>
           <span class="frcyxW"  id="data-remote-4"  onclick="areaExp(4,event)"><span id="add-re-4">+</span><span id="remove-re-4"  class="scsk">-</span>&nbsp; 
           other </span>
           <span class="frcyxW"  id="data-remote-5"  onclick="areaExp(5,event)" ><span id="add-re-5">+</span><span id="remove-re-5"  class="scsk">-</span>&nbsp; 
            Other </span>
           <span class="frcyxW"   id="data-remote-6"  onclick="areaExp(6,event)"><span id="add-re-6">+</span><span id="remove-re-6"  class="scsk">-</span>&nbsp;
             Other </span>
           <span class="frcyxW"   id="data-remote-7"  onclick="areaExp(7,event)"><span id="add-re-7">+</span><span id="remove-re-7"  class="scsk">-</span>&nbsp; 
            Other </span>
           <span class="frcyxW"   id="data-remote-8"  onclick="areaExp(8,event)"><span id="add-re-8">+</span><span id="remove-re-8"  class="scsk">-</span> &nbsp;
            Other </span>
           <span class="frcyxW"   id="data-remote-9"  onclick="areaExp(9,event)"><span id="add-re-9">+</span><span id="remove-re-9"  class="scsk">-</span> &nbsp;
            Other </span>
           <span class="frcyxW"   id="data-remote-10"  onclick="areaExp(10,event)" ><span id="add-re-10">+</span><span id="remove-re-10"  class="scsk">-</span>&nbsp; 
            Other </span>
            </div>

           <span class="lbl-txt pds">Web Developers</span>
           <div>
           <span class="frcyxW"  id="data-remote-11"  onclick="areaExp(11,event)"><span id="add-re-11">+</span><span id="remove-re-11"  class="scsk">-</span> &nbsp;
           Other </span>
           <span class="frcyxW"  id="data-remote-12"  onclick="areaExp(12,event)"><span id="add-re-12">+</span><span id="remove-re-12"  class="scsk">-</span>&nbsp; 
            Other </span>
           <span class="frcyxW"  id="data-remote-13"  onclick="areaExp(13,event)"><span id="add-re-13">+</span><span id="remove-re-13"  class="scsk">-</span> &nbsp;
            Other </span>
           <span class="frcyxW"  id="data-remote-14"  onclick="areaExp(14,event)"><span id="add-re-14">+</span><span id="remove-re-14"  class="scsk">-</span>&nbsp;
             Other </span>
           <span class="frcyxW"  id="data-remote-15"  onclick="areaExp(15,event)"><span id="add-re-15">+</span><span id="remove-re-15"  class="scsk">-</span>&nbsp;
             Other </span>
           <span class="frcyxW" id="data-remote-16"  onclick="areaExp(16,event)"><span id="add-re-16">+</span><span id="remove-re-16"  class="scsk">-</span>&nbsp;
             Other </span>
           <span class="frcyxW" id="data-remote-17"  onclick="areaExp(17,event)"><span id="add-re-17">+</span><span id="remove-re-17"  class="scsk">-</span>&nbsp;
             Other </span>
           <span class="frcyxW" id="data-remote-18"  onclick="areaExp(18,event)"><span id="add-re-18">+</span><span id="remove-re-18"  class="scsk">-</span>&nbsp;
             Other </span>
           <span class="frcyxW" id="data-remote-19"  onclick="areaExp(19,event)"><span id="add-re-19">+</span><span id="remove-re-19"  class="scsk">-</span>&nbsp; 
            Other </span>
           <span class="frcyxW" id="data-remote-20"  onclick="areaExp(20,event)"><span id="add-re-20">+</span><span id="remove-re-20"  class="scsk">-</span>&nbsp; 
            Other </span>

            </div>



            <div class="col-md-12 pt-5">
                        <div class="form-floating mb-4">
                        <textarea  name="skill" id="skill" class="form-control" placeholder="Your message" style="height: 150px" ></textarea>
                         <label for="email" class="form-label">Please enter your addtional Skills</label>
                        </div>
                      </div>
                      <!-- /column -->
                      <div class="col-12 text-center pt-5">
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


    
@endsection
