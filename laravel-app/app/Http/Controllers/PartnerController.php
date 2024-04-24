<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Media;
use App\Models\Partner;

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

      if ($request->file('file')) {
        $media = new Media();
        $media->original_name = pathinfo($request->file->getClientOriginalName(), PATHINFO_FILENAME);
        $media->file_name = "temp";
        $media->extension = $request->file->getClientOriginalExtension();
        $media->type = strtok($request->file->getMimeType(), '/');

        if ($media->save()) {
          $media->file_name =  time() . '_' . $media->id . '.' . $media->extension;
          $media->save();

          $partner->media_id = $media->id;
          $partner->save();

          // Upload file to local
          $path = get_file_upload_path('image-partners', $media->id);
          $file = $request->file('file');
          $file->move($path, $media->file_name);

          return redirect(route('app-partner-list'))->withSuccess(__('messages.success'));
        }

        return redirect(route('app-partner-add'))->withErrors(__('messages.error'));
      }

      return redirect(route('app-partner-list'))->withSuccess(__('messages.success'));
    }

    return redirect(route('app-partner-add'))->withErrors(__('messages.error'));
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
      'file' => 'nullable|mimes:jpeg,jpg,png|max:5000', //max 5000 kb
      'is_featured' => 'nullable|string|in:true,false',
    ]);

    $id = Route::current()->parameter('id');

    $partner = Partner::find($id);
    $partner->name = $request->name;
    $partner->is_featured = $request->is_featured == 'true' ? 1 : 0;
    if ($partner->save()) {

      if ($request->file('file')) {
        $media = Media::find($partner->media_id);
        $media = is_null($media) ? new Media() : $media; //create a media if old value is null
        $media->original_name = pathinfo($request->file->getClientOriginalName(), PATHINFO_FILENAME);
        $media->file_name = "temp";
        $media->extension = $request->file->getClientOriginalExtension();
        $media->type = strtok($request->file->getMimeType(), '/');

        if ($media->save()) {
          $media->file_name =  time() . '_' . $media->id . '.' . $media->extension;
          $media->save();

          $partner->media_id = $media->id;
          $partner->save();

          // Upload file to local
          $path = get_file_upload_path('image-partners', $media->id);
          $file = $request->file('file');
          $file->move($path, $media->file_name);

          return redirect(route('app-partner-list'))->withSuccess(__('messages.success'));
        }

        return redirect(route('app-partner-add'))->withErrors(__('messages.error'));
      }

      return redirect(route('app-partner-list'))->withSuccess(__('messages.success'));
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
