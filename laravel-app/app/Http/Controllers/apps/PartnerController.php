<?php

namespace App\Http\Controllers\apps;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Modules\Website\App\Models\Partner;

class PartnerController extends Controller
{
  public function index()
  {
    $partners = Partner::orderBy('id', 'DESC')->get();

    return view('content.apps.app-partner-list', [
      'partners' =>   $partners,
    ]);
  }

  public function create()
  {
    return view('content.apps.app-partner-add');
  }

  public function store(Request $request)
  {
    $request->validate([
      'name' => 'required|string',
      'file' => 'required|mimes:jpeg,jpg,png|max:5000', //max 5000 kb
      'is_featured' => 'nullable|string|in:true,false',
    ]);

    $partner = new Partner();
    $partner->name = $request->name;
    $partner->media_id = null;
    $partner->is_featured = $request->is_featured == 'true' ? 1 : 0;
    if ($partner->save()) {

      // @TODO: Create media and update media_id
      //...

      return redirect(route('app-partner-list'))->withError(__('messages.success'));
    }

    return redirect(route('app-partner-add'))->withError(__('messages.error'));
  }

  public function show(Request $request)
  {
    $id = Route::current()->parameter('id');

    $partner = Partner::findOrFail($id);

    return view('content.apps.app-partner-preview', [
      'partner' =>  $partner,
    ]);
  }

  public function edit(Request $request)
  {
    $id = Route::current()->parameter('id');

    $partner = Partner::findOrFail($id);

    return view('content.apps.app-partner-edit', [
      'partner' =>  $partner,
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

    $partner = Partner::find($id);
    $partner->name = $request->name;
    $partner->media_id = null;
    $partner->is_featured = $request->is_featured == 'true' ? 1 : 0;
    if ($partner->save()) {

      // @TODO: Create media and update media_id
      //...

      return redirect(route('app-partner-list'))->withError(__('messages.success'));
    }

    return redirect(route('app-partner-edit', ['id' => $id]))->withError(__('messages.error'));
  }

  public function destroy(Request $request)
  {
    $id = Route::current()->parameter('id');

    $partner = Partner::find($id);
    if ($partner->delete()) {
      return response()->json([
        'status' => 'success',
      ]);
    }

    return response()->json([
      'status' => 'error',
    ]);
  }
}
