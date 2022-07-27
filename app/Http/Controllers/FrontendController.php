<?php

namespace App\Http\Controllers;

use App\Models\User;
use Hash;
use Illuminate\Http\Request;
use Auth;

class FrontendController extends Controller
{
    public function index()
    {
    	return view('home');
    }
    public function register()
    {
    	return view('register');
    }
    public function register_post(Request $request)
    {
    	// dd($request->all());
    	$request->validate([
    		'username' => 'required',
    		'user_firstname' => 'required',
    		'user_lastname' => 'required',
    		'user_email' => 'required',
    		'user_password' => 'required',
    	]);
    	$imageName = '';
    	if ($request->user_image) {
            $imageName = "user_images/" .time().'.'.$request->user_image->extension();  
            $request->user_image->move(public_path('user_images'), $imageName);
        }
    	User::create([
    		"username" => $request->username,
    		"user_firstname" => $request->user_firstname,
    		"user_lastname" => $request->user_lastname,
    		"user_email" => $request->user_email,
    		"user_image" => $imageName,
    		"user_password" => Hash::make($request->user_password),
    	]);
    	return redirect()->route('home');
    }
}
