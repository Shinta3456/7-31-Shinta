<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;



class ContactController extends Controller
{

    public function edit($id){
        $contact = Contact::findOrFail($id);
        return view('admin/contacts/edit', compact('contact'));
    }


    public function index(){
       $contacts = Contact::paginate(2);
      return view('admin/contacts/index', compact('contacts'));
        
    }

    public function create(){
        return view('contacts', [
            "title" => "Contacts"
        ]);

    }
     
    

    public function store(Request $request){
        //dd($request->all());
        $contact = Contact::create($request->all());
        $contact->save();

        return redirect('contacts');
    }
}
?>