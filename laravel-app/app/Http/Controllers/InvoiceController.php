<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Validation\Rule;
use App\Models\Invoice;
use App\Models\InvoiceDetail;
use App\Models\InvoiceDetailFile;
use App\Models\Payment;

class InvoiceController extends Controller
{
  public function index()
  {
    $invoices = Invoice::orderBy('id', 'DESC')->paginate(15);
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

  public function create()
  {
    return view('content.apps.app-invoice-add');
  }

  public function store(Request $request)
  {
    //
  }

  public function show(Request $request)
  {
    $id = Route::current()->parameter('id');

    $invoice = Invoice::findOrFail($id);
    $invoicesStatusColors = [
      'awaiting_payment' => 'warning',
      'awaiting_approval' => 'primary',
      'processing' => 'info',
      'delivered' => 'success',
      'rejected' => 'danger',
    ];

    $invoiceDetail = InvoiceDetail::where('invoice_id', $id)->first();
    $fileContent = InvoiceDetailFile::where('invoice_detail_id', $invoiceDetail->id)->where('type', 'file_content')->first();
    $fileCover = InvoiceDetailFile::where('invoice_detail_id', $invoiceDetail->id)->where('type', 'file_cover')->first();

    $payments = Payment::where('invoice_id', $id)->get();
    $paymentStatusColors = [
      'success' => 'success',
      'error' => 'warning',
      'cancel' => 'danger',
    ];

    return view('content.apps.app-invoice-preview', [
      'invoice' => $invoice,
      'invoicesStatusColors' => $invoicesStatusColors,
      'invoiceDetail' => $invoiceDetail,
      'fileContent' => $fileContent,
      'fileCover' => $fileCover,
      'payments' => $payments,
      'paymentStatusColors' => $paymentStatusColors,
    ]);
  }

  public function edit(string $id)
  {
    return view('content.apps.app-invoice-edit');
  }

  public function editStatus(Request $request)
  {
    $request->validate([
      'status' => ['required', Rule::in(Invoice::$status)],
    ]);

    $id = Route::current()->parameter('id');
    $invoice = Invoice::findOrFail($id);
    $invoice->status = $request->status;
    if ($invoice->save()) {
      return response()->json([
        'status' => 'success',
      ]);
    }

    return response()->json([
      'status' => 'error',
    ]);
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
