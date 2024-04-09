<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Modules\Website\App\Models\Invoice;

class DashboardController extends Controller
{
  public function index()
  {
    $invoices = Invoice::orderBy('id', 'DESC')->get();
    $invoicesStatusColors = [
      'awaiting_payment' => 'warning',
      'awaiting_approval' => 'primary',
      'processing' => 'info',
      'delivered' => 'success',
      'rejected' => 'danger',
    ];

    return view('content.apps.app-invoice-list', [
      'invoices' => $invoices,
      'invoicesStatusColors' => $invoicesStatusColors,
    ]);
  }
}
