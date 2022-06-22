<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplyJob extends Model
{
    use HasFactory;
    protected $fillable = [
    'user_id',
    'job_id',
    'name',
    'email',
    'number',
    'bio',
    'address',
    ];
    public function getJobDetail(){
        return $this->belongsTo(Job::class,'job_id');
    }
}
