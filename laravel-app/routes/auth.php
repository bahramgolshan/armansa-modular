<?php

use App\Http\Controllers\Auth\AdminController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->prefix('app')->group(function () {
  Route::get('/login', 'App\Http\Controllers\Auth\AuthController@index')->name('app-login');

  Route::post('/login', 'App\Http\Controllers\Auth\AuthController@login')->name('app-login-submit');

  Route::post('/logout', 'App\Http\Controllers\Auth\AuthController@logout')->name('app-logout-submit');
});
