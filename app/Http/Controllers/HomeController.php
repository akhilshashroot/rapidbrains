<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $data['title']= "RapidBrains - Build your remote team, rapidly";
		$data['keywords']= "remote engineers, remote developers, remote talents, hire contractors, talent marketplace, affordable, hire engineers, hire developers, hire talents, hire contractors, fulltime employees, partime employees";
		$data['description']= "A talent marketplace to build remote teams, rapidly. From RapidBrains, companies can hire pre-screened contract remote engineers and developers with flexible engagements from hourly to full-time.";
        $data['canonical']= "https://www.rapidbrains.com";
        return view('welcome',compact('data'));
    }
    public function about() {
        $data['title']= "RapidBrains - Build your remote team, rapidly";
		$data['keywords']= "remote engineers, remote developers, remote talents, hire contractors, talent marketplace, affordable, hire engineers, hire developers, hire talents, hire contractors, fulltime employees, partime employees";
		$data['description']= "A talent marketplace to build remote teams, rapidly. From RapidBrains, companies can hire pre-screened contract remote engineers and developers with flexible engagements from hourly to full-time.";
        $data['canonical']= "https://www.rapidbrains.com/about";
        return view('about',compact('data'));
    }
    public function benefits() {
        $data['title']= "RapidBrains - Build your remote team, rapidly";
		$data['keywords']= "remote engineers, remote developers, remote talents, hire contractors, talent marketplace, affordable, hire engineers, hire developers, hire talents, hire contractors, fulltime employees, partime employees";
		$data['description']= "A talent marketplace to build remote teams, rapidly. From RapidBrains, companies can hire pre-screened contract remote engineers and developers with flexible engagements from hourly to full-time.";
        $data['canonical']= "https://www.rapidbrains.com/benefits";
        return view('benefits',compact('data'));
    }
    public function process() {
        $data['title']= "RapidBrains - Build your remote team, rapidly";
		$data['keywords']= "remote engineers, remote developers, remote talents, hire contractors, talent marketplace, affordable, hire engineers, hire developers, hire talents, hire contractors, fulltime employees, partime employees";
		$data['description']= "A talent marketplace to build remote teams, rapidly. From RapidBrains, companies can hire pre-screened contract remote engineers and developers with flexible engagements from hourly to full-time.";
        $data['canonical']= "https://www.rapidbrains.com/process";
        return view('process',compact('data'));
    }
    public function contact() {
        $data['title']= "RapidBrains - Build your remote team, rapidly";
		$data['keywords']= "remote engineers, remote developers, remote talents, hire contractors, talent marketplace, affordable, hire engineers, hire developers, hire talents, hire contractors, fulltime employees, partime employees";
		$data['description']= "A talent marketplace to build remote teams, rapidly. From RapidBrains, companies can hire pre-screened contract remote engineers and developers with flexible engagements from hourly to full-time.";
        $data['canonical']= "https://www.rapidbrains.com/contact";
        return view('contact',compact('data'));
    }
    public function policies() {
        $data['title']= "RapidBrains - Build your remote team, rapidly";
		$data['keywords']= "remote engineers, remote developers, remote talents, hire contractors, talent marketplace, affordable, hire engineers, hire developers, hire talents, hire contractors, fulltime employees, partime employees";
		$data['description']= "A talent marketplace to build remote teams, rapidly. From RapidBrains, companies can hire pre-screened contract remote engineers and developers with flexible engagements from hourly to full-time.";
        $data['canonical']= "https://www.rapidbrains.com/policies";
        return view('policies',compact('data'));
    }
    public function nonDisclosureAgreement() {
        $data['title']= "RapidBrains - Build your remote team, rapidly";
		$data['keywords']= "remote engineers, remote developers, remote talents, hire contractors, talent marketplace, affordable, hire engineers, hire developers, hire talents, hire contractors, fulltime employees, partime employees";
		$data['description']= "A talent marketplace to build remote teams, rapidly. From RapidBrains, companies can hire pre-screened contract remote engineers and developers with flexible engagements from hourly to full-time.";
        $data['canonical']= "https://www.rapidbrains.com/non-disclosure-agreement";
        return view('non-disclosure-agreement',compact('data'));
    }
    public function acceptableUserPolicy() {
        $data['title']= "RapidBrains - Build your remote team, rapidly";
		$data['keywords']= "remote engineers, remote developers, remote talents, hire contractors, talent marketplace, affordable, hire engineers, hire developers, hire talents, hire contractors, fulltime employees, partime employees";
		$data['description']= "A talent marketplace to build remote teams, rapidly. From RapidBrains, companies can hire pre-screened contract remote engineers and developers with flexible engagements from hourly to full-time.";
        $data['canonical']= "https://www.rapidbrains.com/acceptable-user-policy";
        return view('acceptable-user-policy',compact('data'));
    }
    public function informationAuditDocument() {
        $data['title']= "RapidBrains - Build your remote team, rapidly";
		$data['keywords']= "remote engineers, remote developers, remote talents, hire contractors, talent marketplace, affordable, hire engineers, hire developers, hire talents, hire contractors, fulltime employees, partime employees";
		$data['description']= "A talent marketplace to build remote teams, rapidly. From RapidBrains, companies can hire pre-screened contract remote engineers and developers with flexible engagements from hourly to full-time.";
        $data['canonical']= "https://www.rapidbrains.com/information-audit-document";
        return view('information-audit-document',compact('data'));
    }
    public function dataProcessingAgreement() {
        $data['title']= "RapidBrains - Build your remote team, rapidly";
		$data['keywords']= "remote engineers, remote developers, remote talents, hire contractors, talent marketplace, affordable, hire engineers, hire developers, hire talents, hire contractors, fulltime employees, partime employees";
		$data['description']= "A talent marketplace to build remote teams, rapidly. From RapidBrains, companies can hire pre-screened contract remote engineers and developers with flexible engagements from hourly to full-time.";
        $data['canonical']= "https://www.rapidbrains.com/data-processing-agreement";
        return view('data-processing-agreement',compact('data'));
    }
    public function join() {
        return view('join');
    }
}
