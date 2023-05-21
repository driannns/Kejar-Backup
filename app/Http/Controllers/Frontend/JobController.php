<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Job;
use Illuminate\Http\Request;
use Symfony\Component\VarDumper\VarDumper;

class JobController extends Controller
{
    public function index(Request $request)
    {
        $title = $request->input('title');
        if ($title) {
            $jobs = Job::where('job_title', 'LIKE', '%' . $title . '%')->get();
        } else {
            $jobs = Job::all();
        }

        $categories = Category::all();
        $total = count(Job::all());
        return view('jobs.index', compact('jobs', 'categories', 'total'));
    }

    public function detail($job)
    {   
        $user = Auth::user();
        $job = Job::where('id', $job)->get()->first();
        return view('jobs.detail', compact('job' , 'user'));
    }
}
