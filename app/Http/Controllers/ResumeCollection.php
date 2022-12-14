<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Validator;

class ResumeCollection extends Controller
{
    public function store(Request $request)
    { 
        $validator= Validator::make($request->all(), [
            'email'=>'required|email',
            'name'=>'required',
            'skill'=>'required',
            'employmenttype'=>'required',
            'availability'=>'required',
            'g-recaptcha-response'=>'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->with('error', 'validation failed');
        }

        if($request->hasFile('resume')){
            // Get filename with the extension
            $filenameWithExt = $request->file('resume')->getClientOriginalExtension();
            
            if($filenameWithExt !="pdf" &&  $filenameWithExt !='docx'){
                return redirect()->back()->with('error', 'Upload file either pdf or docx format');
            }
        }
        $ch = curl_init();

curl_setopt($ch, CURLOPT_URL,"https://talents.rapidbrains.com/api/join-rapidbrains");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,
$request->all());

// In real life you should use something like:
// curl_setopt($ch, CURLOPT_POSTFIELDS, 
//          http_build_query(array('postvar1' => 'value1')));

// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$server_output = curl_exec($ch);
$server_output_decoded = json_decode($server_output);
curl_close ($ch);
if($server_output_decoded->status == 'ok') {
    return redirect()->back()->with('success', 'We have received your application. Stay tuned, we’ll get back to you very soon.'); 
} else {
    return redirect()->back()->with('error', 'Something went wrong');
}
    }
}
