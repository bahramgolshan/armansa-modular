<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\laravel_example\UserManagement;
use App\Http\Controllers\apps\ProductController;



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

Route::get('/app', 'App\Http\Controllers\apps\InvoiceController@index'); // Main App Page
Route::get('lang/{locale}', 'App\Http\Controllers\language\LanguageController@swap'); // locale

// invoices
Route::get('/app/invoice/list', 'App\Http\Controllers\apps\InvoiceController@index')->name('app-invoice-list');
Route::get('/app/invoice/preview/{id}', 'App\Http\Controllers\apps\InvoiceController@show')->where('id', '[0-9]+')->name('app-invoice-preview');
Route::get('/app/invoice/print', 'App\Http\Controllers\apps\InvoiceController@print')->name('app-invoice-print');
Route::get('/app/invoice/edit', 'App\Http\Controllers\apps\InvoiceController@edit')->name('app-invoice-edit');
Route::post('/app/invoice/edit-status/{id}', 'App\Http\Controllers\apps\InvoiceController@editStatus')->where('id', '[0-9]+')->name('app-invoice-edit-status');
Route::get('/app/invoice/add', 'App\Http\Controllers\apps\InvoiceController@create')->name('app-invoice-add');

// customers
Route::get('/app/customer/list', 'App\Http\Controllers\apps\CustomerController@index')->name('app-customer-list');
Route::get('/app/customer/preview/{id}', 'App\Http\Controllers\apps\CustomerController@show')->where('id', '[0-9]+')->name('app-customer-preview');

// payments
Route::get('/app/payment/list', 'App\Http\Controllers\apps\PaymentController@index')->name('app-payment-list');
Route::get('/app/payment/preview/{id}', 'App\Http\Controllers\apps\PaymentController@show')->where('id', '[0-9]+')->name('app-payment-preview');

// product
Route::get('/app/product/list', 'App\Http\Controllers\apps\ProductController@index')->name('app-product-list');
Route::get('/app/product/preview/{id}', 'App\Http\Controllers\apps\ProductController@show')->where('id', '[0-9]+')->name('app-product-preview');
Route::get('/app/product/add', 'App\Http\Controllers\apps\ProductController@create')->name('app-product-add');
Route::post('/app/product/store', 'App\Http\Controllers\apps\ProductController@store')->name('app-product-store');
Route::get('/app/product/edit/{id}', 'App\Http\Controllers\apps\ProductController@edit')->where('id', '[0-9]+')->name('app-product-edit');
Route::post('/app/product/update/{id}', 'App\Http\Controllers\apps\ProductController@update')->where('id', '[0-9]+')->name('app-product-update');
Route::post('/app/product/delete/{id}', 'App\Http\Controllers\apps\ProductController@destroy')->where('id', '[0-9]+')->name('app-product-delete');

// blog (posts)
Route::get('/app/blog/list', 'App\Http\Controllers\apps\BlogPostController@index')->name('app-blog-list');
Route::get('/app/blog/preview/{id}', 'App\Http\Controllers\apps\BlogPostController@show')->where('id', '[0-9]+')->name('app-blog-preview');
Route::get('/app/blog/add', 'App\Http\Controllers\apps\BlogPostController@create')->name('app-blog-add');
Route::post('/app/blog/store', 'App\Http\Controllers\apps\BlogPostController@store')->name('app-blog-store');
Route::get('/app/blog/edit/{id}', 'App\Http\Controllers\apps\BlogPostController@edit')->where('id', '[0-9]+')->name('app-blog-edit');
Route::post('/app/blog/update/{id}', 'App\Http\Controllers\apps\BlogPostController@update')->where('id', '[0-9]+')->name('app-blog-update');
Route::post('/app/blog/delete/{id}', 'App\Http\Controllers\apps\BlogPostController@destroy')->where('id', '[0-9]+')->name('app-blog-delete');

// blog-category
Route::get('/app/blog-category/list', 'App\Http\Controllers\apps\BlogCategoryController@index')->name('app-blog-category-list');
Route::get('/app/blog-category/preview/{id}', 'App\Http\Controllers\apps\BlogCategoryController@show')->where('id', '[0-9]+')->name('app-blog-category-preview');
Route::get('/app/blog-category/add', 'App\Http\Controllers\apps\BlogCategoryController@create')->name('app-blog-category-add');
Route::post('/app/blog-category/store', 'App\Http\Controllers\apps\BlogCategoryController@store')->name('app-blog-category-store');
Route::get('/app/blog-category/edit/{id}', 'App\Http\Controllers\apps\BlogCategoryController@edit')->where('id', '[0-9]+')->name('app-blog-category-edit');
Route::post('/app/blog-category/update/{id}', 'App\Http\Controllers\apps\BlogCategoryController@update')->where('id', '[0-9]+')->name('app-blog-category-update');
Route::post('/app/blog-category/delete/{id}', 'App\Http\Controllers\apps\BlogCategoryController@destroy')->where('id', '[0-9]+')->name('app-blog-category-delete');

// tag
Route::get('/app/tag/list', 'App\Http\Controllers\apps\TagController@index')->name('app-tag-list');
Route::get('/app/tag/preview/{id}', 'App\Http\Controllers\apps\TagController@show')->where('id', '[0-9]+')->name('app-tag-preview');
Route::get('/app/tag/add', 'App\Http\Controllers\apps\TagController@create')->name('app-tag-add');
Route::post('/app/tag/store', 'App\Http\Controllers\apps\TagController@store')->name('app-tag-store');
Route::get('/app/tag/edit/{id}', 'App\Http\Controllers\apps\TagController@edit')->where('id', '[0-9]+')->name('app-tag-edit');
Route::post('/app/tag/update/{id}', 'App\Http\Controllers\apps\TagController@update')->where('id', '[0-9]+')->name('app-tag-update');
Route::post('/app/tag/delete/{id}', 'App\Http\Controllers\apps\TagController@destroy')->where('id', '[0-9]+')->name('app-tag-delete');

// faq
Route::get('/app/faq/list', 'App\Http\Controllers\apps\FaqController@index')->name('app-faq-list');
Route::get('/app/faq/preview/{id}', 'App\Http\Controllers\apps\FaqController@show')->where('id', '[0-9]+')->name('app-faq-preview');
Route::get('/app/faq/add', 'App\Http\Controllers\apps\FaqController@create')->name('app-faq-add');
Route::post('/app/faq/store', 'App\Http\Controllers\apps\FaqController@store')->name('app-faq-store');
Route::get('/app/faq/edit/{id}', 'App\Http\Controllers\apps\FaqController@edit')->where('id', '[0-9]+')->name('app-faq-edit');
Route::post('/app/faq/update/{id}', 'App\Http\Controllers\apps\FaqController@update')->where('id', '[0-9]+')->name('app-faq-update');
Route::post('/app/faq/delete/{id}', 'App\Http\Controllers\apps\FaqController@destroy')->where('id', '[0-9]+')->name('app-faq-delete');

// partner
Route::get('/app/partner/list', 'App\Http\Controllers\apps\PartnerController@index')->name('app-partner-list');
Route::get('/app/partner/preview/{id}', 'App\Http\Controllers\apps\PartnerController@show')->where('id', '[0-9]+')->name('app-partner-preview');
Route::get('/app/partner/add', 'App\Http\Controllers\apps\PartnerController@create')->name('app-partner-add');
Route::post('/app/partner/store', 'App\Http\Controllers\apps\PartnerController@store')->name('app-partner-store');
Route::get('/app/partner/edit/{id}', 'App\Http\Controllers\apps\PartnerController@edit')->where('id', '[0-9]+')->name('app-partner-edit');
Route::post('/app/partner/update/{id}', 'App\Http\Controllers\apps\PartnerController@update')->where('id', '[0-9]+')->name('app-partner-update');
Route::post('/app/partner/delete/{id}', 'App\Http\Controllers\apps\PartnerController@destroy')->where('id', '[0-9]+')->name('app-partner-delete');

// servicesample
Route::get('/app/servicesample/list', 'App\Http\Controllers\apps\ServicesampleController@index')->name('app-servicesample-list');
Route::get('/app/servicesample/preview/{id}', 'App\Http\Controllers\apps\ServicesampleController@show')->where('id', '[0-9]+')->name('app-servicesample-preview');
Route::get('/app/servicesample/add', 'App\Http\Controllers\apps\ServicesampleController@create')->name('app-servicesample-add');
Route::post('/app/servicesample/store', 'App\Http\Controllers\apps\ServicesampleController@store')->name('app-servicesample-store');
Route::get('/app/servicesample/edit/{id}', 'App\Http\Controllers\apps\ServicesampleController@edit')->where('id', '[0-9]+')->name('app-servicesample-edit');
Route::post('/app/servicesample/update/{id}', 'App\Http\Controllers\apps\ServicesampleController@update')->where('id', '[0-9]+')->name('app-servicesample-update');
Route::post('/app/servicesample/delete/{id}', 'App\Http\Controllers\apps\ServicesampleController@destroy')->where('id', '[0-9]+')->name('app-servicesample-delete');

// settings
Route::get('/app/setting', 'App\Http\Controllers\apps\SettingController@edit')->name('app-setting-edit');
Route::post('/app/setting', 'App\Http\Controllers\apps\SettingController@update')->name('app-setting-update');








// authentication
Route::get('/auth/login-basic', 'App\Http\Controllers\authentications\LoginBasic@index')->name('auth-login-basic');
Route::get('/auth/login-cover', 'App\Http\Controllers\authentications\LoginCover@index')->name('auth-login-cover');
Route::get('/auth/register-basic', 'App\Http\Controllers\authentications\RegisterBasic@index')->name('auth-register-basic');
Route::get('/auth/register-cover', 'App\Http\Controllers\authentications\RegisterCover@index')->name('auth-register-cover');
Route::get('/auth/register-multisteps', 'App\Http\Controllers\authentications\RegisterMultiSteps@index')->name('auth-register-multisteps');
Route::get('/auth/verify-email-basic', 'App\Http\Controllers\authentications\VerifyEmailBasic@index')->name('auth-verify-email-basic');
Route::get('/auth/verify-email-cover', 'App\Http\Controllers\authentications\VerifyEmailCover@index')->name('auth-verify-email-cover');
Route::get('/auth/reset-password-basic', 'App\Http\Controllers\authentications\ResetPasswordBasic@index')->name('auth-reset-password-basic');
Route::get('/auth/reset-password-cover', 'App\Http\Controllers\authentications\ResetPasswordCover@index')->name('auth-reset-password-cover');
Route::get('/auth/forgot-password-basic', 'App\Http\Controllers\authentications\ForgotPasswordBasic@index')->name('auth-reset-password-basic');
Route::get('/auth/forgot-password-cover', 'App\Http\Controllers\authentications\ForgotPasswordCover@index')->name('auth-forgot-password-cover');
Route::get('/auth/two-steps-basic', 'App\Http\Controllers\authentications\TwoStepsBasic@index')->name('auth-two-steps-basic');
Route::get('/auth/two-steps-cover', 'App\Http\Controllers\authentications\TwoStepsCover@index')->name('auth-two-steps-cover');
