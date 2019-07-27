<?php

namespace App\Http\Controllers;

use App\CompanyJobPost;
use Illuminate\Http\Request;

class CompanyJobPostController extends Controller
{
    public function companyDashboard(){
        return view('front.company.job-post');
    }

    public function newCompanyJobPost(Request $request){
        CompanyJobPost::saveCompanyJobPost($request);

        return redirect('/company-dashboard')->with('message', 'Your Job Post Created Successfully');
    }
}
