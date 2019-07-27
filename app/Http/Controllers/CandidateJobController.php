<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CandidateJobController extends Controller
{
    public function candidateProfile(){
        return view('front.candidate.profile');
    }
}
