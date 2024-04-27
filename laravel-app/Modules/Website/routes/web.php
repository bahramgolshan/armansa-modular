<?php

use Illuminate\Support\Facades\Route;
use Modules\Website\App\Http\Controllers\WebsiteController;

/*
|--------------------------------------------------------------------------
| Website Routes - Before Authentication
|--------------------------------------------------------------------------
*/

require __DIR__ . '/auth.php';

// Home Page
Route::get('/', "PageController@home")->name('home');
Route::get('/services/print/digital-print/inquiry', "InvoiceDetailController@inquiry")->name('service.print.digital.inquiry'); // Check price button

// Blog
Route::get('/blogs', "BlogController@index");
Route::get('/blogs/post/{id}', "BlogController@show");

// Static Pages
Route::prefix('page')->group(function () {
  Route::get('/about-us', "PageController@about")->name('page.about-us'); // درباره ما
  Route::get('/services/print', "PageController@print")->name('page.service.print'); // خدمات چاپ
  Route::get('/services/print/digital', "PageController@printDigital")->name('page.service.print.digital'); // چاپ دیجیتال
  Route::get('/services/print/offset', "PageController@printOffset")->name('page.service.print.offset'); // چاپ افست
  Route::get('/services/publication', "PageController@publication")->name('page.service.publication'); // خدمات نشر
  Route::get('/services/publication/permission', "PageController@pubPermission")->name('page.service.publication.permission'); // اخذ مجوز چاپ
  Route::get('/services/publication/layout', "PageController@pubLayout")->name('page.service.publication.layout'); // صفحه آرایی
  Route::get('/services/publication/editing', "PageController@pubEditing")->name('page.service.publication.editing'); // ویراستاری
  Route::get('/services/lithography', "PageController@lithography")->name('page.service.lithography'); // لیتوگرافی
  Route::get('/services/lithography/zinc-gto', "PageController@zincGto")->name('page.service.lithography.zinc-gto'); // زینک gto
  Route::get('/services/lithography/zinc-dureghi', "PageController@zincDureghi")->name('page.service.lithography.zinc-dureghi'); // زینک دورقی
  Route::get('/services/lithography/zinc-speed-master', "PageController@zincSpeedMaster")->name('page.service.lithography.zinc-speed-master'); // زینک اسپید مستر
  Route::get('/services/calendar', "PageController@calendar")->name('page.service.calendar'); // سررسید
  Route::get('/services/samples', "PageController@samples")->name('page.service.samples'); // نمونه کارها
});





/*
|--------------------------------------------------------------------------
| Website Routes - After Authentication
|--------------------------------------------------------------------------
*/
Route::middleware('auth')->prefix('dashboard')->group(function () {
  Route::get('/', 'DashboardController@index')->name('dashboard.index');

  Route::get('/profile', 'ProfileController@edit')->name('dashboard.profile.edit');
  Route::post('/profile/{id}', 'ProfileController@update')->where('id', '[0-9]+')->name('dashboard.profile.update');

  Route::get('/cart', 'InvoiceController@cartIndex')->name('dashboard.cart');
  Route::get('/orders', 'InvoiceController@ordersIndex')->name('dashboard.orders');
  Route::get('/invoice/{id}', 'InvoiceController@show')->where('id', '[0-9]+')->name('dashboard.invoice.show');
  Route::post('/invoice/{id}/pay', 'InvoiceController@pay')->where('id', '[0-9]+')->name('dashboard.invoice.pay');
  Route::post('/invoice/{id}', 'InvoiceController@destroy')->where('id', '[0-9]+')->name('dashboard.invoice.destroy');


  // Route::get('/unsuccessful', 'DashboardController@unsuccessful')->name('dashboard.unsuccessful');
  // Route::get('/successful', 'DashboardController@successful')->name('dashboard.successful');
  // Route::get('/empty-cart', 'DashboardController@emptyCart')->name('dashboard.empty-cart');
});

Route::middleware('auth')->prefix('services')->group(function () {
  Route::get('print/digital/{id}', 'PrintDigitalController@show')->where('id', '[0-9]+')->name('service.print-digital.show');
  Route::get('print/digital', 'PrintDigitalController@create')->name('service.print-digital.create');
  Route::post('print/digital', 'PrintDigitalController@store')->name('service.print-digital.store');
  Route::post('print/digitall/{id}', 'PrintDigitalController@destroy')->where('id', '[0-9]+')->name('service.print-digital.destroy');

  Route::get('print/digital/inquiry', "PrintDigitalController@inquiry")->name('service.print-digital.inquiry'); // Check price button
});
