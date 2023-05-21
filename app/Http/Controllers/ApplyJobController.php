<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\EmployeeJob;

class ApplyJobController extends Controller
{
    public function index(Request $request, $id)
    {
        $user = Auth::User();
        if (!empty($user->cv)) {

            $employee = Employee::create([
                'name' => $request->name,
                'user_id' => auth()->user()->id,
                'email' => $request->email,
                'status' => 'Pending',
                'cv' => $user->cv,
                'emailalert' => $request->emailalert
            ]);
            EmployeeJob::create([
                'job_id' => $id,
                'employee_id' => $employee->id,
            ]);
        } else {
            $message = "Input Your CV";
            return redirect()->back()->with('message', $message);
        }
        return redirect()->back()->with('messageSuccess', 'Success Apply This Job');
    }

    public function update(Request $request, $id)
    {
        $employee = Employee::find($id);

        $employee->update([
            'status' => $request->status
        ]);

        return redirect()->back();
    }
}
