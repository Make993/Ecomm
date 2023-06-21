<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contact;

class contactController extends Controller
{
    public function contact(Request $req){
        $contact->Name=$req->Name;
        $contact->email=$req->email;
        $contact->subject=$req->subject;
        $contact->message=$req->message; 
        $contact->save();       
        return redirect('contact');        
    }
}
