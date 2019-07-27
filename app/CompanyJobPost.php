<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompanyJobPost extends Model
{
    protected $fillable = ['job_title','job_description','salary','location','country'];

    public static function saveCompanyJobPost($request){
        $job = new CompanyJobPost();
        $job->job_title         = $request->job_title;
        $job->job_description   = $request->job_description;
        $job->salary            = $request->salary;
        $job->location          = $request->location;
        $job->country           = $request->country;
        $job->save();
    }
}
