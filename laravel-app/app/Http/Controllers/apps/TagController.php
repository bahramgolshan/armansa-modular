<?php

namespace App\Http\Controllers\apps;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TagController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    return view('content.apps.app-tag-list');
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    return view('content.apps.app-tag-add');
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    //
  }

  /**
   * Display the specified resource.
   */
  public function show()
  {
    return view('content.apps.app-tag-preview');
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit()
  {
    return view('content.apps.app-tag-edit');
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, string $id)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(string $id)
  {
    //
  }
}
