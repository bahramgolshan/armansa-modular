<?php

namespace App\Http\Controllers;

use App\Models\Binding;
use App\Models\Cellophane;
use App\Models\Color;
use App\Models\Cover;
use App\Models\Faq;
use App\Models\Paper;
use App\Models\Setting;
use App\Models\Size;
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

        return view('front.pages.digital_print', compact(
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
