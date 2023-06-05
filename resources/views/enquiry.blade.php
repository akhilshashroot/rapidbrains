@extends('layout.layoutenq')
@section('section')
<section class="wrapper image-wrapper bg-image  text-white" data-image-src="{{asset('assets/img/photos/rapidbrains-cover.webp')}}">
      <div class="container pt-17 pb-20 pt-md-19 pb-md-21 text-center">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h1 class="display-1 mb-3">Let's find your developers</h1>
            
            <!-- /nav -->
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-light"  id="section1">
      <div class="container pb-14 pb-md-16">
        <div class="row">
          <div class="col-lg-7 col-xl-6 col-xxl-9 mx-auto mt-n20">
            <div class="card shadow-lg">
              <div class="card-body p-11 text-center newcase">
                <h2 class="mb-3 text-center">What are your must-have talents?</h2>
                <p class="lead mb-6 text-center">Select the desired areas of expertise</p>
                <form  id="enqform" class="text-start mb-3" novalidate="novalidate" action="#" enctype="multipart/form-data">
                  @csrf
                
      <input type="hidden" name="skill" id="skill">
      <input type="hidden" name="experience" id="experience">
      <input type="hidden" id="phoneno" name="phoneno" value="">
      <input type="hidden" id="countrycode" name="countrycode" value="">
      <input type="hidden" id="countryname" name="countryname" value="">




                <div class="messages"></div>
                    <div style="display:none;" class="alert alert-success alert-dismissible fade show" id="success-msg"><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>We have received your application. Stay tuned, we’ll get back to you very soon.
                    </div>
                    <div style="display:none;" class="alert alert-danger alert-dismissible fade show" id="danger-msg"><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>Something went wrong!.
                    </div>
                    <div class="row gx-4">
                      <div class="col-md-12">
                        <div class="form-floating mb-4 d1">
                          <input id="tags"  type="text" class="form-control ssform">
                          <label for="tags" class="form-label">Desired areas of expertise (e.g., JavaScript, Python, etc.) </label>

                        </div>
                      </div>
                      <!-- /column -->
          
<div>
           <span class="btn btn-soft-ash btn-sm rounded-pill mb-2 me-1"  id="data-remote-1" onclick="areaExp(1,event)"><span id="add-re-1">+</span><span id="remove-re-1" class="scsk">-</span>&nbsp;
           Angular  </span>
           <span class="btn btn-soft-ash btn-sm rounded-pill mb-2 me-1"  id="data-remote-2"  onclick="areaExp(2,event)"><span id="add-re-2">+</span><span id="remove-re-2"  class="scsk">-</span>&nbsp;
           Android  </span>
           <span class="btn btn-soft-ash btn-sm rounded-pill mb-2 me-1"  id="data-remote-3"  onclick="areaExp(3,event)"><span id="add-re-3">+</span><span id="remove-re-3"  class="scsk">-</span>&nbsp;
           ASP.NET </span>
           <span class="btn btn-soft-ash btn-sm rounded-pill mb-2 me-1"  id="data-remote-4"  onclick="areaExp(4,event)"><span id="add-re-4">+</span><span id="remove-re-4"  class="scsk">-</span>&nbsp; 
           AWS </span>
           <span class="btn btn-soft-ash btn-sm rounded-pill mb-2 me-1"  id="data-remote-5"  onclick="areaExp(5,event)" ><span id="add-re-5">+</span><span id="remove-re-5"  class="scsk">-</span>&nbsp; 
           Blockchain </span>
           <span class="btn btn-soft-ash btn-sm rounded-pill mb-2 me-1"   id="data-remote-6"  onclick="areaExp(6,event)"><span id="add-re-6">+</span><span id="remove-re-6"  class="scsk">-</span>&nbsp;
           C Sharp </span>
           <span class="btn btn-soft-ash btn-sm rounded-pill mb-2 me-1"   id="data-remote-7"  onclick="areaExp(7,event)"><span id="add-re-7">+</span><span id="remove-re-7"  class="scsk">-</span>&nbsp; 
           DevOps </span>
           <span class="btn btn-soft-ash btn-sm rounded-pill mb-2 me-1"   id="data-remote-8"  onclick="areaExp(8,event)"><span id="add-re-8">+</span><span id="remove-re-8"  class="scsk">-</span>&nbsp;
           Flutter </span>
           <span class="btn btn-soft-ash btn-sm rounded-pill mb-2 me-1"   id="data-remote-9"  onclick="areaExp(9,event)"><span id="add-re-9">+</span><span id="remove-re-9"  class="scsk">-</span>&nbsp;
           Golang </span>
           <span class="btn btn-soft-ash btn-sm rounded-pill mb-2 me-1"   id="data-remote-10"  onclick="areaExp(10,event)" ><span id="add-re-10">+</span><span id="remove-re-10"  class="scsk">-</span>&nbsp; 
           Ionic </span>
          
        
           <span class="btn btn-soft-ash btn-sm rounded-pill mb-2 me-1"  id="data-remote-11"  onclick="areaExp(11,event)"><span id="add-re-11">+</span><span id="remove-re-11"  class="scsk">-</span>&nbsp;
           Java </span>
           <span class="btn btn-soft-ash btn-sm rounded-pill mb-2 me-1"  id="data-remote-12"  onclick="areaExp(12,event)"><span id="add-re-12">+</span><span id="remove-re-12"  class="scsk">-</span>&nbsp; 
           MERN </span>
           <span class="btn btn-soft-ash btn-sm rounded-pill mb-2 me-1"  id="data-remote-13"  onclick="areaExp(13,event)"><span id="add-re-13">+</span><span id="remove-re-13"  class="scsk">-</span>&nbsp;
           PHP </span>
           <span class="btn btn-soft-ash btn-sm rounded-pill mb-2 me-1"  id="data-remote-14"  onclick="areaExp(14,event)"><span id="add-re-14">+</span><span id="remove-re-14"  class="scsk">-</span>&nbsp;
           Python </span>
           <span class="btn btn-soft-ash btn-sm rounded-pill mb-2 me-1"  id="data-remote-15"  onclick="areaExp(15,event)"><span id="add-re-15">+</span><span id="remove-re-15"  class="scsk">-</span>&nbsp;
           MEAN </span>
           <span class="btn btn-soft-ash btn-sm rounded-pill mb-2 me-1" id="data-remote-16"  onclick="areaExp(16,event)"><span id="add-re-16">+</span><span id="remove-re-16"  class="scsk">-</span>&nbsp;
           React </span>
           <span class="btn btn-soft-ash btn-sm rounded-pill mb-2 me-1" id="data-remote-17"  onclick="areaExp(17,event)"><span id="add-re-17">+</span><span id="remove-re-17"  class="scsk">-</span>&nbsp;
           Ruby on Rails </span>
           <span class="btn btn-soft-ash btn-sm rounded-pill mb-2 me-1" id="data-remote-18"  onclick="areaExp(18,event)"><span id="add-re-18">+</span><span id="remove-re-18"  class="scsk">-</span>&nbsp;
           Machine Learning </span>
           <span class="btn btn-soft-ash btn-sm rounded-pill mb-2 me-1" id="data-remote-19"  onclick="areaExp(19,event)"><span id="add-re-19">+</span><span id="remove-re-19"  class="scsk">-</span>&nbsp; 
           Salesforce </span>
           <span class="btn btn-soft-ash btn-sm rounded-pill mb-2 me-1" id="data-remote-20"  onclick="areaExp(20,event)"><span id="add-re-20">+</span><span id="remove-re-20"  class="scsk">-</span>&nbsp; 
           SAP </span>
            <span class="btn btn-soft-ash btn-sm rounded-pill mb-2 me-1"  id="data-remote-21"  onclick="areaExp(21,event)"><span id="add-re-21">+</span><span id="remove-re-21"  class="scsk">-</span>&nbsp;
            Drupal </span>
           <span class="btn btn-soft-ash btn-sm rounded-pill mb-2 me-1"  id="data-remote-22"  onclick="areaExp(22,event)"><span id="add-re-22">+</span><span id="remove-re-22"  class="scsk">-</span>&nbsp; 
           Django </span>
           <span class="btn btn-soft-ash btn-sm rounded-pill mb-2 me-1"  id="data-remote-23"  onclick="areaExp(23,event)"><span id="add-re-23">+</span><span id="remove-re-23"  class="scsk">-</span> &nbsp;
           React Node </span>
           <span class="btn btn-soft-ash btn-sm rounded-pill mb-2 me-1"  id="data-remote-24"  onclick="areaExp(24,event)"><span id="add-re-24">+</span><span id="remove-re-24"  class="scsk">-</span>&nbsp;
           Backend </span>
           <span class="btn btn-soft-ash btn-sm rounded-pill mb-2 me-1"  id="data-remote-25"  onclick="areaExp(25,event)"><span id="add-re-25">+</span><span id="remove-re-25"  class="scsk">-</span>&nbsp;
           Frontend </span>
           <span class="btn btn-soft-ash btn-sm rounded-pill mb-2 me-1" id="data-remote-26"  onclick="areaExp(26,event)"><span id="add-re-26">+</span><span id="remove-re-26"  class="scsk">-</span>&nbsp;
           Postgresql </span>
           <span class="btn btn-soft-ash btn-sm rounded-pill mb-2 me-1" id="data-remote-27"  onclick="areaExp(27,event)"><span id="add-re-27">+</span><span id="remove-re-27"  class="scsk">-</span>&nbsp;
           Fullstack </span>
           <span class="btn btn-soft-ash btn-sm rounded-pill mb-2 me-1" id="data-remote-28"  onclick="areaExp(28,event)"><span id="add-re-28">+</span><span id="remove-re-28"  class="scsk">-</span>&nbsp;
           JavaScript </span>
           <span class="btn btn-soft-ash btn-sm rounded-pill mb-2 me-1" id="data-remote-29"  onclick="areaExp(29,event)"><span id="add-re-29">+</span><span id="remove-re-29"  class="scsk">-</span>&nbsp; 
           Node </span>
           <span class="btn btn-soft-ash btn-sm rounded-pill mb-2 me-1" id="data-remote-30"  onclick="areaExp(30,event)"><span id="add-re-30">+</span><span id="remove-re-30"  class="scsk">-</span>&nbsp; 
           React Native </span>
            <span class="btn btn-soft-ash btn-sm rounded-pill mb-2 me-1"  id="data-remote-31"  onclick="areaExp(31,event)"><span id="add-re-31">+</span><span id="remove-re-31"  class="scsk">-</span> &nbsp;
            Shopify </span>
          
           <span class="btn btn-soft-ash btn-sm rounded-pill mb-2 me-1"  id="data-remote-32"  onclick="areaExp(32,event)"><span id="add-re-32">+</span><span id="remove-re-32"  class="scsk">-</span>&nbsp; 
           Wordpress </span>
           <span class="btn btn-soft-ash btn-sm rounded-pill mb-2 me-1"  id="data-remote-33"  onclick="areaExp(33,event)"><span id="add-re-33">+</span><span id="remove-re-33"  class="scsk">-</span>&nbsp;
           Kotlin </span>
           <span class="btn btn-soft-ash btn-sm rounded-pill mb-2 me-1"  id="data-remote-34"  onclick="areaExp(34,event)"><span id="add-re-34">+</span><span id="remove-re-34"  class="scsk">-</span>&nbsp;
           Xamarin </span>
           <span class="btn btn-soft-ash btn-sm rounded-pill mb-2 me-1"  id="data-remote-35"  onclick="areaExp(35,event)"><span id="add-re-35">+</span><span id="remove-re-35"  class="scsk">-</span>&nbsp;
           IOS </span>
           <span class="btn btn-soft-ash btn-sm rounded-pill mb-2 me-1" id="data-remote-36"  onclick="areaExp(36,event)"><span id="add-re-36">+</span><span id="remove-re-36"  class="scsk">-</span>&nbsp;
           Magento </span>
           <span class="btn btn-soft-ash btn-sm rounded-pill mb-2 me-1" id="data-remote-37"  onclick="areaExp(37,event)"><span id="add-re-37">+</span><span id="remove-re-37"  class="scsk">-</span>&nbsp;
           UI/UX </span>
           <span class="btn btn-soft-ash btn-sm rounded-pill mb-2 me-1" id="data-remote-38"  onclick="areaExp(38,event)"><span id="add-re-38">+</span><span id="remove-re-38"  class="scsk">-</span>&nbsp;
           SEO </span>
           <span class="btn btn-soft-ash btn-sm rounded-pill mb-2 me-1" id="data-remote-39"  onclick="areaExp(39,event)"><span id="add-re-39">+</span><span id="remove-re-39"  class="scsk">-</span>&nbsp; 
           Laravel </span>
           <span class="btn btn-soft-ash btn-sm rounded-pill mb-2 me-1" id="data-remote-40"  onclick="areaExp(40,event)"><span id="add-re-40">+</span><span id="remove-re-40"  class="scsk">-</span>&nbsp; 
           Jira </span>
            <span class="btn btn-soft-ash btn-sm rounded-pill mb-2 me-1" id="data-remote-41"  onclick="areaExp(41,event)"><span id="add-re-41">+</span><span id="remove-re-41"  class="scsk">-</span>&nbsp; 
            Ansible </span>
            <span id="dots"></span>

<span id="more">

            <span class="btn btn-soft-ash btn-sm rounded-pill mb-2 me-1"  id="data-remote-42"  onclick="areaExp(42,event)"><span id="add-re-42">+</span><span id="remove-re-42"  class="scsk">-</span>&nbsp;
            Apache kafka </span>
           <span class="btn btn-soft-ash btn-sm rounded-pill mb-2 me-1"  id="data-remote-43"  onclick="areaExp(43,event)"><span id="add-re-43">+</span><span id="remove-re-43"  class="scsk">-</span>&nbsp; 
           Azure </span>
           <span class="btn btn-soft-ash btn-sm rounded-pill mb-2 me-1"  id="data-remote-44"  onclick="areaExp(44,event)"><span id="add-re-44">+</span><span id="remove-re-44"  class="scsk">-</span> &nbsp;
           Bitbucket </span>
           <span class="btn btn-soft-ash btn-sm rounded-pill mb-2 me-1"  id="data-remote-45"  onclick="areaExp(45,event)"><span id="add-re-45">+</span><span id="remove-re-45"  class="scsk">-</span>&nbsp;
           Apache Spark </span>
           <span class="btn btn-soft-ash btn-sm rounded-pill mb-2 me-1"  id="data-remote-46"  onclick="areaExp(46,event)"><span id="add-re-46">+</span><span id="remove-re-46"  class="scsk">-</span>&nbsp;
           Bootstrap </span>
           <span class="btn btn-soft-ash btn-sm rounded-pill mb-2 me-1" id="data-remote-47"  onclick="areaExp(47,event)"><span id="add-re-47">+</span><span id="remove-re-47"  class="scsk">-</span>&nbsp;
           C++ </span>
           <span class="btn btn-soft-ash btn-sm rounded-pill mb-2 me-1" id="data-remote-48"  onclick="areaExp(48,event)"><span id="add-re-48">+</span><span id="remove-re-48"  class="scsk">-</span>&nbsp;
           BrowserStack </span>
           <span class="btn btn-soft-ash btn-sm rounded-pill mb-2 me-1" id="data-remote-49"  onclick="areaExp(49,event)"><span id="add-re-49">+</span><span id="remove-re-49"  class="scsk">-</span>&nbsp;
           Confluence </span>
           <span class="btn btn-soft-ash btn-sm rounded-pill mb-2 me-1" id="data-remote-50"  onclick="areaExp(50,event)"><span id="add-re-50">+</span><span id="remove-re-50"  class="scsk">-</span>&nbsp; 
           Docker </span>
           <span class="btn btn-soft-ash btn-sm rounded-pill mb-2 me-1" id="data-remote-51"  onclick="areaExp(51,event)"><span id="add-re-51">+</span><span id="remove-re-51"  class="scsk">-</span>&nbsp; 
           ElasticSearch </span>
            <span class="btn btn-soft-ash btn-sm rounded-pill mb-2 me-1"  id="data-remote-52"  onclick="areaExp(52,event)"><span id="add-re-52">+</span><span id="remove-re-52"  class="scsk">-</span> &nbsp;
            Express JS </span>
           <span class="btn btn-soft-ash btn-sm rounded-pill mb-2 me-1"  id="data-remote-53"  onclick="areaExp(53,event)"><span id="add-re-53">+</span><span id="remove-re-53"  class="scsk">-</span>&nbsp; 
           Firebase </span>
           <span class="btn btn-soft-ash btn-sm rounded-pill mb-2 me-1"  id="data-remote-54"  onclick="areaExp(54,event)"><span id="add-re-54">+</span><span id="remove-re-54"  class="scsk">-</span>&nbsp;
           Flask </span>
           <span class="btn btn-soft-ash btn-sm rounded-pill mb-2 me-1"  id="data-remote-55"  onclick="areaExp(55,event)"><span id="add-re-55">+</span><span id="remove-re-55"  class="scsk">-</span>&nbsp;
           Git </span>
           <span class="btn btn-soft-ash btn-sm rounded-pill mb-2 me-1"  id="data-remote-56"  onclick="areaExp(56,event)"><span id="add-re-56">+</span><span id="remove-re-56"  class="scsk">-</span>&nbsp;
           Kubernetes </span>
           <span class="btn btn-soft-ash btn-sm rounded-pill mb-2 me-1" id="data-remote-57"  onclick="areaExp(57,event)"><span id="add-re-57">+</span><span id="remove-re-57"  class="scsk">-</span>&nbsp;
           GitHub </span>
           <span class="btn btn-soft-ash btn-sm rounded-pill mb-2 me-1" id="data-remote-58"  onclick="areaExp(58,event)"><span id="add-re-58">+</span><span id="remove-re-58"  class="scsk">-</span>&nbsp;
           Grape JS </span>
           <span class="btn btn-soft-ash btn-sm rounded-pill mb-2 me-1" id="data-remote-59"  onclick="areaExp(59,event)"><span id="add-re-59">+</span><span id="remove-re-59"  class="scsk">-</span>&nbsp;
           Jenkins </span>
           <span class="btn btn-soft-ash btn-sm rounded-pill mb-2 me-1" id="data-remote-60"  onclick="areaExp(60,event)"><span id="add-re-60">+</span><span id="remove-re-60"  class="scsk">-</span>&nbsp; 
           Joomla </span>
           <span class="btn btn-soft-ash btn-sm rounded-pill mb-2 me-1" id="data-remote-61"  onclick="areaExp(61,event)"><span id="add-re-61">+</span><span id="remove-re-61"  class="scsk">-</span>&nbsp; 
           AEM </span>
            <span class="btn btn-soft-ash btn-sm rounded-pill mb-2 me-1" id="data-remote-62"  onclick="areaExp(62,event)"><span id="add-re-62">+</span><span id="remove-re-62"  class="scsk">-</span>&nbsp; 
            GitLab </span>
          
           <span class="btn btn-soft-ash btn-sm rounded-pill mb-2 me-1"  id="data-remote-63"  onclick="areaExp(63,event)"><span id="add-re-63">+</span><span id="remove-re-63"  class="scsk">-</span>&nbsp; 
           Grafana </span>
           <span class="btn btn-soft-ash btn-sm rounded-pill mb-2 me-1"  id="data-remote-64"  onclick="areaExp(64,event)"><span id="add-re-64">+</span><span id="remove-re-64"  class="scsk">-</span> &nbsp;
           HTML CSS </span>
           <span class="btn btn-soft-ash btn-sm rounded-pill mb-2 me-1"  id="data-remote-65"  onclick="areaExp(65,event)"><span id="add-re-65">+</span><span id="remove-re-65"  class="scsk">-</span>&nbsp;
           Keras </span>
           <span class="btn btn-soft-ash btn-sm rounded-pill mb-2 me-1"  id="data-remote-66"  onclick="areaExp(66,event)"><span id="add-re-66">+</span><span id="remove-re-66"  class="scsk">-</span>&nbsp;
           Kibana </span>
           <span class="btn btn-soft-ash btn-sm rounded-pill mb-2 me-1" id="data-remote-67"  onclick="areaExp(67,event)"><span id="add-re-67">+</span><span id="remove-re-67"  class="scsk">-</span>&nbsp;
           Logstash </span>
           <span class="btn btn-soft-ash btn-sm rounded-pill mb-2 me-1" id="data-remote-68"  onclick="areaExp(68,event)"><span id="add-re-68">+</span><span id="remove-re-68"  class="scsk">-</span>&nbsp;
           Material UI </span>
           <span class="btn btn-soft-ash btn-sm rounded-pill mb-2 me-1" id="data-remote-69"  onclick="areaExp(69,event)"><span id="add-re-69">+</span><span id="remove-re-69"  class="scsk">-</span>&nbsp;
           Mendix </span>
           <span class="btn btn-soft-ash btn-sm rounded-pill mb-2 me-1" id="data-remote-70"  onclick="areaExp(70,event)"><span id="add-re-70">+</span><span id="remove-re-70"  class="scsk">-</span>&nbsp; 
           MicrosoftDynamics </span>
           <span class="btn btn-soft-ash btn-sm rounded-pill mb-2 me-1" id="data-remote-71"  onclick="areaExp(71,event)"><span id="add-re-71">+</span><span id="remove-re-71"  class="scsk">-</span>&nbsp; 
           MongoDB </span>
            <span class="btn btn-soft-ash btn-sm rounded-pill mb-2 me-1"  id="data-remote-72"  onclick="areaExp(72,event)"><span id="add-re-72">+</span><span id="remove-re-72"  class="scsk">-</span> &nbsp;
            Moodle </span>
           <span class="btn btn-soft-ash btn-sm rounded-pill mb-2 me-1"  id="data-remote-73"  onclick="areaExp(73,event)"><span id="add-re-73">+</span><span id="remove-re-73"  class="scsk">-</span>&nbsp; 
           MySQL </span>
           <span class="btn btn-soft-ash btn-sm rounded-pill mb-2 me-1"  id="data-remote-74"  onclick="areaExp(74,event)"><span id="add-re-74">+</span><span id="remove-re-74"  class="scsk">-</span>&nbsp;
            .NET Core </span>
           <span class="btn btn-soft-ash btn-sm rounded-pill mb-2 me-1"  id="data-remote-75"  onclick="areaExp(75,event)"><span id="add-re-75">+</span><span id="remove-re-75"  class="scsk">-</span>&nbsp;
           Next JS </span>
           <span class="btn btn-soft-ash btn-sm rounded-pill mb-2 me-1"  id="data-remote-76"  onclick="areaExp(76,event)"><span id="add-re-76">+</span><span id="remove-re-76"  class="scsk">-</span>&nbsp;
           NumPy </span>
           <span class="btn btn-soft-ash btn-sm rounded-pill mb-2 me-1" id="data-remote-77"  onclick="areaExp(77,event)"><span id="add-re-77">+</span><span id="remove-re-77"  class="scsk">-</span>&nbsp;
           Oracle </span>
           <span class="btn btn-soft-ash btn-sm rounded-pill mb-2 me-1" id="data-remote-78"  onclick="areaExp(78,event)"><span id="add-re-78">+</span><span id="remove-re-78"  class="scsk">-</span>&nbsp;
           Pandas </span>
           <span class="btn btn-soft-ash btn-sm rounded-pill mb-2 me-1" id="data-remote-79"  onclick="areaExp(79,event)"><span id="add-re-79">+</span><span id="remove-re-79"  class="scsk">-</span>&nbsp;
           Power BI </span>
           <span class="btn btn-soft-ash btn-sm rounded-pill mb-2 me-1" id="data-remote-80"  onclick="areaExp(80,event)"><span id="add-re-80">+</span><span id="remove-re-80"  class="scsk">-</span>&nbsp; 
           Prometheus </span>
           <span class="btn btn-soft-ash btn-sm rounded-pill mb-2 me-1" id="data-remote-81"  onclick="areaExp(81,event)"><span id="add-re-81">+</span><span id="remove-re-81"  class="scsk">-</span>&nbsp; 
           Puppet </span>
           <span class="btn btn-soft-ash btn-sm rounded-pill mb-2 me-1" id="data-remote-82"  onclick="areaExp(82,event)"><span id="add-re-82">+</span><span id="remove-re-82"  class="scsk">-</span>&nbsp; 
           PyTorch </span>
           <span class="btn btn-soft-ash btn-sm rounded-pill mb-2 me-1" id="data-remote-83"  onclick="areaExp(83,event)"><span id="add-re-83">+</span><span id="remove-re-83"  class="scsk">-</span>&nbsp; 
           RabbitMQ </span>
           <span class="btn btn-soft-ash btn-sm rounded-pill mb-2 me-1" id="data-remote-84"  onclick="areaExp(84,event)"><span id="add-re-84">+</span><span id="remove-re-84"  class="scsk">-</span>&nbsp; 
           Redis </span>
           <span class="btn btn-soft-ash btn-sm rounded-pill mb-2 me-1" id="data-remote-85"  onclick="areaExp(85,event)"><span id="add-re-85">+</span><span id="remove-re-85"  class="scsk">-</span>&nbsp; 
           Ruby </span>
           <span class="btn btn-soft-ash btn-sm rounded-pill mb-2 me-1" id="data-remote-86"  onclick="areaExp(86,event)"><span id="add-re-86">+</span><span id="remove-re-86"  class="scsk">-</span>&nbsp; 
           Rust </span>
           <span class="btn btn-soft-ash btn-sm rounded-pill mb-2 me-1" id="data-remote-87"  onclick="areaExp(87,event)"><span id="add-re-87">+</span><span id="remove-re-87"  class="scsk">-</span>&nbsp; 
           Scala </span>
           <span class="btn btn-soft-ash btn-sm rounded-pill mb-2 me-1" id="data-remote-88"  onclick="areaExp(88,event)"><span id="add-re-88">+</span><span id="remove-re-88"  class="scsk">-</span>&nbsp; 
           SenchaJs </span>
           <span class="btn btn-soft-ash btn-sm rounded-pill mb-2 me-1" id="data-remote-89"  onclick="areaExp(89,event)"><span id="add-re-89">+</span><span id="remove-re-89"  class="scsk">-</span>&nbsp; 
           Sharepoint </span>
           <span class="btn btn-soft-ash btn-sm rounded-pill mb-2 me-1" id="data-remote-90"  onclick="areaExp(90,event)"><span id="add-re-90">+</span><span id="remove-re-90"  class="scsk">-</span>&nbsp; 
           Slack </span>
           <span class="btn btn-soft-ash btn-sm rounded-pill mb-2 me-1" id="data-remote-91"  onclick="areaExp(91,event)"><span id="add-re-91">+</span><span id="remove-re-91"  class="scsk">-</span>&nbsp; 
           Solidity </span>
           <span class="btn btn-soft-ash btn-sm rounded-pill mb-2 me-1" id="data-remote-92"  onclick="areaExp(92,event)"><span id="add-re-92">+</span><span id="remove-re-92"  class="scsk">-</span>&nbsp; 
           Spring Boot </span>
           <span class="btn btn-soft-ash btn-sm rounded-pill mb-2 me-1" id="data-remote-93"  onclick="areaExp(93,event)"><span id="add-re-93">+</span><span id="remove-re-93"  class="scsk">-</span>&nbsp; 
           Swift </span>
           <span class="btn btn-soft-ash btn-sm rounded-pill mb-2 me-1" id="data-remote-94"  onclick="areaExp(94,event)"><span id="add-re-94">+</span><span id="remove-re-94"  class="scsk">-</span>&nbsp; 
           Tech Support </span>
           <span class="btn btn-soft-ash btn-sm rounded-pill mb-2 me-1" id="data-remote-95"  onclick="areaExp(95,event)"><span id="add-re-95">+</span><span id="remove-re-95"  class="scsk">-</span>&nbsp; 
           TensorFlow </span>
           <span class="btn btn-soft-ash btn-sm rounded-pill mb-2 me-1" id="data-remote-96"  onclick="areaExp(96,event)"><span id="add-re-96">+</span><span id="remove-re-96"  class="scsk">-</span>&nbsp; 
           Terraform </span>
           <span class="btn btn-soft-ash btn-sm rounded-pill mb-2 me-1" id="data-remote-97"  onclick="areaExp(97,event)"><span id="add-re-97">+</span><span id="remove-re-97"  class="scsk">-</span>&nbsp; 
           TestRail </span>
           <span class="btn btn-soft-ash btn-sm rounded-pill mb-2 me-1" id="data-remote-98"  onclick="areaExp(98,event)"><span id="add-re-98">+</span><span id="remove-re-98"  class="scsk">-</span>&nbsp; 
           TypeScript </span>
           <span class="btn btn-soft-ash btn-sm rounded-pill mb-2 me-1" id="data-remote-99"  onclick="areaExp(99,event)"><span id="add-re-99">+</span><span id="remove-re-99"  class="scsk">-</span>&nbsp; 
           Unity </span>
           <span class="btn btn-soft-ash btn-sm rounded-pill mb-2 me-1" id="data-remote-100"  onclick="areaExp(100,event)"><span id="add-re-100">+</span><span id="remove-re-100"  class="scsk">-</span>&nbsp; 
           Unreal Engine </span>
           <span class="btn btn-soft-ash btn-sm rounded-pill mb-2 me-1" id="data-remote-101"  onclick="areaExp(101,event)"><span id="add-re-101">+</span><span id="remove-re-101"  class="scsk">-</span>&nbsp; 
           Vue JS </span>
        
</span>            <a class="btn btn-primary btn-sm rounded-pill mb-2 me-1" onclick="myFunction()" id="myBtn">View more</a>
            </div>
            <div class="pt-5">
         
        
            <h2 class="mb-3 text-center">OR</h2>
                <p class="lead mb-6 text-center">Please enter the skill set below</p>
            <p id="display-skill" style="color:#dc3545;display:none;"><b>Please select a skill</b></p>

            </div>

            <div class="col-md-12 pt-5">
                        <div class="form-floating mb-4 d1">
                        <textarea  name="add_skill" id="add-skill" class="form-control ssform" placeholder="Your message" style="height: 150px" ></textarea>
                         <label for="email" class="form-label">Please enter the skill set </label>
                        </div>
                      </div>

                      <!-- <div class="selected-resources"><ul class="resource-list"><li class="resource"><div class="resource-role"><p class="role-name">
                        Performance Marketer</p></div><div class="resource-level"><div class="rev-select">
                          
                          <select name="res-lvl[]" class="form-select"><option value="Junior Level">Junior Level</option>
                          <option value="Mid Level" selected="">Mid Level</option>
                          <option value="Senior Level">Senior Level</option></select>
                        </div></div></li></ul></div>

                        <div class="selected-resources"><ul class="resource-list"><li class="resource"><div class="resource-role"><p class="role-name">
                        Performance Marketer</p></div><div class="resource-level"><div class="rev-select">
                          <select name="res-lvl[]" class="form-select"><option value="Junior Level">Junior Level</option>
                          <option value="Mid Level" selected="">Mid Level</option>
                          <option value="Senior Level">Senior Level</option></select>
                        </div></div></li></ul></div> -->



                      <!-- /column -->
                      <div class="col-12 text-center pt-5">
                        <a href="javascript:void(0)" id="continue1" class="btn btn-primary rounded-pill btn-login ml" value="Continue">

	<span>Continue</span>&nbsp;
  <i class="uil uil-arrow-right"></i>
</a>
                    
                      </div>
                      <!-- /column -->
                    </div>
                    <!-- /.row -->
                 

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
<!--                           ===========================section2 ============================                                  -->
    <section class="wrapper bg-light" id="section2">
      <div class="container pb-14 pb-md-16">
        <div class="row">
          <div class="col-lg-7 col-xl-6 col-xxl-9 mx-auto mt-n20">
            <div class="card shadow-lg">
              <div class="card-body p-11 text-center newcase">
        
              <div class="row gy-6 justify-content-center" id="items">
                        <p class="lead mb-6 text-center">What level of experience are you looking for in the talent?</p>
                        
                        <div class="col-12 col-md-5 col-lg-3">
                        <a href="javascript:void(0)" onclick="selectCard(1)">
                            <div class="card h-80 shadow-lg lift h-70 card12 d1" id="card-junior">
                               
                                    <div class="card-body d-flex flex-column align-items-center justify-content-center">
                                      <h4 class="mb-1 text-center">Junior Level</h4>
                                      <!-- line -->
                                      <hr class="my-3" style="color: #5eb9f0; width: 100px;"/>
                                      <p class="text-center">1-3 Years Experienced</p>
                                    </div>
                               
                            </div> </a>
                        </div>
                        <div class="col-12 col-md-5 col-lg-3">
                        <a href="javascript:void(0)" onclick="selectCard(2)">
                            <div class="card h-80 shadow-lg lift h-70 card12 d1" id="card-mid">
                                    <div class="card-body d-flex flex-column align-items-center justify-content-center">
                                      <h4 class="mb-1 text-center">Mid Level</h4>
                                      <!-- line -->
                                      <hr class="my-3" style="color: #5eb9f0; width: 100px;"/>
                                      <p class="text-center">3-5 Years Experienced</p>
                                    </div>
                               
                            </div> </a>
                        </div>
                        <div class="col-12 col-md-5 col-lg-3">
                        <a href="javascript:void(0)" onclick="selectCard(3)">
                            <div class="card h-80 shadow-lg lift h-70 card12 d1" id="card-senior">
                               
                                    <div class="card-body d-flex flex-column align-items-center justify-content-center">
                                      <h4 class="mb-1 text-center">Senior Level</h4>
                                      <!-- line -->
                                      <hr class="my-3" style="color: #5eb9f0; width: 100px;"/>
                                      <p class="text-center">5+ Years Experienced</p>
                                    </div>
                               
                            </div> </a>
                        </div>
                    </div>
                    <p id="display-skill2" style="color:#dc3545;display:none;"><b>Please select a level of experience</b></p>

                      <!-- <div class="selected-resources"><ul class="resource-list"><li class="resource"><div class="resource-role"><p class="role-name">
                        Performance Marketer</p></div><div class="resource-level"><div class="rev-select">
                          
                          <select name="res-lvl[]" class="form-select"><option value="Junior Level">Junior Level</option>
                          <option value="Mid Level" selected="">Mid Level</option>
                          <option value="Senior Level">Senior Level</option></select>
                        </div></div></li></ul></div>

                        <div class="selected-resources"><ul class="resource-list"><li class="resource"><div class="resource-role"><p class="role-name">
                        Performance Marketer</p></div><div class="resource-level"><div class="rev-select">
                          <select name="res-lvl[]" class="form-select"><option value="Junior Level">Junior Level</option>
                          <option value="Mid Level" selected="">Mid Level</option>
                          <option value="Senior Level">Senior Level</option></select>
                        </div></div></li></ul></div> -->



                      <!-- /column -->
                      <div class="row gy-6 justify-content-center" id="items" style="
    margin-top: 10px;
">

                      
                     <div class="col-md-6">
                     <p class="lead mb-6 text-center">How many developers you are hiring? </p>

                       <div class="form-floating d2">
                       <input type="number" class="form-control ssform"  id="count" name="count"  placeholder="Name *" >
                         <label for="count" class="form-label">How many developers you are hiring?</label>
                       </div>
                     </div>


</div>


                      <div class="col-12 text-center pt-5 cpk">
                        <a href="javascript:void(0)" id="back1" class="btn btn-primary rounded-pill btn-login">
                        <i class="uil uil-arrow-left"></i>&nbsp;

	<span>Back</span>
</a>


                      <!-- /column -->
              
                        <a href="javascript:void(0)" id="continue2" class="btn btn-primary rounded-pill btn-login" value="Continue">

	<span>Continue</span>&nbsp;
  <i class="uil uil-arrow-right"></i>
</a>
                    
                      </div>
                      <!-- /column -->
                    </div>
                    <!-- /.row -->
                 

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

    <!--                           ===========================section3 ============================                                  -->
    <section class="wrapper bg-light"  id="section3">
      <div class="container pb-14 pb-md-16">
        <div class="row">
          <div class="col-lg-7 col-xl-6 col-xxl-9 mx-auto mt-n20">
            <div class="card shadow-lg">
              <div class="card-body p-11 text-center newcase">
                <h2 class="mb-3 text-center"></h2>
                <p class="lead mb-6 text-center">Please enter the following details so we can connect you with the right talents
</p>
              
            
            
               <div class="row">
                 <div class="col-xl-12">
                   <div class="row gy-3 gx-3">
                     <div class="col-md-6">
                       <div class="form-floating d2">
                       <input type="text" class="form-control ssform"  id="name" name="name"  placeholder="Name *" required>
                       <label for="form_name" class="error" id="name-err" style="margin-top: -6px;">Please enter your name</label>
                         <label for="name" class="form-label">Your Name *</label>
                       </div>
                     </div>
                     <div class="col-md-6">
                       <div class="form-floating d2">
                       <input type="text" class="form-control ssform"  id="email" name="email"  placeholder="email *" required>
                       <label for="form_email" class="error" id="mail-err" style="margin-top: -6px;">Please enter your email</label>
                       <label for="form_email" class="error" id="iemail" style="display:none;margin-top: -6px;">Invalid email address</label>

                         <label for="email" class="form-label">Email ID *</label>
                       </div>
                     </div>
                    
                     <div class="col-md-6">
                       <div class="form-floating d2">
                       <input type="text" class="form-control ssform" id="company" name="company" placeholder="Your company Name *">
                         <label for="company" class="form-label">Company Name.</label>
                       </div>
                     </div>
                     <div class="col-md-6">
                       <div class="form-floating d2">
                       <input id="phone" type="text" class="form-control ssform" name="phone"
                           >
                         <label for="phone" class="form-label">Phone No</label>
                       </div>
                     </div>
              
                     <div class="col-md-6">
                       <div class="form-floating d2">
                       <input type="text" class="form-control ssform" name="time"  id="time" placeholder="Convenient time for a meeting" >
                         <label for="time" class="form-label">Convenient time for a meeting</label>
                       </div>
                     </div>
              
                   
                    
                     <div class="col-md-6">
                     <div class="form-floating mb-4 d2">
                          <input id="countries"  type="text" class="form-control" placeholder="Select your country">
                          <label for="countries" id="countries1" class="form-label">Select your country </label>

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
<div class="col-12 text-center pt-5 cpk">
                        <a href="javascript:void(0)" id="back2" class="btn btn-primary rounded-pill btn-login">
                        <i class="uil uil-arrow-left"></i>&nbsp;

	<span>Back</span>
</a>


                      <!-- /column -->
              
                      <button class="btn btn-primary rounded-pill btn-login" id="submit1" type="submit">Submit</button>

                    
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


    @endsection
