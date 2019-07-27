<?php

namespace App\Http\Controllers;

use App\AdminJob;
use Illuminate\Http\Request;

class AdminJobController extends Controller
{
    public function addJob(){
        return view('admin.job.add-job');
    }

    public function newJob(Request $request){
        AdminJob::saveJobInfo($request);

        return redirect('/job/add-job')->with('message', 'Job Post Created Successfully');
    }

    public function manageJob(){
        return view('admin.job.manage-job',[
           'jobs' => AdminJob::orderBy('id', 'desc')->get()
        ]);
    }

    public function editJob($id){
        return view('admin.job.edit-job',[
            'job' => AdminJob::find($id)
        ]);
    }

    public function updateJob(Request $request){
        AdminJob::updateJobInfo($request);

        return redirect('/job/manage-job')->with('message', 'Job Post Update Successfully');
    }

    public function deleteJob(Request $request){
        $job = AdminJob::find($request->id);
        $job->delete();

        return redirect('/job/manage-job')->with('message', 'Job Post Delete Successfully');
    }
}
