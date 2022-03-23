<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Info;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use PhpParser\Node\Expr\AssignOp\Concat;

class ContactController extends Controller
{
    public function store(Request $request){

        $validatedData = $request->validate([
            'fullname' => 'required|string',
            'email' => 'required|string',
            'phone' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);

        $contact = new Contact();

        $contact->fullname = $request->fullname;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->subject = $request->subject;
        $contact->message = $request->message;

        // $contact->read = 1;

    //    $contact->save();
    //    Mail::to($contact->email,$contact->fullname)->send(new ContactSender($contact->fullname,$contact->message));
    //    return redirect()->back();
    }

    public function edit(Info $info){

        return view("admin.contact.edit",compact("info"));
    }

    public function update(Request $request, Info $infos){

        $request->validate([
            'adresse' => 'required',
            'mail' => 'required',
            'telephone' => 'required',
            'fax' => 'required',
            'message' => 'required',
        ]);

        $infos->adresse = $request->adresse;
        $infos->mail = $request->mail;
        $infos->telephone = $request->telephone;
        $infos->fax = $request->fax;
        $infos->message = $request->message;
        $infos->save();
        return redirect()->route('contacts.index')->with('success', 'contacts ' . $request->adresse .' modifiée !');
    }

    public function affichage(){

        $info = Info::first();
        return view("admin.contact.main", compact("info"));
    }

}
