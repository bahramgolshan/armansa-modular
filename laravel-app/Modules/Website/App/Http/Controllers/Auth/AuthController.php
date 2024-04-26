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

  public function authenticate(Request $request): RedirectResponse
  {
    $credentials = $request->validate([
      'email' => ['required', 'email'],
      'password' => ['required'],
    ]);

    if (Auth::attempt($credentials)) {
      $request->session()->regenerate();

      return redirect()->intended('dashboard');
    }

    return back()->withErrors([
      'email' => 'The provided credentials do not match our records.',
    ])->onlyInput('email');
  }

  public function logout(Request $request): RedirectResponse
  {
    Auth::logout();

    $request->session()->invalidate();

    $request->session()->regenerateToken();

    return redirect()->route('home');
  }
}
