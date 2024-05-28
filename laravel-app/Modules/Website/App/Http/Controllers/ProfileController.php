<?php

namespace Modules\Website\App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
  public function edit()
  {
    return view('website::dashboard.profile_dashboard');
  }

  public function update(Request $request)
  {
    $request->validate([
      'full_name' => 'required|string',
      'mobile' => 'required|string',
      // 'email' => 'required|email|unique:users,email,' . Auth::id(),
      'address' => 'nullable|string',
    ]);

    if (Auth::check()) {
      $user = User::findOrFail(Auth::id());
      $user->full_name = $request->full_name;
      $user->mobile = $request->mobile;
      // $user->email = $request->email;
      $user->address = $request->address;
      if ($user->save()) {
        return redirect()->route('dashboard.profile.edit')->withSuccess(__('messages.success'));
      }
    }
    return redirect()->route('dashboard.profile.edit')->withErrors(__('messages.error'));
  }
}
