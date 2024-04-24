<?php

namespace Modules\Website\App\Http\Controllers;

use App\Models\Achievement;
use App\Models\Binding;
use App\Models\Cellophane;
use App\Models\Color;
use App\Models\Cover;
use App\Models\Faq;
use App\Models\Paper;
use App\Models\Partner;
use App\Models\Service;
use App\Models\ServiceSample;
use App\Models\Setting;
use App\Models\Size;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
  public function index()
  {
    $achievements = Achievement::where('is_featured', true)->orderBy('order', 'ASC')->get();
    $serviceSamples = ServiceSample::where('is_featured', true)->orderBy('order', 'ASC')->get();
    $faqs = Faq::orderBy('order', 'ASC')->get();
    $settings = Setting::where('key', 'heroDescription')
      ->orWhere('key', 'phone1')
      ->orWhere('key', 'aboutArmansa')
      ->orWhere('key', 'featuredVideoEmbedCode')
      ->pluck('value', 'key')
      ->toArray();


    // Get all partner logos from public directoy (images)
    $ds = DIRECTORY_SEPARATOR;
    $path = public_path('assets' . $ds . 'modules' . $ds . 'website' . $ds . 'images' . $ds . 'home' . $ds . 'about-us');
    $partnerLogos = \File::allFiles($path);

    // Get drop-down data for digital-print form
    $digitalPrintData = [];
    $digitalPrintData['service_id'] = Service::where('code', 'digital-print')->first()->id;
    $digitalPrintData['sizes'] = Size::all();
    $digitalPrintData['papers'] = Paper::all();
    $digitalPrintData['colors'] = Color::all();
    $digitalPrintData['bindings'] = Binding::all();
    $digitalPrintData['cellophanes'] = Cellophane::all();
    $digitalPrintData['covers'] = Cover::all();

    return view('website::pages.index', compact(
      'achievements',
      'serviceSamples',
      'faqs',
      'settings',
      'partnerLogos',
      'digitalPrintData',
    ));
  }
}
