<?php

namespace Modules\Website\App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Binding;
use App\Models\BindingDirection;
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
  // Price Inquiery Button
  public function inquiry(Request $request)
  {
    $query = $request->validate([
      'service_id' => 'required|numeric',
      'size_id' => 'required|numeric',
      'paper_id' => 'required|numeric',
      'color_id' => 'required|numeric',
      'cover_id' => 'required|numeric',
      'binding_id' => 'required|numeric',
      'cellophane_id' => 'required|numeric',
      'binding_direction_id' => 'required|numeric',
      // 'pages' => 'required|numeric|min:0|max:100000',
      // 'circulation' => 'required|numeric|min:0|max:1000000000',
    ]);

    $serviceDetail = ServiceDetail::where($query)
      ->where('status', 'publish')
      ->first();

    if (isset($serviceDetail)) {
      if (isset($serviceDetail->price)) {
        // Extract necessary data
        $id = $serviceDetail->id;
        $price = $serviceDetail->price;
        $discount = $serviceDetail->discount;
        $discountType = $serviceDetail->discount_type;
        $additionalDiscount = 0;
        $additionalPrice = 0;
        $tax = 0;

        // Calculate final_price
        if ($discountType == 'percent') {
          $finalPrice = $price - ($price * ($discount / 100));
        } else {
          $finalPrice = $price - $discount;
        }

        return response()->json([
          'status' => 'success',
          'message' => null,
          'data' => [
            'service_detail_id' => $id,
            'price' => $price,
            'discount' => $discount,
            'discount_type' => $discountType,
            'additional_discount' => $additionalDiscount,
            'additional_price' => $additionalPrice,
            'tax' => $tax,
            'final_price' => $finalPrice,
          ],
        ]);
      }

      return response()->json([
        'status' => 'error',
        'message' => 'برای استعلام قیمت لطفا تماس بگیرید',
        'data' => [
          'service_detail_id' => $serviceDetail->id,
        ],
      ]);
    }

    return response()->json([
      'status' => 'error',
      'message' => 'برای استعلام قیمت لطفا تماس بگیرید',
      'data' => null,
    ]);
  }
}
