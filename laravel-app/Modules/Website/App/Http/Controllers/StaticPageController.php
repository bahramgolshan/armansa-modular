<?php

namespace Modules\Website\App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StaticPageController extends Controller
{

  public function staticEditing()
  {
    return view('website::pages.static_editing');
  }

  public function staticLayout()
  {
    return view('website::pages.static_layout');
  }


  public function staticLithography()
  {
    return view('website::pages.static_lithography');
  }

  public function staticLicense()
  {
    return view('website::pages.static_license');
  }
}
