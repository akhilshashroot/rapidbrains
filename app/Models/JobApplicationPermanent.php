<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobApplicationPermanent extends Model
{
    use HasFactory;
    protected $table = 'job_applications_permanent';
    public function job(){
        return $this->hasOne(PermanentJob::class,'jobid','job_id');
    }
    public function user(){
        return $this->hasOne(User::class,'id','added_by');
    }
    public function jobpost()
    {
        return $this->belongsTo(PermanentJob::class,'jobid','job_id');
    }
    public function talent(){
        return $this->hasOne(PermanentStakefieldUser::class,'employee_id','talentid');
    }

    public function screened(){
        return $this->hasOne(User::class,'id','screen_added');
    }
}
