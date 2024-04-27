<?php

namespace Modules\Website\App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
  public function register()
  {
    return view('website::auth.register');
  }

  public function registerSubmit(Request $request)
  {
    $request->validate([
      'full_name' => 'required|string',
      'mobile' => 'required|numeric',
      'address' => 'required|string',
      'email' => 'required|email|unique:users',
      'password' => 'required|min:6',
    ]);

    $user = new User();
    $user->full_name =  $request->get('full_name');
    $user->mobile =  $request->get('mobile');
    $user->address =  $request->get('address');
    $user->email =  $request->get('email');
    $user->password =  Hash::make($request->get('password'));
    if ($user->save()) {
      return redirect()->route('dashboard.index')->withSuccess(__('messages.error'));
    }
    return redirect()->route('register')->withErrors(__('messages.error'));
  }

  public function login()
  {
    return view('website::auth.login');
  }

  public function loginSubmit(Request $request): RedirectResponse
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
