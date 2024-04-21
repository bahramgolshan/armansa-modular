<?php

return [

  /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

  "accepted"         => ":attribute باید پذیرفته شده باشد.",
  "active_url"       => "آدرس :attribute معتبر نیست",
  "after"            => ":attribute باید تاریخی بعد از :date باشد.",
  "alpha"            => ":attribute باید شامل حروف الفبا باشد.",
  "alpha_dash"       => ":attribute باید شامل حروف الفبا و عدد و خظ تیره(-) باشد.",
  "alpha_num"        => ":attribute باید شامل حروف الفبا و عدد باشد.",
  "array"            => ":attribute باید شامل آرایه باشد.",
  "before"           => ":attribute باید تاریخی قبل از :date باشد.",
  "between"          => array(
    "numeric" => ":attribute باید بین :min و :max باشد.",
    "file"    => ":attribute باید بین :min و :max کیلوبایت باشد.",
    "string"  => ":attribute باید بین :min و :max کاراکتر باشد.",
    "array"   => ":attribute باید بین :min و :max آیتم باشد.",
  ),
  "boolean"          => "The :attribute field must be true or false",
  "confirmed"        => ":attribute با تاییدیه مطابقت ندارد.",
  "date"             => ":attribute یک تاریخ معتبر نیست.",
  "date_format"      => ":attribute با الگوی :format مطاقبت ندارد.",
  "different"        => ":attribute و :other باید متفاوت باشند.",
  "digits"           => ":attribute باید :digits رقم باشد.",
  "digits_between"   => ":attribute باید بین :min و :max رقم باشد.",
  "email"            => "فرمت :attribute معتبر نیست.",
  "exists"           => ":attribute انتخاب شده، معتبر نیست.",
  "image"            => ":attribute باید تصویر باشد.",
  "in"               => ":attribute انتخاب شده، معتبر نیست.",
  "integer"          => ":attribute باید نوع داده ای عددی (integer) باشد.",
  "ip"               => ":attribute باید IP آدرس معتبر باشد.",
  "max"              => array(
    "numeric" => ":attribute نباید بزرگتر از :max باشد.",
    "file"    => ":attribute نباید بزرگتر از :max کیلوبایت باشد.",
    "string"  => ":attribute نباید بیشتر از :max کاراکتر باشد.",
    "array"   => ":attribute نباید بیشتر از :max آیتم باشد.",
  ),
  "mimes"            => ":attribute باید یکی از فرمت های :values باشد.",
  "min"              => array(
    "numeric" => ":attribute نباید کوچکتر از :min باشد.",
    "file"    => ":attribute نباید کوچکتر از :min کیلوبایت باشد.",
    "string"  => ":attribute نباید کمتر از :min کاراکتر باشد.",
    "array"   => ":attribute نباید کمتر از :min آیتم باشد.",
  ),
  "not_in"           => ":attribute انتخاب شده، معتبر نیست.",
  "numeric"          => ":attribute باید شامل عدد باشد.",
  "regex"            => ":attribute یک فرمت معتبر نیست",
  "required"         => "فیلد :attribute الزامی است",
  "required_if"      => "فیلد :attribute هنگامی که :other برابر با :value است، الزامیست.",
  "required_with"    => ":attribute الزامی است زمانی که :values موجود است.",
  "required_with_all" => ":attribute الزامی است زمانی که :values موجود است.",
  "required_without" => ":attribute الزامی است زمانی که :values موجود نیست.",
  "required_without_all" => ":attribute الزامی است زمانی که :values موجود نیست.",
  "same"             => ":attribute و :other باید مانند هم باشند.",
  "size"             => array(
    "numeric" => ":attribute باید برابر با :size باشد.",
    "file"    => ":attribute باید برابر با :size کیلوبایت باشد.",
    "string"  => ":attribute باید برابر با :size کاراکتر باشد.",
    "array"   => ":attribute باسد شامل :size آیتم باشد.",
  ),
  "timezone"         => "The :attribute must be a valid zone.",
  "unique"           => ":attribute قبلا انتخاب شده است.",
  "url"              => "فرمت آدرس :attribute اشتباه است.",

  /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

  'custom' => [],

  /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */
  'attributes' => [
    'name' => "نام",
    'mobile' => "شماره همراه",
    'national_code' => "کد ملی",
    'foreign_national_code' => "کد اتباع خارجی",
    'imei_1' => 'IMEI',
    'password' => 'رمز',
    'title' => "عنوان",
    'date' => "تاریخ",
    'start_date' => "تاریخ شروع",
    'end_date' => "تاریخ پایان",
    'time_scale_id' => "دوره زمانی",
    'start_time' => 'ساعت شروع  ',
    'end_time' => 'ساعت پایان ',
    'giftList' => 'لیست هدایا',
    'deviceModelList' => 'لیست مدل ها',
    'giftForAllModels' => 'وضعیت اختصاص هدایا برای مدل ها را مشخص کنید',
    'float' => 'شناوری',
    'max_daily_overtime' => 'سقف اضافه کار روزانه',
    'start_shift_overtime' => 'اضافه کار از ابتدای شیفت',
    'allowed_delay' => 'تاخیر مجاز',
    'allowed_hurry' => 'تعجیل مجاز',
    'float_before_start_shift' => 'شناوری قبل شیفت',
    'imei_1' => 'IMEI',
    'proforma_no' => 'شماره پروفورما',
    'samane_jame_no' => 'شماره سامانه جامع',
    'eight_digits_code' => 'کد ۸ رقمی',
    'selected_organization' => 'سازمان',
    'selected_role' => 'نقش',
    'type' => 'نوع درخواست',
    'category' => "درخواست",
    'ex_appearance' => "مشخصات ظاهری",
    'ex_comment' => "نظر کارشناس احیا",
    'payment_type' => "نحوه پرداخت",
    'price' => "مبلغ",
    'payment_date' => "تاریخ واریز",
    'file' => "فایل",
    'itemGift' => 'هدایا',
    'typeGift' => 'نوع اختصاص هدایا',

    'device_id' => "قطعه",
    'unit' => "واحد",
    'quantity' => 'تعداد',
    'amount' => 'مبلغ',

    'warehouse_id' => "انبار",
    'customer_id' => "فروشنده",
    'details' => 'اقلام',
    'source_id' => 'مبدا',
    'comment' => 'نظر',
    'email' => 'آدرس ایمیل',
    'accessory_price' => 'قیمت لوازم جانبی',
    'defacted_part_description' => 'توضیحات قطعه مشکل دار',
    'accessory_status' => 'لوازم جانبی',
    'invoice_date' => 'تاریخ فاکتور',
    'gift_serial' => 'سریال هدیه',
    'promotion_device_base_model_gift_id' => 'هدیه',
    'shop_name' => 'نام فروشگاه',
    'status' => 'وضعیت',
    'gift_delivered' => 'هدیه تحویل داده شد',
    'code' => 'کد',
    'new_password' => 'کلمه عبور',
    'new_password_retype' => 'تکرار کلمه عبور',
    'reception_id' => 'شماره پذیرش',

    'service_id' => 'سرویس',
    'size_id' => 'سایز',
    'paper_id' => 'نوع کاغذ',
    'color_id' => 'رنگ',
    'cover_id' => 'جلد',
    'binding_id' => 'صحافی',
    'cellophane_id' => 'سلفون',
    'binding_direction_id' => 'جهت صحافی',
    'price' => 'مبلغ',
    'discount' => 'تخفیف',
    'discount_type' => 'نوع تخفیف',

    'blog_category_id' => 'دسته بندی',
    'summary ' => 'خلاصه مطلب',
  ],


  'recaptcha' => 'لطفاً تأیید کنید که ربات نیستید.',
  'extension' => 'فرمت فایل آپلود شده صحیح نمی باشد.',


];
