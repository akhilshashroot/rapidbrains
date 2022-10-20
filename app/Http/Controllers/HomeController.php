<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return view('welcome');
    }
    public function about() {
        return view('about');
    }
    public function benefits() {
        return view('benefits');
    }
    public function process() {
        return view('process');
    }
    public function contact() {
        return view('contact');
    }
    public function policies() {
        return view('policies');
    }
    public function nonDisclosureAgreement() {
        return view('non-disclosure-agreement');
    }
    public function acceptableUserPolicy() {
        return view('acceptable-user-policy');
    }
    public function informationAuditDocument() {
        return view('information-audit-document');
    }
    public function dataProcessingAgreement() {
        return view('data-processing-agreement');
    }
    public function join() {
        return view('join');
    }
}
