<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Modules\Website\App\Models\Invoice;
use Modules\Website\App\Models\Payment;

class CustomerController extends Controller
{
  public function index()
  {
    $customers = Customer::orderby('id', 'DESC')->paginate(15);

    return view('content.apps.app-user-list', [
      'customers' => $customers,
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

    $customer = Customer::findOrfail($id);
    $invoices = Invoice::where('customer_id', $id)->orderBy('id', 'DESC')->get();
    $invoicesStatusColors = [
      'awaiting_payment' => 'warning',
      'awaiting_approval' => 'primary',
      'processing' => 'info',
      'delivered' => 'success',
      'rejected' => 'danger',
    ];

    return view('content.apps.app-user-preview', [
      'customer' => $customer,
      'invoices' => $invoices,
      'invoicesStatusColors' => $invoicesStatusColors,
    ]);
  }

  public function edit(string $id)
  {
    //
  }

  public function update(Request $request, string $id)
  {
    //
  }

  public function destroy(string $id)
  {
    //
  }
}
