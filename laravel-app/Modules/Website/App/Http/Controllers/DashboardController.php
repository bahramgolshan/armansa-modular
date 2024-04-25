<?php

namespace Modules\Website\App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class DashboardController extends Controller
{
  public function index()
  {
    return redirect()->route('dashboard.profile');
  }

  public function profile()
  {
    return view('website::dashboard.profile_dashboard');
  }

  public function cart()
  {
    return view('website::dashboard.cart_dashboard');
  }

  public function orders()
  {
    return view('website::dashboard.orders_dashboard');
  }
}
