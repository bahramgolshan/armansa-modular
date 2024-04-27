<!-- Successful -->
<section class="w-[100%] bg-[#F5F5F5] py-[3rem] custom-padding text-[--primary-color]">
    <div class="primary-container mx-auto">
        <div>
            <h1 class="text-center text-[1.5rem] lg:text-[1.6rem] xl:text-[2rem] font-bold mb-[1rem]">
                سبد خرید
            </h1>
        </div>
        <div class="mx-auto grid grid-cols-1 lg:gap-x-8 gap-y-8 lg:grid-cols-5 xl:gap-x-9">
            @include('front/partials/user_dashboard_sidebar')
            <div
                class="border-gray-300 border-2 col-span-1 lg:col-span-4 gap-[2rem] bg-white rounded-lg shadow-[-2px_2px_8px_1px_rgba(0,0,0,0.15)]">
                <div class="flex flex-col justify-around items-center gap-y-3 p-9">
                    <div class="flex flex-col justify-center items-center w-[160px] h-[160px]">
                        <img src="{{ asset('assets/modules/website/images/dashboard/circle-ok.png') }}" />
                    </div>
                    <div>
                        <p class="text-center text-[1rem] lg:text-[1.25rem]">
                            پرداخت با موفقیت انجام شد. وضعیت سفارش‌های خود را می‌توانید در
                            صفحه «سفارش‌های من» مشاهده کنید.
                        </p>
                    </div>

                    <div class="flex items-center gap-[1rem] justify-center my-3">
                        <button
                            class="text-center text-[0.75rem] pb-1 sm:text-[1rem] lg:text-[1.2rem] w-[200px] h-[50px] bg-[#3C4999] rounded-lg text-white">
                            سبد خرید
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
