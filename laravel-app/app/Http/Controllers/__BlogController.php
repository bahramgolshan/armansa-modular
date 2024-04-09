<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
  public function index()
  {
    return view('content.apps.app-blog-list');
  }

  public function create()
  {
    return view('content.apps.app-blog-add');
  }

  public function store(Request $request)
  {
    //
  }

  public function show(Request $request)
  {
    return view('content.apps.app-blog-preview');
  }

  public function edit(Request $request)
  {
    return view('content.apps.app-blog-edit');
  }

  public function update(Request $request)
  {
    //
  }

  public function destroy(Request $request)
  {
    //
  }
}
