<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;
     protected $fillable = [
    'id',
    'name',
    'job_description',
    'category_id',
    'subcategory_id',
    'qualification',
    'salary',
    'country',
    'company_name',
    'company_image',
    'job_image',
    'number_of_required_post',
    'agent_name',
    ];
}
