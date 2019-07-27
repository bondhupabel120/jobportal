<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdminJob extends Model
{
    protected $fillable = ['job_title','job_description','salary','location','country','publication_status'];

    public static function saveJobInfo($request){
        $job = new AdminJob();
        $job->job_title             = $request->job_title;
        $job->job_description       = $request->job_description;
        $job->salary                = $request->salary;
        $job->location              = $request->location;
        $job->country               = $request->country;
        $job->publication_status    = $request->publication_status;
        $job->save();
    }

    public static function updateJobInfo($request){
        $job = AdminJob::find($request->id);
        $job->job_title             = $request->job_title;
        $job->job_description       = $request->job_description;
        $job->salary                = $request->salary;
        $job->location              = $request->location;
        $job->country               = $request->country;
        $job->publication_status    = $request->publication_status;
        $job->save();
    }
}
