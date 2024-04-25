<?php

namespace Modules\Website\App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    if (Auth::guard('admin')->attempt($data)) {
      return redirect()->route('app-dashboard')->with('success', 'Login Successfull');
    } else {
      return redirect()->route('app-login')->with('error', 'Invalid Credentials');
    }
  }

  public function logoutSubmit(Request $request): RedirectResponse
  {
    Auth::guard('admin')->logout();

    $request->session()->invalidate();

    $request->session()->regenerateToken();

    return redirect('/');
  }
}
