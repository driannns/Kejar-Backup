<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PostJobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $userid = auth()->user()->id;
        $job = Job::where('user_id', $userid)->get();
        return view('postJob.index', compact('job'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('postjob.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $file = $request->file('foto');
        $name = 'COMPANY_' . date('Ymdhis') . '.' . $request->file('foto')->getClientOriginalExtension();
        $file->move('company/', $name);
        Job::create([
            'category_id' => $request->category_id,
            'user_id' => auth()->user()->id,
            'job_title' => $request->job_title,
            'company_name' => $request->company_name,
            'city' => $request->city,
            'experience' => $request->experience,
            'type' => $request->type,
            'skills' => $request->skills,
            'work_location' => $request->work_location,
            'salary' => $request->salary,
            'company_background' => $request->company_background,
            'whyhiring' => $request->whyhiring,
            'job_description' => $request->job_description,
            'foto' => $name,
            'responsibilities' => $request->responsibilities
        ]);
        //complete
        $userid = auth()->user()->id;
        $job = Job::where('user_id', $userid)->get();
        return view('postjob.index', compact('job'));
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $job = Job::where('id', $id)->first();
        $employee = Job::find($id);
        if($job->user_id == auth()->user()->id){
            return view('postjob.detailJob', compact('job', 'employee'));
    }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $categories = Category::all();
        $job = Job::where('id', $id)->get()->first();
        if($job->user_id == auth()->user()->id){
            return view('postjob.update', compact('job', 'categories'));
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'foto' => 'image|mimes:jpeg,png,jpg,gif,svg'
        ]);

        $job = Job::find($id);
        
        if($request->hasFile('foto')) {
            $fotocolumn = Job::find($id)->pluck('foto');
            $path = 'company/'.$fotocolumn;
            if(File::exists($path))
            {
                File::delete($path);
            }
            $file = $request->file('foto');
            $name = 'COMPANY_' . date('Ymdhis') . '.' . $request->file('foto')->getClientOriginalExtension();
            $file->move('company/', $name);

            $job->update([
            'foto' => $name,
            ]);
        }
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

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $jobs = Job::where('id', $id)->delete();

        $userid = auth()->user()->id;
        $job = Job::where('user_id', $userid)->get();
        return view('postjob.index', compact('job'));
    }
}
