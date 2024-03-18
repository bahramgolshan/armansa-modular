<?php

namespace Modules\Website\App\Http\Controllers;

use Modules\Website\App\Models\Achievement;
use Modules\Website\App\Models\Binding;
use Modules\Website\App\Models\Cellophane;
use Modules\Website\App\Models\Color;
use Modules\Website\App\Models\Cover;
use Modules\Website\App\Models\Faq;
use Modules\Website\App\Models\Paper;
use Modules\Website\App\Models\Partner;
use Modules\Website\App\Models\Service;
use Modules\Website\App\Models\ServiceSample;
use Modules\Website\App\Models\Setting;
use Modules\Website\App\Models\Size;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontController extends Controller
{


  /*
       ## SERVICES SECTION ##
    */

  public function printServices()
  {
    $settings = Setting::where('key', 'heroDescription')
      ->orWhere('key', 'phone1')
      ->orWhere('key', 'aboutArmansa')
      ->orWhere('key', 'featuredVideoEmbedCode')
      ->pluck('value', 'key')
      ->toArray();

    $faqs = Faq::orderBy('order', 'ASC')->get();

    return view('website::pages.print_services', compact('settings', 'faqs'));
  }

  public function digitalPrint()
  {
    // Get drop-down data for digital-print form
    $digitalPrintData = [];
    $digitalPrintData['service_id'] = Service::where('code', 'digital-print')->first()->id;
    $digitalPrintData['sizes'] = Size::all();
    $digitalPrintData['papers'] = Paper::all();
    $digitalPrintData['colors'] = Color::all();
    $digitalPrintData['bindings'] = Binding::all();
    $digitalPrintData['cellophanes'] = Cellophane::all();
    $digitalPrintData['covers'] = Cover::all();
    $faqs = Faq::orderBy('order', 'ASC')->get();

    return view('website::pages.digital_print', compact(
      'digitalPrintData',
      'faqs'
    ));
  }

  // ویراستاری
  public function pubEditing()
  {
    return view('website::pages.publication_editing');
  }

  // صفحه آرایی
  public function pubLayout()
  {
    return view('website::pages.publication_layout');
  }

  // لیتوگرافی
  public function pubLithography()
  {
    return view('website::pages.publication_lithography');
  }

  // اخذ مجوز
  public function pubPermission()
  {
    return view('website::pages.publication_permission');
  }
}
