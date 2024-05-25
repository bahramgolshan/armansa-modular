<?php

namespace App\Http\Controllers;

use App\Models\Achievement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class AchievementController extends Controller
{
  public function index()
  {
    $achievements = Achievement::orderBy('order', 'ASC')->paginate(15);

    return view('content.apps.app-achievement-list', [
      'achievements' =>  $achievements,
    ]);
  }

  public function create()
  {
    return view('content.apps.app-achievement-add');
  }

  public function store(Request $request)
  {
    $request->validate([
      'prefix' => 'required|string',
      'number' => 'required|numeric',
      'suffix' => 'required|string',
      'order' => 'nullable|numeric',
      'is_featured' => 'nullable|string',
    ]);

    $achievement = new achievement();
    $achievement->prefix = $request->prefix;
    $achievement->number = $request->number;
    $achievement->suffix = $request->suffix;
    $achievement->order = $request->order;
    $achievement->is_featured = $request->is_featured ? 1 : 0;
    if ($achievement->save()) {
      return redirect(route('app-achievement-list'))->withSuccess(__('messages.success'));
    }

    return redirect(route('app-achievement-add'))->withError(__('messages.error'));
  }

  public function show(Request $request)
  {
    $id = Route::current()->parameter('id');

    $achievement = Achievement::findOrFail($id);

    return view('content.apps.app-achievement-preview', [
      'achievement' => $achievement,
    ]);
  }

  public function edit(Request $request)
  {
    $id = Route::current()->parameter('id');

    $achievement = Achievement::findOrFail($id);

    return view('content.apps.app-achievement-edit', [
      'achievement' => $achievement,
    ]);
  }

  public function update(Request $request)
  {
    $request->validate([
      'prefix' => 'required|string',
      'number' => 'required|numeric',
      'suffix' => 'required|string',
      'order' => 'nullable|numeric',
      'is_featured' => 'nullable|string',
    ]);

    $id = Route::current()->parameter('id');

    $achievement = Achievement::find($id);
    $achievement->prefix = $request->prefix;
    $achievement->number = $request->number;
    $achievement->suffix = $request->suffix;
    $achievement->order = $request->order;
    $achievement->is_featured = $request->is_featured ? 1 : 0;
    if ($achievement->save()) {
      return redirect(route('app-achievement-list'))->withSuccess(__('messages.success'));
    }

    return redirect(route('app-achievement-edit', ['id' => $id]))->withError(__('messages.error'));
  }

  public function destroy(Request $request)
  {
    $id = Route::current()->parameter('id');

    $achievement = Achievement::find($id);
    if ($achievement->delete()) {
      return response()->json([
        'status' => 'success',
      ]);
    }

    return response()->json([
      'status' => 'error',
    ]);
  }
}
