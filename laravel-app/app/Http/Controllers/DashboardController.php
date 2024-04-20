<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Modules\Website\App\Models\Invoice;

class DashboardController extends Controller
{
  public function index()
  {
    return redirect(route('app-invoice-list'));
  }
}
