<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\RapidBrainMail;
use Illuminate\Support\Facades\Validator;
use App\Models\SeoEnquiry;
use App\Mail\RapidBrainMailEnquiry;
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
    public function test_enquirystep1()
    {
        return view('test-enquirystep1');
    }
    public function test_enquirystep2()
    {
        return view('test-enquirystep2');
    }
    public function test_enquirystep3()
    {
        return view('test-enquirystep3');
    }
    public function test_enquirystep4()
    {
        return view('test-enquirystep4');
    }
    public function test_enquirystep5()
    {
        return view('test-enquirystep5');
    }
    
    public function newformEnquire(Request $request){
        //dd($request->all());
        // $validator = Validator::make($request->all(), [
        //     'name' => 'required',
        //     'email' => 'nullable',

        // ]);
        // if ($validator->fails()) {
        //     return response()->json([
        //         'status'	=> 'notok',
        //         'statuscode'    => '400',
        //         'data' => $validator->errors(),
        //     ]);
        // }

   
        if( !$request->name && !$request->email){
            return response()->json([
                'status'	=> 'notok',
                'statuscode'    => '402',
                'name' => true,
                'email' =>true,
            ]);
          }elseif($request->name && !$request->email){
            return response()->json([
                'status'	=> 'notok',
                'name' => false,
                'email' =>true,
            ]);
          }elseif(!$request->name && $request->email){
            return response()->json([
                'status'	=> 'notok',
                'statuscode'    => '402',
                'name' => true,
                'email' =>false,
            ]);
          }



        $maildata=array();
        $maildata['name']    		= $request->name;
        $maildata['email'] 		=  $request->email;
      //  $maildata['subject'] 		=  'Stakefield Contact-us';
        $maildata['phone'] 		=  $request->phoneno;
        $maildata['skill']		=  $request->skill;
        $maildata['add-skill']		=  $request->add_skill;
        $maildata['count']		=  $request->count;
        $maildata['experience']		=  $request->experience;
        $maildata['company']		=  $request->company;

        $maildata['time']		=  $request->time;
        $maildata['countrycode']		=  $request->countrycode;

        
        
    //     $maildata['type']		=  $request->enquirenow;
    //     if($request->enquirenow=='enquirenow'){
    //    $enq=new SeoEnquiry();
    //    $enq->name=$request->name;
    //    $enq->email= $request->email;
    //    $enq->phone=$request->phone;
    //    $enq->skill=$request->skill;
    //    $enq->save();
    //     }
            Mail::send(new RapidBrainMailEnquiry($maildata));
            return response()->json([
                'status'	=> 'ok',
                'statuscode'    => '402',
                'message' => 'success',
            ]);
    }
}
