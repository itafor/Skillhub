<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class VerifyController extends Controller
{
	// verify a user with a given token
    public function verify($token) {
      User::where('token',$token)->first()
	       ->update([
       	'token' => null;
       ]);

	       redirect()->route('home')->with('success','account Verified successfully');
    }
}
