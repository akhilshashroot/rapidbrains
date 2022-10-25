<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $data['title']= "RapidBrains - Build your remote team, rapidly";
		$data['keywords']= "remote engineers, remote developers, remote talents, hire contractors, talent marketplace, affordable, hire engineers, hire developers, hire talents, hire contractors, fulltime employees, partime employees";
		$data['description']= "A talent marketplace to build remote teams, rapidly. From RapidBrains, companies can hire pre-screened contract remote engineers and developers with flexible engagements from hourly to full-time.";
        return view('welcome',compact('data'));
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
