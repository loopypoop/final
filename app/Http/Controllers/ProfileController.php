<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\OrderRequest;
use App\Models\Order;

class ProfileController extends Controller
{
	public function ShowProfile(){
		return view('Profile.profile');
	}
}
