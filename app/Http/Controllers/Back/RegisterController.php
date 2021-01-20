<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests\Back\Register;

class RegisterController extends Controller
{
    public function register(Register $request)
    {
    	$request->validated();

    	return dump($request);
    }
}
