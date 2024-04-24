<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Tag;

class TagController extends Controller
{
  public function index()
  {
    $tags = Tag::orderBy('id', 'DESC')->get();

    return view('content.apps.app-tag-list', [
      'tags' => $tags,
    ]);
  }

  public function create()
  {
    return view('content.apps.app-tag-add');
  }

  public function store(Request $request)
  {
    $request->validate([
      'name' => 'required|string',
      'slug' => 'required|string',
    ]);

    $tag = new Tag();
    $tag->name = $request->name;
    $tag->slug = $request->slug;
    if ($tag->save()) {
      return redirect(route('app-tag-list'))->withSuccess(__('messages.success'));
    }

    return redirect(route('app-tag-add'))->withError(__('messages.error'));
  }

  public function show(Request $request)
  {
    $id = Route::current()->parameter('id');

    $tag = Tag::findOrFail($id);

    return view('content.apps.app-tag-preview', [
      'tag' => $tag,
    ]);
  }

  public function edit(Request $request)
  {
    $id = Route::current()->parameter('id');

    $tag = Tag::findOrFail($id);

    return view('content.apps.app-tag-edit', [
      'tag' => $tag,
    ]);
  }

  public function update(Request $request)
  {
    $request->validate([
      'name' => 'required|string',
      'slug' => 'required|string',
    ]);

    $id = Route::current()->parameter('id');

    $tag = Tag::find($id);
    $tag->name = $request->name;
    $tag->slug = $request->slug;
    if ($tag->save()) {
      return redirect(route('app-tag-list'))->withSuccess(__('messages.success'));
    }

    return redirect(route('app-tag-edit', ['id' => $id]))->withError(__('messages.error'));
  }

  public function destroy(Request $request)
  {
    $id = Route::current()->parameter('id');

    $tag = Tag::find($id);
    if ($tag->delete()) {
      return response()->json([
        'status' => 'success',
      ]);
    }

    return response()->json([
      'status' => 'error',
    ]);
  }
}
