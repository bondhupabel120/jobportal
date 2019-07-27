<?php

namespace App\Http\Controllers;

use App\CompanyVisitor;
use Illuminate\Http\Request;

class RegisteredCompanyController extends Controller
{
    public function seeCompany(){
        return view('admin.company.see-company',[
            'companies' => CompanyVisitor::orderBy('id', 'desc')->get()
        ]);
    }

    public function deleteCompany(Request $request){
        $feature = CompanyVisitor::find($request->id);
        $feature->delete();

        return redirect('/see-company')->with('message', 'Company Delete Successfully');
    }
}
