<?php

namespace Modules\Website\App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Invoice;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class InvoiceController extends Controller
{
  public function cartIndex()
  {
    $awaitingPaymentInvoices = Invoice::where('user_id', Auth::id())->where('status', 'awaiting_payment')->get();

    return view('website::dashboard.cart_dashboard', compact('awaitingPaymentInvoices'));
  }

  public function ordersIndex()
  {
    $invoiceStatusColors = [
      'awaiting_payment' => '',
      'awaiting_approval' => 'bg-[#FFF0B9] text-[#E17640]',
      'processing' => 'bg-[#CCD3FF] text-[#3C4999]',
      'delivered' => 'bg-[#BAFDD5] text-[#51956D]',
      'rejected' => 'bg-[#FFD3D5] text-[#E30813]',
    ];

    $paidInvoices = Invoice::where('user_id', Auth::id())->where('status', '<>', 'awaiting_payment')->get();

    return view('website::dashboard.orders_dashboard', compact(
      'paidInvoices',
      'invoiceStatusColors'
    ));
  }

  public function pay(Request $request)
  {
  }

  public function show(Request $request)
  {
  }

  public function destroy(Request $request)
  {
  }
}
