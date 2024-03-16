<?php

return [

  /*
    |--------------------------------------------------------------------------
    | App Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used during authentication for various
    | messages that we need to display to the user. You are free to modify
    | these language lines according to your application's requirements.
    |
    */
  'companyName' => 'شرکت آرمانسا',

  'invoiceStatus' => 'These credentials do not match our records.',
  'password' => 'The provided password is incorrect.',
  'throttle' => 'Too many login attempts. Please try again in :seconds seconds.',

  'invoiceStatus' => [
    'awaiting_payment' => 'در انتظار پرداخت',
    'awaiting_approval' => 'در انتظار تایید سفارش',
    'processing' => 'در حال انجام',
    'delivered' => 'تحویل شده',
    'rejected' => 'رد شده',
  ],

  'serviceCategory' => [
    'print' => 'چاپ',
  ],
  'service' => [
    'digital' => 'دیجیتال',
  ],
  'serviceFullName' => [
    'print-digital' => 'چاپ دیجیتال',
  ],

  'service' => [
    'digital' => 'دیجیتال',
    'offset' => 'افست',
  ],

  'bindingDirection' => [
    'fa_v' => 'فارسی عمودی',
    'fa_h' => 'فارسی افقی',
    'en_v' => 'انگلیسی عمودی',
    'en_h' => 'انگلیسی افقی',
  ],

  'paymentStatus' => [
    'success' => 'انجام شده',
    'error' => 'خظا',
    'cancel' => 'رد شده',
  ],

  'discountType' => [
    'fix' => 'عدد ثابت',
    'percent' => 'درصد',
  ],

  'serviceDetailStatus' => [
    'draft' => 'پیش نویس',
    'publish' => 'انتشار',
  ],
];
