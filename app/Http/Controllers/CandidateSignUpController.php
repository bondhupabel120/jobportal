<?php

namespace App\Http\Controllers;

use App\CandidateVisitor;
use Illuminate\Http\Request;
use Session;

class CandidateSignUpController extends Controller
{
    public function index(){
        return view('front.candidate.candidate-sign-up');
    }

    public function newCandidateSignUp(Request $request){
        CandidateVisitor::saveCandidateVisitorInfo($request);

        return redirect('/candidate-profile');
    }

    public function candidateVisitorLogout(Request $request){
        Session::forget('candidateVisitorId');
        Session::forget('candidateVisitorName');

        return redirect('/');
    }

    public function candidateLogin(){
        return view('front.candidate.candidate-login');
    }

    public function newCandidateLogin(Request $request){
        $visitor = CandidateVisitor::where('email_address', $request->email_address)->first();
        if ($visitor){
            if (password_verify($request->password, $visitor->password)){
                Session::put('candidateVisitorId', $visitor->id);
                Session::put('candidateVisitorName', $visitor->first_name.' '.$visitor->last_name);

                return redirect('/candidate-profile');
            } else {
                return redirect('candidate-login')->with('message', 'Password not valid');
            }
        }else {
            return redirect('candidate-login')->with('message', 'Email address not valid');
        }
    }
}
