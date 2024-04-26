<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
  Route::get('/register', 'Modules\Website\App\Http\Controllers\Auth\AuthController@register')->name('register');

  Route::post('/register', 'Modules\Website\App\Http\Controllers\Auth\AuthController@registerSubmit')->name('register-submit');

  Route::get('/login', 'Modules\Website\App\Http\Controllers\Auth\AuthController@login')->name('login');

  Route::post('/login', 'Modules\Website\App\Http\Controllers\Auth\AuthController@authenticate')->name('login-submit');
});

Route::middleware('auth')->group(function () {
  // Route::get('verify-email',  [EmailVerificationPromptController::class, '__invoke'])
  //   ->name('verification.notice');

  // Route::get('verify-email/{id}/{hash}', [VerifyEmailController::class, '__invoke'])
  //   ->middleware(['signed', 'throttle:6,1'])
  //   ->name('verification.verify');

  // Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
  //   ->middleware('throttle:6,1')
  //   ->name('verification.send');

  // Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
  //   ->name('password.confirm');

  // Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

  //   Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
  //     ->name('logout');
  // });

  Route::post('/logout', 'Modules\Website\App\Http\Controllers\Auth\AuthController@logout')->name('logout-submit');
});
