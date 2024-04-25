<?php

namespace Modules\Website\App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
  public function register()
  {
    $staticData = [];
    $staticData['genders'] = ['male', 'female'];

    return view('website::auth.register', compact(
      'staticData'
    ));
  }

  public function login()
  {
    return view('website::auth.login');
  }

  public function loginSubmit(Request $request)
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

    if (Auth::attempt($data)) {
      return redirect()->route('dashboard.index')->with('success', 'Login Successfull');
    } else {
      return redirect()->route('login')->with('error', 'Invalid Credentials');
    }
  }

  public function logoutSubmit(Request $request): RedirectResponse
  {
    Auth::logout();

    $request->session()->invalidate();

    $request->session()->regenerateToken();

    return redirect('/');
  }
}
