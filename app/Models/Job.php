<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;
    protected $fillable = ['job_title', 'user_id', 'company_name', 'category_id', 'city', 'experience', 'type', 'skills', 'work_location', 'salary', 'company_background', 'whyhiring', 'foto', 'job_description','responsibilities'];

    public function categories()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function employees()
    {
        return $this->belongsToMany(Employee::class);
    }
}