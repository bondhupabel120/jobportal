<?php

namespace App;

use Session;
use Illuminate\Database\Eloquent\Model;

class CandidateVisitor extends Model
{
    protected $fillable= ['first_name','last_name','email_address','password'];

    public static function saveCandidateVisitorInfo($request){
        $visitor = new CandidateVisitor();
        $visitor->first_name    = $request->first_name;
        $visitor->last_name     = $request->last_name;
        $visitor->email_address = $request->email_address;
        $visitor->password      = bcrypt($request->password);
        $visitor->save();

        Session::put('candidateVisitorId', $visitor->id);
        Session::put('candidateVisitorName', $visitor->first_name.' '.$visitor->last_name);
    }
}
