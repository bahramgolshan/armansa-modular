 @extends('website::layouts.front_master')

 @section('content')
     <!-- main -->
     <form class="bg-[#f5f5f5] py-[3rem]" action="">
         <h1 class="font-bold text-[2rem] text-center text-[--primary-color] mb-[3rem]">
             جزئیات سفارش
         </h1>
         <!-- orders -->
         <section class="w-[100%] mb-[3rem] custom-padding text-[--primary-color]">
             <div
                 class="primary-container mx-auto grid grid-cols-1 xl:gap-x-[10%] lg:gap-x-[5%] gap-y-8 lg:grid-cols-5 bg-white p-[1.5rem] rounded-lg shadow-[-2px_2px_8px_1px_rgba(0,0,0,0.15)]">
                 <!-- right -->
                 <div class="lg:col-span-3 flex flex-col gap-[2rem] text-[1.125rem]">
                     <!-- top -->
                     <div>
                         <div>
                             <h3 class="text-[1.5rem] lg:text-[1.6rem] xl:text-[2rem] font-bold">
                                 مشخصات کلی
                             </h3>
                             <div class="h-[1px] bg-gray-800 my-[1.25rem]"></div>
                         </div>
                         <!-- select aria -->
                         <div class="grid grid-cols-1 gap-x-8 gap-y-[2rem] md:grid-cols-2">
                             <div class="col-span-2 md:col-span-1">
                                 <label for="size" class="block font-medium leading-6">سایز:</label>
                                 <div class="mt-2">
                                     <input type="text" name="size" id="size" autocomplete="given-name"
                                         class="block w-full lg:max-w-[18.75rem] rounded-md border-0 py-1.5 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm sm:leading-6"
                                         disabled value="{{ $serviceDetail->size->name }}" />
                                 </div>
                             </div>

                             <div class="col-span-2 md:col-span-1">
                                 <label for="type" class="block font-medium leading-6">نوع کاغذ:</label>
                                 <div class="mt-2">
                                     <input type="text" name="type" id="type" autocomplete="given-name"
                                         class="block w-full lg:max-w-[18.75rem] rounded-md border-0 py-1.5 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm sm:leading-6"
                                         disabled value="{{ $serviceDetail->paper->name }}" />
                                 </div>
                             </div>

                             <div class="col-span-2 md:col-span-1">
                                 <label for="color" class="block font-medium leading-6">رنگ چاپ:</label>
                                 <div class="mt-2">
                                     <input type="text" name="color" id="color" autocomplete="given-name"
                                         class="block w-full lg:max-w-[18.75rem] rounded-md border-0 py-1.5 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm sm:leading-6"
                                         disabled value="{{ $serviceDetail->color->name }}" />
                                 </div>
                             </div>

                             <div class="col-span-2 md:col-span-1">
                                 <label for="pages" class="block font-medium leading-6">تعداد صفحات:</label>
                                 <div class="mt-2">
                                     <input type="text" name="pages" id="pages" autocomplete="given-name"
                                         class="block w-full lg:max-w-[18.75rem] rounded-md border-0 py-1.5 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm sm:leading-6"
                                         disabled value="{{ $invoiceDetail->pages }}" />
                                 </div>
                             </div>

                             <div class="col-span-2 md:col-span-1">
                                 <label for="circulation" class="block font-medium leading-6">تیراژ:</label>
                                 <div class="mt-2">
                                     <input type="text" name="circulation" id="circulation" autocomplete="given-name"
                                         class="block w-full lg:max-w-[18.75rem] rounded-md border-0 py-1.5 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm sm:leading-6"
                                         disabled value="{{ $invoiceDetail->circulation }}" />
                                 </div>
                             </div>
                         </div>
                     </div>
                     <!-- bottom -->
                     <div>
                         <div>
                             <h3 class="text-[1.5rem] lg:text-[1.6rem] xl:text-[2rem] font-bold">
                                 مشخصات کلی
                             </h3>
                             <div class="h-[1px] bg-gray-800 my-[1.25rem]"></div>
                         </div>
                         <!-- select aria -->
                         <div class="grid grid-cols-1 gap-x-8 gap-y-[2rem] md:grid-cols-2">
                             <!-- right -->
                             <div class="col-span-2 md:col-span-1">
                                 <label for="book-cover" class="block font-medium leading-6">جنس جلد:</label>
                                 <div class="mt-2">
                                     <input type="text" name="book-cover" id="book-cover" autocomplete="given-name"
                                         class="block w-full lg:max-w-[18.75rem] rounded-md border-0 py-1.5 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm sm:leading-6"
                                         disabled value="{{ $serviceDetail->cover->name }}" />
                                 </div>
                             </div>

                             <div class="col-span-2 md:col-span-1">
                                 <label for="bookbinding-type" class="block font-medium leading-6">نوع صحافی:</label>
                                 <div class="mt-2">
                                     <input type="text" name="bookbinding-type" id="bookbinding-type"
                                         autocomplete="given-name"
                                         class="block w-full lg:max-w-[18.75rem] rounded-md border-0 py-1.5 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm sm:leading-6"
                                         disabled value="{{ $serviceDetail->binding->name }}" />
                                 </div>
                             </div>

                             <div class="col-span-2 md:col-span-1">
                                 <label for="cellophane-type" class="block font-medium leading-6">نوع سلفون:</label>
                                 <div class="mt-2">
                                     <input type="text" name="cellophane-type" id="cellophane-type"
                                         autocomplete="given-name"
                                         class="block w-full lg:max-w-[18.75rem] rounded-md border-0 py-1.5 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm sm:leading-6"
                                         disabled value="{{ $serviceDetail->cellophane->name }}" />
                                 </div>
                             </div>
                         </div>

                         <!-- lg:w-[12.75rem] xl:w-[14.75rem] 2xl:w-[15.75rem] -->

                         <div class="flex flex-col gap-[1rem] mt-[2rem] items-start">
                             <label class="block font-medium leading-6">جهت صحافی:</label>

                             <ul class="w-[100%] xl:w-[75%] 2xl:w-[65%] grid gap-6 grid-cols-2 sm:grid-cols-4">
                                 <li class="flex justify-center max-w-[9rem] lg:max-w-[10rem]">
                                     <input type="radio"
                                         id="binding_direction_{{ $serviceDetail->bindingDirection->code }}"
                                         name="binding_direction_id" value="{{ $serviceDetail->bindingDirection->id }}"
                                         data-code="{{ $serviceDetail->bindingDirection->code }}"
                                         class="reset-preview hidden peer" required checked />
                                     <label for="binding_direction_{{ $serviceDetail->bindingDirection->code }}"
                                         class="flex flex-col justify-between w-[100%] h-[7.6875rem] border-[#3C4999] cursor-pointer"
                                         for="">
                                         <div class="h-[77%] border-[1px] border-[#3C4999] rounded-t-[0.4375rem] w-[100%]">
                                             <img class="w-[100%] h-[100%]"
                                                 src="{{ asset('assets/modules/website/images/icon/' . $serviceDetail->bindingDirection->code . '.svg') }}"
                                                 alt="" />
                                         </div>
                                         <span
                                             class="block w-[100%] text-[0.875rem] h-[23%] leading-[1.5rem] text-center rounded-b-[0.4375rem] border-x-[1px] border-b-[1px] border-[#3C4999]">{{ $serviceDetail->bindingDirection->name }}</span>
                                     </label>
                                 </li>

                             </ul>
                         </div>
                     </div>

                     <div>
                         <div>
                             <h3 class="text-[1.5rem] lg:text-[1.6rem] xl:text-[2rem] font-bold">
                                 فایل ها ضمیمه
                             </h3>
                             <div class="h-[1px] bg-gray-800 my-[1.25rem]"></div>
                         </div>

                         {{-- Files --}}
                         <div class="grid grid-cols-1 gap-x-8 gap-y-[2rem] md:grid-cols-2">
                             <!-- right -->
                             <div class="col-span-2 md:col-span-1">
                                 <label for="file-content" class="block font-medium leading-6">فایل متن:</label>
                                 <div class="mt-2">
                                     <a name="file-content" id="file-content"
                                         href="{{ asset(get_file_upload_path('invoice-detail-files', $invoiceDetail->id) . $fileContent->file_name) }}"
                                         target="_blank">{{ $fileContent->original_name }}</a>
                                 </div>
                             </div>

                             <div class="col-span-2 md:col-span-1">
                                 <label for="file-cover" class="block font-medium leading-6">فایل جلد:</label>
                                 <div class="mt-2">
                                     <a name="file-cover" id="file-cover"
                                         href="{{ asset(get_file_upload_path('invoice-detail-files', $invoiceDetail->id) . $fileCover->file_name) }}"
                                         target="_blank">{{ $fileCover->original_name }}</a>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
                 <!-- left -->
                 <div class="lg:col-span-2 flex flex-col justify-start gap-[2rem] text-[1.125rem]">
                     <div class="">
                         <div>
                             <h3 class="text-[1.5rem] lg:text-[1.6rem] xl:text-[2rem] font-bold">
                                 پیش نمایش
                             </h3>
                             <div class="h-[1px] bg-black my-[1.25rem]"></div>
                         </div>
                         <div class="flex justify-center items-center py-[5rem]">
                             <img class="w-[25rem]"
                                 src="{{ asset('assets/modules/website/images/home/form/previews/' . $serviceDetail->size->code . '_' . $serviceDetail->bindingDirection->code . '.svg') }}"
                                 alt="" />
                         </div>
                     </div>

                     <div class="">
                         <div>
                             <h3 class="text-[1.5rem] lg:text-[1.6rem] xl:text-[2rem] font-bold">
                                 هزینه چاپ
                             </h3>
                             <div class="h-[1px] bg-black my-[1rem]"></div>
                         </div>
                         <div>
                             <div class="flex items-center gap-[1rem] justify-end">
                                 <span
                                     class="text-[1.5rem] lg:text-[2rem] xl:text-[2.5rem] font-bold">{{ number_format($invoice->final_price) }}</span>
                                 <span class="text-[1.2rem] lg:text-[1.5rem] xl:text-[2rem]">تومان</span>
                             </div>
                         </div>
                     </div>

                 </div>

             </div>
         </section>

     </form>
 @endsection
