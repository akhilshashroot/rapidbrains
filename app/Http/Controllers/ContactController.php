<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Validator;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use App\Mail\hiremail;

class ContactController extends Controller
{
    public function MailFunction(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'surname' => 'required',
            'email' => 'required',
            'department' => 'required',
            'message' => 'required',
            'g-recaptcha-response' => 'required|captcha'
        ]);
        if ($validator->fails()) {
            return redirect()->back()->with('error', 'validation failed');
        }
        try{
        $maildata=array();
        $maildata['name']    		= $request->name;
        $maildata['surname']    		= $request->surname;
        $maildata['email'] 		=  $request->email;
      //  $maildata['subject'] 		=  'Stakefield Contact-us';
        $maildata['department'] 		=  $request->department;
        $maildata['message']		=  $request->message;

       
         
            $send = Mail::send(new ContactMail($maildata));
                return redirect()->back()->with('success', 'We have received your inquiry. Stay tuned, we’ll get back to you very soon.'); 
           
        } catch (\Exception $e){
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }
    public function hireFunction(Request $request){
        $validator = Validator::make($request->all(), [
         
            'hire_email' => 'required',
           
        ]);
        if ($validator->fails()) {
            return redirect()->back()->with('error', 'validation failed');
        }
        
        $maildata=array();
      
        $maildata['email'] 		=  $request->hire_email;
    
        $send = Mail::send(new hiremail($maildata));

        return response()->json([ 
            'status'	=> 'ok',
            'statuscode'    => '402',
            'message' => 'We have received your inquiry. Stay tuned, we’ll get back to you very soon.',
        ]);
         
          //  $send = Mail::send(new ContactMail($maildata));
                return redirect()->back()->with('success', 'We have received your inquiry. Stay tuned, we’ll get back to you very soon.'); 
      
    }
    
}
