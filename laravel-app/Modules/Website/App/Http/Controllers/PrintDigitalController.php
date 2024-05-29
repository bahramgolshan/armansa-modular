<?php

namespace Modules\Website\App\Http\Controllers;

use App\Models\Achievement;
use App\Models\Binding;
use App\Models\Cellophane;
use App\Models\Color;
use App\Models\Cover;
use App\Models\Faq;
use App\Models\Paper;
use App\Models\Partner;
use App\Models\Service;
use App\Models\ServiceSample;
use App\Models\Setting;
use App\Models\Size;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\BindingDirection;
use App\Models\Invoice;
use App\Models\InvoiceDetail;
use App\Models\InvoiceDetailFile;
use App\Models\ServiceDetail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class PrintDigitalController extends Controller
{
  public function index()
  {
    //
  }

  public function create()
  {
    // Get drop-down data for print-digital form
    $digitalPrintData = [];
    $digitalPrintData['service_id'] = Service::where('code', 'digital-print')->first()->id;
    $digitalPrintData['sizes'] = Size::all();
    $digitalPrintData['papers'] = Paper::all();
    $digitalPrintData['colors'] = Color::all();
    $digitalPrintData['bindings'] = Binding::all();
    $digitalPrintData['cellophanes'] = Cellophane::all();
    $digitalPrintData['covers'] = Cover::all();
    $digitalPrintData['binding_directions'] = BindingDirection::all();

    $faqs = Faq::orderBy('order', 'ASC')->get();

    return view('website::services.print-digital.create-form', compact(
      'digitalPrintData',
      'faqs',
    ));
  }

  public function store(Request $request)
  {
    $request->validate([
      'service_id' => 'required|numeric',
      'size_id' => 'required|numeric',
      'paper_id' => 'required|numeric',
      'color_id' => 'required|numeric',
      'cover_id' => 'required|numeric',
      'binding_id' => 'required|numeric',
      'cellophane_id' => 'required|numeric',
      'binding_direction_id' => 'required|numeric',
      'pages' => 'required|numeric|min:0|max:100000',
      'circulation' => 'required|numeric|min:0|max:1000000000',
      'file_content' => 'required|mimetypes:application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document,application/pdf,application/x-indesign|max:10240',
      'file_cover' => 'required|mimetypes:image/*,application/pdf|max:10240',
      'service_detail_id' => 'required|numeric',
      'additional_discount' => 'required|numeric',
      'additional_price' => 'required|numeric',
      'tax' => 'required|numeric',
      'final_price' => 'required|numeric',
    ]);

    if (Auth::check()) {
      $invoice = new Invoice();
      $invoice->user_id = Auth::id();
      $invoice->status = 'awaiting_payment';
      $invoice->additional_discount = $request->additional_discount;
      $invoice->additional_price = $request->additional_price;
      $invoice->tax = $request->tax;
      $invoice->final_price = $request->final_price;
      $invoice->reference_code = Auth::id() . '-' . time();

      if ($invoice->save()) {
        $invoiceDetail = new InvoiceDetail();
        $invoiceDetail->invoice_id = $invoice->id;
        $invoiceDetail->service_detail_id = $request->service_detail_id;
        $invoiceDetail->quantity = null;
        $invoiceDetail->circulation = $request->circulation;
        $invoiceDetail->pages = $request->pages;

        if ($invoiceDetail->save()) {
          $fileName = $invoiceDetail->id . '_' . time();

          if ($request->file('file_content')) {
            $invoiceDetailFileContent = new InvoiceDetailFile();
            $invoiceDetailFileContent->invoice_detail_id = $invoiceDetail->id;
            $invoiceDetailFileContent->original_name = pathinfo($request->file_content->getClientOriginalName(), PATHINFO_FILENAME);
            $invoiceDetailFileContent->file_name = 'content_' . $fileName . '.' . $request->file_content->getClientOriginalExtension();
            $invoiceDetailFileContent->extension = $request->file_content->getClientOriginalExtension();
            $invoiceDetailFileContent->type = 'file_content';

            if ($invoiceDetailFileContent->save()) {
              $path = get_file_upload_path('invoice-detail-files', $invoiceDetail->id);
              $fileContent = $request->file('file_content');
              $fileContent->move($path, $invoiceDetailFileContent->file_name);
            }
          }

          if ($request->file('file_cover')) {
            $invoiceDetailFileCover = new InvoiceDetailFile();
            $invoiceDetailFileCover->invoice_detail_id = $invoiceDetail->id;
            $invoiceDetailFileCover->original_name = pathinfo($request->file_cover->getClientOriginalName(), PATHINFO_FILENAME);
            $invoiceDetailFileCover->file_name = 'cover_' . $fileName . '.' . $request->file_cover->getClientOriginalExtension();
            $invoiceDetailFileCover->extension = $request->file_cover->getClientOriginalExtension();
            $invoiceDetailFileCover->type = 'file_cover';

            if ($invoiceDetailFileCover->save()) {
              $path = get_file_upload_path('invoice-detail-files', $invoiceDetail->id);
              $fileContent = $request->file('file_cover');
              $fileContent->move($path, $invoiceDetailFileCover->file_name);
            }
          }

          return redirect()->route('dashboard.cart')->withSuccess(__('messages.success'));
        }

        return redirect()->route('service.print-digital.create')->withErrors(__('messages.error'));
      }

      return redirect()->route('service.print-digital.create')->withErrors(__('messages.error'));
    }

    return redirect()->route('login')->withErrors('You do not have permission!');
  }

  public function show($id)
  {
    //
  }

  public function edit($id)
  {
    //
  }

  public function update(Request $request, $id)
  {
    //
  }

  public function destroy($id)
  {
    //
  }

  public function inquiry(Request $request)
  {
    $query = $request->validate([
      'service_id' => 'required|numeric',
      'size_id' => 'required|numeric',
      'paper_id' => 'required|numeric',
      'color_id' => 'required|numeric',
      'cover_id' => 'required|numeric',
      'binding_id' => 'required|numeric',
      'cellophane_id' => 'required|numeric',
      'binding_direction_id' => 'required|numeric',
      // 'pages' => 'required|numeric|min:0|max:100000',
      // 'circulation' => 'required|numeric|min:0|max:1000000000',
    ]);

    $serviceDetail = ServiceDetail::where($query)
      ->where('status', 'publish')
      ->first();

    if (isset($serviceDetail)) {
      if (isset($serviceDetail->price)) {
        // Extract necessary data
        $id = $serviceDetail->id;
        $price = $serviceDetail->price;
        $discount = $serviceDetail->discount;
        $discountType = $serviceDetail->discount_type;
        $additionalDiscount = 0;
        $additionalPrice = 0;
        $tax = 0;

        // Calculate final_price
        if ($discountType == 'percent') {
          $finalPrice = $price - ($price * ($discount / 100));
        } else {
          $finalPrice = $price - $discount;
        }

        return response()->json([
          'status' => 'success',
          'message' => null,
          'data' => [
            'service_detail_id' => $id,
            'price' => $price,
            'discount' => $discount,
            'discount_type' => $discountType,
            'additional_discount' => $additionalDiscount,
            'additional_price' => $additionalPrice,
            'tax' => $tax,
            'final_price' => $finalPrice,
          ],
        ]);
      }

      return response()->json([
        'status' => 'error',
        'message' => 'برای استعلام قیمت لطفا تماس بگیرید',
        'data' => [
          'service_detail_id' => $serviceDetail->id,
        ],
      ]);
    }

    return response()->json([
      'status' => 'error',
      'message' => 'برای استعلام قیمت لطفا تماس بگیرید',
      'data' => null,
    ]);
  }
}
