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
                    @foreach ($paidInvoices as $key => $invoice)
                        <div class="flex flex-col justify-between lg:py-4 px-5 gap-y-3">
                            <div>
                                <h2 class="text-right text-[1.2rem] xl:text-[1.5rem] font-bold">
                                    <span>سفارش چاپ دیجیتال -</span>
                                    <span>{{ $invoice->id }}</span>
                                </h2>
                            </div>
                            <div>
                                <p class="text-right text-[1rem] lg:text-[1.25rem]">
                                    <span>ایجاد شده در</span>
                                    <span>{{ verta($invoice->created_at)->format('%d %B %Y') }}</span>
                                    <span>ساعت</span>
                                    <span>{{ verta($invoice->created_at)->format('H:i') }}</span>
                                </p>
                            </div>
                            <div>
                                <p class="text-right text-[1rem] lg:text-[1.25rem]">
                                    <span>شماره پیگیری :</span>
                                    <span>{{ $invoice->reference_code }}</span>
                                </p>
                            </div>
                            <div class="flex gap-[1rem] justify-star items-center">
                                <span class="text-[1.2rem] xl:text-[1.5rem] font-bold">وضعیت :</span>
                                <span
                                    class="text-[1.2rem] xl:text-[1.5rem] {{ $invoiceStatusColors[$invoice->status] }} px-[1rem] rounded-lg">{{ __('app.invoiceStatus.' . $invoice->status) }}</span>
                            </div>
                            <div class="flex gap-[1rem] justify-star items-center">
                                <span
                                    class="text-[1.4rem] xl:text-[2rem] font-bold">{{ number_format($invoice->final_price) }}</span>
                                <span class="text-[1.2rem] xl:text-[1.5rem]">تومان</span>
                            </div>
                            <div class="flex items-center gap-[1rem] justify-center sm:justify-end">
                                <a href="{{ route('dashboard.invoice.show', ['id' => $invoice->id]) }}" target="_blank"
                                    class="text-center text-[0.75rem] py-[.7rem] sm:text-[1rem] lg:text-[1.2rem] w-[200px] h-[40px] h-[50px] bg-[#00B6DE] rounded-lg text-white">
                                    مشاهده جزئیات
                                </a>
                            </div>
                        </div>

                        @if ($key != count($paidInvoices) - 1)
                            <div class="h-[1px] bg-black my-10 mb-5 mx-5"></div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
