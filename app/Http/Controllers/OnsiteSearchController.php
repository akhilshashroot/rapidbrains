<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\PermanentJob;
use DataTables;
use Illuminate\Support\Facades\Log;

class OnsiteSearchController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            Log::debug($request->order[0]['column']); 
            if($request->order[0]['column']==0){
              $col='updated_at';
              $dec='desc';
            }elseif($request->order[0]['column']==2){
              $col='jobid';
              $dec=$request->order[0]['dir'];
            }elseif($request->order[0]['column']==3){
                $col='skill';
                $dec=$request->order[0]['dir'];
            }elseif($request->order[0]['column']==4){
                $col='experience';
                $dec=$request->order[0]['dir'];
            }elseif($request->order[0]['column']==5){
                $col='jobType';
                $dec=$request->order[0]['dir'];
            }elseif($request->order[0]['column']==6){
                $col='location';
                $dec=$request->order[0]['dir'];
            }elseif($request->order[0]['column']==7){
                $col='salary';
                $dec=$request->order[0]['dir'];
            }elseif($request->order[0]['column']==1){
                $col='created_at';
                $dec=$request->order[0]['dir'];
            }
           
          
            $data = PermanentJob::select( 'permanent_jobs.id','permanent_jobs.position','permanent_jobs.jobid',
            'permanent_jobs.experience','permanent_jobs.skill','permanent_jobs.jobType',
            'permanent_jobs.location','permanent_jobs.salary','permanent_jobs.feature','permanent_jobs.priority',
            DB::raw('DATE_FORMAT(permanent_jobs.created_at, "%d-%m-%Y") as date'))
            ->where('permanent_jobs.site','Onsite')
            ->where('permanent_jobs.status',1)->where('permanent_jobs.is_view',1)->where('permanent_jobs.is_deleted',0)->orderby('permanent_jobs.updated_at','desc')->orderby($col,$dec);
            return Datatables::of($data)
                    ->addIndexColumn()
                    
                    ->filter(function ($instance) use ($request) {
                        // if (!empty($request->get('approved')) && !empty($request->get('search'))) {
                        //     $search = $request->get('search');
                        //     $instance->where($request->get('approved'),'LIKE', "%$search%");
                        // }

                        // if (!empty($request->get('talent_id'))) {
                        //     $talent_id = $request->get('talent_id');
                        //     $instance->where('employee_id','LIKE', "%$talent_id%");
                        // }
                        // if (!empty($request->get('position'))) {
                        //     $position = $request->get('position');
                        //     $instance->where('skill_set','LIKE', "%$position%");
                        // }
                        if (!empty($request->get('search')) && empty($request->get('approved'))) {
                            if (strpos($request->get('search'), ',') !== false) {
                                $new_variable= str_replace(' ', '',$request->get('search'));
                               }else{
                                $new_variable= str_replace(' ', ',',$request->get('search'));
                               }
                             $searches= explode(",",$new_variable);                            //Log::debug(count($searches));

                            // foreach($searches as $searcher){
                             $instance->where(function($w) use($request,$searches){
                                $search = $request->get('search');
                               $w->orWhere('position', 'LIKE', "%$search%");
                              $w->Where('skill', 'LIKE', "%$searches[0]%");
                                for($i=0;$i<count($searches);$i++){
                                    Log::debug($i);
                                $w->orWhere(function($ws) use($searches,$i){
                                    $ws->Where('skill', 'LIKE', "%$searches[0]%");
                                    if(count($searches)==2){
                                        $ws->Where('skill', 'LIKE', "%$searches[1]%");

                                    }

                                    if(count($searches)==3){
                                        $ws->Where('skill', 'LIKE', "%$searches[2]%");

                                    }    if(count($searches)==4){
                                        $ws->Where('skill', 'LIKE', "%$searches[3]%");

                                    }    if(count($searches)==5){
                                        $ws->Where('skill', 'LIKE', "%$searches[4]%");

                                    }    if(count($searches)==6){
                                        $ws->Where('skill', 'LIKE', "%$searches[5]%");

                                    }    if(count($searches)==7){
                                        $ws->Where('skill', 'LIKE', "%$searches[6]%");

                                    }    if(count($searches)==8){
                                        $ws->Where('skill', 'LIKE', "%$searches[7]%");

                                    }    if(count($searches)==9){
                                        $ws->Where('skill', 'LIKE', "%$searches[8]%");

                                    }    if(count($searches)==10){
                                        $ws->Where('skill', 'LIKE', "%$searches[9]%");

                                    }
                              });
                            }
                            //   $w->orWhere('experience', 'LIKE', "%$search%")
                            //     ->orWhere('turnaround_time', 'LIKE', "%$search%")
                            //     ->orWhere('availability', 'LIKE', "%$search%")
                            //     ->orWhere('rate', 'LIKE', "%$search%");
                            });
                      //  }
                        }
                    })    
                    ->setRowClass(function ($row) {
                        return ($row['priority']==1 ? 'priority' : ' ');
            })
                    ->addColumn('action', function($row){
  
                    
                      
                      
                        $btn = '<a  class="btn btn-primary btn-sm checker" id="apply" style="color: #fff;" data-id='.$row['jobid'].'   href='.env('APP_URL').'/job?id='.$row['jobid'].'>Apply</a>';
                        //   $btn='<input type="checkbox" class="checkbox-change" data-id='.$row['employee_id'].' id="buttonID" onchange="valueChanged()" name="enquiry" value='.$row['employee_id'].'>';
                         return $btn;

                  
                 })
                 ->addColumn('loc', function($row){
  
                    if( strpos($row['location'], ",") !== false ) {
                        $loc =str_replace(',', ', ',$row['location']);
                   }else{
                    $loc = str_replace('/', ', ',$row['location']);
                   }
                      
                   
  
              
                    //   $btn='<input type="checkbox" class="checkbox-change" data-id='.$row['employee_id'].' id="buttonID" onchange="valueChanged()" name="enquiry" value='.$row['employee_id'].'>';
                     return $loc;

              
             })
               ->addColumn('JobId', function($row){
  
                    
                      
                      
                $btn1 = '<a style="color: #0080ff;"   href='.env('APP_URL').'/job?id='.$row['jobid'].'>'.$row['jobid'].'</a>';
                //   $btn='<input type="checkbox" class="checkbox-change" data-id='.$row['employee_id'].' id="buttonID" onchange="valueChanged()" name="enquiry" value='.$row['employee_id'].'>';
                 return $btn1;

          
         })

                 ->rawColumns(['action','JobId','loc'])
                    ->make(true);


        }
        
     
     return view('jobs.onsiteindex');
    }
}

