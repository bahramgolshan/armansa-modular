<!-- Cart -->
<section class="w-[100%] bg-[#F5F5F5] py-[3rem] custom-padding text-[--primary-color]">
    <div class="primary-container mx-auto">
        <div>
            <h1 class="text-center text-[1.5rem] lg:text-[1.6rem] xl:text-[2rem] font-bold mb-[1rem]">
                سبد خرید
            </h1>
        </div>
        <div class="mx-auto grid grid-cols-1 lg:gap-x-8 gap-y-8 lg:grid-cols-5 xl:gap-x-9">
            @include('website::partials.customer_dashboard_sidebar')
            <div
                class="border-gray-300 border-2 col-span-1 lg:col-span-4 gap-[2rem] bg-white rounded-[0.313rem] lg:rounded-[0.625rem] shadow-[-2px_2px_8px_1px_rgba(0,0,0,0.15)]">
                <div class="grid grid-cols-1 lg:gap-x-9 gap-y-8 lg:grid-cols-5">
                    <div class="col-span-1 lg:col-span-3 flex flex-col justify-between pt-4 lg:py-4 px-5 gap-y-3">
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
                        <div class="flex gap-[1rem] justify-star">
                            <span class="text-[1.2rem] xl:text-[1.5rem] font-bold">1,234,567</span>
                            <span class="text-[1.2rem] xl:text-[1.5rem]">تومان</span>
                        </div>
                        <div class="flex items-center gap-[1rem] justify-end">
                            <button
                                class="text-center text-[0.75rem] sm:text-[1rem] lg:text-[1.2rem] w-[200px] h-[40px] h-[50px] bg-[#00B6DE] rounded-lg text-white">
                                مشاهده جزئیات
                            </button>
                            <button
                                class="text-center text-[0.75rem] sm:text-[1rem] lg:text-[1.2rem] w-[200px] h-[40px] h-[50px] bg-transparent rounded-lg text-[#E30813] border-[#E30813] border-2">
                                حذف از سبد خرید
                            </button>
                        </div>
                    </div>
                    <div class="col-span-1 lg:col-span-2 flex flex-col justify-start lg:py-4 pb-4 pt-2 px-5 gap-y-3">
                        <div>
                            <h2 class="text-right text-[1.2rem] xl:text-[1.5rem] font-bold">
                                مجموع سبد خرید
                            </h2>
                        </div>
                        <div class="h-[1px] bg-black my-[4px]"></div>
                        <div class="flex gap-[1rem] justify-end">
                            <span class="text-[1.2rem] xl:text-[1.5rem] font-bold">1,234,567</span>
                            <span class="text-[1.2rem] xl:text-[1.5rem]">تومان</span>
                        </div>
                        <div class="flex items-center gap-[1rem] justify-end">
                            <button
                                class="w-[200px] text-[0.75rem] sm:text-[1rem] lg:text-[1.2rem] h-[50px] bg-[#51956D] rounded-lg text-white text-center">
                                پرداخت
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Cart -->
<section class="w-[100%] bg-[#F5F5F5] py-[3rem] custom-padding text-[--primary-color]">
    <div class="primary-container mx-auto">
        <div>
            <h1 class="text-center text-[1.5rem] lg:text-[1.6rem] xl:text-[2rem] font-bold mb-[1rem]">
                سبد خرید
            </h1>
        </div>
        <div class="mx-auto grid grid-cols-1 lg:gap-x-8 gap-y-8 lg:grid-cols-5 xl:gap-x-9">
            @include('website::partials.customer_dashboard_sidebar')
            <div
                class="border-gray-300 border-2 col-span-1 lg:col-span-4 gap-[2rem] bg-white rounded-lg shadow-[-2px_2px_8px_1px_rgba(0,0,0,0.15)]">
                <div class="grid grid-cols-1 lg:gap-x-9 gap-y-8 lg:grid-cols-5">
                    <div class="col-span-1 lg:col-span-3 flex flex-col justify-star">
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
                            <div class="flex gap-[1rem] justify-star">
                                <span class="text-[1.2rem] xl:text-[1.5rem] font-bold">1,234,567</span>
                                <span class="text-[1.2rem] xl:text-[1.5rem]">تومان</span>
                            </div>
                            <div class="flex items-center gap-[1rem] justify-end">
                                <button
                                    class="text-center text-[0.75rem] sm:text-[1rem] lg:text-[1.2rem] w-[200px] h-[40px] h-[50px] bg-[#00B6DE] rounded-lg text-white">
                                    مشاهده جزئیات
                                </button>
                                <button
                                    class="text-center text-[0.75rem] sm:text-[1rem] lg:text-[1.2rem] w-[200px] h-[40px] h-[50px] bg-transparent rounded-lg text-[#E30813] border-[#E30813] border-2">
                                    حذف از سبد خرید
                                </button>
                            </div>
                        </div>
                        <div class="h-[1px] bg-black my-3 mx-5"></div>
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
                            <div class="flex gap-[1rem] justify-star">
                                <span class="text-[1.2rem] xl:text-[1.5rem] font-bold">1,234,567</span>
                                <span class="text-[1.2rem] xl:text-[1.5rem]">تومان</span>
                            </div>
                            <div class="flex items-center gap-[1rem] justify-end">
                                <button
                                    class="text-center text-[0.75rem] sm:text-[1rem] lg:text-[1.2rem] w-[200px] h-[40px] h-[50px] bg-[#00B6DE] rounded-lg text-white">
                                    مشاهده جزئیات
                                </button>
                                <button
                                    class="text-center text-[0.75rem] sm:text-[1rem] lg:text-[1.2rem] w-[200px] h-[40px] h-[50px] bg-transparent rounded-lg text-[#E30813] border-[#E30813] border-2">
                                    حذف از سبد خرید
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="col-span-1 lg:col-span-2 flex flex-col justify-start lg:py-4 pb-4 pt-2 px-5 gap-y-3">
                        <div>
                            <h2 class="text-right text-[1.2rem] xl:text-[1.5rem] font-bold">
                                مجموع سبد خرید
                            </h2>
                        </div>
                        <div class="h-[1px] bg-black my-[4px]"></div>
                        <div class="flex gap-[1rem] justify-end">
                            <span class="text-[1.2rem] xl:text-[1.5rem] font-bold">1,234,567</span>
                            <span class="text-[1.2rem] xl:text-[1.5rem]">تومان</span>
                        </div>
                        <div class="flex items-center gap-[1rem] justify-end">
                            <button
                                class="w-[200px] text-[0.75rem] sm:text-[1rem] lg:text-[1.2rem] h-[50px] bg-[#51956D] rounded-lg text-white text-center">
                                پرداخت
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
