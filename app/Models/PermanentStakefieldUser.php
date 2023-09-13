<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PermanentStakefieldUser extends Model
{
    use HasFactory;
    protected $fillable = [
        'skill_set',
        'experience',
        'turnaround_time',
        'availability',
        'employee_id',
        'rate',
        'name',
        'email',
        'skill_data',
        'comments',
        'ectc'
    ];
    public function user(){
        return $this->hasOne(User::class,'id','added_by');
    }
    public function jobapplicatn()
    {
        return $this->belongsTo(JobApplicationPermanent::class,'employee_id','talentid');
    }
}
