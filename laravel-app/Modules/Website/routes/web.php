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

Route::group([], function () {
  Route::resource('website', WebsiteController::class)->names('website');
});

Route::get('/', function () {
  return view('welcome');
});

Route::get('/dashboard', function () {
  return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';

// Before Authentication
Route::get('/', "HomeController@index")->name('home');

// Route::get('/login', "App\\Http\\Controllers\\AuthController@login")->name('login');

// Route::post('/login-otp', "App\\Http\\Controllers\\AuthController@loginOtp")->name('login.otp');

// Route::get('/register', "App\\Http\\Controllers\\AuthController@register")->name('register');

Route::get('/blogs', "App\\Http\\Controllers\\BlogController@index");
Route::get('/blogs/post/{id}', "App\\Http\\Controllers\\BlogController@show");

Route::get('/services/print/digital-print/inquiry', "App\\Http\\Controllers\\InvoiceDetailController@inquiry")->name('service.print.digital-print.inquiry'); // Check price



// After Authentication
Route::group([
  'middleware' => ['auth']
], function () {

  Route::get('/services', function () {
    return view('website::pages.services');
  });

  Route::get('/services/print/digital-print', "App\\Http\\Controllers\\InvoiceController@create")->name('service.print.digital-print');

  Route::get('/customers-dashboard', function () {
    return view('website::pages.customers_dashboard');
  });

  Route::get('/show-details', function () {
    return view('website::pages.show_details');
  });
});



/*
|--------------------------------------------------------------------------
| Dashboard Routes
|--------------------------------------------------------------------------
*/
// Online service routes
Route::resource('service', 'ServiceController');
Route::resource('servicecategory', 'ServiceCategoryController');
Route::resource('attribute', 'AttributeController');
Route::resource('color', 'ColorController');
Route::resource('size', 'SizeController');
Route::resource('paper', 'PaperController');
Route::resource('binding', 'BindingController');
Route::resource('cellophanes', 'CellophanesController');
Route::resource('servicedetail', 'ServiceDetailController');
Route::resource('serviceattribute', 'ServiceAttributeController');
Route::resource('attributecategory', 'AttributeCategoryController');
Route::resource('invoice', 'InvoiceController');
Route::resource('invoicedetail', 'InvoiceDetailController');
Route::resource('payment', 'PaymentController');

// General routes
Route::resource('setting', 'SettingController');
Route::resource('media', 'MediaController');
Route::resource('servicesample', 'ServiceSampleController');
Route::resource('faq', 'FaqController');
Route::resource('blogpost', 'BlogPostController');
Route::resource('blogcategory', 'BlogCategoryController');
Route::resource('blogcomment', 'BlogCommentController');
Route::resource('tag', 'TagController');
Route::resource('blogposttag', 'BlogPostTagController');
Route::resource('servicesampletag', 'ServiceSampleTagController');
Route::resource('cover', 'CoverController');
Route::resource('partner', 'PartnerController');
Route::resource('achievement', 'AchievementController');
