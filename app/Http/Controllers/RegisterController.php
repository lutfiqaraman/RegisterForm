<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RegisterForm;

class RegisterController extends Controller
{
    //Register Action
	public function register(Request $request){

		$this->validate($request, [
			'name' => 'required',
			'email' => 'required',
			'password' => 'required'
		]);

		$RegisterForm = new RegisterForm;
		$RegisterForm->name = $request->input('name');
		$RegisterForm->email = $request->input('email');
		$RegisterForm->password = $request->input('password');
		$RegisterForm->save();

		return redirect('/')->with('response', 'Registered Successfully');
	}
}
