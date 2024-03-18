<?php

namespace Modules\Website\App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontController extends Controller
{

  public function index()
  {
    return view('website::pages.static_lithography');
  }
}
