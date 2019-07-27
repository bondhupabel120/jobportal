<?php

namespace App\Http\Controllers;

use App\CompanyVisitor;
use Illuminate\Http\Request;
use Session;

class CompanySignUpController extends Controller
{
    public function index(){
        return view('front.company.company-sign-up');
    }

    public function newCompanySignUp(Request $request){
        CompanyVisitor::saveCompanyVisitorInfo($request);

        return redirect('/company-dashboard');
    }

    public function companyVisitorLogout(Request $request){
        Session::forget('companyVisitorId');
        Session::forget('companyVisitorName');

        return redirect('/');
    }

    public function companyLogin(){
        return view('front.company.company-login');
    }

    public function newCompanyLogin(Request $request){
        $visitor = CompanyVisitor::where('email_address', $request->email_address)->first();
        if ($visitor){
            if (password_verify($request->password, $visitor->password)){
                Session::put('companyVisitorId', $visitor->id);
                Session::put('companyVisitorName', $visitor->first_name.' '.$visitor->last_name);

                return redirect('/company-dashboard');
            } else {
                return redirect('company-login')->with('message', 'Password not valid');
            }
        }else {
            return redirect('company-login')->with('message', 'Email address not valid');
        }
    }
}
