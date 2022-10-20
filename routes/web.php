<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EnquiryController;
use App\Http\Controllers\ResumeCollection;
use App\Http\Controllers\ContactController;

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
