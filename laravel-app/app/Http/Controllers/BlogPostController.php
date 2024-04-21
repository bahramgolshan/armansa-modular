<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Validation\Rule;
use Modules\Website\App\Models\BlogCategory;
use Modules\Website\App\Models\BlogPost;
use Modules\Website\App\Models\Media;
use Symfony\Component\Console\Input\Input;
use Stevebauman\Purify\Facades\Purify;

class BlogPostController extends Controller
{
  public function index()
  {
    $blogPosts = BlogPost::orderBy('id', 'DESC')->get();
    $blogPostsStatusColors = [
      'publish' => 'primary',
      'draft' => 'secondary',
    ];

    return view('content.apps.app-blog-list', [
      'blogPosts' => $blogPosts,
      'blogPostsStatusColors' => $blogPostsStatusColors,
    ]);
  }

  public function create()
  {
    $blogCategories = BlogCategory::all();

    return view('content.apps.app-blog-add', [
      'blogCategories' => $blogCategories,
    ]);
  }

  public function store(Request $request)
  {
    $request->validate([
      'title' => 'required|string',
      'content' => 'required|string',
      'meta_keyword' => 'nullable|string',
      'meta_description' => 'nullable|string',
      'blog_category_id' => 'required|numeric',
      'summary' => 'required|string',
      'file' => 'nullable|mimes:jpeg,jpg,png|max:5000',
      'slug' => 'required|string',
      'status' => ['required', Rule::in(BlogPost::$status)],
      'allow_comments' => 'nullable|string|in:true,false',
      'is_featured' => 'nullable|string|in:true,false',
    ]);

    $blogPost = new BlogPost();
    $blogPost->title = $request->title;
    // $blogPost->content = Purify::clean($request->content);
    $blogPost->content = $request->content;

    // foreach (json_decode($request->meta_keyword) as $keyword) {
    //   $keywordsArray[] = $keyword->value;
    // }
    // $blogPost->meta_keyword = implode(',', $keywordsArray);
    $array = json_decode($request->meta_keyword, true);
    if (is_array($array)) {

      $keywords = array_map(function ($item) {
        return $item['value'];
      }, $array);
      $blogPost->meta_keyword = implode(', ', $keywords);
    }

    $blogPost->meta_description = $request->meta_description;
    $blogPost->blog_category_id = $request->blog_category_id;
    $blogPost->summary = $request->summary;
    $blogPost->media_id = null;
    $blogPost->slug = $request->slug;
    $blogPost->status = $request->status;
    $blogPost->allow_comments = $request->allow_comments == 'true' ? 1 : 0;
    $blogPost->is_featured = $request->is_featured == 'true' ? 1 : 0;
    $blogPost->created_by = Auth::id() ?? 1;
    if ($blogPost->save()) {

      if ($request->file('file')) {
        $media = new Media();
        $media->original_name = pathinfo($request->file->getClientOriginalName(), PATHINFO_FILENAME);
        $media->file_name = "temp";
        $media->extension = $request->file->getClientOriginalExtension();
        $media->type = strtok($request->file->getMimeType(), '/');

        if ($media->save()) {
          $media->file_name =  time() . '_' . $media->id . '.' . $media->extension;
          $media->save();

          $blogPost->media_id = $media->id;
          $blogPost->save();

          // Upload file to local
          $path = get_file_upload_path('image-blog-posts', $media->id);
          $file = $request->file('file');
          $file->move($path, $media->file_name);

          return redirect(route('app-blog-list'))->withSuccess(__('messages.success'));
        }

        return redirect(route('app-blog-add'))->withErrors(__('messages.error'));
      }

      return redirect(route('app-blog-list'))->withSuccess(__('messages.success'));
    }

    return redirect(route('app-blog-add'))->withError(__('messages.error'));
  }

  public function show(Request $request)
  {
    $id = Route::current()->parameter('id');

    $blogPost = BlogPost::findOrFail($id);

    return view('content.apps.app-blog-preview', [
      'blogPost' => $blogPost,
    ]);
  }

  public function edit(Request $request)
  {
    $id = Route::current()->parameter('id');

    $blogPost = BlogPost::findOrFail($id);
    $blogCategories = BlogCategory::all();

    return view('content.apps.app-blog-edit', [
      'blogPost' => $blogPost,
      'blogCategories' => $blogCategories,
    ]);
  }

  public function update(Request $request)
  {
    $request->validate([
      'title' => 'required|string',
      'content' => 'required|string',
      'meta_keyword' => 'nullable|string',
      'meta_description' => 'nullable|string',
      'blog_category_id' => 'required|numeric',
      'summary' => 'required|string',
      'media' => 'nullable|mimes:jpeg,jpg,png|max:5000',
      'slug' => 'required|string',
      'status' => ['required', Rule::in(BlogPost::$status)],
      'allow_comments' => 'required|string|in:true,false',
      'is_featured' => 'nullable|string|in:true,false',
    ]);

    $id = Route::current()->parameter('id');

    $blogPost = BlogPost::findOrFail($id);
    $blogPost->title = $request->title;
    $blogPost->content = $request->content;


    // foreach (json_decode($request->meta_keyword) as $keyword) {
    //   $keywordsArray[] = $keyword->value;
    // }
    // $blogPost->meta_keyword = implode(',', $keywordsArray);
    $array = json_decode($request->meta_keyword, true);
    if (is_array($array)) {

      $keywords = array_map(function ($item) {
        return $item['value'];
      }, $array);
      $blogPost->meta_keyword = implode(', ', $keywords);
    }


    $blogPost->meta_description = $request->meta_description;
    $blogPost->blog_category_id = $request->blog_category_id;
    $blogPost->summary = $request->summary;
    $blogPost->media_id = null;
    $blogPost->slug = $request->slug;
    $blogPost->status = $request->status;
    $blogPost->allow_comments = $request->allow_comments == 'true' ? 1 : 0;
    $blogPost->is_featured = $request->is_featured == 'true' ? 1 : 0;
    $blogPost->created_by = Auth::id() ?? 1;
    if ($blogPost->save()) {

      if ($request->file('file')) {
        $media = Media::find($blogPost->media_id);
        $media = is_null($media) ? new Media() : $media; //create a media if old value is null
        $media->original_name = pathinfo($request->file->getClientOriginalName(), PATHINFO_FILENAME);
        $media->file_name = "temp";
        $media->extension = $request->file->getClientOriginalExtension();
        $media->type = strtok($request->file->getMimeType(), '/');

        if ($media->save()) {
          $media->file_name =  time() . '_' . $media->id . '.' . $media->extension;
          $media->save();

          $blogPost->media_id = $media->id;
          $blogPost->save();

          // Upload file to local
          $path = get_file_upload_path('image-blog-posts', $media->id);
          $file = $request->file('file');
          $file->move($path, $media->file_name);

          return redirect(route('app-blog-list'))->withSuccess(__('messages.success'));
        }

        return redirect(route('app-blog-edit'))->withErrors(__('messages.error'));
      }

      return redirect(route('app-blog-list'))->withSuccess(__('messages.success'));
    }

    return redirect(route('app-blog-edit', ['id' => $id]))->withError(__('messages.error'));
  }

  public function destroy(Request $request)
  {
    $id = Route::current()->parameter('id');

    $blogPost = BlogPost::findOrFail($id);
    if ($blogPost->delete()) {
      return response()->json([
        'status' => 'success',
      ]);
    }

    return response()->json([
      'status' => 'error',
    ]);
  }
}
