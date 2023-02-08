<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdditionalPagesController extends Controller
{
    public function hireAndroiDevelopers() {
        $data['title']= "Hire Remote Developers and Build Your Team Rapidly | RapidBrains";
		$data['keywords']= "remote team, remote work, remote talents, build remote team, hire remote talents, remote hiring, best remote talent";
		$data['description']= "A talent marketplace to rapidly build remote teams. From RapidBrains, companies can hire pre-screened remote engineers and developers with flexible engagements.";
        $data['canonical']= "https://www.rapidbrains.com";
        return view('hire-android-developers',compact('data'));
    }

}