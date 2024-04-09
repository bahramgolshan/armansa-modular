<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserViewAccount extends Controller
{
  public function index()
  {
    return view('content.apps.app-user-preview');
  }
}
