<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Validation\Rule;
use App\Models\Binding;
use App\Models\BindingDirection;
use App\Models\Cellophane;
use App\Models\Color;
use App\Models\Cover;
use App\Models\Paper;
use App\Models\Service;
use App\Models\ServiceDetail;
use App\Models\Size;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
  public function index(Request $request)
  {
    $query = ServiceDetail::select('*');

    if ($request->filled('service_id')) $query->where('service_id', $request->get('service_id'));
    if ($request->filled('size_id')) $query->where('size_id', $request->get('size_id'));
    if ($request->filled('paper_id')) $query->where('paper_id', $request->get('paper_id'));
    if ($request->filled('color_id')) $query->where('color_id', $request->get('color_id'));
    if ($request->filled('binding_id')) $query->where('binding_id', $request->get('binding_id'));
    if ($request->filled('cellophane_id')) $query->where('cellophane_id', $request->get('cellophane_id'));
    if ($request->filled('binding_direction_id')) $query->where('binding_direction_id', $request->get('binding_direction_id'));
    if ($request->filled('status')) $query->where('status', $request->get('status'));

    $serviceDetails = $query->orderBy('created_at', 'DESC')->paginate(15);

    $digitalPrintData = [];
    $digitalPrintData['services'] = Service::all();
    $digitalPrintData['sizes'] = Size::all();
    $digitalPrintData['papers'] = Paper::all();
    $digitalPrintData['colors'] = Color::all();
    $digitalPrintData['bindings'] = Binding::all();
    $digitalPrintData['bindingDirections'] = BindingDirection::all();
    $digitalPrintData['cellophanes'] = Cellophane::all();
    $digitalPrintData['covers'] = Cover::all();
    $serviceDetailStatus = ServiceDetail::$status;

    return view('content.apps.app-product-list', [
      'serviceDetails' => $serviceDetails,
      'serviceDetailStatus' => $serviceDetailStatus,
      'digitalPrintData' => $digitalPrintData,
      'query' => $request->except('_token'),
    ]);
  }

  public function create()
  {
    $services = Service::all();

    // Get drop-down data for digital-print form
    $digitalPrintData = [];
    $digitalPrintData['sizes'] = Size::all();
    $digitalPrintData['papers'] = Paper::all();
    $digitalPrintData['colors'] = Color::all();
    $digitalPrintData['bindings'] = Binding::all();
    $digitalPrintData['bindingDirections'] = BindingDirection::all();
    $digitalPrintData['cellophanes'] = Cellophane::all();
    $digitalPrintData['covers'] = Cover::all();
    $discountTypes = ServiceDetail::$discountTypes;
    $status = ServiceDetail::$status;

    return view('content.apps.app-product-add', [
      'services' => $services,
      'digitalPrintData' => $digitalPrintData,
      'discountTypes' => $discountTypes,
      'status' => $status,
    ]);
  }

  public function store(Request $request)
  {
    $request->validate([
      'service_id' => 'required|numeric|min:0|max:10000',
      'size_id' => 'required|numeric|min:0|max:10000',
      'paper_id' => 'required|numeric|min:0|max:10000',
      'color_id' => 'required|numeric|min:0|max:10000',
      'cover_id' => 'required|numeric|min:0|max:10000',
      'binding_id' => 'required|numeric|min:0|max:10000',
      'cellophane_id' => 'required|numeric|min:0|max:10000',
      'binding_direction_id' => 'required|numeric|min:0|max:10000',
      'price' => 'required|numeric|min:0',
      'discount' => 'nullable|numeric|min:0',
      'discount_type' => ['required', Rule::in(ServiceDetail::$discountTypes)],
      'status' => ['required', Rule::in(ServiceDetail::$status)],
    ]);

    $serviceDetail = new ServiceDetail();
    $serviceDetail->service_id = $request->service_id;
    $serviceDetail->size_id = $request->size_id;
    $serviceDetail->paper_id = $request->paper_id;
    $serviceDetail->color_id = $request->color_id;
    $serviceDetail->cover_id = $request->cover_id;
    $serviceDetail->binding_id = $request->binding_id;
    $serviceDetail->cellophane_id = $request->cellophane_id;
    $serviceDetail->binding_direction_id = $request->binding_direction_id;
    $serviceDetail->discount = $request->discount ?? 0;
    $serviceDetail->discount_type = $request->discount_type;
    $serviceDetail->price = $request->price;
    $serviceDetail->status = $request->status;
    if ($serviceDetail->save()) {
      return redirect(route('app-product-list'))->withSuccess(__('messages.success'));
    }

    return redirect(route('app-product-add'))->withError(__('messages.error'));
  }

  public function show()
  {
    $id = Route::current()->parameter('id');
    $serviceDetail = ServiceDetail::findOrFail($id);

    return view('content.apps.app-product-preview', [
      'serviceDetail' => $serviceDetail,
    ]);
  }

  public function edit()
  {
    $id = Route::current()->parameter('id');
    $serviceDetail = ServiceDetail::findOrFail($id);

    $services = Service::all();
    // Get drop-down data for digital-print form
    $digitalPrintData = [];
    $digitalPrintData['sizes'] = Size::all();
    $digitalPrintData['papers'] = Paper::all();
    $digitalPrintData['colors'] = Color::all();
    $digitalPrintData['bindings'] = Binding::all();
    $digitalPrintData['bindingDirections'] = BindingDirection::all();
    $digitalPrintData['cellophanes'] = Cellophane::all();
    $digitalPrintData['covers'] = Cover::all();
    $discountTypes = ServiceDetail::$discountTypes;
    $status = ServiceDetail::$status;

    return view('content.apps.app-product-edit', [
      'serviceDetail' => $serviceDetail,
      'services' => $services,
      'digitalPrintData' => $digitalPrintData,
      'discountTypes' => $discountTypes,
      'status' => $status,
    ]);
  }

  public function update(Request $request)
  {
    $request->validate([
      'service_id' => 'required|numeric|min:0|max:10000',
      'size_id' => 'required|numeric|min:0|max:10000',
      'paper_id' => 'required|numeric|min:0|max:10000',
      'color_id' => 'required|numeric|min:0|max:10000',
      'cover_id' => 'required|numeric|min:0|max:10000',
      'binding_id' => 'required|numeric|min:0|max:10000',
      'cellophane_id' => 'required|numeric|min:0|max:10000',
      'binding_direction_id' => 'required|numeric|min:0|max:10000',
      'price' => 'required|numeric|min:0',
      'discount' => 'nullable|numeric|min:0',
      'discount_type' => ['required', Rule::in(ServiceDetail::$discountTypes)],
      'status' => ['required', Rule::in(ServiceDetail::$status)],
    ]);

    $id = Route::current()->parameter('id');

    $serviceDetail = ServiceDetail::findOrFail($id);
    $serviceDetail->service_id = $request->service_id;
    $serviceDetail->size_id = $request->size_id;
    $serviceDetail->paper_id = $request->paper_id;
    $serviceDetail->color_id = $request->color_id;
    $serviceDetail->cover_id = $request->cover_id;
    $serviceDetail->binding_id = $request->binding_id;
    $serviceDetail->cellophane_id = $request->cellophane_id;
    $serviceDetail->binding_direction_id = $request->binding_direction_id;
    $serviceDetail->discount = $request->discount ?? 0;
    $serviceDetail->discount_type = $request->discount_type;
    $serviceDetail->price = $request->price;
    $serviceDetail->status = $request->status;
    if ($serviceDetail->save()) {
      return redirect(route('app-product-list'))->withSuccess(__('messages.success'));
    }

    return redirect(route('app-product-edit', ['id' => $id]))->withError(__('messages.error'));
  }

  public function destroy(Request $request)
  {
    $id = Route::current()->parameter('id');

    $serviceDetail = ServiceDetail::find($id);
    if ($serviceDetail->delete()) {
      return response()->json([
        'status' => 'success',
      ]);
    }

    return response()->json([
      'status' => 'error',
    ]);
  }
}
