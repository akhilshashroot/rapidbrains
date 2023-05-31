<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $data['title']= "Hire Best Remote Software Developers | RapidBrains";
		$data['keywords']= "remote team, remote work, remote talents, build remote team, hire remote talents, remote hiring, best remote talent";
		$data['description']= "Hire best remote software developers from RapidBrains, A talent marketplace to rapidly build remote teams. Contact us to hire remote developers.";
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
        $data['title']= "Privacy Policy | Rapid Brains: Your Data Protection Guaranteed";
		$data['keywords']= "remote engineers, remote developers, remote talents, hire contractors, talent marketplace, affordable, hire engineers, hire developers, hire talents, hire contractors, fulltime employees, partime employees";
		$data['description']= "Protecting your privacy is our top priority. Learn about our policies for data protection, information usage, and user rights at RapidBrains.";
        $data['canonical']= "https://www.rapidbrains.com/policies";
        return view('policies',compact('data'));
    }
    public function nonDisclosureAgreement() {
        $data['title']= "RapidBrains NDA: Safeguard Secrets & Innovations";
		$data['keywords']= "remote engineers, remote developers, remote talents, hire contractors, talent marketplace, affordable, hire engineers, hire developers, hire talents, hire contractors, fulltime employees, partime employees";
		$data['description']= "Protect sensitive information with our Non Disclosure Agreement. Learn about our policies for confidential data handling at RapidBrains.";
        $data['canonical']= "https://www.rapidbrains.com/non-disclosure-agreement";
        return view('non-disclosure-agreement',compact('data'));
    }
    public function acceptableUserPolicy() {
        $data['title']= "Acceptable User Policy | RapidBrains: Responsible Usage Guidelines";
		$data['keywords']= "remote engineers, remote developers, remote talents, hire contractors, talent marketplace, affordable, hire engineers, hire developers, hire talents, hire contractors, fulltime employees, partime employees";
		$data['description']= "Learn about our responsible usage guidelines in the Acceptable User Policy. Prohibited actions, user obligations, and consequences for violations.";
        $data['canonical']= "https://www.rapidbrains.com/acceptable-user-policy";
        return view('acceptable-user-policy',compact('data'));
    }
    public function informationAuditDocument() {
        $data['title']= "Info Audit Document: Assess & Manage Your Data | RapidBrains";
		$data['keywords']= "remote engineers, remote developers, remote talents, hire contractors, talent marketplace, affordable, hire engineers, hire developers, hire talents, hire contractors, fulltime employees, partime employees";
		$data['description']= "Find information about our data processing activities in the Information Audit Document. Learn how we collect, use, and store your data at RapidBrains.";
        $data['canonical']= "https://www.rapidbrains.com/information-audit-document";
        return view('information-audit-document',compact('data'));
    }
    public function dataProcessingAgreement() {
        $data['title']= "Data Processing Agreement | RapidBrains: Secure Data Handling";
		$data['keywords']= "remote engineers, remote developers, remote talents, hire contractors, talent marketplace, affordable, hire engineers, hire developers, hire talents, hire contractors, fulltime employees, partime employees";
		$data['description']= "Our Data Processing Agreement ensures secure handling of your data. Learn about our policies for data protection and confidentiality at RapidBrains.";
        $data['canonical']= "https://www.rapidbrains.com/data-processing-agreement";
        return view('data-processing-agreement',compact('data'));
    }
    public function join() {
        return view('join');
    }
    public function testPage() {
        $data['title']= "Hire Remote Developers and Build Your Team Rapidly | RapidBrains";
		$data['keywords']= "remote team, remote work, remote talents, build remote team, hire remote talents, remote hiring, best remote talent";
		$data['description']= "A talent marketplace to rapidly build remote teams. From RapidBrains, companies can hire pre-screened remote engineers and developers with flexible engagements.";
        $data['canonical']= "https://www.rapidbrains.com/test-page";
        return view('test-new',compact('data'));
    }
        public function test2() {
        $data['title']= "Hire Remote Developers and Build Your Team Rapidly | RapidBrains";
		$data['keywords']= "remote team, remote work, remote talents, build remote team, hire remote talents, remote hiring, best remote talent";
		$data['description']= "A talent marketplace to rapidly build remote teams. From RapidBrains, companies can hire pre-screened remote engineers and developers with flexible engagements.";
        $data['canonical']= "https://www.rapidbrains.com/test-page";
        return view('test2',compact('data'));
    }
     public function AlphaLp() {
        $data['title']= "Hire Remote Developers and Build Your Team Rapidly | RapidBrains";
		$data['keywords']= "remote team, remote work, remote talents, build remote team, hire remote talents, remote hiring, best remote talent";
		$data['description']= "A talent marketplace to rapidly build remote teams. From RapidBrains, companies can hire pre-screened remote engineers and developers with flexible engagements.";
        $data['canonical']= "https://www.rapidbrains.com/alpha-lp";
        return view('alpha-lp',compact('data'));
    }
        public function BetaLp() {
        $data['title']= "Hire Remote Developers and Build Your Team Rapidly | RapidBrains";
		$data['keywords']= "remote team, remote work, remote talents, build remote team, hire remote talents, remote hiring, best remote talent";
		$data['description']= "A talent marketplace to rapidly build remote teams. From RapidBrains, companies can hire pre-screened remote engineers and developers with flexible engagements.";
        $data['canonical']= "https://www.rapidbrains.com/beta-lp";
        return view('beta-lp',compact('data'));
    }
       public function leaderShip() {
        $data['title']= "Hire Remote Developers and Build Your Team Rapidly | RapidBrains";
		$data['keywords']= "remote team, remote work, remote talents, build remote team, hire remote talents, remote hiring, best remote talent";
		$data['description']= "A talent marketplace to rapidly build remote teams. From RapidBrains, companies can hire pre-screened remote engineers and developers with flexible engagements.";
        $data['canonical']= "https://www.rapidbrains.com/leadership";
        $data['roboto']=true;
        return view('leadership',compact('data'));
    }
    public function ceoMessage() {
        $data['title']= "RapidBrains | Our CEO Message";
		$data['keywords']= "remote team, remote work, remote talents, build remote team, hire remote talents, remote hiring, best remote talent";
		$data['description']= "A talent marketplace to rapidly build remote teams. From RapidBrains, companies can hire pre-screened remote engineers and developers with flexible engagements.";
        $data['canonical']= "https://www.rapidbrains.com/ceo-message";
        $data['roboto']=true;
        return view('ceo-message',compact('data'));
    }
    public function globalFootprint() {
        $data['title']= "RapidBrains | Global Footprint";
		$data['keywords']= "remote team, remote work, remote talents, build remote team, hire remote talents, remote hiring, best remote talent";
		$data['description']= "A talent marketplace to rapidly build remote teams. From RapidBrains, companies can hire pre-screened remote engineers and developers with flexible engagements.";
        $data['canonical']= "https://www.rapidbrains.com/global-footprint";
        $data['roboto']=true;
        return view('global-footprint',compact('data'));
    }
        public function thankYou() {
        $data['title']= "Hire Remote Developers and Build Your Team Rapidly | RapidBrains";
		$data['keywords']= "remote team, remote work, remote talents, build remote team, hire remote talents, remote hiring, best remote talent";
		$data['description']= "A talent marketplace to rapidly build remote teams. From RapidBrains, companies can hire pre-screened remote engineers and developers with flexible engagements.";
        $data['canonical']= "https://www.rapidbrains.com/thank-you";
        return view('thank-you',compact('data'));
    }
        public function capAbilities() {
        $data['title']= "RapidBrains | Our Capabilities";
		$data['keywords']= "remote team, remote work, remote talents, build remote team, hire remote talents, remote hiring, best remote talent";
		$data['description']= "A talent marketplace to rapidly build remote teams. From RapidBrains, companies can hire pre-screened remote engineers and developers with flexible engagements.";
        $data['canonical']= "https://www.rapidbrains.com/capabilities";
        $data['roboto']=true;
        return view('our-capabilities',compact('data'));
    }
    public function globalApproach() {
        $data['title']= "RapidBrains | Global Approach";
		$data['keywords']= "remote team, remote work, remote talents, build remote team, hire remote talents, remote hiring, best remote talent";
		$data['description']= "A talent marketplace to rapidly build remote teams. From RapidBrains, companies can hire pre-screened remote engineers and developers with flexible engagements.";
        $data['canonical']= "https://www.rapidbrains.com/global-approach";
        $data['roboto']=true;
        return view('global-approach',compact('data'));
    }
}
