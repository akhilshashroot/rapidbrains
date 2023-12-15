<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\StakefieldUser;
use Illuminate\Support\Facades\Log;
use App\Models\EnquiryData;
use Illuminate\Support\Facades\Mail;
use App\Mail\InternalMail;
use App\Mail\TalentCommonMail;
use Validator;
use App\Models\Job;
use App\Models\JobApplication;
use App\Mail\JobReturnMail;
use App\Models\JobApplicationPermanent;
use App\Models\PermanentJob;
use App\Models\PermanentStakefieldUser;
class JobViewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $job = Job::where('jobid',$request->id)->first();
        $type='remote';
        if(! $job){
            $job = PermanentJob::where('jobid',$request->id)->first();
            $type='onsite';
        }

        if(! $job){
           // abort(404);
          return redirect('/');
        }
        $status = $job->status;
         $is_view = $job->is_view;
        return view('jobs.career',compact('job','status','type','is_view'));

    }

 
    public function applyJob(Request $request)
    {
        $validator= Validator::make($request->all(), [
            'email'=>'required|email',
            'name'=>'required',
            
        ]);
     

        if ($validator->fails()) {
            return response()->json([ 
                'status'	=> 'notok',
                'statuscode'    => '401',
                'message' =>'validation error',
            ]);
        }

        if(Job::where('jobid',$request->job_id)->first()){
            $talentid_Count = StakefieldUser::count();
            $talentidgenerated = 10000+$talentid_Count+1;
            $user = new StakefieldUser;
            $job = new JobApplication;
            $type="remote";

        }else{
            $talentid_Count = PermanentStakefieldUser::count();
            $talentidgenerated = 20000+$talentid_Count+1;
            $talentidgenerated = "S".$talentidgenerated;
            $user = new PermanentStakefieldUser;
            $job = new JobApplicationPermanent;
            $type="onsite";
        }
     
   // Log::info( $request);
    $img=  $fileNameToStore_user="";
      
   if($request->hasFile('resume')){
     // Get filename with the extension
     $filenameWithExt = $request->file('resume')->getClientOriginalName();
     //Get just filename
     $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
     
     // Get just ext
     $extension = $request->file('resume')->getClientOriginalExtension();
     // Filename to store
     $fileNameToStore = str_replace(' ', '',$request->name).'_'.strtotime('now').'.'.$extension;
     // Upload Image
     $path = $request->file('resume')->storeAs('public/apply',$fileNameToStore);

     $img=$fileNameToStore ;

     $fileNameToStore_user = $talentidgenerated.'_'.strtotime('now').'.'.$extension;
            // Upload Image
            $path_user = $request->file('resume')->storeAs('public/resume',$fileNameToStore_user);
            $user->resume =$fileNameToStore_user ;
 }
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->skill_set = preg_replace('/(?<!,) {2,}/', ' ', $request->skill);
        $user->experience = $request->experience;
        $user->turnaround_time = $request->availability;
        $user->availability = $request->employmenttype;
        $user->added_by = 'Website';
        $user->employee_id = $talentidgenerated;
        $string= str_replace(' ', '',$request->skill);
        $user->skill_data =$string;
         $user->jobb_id = $request->job_id;
         $user->new_domain=1;
        //$user->comments =$validated['comments'];
        $user->ectc =$request->ectc.' '.$request->price;
        //$user->rate_client =$validated['employee'];
        $res = $user->save();
   
    $job->job_id = $request->job_id;
    $job->fullname = $request->name;
    $job->email =$request->email;
    $job->phone = $request->phone;
    $job->resume= $img;
    $job->skill = $request->skill;
    $job->new_domain=1;
    $job->status =   'Not Submitted';
    $job->experience = $request->experience;
    $job->availability =$request->availability;
    $job->employmenttype = $request->employmenttype;
    $job->talentid = $talentidgenerated;
    $res = $job->save();
    if($request->hasFile('resume')){
        $data['url']=env('APP_URL').'/storage/resume/'.$fileNameToStore_user; 
        $data['resume_name']=  $fileNameToStore_user; 
      $result= $this->curlAdd($data); 
        }

       try {
            $mail_data['email']=$request->email;
            $mail_data['name']=$request->name;
            $mail_data['talent_id']= $talentidgenerated ;
            $mail_data['skill']=$request->skill ;
            $mail_data['job_id']=$request->job_id ;
            $mail_data['experience']=(is_numeric($request->experience))?$request->experience.' Years' :$request->experience;
            $mail_data['availability']=$request->availability ;
            $mail_data['phone']=$request->phone ;
            $mail_data['resume']=($fileNameToStore_user)?env('APP_URL').'/storage/resume/'.$fileNameToStore_user:"" ;
            $mail_data['type']=$type ;
            $mail_data['rate']=$request->ectc.' '.$request->price ;
            Mail::send(new JobReturnMail($mail_data));
            Mail::send(new InternalMail($mail_data));
           } catch (\Exception $e){
            
            return response()->json([ 
                'status'	=> 'ok',
                'statuscode'    => 402,
                'message' =>'success',
            ]);

         }   
    return response()->json([ 
        'status'	=> 'ok',
        'statuscode'    => 402,
        'message' =>'success',
    ]);
    }

    public function curlAdd($request)
    {
        $fields_string  =  $request;
       // Log::info( "curlrequest",[$fields_string]);

        $header         = [
                            'Accept: application/json',
                            'Cache-Control: no-cache',
                          ];
       
            // if(env('APP_ENV')=='local'){
            //     $url          = 'http://console-localhost//api/talent-add';
            // }else{

               $url          = 'https://console.rapidbrains.com/api/talent-add';
    
            // }              
     
            $ch         = curl_init();
            curl_setopt($ch, CURLOPT_URL,$url);
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
            curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $response   = curl_exec($ch);
            curl_close ($ch);
       
    }


    
    public function applyJobPage(Request $request)
    {
        $job = Job::where('jobid',$request->id)->first();

        if(! $job){
            $job = PermanentJob::where('jobid',$request->id)->first();

        }

        if(! $job){
            abort(404);
        }
       
     
        return view('jobs.apply');

    }
}
