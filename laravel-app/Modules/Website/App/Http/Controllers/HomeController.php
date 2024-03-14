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
