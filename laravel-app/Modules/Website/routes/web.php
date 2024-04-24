<?php

use Illuminate\Support\Facades\Route;
use Modules\Website\App\Http\Controllers\WebsiteController;

/*
|--------------------------------------------------------------------------
| Website Routes - Before Authentication
|--------------------------------------------------------------------------
*/

// Static Pages
Route::get('/', "PageController@home")->name('home'); // صفحه اصلی

Route::get('/about-us', "PageController@about")->name('about-us'); // درباره ما

Route::get('/services/print', "PageController@print")->name('service.print'); // خدمات چاپ

Route::get('/services/print/digital', "PageController@printDigital")->name('service.print.digital'); // چاپ دیجیتال

Route::get('/services/print/offset', "PageController@printOffset")->name('service.print.offset'); // چاپ افست

Route::get('/services/publication', "PageController@pubication")->name('service.pubication'); // خدمات نشر

Route::get('/services/publication/permission', "PageController@pubPermission")->name('service.pubication.permission'); // اخذ مجوز چاپ

Route::get('/services/publication/layout', "PageController@pubLayout")->name('service.pubication.layout'); // صفحه آرایی

Route::get('/services/publication/editing', "PageController@pubEditing")->name('service.pubication.editing'); // ویراستاری

Route::get('/services/lithography', "PageController@lithography")->name('service.lithography'); // لیتوگرافی

Route::get('/services/lithography/zinc-gto', "PageController@zincGto")->name('service.lithography.zinc-gto'); // زینک gto

Route::get('/services/lithography/zinc-dureghi', "PageController@zincDureghi")->name('service.lithography.zinc-dureghi'); // زینک دورقی

Route::get('/services/lithography/zinc-speed-master', "PageController@zincSpeedMaster")->name('service.lithography.zinc-speed-master'); // زینک اسپید مستر

Route::get('/services/diary', "PageController@diary")->name('service.diary'); // سررسید

Route::get('/services/samples', "PageController@samples")->name('service.samples'); // نمونه کارها

// Blog
Route::get('/blogs', "BlogController@index");

Route::get('/blogs/post/{id}', "BlogController@show");

// Service Inquiry
Route::get('/services/print/digital-print/inquiry', "InvoiceDetailController@inquiry")->name('service.print.digital-print.inquiry'); // Check price button


/*
|--------------------------------------------------------------------------
| Website Routes - After Authentication
|--------------------------------------------------------------------------
*/
Route::group([
  'middleware' => ['auth']
], function () {
  Route::get('/services', function () {
    return view('website::pages.services');
  });
  Route::get('/services/print/digital-print', "InvoiceController@create")->name('service.print.digital-print');
  Route::get('/customers-dashboard', function () {
    return view('website::pages.customers_dashboard');
  });
  Route::get('/show-details', function () {
    return view('website::pages.show_details');
  });
});

require __DIR__ . '/auth.php';
