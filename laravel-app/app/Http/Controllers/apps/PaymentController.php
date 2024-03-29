<?php

namespace App\Http\Controllers\apps;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Modules\Website\App\Models\Payment;

class PaymentController extends Controller
{
  public function index()
  {
    $payments = Payment::orderBy('id', 'DESC')->get();
    $paymentsStatusColors = [
      'success' => 'success',
      'error' => 'warning',
      'cancel' => 'danger',
    ];

    return view('content.apps.app-payment-list', [
      'payments' => $payments,
      'paymentsStatusColors' => $paymentsStatusColors,
    ]);
  }

  public function create()
  {
    //
  }

  public function store(Request $request)
  {
    //
  }

  public function show(Request $request)
  {
    $id = Route::current()->parameter('id');

    $payment = Payment::findOrFail($id);

    return view('content.apps.app-payment-preview', [
      'payment' => $payment,
    ]);
  }

  public function edit(Request $request)
  {
    //
  }

  public function update(Request $request)
  {
    //
  }

  public function destroy(Request $request)
  {
    //
  }
}
