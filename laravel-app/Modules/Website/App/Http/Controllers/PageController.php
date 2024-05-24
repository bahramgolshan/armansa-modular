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
use App\Models\BindingDirection;

class PageController extends Controller
{
  // صفحه اصلی
  public function home()
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
    $digitalPrintData['binding_directions'] = BindingDirection::all();

    return view('website::pages.home', compact(
      'achievements',
      'serviceSamples',
      'faqs',
      'settings',
      'partnerLogos',
      'digitalPrintData',
    ));
  }

  // درباره ما
  public function about()
  {
    return view('website::pages.about');
  }

  // خدمات چاپ
  public function print()
  {
    return view('website::pages.print');
  }

  // چاپ دیجیتال
  public function printDigital()
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

    return view('website::pages.print_digital', compact(
      'digitalPrintData',
      'faqs'
    ));
  }

  // چاپ افست
  public function printOffset()
  {
    return view('website::pages.print_offset');
  }

  // خدمات نشر
  public function publication()
  {
    return view('website::pages.publication');
  }

  // اخذ مجوز چاپ
  public function pubPermission()
  {
    return view('website::pages.publication_permission');
  }

  // صفحه آرایی
  public function pubLayout()
  {
    return view('website::pages.publication_layout');
  }

  // ویراستاری
  public function pubEditing()
  {
    return view('website::pages.publication_editing');
  }

  // لیتوگرافی
  public function lithography()
  {
    return view('website::pages.lithography');
  }

  // زینک gto
  public function zincGto()
  {
    return view('website::pages.zinc_gto');
  }

  // زینک دورقی
  public function zincDureghi()
  {
    return view('website::pages.zinc_dureghi');
  }

  // زینک اسپید مستر
  public function zincSpeedMaster()
  {
    return view('website::pages.zinc_speed_master');
  }

  // سررسید
  public function calendar()
  {
    return view('website::pages.calendar');
  }

  // نمونه کارها
  public function samples()
  {
    return view('website::pages.samples');
  }
}
