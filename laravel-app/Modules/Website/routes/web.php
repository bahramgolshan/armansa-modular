<?php

use Illuminate\Support\Facades\Route;
use Modules\Website\App\Http\Controllers\WebsiteController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

require __DIR__ . '/auth.php';



/*
|--------------------------------------------------------------------------
| Before Authentication
|--------------------------------------------------------------------------
*/
Route::get('/', "HomeController@index")->name('home');
Route::get('/editing', "StaticPageController@staticEditing")->name('static-editing');
Route::get('/layout', "StaticPageController@staticLayout")->name('static-layout');
Route::get('/lithography', "StaticPageController@staticLithography")->name('static-lithography');
Route::get('/license', "StaticPageController@staticLicense")->name('static-license');
Route::get('/blogs', "BlogController@index");
Route::get('/blogs/post/{id}', "BlogController@show");
Route::get('/services/print/digital-print/inquiry', "InvoiceDetailController@inquiry")->name('service.print.digital-print.inquiry'); // Check price button


Route::get('/services/print/', "FrontController@printServices")->name('service.print'); // خدمات چاپ

Route::get('/services/print/digital', "FrontController@digitalPrint")->name('service.print.digital'); // چاپ دیجیتال

Route::get('/services/print/offset', "SomeController@index")->name('service.print.offset'); // چاپ افست

Route::get('/services/publication/', "SomeController@index")->name('service.pubication'); // خدمات نشر

Route::get('/services/publication/permission', "FrontController@pubPermission")->name('service.pubication.permission'); // اخذ مجوز چاپ

Route::get('/services/publication/layout', "FrontController@pubLayout")->name('service.pubication.layout'); // صفحه آرایی

Route::get('/services/publication/editing', "FrontController@pubEditing")->name('service.pubication.editing'); // ویراستاری

Route::get('/services/lithography', "FrontController@pubLithography")->name('service.lithography'); // لیتوگرافی

Route::get('/services/lithography/zinc-gto', "FrontController@index")->name('service.lithography.zinc-gto'); // زینک gto
Route::get('/services/lithography/zinc-dureghi', "FrontController@index")->name('service.lithography.zinc-dureghi'); // زینک دورقی
Route::get('/services/lithography/zinc-speed-master', "FrontController@index")->name('service.lithography.zinc-speed-master'); // زینک اسپید مستر
Route::get('/services/diary', "FrontController@index")->name('service.diary'); // سررسید
Route::get('/services/samples', "FrontController@index")->name('service.samples'); // نمونه کارها
Route::get('/about-us', "FrontController@index")->name('about-us'); // درباره ما






/*
|--------------------------------------------------------------------------
| After Authentication
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



















// Online service routes
// Route::resource('service', 'ServiceController');
// Route::resource('servicecategory', 'ServiceCategoryController');
// Route::resource('attribute', 'AttributeController');
// Route::resource('color', 'ColorController');
// Route::resource('size', 'SizeController');
// Route::resource('paper', 'PaperController');
// Route::resource('binding', 'BindingController');
// Route::resource('cellophanes', 'CellophanesController');
// Route::resource('servicedetail', 'ServiceDetailController');
// Route::resource('serviceattribute', 'ServiceAttributeController');
// Route::resource('attributecategory', 'AttributeCategoryController');
// Route::resource('invoice', 'InvoiceController');
// Route::resource('invoicedetail', 'InvoiceDetailController');
// Route::resource('payment', 'PaymentController');

// General routes
// Route::resource('setting', 'SettingController');
// Route::resource('media', 'MediaController');
// Route::resource('servicesample', 'ServiceSampleController');
// Route::resource('faq', 'FaqController');
// Route::resource('blogpost', 'BlogPostController');
// Route::resource('blogcategory', 'BlogCategoryController');
// Route::resource('blogcomment', 'BlogCommentController');
// Route::resource('tag', 'TagController');
// Route::resource('blogposttag', 'BlogPostTagController');
// Route::resource('servicesampletag', 'ServiceSampleTagController');
// Route::resource('cover', 'CoverController');
// Route::resource('partner', 'PartnerController');
// Route::resource('achievement', 'AchievementController');
