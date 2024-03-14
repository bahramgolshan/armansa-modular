<?php

namespace Modules\Website\App\Http\Controllers;

use App\Http\Controllers\Controller;
use Modules\Website\App\Models\Binding;
use Modules\Website\App\Models\Cellophane;
use Modules\Website\App\Models\Color;
use Modules\Website\App\Models\Cover;
use Modules\Website\App\Models\Faq;
use Modules\Website\App\Models\Paper;
use Modules\Website\App\Models\Setting;
use Modules\Website\App\Models\Size;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{

  public function index()
  {
  }

  public function create()
  {
    $faqs = Faq::orderBy('order', 'ASC')->get();

    // Get drop-down data for digital-print form
    $digitalPrintData = [];
    $digitalPrintData['sizes'] = Size::all();
    $digitalPrintData['papers'] = Paper::all();
    $digitalPrintData['colors'] = Color::all();
    $digitalPrintData['bindings'] = Binding::all();
    $digitalPrintData['cellophanes'] = Cellophane::all();
    $digitalPrintData['covers'] = Cover::all();

    return view('website::pages.digital_print', compact(
      'digitalPrintData',
      'faqs',
    ));
  }

  public function store()
  {
  }

  public function show($id)
  {
  }

  public function edit($id)
  {
  }

  public function update($id)
  {
  }

  public function destroy($id)
  {
  }
}
