<!-- Orders -->
<section class="w-[100%] bg-[#F5F5F5] py-[3rem] custom-padding text-[--primary-color]">
    <div class="primary-container mx-auto">
        <div>
            <h1 class="text-center text-[1.5rem] lg:text-[1.6rem] xl:text-[2rem] font-bold mb-[1rem]">
                سفارش های من
            </h1>
        </div>
        <div class="mx-auto grid grid-cols-1 lg:gap-x-8 gap-y-8 lg:grid-cols-5 xl:gap-x-9">
            @include('website::partials.user_dashboard_sidebar')

            <div
                class="border-gray-300 border-2 col-span-1 lg:col-span-4 gap-[2rem] bg-white rounded-lg shadow-[-2px_2px_8px_1px_rgba(0,0,0,0.15)] py-[1.5rem]">
                <div class="flex flex-col justify-star">
                    <div class="flex flex-col justify-between lg:py-4 px-5 gap-y-3">
                        <div>
                            <h2 class="text-right text-[1.2rem] xl:text-[1.5rem] font-bold">
                                سفارش چاپ دیجیتال-۱۱۲۳۴۴
                            </h2>
                        </div>
                        <div>
                            <p class="text-right text-[1rem] lg:text-[1.25rem]">
                                ایجاد شده در 10 بهمن 1402،ساعت 12:30
                            </p>
                        </div>
                        <div>
                            <p class="text-right text-[1rem] lg:text-[1.25rem]">
                                شماره پیگیری : 123456789
                            </p>
                        </div>
                        <div class="flex gap-[1rem] justify-star items-center">
                            <span class="text-[1.2rem] xl:text-[1.5rem] font-bold">وضعیت :</span>
                            <span
                                class="text-[1.2rem] xl:text-[1.5rem] bg-[#FFF0B9] text-[#E17640] px-[1rem] rounded-lg">در
                                انتظار تایید</span>
                        </div>
                        <div class="flex gap-[1rem] justify-star items-center">
                            <span class="text-[1.4rem] xl:text-[2rem] font-bold">1,234,567</span>
                            <span class="text-[1.2rem] xl:text-[1.5rem]">تومان</span>
                        </div>
                        <div class="flex items-center gap-[1rem] justify-center sm:justify-end">
                            <button
                                class="text-center text-[0.75rem] sm:text-[1rem] lg:text-[1.2rem] w-[200px] h-[40px] h-[50px] bg-[#00B6DE] rounded-lg text-white">
                                مشاهده جزئیات
                            </button>
                        </div>
                    </div>
                    <div class="h-[1px] bg-black my-3 mx-[1.5rem]"></div>
                    <div class="flex flex-col justify-between pt-4 lg:py-4 px-5 gap-y-3">
                        <div>
                            <h2 class="text-right text-[1.2rem] xl:text-[1.5rem] font-bold">
                                سفارش چاپ دیجیتال-۱۱۲۳۴۴
                            </h2>
                        </div>
                        <div>
                            <p class="text-right text-[1rem] lg:text-[1.25rem]">
                                ایجاد شده در 10 بهمن 1402،ساعت 12:30
                            </p>
                        </div>
                        <div>
                            <p class="text-right text-[1rem] lg:text-[1.25rem]">
                                شماره پیگیری : 123456789
                            </p>
                        </div>
                        <div class="flex gap-[1rem] justify-star items-center">
                            <span class="text-[1.2rem] xl:text-[1.5rem] font-bold">وضعیت :</span>
                            <span
                                class="text-[1.2rem] xl:text-[1.5rem] bg-[#BAFDD5] text-[#51956D] px-[1rem] rounded-lg">انجام
                                شده</span>
                        </div>
                        <div class="flex gap-[1rem] justify-star items-center">
                            <span class="text-[1.4rem] xl:text-[2rem] font-bold">1,234,567</span>
                            <span class="text-[1.2rem] xl:text-[1.5rem]">تومان</span>
                        </div>
                        <div class="flex items-center gap-[1rem] justify-center sm:justify-end">
                            <button
                                class="text-center text-[0.75rem] sm:text-[1rem] lg:text-[1.2rem] w-[200px] h-[40px] h-[50px] bg-[#00B6DE] rounded-lg text-white">
                                مشاهده جزئیات
                            </button>
                        </div>
                    </div>
                    <div class="h-[1px] bg-black my-3 mx-[1.5rem]"></div>
                    <div class="flex flex-col justify-between pt-4 lg:py-4 px-5 gap-y-3">
                        <div>
                            <h2 class="text-right text-[1.2rem] xl:text-[1.5rem] font-bold">
                                سفارش چاپ دیجیتال-۱۱۲۳۴۴
                            </h2>
                        </div>
                        <div>
                            <p class="text-right text-[1rem] lg:text-[1.25rem]">
                                ایجاد شده در 10 بهمن 1402،ساعت 12:30
                            </p>
                        </div>
                        <div>
                            <p class="text-right text-[1rem] lg:text-[1.25rem]">
                                شماره پیگیری : 123456789
                            </p>
                        </div>
                        <div class="flex gap-[1rem] justify-star items-center">
                            <span class="text-[1.2rem] xl:text-[1.5rem] font-bold">وضعیت :</span>
                            <span
                                class="text-[1.2rem] xl:text-[1.5rem] bg-[#CCD3FF] text-[#3C4999] px-[1rem] rounded-lg">تایید
                                شده</span>
                        </div>
                        <div class="flex gap-[1rem] justify-star items-center">
                            <span class="text-[1.4rem] xl:text-[2rem] font-bold">1,234,567</span>
                            <span class="text-[1.2rem] xl:text-[1.5rem]">تومان</span>
                        </div>
                        <div class="flex items-center gap-[1rem] justify-center sm:justify-end">
                            <button
                                class="text-center text-[0.75rem] sm:text-[1rem] lg:text-[1.2rem] w-[200px] h-[40px] h-[50px] bg-[#00B6DE] rounded-lg text-white">
                                مشاهده جزئیات
                            </button>
                        </div>
                    </div>
                    <div class="h-[1px] bg-black my-3 mx-[1.5rem]"></div>
                    <div class="flex flex-col justify-between pt-4 lg:py-4 px-5 gap-y-3">
                        <div>
                            <h2 class="text-right text-[1.2rem] xl:text-[1.5rem] font-bold">
                                سفارش چاپ دیجیتال-۱۱۲۳۴۴
                            </h2>
                        </div>
                        <div>
                            <p class="text-right text-[1rem] lg:text-[1.25rem]">
                                ایجاد شده در 10 بهمن 1402،ساعت 12:30
                            </p>
                        </div>
                        <div>
                            <p class="text-right text-[1rem] lg:text-[1.25rem]">
                                شماره پیگیری : 123456789
                            </p>
                        </div>
                        <div class="flex gap-[1rem] justify-star items-center">
                            <span class="text-[1.2rem] xl:text-[1.5rem] font-bold">وضعیت :</span>
                            <span
                                class="text-[1.2rem] xl:text-[1.5rem] bg-[#FFD3D5] text-[#E30813] px-[1rem] rounded-lg">رد
                                شده</span>
                        </div>
                        <div class="flex gap-[1rem] justify-star items-center">
                            <span class="text-[1.4rem] xl:text-[2rem] font-bold">1,234,567</span>
                            <span class="text-[1.2rem] xl:text-[1.5rem]">تومان</span>
                        </div>
                        <div class="flex items-center gap-[1rem] justify-center sm:justify-end">
                            <button
                                class="text-center text-[0.75rem] sm:text-[1rem] lg:text-[1.2rem] w-[200px] h-[40px] h-[50px] bg-[#00B6DE] rounded-lg text-white">
                                مشاهده جزئیات
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
