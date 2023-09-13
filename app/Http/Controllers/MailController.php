<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\StakefieldUser;
use Illuminate\Support\Facades\Log;
use App\Models\EnquiryData;
use Illuminate\Support\Facades\Mail;
use App\Mail\TalentCommonMail;

class MailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function MailFunction(Request $request)
    {
       

        $maildata=array();
        $maildata['name']    		= $request->name;
        $maildata['email'] 		=  $request->email;
      //  $maildata['subject'] 		=  'Stakefield Contact-us';
        $maildata['phone'] 		=  $request->phone;
        $maildata['skill']		=  $request->skill;
           
        $maildata['type']		=  $request->enquirenow;

       
         
            Mail::send(new TalentCommonMail($maildata));
            return response()->json([ 
                'status'	=> 'ok',
                'statuscode'    => '402',
                'message' => 'success',
            ]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($talentid)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function MailTest()
    {
        Mail::send('welcome', [], function($message) {
            $message->to('akhil.s@hashroot.com')->subject('Testing mails'); 
        });
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        dd($id);
    }

    
    public function enquiryAdd(Request $request)
    {
        $save = new EnquiryData;
 
        $save->name = $request->name;
        $save->email = $request->email;
        $save->phone = $request->phone;
        $save->website =  $request->website;
        $save->employee_id = $request->employee_id;
        $save->save();
  
        return response()->json([ 
            'status'	=> 'ok',
            'statuscode'    => '402',
            'message' => 'success',
        ]);    
    
    }

    public function employeeDelete(Request $request)
    {
        StakefieldUser::find($request->id)->delete();
    
     
  
        return response()->json([ 
            'status'	=> 'ok',
            'statuscode'    => '402',
            'message' => 'success',
        ]);    
    
    }

}
