<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EnquiryController;
use App\Http\Controllers\ResumeCollection;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdditionalPagesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('welcome');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/benefits', [HomeController::class, 'benefits'])->name('benefits');
Route::get('/process', [HomeController::class, 'process'])->name('process');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/policies', [HomeController::class, 'policies'])->name('policies');
Route::get('/non-disclosure-agreement', [HomeController::class, 'nonDisclosureAgreement'])->name('non-disclosure-agreement');
Route::get('/acceptable-user-policy', [HomeController::class, 'acceptableUserPolicy'])->name('acceptable-user-policy');
Route::get('/information-audit-document', [HomeController::class, 'informationAuditDocument'])->name('information-audit-document');
Route::get('/data-processing-agreement', [HomeController::class, 'dataProcessingAgreement'])->name('data-processing-agreement');
Route::post('/enquire/mail', [EnquiryController::class, 'MailFunction'])->name('enquire');
Route::get('/join', [HomeController::class, 'join'])->name('join');
Route::post('join-rapidbrains', [ResumeCollection::class, 'store'])->name('rapidbrains.store');
Route::post('contact-form', [ContactController::class, 'MailFunction'])->name('contact-form');
Route::post('hire-form', [ContactController::class, 'hireFunction'])->name('hireFunction');


//new updates
Route::get('/hire-android-developers', [AdditionalPagesController::class, 'hireAndroiDevelopers'])->name('hire-android-developers');
Route::get('/hire-angular-developers', [AdditionalPagesController::class, 'hireAngularDevelopers'])->name('hire-angular-developers');
Route::get('/hire-asp-dot-net-developers', [AdditionalPagesController::class, 'hireAspDevelopers'])->name('hire-asp-dot-net-developers');
Route::get('/hire-aws-developers', [AdditionalPagesController::class, 'hireAwsDevelopers'])->name('hire-aws-developers');
Route::get('/hire-blockchain-developers', [AdditionalPagesController::class, 'hireBlockchainDevelopers'])->name('hire-blockchain-developers');
Route::get('/hire-c-sharp-developers', [AdditionalPagesController::class, 'hireCsharpDevelopers'])->name('hire-c-sharp-developers');
Route::get('/hire-devops-engineers', [AdditionalPagesController::class, 'hireDevopsDevelopers'])->name('hire-devops-developers');
Route::get('/hire-django-developers', [AdditionalPagesController::class, 'hireDjangoDevelopers'])->name('hire-django-developers');
Route::get('/hire-drupal-developers', [AdditionalPagesController::class, 'hireDrupalDevelopers'])->name('hire-drupal-developers');
Route::get('/hire-remote-flutter-developers', [AdditionalPagesController::class, 'hireFlutterDevelopers'])->name('hire-remote-flutter-developers');
Route::get('/hire-full-stack-developers', [AdditionalPagesController::class, 'hireFullStackDevelopers'])->name('hire-full-stack-developers');
Route::get('/hire-golang-developers', [AdditionalPagesController::class, 'hireGolangDevelopers'])->name('hire-golang-developers');
Route::get('/hire-ionic-developers', [AdditionalPagesController::class, 'hireIonicDevelopers'])->name('hire-ionic-developers');
Route::get('/hire-ios-developers', [AdditionalPagesController::class, 'hireIosDevelopers'])->name('hire-ios-developers');


Route::get('/hire-java-developers', [AdditionalPagesController::class, 'hireJavaDevelopers'])->name('hire-java-developers');
Route::get('/hire-javascript-developers', [AdditionalPagesController::class, 'hireJsDevelopers'])->name('hire-javascript-developers');
Route::get('/hire-kotlin-developers', [AdditionalPagesController::class, 'hireKotlinDevelopers'])->name('hire-kotlin-developers');
Route::get('/hire-laravel-developers', [AdditionalPagesController::class, 'hireLaravelDevelopers'])->name('hire-laravel-developers');
Route::get('/hire-machine-learning-engineers', [AdditionalPagesController::class, 'hireMLDevelopers'])->name('hire-machine-learning-engineers');
Route::get('/hire-magento-developers', [AdditionalPagesController::class, 'hireMagentoDevelopers'])->name('hire-magento-developers');
Route::get('/hire-mean-stack-developers', [AdditionalPagesController::class, 'hireMeanDevelopers'])->name('hire-mean-stack-developers');
Route::get('/hire-mern-stack-developers', [AdditionalPagesController::class, 'hireMernDevelopers'])->name('hire-mern-stack-developers');
Route::get('/hire-node-js-developers', [AdditionalPagesController::class, 'hireNodejsDevelopers'])->name('hire-node-js-developers');
Route::get('/hire-php-developers', [AdditionalPagesController::class, 'hirePhpDevelopers'])->name('hire-php-developers');
Route::get('/hire-react-js-developers', [AdditionalPagesController::class, 'hireReactDevelopers'])->name('hire-react-js-developers');
Route::get('/hire-react-native-developers', [AdditionalPagesController::class, 'hireNativeDevelopers'])->name('hire-react-native-developers');


Route::get('/hire-python-developers', [AdditionalPagesController::class, 'hirePythonDevelopers'])->name('hire-python-developers');
Route::get('/hire-postgresql-developers', [AdditionalPagesController::class, 'hirePostgresqlDevelopers'])->name('hire-postgresql-developers');
Route::get('/hire-ruby-on-rails-developers', [AdditionalPagesController::class, 'hireRubyDevelopers'])->name('hire-ruby-on-rails-developers');
Route::get('/hire-ui-ux-designers', [AdditionalPagesController::class, 'hireUiUxDevelopers'])->name('hire-ui-ux-designers');
Route::get('/hire-shopify-developers', [AdditionalPagesController::class, 'hireShopifyDevelopers'])->name('hire-shopify-developers');
Route::get('/hire-seo-specialists', [AdditionalPagesController::class, 'hireSeoDevelopers'])->name('hire-seo-specialists');
Route::get('/hire-back-end-developers', [AdditionalPagesController::class, 'hireBEDevelopers'])->name('hire-back-end-developers');
Route::get('/hire-front-end-developers', [AdditionalPagesController::class, 'hireFEDevelopers'])->name('hire-front-end-developers');
Route::get('/hire-mobile-developers', [AdditionalPagesController::class, 'hireMobileDevelopers'])->name('hire-mobile-developers');
Route::get('/hire-wordpress-developers', [AdditionalPagesController::class, 'hireWordpressDevelopers'])->name('hire-wordpress-developers');
Route::get('/hire-xamarin-developers', [AdditionalPagesController::class, 'hireXamarinDevelopers'])->name('hire-xamarin-developers');
Route::get('/hire-react-node-developers', [AdditionalPagesController::class, 'hireReactnodeDevelopers'])->name('hire-react-node-developers');
Route::get('/hire-app-developers', [AdditionalPagesController::class, 'hireAppDevelopers'])->name('hire-app-developers');
Route::get('/hire-sap-developers', [AdditionalPagesController::class, 'hireSapDevelopers'])->name('hire-sap-developers');
Route::get('/hire-salesforce-developers', [AdditionalPagesController::class, 'hireSalesforceDevelopers'])->name('hire-salesforce-developers');



Route::get('/hire-talents', [AdditionalPagesController::class, 'hireTalents'])->name('hire-app-deelopers');
Route::get('/rates-usd', [App\Http\Controllers\CustomSearchController::class, 'index'])->name('customsearch.index');


Route::get('/test-page', [HomeController::class, 'testPage'])->name('test-page');
Route::get('/test-page2', [HomeController::class, 'test2'])->name('test-page2');
Route::get('/alpha-lp', [HomeController::class, 'AlphaLp'])->name('AlphaLp');
Route::get('/beta-lp', [HomeController::class, 'BetaLp'])->name('BetaLp');
Route::get('/leadership', [HomeController::class, 'leaderShip'])->name('leaderShip');
Route::get('/ceo-message', [HomeController::class, 'ceoMessage'])->name('ceoMessage');
Route::get('/global-footprint', [HomeController::class, 'globalFootprint'])->name('globalFootprint');
Route::get('/thank-you', [HomeController::class, 'thankYou'])->name('thankYou');
Route::get('/capabilities', [HomeController::class, 'capAbilities'])->name('capAbilities');