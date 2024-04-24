<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{

  public function run()
  {
    /*
        |--------------------------------------------------------------------------
        | 0. Website Meta Detail
        |--------------------------------------------------------------------------
        */
    Setting::updateOrCreate(array(
      'key' => 'websiteTitle',
      'value' => 'مجتمع چاپ آرمانسا',
      'description' => null,
    ));

    Setting::updateOrCreate(array(
      'key' => 'websiteMetaDescriptions',
      'value' => 'صفر تا صد خدمات چاپ کتاب در آرمانسا',
      'description' => null,
    ));

    Setting::updateOrCreate(array(
      'key' => 'websiteMetaTags',
      'value' => '[{"value":"نگ1"},{"value":"نگ2"},{"value":"نگ3"},{"value":"tag4"}]',
      'description' => null,
    ));




    /*
        |--------------------------------------------------------------------------
        | 1. Hero Section
        |--------------------------------------------------------------------------
        */
    Setting::updateOrCreate(array(
      'key' => 'heroImageSrc',
      'value' => null,
      'description' => 'لینک کامل عکس بالا - صفحه اصلی',
    ));

    Setting::updateOrCreate(array(
      'key' => 'heroDescription',
      'value' => 'صفر تا صد خدمات چاپ کتاب در آرمانسا',
      'description' => null,
    ));




    /*
        |--------------------------------------------------------------------------
        | 2. About-us Section
        |--------------------------------------------------------------------------
        */
    Setting::updateOrCreate(array(
      'key' => 'aboutArmansa',
      'value' => 'موسسه آرمانسا فعالیت خودرا از سال 1373 در زمینه صنعت چاپ ،صحافی و لیتوگرافی آغاز کرده است.اکنون با داشتن نیروهای متخصص و متبحر در زمینه چاپ کتاب و همچنین دستگاه های به روز و نوین ؛ افتخار همکاری با ناشران ونویسندگان بزرگ وگرانقدر بسیاری را در کارنامه خود دارد.موسسه ارمانسا با وجود داشتن تجربه 30 ساله ،این ضمانت را میدهد که بهترین کیفیت را در اختیار نویسندگان عزیز برای آثار ارزشمندشان قرار دهد.',
      'description' => 'درباره آرمانسا - صفحه اصلی',
    ));

    Setting::updateOrCreate(array(
      'key' => 'featuredVideoEmbedCode',
      'value' => '<style>.h_iframe-aparat_embed_frame{position:relative;}.h_iframe-aparat_embed_frame .ratio{display:block;width:100%;height:auto;}.h_iframe-aparat_embed_frame iframe{position:absolute;top:0;left:0;width:100%;height:100%;}</style><div class="h_iframe-aparat_embed_frame"><span style="display: block;padding-top: 57%"></span><iframe src="https://www.aparat.com/video/video/embed/videohash/sN2DV/vt/frame"  allowFullScreen="true" webkitallowfullscreen="true" mozallowfullscreen="true"></iframe></div>',
      'description' => 'کد آی فریم ویدیو درباره ما در آپارات - صفحه اصلی',
    ));




    /*
        |--------------------------------------------------------------------------
        | 3. Statistics Section
        |--------------------------------------------------------------------------
        */
    Setting::updateOrCreate(array(
      'key' => 'customersCount',
      'value' => '123',
      'description' => null,
    ));

    Setting::updateOrCreate(array(
      'key' => 'ordersCount',
      'value' => '123',
      'description' => null,
    ));

    Setting::updateOrCreate(array(
      'key' => 'usersCount',
      'value' => '123',
      'description' => null,
    ));




    /*
        |--------------------------------------------------------------------------
        | 4. Contacts info
        |--------------------------------------------------------------------------
        */
    Setting::updateOrCreate(array(
      'key' => 'phone1',
      'value' => '۰۲۱-۶۶۴۹۴۶۵۲',
      'description' => null,
    ));

    Setting::updateOrCreate(array(
      'key' => 'phone2',
      'value' => '۰۲۱-۶۶۹۵۰۲۱۲',
      'description' => null,
    ));

    Setting::updateOrCreate(array(
      'key' => 'phone3',
      'value' => '۰۲۱-۶۶۹۵۰۰۲۱',
      'description' => null,
    ));

    Setting::updateOrCreate(array(
      'key' => 'instagram',
      'value' => 'chap_armansa',
      'description' => null,
    ));

    Setting::updateOrCreate(array(
      'key' => 'telegram',
      'value' => 'chaparmansa',
      'description' => null,
    ));

    Setting::updateOrCreate(array(
      'key' => 'eitaa',
      'value' => 'chaparmansa',
      'description' => null,
    ));

    Setting::updateOrCreate(array(
      'key' => 'email',
      'value' => 'info@chapearmansa.com',
      'description' => null,
    ));

    Setting::updateOrCreate(array(
      'key' => 'address',
      'value' => 'تهران، خیابان انقلاب، خیابان وحید نظری، پلاک ۱۳۰، طبقه ۲، واحد ۳',
      'description' => null,
    ));
  }
}
