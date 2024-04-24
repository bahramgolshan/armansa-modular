<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Faq;

class FaqController extends Controller
{
  public function index()
  {
    $faqs = Faq::orderBy('id', 'DESC')->get();

    return view('content.apps.app-faq-list', [
      'faqs' =>  $faqs,
    ]);
  }

  public function create()
  {
    return view('content.apps.app-faq-add');
  }

  public function store(Request $request)
  {
    $request->validate([
      'question' => 'required|string',
      'answer' => 'required|string',
    ]);

    $faq = new Faq();
    $faq->question = $request->question;
    $faq->answer = $request->answer;
    if ($faq->save()) {
      return redirect(route('app-faq-list'))->withSuccess(__('messages.success'));
    }

    return redirect(route('app-faq-add'))->withError(__('messages.error'));
  }

  public function show(Request $request)
  {
    $id = Route::current()->parameter('id');

    $faq = Faq::findOrFail($id);

    return view('content.apps.app-faq-preview', [
      'faq' => $faq,
    ]);
  }

  public function edit(Request $request)
  {
    $id = Route::current()->parameter('id');

    $faq = Faq::findOrFail($id);

    return view('content.apps.app-faq-edit', [
      'faq' => $faq,
    ]);
  }

  public function update(Request $request)
  {
    $request->validate([
      'question' => 'required|string',
      'answer' => 'required|string',
    ]);

    $id = Route::current()->parameter('id');

    $faq = Faq::find($id);
    $faq->question = $request->question;
    $faq->answer = $request->answer;
    if ($faq->save()) {
      return redirect(route('app-faq-list'))->withSuccess(__('messages.success'));
    }

    return redirect(route('app-faq-edit', ['id' => $id]))->withError(__('messages.error'));
  }

  public function destroy(Request $request)
  {
    $id = Route::current()->parameter('id');

    $faq = Faq::find($id);
    if ($faq->delete()) {
      return response()->json([
        'status' => 'success',
      ]);
    }

    return response()->json([
      'status' => 'error',
    ]);
  }
}
