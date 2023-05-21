<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeJob extends Model
{
    use HasFactory;
    protected $table = 'employee_job';

    protected $fillable = ['employee_id', 'job_id'];

    public $timestamps = false;
}