<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\RapidBrainMail;
use Illuminate\Support\Facades\Validator;
use App\Models\SeoEnquiry;

class EnquiryController extends Controller
{
    public function MailFunction(Request $request){
        //dd($request->all());
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'nullable',
         
        ]);
        if ($validator->fails()) {
            return response()->json([ 
                'status'	=> 'notok',
                'statuscode'    => '400',
                'data' => $validator->errors(),
            ]);
        }
        $maildata=array();
        $maildata['name']    		= $request->name;
        $maildata['email'] 		=  $request->email;
      //  $maildata['subject'] 		=  'Stakefield Contact-us';
        $maildata['phone'] 		=  $request->phone;
        $maildata['skill']		=  $request->skill;
           
        $maildata['type']		=  $request->enquirenow;
        if($request->enquirenow=='enquirenow'){
       $enq=new SeoEnquiry();
       $enq->name=$request->name;
       $enq->email= $request->email;
       $enq->phone=$request->phone;
       $enq->skill=$request->skill;
       $enq->save();
        }
            Mail::send(new RapidBrainMail($maildata));
            return response()->json([ 
                'status'	=> 'ok',
                'statuscode'    => '402',
                'message' => 'success',
            ]);
    }
}
