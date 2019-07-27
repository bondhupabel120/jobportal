<?php

namespace App\Http\Controllers;

use App\CompanyJobPost;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(){
        return view('front.home.home',[
            'jobs' => CompanyJobPost::orderBy('id', 'desc')->get()
        ]);
    }

    public function about(){
        return view('front.about.about');
    }

    public function blog(){
        return view('front.blog.blog');
    }
}
