<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $data['title']= "Hire Remote Developers and Build Your Team Rapidly | RapidBrains";
		$data['keywords']= "remote team, remote work, remote talents, build remote team, hire remote talents, remote hiring, best remote talent";
		$data['description']= "A talent marketplace to rapidly build remote teams. From RapidBrains, companies can hire pre-screened remote engineers and developers with flexible engagements.";
        $data['canonical']= "https://www.rapidbrains.com";
        return view('welcome',compact('data'));
    }
    public function about() {
        $data['title']= "About us | RapidBrains";
		$data['keywords']= "remote team, remote hiring, talent marketplace, build remote team, top talents, remote talents ";
		$data['description']= "Learn about RapidBrains and how we can help your business efficiently build and manage your remote teams. We offer the easiest way to hire the best remote talent.";
        $data['canonical']= "https://www.rapidbrains.com/about";
        return view('about',compact('data'));
    }
    public function benefits() {
        $data['title']= "Benefits of Hiring From a Pool of Talents | RapidBrains";
		$data['keywords']= "remote talents, hiring process, benefits of remote hiring, remote hiring, talent pool, hire remote developers, talent marketplace, talent cloud";
		$data['description']= "Discover the benefits of hiring from a pool of remote talent with RapidBrains. We help companies connect with remote talent. Streamline your hiring process.";
        $data['canonical']= "https://www.rapidbrains.com/benefits";
        return view('benefits',compact('data'));
    }
    public function process() {
        $data['title']= "Hiring Remote Employees | Process | RapidBrains";
		$data['keywords']= "Remote employees, IT Job, remote team, remote developers, hiring process, hiring solution, talent cloud";
		$data['description']= "Learn about the process of hiring and managing remote employees with RapidBrains. Find the best remote IT jobs worldwide with our user-friendly platform.";
        $data['canonical']= "https://www.rapidbrains.com/process";
        return view('process',compact('data'));
    }
    public function contact() {
        $data['title']= "Contact us | RapidBrains";
		$data['keywords']= "remote team, remote talents, remote engineers, remote developers, remote work, hire remote talents, remote jobs, talent cloud";
		$data['description']= "Need Support? Get in touch with RapidBrains to learn more about how we can assist your business in building a dedicated remote team.";
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
