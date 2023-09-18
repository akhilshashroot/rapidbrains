<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\JobApplication;

class PermanentJob extends Model
{
    use HasFactory;
    public function user(){
        return $this->hasOne(User::class,'id','added_by');
    }
    public function jobapplication()
    {
        return $this->hasMany(JobApplicationPermanent::class,'job_id','jobid');
    }
    
}
