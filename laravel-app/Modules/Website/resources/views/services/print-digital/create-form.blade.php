 @extends('website::layouts.front_master')

 @section('page-style')
 @endsection

 @section('content')
     @include('components.msg-success')
     @include('components.msg-error')

     @if ($errors->any())
         <div class="alert alert-danger">
             <ul>
                 @foreach ($errors->all() as $error)
                     <li>{{ $error }}</li>
                 @endforeach
             </ul>
         </div>
     @endif

     <!-- main -->
     <form id="digital-print-form" class="bg-[#f5f5f5] py-[3rem]" action="{{ route('service.print-digital.store') }}"
         enctype='multipart/form-data' method="POST">

         @csrf
         <input type="hidden" name="service_id" value="{{ $digitalPrintData['service_id'] }}">
         <input type="hidden" id="service_detail_id" name="service_detail_id">
         <input type="hidden" id="additional_discount" name="additional_discount">
         <input type="hidden" id="additional_price" name="additional_price">
         <input type="hidden" id="tax" name="tax">
         <input type="hidden" id="final_price" name="final_price">

         <h1 class="font-bold text-[2rem] text-center text-[--primary-color] mb-[3rem]">
             سفارش چاپ دیجیتال
         </h1>
         <!-- orders -->
         <section id="digital-print-orders" class="mb-[4rem] w-[100%] rounded-[10px] custom-padding">
             <div
                 class="primary-container mx-auto grid grid-cols-1 lg:gap-x-[5%] xl:gap-x-[10%] gap-y-[5rem] lg:gap-y-[0] lg:grid-cols-5 bg-white p-[1.5rem] shadow-[-2px_2px_8px_1px_rgba(0,0,0,0.15)] rounded-xl text-[--primary-color]">
                 <!-- right -->
                 <div class="lg:col-span-3 flex flex-col gap-[2rem] text-[1.125rem]">
                     <!-- top -->
                     <div>
                         <div>
                             <h3
                                 class="text-[1.2rem] text-center lg:text-right lg:text-[1.4rem] xl:text-[1.6rem] 2xl:text-[2rem] font-bold text-[--primary-color]">
                                 مشخصات کلی
                             </h3>
                             <div class="h-[1px] bg-[#D9D9D9] my-[1.25rem]"></div>
                         </div>
                         <!-- select aria -->
                         <div class="grid grid-cols-1 gap-x-8 gap-y-[2rem] md:grid-cols-2">
                             <div class="col-span-2 md:col-span-1">
                                 <label for="size" class="block font-medium leading-6">سایز:</label>
                                 <div class="mt-2">
                                     <select id="size" name="size_id" autocomplete="size-name"
                                         class="reset-preview block w-full lg:max-w-[18.75rem] rounded-md border-0 py-1.5 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:leading-6">
                                         <option value="">انتخاب کنید</option>
                                         @foreach ($digitalPrintData['sizes'] as $item)
                                             <option value="{{ $item->id }}" data-code="{{ $item->code }}">
                                                 {{ $item->name }}</option>
                                         @endforeach
                                     </select>
                                 </div>
                             </div>

                             <div class="col-span-2 md:col-span-1">
                                 <label for="paper" class="block font-medium leading-6">نوع کاغذ:</label>
                                 <div class="mt-2">
                                     <select id="paper" name="paper_id" autocomplete="paper-name"
                                         class="block w-full lg:max-w-[18.75rem] rounded-md border-0 py-1.5 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:leading-6">
                                         <option value="">انتخاب کنید</option>
                                         @foreach ($digitalPrintData['papers'] as $item)
                                             <option value="{{ $item->id }}">{{ $item->name }}</option>
                                         @endforeach
                                     </select>
                                 </div>
                             </div>

                             <div class="col-span-2 md:col-span-1">
                                 <label for="color" class="block font-medium leading-6">رنگ چاپ:</label>
                                 <div class="mt-2">
                                     <select id="color" name="color_id" autocomplete="color-name"
                                         class="block w-full lg:max-w-[18.75rem] rounded-md border-0 py-1.5 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:leading-6">
                                         <option value="">انتخاب کنید</option>
                                         @foreach ($digitalPrintData['colors'] as $item)
                                             <option value="{{ $item->id }}">{{ $item->name }}</option>
                                         @endforeach
                                     </select>
                                 </div>
                             </div>

                             <div class="col-span-2 md:col-span-1">
                                 <label for="pages" class="block font-medium leading-6">تعداد
                                     صفحات:</label>
                                 <div class="mt-2">
                                     <input type="text" name="pages" id="pages" value=""
                                         autocomplete="given-name"
                                         class="block w-full lg:max-w-[18.75rem] rounded-md border-0 py-1.5 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm sm:leading-6" />
                                 </div>
                             </div>

                             <div class="col-span-2 md:col-span-1">
                                 <label for="circulation" class="block font-medium leading-6">تیراژ:</label>
                                 <div class="mt-2">
                                     <input type="text" name="circulation" id="circulation" value=""
                                         autocomplete="given-name"
                                         class="block w-full lg:max-w-[18.75rem] rounded-md border-0 py-1.5 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm sm:leading-6" />
                                 </div>
                             </div>
                         </div>
                     </div>
                     <!-- bottom -->
                     <div>
                         <div>
                             <h3
                                 class="text-[1.2rem] lg:text-[1.4rem] xl:text-[1.6rem] 2xl:text-[2rem] font-bold text-[--primary-color]">
                                 مشخصات جلد و صحافی
                             </h3>
                             <div class="h-[1px] bg-[#D9D9D9] my-[1.25rem]"></div>
                         </div>
                         <!-- select aria -->
                         <div class="grid grid-cols-1 gap-x-8 gap-y-[2rem] md:grid-cols-2">
                             <!-- right -->
                             <div class="col-span-2 md:col-span-1">
                                 <label for="cover" class="block font-medium leading-6">جنس جلد:</label>
                                 <div class="mt-2">
                                     <select id="cover" name="cover_id" autocomplete="cover-name"
                                         class="block w-full lg:max-w-[18.75rem] rounded-md border-0 py-1.5 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:leading-6">
                                         <option value="">انتخاب کنید</option>
                                         @foreach ($digitalPrintData['covers'] as $item)
                                             <option value="{{ $item->id }}">{{ $item->name }}</option>
                                         @endforeach
                                     </select>
                                 </div>
                             </div>

                             <div class="col-span-2 md:col-span-1">
                                 <label for="binding" class="block font-medium leading-6">نوع صحافی:</label>
                                 <div class="mt-2">
                                     <select id="binding" name="binding_id" autocomplete="binding-name"
                                         class="block w-full lg:max-w-[18.75rem] rounded-md border-0 py-1.5 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:leading-6">
                                         <option value="">انتخاب کنید</option>
                                         @foreach ($digitalPrintData['bindings'] as $item)
                                             <option value="{{ $item->id }}">{{ $item->name }}</option>
                                         @endforeach
                                     </select>
                                 </div>
                             </div>

                             <div class="col-span-2 md:col-span-1">
                                 <label for="cellophane" class="block font-medium leading-6">نوع سلفون:</label>
                                 <div class="mt-2">
                                     <select id="cellophane" name="cellophane_id" autocomplete="cellophane-name"
                                         class="block w-full lg:max-w-[18.75rem] rounded-md border-0 py-1.5 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:leading-6">
                                         <option value="">انتخاب کنید</option>
                                         @foreach ($digitalPrintData['cellophanes'] as $item)
                                             <option value="{{ $item->id }}">{{ $item->name }}</option>
                                         @endforeach
                                     </select>
                                 </div>
                             </div>
                         </div>

                         <div class="flex flex-col gap-[1rem] mt-[2rem] items-start">
                             <label class="block font-medium leading-6">جهت صحافی:</label>

                             <ul
                                 class="w-[100%] xl:w-[75%] 2xl:w-[65%] grid gap-6 grid-cols-2 sm:grid-cols-4 book-direction">
                                 @foreach ($digitalPrintData['binding_directions'] as $index => $item)
                                     <li class="flex justify-center max-w-[9rem] lg:max-w-[10rem]">
                                         <input type="radio" id="binding_direction_{{ $item->code }}"
                                             name="binding_direction_id" value="{{ $item->id }}"
                                             data-code="{{ $item->code }}" class="reset-preview hidden peer" required
                                             {{ $index == 0 ? 'checked' : '' }} />
                                         <label for="binding_direction_{{ $item->code }}"
                                             class="flex flex-col justify-between w-[100%] h-[7.6875rem] border-[#3C4999] cursor-pointer"
                                             for="">
                                             <div
                                                 class="h-[77%] border-[1px] border-[#3C4999] rounded-t-[0.4375rem] w-[100%]">
                                                 <img class="w-[100%] h-[100%]"
                                                     src="{{ asset('assets/modules/website/images/icon/' . $item->code . '.svg') }}"
                                                     alt="" />
                                             </div>
                                             <span
                                                 class="block w-[100%] text-[0.875rem] h-[23%] leading-[1.5rem] text-center rounded-b-[0.4375rem] border-x-[1px] border-b-[1px] border-[#3C4999]">{{ $item->name }}</span>
                                         </label>
                                     </li>
                                 @endforeach
                             </ul>
                         </div>
                     </div>
                 </div>
                 <!-- left -->
                 <div class="lg:col-span-2 flex flex-col justify-start gap-[2rem] text-[1.125rem]">
                     <div class="">
                         <div>
                             <h3
                                 class="text-[1.3rem] sm:text-[1.5rem] lg:text-[1.4rem] xl:text-[1.6rem] 2xl:text-[2rem] font-bold text-center sm:text-start">
                                 مشخصات جلد و صحافی
                             </h3>
                             <div class="h-[1px] bg-[#D9D9D9] my-[1.25rem]"></div>
                         </div>
                         <div class="flex justify-center items-center py-[1rem] lg:py-[5rem]">
                             <img id="preview-image" class="w-[25rem]"
                                 src="{{ asset('assets/modules/website/images/home/form/previews/preview.svg') }}"
                                 alt="" />
                         </div>
                     </div>

                     <div class="">
                         <div>
                             <h3 class="inline-block text-[1.5rem] lg:text-[1.6rem] xl:text-[2rem] font-bold">
                                 هزینه چاپ
                             </h3>
                             <span id="call-for-price-message"
                                 class="hidden text-[1.2rem] lg:text-[1.3rem] xl:text-[1.5rem]">(لطفا تماس
                                 بگیرید)</span>
                             <div class="h-[1px] bg-[#D9D9D9] my-[1rem]"></div>
                         </div>
                         <div>
                             <div class="flex items-center gap-[1rem] justify-end">
                                 <span id="final-price-holder"
                                     class="text-[1.5rem] lg:text-[2rem] xl:text-[2.5rem] font-bold">0</span>
                                 <span class="text-[1.2rem] lg:text-[1.5rem] xl:text-[2rem]">تومان</span>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="flex flex-col md:flex-row gap-[1rem] justify-center lg:mt-[4rem] col-span-1 lg:col-span-5">
                     <button type="button" id="price-inquiry-btn"
                         class="text-[1.5rem] py-[.5rem] px-[2rem] bg-transparent rounded-lg text-[--primary-color] border-[--primary-color] border-2">
                         محاسبه قیمت
                     </button>
                 </div>
                 <div id="digital-print-form-error-box" class="hidden mt-[1rem]"></div>
             </div>
         </section>

         <!-- File Input -->
         <section id="digital-print-file-input" class="hidden mb-[1rem] w-[100%] rounded-[10px] custom-padding">
             <div
                 class="primary-container flex flex-col lg:flex-row lg:gap-[10rem] gap-[4rem] justify-between mx-auto p-[2rem] shadow-[-2px_2px_8px_1px_rgba(0,0,0,0.15)] rounded-xl bg-white">
                 <div class="w-[100%]">
                     <h3 class="text-center lg:text-right text-indigo-800 text-[18px] lg:text-2xl font-bold">
                         آپلود فایل متن
                     </h3>
                     <div class="w-[100%] h-[1px] bg-[#D9D9D9] my-5"></div>
                     {{-- DROPZONE FILEUPLOAD --}}
                     {{-- <div class="flex items-center justify-center w-full mb-[9px]">
                         <label for="dropzone-file"
                             class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-neutral-100 dark:hover:bg-neutral-200 dark:bg-neutral-200 hover:bg-neutral-200 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                             <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                 <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                     xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                     <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                         stroke-width="2"
                                         d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                                 </svg>
                                 <p class="mb-2 text-sm text-gray-500 dark:text-gray-400">
                                     برای انتخاب فایل اینجا کلیک کنید.
                                 </p>
                             </div>
                             <input id="dropzone-file" type="file" class="hidden" />
                         </label>
                        </div> --}}
                     {{-- HTML FILEUPLOAD --}}
                     <div class="flex items-center justify-start w-full mb-[9px]">
                         <input type="file" name="file_content" id="file-content"
                             accept=".doc,.docx,application/msword,application/vnd.indesign,.indd,application/pdf">
                     </div>
                     <div>
                         <h4 class="text-indigo-800 my-[1rem] text-[0.875rem] lg:text-xl font-bold">
                             نکات مهم فایل متن
                         </h4>
                         <ul class="list-disc pr-[3rem]">
                             <li class="text-indigo-800 text-[0.875rem] lg:text-xl font-normal">
                                 فایل ارسالی حتما در قالب Word، InDesign یا PDF باشد.
                             </li>
                             <li class="text-indigo-800 text-[0.875rem] lg:text-xl font-normal">
                                 حاشیه‌ی مناسب از بالا و پایین به مقدار x و از چپ و راست به
                                 مقدار y است.
                             </li>
                             <li class="text-indigo-800 text-[0.875rem] lg:text-xl font-normal">
                                 نکات بعدی...
                             </li>
                         </ul>
                     </div>
                 </div>

                 <div class="w-[100%]">
                     <h3 class="text-center lg:text-right text-indigo-800 text-[18px] lg:text-2xl font-bold">
                         آپلود فایل جلد
                     </h3>
                     <div class="w-[100%] h-[1px] bg-[#D9D9D9] my-5"></div>
                     {{-- DROPZONE FILEUPLOAD --}}
                     {{-- <div class="flex items-center justify-center w-full mb-[9px]">
                         <label for="dropzone-file"
                             class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-neutral-100 dark:hover:bg-neutral-200 dark:bg-neutral-200 hover:bg-neutral-200 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                             <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                 <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                     xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                     <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                         stroke-width="2"
                                         d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                                 </svg>
                                 <p class="mb-2 text-sm text-gray-500 dark:text-gray-400">
                                     برای انتخاب فایل اینجا کلیک کنید.
                                 </p>
                             </div>
                             <input id="dropzone-file" type="file" class="hidden" />
                         </label>
                     </div> --}}
                     {{-- HTML FILEUPLOAD --}}
                     <div class="flex items-center justify-start w-full mb-[9px]">
                         <input type="file" name="file_cover" id="file-cover" accept="image/*,.pdf,application/pdf">
                     </div>
                     <div>
                         <h4 class="text-indigo-800 text-[0.875rem] lg:text-xl my-[1rem] font-bold">
                             نکات مهم فایل متن
                         </h4>
                         <ul class="list-disc pr-[3rem]">
                             <li class="text-indigo-800 text-[0.875rem] lg:text-xl font-normal">
                                 فایل ارسالی حتما در قالب فایل‌های تصویری مانند jpg و png یا به
                                 صورت PDF باشد.
                             </li>

                             <li class="text-indigo-800 text-[0.875rem] lg:text-xl font-normal">
                                 رنگ‌بندی فایل جلد به صورت CMYK تنظیم شده‌باشد.
                             </li>
                             <li class="text-indigo-800 text-[0.875rem] lg:text-xl font-normal">
                                 نکات بعدی...
                             </li>
                         </ul>
                     </div>
                 </div>
             </div>
         </section>

         <!--Contacts-->
         <section id="digital-print-contacts" dir="rtl" class="hidden bg-[#f5f5f5] custom-padding py-[2rem]">

             <div
                 class="border-b bg-white primary-container mx-auto p-[1.5rem] rounded-lg shadow-[-2px_2px_8px_1px_rgba(0,0,0,0.15)]">
                 <h2 class="text-3xl font-semibold mb-8 text-[#3c4999] ">اطلاعات تماس :</h2>
                 <div class="border-t border-gray-300 my-4"></div>

                 <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                     <div class="sm:col-span-2 sm:col-start-1">
                         <label for="fullname"
                             class="block text-sm font-medium leading-6 text-[#3B4999] lg:text-[18px]">نام و
                             نام‌خانوادگی:</label>
                         <div class="mt-2">
                             <input type="text" name="fullname" id="fullname" autocomplete="name"
                                 class="block w-full pr-[0.5rem] rounded-md border-0 py-1.5 text-[#3B4999] shadow-sm ring-1 ring-inset ring-[#3C4999] placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 outline-none"
                                 value="{{ Auth::user()->full_name }}" disabled />
                         </div>
                     </div>
                     <div class="sm:col-span-2">
                         <label for="phone"
                             class="block text-sm font-medium leading-6 text-[#3B4999] lg:text-[18px]">تلفن همراه :</label>
                         <div class="mt-2">
                             <input type="text" name="phone" id="phone" autocomplete="phone"
                                 class="block w-full pr-[0.5rem] rounded-md border-0 py-1.5 text-[#3B4999] shadow-sm ring-1 ring-inset ring-[#3C4999] placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 outline-none"
                                 value="{{ Auth::user()->mobile }}" disabled />
                         </div>
                     </div>
                     <div class="sm:col-span-2">
                         <label for="email"
                             class="block text-sm font-medium leading-6 text-[#3c4999] lg:text-[18px]">ادرس ایمیل:</label>
                         <div class="mt-2">
                             <input type="email" name="email" id="email" autocomplete="email"
                                 class="block w-full pr-[0.5rem] rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-[#3C4999] placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 outline-none"
                                 value="{{ Auth::user()->email }}" disabled />
                         </div>
                     </div>
                     <div class="col-span-full">
                         <label for="street-address"
                             class="block text-sm font-medium leading-6 text-[#3c4999] lg:text-[18px]">ادرس پستی :</label>
                         <div class="mt-2">
                             <input type="text" name="street-address" id="street-address"
                                 autocomplete="street-address"
                                 class="block w-full px-[0.5rem] rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-[#3C4999] placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 outline-none"
                                 value="{{ Auth::user()->address }}" disabled />
                         </div>
                     </div>

                 </div>
             </div>


         </section>


         <!-- Button -->
         <section id="digital-print-submit-btn" class="hidden w-[100%] custom-padding">
             <div
                 class="primary-container mx-auto flex justify-center lg:justify-end bg-white shadow-[-2px_2px_8px_1px_rgba(0,0,0,0.15)] px-[1rem] py-[1rem] rounded-lg">
                 <div class="flex flex-col sm:flex-row gap-[2rem] items-center">
                     {{-- <div class="flex items-center gap-[1rem] text-[--primary-color]">
                         <span class="text-[2rem] lg:text-[2.5rem] font-bold leading-[2rem]">1,234,567</span>
                         <span class="text-[1.5rem] leading-[2rem]">تومان</span>
                     </div> --}}
                     <button class="py-[.8rem] px-[3rem] bg-[--green] text-white text-[1.125rem] rounded-lg"
                         type="submit">
                         ثبت سفارش و پرداخت
                     </button>
                 </div>
             </div>
         </section>
     </form>
 @endsection

 @section('page-script')
     <script src="{{ asset('assets/plugins/jquery-validation/additional-methods.js') }}"></script>
     <script>
         $(document).ready(function() {

             // Complete Form Validation
             $('#digital-print-form').validate({
                 ignore: 'input[type=hidden]',
                 rules: {
                     'size_id': {
                         required: true
                     },
                     'paper_id': {
                         required: true
                     },
                     'color_id': {
                         required: true,
                     },
                     'pages': {
                         required: true
                     },
                     'circulation': {
                         required: true,
                     },
                     'cover_id': {
                         required: true
                     },
                     'binding_id': {
                         required: true
                     },
                     'cellophane_id': {
                         required: true,
                     },
                     'file_content': {
                         required: false,
                         accept: "application/msword, application/pdf, application/x-indesign"
                     },
                     'file_cover': {
                         required: false,
                         accept: "image/*"
                     },
                 },
                 submitHandler: function(form) {
                     console.log('submitHandler called');

                     $('#digital-print-form input[type="file"]').each(function() {
                         if (!$(this).val()) {
                             $(this).addClass("error text-red-700");
                         } else {
                             $(this).removeClass("error text-red-700");
                         }
                     });

                     form.submit();
                 }
             });

             //  Complete Form Submit
             //  $('#digital-print-form').on('submit', function(e) {
             //      console.log('SUBMITTTT');
             //      if (!$('#digital-print-form').valid()) {
             //          e.preventDefault();
             //      }
             //  });

             //  Price Inquiry Click
             $('#price-inquiry-btn').click(function() {
                 if ($('#digital-print-form').valid()) {
                     var data = $('#digital-print-form').serializeArray();
                     $.ajax({
                         type: "GET",
                         headers: {
                             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                         },
                         url: "{!! route('service.print-digital.inquiry') !!}",
                         data: data,

                         success: function(response) {
                             if (response.status == 'success') {
                                 let data = response.data;
                                 $('#final-price-holder').html(data.final_price.toLocaleString(
                                     'en-US'))
                                 $('#call-for-price-message').addClass('hidden');
                                 $('#digital-print-file-input').removeClass('hidden');
                                 $('#digital-print-contacts').removeClass('hidden');
                                 $('#digital-print-submit-btn').removeClass('hidden');

                                 setInvoiceData(
                                     data.service_detail_id,
                                     data.additional_discount,
                                     data.additional_price,
                                     data.tax,
                                     data.final_price
                                 )

                             } else {
                                 $('#final-price-holder').html('0')
                                 $('#call-for-price-message').removeClass('hidden');

                                 $('#digital-print-file-input').addClass('hidden');
                                 $('#digital-print-contacts').addClass('hidden');
                                 $('#digital-print-submit-btn').addClass('hidden');
                             }

                             $('#digital-print-form-error-box').html(''); // reset error box
                         },

                         error: function(response) {
                             hideAjaxLoader()
                             var html = "";
                             var response = JSON.parse(response.responseText);
                             $.each(response.errors, function(key, value) {
                                 html +=
                                     `<div class=''><strong>${value}</strong></div>`;
                             });
                             $('#digital-print-form-error-box').html(html);
                         }
                     });
                 }
             });

             //  Reset Preview
             $(".reset-preview").on("change", function() {
                 let sizeCode = $('select[id=size]').find(':selected').data('code')
                 let bindingDirectionCode = $("input[name=binding_direction_id]:checked").data('code')
                 console.log('resetPreview', sizeCode, bindingDirectionCode)

                 if (sizeCode && bindingDirectionCode) {
                     let src =
                         `{{ asset('assets/modules/website/images/home/form/previews/${sizeCode}_${bindingDirectionCode}.svg') }}`
                     $('#preview-image').attr('src', src)
                 }
             });

         });

         function setInvoiceData(service_detail_id, additional_discount, additional_price, tax, final_price) {
             $('#service_detail_id').val(service_detail_id)
             $('#additional_discount').val(additional_discount)
             $('#additional_price').val(additional_price)
             $('#tax').val(tax)
             $('#final_price').val(final_price)
         }
     </script>
 @endsection
