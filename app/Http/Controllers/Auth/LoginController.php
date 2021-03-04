<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
 public function dashboard()
 {
  if (Auth::check() === true) {
   $user = Auth::user();
   return view('admin.index', compact('user'));
  }
  return redirect()->route('admin.login');
 }

 public function showLoginForm()
 {
  return view('auth.login');
 }
 public function login(Request $request)
 {
  $credencials = [
   'email'    => $request->email,
   'password' => $request->password,
  ];
  if (Auth::attempt($credencials)) {
   return redirect()->route('admin.dashborad');
  }
  return redirect()->back()->withInput()->withErrors(['Os dados informados são invalidos!']);
 }

 public function logout()
 {
  Auth::logout();
  return redirect()->route('admin.dashborad');
 }

}