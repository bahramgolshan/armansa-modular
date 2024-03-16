<?php

namespace App\Http\Controllers\apps;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FaqController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $faq = Faq::paginate(9);
    return view('content.apps.app-faq-list', compact('faq'));
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    return view('content.apps.app-faq-add');
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    Faq::create([
      'question'=>$request->question,
      'description'=>$answer->answer,
      'order'=>$request->order,
  ]);

    $request->session()->flash('create');
    return redirect()->route('faq.index');
  }

  /**
   * Display the specified resource.
   */
  public function show()
  {
    return view('content.apps.app-faq-preview');
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit()
  {
    $faq = Faq::findOrFail($id);
    return view('content.apps.app-faq-edit', compact('faq'));
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, string $id)
  {
    $faq = Faq::findOrFail($id);
        $faq->update([
          'question'=>$request->question,
          'description'=>$answer->answer,
          'order'=>$request->order,
        ]);

        $request->session()->flash('update');
        return redirect()->route('faq.index');
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(string $id)
  {
    $faq= Faq::findOrFail($id);
    $faq->destroy($id);
    return redirect()->route('faq.index');
  }
}
