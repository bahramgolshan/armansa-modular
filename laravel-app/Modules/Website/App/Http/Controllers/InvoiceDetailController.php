<?php

namespace App\Http\Controllers;

use App\Models\Binding;
use App\Models\Cellophane;
use App\Models\Color;
use App\Models\Cover;
use App\Models\Paper;
use App\Models\Service;
use App\Models\ServiceDetail;
use App\Models\Size;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class InvoiceDetailController  extends Controller
{

    public function index()
    {
    }

    public function create()
    {
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

    public function inquiry(Request $request)
    {
        $request->validate([
            'service' => 'required|numeric|min:0|max:10000',
            'size' => ['required', Rule::in(Size::$codes)],
            'paper' => ['required', Rule::in(Paper::$codes)],
            'color' => ['required', Rule::in(Color::$codes)],
            'number-of-pages' => 'required|numeric|min:0|max:100000',
            'circulation' => 'required|numeric|min:0|max:1000000000',
            'cover' => ['required', Rule::in(Cover::$codes)],
            'binding' => ['required', Rule::in(Binding::$codes)],
            'cellophane' => ['required', Rule::in(Cellophane::$codes)],
            'binding-direction' => ['required', Rule::in(['fa_v', 'fa_h', 'en_v', 'en_h'])],
        ]);

        $sizeId = Size::where('code', $request->size)->first()->id;
        $colorId = Color::where('code', $request->color)->first()->id;
        $paperId = Paper::where('code', $request->paper)->first()->id;
        $bindingId = Binding::where('code', $request->binding)->first()->id;
        $cellophaneId = Cellophane::where('code', $request->cellophane)->first()->id;
        $coverId = Cover::where('code', $request->cover)->first()->id;

        $serviceDetail = ServiceDetail::where('service_id', $request->service)
            ->orWhere('size_id', $sizeId)
            ->orWhere('color_id', $colorId)
            ->orWhere('paper_id', $paperId)
            ->orWhere('binding_id', $bindingId)
            ->orWhere('cellophane_id', $cellophaneId)
            ->orWhere('cover_id', $coverId)
            ->orWhere('status', 'publish')
            ->first();

        return response()->json([
            'price' => isset($serviceDetail) ? $serviceDetail->price : null,
        ]);
    }
}
