<?php

namespace App\Http\Controllers\apps;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Modules\Website\App\Models\BlogCategory;

class BlogCategoryController extends Controller
{
  public function index()
  {
    $blogCategories = BlogCategory::orderBy('id', 'DESC')->get();
    return view('content.apps.app-blogcategory-list', [
      'blogCategories' => $blogCategories,
    ]);
  }

  public function create()
  {
    return view('content.apps.app-blogcategory-add');
  }

  public function store(Request $request)
  {
    $request->validate([
      'name' => 'required|string',
      'slug' => 'required|string',
      'description' => 'nullable|string',
    ]);

    $blogCategory = new BlogCategory();
    $blogCategory->name = $request->name;
    $blogCategory->slug = $request->slug;
    $blogCategory->description = $request->description;
    if ($blogCategory->save()) {
      return redirect(route('app-blog-category-list'))->withError(__('messages.success'));
    }

    return redirect(route('app-blog-category-add'))->withError(__('messages.error'));
  }

  public function show(Request $request)
  {
    $id = Route::current()->parameter('id');

    $blogCategory = BlogCategory::findOrFail($id);

    return view('content.apps.app-blogcategory-preview', [
      'blogCategory' => $blogCategory,
    ]);
  }

  public function edit()
  {
    $id = Route::current()->parameter('id');

    $blogCategory = BlogCategory::findOrFail($id);

    return view('content.apps.app-blogcategory-edit', [
      'blogCategory' => $blogCategory,
    ]);
  }

  public function update(Request $request)
  {
    $request->validate([
      'name' => 'required|string',
      'slug' => 'required|string',
      'description' => 'nullable|string',
    ]);

    $id = Route::current()->parameter('id');

    $blogCategory = BlogCategory::find($id);
    $blogCategory->name = $request->name;
    $blogCategory->slug = $request->slug;
    $blogCategory->description = $request->description;
    if ($blogCategory->save()) {
      return redirect(route('app-blog-category-list'))->withError(__('messages.success'));
    }

    return redirect(route('app-blog-category-edit', ['id' => $id]))->withError(__('messages.error'));
  }

  public function destroy(Request $request)
  {
    $id = Route::current()->parameter('id');

    $blogCategory = BlogCategory::find($id);
    if ($blogCategory->delete()) {
      return response()->json([
        'status' => 'success',
      ]);
    }

    return response()->json([
      'status' => 'error',
    ]);
  }
}
