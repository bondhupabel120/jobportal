<?php

namespace App\Http\Controllers;

use App\CandidateVisitor;
use Illuminate\Http\Request;

class RegisteredCandidateController extends Controller
{
    public function seeCandidate(){
        return view('admin.candidate.see-candidate',[
            'candidates' => CandidateVisitor::orderBy('id', 'desc')->get()
        ]);
    }

    public function deleteCandidate(Request $request){
        $feature = CandidateVisitor::find($request->id);
        $feature->delete();

        return redirect('/see-candidate')->with('message', 'Candidate Delete Successfully');
    }
}
