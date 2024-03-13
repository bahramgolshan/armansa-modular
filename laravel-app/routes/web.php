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

// Main Page Route
Route::get('/', $controller_path . '\apps\InvoiceList@index');


// locale
Route::get('lang/{locale}', $controller_path . '\language\LanguageController@swap');

// apps
Route::get('/app/invoice/list', $controller_path . '\apps\InvoiceList@index')->name('app-invoice-list');
Route::get('/app/invoice/preview', $controller_path . '\apps\InvoicePreview@index')->name('app-invoice-preview');
Route::get('/app/invoice/print', $controller_path . '\apps\InvoicePrint@index')->name('app-invoice-print');
Route::get('/app/invoice/edit', $controller_path . '\apps\InvoiceEdit@index')->name('app-invoice-edit');
Route::get('/app/invoice/add', $controller_path . '\apps\InvoiceAdd@index')->name('app-invoice-add');

// ----------------------- new routes
// product
Route::get('/app/product/list', $controller_path . '\apps\ProductController@index')->name('app-product-list');
Route::get('/app/product/preview', $controller_path . '\apps\ProductController@show')->name('app-product-preview');
Route::get('/app/product/edit', $controller_path . '\apps\ProductController@edit')->name('app-product-edit');
Route::get('/app/product/add', $controller_path . '\apps\ProductController@create')->name('app-product-add');

// blog-category
Route::get('/app/blog-category/list', $controller_path . '\apps\BlogCategoryController@index')->name('app-blog-category-list');
Route::get('/app/blog-category/preview', $controller_path . '\apps\BlogCategoryController@show')->name('app-blog-category-preview');
Route::get('/app/blog-category/edit', $controller_path . '\apps\BlogCategoryController@edit')->name('app-blog-category-edit');
Route::get('/app/blog-category/add', $controller_path . '\apps\BlogCategoryController@create')->name('app-blog-category-add');

// blog
Route::get('/app/blog/list', $controller_path . '\apps\BlogController@index')->name('app-blog-list');
Route::get('/app/blog/preview', $controller_path . '\apps\BlogController@show')->name('app-blog-preview');
Route::get('/app/blog/edit', $controller_path . '\apps\BlogController@edit')->name('app-blog-edit');
Route::get('/app/blog/add', $controller_path . '\apps\BlogController@create')->name('app-blog-add');

// tag
Route::get('/app/tag/list', $controller_path . '\apps\TagController@index')->name('app-tag-list');
Route::get('/app/tag/preview', $controller_path . '\apps\TagController@show')->name('app-tag-preview');
Route::get('/app/tag/edit', $controller_path . '\apps\TagController@edit')->name('app-tag-edit');
Route::get('/app/tag/add', $controller_path . '\apps\TagController@create')->name('app-tag-add');

// user
Route::get('/app/user/list', $controller_path . '\apps\UserList@index')->name('app-user-list');
Route::get('/app/user/preview', $controller_path . '\apps\UserViewAccount@index')->name('app-user-preview');

// -------------------------------- end new routes



// authentication
Route::get('/auth/login-basic', $controller_path . '\authentications\LoginBasic@index')->name('auth-login-basic');
Route::get('/auth/login-cover', $controller_path . '\authentications\LoginCover@index')->name('auth-login-cover');
Route::get('/auth/register-basic', $controller_path . '\authentications\RegisterBasic@index')->name('auth-register-basic');
Route::get('/auth/register-cover', $controller_path . '\authentications\RegisterCover@index')->name('auth-register-cover');
Route::get('/auth/register-multisteps', $controller_path . '\authentications\RegisterMultiSteps@index')->name('auth-register-multisteps');
Route::get('/auth/verify-email-basic', $controller_path . '\authentications\VerifyEmailBasic@index')->name('auth-verify-email-basic');
Route::get('/auth/verify-email-cover', $controller_path . '\authentications\VerifyEmailCover@index')->name('auth-verify-email-cover');
Route::get('/auth/reset-password-basic', $controller_path . '\authentications\ResetPasswordBasic@index')->name('auth-reset-password-basic');
Route::get('/auth/reset-password-cover', $controller_path . '\authentications\ResetPasswordCover@index')->name('auth-reset-password-cover');
Route::get('/auth/forgot-password-basic', $controller_path . '\authentications\ForgotPasswordBasic@index')->name('auth-reset-password-basic');
Route::get('/auth/forgot-password-cover', $controller_path . '\authentications\ForgotPasswordCover@index')->name('auth-forgot-password-cover');
Route::get('/auth/two-steps-basic', $controller_path . '\authentications\TwoStepsBasic@index')->name('auth-two-steps-basic');
Route::get('/auth/two-steps-cover', $controller_path . '\authentications\TwoStepsCover@index')->name('auth-two-steps-cover');
