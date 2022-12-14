<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $data['title']= "RapidBrains - Hire Remote Developers and Build your Remote Team";
		$data['keywords']= "remote team, remote work, remote talents, build remote team, hire remote talents, remote hiring, best remote talent";
		$data['description']= "A talent marketplace to rapidly build remote teams. From RapidBrains, companies can hire pre-screened remote engineers and developers with flexible engagements.";
        $data['canonical']= "https://www.rapidbrains.com";
        return view('welcome',compact('data'));
    }
    public function about() {
        $data['title']= "About RapidBrains | Build Your Remote Team Rapidly";
		$data['keywords']= "talent marketplace, build remote team, top talents, best remote talent, remote hiring";
		$data['description']= "RapidBrains offers the simplest way to hire the best remote talent around the world, thereby making remote hiring easy and economical for both companies and talents.";
        $data['canonical']= "https://www.rapidbrains.com/about";
        return view('about',compact('data'));
    }
    public function benefits() {
        $data['title']= "RapidBrains - Benefits | Hire the World’s Best Brains";
		$data['keywords']= "Remote hiring, talent marketplace, build remote team, hire remote developers, best remote talent, Hire remote talents";
		$data['description']= "RapidBrains enables companies to hire remote developers from a talent pool and helps them choose the best remote talent with the required skill set.";
        $data['canonical']= "https://www.rapidbrains.com/benefits";
        return view('benefits',compact('data'));
    }
    public function process() {
        $data['title']= "RapidBrains Screening Process | How to Hire Remote Developers";
		$data['keywords']= "build remote team, best remote talent, remote engineers, remote developers, remote talents";
		$data['description']= "With RapidBrains, hire remote software developers within 24 hours. RapidBrains conducts thorough interviews and tests to carefully study each employee's experience.";
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
