<header class="position-absolute w-100">
  <div class="gradient-5 text-white fw-bold fs-15 mb-2 position-relative" style="z-index: 1;">
    <div class="container py-2 text-center">
      <p class="mb-0" id="sect-bg1">Hire the best brains in every technology. Take a look at our <a href="{{route('customsearch.index')}}" class="link-white hover d-inline-flex align-items-center" style="color: #fff;">rates <i class="uil uil-arrow-right fs-16"></i></a></p>
              <p class="mb-0" id="sect-bg2">Take a look at our <a href="{{route('customsearch.index')}}" class="link-white hover d-inline-flex align-items-center" style="color: #fff;">rates <i class="uil uil-arrow-right fs-16"></i></a></p>

    </div>
    <!-- /.container -->
  </div>
  <nav class="navbar navbar-expand-lg center-nav transparent navbar-light">
    <div class="container flex-lg-row flex-nowrap align-items-center">
      <div class="navbar-brand w-100">
      <a href="/">
      <img src="{{asset('assets/img/RapidBrains-logo.svg')}}" srcset="{{asset('assets/img/RapidBrains-logo')}}@2x.svg 2x" alt="RapidBrains Logo"  width="200" height="39" class="img-logo"/>
        </a>
      </div>
      <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
        <div class="offcanvas-header d-lg-none">
        <h3 class="text-white fs-30 mb-0">RapidBrains</h3>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body ms-lg-auto d-flex flex-column h-100">
        <ul class="navbar-nav">
           
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" style='color: #343f52;'>Hire Talents</a>

              <ul class="dropdown-menu rgt">
                <li class="dropdown dropdown-submenu dropend"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">Front End Developers</a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{route('hire-angular-developers')}}">Angular Developers</a></li>
                    <li><a class="dropdown-item" href="{{route('hire-front-end-developers')}}">Front End Developers</a></li>
                    <li><a class="dropdown-item"  href="{{route('hire-react-js-developers')}}">React.js Developers </a></li>
                    <li><a class="dropdown-item" href="{{route('hire-tailwind-css-developers')}}">Tailwind CSS Developers</a></li>
                    <li><a class="dropdown-item" href="{{route('hire-ui-ux-designers')}}">UX/UI Designers</a></li>
                    <li><a class="dropdown-item" href="{{route('hire-vue-js-developers')}}">Vue.js Developers</a></li>
                  </ul>
                </li>
                <li class="dropdown dropdown-submenu dropend"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">Back End Developers</a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{route('hire-asp-dot-net-developers')}}">ASP.NET Developers</a></li>
                    <li><a class="dropdown-item" href="{{route('hire-c-sharp-developers')}}">Csharp Developers</a></li>
                    <li><a class="dropdown-item" href="{{route('hire-codeigniter-developers')}}">CodeIgniter Developers</a></li>
                    <li><a class="dropdown-item" href="{{route('hire-django-developers')}}">Django Developers</a></li>
                    <li><a class="dropdown-item" href="{{route('hire-expressjs-developers')}}">ExpressJS Developers</a></li>
                    <li><a class="dropdown-item" href="{{route('hire-flask-developers')}}">Flask Developers</a></li>
                    <li><a class="dropdown-item" href="{{route('hire-golang-developers')}}">Golang Developers</a></li>
                    <li><a class="dropdown-item" href="{{route('hire-java-developers')}}">Java Developers</a></li>
                    <li><a class="dropdown-item" href="{{route('hire-laravel-developers')}}">Laravel Developers</a></li>
                    <li><a class="dropdown-item" href="{{route('hire-node-js-developers')}}">Node.js Developers</a></li>
                    <li><a class="dropdown-item" href="{{route('hire-php-developers')}}">PHP Developers</a></li>
                    <li><a class="dropdown-item" href="{{route('hire-python-developers')}}">Python Developers</a></li>
                    <li><a class="dropdown-item" href="{{route('hire-ruby-on-rails-developers')}}">Ruby on Rails Developers</a></li>
                    <li><a class="dropdown-item" href="{{route('hire-springboot-developers')}}">Spring Boot Developers</a></li>

                  </ul>
                </li>
                <li class="dropdown dropdown-submenu dropend"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown" >Mobile App Developers  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{route('hire-android-developers')}}">Android Developer</a></li>
                    <li><a class="dropdown-item" href="{{route('hire-remote-flutter-developers')}}"> Flutter Developers</a></li>
                    <li><a class="dropdown-item" href="{{route('hire-ios-developers')}}">IOS Developers</a></li>
                    <li><a class="dropdown-item" href="{{route('hire-kotlin-developers')}}">Kotlin Developers</a></li>
                    <li><a class="dropdown-item" href="{{route('hire-react-native-developers')}}">React Native Developers</a></li>
                    <li><a class="dropdown-item" href="{{route('hire-swift-developers')}}">Swift Developers</a></li>
                    <li><a class="dropdown-item" href="{{route('hire-xamarin-developers')}}">Xamarin Developers</a></li>
                     
                  </ul>
                </li>


{{-- 
  
               <li><a class="dropdown-item" href="{{route('hire-ionic-developers')}}">Ionic Developers</a></li>
                <li><a class="dropdown-item" href="{{route('hire-mobile-developers')}}">Mobile Developers</a></li>

                <li><a class="dropdown-item" href="{{route('hire-mean-stack-developers')}}">MEAN Stack Developers</a></li>                     
                <li><a class="dropdown-item" href="{{route('hire-full-stack-developers')}}">Full stack Developers</a></li>
                <li><a class="dropdown-item" href="{{route('hire-mern-stack-developers')}}">MERN Developers</a></li>
                <li><a class="dropdown-item" href="{{route('hire-react-node-developers')}}">React Node Developers</a></li>
                <li><a class="dropdown-item" href="{{route('hire-typescript-developers')}}">TypeScript Developers</a></li>
                <li><a class="dropdown-item" href="{{route('hire-back-end-developers')}}">Back End Developers</a></li>
                <li><a class="dropdown-item" href="{{route('hire-rust-developers')}}">Rust Developers</a></li>
                <li><a class="dropdown-item" href="{{route('hire-slack-developers')}}">Slack Developers</a></li>
                
                <li><a class="dropdown-item" href="{{route('hire-app-developers')}}">App Developers</a></li>
            
                <li><a class="dropdown-item" href="{{route('hire-javascript-developers')}}">Javascript Developers</a></li>

                <li><a class="dropdown-item" href="{{route('hire-meteor-developers')}}">Meteor Developers</a></li> 
                
                --}}









               
             
                <li class="dropdown dropdown-submenu dropend"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">DevOps and Cloud Engineers </a>
                  <ul class="dropdown-menu">
                   
                    <li><a class="dropdown-item" href="{{route('hire-aws-developers')}}">AWS Developers</a></li>
                    <li><a class="dropdown-item" href="{{route('hire-ci-cd-engineers')}}">CI/CD Engineers</a></li>
                    <li><a class="dropdown-item" href="{{route('hire-devops-developers')}}">DevOps Engineers</a></li>
                    <li><a class="dropdown-item" href="{{route('hire-docker-developers')}}">Docker Developers</a></li>
                    <li><a class="dropdown-item" href="{{route('hire-firebase-developers')}}">Firebase Developers</a></li>
                    <li><a class="dropdown-item" href="{{route('hire-kubernetes-developers')}}">Kubernetes Developers</a></li>
                   
                  </ul>
                </li>
                <li class="dropdown dropdown-submenu dropend"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">Database Developers </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{route('hire-elasticsearch-developers')}}">Elasticsearch Developers</a></li>
                    <li><a class="dropdown-item" href="{{route('hire-kafka-developers')}}">Kafka Developers</a></li>
                    <li><a class="dropdown-item" href="{{route('hire-logstash-developers')}}">Logstash Developers</a></li>
                    <li><a class="dropdown-item" href="{{route('hire-mongodb-developers')}}">MongoDB Developers</a></li>
                    <li><a class="dropdown-item" href="{{route('hire-oracle-developers')}}">Oracle Developers</a></li>
                    <li><a class="dropdown-item" href="{{route('hire-pandas-developers')}}">Pandas Developer</a></li>
                    <li><a class="dropdown-item" href="{{route('hire-postgresql-developers')}}">Postgresql Developers</a></li>
                    <li><a class="dropdown-item" href="{{route('hire-prometheus-developers')}}">Prometheus Developers</a></li>
                    <li><a class="dropdown-item" href="{{route('hire-rabbitmq-developers')}}">RabbitMQ Developers</a></li>
                    <li><a class="dropdown-item" href="{{route('hire-redis-developers')}}">Redis Developers</a></li>
                    <li><a class="dropdown-item" href="{{route('hire-snowflake-developers')}}">Snowflake Developers</a></li>
                   
                 
                  </ul>
                </li>
                <li class="dropdown dropdown-submenu dropend"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">Artificial Intelligence </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{route('hire-ai-developers')}}">AI Developers</a></li> 
                    <li><a class="dropdown-item" href="{{route('hire-data-engineers')}}">Data Scientists</a></li>
                    <li><a class="dropdown-item" href="{{route('hire-keras-developers')}}">Keras Developers</a></li>
                    <li><a class="dropdown-item" href="{{route('hire-machine-learning-engineers')}}">ML Engineers</a></li> 
                    <li><a class="dropdown-item" href="{{route('hire-pytorch-developers')}}">PyTorch Developers</a></li>
                    <li><a class="dropdown-item" href="{{route('hire-tensorflow-developers')}}">TensorFlow Developers</a></li>
                  </ul>
                </li>
                <li class="dropdown dropdown-submenu dropend"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">Specialized</a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{route('hire-automation-testers')}}">Automation Testers</a></li>
                    <li><a class="dropdown-item" href="{{route('hire-bigcommerce-developers')}}">BigCommerce Developer</a></li>
                    <li><a class="dropdown-item" href="{{route('hire-blockchain-developers')}}">Blockchain Developers</a></li>
                    <li><a class="dropdown-item" href="{{route('hire-confluence-developers')}}">Confluence Developers</a></li>
                    <li><a class="dropdown-item" href="{{route('hire-drupal-developers')}}">Drupal Developers</a></li>
                    <li><a class="dropdown-item" href="{{route('hire-grafana-developers')}}">Grafana Developers</a></li>
                    <li><a class="dropdown-item" href="{{route('hire-magento-developers')}}">Magento Developers</a></li>
                    <li><a class="dropdown-item" href="{{route('hire-prestashop-developers')}}">PrestaShop Developers</a></li>  
                    <li><a class="dropdown-item" href="{{route('hire-salesforce-developers')}}">Salesforce Developers</a></li>
                    <li><a class="dropdown-item" href="{{route('hire-shopify-developers')}}"> Shopify Developers</a></li>
                    <li><a class="dropdown-item" href="{{route('hire-seo-specialists')}}">SEO Specialists</a></li>
                    <li><a class="dropdown-item" href="{{route('hire-software-testers')}}">Software Testers</a></li>
                    <li><a class="dropdown-item" href="{{route('hire-sap-developers')}}">SAP Developers</a></li>
                    <li><a class="dropdown-item" href="{{route('hire-tableau-developers')}}">Tableau Developers</a></li>
                    <li><a class="dropdown-item" href="{{route('hire-unreal-engine-developers')}}">Unreal Engine Developers</a></li>
                    <li><a class="dropdown-item" href="{{route('hire-unity-developers')}}">Unity Developers</a></li>
                    <li><a class="dropdown-item" href="{{route('hire-vapt-testers')}}">VAPT Testers</a></li>
                    <li><a class="dropdown-item" href="{{route('hire-woocommerce-developers')}}">WooCommerce Developer</a></li>
                    <li><a class="dropdown-item" href="{{route('hire-wordpress-developers')}}"> WordPress Developers</a></li>
                    <li><a class="dropdown-item" href="{{route('hire-zeplin-designer')}}">Zeplin Designer</a></li>
                  </ul>
                </li>
                 </ul>
            </li>
            <!-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" style='color: #343f52;'>About Company</a>
                <ul class="dropdown-menu">
                <li class="nav-item"><a class="dropdown-item" href="{{route('about')}}"  >About RapidBrains</a></li>
                  <li class="nav-item"><a class="dropdown-item"  href="{{route('benefits')}}">Our Benefits</a></li>
                  <li class="nav-item"><a class="dropdown-item" href="{{route('process')}}">The Process</a></li>

                </ul>
              </li> -->


              <!-- <li class="nav-item ">
                <a class="nav-link" href="{{route('customsearch.index')}}" style='color: #343f52;'>Rate Card</a>
              </li> -->
                <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="true"  style='color: #343f52;'>About Company</a>
              <div class="dropdown-menu dropdown-lg" data-bs-popper="static">
                <div class="dropdown-lg-content">
                  <div>
                    <h6 class="dropdown-header"  style="padding-left: 25px;font-size: 0.65rem;"> Who we are</h6>
                    <ul class="list-unstyled">
                      <li><a class="dropdown-item" href="{{route('about')}}">About Us</a></li>
                      <li><a class="dropdown-item" href="{{route('ceoMessage')}}">CEO Message</a></li>
                      <li><a class="dropdown-item" href="{{route('leaderShip')}}">Leadership</a></li>
                      <li><a class="dropdown-item" href="{{route('globalFootprint')}}">Locations</a></li>
                      <li><a class="dropdown-item" href="{{route('contact')}}">Contact</a></li>
                      <!-- <li><a class="dropdown-item" href="https://articles.rapidbrains.com/">Articles </a></li> -->
                    </ul>
                  </div>
                  <!-- /.column -->
                  <div >
                    <h6 class="dropdown-header"  style="padding-left: 25px;font-size: 0.65rem;">How we work</h6>
                    <ul class="list-unstyled">
                      <li><a class="dropdown-item" href="{{route('process')}}">The Process</a></li>
                      <li><a class="dropdown-item"  href="{{route('benefits')}}">Our Benefits</a></li>
                      <li><a class="dropdown-item"  href="{{route('globalApproach')}}">Global Approach</a></li>
                      <li><a class="dropdown-item"  href="{{route('capAbilities')}}">Capabilities</a></li>

                      <li><a class="dropdown-item" href="https://jobs.rapidbrains.com/">Jobs at RapidBrains</a></li>
                      <!-- <li><a class="dropdown-item" href="../../single-project4.html">Single Project IV</a></li> -->
                    </ul>
                  </div>
                  <!-- /.column -->
                </div>
                <!-- /auto-column -->
              </div>
            </li>
              <li class="nav-item ">
                <a class="nav-link" href="https://talents.rapidbrains.com/" style='color: #343f52;'>Talent Cloud</a>
              </li>
            </ul>
            <!-- /.navbar-nav -->
            <div class="offcanvas-footer d-lg-none">
              <div>

                <a href="mailto:contact@rapidbrains.com" class="link-inverse">contact@rapidbrains.com</a>
                <br /> +91 97784 26317 <br />


                <nav class="nav social social-white mt-4">
                <a href="https://www.linkedin.com/company/rapidbrains"><i class="uil uil-linkedin"></i></a>
                <a href="https://www.facebook.com/rapidbrains"><i class="uil uil-facebook-f"></i></a>
                <a href="https://www.instagram.com/_rapidbrains/"><i class="uil uil-instagram"></i></a>
                <a href="https://twitter.com/rapidbrains"><i class="uil uil-twitter"></i></a>
                <!--  <a href="#"><i class="uil uil-youtube"></i></a>-->
                <!--</nav>-->
                <!-- /.social -->
              </div>
            </div>
            <!-- /.offcanvas-footer -->
          </div>
          <!-- /.offcanvas-body -->
        </div>
        <!-- /.navbar-collapse -->
        <div class="navbar-other w-100 d-flex ms-auto">
          <ul class="navbar-nav flex-row align-items-center ms-auto">


              <nav class="nav-item justify-content-end text-end">
                 <a class="btn btn-primary btn-sm rounded-pill"  href="{{route('enquiry.page')}}" style="color:#fff;">Enquire</a>
                <!--<a href="#"><i class="uil uil-twitter"></i></a>-->
                <!--<a href="#"><i class="uil uil-facebook-f"></i></a>-->
                <!--<a href="#"><i class="uil uil-dribbble"></i></a>-->
                <!--<a href="#"><i class="uil uil-instagram"></i></a>-->
              </nav>
              <!-- /.social -->

            <li class="nav-item d-lg-none">
              <button class="hamburger offcanvas-nav-btn" aria-label="hamburger"><span></span></button>
            </li>
          </ul>
          <!-- /.navbar-nav -->
        </div>
        <!-- /.navbar-other -->
      </div>
      <!-- /.navbar-collapse-wrapper -->
    </div>
    <!-- /.container -->
  </nav>
  <!-- /.navbar -->




  </header>
