<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact(){
        return view('front.contact.contact');
    }

    public function newContact(Request $request){
        Contact::saveContactInfo($request);

        return redirect('/contact')->with('message', 'Your Message Send Successfully');
    }

    public function seeContact(){
        return view('admin.contact.see-contact',[
            'contacts' => Contact::orderBy('id', 'desc')->get()
        ]);
    }

    public function deleteContact(Request $request){
        $contact = Contact::find($request->id);
        $contact->delete();

        return redirect('/see-contact')->with('message', 'Contact Delete Successfully');
    }
}
