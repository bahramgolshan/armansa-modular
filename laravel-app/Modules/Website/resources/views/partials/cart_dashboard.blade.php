<!-- Cart -->
<section class="w-[100%] bg-[#F5F5F5] py-[3rem] custom-padding text-[--primary-color]">
    <div class="primary-container mx-auto">
        <div>
            <h1 class="text-center text-[1.5rem] lg:text-[1.6rem] xl:text-[2rem] font-bold mb-[1rem]">
                سبد خرید
            </h1>
        </div>
        <div class="mx-auto grid grid-cols-1 lg:gap-x-8 gap-y-8 lg:grid-cols-5 xl:gap-x-9">
            @include('website::partials.user_dashboard_sidebar')
            <div
                class="border-gray-300 border-2 col-span-1 lg:col-span-4 gap-[2rem] bg-white rounded-[0.313rem] lg:rounded-[0.625rem] shadow-[-2px_2px_8px_1px_rgba(0,0,0,0.15)]">
                @foreach ($awaitingPaymentInvoices as $key => $invoice)
                    <div class="grid grid-cols-1 lg:gap-x-9 gap-y-8 lg:grid-cols-5">
                        <div class="col-span-1 lg:col-span-3 flex flex-col justify-between pt-4 lg:py-4 px-5 gap-y-3">
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
                            {{-- <div class="flex gap-[1rem] justify-star">
                                <span
                                    class="text-[1.2rem] xl:text-[1.5rem] font-bold">{{ number_format($invoice->final_price) }}</span>
                                <span class="text-[1.2rem] xl:text-[1.5rem]">تومان</span>
                            </div> --}}
                            <div class="flex items-center gap-[1rem] justify-start">
                                <a href="{{ route('dashboard.invoice.show', ['id' => $invoice->id]) }}" target="_blank"
                                    class="text-center text-[0.75rem] py-[.7rem] sm:text-[1rem] lg:text-[1.2rem] w-[200px] h-[40px] h-[50px] bg-[#00B6DE] rounded-lg text-white">
                                    مشاهده جزئیات
                                </a>
                                <button
                                    class="text-center text-[0.75rem] sm:text-[1rem] lg:text-[1.2rem] w-[200px] h-[40px] h-[50px] bg-transparent rounded-lg text-[#E30813] border-[#E30813] border-2"
                                    onclick="deleteItem({{ $invoice->id }})">
                                    حذف از سبد خرید
                                </button>
                            </div>
                        </div>
                        <div
                            class="col-span-1 lg:col-span-2 flex flex-col justify-start lg:py-4 pb-4 pt-2 px-5 gap-y-3">
                            <div>
                                <h2 class="text-right text-[1.2rem] xl:text-[1.5rem] font-bold">
                                    مبلغ سفارش
                                </h2>
                            </div>
                            <div class="h-[1px] bg-black my-[4px]"></div>
                            <div class="flex gap-[1rem] justify-end">
                                <span
                                    class="text-[1.2rem] xl:text-[1.5rem] font-bold">{{ number_format($invoice->final_price) }}</span>
                                <span class="text-[1.2rem] xl:text-[1.5rem]">تومان</span>
                            </div>
                            <div class="flex items-center gap-[1rem] justify-end">
                                <button href="{{ route('dashboard.invoice.pay', ['id' => $invoice->id]) }}"
                                    onclick="event.preventDefault(); document.getElementById('pay-invoice').submit();"
                                    class="w-[200px] text-[0.75rem] sm:text-[1rem] lg:text-[1.2rem] h-[50px] bg-[#51956D] rounded-lg text-white text-center">
                                    پرداخت
                                </button>
                                <form method="POST" id="pay-invoice"
                                    action="{{ route('dashboard.invoice.pay', ['id' => $invoice->id]) }}">
                                    @csrf
                                </form>
                            </div>
                        </div>
                    </div>
                    @if ($key != count($awaitingPaymentInvoices) - 1)
                        <div class="h-[1px] bg-black my-10 mb-5 mx-5"></div>
                    @endif
                @endforeach

            </div>
        </div>
    </div>
</section>
