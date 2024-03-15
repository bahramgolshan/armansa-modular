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

$controller_path = 'App\Http\Controllers';

// locale
Route::get('lang/{locale}', 'App\Http\Controllers\language\LanguageController@swap');


// Main App Page
Route::get('/app', 'App\Http\Controllers\apps\InvoiceController@index');

// settings
Route::get('/app/setting', 'App\Http\Controllers\apps\SettingController@index');

// apps
Route::get('/app/invoice/list', 'App\Http\Controllers\apps\InvoiceController@index')->name('app-invoice-list');
Route::get('/app/invoice/preview/{id}', 'App\Http\Controllers\apps\InvoiceController@show')->where('id', '[0-9]+')->name('app-invoice-preview');
Route::get('/app/invoice/print', 'App\Http\Controllers\apps\InvoiceController@print')->name('app-invoice-print');
Route::get('/app/invoice/edit', 'App\Http\Controllers\apps\InvoiceController@edit')->name('app-invoice-edit');
Route::post('/app/invoice/edit-status/{id}', 'App\Http\Controllers\apps\InvoiceController@editStatus')->where('id', '[0-9]+')->name('app-invoice-edit-status');
Route::get('/app/invoice/add', 'App\Http\Controllers\apps\InvoiceController@create')->name('app-invoice-add');

// product
Route::get('/app/product/list', 'App\Http\Controllers\apps\ProductController@index')->name('app-product-list');
Route::get('/app/product/preview', 'App\Http\Controllers\apps\ProductController@show')->name('app-product-preview');
Route::get('/app/product/edit', 'App\Http\Controllers\apps\ProductController@edit')->name('app-product-edit');
Route::get('/app/product/add', 'App\Http\Controllers\apps\ProductController@create')->name('app-product-add');

// blog-category
Route::get('/app/blog-category/list', 'App\Http\Controllers\apps\BlogCategoryController@index')->name('app-blog-category-list');
Route::get('/app/blog-category/preview', 'App\Http\Controllers\apps\BlogCategoryController@show')->name('app-blog-category-preview');
Route::get('/app/blog-category/edit', 'App\Http\Controllers\apps\BlogCategoryController@edit')->name('app-blog-category-edit');
Route::get('/app/blog-category/add', 'App\Http\Controllers\apps\BlogCategoryController@create')->name('app-blog-category-add');

// blog
Route::get('/app/blog/list', 'App\Http\Controllers\apps\BlogController@index')->name('app-blog-list');
Route::get('/app/blog/preview', 'App\Http\Controllers\apps\BlogController@show')->name('app-blog-preview');
Route::get('/app/blog/edit', 'App\Http\Controllers\apps\BlogController@edit')->name('app-blog-edit');
Route::get('/app/blog/add', 'App\Http\Controllers\apps\BlogController@create')->name('app-blog-add');

// tag
Route::get('/app/tag/list', 'App\Http\Controllers\apps\TagController@index')->name('app-tag-list');
Route::get('/app/tag/preview', 'App\Http\Controllers\apps\TagController@show')->name('app-tag-preview');
Route::get('/app/tag/edit', 'App\Http\Controllers\apps\TagController@edit')->name('app-tag-edit');
Route::get('/app/tag/add', 'App\Http\Controllers\apps\TagController@create')->name('app-tag-add');

// faq
Route::get('/app/faq/list', 'App\Http\Controllers\apps\FaqController@index')->name('app-faq-list');
Route::get('/app/faq/preview', 'App\Http\Controllers\apps\FaqController@show')->name('app-faq-preview');
Route::get('/app/faq/edit', 'App\Http\Controllers\apps\FaqController@edit')->name('app-faq-edit');
Route::get('/app/faq/add', 'App\Http\Controllers\apps\FaqController@create')->name('app-faq-add');

// partner
Route::get('/app/partner/list', $controller_path . '\apps\PartnerController@index')->name('app-partner-list');
Route::get('/app/partner/preview', $controller_path . '\apps\PartnerController@show')->name('app-partner-preview');
Route::get('/app/partner/edit', $controller_path . '\apps\PartnerController@edit')->name('app-partner-edit');
Route::get('/app/partner/add', $controller_path . '\apps\PartnerController@create')->name('app-partner-add');

// payment
Route::get('/app/payment/list', $controller_path . '\apps\PaymentController@index')->name('app-payment-list');
Route::get('/app/payment/preview', $controller_path . '\apps\PaymentController@show')->name('app-payment-preview');

// customer
Route::get('/app/customer/list', 'App\Http\Controllers\apps\CustomerController@index')->name('app-customer-list');
Route::get('/app/customer/preview/{id}', 'App\Http\Controllers\apps\CustomerController@show')->where('id', '[0-9]+')->name('app-customer-preview');

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
