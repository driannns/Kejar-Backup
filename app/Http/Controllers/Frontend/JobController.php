<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Job;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
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
        $job = Job::where('id', $job)->get()->first();
        return view('jobs.detail', compact('job'));
    }

    public function job(Request $request)
    {
        $userid = auth()->user()->id;
        $job = Job::where('user_id', $userid)->get();
        return view('postjob.index', compact('job'));
    }
    public function postjob(Request $request)
    {
        $categories = Category::all();
        return view('postjob.postjob', compact('categories'));
    }

    public function uploadjob(Request $request)
    {   
        $file = $request->file('foto');
        $name = 'COMPANY_' . date('Ymdhis') . '.' . $request->file('foto')->getClientOriginalExtension();
        $file->move('company/', $name);
        Job::create([
            'job_title' => $request->job_title,
            'company_name' => $request->company_name,
            'user_id' => auth()->user()->id,
            'category_id' => $request->category_id,
            'city' => $request->city,
            'type' => $request->type,
            'work_location' => $request->work_location,
            'experience' => $request->experience,
            'salary' => $request->salary,
            'foto' => $name,
            'company_background' => $request->company_background,
            'skills' => $request->skills,
            'whyhiring' => $request->whyhiring,
            'job_description' => $request->job_description,
            'responsibilities' => $request->responsibilities
        ]);
        $userid = auth()->user()->id;
        $job = Job::where('user_id', $userid)->get();
        return view('postjob.index', compact('job'));
    }

    public function detailjob($jobid)
    {
        $job = Job::where('id', $jobid)->get()->first();
        return view('postjob.detail-job', compact('job'));
    }

    public function updatejob($jobid)
    {
        $categories = Category::all();
        $job = Job::where('id', $jobid)->get()->first();
        return view('postjob.update-job', compact('job', 'categories'));
    }

    public function updatejobform(Request $request, $jobid)
    {
        $this->validate($request, [
            'foto' => 'image|mimes:jpeg,png,jpg,gif,svg'
        ]);

        if($request->hasFile('foto')) {
            $fotocolumn = Job::find($jobid)->pluck('foto');
            $path = 'company/'.$fotocolumn;
            if(File::exists($path))
            {
                File::delete($path);
            }
            $file = $request->file('foto');
            $name = 'COMPANY_' . date('Ymdhis') . '.' . $request->file('foto')->getClientOriginalExtension();
            $file->move('company/', $name);

            $job = Job::find($jobid);
            $job->update([
            'job_title' => $request->job_title,
            'company_name' => $request->company_name,
            'user_id' => auth()->user()->id,
            'category_id' => $request->category_id,
            'city' => $request->city,
            'type' => $request->type,
            'work_location' => $request->work_location,
            'experience' => $request->experience,
            'salary' => $request->salary,
            'foto' => $name,
            'company_background' => $request->company_background,
            'skills' => $request->skills,
            'whyhiring' => $request->whyhiring,
            'job_description' => $request->job_description,
            'responsibilities' => $request->responsibilities
            ]);
            $userid = auth()->user()->id;
            $job = Job::where('user_id', $userid)->get();
            return view('postjob.index', compact('job'));
        }

    }

    public function deletejob($jobid)
    {
        $jobs = Job::where('id', $jobid)->delete();

        $userid = auth()->user()->id;
        $job = Job::where('user_id', $userid)->get();
        return view('postjob.index', compact('job'));
    }
}
