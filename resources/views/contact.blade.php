@extends('layout.layout')
@section('section')
<section class="wrapper bg-light">
  <div class="container py-14 py-md-16">
    <div class="row gy-10 gx-lg-8 gx-xl-12 align-items-center">
      <div class="col-lg-7 position-relative">
        <div class="shape bg-dot primary rellax w-18 h-18" data-rellax-speed="1" style="top: 0; left: -1.4rem; z-index: 0;"></div>
        <div class="row gx-md-5 gy-5">
          <div class="col-md-6">
            <figure class="rounded mt-md-10 position-relative"><img src="./assets/img/photos/g5.jpg" srcset="./assets/img/photos/g5@2x.jpg 2x" alt=""></figure>
          </div>
          <!--/column -->
          <div class="col-md-6">
            <div class="row gx-md-5 gy-5">
              <div class="col-md-12 order-md-2">
                <figure class="rounded"><img src="./assets/img/photos/g6.jpg" srcset="./assets/img/photos/g6@2x.jpg 2x" alt=""></figure>
              </div>
              <!--/column -->
              <div class="col-md-10">
                <div class="card bg-pale-primary text-center counter-wrapper">
                  <div class="card-body py-11">
                    <h3 class="counter text-nowrap">14+</h3>
                    <p class="mb-0">Years in Industry</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.card -->
              </div>
              <!--/column -->
            </div>
            <!--/.row -->
          </div>
          <!--/column -->
        </div>
        <!--/.row -->
      </div>
      <!--/column -->
      <div class="col-lg-5">
        <h2 class="display-4 mb-3">Let’s Talk</h2>
        <p class="lead fs-lg">Let's make something great together. We are <span class="underline">trusted by</span> over 21000+ talents. Join us by using our services and grow your business.</p>
        <a href="https://talents.rapidbrains.com/" class="btn btn-primary rounded-pill mt-2">Hire Now</a>
      </div>
      <!--/column -->
    </div>
    <!--/.row -->
  </div>
  <!-- /.container -->
</section>
<!-- /section -->

    
    <section class="wrapper bg-gray">
      <div class="container pt-17 pb-20 pt-md-19 pb-md-21 text-center">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h1 class="display-1 mb-3 text-black">Get in Touch</h1>
            <nav class="d-inline-block" aria-label="breadcrumb">
              <ol class="breadcrumb text-white">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Contact</li>
              </ol>
            </nav>
            <!-- /nav -->
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-light angled upper-end">
      <div class="container pb-11">
        <div class="row mb-14 mb-md-16">
          <div class="col-xl-10 mx-auto mt-n19">
            <div class="card">
              <div class="row gx-0">
                <div class="col-lg-6 align-self-stretch">
                  <div class="map map-full rounded-top rounded-lg-start">

                    <iframe src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=HashRoot, Infopark,Kochi&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" style="width:100%; height: 100%; border:0" allowfullscreen></iframe>
                  </div>
                  <!-- /.map -->
                </div>
                <!--/column -->
                <div class="col-lg-6">
                  <div class="p-10 p-md-11 p-lg-14">
                    <div class="d-flex flex-row">
                      <div>
                        <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-location-pin-alt"></i> </div>
                      </div>
                      <div class="align-self-start justify-content-start">
                        <h5 class="mb-1">Address</h5>
                        <address>Ground Floor, Athulya, <br class="d-none d-md-block" />Infopark, Kochi, Kerala, India</address>
                      </div>
                    </div>
                    <!--/div -->
                    <div class="d-flex flex-row">
                      <div>
                        <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-phone-volume"></i> </div>
                      </div>
                      <div>
                        <h5 class="mb-1">Phone</h5>
                        <p>+91 (484) 404 1616</p>
                      </div>
                    </div>
                    <!--/div -->
                    <div class="d-flex flex-row">
                      <div>
                        <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-envelope"></i> </div>
                      </div>
                      <div>
                        <h5 class="mb-1">E-mail</h5>
                        <p class="mb-0"><a href="mailto:contact@rapidbrains.com" class="link-body">contact@rapidbrains.com</a></p>
                        <p class="mb-0"><a href="mailto:info@rapidbrains.com" class="link-body">info@rapidbrains.com</a></p>
                      </div>
                    </div>
                    <!--/div -->
                  </div>
                  <!--/div -->
                </div>
                <!--/column -->
              </div>
              <!--/.row -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
        <div class="row" id="contactDiv">
          <div class="col-lg-10 offset-lg-1 col-xl-8 offset-xl-2">
            <h2 class="display-4 mb-3 text-center">Drop Us a Line</h2>
            <p class="lead text-center mb-10">Reach out to us from our contact form and we will get back to you shortly.</p>
            @if(session()->has('error'))
            <div class="alert alert-danger alert-dismissible fade show"><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>{{ session()->get('error') }}</div>
@endif
@if(session()->has('success'))
<div class="alert alert-success alert-dismissible fade show"><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>{{ session()->get('success') }}</div>
@endif
            <form method="post" id="contactForm" class="text-start mb-3" novalidate="novalidate" action="{{route('contact-form')}}" enctype="multipart/form-data">  
            @csrf
              <div class="row gx-4">
                <div class="col-md-6">
                  
                  <div class="form-floating mb-4">
                    <input id="form_name" type="text" name="name" class="form-control" placeholder="Jane" required>
                    <label for="form_name">First Name *</label>
                  </div>
                </div>
                <!-- /column -->
                <div class="col-md-6">
                  <div class="form-floating mb-4">
                    <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Doe" required>
                    <label for="form_lastname">Last Name *</label>
                  </div>
                </div>
                <!-- /column -->
                <div class="col-md-6">
                  <div class="form-floating mb-4">
                    <input id="form_email" type="email" name="email" class="form-control" placeholder="jane.doe@example.com" required>
                    <label for="form_email">Email *</label>
                  </div>
                </div>
                <!-- /column -->
                <div class="col-md-6">
                  <div class="form-select-wrapper mb-4">
                    <select class="form-select" id="form-select" name="department" required>
                      <option selected disabled value="">Select a department</option>
                      <option value="Sales">Sales</option>
                      <option value="Marketing">Marketing</option>
                      <option value="Customer Support">Customer Support</option>
                    </select>
                  </div>
                </div>
                <!-- /column -->
                <div class="col-12">
                  <div class="form-floating mb-4">
                    <textarea id="form_message" name="message" class="form-control" placeholder="Your message" style="height: 150px" required></textarea>
                    <label for="form_message">Message *</label>
                  </div>
                </div>
                <!-- /column -->
                <div id="recaptcha" class="g-recaptcha"
          data-sitekey="6LefZI0iAAAAAJAXcSt0Vc0DeQZ348f-sUd2Ysgi"
          data-callback="onSubmit"
          data-size="invisible"></div>
                <div class="col-12 text-center">
                <button class="btn btn-primary rounded-pill btn-send mb-3" id="contact" type="submit">Send message</button>
                  <p class="text-muted"><strong>*</strong> These fields are required.</p>
                </div>
                <!-- /column -->
              </div>
              <!-- /.row -->
            </form>
            <!-- /form -->
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </section>
@endsection