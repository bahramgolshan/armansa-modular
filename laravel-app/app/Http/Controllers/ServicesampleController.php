<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Modules\Website\App\Models\Service;
use Modules\Website\App\Models\ServiceSample;

class ServicesampleController extends Controller
{
  public function index()
  {
    $serviceSamples = ServiceSample::orderBy('order', 'ASC')->get();

    return view('content.apps.app-servicesample-list', [
      'serviceSamples' =>   $serviceSamples,
    ]);
  }

  public function create()
  {
    $services = Service::all();

    return view('content.apps.app-servicesample-add', [
      'services' => $services,
    ]);
  }

  public function store(Request $request)
  {
    $request->validate([
      'title' => 'required|string',
      'description' => 'required|string',
      'order' => 'nullable|numeric',
      'service_id' => 'nullable|numeric',
      'file' => 'required|mimes:jpeg,jpg,png|max:5000', //max 5000 kb
      'is_featured' => 'nullable|string|in:true,false',
    ]);

    $serviceSample = new ServiceSample();
    $serviceSample->title = $request->title;
    $serviceSample->description = $request->description;
    $serviceSample->order = $request->order;
    $serviceSample->service_id = $request->service_id;
    $serviceSample->media_id = null;
    $serviceSample->is_featured = $request->is_featured == 'true' ? 1 : 0;

    if ($serviceSample->save()) {

      // @TODO: Create media and update media_id
      //...

      return redirect(route('app-servicesample-list'))->withError(__('messages.success'));
    }

    return redirect(route('app-servicesample-add'))->withError(__('messages.error'));
  }

  public function show(Request $request)
  {
    $id = Route::current()->parameter('id');

    $serviceSample = ServiceSample::findOrFail($id);

    return view('content.apps.app-servicesample-preview', [
      'serviceSample' =>  $serviceSample,
    ]);
  }

  public function edit(Request $request)
  {
    $id = Route::current()->parameter('id');

    $serviceSample = ServiceSample::findOrFail($id);
    $services = Service::all();

    return view('content.apps.app-servicesample-edit', [
      'serviceSample' =>  $serviceSample,
      'services' =>  $services,
    ]);
  }

  public function update(Request $request)
  {
    $request->validate([
      'name' => 'required|string',
      'file' => 'required|mimes:jpeg,jpg,png|max:5000', //max 5000 kb
      'is_featured' => 'nullable|string|in:true,false',
    ]);

    $id = Route::current()->parameter('id');

    $serviceSample = ServiceSample::find($id);
    $serviceSample->name = $request->name;
    $serviceSample->media_id = null;
    $serviceSample->is_featured = $request->is_featured == 'true' ? 1 : 0;
    if ($serviceSample->save()) {

      // @TODO: Create media and update media_id
      //...

      return redirect(route('app-servicesample-list'))->withError(__('messages.success'));
    }

    return redirect(route('app-servicesample-edit', ['id' => $id]))->withError(__('messages.error'));
  }

  public function destroy(Request $request)
  {
    $id = Route::current()->parameter('id');

    $serviceSample = ServiceSample::find($id);
    if ($serviceSample->delete()) {
      return response()->json([
        'status' => 'success',
      ]);
    }

    return response()->json([
      'status' => 'error',
    ]);
  }
}
