<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function authnticate(Request $request)
    {
    	$userData =  $request->only('email', 'password');

    	//return dump($userData);

    	if(Auth::attempt($userData)){
            $request->session()->regenerate(); 
    		return '<h1>Hello admin</h1>';
    	}

    	return '<h1>Sorry you are not have a peremssion for use here</h1>';
    }
}
