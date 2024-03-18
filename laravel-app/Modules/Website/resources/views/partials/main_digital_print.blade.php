<!-- main -->
<form class="bg-[#f5f5f5] py-[3rem]" action="">
    <h1 class="font-bold text-[2rem] text-center text-[--primary-color] mb-[3rem]">
        سفارش چاپ دیجیتال
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
                        <div class="h-[1px] bg-[#D9D9D9] my-[1.25rem]"></div>
                    </div>
                    <!-- select aria -->
                    <div class="grid grid-cols-1 gap-x-8 gap-y-[2rem] md:grid-cols-2">
                        <div class="col-span-2 md:col-span-1">
                            <label for="size" class="block font-medium leading-6">سایز:</label>
                            <div class="mt-2">
                                <select id="size" name="size" autocomplete="size-name"
                                    class="block w-full lg:max-w-[18.75rem] rounded-md border-0 py-1.5 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:leading-6">
                                    <option>انتخاب کنید</option>
                                    @foreach ($digitalPrintData['sizes'] as $item)
                                        <option value="{{ $item->code }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-span-2 md:col-span-1">
                            <label for="type" class="block font-medium leading-6">نوع کاغذ:</label>
                            <div class="mt-2">
                                <select id="type" name="type" autocomplete="type-name"
                                    class="block w-full lg:max-w-[18.75rem] rounded-md border-0 py-1.5 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:leading-6">
                                    <option>انتخاب کنید</option>
                                    @foreach ($digitalPrintData['papers'] as $item)
                                        <option value="{{ $item->code }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-span-2 md:col-span-1">
                            <label for="color" class="block font-medium leading-6">رنگ چاپ:</label>
                            <div class="mt-2">
                                <select id="color" name="color" autocomplete="color-name"
                                    class="block w-full lg:max-w-[18.75rem] rounded-md border-0 py-1.5 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:leading-6">
                                    <option>انتخاب کنید</option>
                                    @foreach ($digitalPrintData['colors'] as $item)
                                        <option value="{{ $item->code }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-span-2 md:col-span-1">
                            <label for="number-of-pages" class="block font-medium leading-6">تعداد صفحات:</label>
                            <div class="mt-2">
                                <input type="text" name="number-of-pages" id="number-of-pages"
                                    autocomplete="given-name"
                                    class="block w-full lg:max-w-[18.75rem] rounded-md border-0 py-1.5 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm sm:leading-6" />
                            </div>
                        </div>

                        <div class="col-span-2 md:col-span-1">
                            <label for="circulation" class="block font-medium leading-6">تیراژ:</label>
                            <div class="mt-2">
                                <input type="text" name="circulation" id="circulation" autocomplete="given-name"
                                    class="block w-full lg:max-w-[18.75rem] rounded-md border-0 py-1.5 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm sm:leading-6" />
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
                        <div class="h-[1px] bg-[#D9D9D9] my-[1.25rem]"></div>
                    </div>
                    <!-- select aria -->
                    <div class="grid grid-cols-1 gap-x-8 gap-y-[2rem] md:grid-cols-2">
                        <!-- right -->
                        <div class="col-span-2 md:col-span-1">
                            <label for="country" class="block font-medium leading-6">جنس حلد:</label>
                            <div class="mt-2">
                                <select id="country" name="country" autocomplete="country-name"
                                    class="block w-full lg:max-w-[18.75rem] rounded-md border-0 py-1.5 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:leading-6">
                                    <option>انتخاب کنید</option>
                                    @foreach ($digitalPrintData['covers'] as $item)
                                        <option value="{{ $item->code }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-span-2 md:col-span-1">
                            <label for="country" class="block font-medium leading-6">نوع صحافی:</label>
                            <div class="mt-2">
                                <select id="country" name="country" autocomplete="country-name"
                                    class="block w-full lg:max-w-[18.75rem] rounded-md border-0 py-1.5 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:leading-6">
                                    <option>انتخاب کنید</option>
                                    @foreach ($digitalPrintData['bindings'] as $item)
                                        <option value="{{ $item->code }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-span-2 md:col-span-1">
                            <label for="country" class="block font-medium leading-6">نوع سلفون:</label>
                            <div class="mt-2">
                                <select id="country" name="country" autocomplete="country-name"
                                    class="block w-full lg:max-w-[18.75rem] rounded-md border-0 py-1.5 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:leading-6">
                                    <option>انتخاب کنید</option>
                                    @foreach ($digitalPrintData['cellophanes'] as $item)
                                        <option value="{{ $item->code }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- lg:w-[12.75rem] xl:w-[14.75rem] 2xl:w-[15.75rem] -->

                    <div class="flex flex-col gap-[1rem] mt-[2rem] items-start">
                        <label class="block font-medium leading-6">جهت صحافی:</label>

                        <ul class="w-[100%] xl:w-[75%] 2xl:w-[65%] grid gap-6 grid-cols-2 sm:grid-cols-4">
                            <li class="flex justify-center max-w-[10rem]">
                                <input type="radio" id="hosting-extra-small" name="hosting" value="fa-v"
                                    class="hidden peer" checked required />
                                <label for="hosting-extra-small"
                                    class="flex flex-col justify-between w-[100%] h-[7.6875rem] border-[#3C4999] border-[1px] rounded-[0.4375rem] cursor-pointer peer-checked:bg-[--primary-color] peer-checked:text-white"
                                    for="">
                                    <div class="h-[77%] w-[100%]">
                                        <img class="w-[100%] h-[100%]" src="./images/home/home/auto-slider/Aban.png"
                                            alt="" />
                                    </div>
                                    <span
                                        class="block w-[100%] text-[0.875rem] h-[23%] leading-[1.5rem] text-center border-t-[#3C4999] border-t-[1px] peer-checked:bg-[--primary-color] peer-checked:text-white">
                                        فارسی عمودی
                                    </span>
                                </label>
                            </li>
                            <li class="flex justify-center max-w-[10rem]">
                                <input type="radio" id="hosting-small" name="hosting" value="fa-h"
                                    class="hidden peer" required />
                                <label for="hosting-small"
                                    class="flex flex-col justify-between w-[100%] h-[7.6875rem] border-[#3C4999] border-[1px] rounded-[0.4375rem] cursor-pointer peer-checked:bg-[--primary-color] peer-checked:text-white"
                                    for="">
                                    <div class="h-[77%] w-[100%]">
                                        <img class="w-[100%] h-[100%]"
                                            src="./images/home/home/auto-slider/AndisheArshad.png" alt="" />
                                    </div>
                                    <span
                                        class="block w-[100%] text-[0.875rem] h-[23%] leading-[1.5rem] text-center border-t-[#3C4999] border-t-[1px] peer-checked:bg-[--primary-color] peer-checked:text-white">
                                        فارسی افقی
                                    </span>
                                </label>
                            </li>
                            <li class="flex justify-center max-w-[10rem]">
                                <input type="radio" id="hosting-medium" name="hosting" value="en-v"
                                    class="hidden peer" required />
                                <label for="hosting-medium"
                                    class="flex flex-col justify-between w-[100%] h-[7.6875rem] border-[#3C4999] border-[1px] rounded-[0.4375rem] cursor-pointer peer-checked:bg-[--primary-color] peer-checked:text-white"
                                    for="">
                                    <div class="h-[77%] w-[100%]">
                                        <img class="w-[100%] h-[100%]"
                                            src="./images/home/home/auto-slider/Arjmand.png" alt="" />
                                    </div>
                                    <span
                                        class="block w-[100%] text-[0.875rem] h-[23%] leading-[1.5rem] text-center border-t-[#3C4999] border-t-[1px] peer-checked:bg-[--primary-color] peer-checked:text-white">
                                        انگلیسی عمودی
                                    </span>
                                </label>
                            </li>
                            <li class="flex justify-center max-w-[10rem]">
                                <input type="radio" id="hosting-big" name="hosting" value="en-h"
                                    class="hidden peer" />
                                <label for="hosting-big"
                                    class="flex flex-col justify-between w-[100%] h-[7.6875rem] border-[#3C4999] border-[1px] rounded-[0.4375rem] cursor-pointer peer-checked:bg-[--primary-color] peer-checked:text-white"
                                    for="">
                                    <div class="h-[77%] w-[100%]">
                                        <img class="w-[100%] h-[100%]" src="./images/home/home/auto-slider/Mahi.png"
                                            alt="" />
                                    </div>
                                    <span
                                        class="block w-[100%] text-[0.875rem] h-[23%] leading-[1.5rem] text-center border-t-[#3C4999] border-t-[1px] peer-checked:bg-[--primary-color] peer-checked:text-white">
                                        انگلیسی افقی
                                    </span>
                                </label>
                            </li>
                        </ul>
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
                        <div class="h-[1px] bg-[#D9D9D9] my-[1.25rem]"></div>
                    </div>
                    <div class="flex justify-center items-center py-[5rem]">
                        <img class="w-[25rem]"
                            src="{{ asset('assets/modules/website/images/home/form/previews/preview.svg') }}"
                            alt="" />
                    </div>
                </div>

                <div class="">
                    <div>
                        <h3 class="text-[1.5rem] lg:text-[1.6rem] xl:text-[2rem] font-bold">
                            هزینه چاپ
                        </h3>
                        <div class="h-[1px] bg-[#D9D9D9] my-[1rem]"></div>
                    </div>
                    <div>
                        <div class="flex items-center gap-[1rem] justify-end">
                            <span class="text-[1.5rem] lg:text-[2rem] xl:text-[2.5rem] font-bold">1,234,567</span>
                            <span class="text-[1.2rem] lg:text-[1.5rem] xl:text-[2rem]">تومان</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- File Input -->
    <section class="mb-[1rem] w-[100%] rounded-[10px] custom-padding">
        <div
            class="primary-container flex flex-col lg:flex-row lg:gap-[10rem] gap-[4rem] justify-between mx-auto p-[2rem] shadow-[-2px_2px_8px_1px_rgba(0,0,0,0.15)] rounded-xl bg-white">
            <div class="w-[100%]">
                <h3 class="text-right text-indigo-800 text-2xl font-bold">
                    آپلود فایل متن
                </h3>
                <div class="w-[100%] h-[0px] border border-neutral-400 my-5"></div>
                <div class="flex items-center justify-center w-full mb-[9px]">
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
                </div>
                <div>
                    <h4 class="text-indigo-800 my-[1rem] text-xl font-bold">
                        نکات مهم فایل متن
                    </h4>
                    <ul class="list-disc pr-[3rem]">
                        <li class="text-indigo-800 text-xl font-normal">
                            فایل ارسالی حتما در قالب Word، InDesign یا PDF باشد.
                        </li>
                        <li class="text-indigo-800 text-xl font-normal">
                            حاشیه‌ی مناسب از بالا و پایین به مقدار x و از چپ و راست به
                            مقدار y است.
                        </li>
                        <li class="text-indigo-800 text-xl font-normal">
                            نکات بعدی...
                        </li>
                    </ul>
                </div>
            </div>

            <div class="w-[100%]">
                <h3 class="text-right text-indigo-800 text-2xl font-bold">
                    آپلود فایل جلد
                </h3>
                <div class="w-[100%] h-[0px] border border-neutral-400 my-5"></div>
                <div class="flex items-center justify-center w-full mb-[9px]">
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
                </div>
                <div>
                    <h4 class="text-indigo-800 text-xl my-[1rem] font-bold">
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
    <section dir="rtl" class="bg-[#f5f5f5] custom-padding py-[2rem]">

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
                            class="block w-full pr-[0.5rem] rounded-md border-0 py-1.5 text-[#3B4999] shadow-sm ring-1 ring-inset ring-[#3C4999] placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 outline-none" />
                    </div>
                </div>
                <div class="sm:col-span-2">
                    <label for="phone"
                        class="block text-sm font-medium leading-6 text-[#3B4999] lg:text-[18px]">تلفن همراه :</label>
                    <div class="mt-2">
                        <input type="text" name="phone" id="phone" autocomplete="phone"
                            class="block w-full pr-[0.5rem] rounded-md border-0 py-1.5 text-[#3B4999] shadow-sm ring-1 ring-inset ring-[#3C4999] placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 outline-none" />
                    </div>
                </div>
                <div class="sm:col-span-2">
                    <label for="email"
                        class="block text-sm font-medium leading-6 text-[#3c4999] lg:text-[18px]">ادرس ایمیل:</label>
                    <div class="mt-2">
                        <input type="email" name="email" id="email" autocomplete="email"
                            class="block w-full pr-[0.5rem] rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-[#3C4999] placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 outline-none" />
                    </div>
                </div>
                <div class="col-span-full">
                    <label for="street-address"
                        class="block text-sm font-medium leading-6 text-[#3c4999] lg:text-[18px]">ادرس پستی :</label>
                    <div class="mt-2">
                        <textarea type="text" name="street-address" id="street-address" autocomplete="street-address"
                            class="block w-full px-[0.5rem] rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-[#3C4999] placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 outline-none"></textarea>
                    </div>
                </div>

            </div>
        </div>


    </section>


    <!-- Button -->
    <section class="w-[100%] custom-padding">
        <div
            class="primary-container mx-auto flex justify-center lg:justify-end bg-white shadow-[-2px_2px_8px_1px_rgba(0,0,0,0.15)] px-[1rem] py-[1rem] rounded-lg">
            <div class="flex flex-col sm:flex-row gap-[2rem] items-center">
                <div class="flex items-center gap-[1rem] text-[--primary-color]">
                    <span class="text-[2rem] lg:text-[2.5rem] font-bold leading-[2rem]">1,234,567</span>
                    <span class="text-[1.5rem] leading-[2rem]">تومان</span>
                </div>
                <button class="py-[.8rem] px-[3rem] bg-[--green] text-white text-[1.125rem] rounded-lg">
                    ثبت سفارش و پرداخت
                </button>
            </div>
        </div>
    </section>
</form>
