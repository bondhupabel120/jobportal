<?php

namespace App;

use Session;
use Illuminate\Database\Eloquent\Model;

class CompanyVisitor extends Model
{
    protected $fillable = ['first_name','last_name','business_name','email_address','password'];

    public static function saveCompanyVisitorInfo($request){
        $visitor = new CompanyVisitor();
        $visitor->first_name    = $request->first_name;
        $visitor->last_name     = $request->last_name;
        $visitor->business_name = $request->business_name;
        $visitor->email_address = $request->email_address;
        $visitor->password      = bcrypt($request->password);
        $visitor->save();

        Session::put('companyVisitorId', $visitor->id);
        Session::put('companyVisitorName', $visitor->first_name.' '.$visitor->last_name);
    }
}
