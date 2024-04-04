@extends('layout.layoutnewheader')
@section('section')
<style>
   .col-xl-53 {
   flex: 0 0 auto;
   width: 70%;
   }
   .lgc{
   background-color: #f6f7f9 !important;
   }
   @media (min-width: 768px){
   .pb-md-20 {
   padding-bottom: 5rem !important;
   }
   .psb{
   padding-top: 1rem !important;
   }
   }
   @media (min-width: 1400px){
   .col-xxl-6 {
   width: 60%  !important;
   }
   }
   @media (min-width: 1200px){
   .col-xl-7 {
   width: 68.333333% !important;
   }
   }
   @media (min-width: 900px){
   .spx {
   margin-right: -13px !important;
   }
   }
   @media (max-width: 720px){
   .row-cols-2>* {
   flex: 0 0 auto;
   width: 50%;
   }
   .hed {
   color: #fff !important;
   background-color: #343f52  !important;
   border-color: #343f52  !important;
   }
   /* .pt-19 {
   padding-top: 13rem!important;
   } */
   .ccs{
   margin-top: -4rem;
   }
   #sect-bg{
   background-image:  url({{asset('assets/img/photos/RapidBrains-footerbg.webp')}});
   }
   #sect-bg1{
   display:none;
   }
   #sect-bg2{
   display:block;
   }
   .new-mar{
   margin-top:30px;
   }
   }
   @media (min-width: 992px){
   .px-lg-33 {
   padding-right: 0.1rem !important;
   padding-left: 0.1rem !important;
   }
   #sect-bg{
   background-image:  url({{asset('assets/img/photos/rapidbrains-cover.webp')}});
   }
   #sect-bg1{
   display:block;
   }
   #sect-bg2{
   display:none;
   }
   }
   @media (min-width: 720px){
   .cssk{
   width: 90% !important;
   }
   #sect-bg{
   background-image:  url({{asset('assets/img/photos/rapidbrains-cover.webp')}});
   }
   #sect-bg1{
   display:block;
   }
   #sect-bg2{
   display:none;
   }
   }
   .image-wrapper.bg-overlay-light-300:before {
   background: rgba(250, 255, 240, 0) !important;
   }
   .rotator-fade{
   color:#ff5f7a !important;
   }
</style>
<section>
   <section class="wrapper overflow-hidden image-wrapper mb-8" data-image-src="url({{asset('assets/img/photos/rapidbrains-cover.webp')}})" style="background-image: url({{asset('assets/img/photos/rapidbrains-cover.webp')}});padding-bottom: 90px">
      <div class="container pt-18 pt-md-18 position-relative new-mar">
         <div class="position-absolute" style="top: -15%; left: 50%; transform: translateX(-50%);" data-cue="fadeIn"></div>
         <div class="row position-relative">
            <!-- <div class="col-lg-8 col-xxl-7 mx-auto position-relative"> -->
            <h2 class="text-center mb-8 fs-50">Sitemap</h2>
            <!-- <div class="row"> -->
            <div class="col-md-4">
               <ul class="sitemap">
                  <li>
                     <a href="https://www.rapidbrains.com/about">About Company</a>
                     <ul>
                        <li><a href="#">Who we are</a></li>
                        <ul>
                           <li><a href="https://www.rapidbrains.com/about">About Us</a></li>
                           <li><a href="https://www.rapidbrains.com/ceo-message">CEO Message</a></li>
                           <li><a href="https://www.rapidbrains.com/leadership">Leadership</a></li>
                           <li><a href="https://www.rapidbrains.com/global-footprint">Location</a></li>
                           <li><a href="https://www.rapidbrains.com/contact">Contact</a></li>
                           <li><a href="https://www.rapidbrains.com/blog/">Blog</a></li>
                        </ul>
            </div>
            <div class="col-md-4">
            <br>
            <li><a href="#">How we work</a></li>
            <ul>
            <li><a href="https://www.rapidbrains.com/process">The Process</a></li>
            <li><a href="https://www.rapidbrains.com/benefits">Our Benefits</a></li>
            <li><a href="https://www.rapidbrains.com/global-approach">Global Approach</a></li>
            <li><a href="https://www.rapidbrains.com/capabilities">Capabilities</a></li>
            <li><a href="https://www.rapidbrains.com/jobs">Jobs at RapidBrains</a></li>
            </ul>
            </ul>
            </li>
            </div>
            <div class="col-md-4">
            <li><a href="https://talents.rapidbrains.com/">Talent Cloud</a>
            </li>
            </ul>
            </div>
         </div>
         <div class="row position-relative">
            <div class="col-md-4">
               <ul class="sitemap">
                  <li><a href="#">Hire Talents</a></li>
                  <ul>
                     <li><a href="#">Frontend Development</a></li>
                     <ul>
                        <li><a href="https://www.rapidbrains.com/hire-react-js-developers">React.js Developers </a></li>
                        <li><a href="https://www.rapidbrains.com/hire-angular-developers">Angular Developers</a></li>
                        <li><a href="https://www.rapidbrains.com/hire-vue.js-developers">Vue.js Developers</a></li>
                        <li><a href="https://www.rapidbrains.com/hire-react-native-developers"> React Native Developers</a></li>
                        <li><a href="https://www.rapidbrains.com/hire-remote-flutter-developers"> Flutter Developers</a></li>
                        <li><a href="https://www.rapidbrains.com/hire-ionic-developers">Ionic Developers</a></li>
                        <li><a href="https://www.rapidbrains.com/hire-front-end-developers">Front End Developers</a></li>
                        <li><a href="https://www.rapidbrains.com/hire-ui-ux-designers">UX/UI Designers</a></li>
                     </ul>
            </div>
            <div class="col-md-4">
            <br>
            <li><a href="#">Backend Development</a></li>
            <ul>
            <li><a href="https://www.rapidbrains.com/hire-node-js-developers">Node.js Developers</a></li>
            <li><a href="https://www.rapidbrains.com/hire-django-developers">Django Developers</a></li>
            <li><a href="https://www.rapidbrains.com/hire-flask-developers">Flask Developers</a></li>
            <li><a href="https://www.rapidbrains.com/hire-expressjs-developers">ExpressJS Developers</a></li>       
            <li><a href="https://www.rapidbrains.com/hire-ruby-on-rails-developers">Ruby on rails Developers</a></li>
            <li><a href="https://www.rapidbrains.com/hire-laravel-developers">Laravel Developers</a></li>
            <li><a href="https://www.rapidbrains.com/hire-asp-dot-net-developers">ASP.NET Developers</a></li>
            <li><a href="https://www.rapidbrains.com/hire-golang-developers">Golang Developers</a></li>
            <li><a href="https://www.rapidbrains.com/hire-java-developers">Java Developers</a></li>
            <li><a href="https://www.rapidbrains.com/hire-php-developers">PHP Developers</a></li>
            <li><a href="https://www.rapidbrains.com/hire-full-stack-developers">Full stack Developers</a></li>
            <li><a href="https://www.rapidbrains.com/hire-back-end-developers">Back End Developers</a></li>
            </ul>
            </div>
            <div class="col-md-4">
            <br>
            <li><a href="#">Mobile App Development</a></li>
            <ul>
            <li><a href="https://www.rapidbrains.com/hire-android-developers">Android Developers</a></li>
            <li><a href="https://www.rapidbrains.com/hire-ios-developers">IOS Developers</a></li>
            <li><a href="https://www.rapidbrains.com/hire-xamarin-developers">Xamarin Developers</a></li>
            <li><a href="https://www.rapidbrains.com/hire-kotlin-developers">Kotlin Developers</a></li>
            <li><a href="https://www.rapidbrains.com/hire-swift-developers">Swift Developers</a></li>
            <li><a href="https://www.rapidbrains.com/hire-mobile-developers">Mobile Developers</a></li>
            <li><a href="https://www.rapidbrains.com/hire-app-developers">App Developers</a></li>
            </ul>
            </div>
            <div class="col-md-4">
            <li><a href="#">E-commerce Development</a></li>
            <ul>
            <li><a href="https://www.rapidbrains.com/hire-shopify-developers"> Shopify Developers</a></li>
            <li><a href="https://www.rapidbrains.com/hire-remote-woocommerce-developers">WooCommerce Developer</a></li>
            <li><a href="https://www.rapidbrains.com/hire-magento-developers">Magento Developers</a></li>
            <li><a href="https://www.rapidbrains.com/hire-remote-bigcommerce-developers">BigCommerce Developer</a></li>
            <li><a href="https://www.rapidbrains.com/hire-prestashop-developers">PrestaShop Developers</a></li>
            </ul>
            </div>
            <div class="col-md-4">
            <li><a href="#">Database Development</a></li>
            <ul>
            <li><a href="https://www.rapidbrains.com/hire-mongodb-developers">MongoDB Developers</a></li>
            <li><a href="https://www.rapidbrains.com/hire-postgresql-developers">Postgresql Developers</a></li>
            <li><a href="https://www.rapidbrains.com/hire-elasticsearch-developers">Elasticsearch Developers</a></li>
            <li><a href="https://www.rapidbrains.com/hire-oracle-developers">Oracle Developers</a></li>
            <li><a href="https://www.rapidbrains.com/hire-redis-developers">Redis Developers</a></li>
            <li><a href="https://www.rapidbrains.com/hire-remote-snowflake-developers">Snowflake Developers</a></li>
            </ul>
            </div>
            <div class="col-md-4">
            <li><a href="#">Cloud and DevOps</a></li>
            <ul>
            <li><a href="https://www.rapidbrains.com/hire-devops-engineers">DevOps Engineers</a></li>
            <li><a href="https://www.rapidbrains.com/hire-aws-developers">AWS Developers</a></li>
            <li><a href="https://www.rapidbrains.com/hire-remote-kubernetes-developers">Kubernetes Developers</a></li>
            <li><a href="https://www.rapidbrains.com/hire-remote-docker-developers">Docker Developers</a></li>
            <li><a href="https://www.rapidbrains.com/hire-remote-cloud-engineers">Cloud Engineers</a></li>
            <li><a href="https://www.rapidbrains.com/hire-ci/cd-engineers">CI/CD Engineers</a></li>
            <li><a href="https://www.rapidbrains.com/hire-puppet-developers">Puppet Developer</a></li>
            </ul>
            </div>
            <div class="col-md-4">
            <li><a href="#">Data Science and Machine Learning</a></li>
            <ul>
            <li><a href="https://www.rapidbrains.com/hire-remote-data-engineers">Data Engineers</a></li>
            <li><a href="https://www.rapidbrains.com/hire-machine-learning-engineers">ML Engineers</a></li>
            <li><a href="https://www.rapidbrains.com/hire-tensorflow-developers">TensorFlow Developers</a></li>
            <li><a href="https://www.rapidbrains.com/hire-remote-pytorch-developers">PyTorch Developers</a></li>
            <li><a href="https://www.rapidbrains.com/hire-remote-scikit-learn-developers">Scikit-learn Developers</a></li>
            <li><a href="https://www.rapidbrains.com/hire-pandas-developers">Pandas Developer</a></li>
            </ul>
            </div>
            <div class="col-md-4">
            <li><a href="#">Quality Assurance and Testing</a></li>
            <ul>
            <li><a href="https://www.rapidbrains.com/hire-software-testers">Software Testers</a></li>
            <li><a href="https://www.rapidbrains.com/hire-automation-testers">Automation Testers</a></li>
            <li><a href="https://www.rapidbrains.com/hire-vapt-testers">VAPT Testers</a></li>
            </ul>
            </div>
            <div class="col-md-4">
            <li><a href="#">SEO and Marketing</a></li>
            <ul>
            <li><a href="https://www.rapidbrains.com/hire-seo-specialists">SEO Specialists</a></li>
            </ul>
            </div>
            <div class="col-md-4">
            <li><a href="#">Other Development</a></li>
            <ul>
            <li><a href="https://www.rapidbrains.com/hire-blockchain-developers">Blockchain Developers</a></li>
            <li><a href="https://www.rapidbrains.com/hire-remote-azure-ai-engineers">Azure AI Engineers</a></li>
            <li><a href="https://www.rapidbrains.com/hire-remote-artificial-intelligence-developers">AI Developers</a></li>
            <li><a href="https://www.rapidbrains.com/hire-unity-developers">Unity Developers</a></li>
            <li><a href="https://www.rapidbrains.com/hire-unreal-engine-developers">Unreal Engine Developers</a></li>
            </ul>
            </div>
            <div class="col-md-4">
            <li><a href="#">Miscellaneous</a></li>
            <ul>
            <li><a href="https://www.rapidbrains.com/hire-react-node-developers">React Node Developers</a></li>
            <li><a href="https://www.rapidbrains.com/hire-c-sharp-developers">Csharp Developers</a></li>
            <li><a href="https://www.rapidbrains.com/hire-typescript-developers">TypeScript Developers</a></li>
            <li><a href="https://www.rapidbrains.com/hire-rust-developers">Rust Developers</a></li>
            <li><a href="https://www.rapidbrains.com/hire-flask-developers">Flask Developers</a></li>
            <li><a href="https://www.rapidbrains.com/hire-swift-developers">Swift Developers</a></li>
            <li><a href="https://www.rapidbrains.com/hire-springboot-developers">Spring Boot Developers</a></li>
            <li><a href="https://www.rapidbrains.com/hire-kafka-developers">Kafka Developers</a></li>
            <li><a href="https://www.rapidbrains.com/hire-rabbitmq-developers">RabbitMQ Developers</a></li>
            <li><a href="https://www.rapidbrains.com/hire-firebase-developers">Firebase Developers</a></li>
            <li><a href="https://www.rapidbrains.com/hire-grafana-developers">Grafana Developers</a></li>
            <li><a href="https://www.rapidbrains.com/hire-zeplin-designer">Zeplin Designer</a></li>
            <li><a href="https://www.rapidbrains.com/hire-confluence-developers">Confluence Developers</a></li>
            <li><a href=" https://www.rapidbrains.com/hire-slack-developers">Slack Testers</a></li>
            <li><a href="https://www.rapidbrains.com/hire-tableau-developers">Tableau Developers</a></li>
            <li><a href="https://www.rapidbrains.com/hire-logstash-developers">Logstash Developers</a></li>
            <li><a href="https://www.rapidbrains.com/hire-prometheus-developers">Prometheus Developers</a></li>
            <li><a href="https://www.rapidbrains.com/hire-numpy-developers">NumPY Developers</a></li>
            </ul>
            </ul>
            </ul>
            </div>
            <div class="col-md-4">
            </div>
         </div>
      </div>
      <!-- /column -->
      </div>
      <!-- /.container -->
      </div>
      <!-- /.container -->
      </div>
      <!-- /.container -->
   </section>
   <!-- /section -->
</section>
<!--Save your time ends-->
@endsection