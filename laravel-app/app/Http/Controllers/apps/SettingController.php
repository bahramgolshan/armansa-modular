<?php

namespace App\Http\Controllers\apps;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\Website\App\Models\Setting;

class SettingController extends Controller
{
  public function edit()
  {
    $settings = Setting::pluck('value', 'key')->toArray();

    return view('content.pages.setting', [
      'settings' => $settings,
    ]);
  }

  public function update(Request $request)
  {
    $request->validate([
      "websiteTitle" => 'nullable|string',
      "websiteMetaDescriptions" => 'nullable|string',
      "websiteMetaTags" => 'nullable|string',
      "heroImageSrc" => 'nullable|string',
      "heroDescription" => 'nullable|string',
      "aboutArmansa" => 'nullable|string',
      "featuredVideoEmbedCode" => 'nullable|string',
      "customersCount" => 'nullable|string',
      "ordersCount" => 'nullable|string',
      "usersCount" => 'nullable|string',
      "phone1" => 'nullable|string',
      "phone2" => 'nullable|string',
      "phone3" => 'nullable|string',
      "instagram" => 'nullable|string',
      "telegram" => 'nullable|string',
      "eitaa" => 'nullable|string',
      "address" => 'nullable|string',
    ]);

    $i = 0;
    foreach ($request->all() as $key => $value) {
      if ($i == 5) {
        dd($key, $value);
      }
      Setting::where('key', $key)->update(['value' => $value]);
      // $i++;
    }

    return redirect(route('app-setting-edit'))->withSuccess(__('messages.success'));
  }
}
