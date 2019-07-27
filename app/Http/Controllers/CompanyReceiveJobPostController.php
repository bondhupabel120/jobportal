<?php

namespace App\Http\Controllers;

use Session;

class CompanyReceiveJobPostController extends Controller
{
    public function sendApplication(){
        return redirect('/')->with('message', 'Your Application Submit');
    }
}
