<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller {
	 
	public function submit(ContactRequest $req) {

		$contact = new Contact();
		$contact->name = $req->input('name');
		$contact->email = $req->input('email');
		$contact->message = $req->input('message');

		$contact->save();

		return redirect()->route('contact')->with('success','Message was applied');
	}

	public function AllMessages(){
		return view('Admin.admin', ['data' => Contact::all()]);
	}
	public function OneMessage($id){
		$contact = new Contact;
		return view('Admin.one-contact', [
			'data' => $contact->find($id)
		]);
	}
	public function deleteContact($id) {
		Contact::find($id)->delete();
		return redirect()->route('admin')->with('success','Message was deleted');
	}
}
