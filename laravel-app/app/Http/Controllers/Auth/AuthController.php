<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
  public function index()
  {
    return view('auth.login');
  }

  public function login(Request $request)
  {
    $request->validate([
      'email' => 'required|email',
      'password' => 'required'
    ]);

    $check = $request->all();
    $data = [
      'email' => $check['email'],
      'password' => $check['password'],
    ];

    if (Auth::guard('admin')->attempt($data)) {
      return redirect()->route('app-dashboard')->with('success', 'Login Successfull');
    } else {
      return redirect()->route('app-login')->with('error', 'Invalid Credentials');
    }
  }

  public function logout(Request $request): RedirectResponse
  {
    Auth::guard('admin')->logout();

    $request->session()->invalidate();

    $request->session()->regenerateToken();

    return redirect('/');
  }
}
