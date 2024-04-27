<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\laravel_example\UserManagement;
use App\Http\Controllers\ProductController;



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

Route::middleware('admin')->prefix('/app')->group(function () {

  // Dashboard
  Route::get('/', 'App\Http\Controllers\DashboardController@index')->name('app-dashboard');

  // invoices
  Route::get('/invoice/list', 'App\Http\Controllers\InvoiceController@index')->name('app-invoice-list');
  Route::get('/invoice/preview/{id}', 'App\Http\Controllers\InvoiceController@show')->where('id', '[0-9]+')->name('app-invoice-preview');
  Route::get('/invoice/print', 'App\Http\Controllers\InvoiceController@print')->name('app-invoice-print');
  Route::get('/invoice/edit', 'App\Http\Controllers\InvoiceController@edit')->name('app-invoice-edit');
  Route::post('/invoice/edit-status/{id}', 'App\Http\Controllers\InvoiceController@editStatus')->where('id', '[0-9]+')->name('app-invoice-edit-status');
  Route::get('/invoice/add', 'App\Http\Controllers\InvoiceController@create')->name('app-invoice-add');

  // users
  Route::get('/user/list', 'App\Http\Controllers\UserController@index')->name('app-user-list');
  Route::get('/user/preview/{id}', 'App\Http\Controllers\UserController@show')->where('id', '[0-9]+')->name('app-user-preview');

  // payments
  Route::get('/payment/list', 'App\Http\Controllers\PaymentController@index')->name('app-payment-list');
  Route::get('/payment/preview/{id}', 'App\Http\Controllers\PaymentController@show')->where('id', '[0-9]+')->name('app-payment-preview');

  // product
  Route::get('/product/list', 'App\Http\Controllers\ProductController@index')->name('app-product-list');
  Route::get('/product/preview/{id}', 'App\Http\Controllers\ProductController@show')->where('id', '[0-9]+')->name('app-product-preview');
  Route::get('/product/add', 'App\Http\Controllers\ProductController@create')->name('app-product-add');
  Route::post('/product/store', 'App\Http\Controllers\ProductController@store')->name('app-product-store');
  Route::get('/product/edit/{id}', 'App\Http\Controllers\ProductController@edit')->where('id', '[0-9]+')->name('app-product-edit');
  Route::post('/product/update/{id}', 'App\Http\Controllers\ProductController@update')->where('id', '[0-9]+')->name('app-product-update');
  Route::post('/product/delete/{id}', 'App\Http\Controllers\ProductController@destroy')->where('id', '[0-9]+')->name('app-product-delete');

  // blog (posts)
  Route::get('/blog/list', 'App\Http\Controllers\BlogPostController@index')->name('app-blog-list');
  Route::get('/blog/preview/{id}', 'App\Http\Controllers\BlogPostController@show')->where('id', '[0-9]+')->name('app-blog-preview');
  Route::get('/blog/add', 'App\Http\Controllers\BlogPostController@create')->name('app-blog-add');
  Route::post('/blog/store', 'App\Http\Controllers\BlogPostController@store')->name('app-blog-store');
  Route::get('/blog/edit/{id}', 'App\Http\Controllers\BlogPostController@edit')->where('id', '[0-9]+')->name('app-blog-edit');
  Route::post('/blog/update/{id}', 'App\Http\Controllers\BlogPostController@update')->where('id', '[0-9]+')->name('app-blog-update');
  Route::post('/blog/delete/{id}', 'App\Http\Controllers\BlogPostController@destroy')->where('id', '[0-9]+')->name('app-blog-delete');

  // blog-category
  Route::get('/blog-category/list', 'App\Http\Controllers\BlogCategoryController@index')->name('app-blog-category-list');
  Route::get('/blog-category/preview/{id}', 'App\Http\Controllers\BlogCategoryController@show')->where('id', '[0-9]+')->name('app-blog-category-preview');
  Route::get('/blog-category/add', 'App\Http\Controllers\BlogCategoryController@create')->name('app-blog-category-add');
  Route::post('/blog-category/store', 'App\Http\Controllers\BlogCategoryController@store')->name('app-blog-category-store');
  Route::get('/blog-category/edit/{id}', 'App\Http\Controllers\BlogCategoryController@edit')->where('id', '[0-9]+')->name('app-blog-category-edit');
  Route::post('/blog-category/update/{id}', 'App\Http\Controllers\BlogCategoryController@update')->where('id', '[0-9]+')->name('app-blog-category-update');
  Route::post('/blog-category/delete/{id}', 'App\Http\Controllers\BlogCategoryController@destroy')->where('id', '[0-9]+')->name('app-blog-category-delete');

  // tag
  Route::get('/tag/list', 'App\Http\Controllers\TagController@index')->name('app-tag-list');
  Route::get('/tag/preview/{id}', 'App\Http\Controllers\TagController@show')->where('id', '[0-9]+')->name('app-tag-preview');
  Route::get('/tag/add', 'App\Http\Controllers\TagController@create')->name('app-tag-add');
  Route::post('/tag/store', 'App\Http\Controllers\TagController@store')->name('app-tag-store');
  Route::get('/tag/edit/{id}', 'App\Http\Controllers\TagController@edit')->where('id', '[0-9]+')->name('app-tag-edit');
  Route::post('/tag/update/{id}', 'App\Http\Controllers\TagController@update')->where('id', '[0-9]+')->name('app-tag-update');
  Route::post('/tag/delete/{id}', 'App\Http\Controllers\TagController@destroy')->where('id', '[0-9]+')->name('app-tag-delete');

  // faq
  Route::get('/faq/list', 'App\Http\Controllers\FaqController@index')->name('app-faq-list');
  Route::get('/faq/preview/{id}', 'App\Http\Controllers\FaqController@show')->where('id', '[0-9]+')->name('app-faq-preview');
  Route::get('/faq/add', 'App\Http\Controllers\FaqController@create')->name('app-faq-add');
  Route::post('/faq/store', 'App\Http\Controllers\FaqController@store')->name('app-faq-store');
  Route::get('/faq/edit/{id}', 'App\Http\Controllers\FaqController@edit')->where('id', '[0-9]+')->name('app-faq-edit');
  Route::post('/faq/update/{id}', 'App\Http\Controllers\FaqController@update')->where('id', '[0-9]+')->name('app-faq-update');
  Route::post('/faq/delete/{id}', 'App\Http\Controllers\FaqController@destroy')->where('id', '[0-9]+')->name('app-faq-delete');

  // partner
  Route::get('/partner/list', 'App\Http\Controllers\PartnerController@index')->name('app-partner-list');
  Route::get('/partner/preview/{id}', 'App\Http\Controllers\PartnerController@show')->where('id', '[0-9]+')->name('app-partner-preview');
  Route::get('/partner/add', 'App\Http\Controllers\PartnerController@create')->name('app-partner-add');
  Route::post('/partner/store', 'App\Http\Controllers\PartnerController@store')->name('app-partner-store');
  Route::get('/partner/edit/{id}', 'App\Http\Controllers\PartnerController@edit')->where('id', '[0-9]+')->name('app-partner-edit');
  Route::post('/partner/update/{id}', 'App\Http\Controllers\PartnerController@update')->where('id', '[0-9]+')->name('app-partner-update');
  Route::post('/partner/delete/{id}', 'App\Http\Controllers\PartnerController@destroy')->where('id', '[0-9]+')->name('app-partner-delete');

  // servicesample
  Route::get('/servicesample/list', 'App\Http\Controllers\ServiceSampleController@index')->name('app-servicesample-list');
  Route::get('/servicesample/preview/{id}', 'App\Http\Controllers\ServiceSampleController@show')->where('id', '[0-9]+')->name('app-servicesample-preview');
  Route::get('/servicesample/add', 'App\Http\Controllers\ServiceSampleController@create')->name('app-servicesample-add');
  Route::post('/servicesample/store', 'App\Http\Controllers\ServiceSampleController@store')->name('app-servicesample-store');
  Route::get('/servicesample/edit/{id}', 'App\Http\Controllers\ServiceSampleController@edit')->where('id', '[0-9]+')->name('app-servicesample-edit');
  Route::post('/servicesample/update/{id}', 'App\Http\Controllers\ServiceSampleController@update')->where('id', '[0-9]+')->name('app-servicesample-update');
  Route::post('/servicesample/delete/{id}', 'App\Http\Controllers\ServiceSampleController@destroy')->where('id', '[0-9]+')->name('app-servicesample-delete');

  // settings
  Route::get('/setting', 'App\Http\Controllers\SettingController@edit')->name('app-setting-edit');
  Route::post('/setting', 'App\Http\Controllers\SettingController@update')->name('app-setting-update');
});

require __DIR__ . '/auth.php';






// authentication
// Route::get('/auth/login-basic', 'App\Http\Controllers\authentications\LoginBasic@index')->name('auth-login-basic');
// Route::get('/auth/login-cover', 'App\Http\Controllers\authentications\LoginCover@index')->name('auth-login-cover');
// Route::get('/auth/register-basic', 'App\Http\Controllers\authentications\RegisterBasic@index')->name('auth-register-basic');
// Route::get('/auth/register-cover', 'App\Http\Controllers\authentications\RegisterCover@index')->name('auth-register-cover');
// Route::get('/auth/register-multisteps', 'App\Http\Controllers\authentications\RegisterMultiSteps@index')->name('auth-register-multisteps');
// Route::get('/auth/verify-email-basic', 'App\Http\Controllers\authentications\VerifyEmailBasic@index')->name('auth-verify-email-basic');
// Route::get('/auth/verify-email-cover', 'App\Http\Controllers\authentications\VerifyEmailCover@index')->name('auth-verify-email-cover');
// Route::get('/auth/reset-password-basic', 'App\Http\Controllers\authentications\ResetPasswordBasic@index')->name('auth-reset-password-basic');
// Route::get('/auth/reset-password-cover', 'App\Http\Controllers\authentications\ResetPasswordCover@index')->name('auth-reset-password-cover');
// Route::get('/auth/forgot-password-basic', 'App\Http\Controllers\authentications\ForgotPasswordBasic@index')->name('auth-reset-password-basic');
// Route::get('/auth/forgot-password-cover', 'App\Http\Controllers\authentications\ForgotPasswordCover@index')->name('auth-forgot-password-cover');
// Route::get('/auth/two-steps-basic', 'App\Http\Controllers\authentications\TwoStepsBasic@index')->name('auth-two-steps-basic');
// Route::get('/auth/two-steps-cover', 'App\Http\Controllers\authentications\TwoStepsCover@index')->name('auth-two-steps-cover');
