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
use App\Models\ServiceDetail;
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

    $faqs = Faq::orderBy('order', 'ASC')->get();

    return view('website::services.print-digital.create-form', compact(
      'digitalPrintData',
      'faqs',
    ));
  }

  public function store(Request $request)
  {
    dd('PrintDigitalController@store', $request->all());
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
    $request->validate([
      'service' => 'required|numeric|min:0|max:10000',
      'size' => ['required', Rule::in(Size::$codes)],
      'paper' => ['required', Rule::in(Paper::$codes)],
      'color' => ['required', Rule::in(Color::$codes)],
      'number-of-pages' => 'required|numeric|min:0|max:100000',
      'circulation' => 'required|numeric|min:0|max:1000000000',
      'cover' => ['required', Rule::in(Cover::$codes)],
      'binding' => ['required', Rule::in(Binding::$codes)],
      'cellophane' => ['required', Rule::in(Cellophane::$codes)],
      'binding-direction' => ['required', Rule::in(['fa_v', 'fa_h', 'en_v', 'en_h'])],
    ]);

    $sizeId = Size::where('code', $request->size)->first()->id;
    $colorId = Color::where('code', $request->color)->first()->id;
    $paperId = Paper::where('code', $request->paper)->first()->id;
    $bindingId = Binding::where('code', $request->binding)->first()->id;
    $cellophaneId = Cellophane::where('code', $request->cellophane)->first()->id;
    $coverId = Cover::where('code', $request->cover)->first()->id;
    $bindingDirectionId = BindingDirection::where('code', $request->get('binding-direction'))->first()->id;

    $serviceDetail = ServiceDetail::where([
      'service_id' => $request->service,
      'size_id' => $sizeId,
      'color_id' => $colorId,
      'paper_id' => $paperId,
      'binding_id' => $bindingId,
      'cellophane_id' => $cellophaneId,
      'cover_id' => $coverId,
      'binding_direction_id' => $bindingDirectionId,
      'status' => 'publish'
    ])
      ->first();

    if (isset($serviceDetail)) {
      if (isset($serviceDetail->price)) {
        $price = $serviceDetail->price;
        $discount = $serviceDetail->discount;
        $discountType = $serviceDetail->discount_type;
        $finalPrice = $serviceDetail->discount_type;

        return response()->json([
          'status' => 'success',
          'message' => null,
          'data' => [
            'price' => $price,
            'discount' => $discount,
            'discount_type' => $discountType,
            'final_price' => $finalPrice,
          ]
        ]);
      }

      return response()->json([
        'status' => 'error',
        'message' => 'برای استعلام قیمت لطفا تماس بگیرید',
        'data' => null,
      ]);
    }

    return response()->json([
      'status' => 'error',
      'message' => 'برای استعلام قیمت لطفا تماس بگیرید',
      'data' => null,
    ]);
  }
}
