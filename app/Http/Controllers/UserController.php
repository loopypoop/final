<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
   public function edit(){
		return view('profile.edit');
	}

	public function editUser($id, Request $req) {

		$user = User::find($id);
		$user->lastname = $req->input('lastname');
		$user->number = $req->input('number');
		$user->dateofbirth = $req->input('dateofbirth');
		$user->address = $req->input('address');
		$user->postcode = $req->input('postcode');

		$user->save();

		return redirect()->route('profile');
	}
	public function ShowUser($id){
		$order = User::find($id);
		return view('Admin.show-user', [
			'data' => $order
			]);
	}
}