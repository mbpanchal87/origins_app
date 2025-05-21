<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function signup(Request $request)
	{
		$request->validate([
		'firstname' => 'required',
		'lastname' => 'required',
		'email' => 'required|email|unique:users',
		'password' => 'required'
		]);
		
		User::create([
		'firstname' => $request->firstname,
		'lastname' => $request->lastname,
		'email' => $request->email,
		'password' => Hash::make($request->password)
		]);
		
		return redirect()->route('login')->with('success','Registration Successful.');
	}
	public function login(Request $request)
	{
		$request->validate([
		'email' => 'required|email',
		'password' => 'required'
		]);
		
		if(Auth::attempt($request->only('email', 'password')))
		{
			return redirect('/dashboard');
		}
		else
		{
			return redirect()->route('login');
		}
		
		//return redirect()->route('login')->with('success','Registration Successful.');
	}
	public function dashboard(Request $request)
	{
		$user = Auth::user();
		return view('dashboard', compact('user'));
	}
	public function logout(Request $request)
	{
		Auth::logout();
		return redirect('/login');
	}
}
