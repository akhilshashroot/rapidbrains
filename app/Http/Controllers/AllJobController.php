<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Job;
use App\Models\PermanentJob;

class AllJobController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function jobList(Request $request)
    {


        
        $jobs=array();
       $jobs_con= Job::where('status',1)->where('is_view',1)->where('is_deleted',0)->where('location','Remote')->orderby('id','DESC')->get();
       $jobs_per =PermanentJob::where('status',1)->where('is_view',1)->where('is_deleted',0)->where('site','Onsite')->orderby('id','DESC')->get();
       $jobs_con_count= count($jobs_con);
       $jobs_per_count= count( $jobs_per);
       $total_count=$jobs_con_count+$jobs_per_count;
       $k=$j=0;
       for($i=0;$i<$total_count;$i++){
         
         
          if($k  != $jobs_con_count){
           
             $dat1['id']=$jobs_con[$k]->id;
             $dat1['date']=$jobs_con[$k]->created_at;
             $dat1['job_id']=$jobs_con[$k]->jobid;
             $dat1['position']=$jobs_con[$k]->position;
             $dat1['location']=$jobs_con[$k]->location;
             $dat1['skill']=$jobs_con[$k]->skill;
             $dat1['salary']=$jobs_con[$k]->salary;
             $dat1['type']='Remote';
             $dat1['vendor_payout']=$jobs_con[$k]->vendor_payout;
             $k++;
             array_push($jobs,$dat1);
    
          }

          if($j  != $jobs_per_count){
            
         
            $dat2['id']=$jobs_per[$j]->id;
            $dat2['date']=$jobs_per[$j]->created_at;
            $dat2['job_id']=$jobs_per[$j]->jobid;
            $dat2['position']=$jobs_per[$j]->position;
            $dat2['location']= str_replace('/', ', ', $jobs_per[$j]->location);
            $dat2['skill']=$jobs_per[$j]->skill;
            $dat2['salary']=$jobs_per[$j]->salary;
            $dat2['type']='Onsite';
            $dat2['vendor_payout']=$jobs_per[$j]->vendor_payout;
            $j++;
            array_push($jobs,$dat2);
   
         }
    
       }
       // foreach($jobs_per as $job2){
       //    $dat2['id']=$job2->id;
       //    $dat2['date']=$job2->created_at;
       //    $dat2['job_id']=$job2->jobid;
       //    $dat2['position']=$job2->position;
       //    $dat2['location']=$job2->location;
       //    $dat2['skill']=$job2->skill;
       //    $dat2['salary']=$job2->salary;
       //    $dat2['type']='Permanent';
       //    $dat2['vendor_payout']=$job2->vendor_payout;
    
       //    array_push($jobs,$dat2);
       // }
       // foreach($jobs_con as $job1){
       //    $dat1['id']=$job1->id;
       //    $dat1['date']=$job1->created_at;
       //    $dat1['job_id']=$job1->jobid;
       //    $dat1['position']=$job1->position;
       //    $dat1['location']=$job1->location;
       //    $dat1['skill']=$job1->skill;
       //    $dat1['salary']=$job1->salary;
       //    $dat1['type']='Contract';
       //    $dat1['vendor_payout']=$job1->vendor_payout;
    
       //    array_push($jobs,$dat1);
       // }
      
     
       return view('jobs.alljobsindex',compact('jobs'));
    
    
    }

}