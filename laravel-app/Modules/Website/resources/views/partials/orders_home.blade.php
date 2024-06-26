<section class="bg-[#f5f5f5] custom-padding large-container pt-[3rem] pb-[5rem]" id="orders_home">
    <div class="primary-container mx-auto">
        <div id="tabs-container" class="custom-tabs">
            <input class="tab-input-radio" type="radio" name="tabs" id="tabone" checked="checked" />
            <label for="tabone" class="tab-header">
                <div class="label-inside">
                    <span
                        class="text-[1.2rem] lg:text-[1.4rem] xl:text-[1.6rem] 2xl:text-[2rem] font-bold text-[--primary-color]">سفارش
                        چاپ دیجیتال</span>
                    <img class="lg:hidden w-[2rem] h-[2rem] lg:w-[3rem] lg:h-[3rem]"
                        src="{{ asset('assets/modules/website/images/icon/chevron-down.png') }}" alt="" />
                </div>
            </label>
            <div class="custom-tab">
                <form id="digital-print-form">
                    @csrf
                    <input type="hidden" name="service_id" value="{{ $digitalPrintData['service_id'] }}">
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
                                            <select id="cellophane" name="cellophane_id"
                                                autocomplete="cellophane-name"
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
                                                    data-code="{{ $item->code }}" class="reset-preview hidden peer"
                                                    required {{ $index == 0 ? 'checked' : '' }} />
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
                        <div
                            class="flex flex-col md:flex-row gap-[1rem] justify-center lg:mt-[4rem] col-span-1 lg:col-span-5">
                            <button type="button" id="price-inquiry-btn"
                                class="text-[1.5rem] py-[.5rem] px-[2rem] bg-transparent rounded-lg text-[--primary-color] border-[--primary-color] border-2">
                                محاسبه قیمت
                            </button>
                            <a class="text-[1.5rem] text-center bg-[--primary-color] text-white py-[.5rem] px-[3rem] rounded-lg "
                                href="{{ route('service.print-digital.create') }}">
                                ثبت سفارش </a>
                        </div>
                        <div id="digital-print-form-error-box"
                            class="flex flex-col md:flex-row gap-[1rem] justify-center col-span-1 lg:col-span-5 mt-[1rem]">
                        </div>
                    </div>
                </form>
            </div>

            <input class="tab-input-radio" type="radio" name="tabs" id="tabtwo" />
            <label for="tabtwo" class="tab-header">
                <div class="label-inside">
                    <span
                        class="text-[1.2rem] lg:text-[1.4rem] xl:text-[1.6rem] 2xl:text-[2rem] font-bold text-[--primary-color]">سفارش
                        چاپ افست</span>
                    <img class="lg:hidden w-[2rem] h-[2rem] lg:w-[3rem] lg:h-[3rem]"
                        src="{{ asset('assets/modules/website/images/icon/chevron-down.png') }}" alt="" />
                </div>
            </label>
            <div class="custom-tab p-[3rem] text-[--primary-color]">
                <p class="xl:text-[1.5rem] md:text-[1.2rem] text-[1rem]">
                    جهت دریافت مشاوره رایگان و همچنین ثبت سفارش چاپ آفست، با مشاوران آرمانسا تماس بگیرید.
                </p>
                <div class="mt-[1rem] flex flex-col gap-[0.6rem]">
                    <div class="xl:text-[1.5rem] md:text-[1.2rem] text-[1rem]">
                        ۰۲۱<span class="mx-[0.4rem]">-</span>۶۶۹۵۰۰۲۱
                    </div>
                    <div class="xl:text-[1.5rem] md:text-[1.2rem] text-[1rem]">
                        ۰۲۱<span class="mx-[0.4rem]">-</span>۶۶۹۵۰۲۱۲
                    </div>
                    <div class="xl:text-[1.5rem] md:text-[1.2rem] text-[1rem]">
                        ۰۲۱<span class="mx-[0.4rem]">-</span>۶۶۴۹۴۶۵۲
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
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
        },
    });

    // $('#price-inquiry-btn').click(function() {

    //     if ($('#digital-print-form').valid()) {
    //         var data = $('#digital-print-form').serializeArray();

    //         $.ajax({
    //             type: "GET",
    //             headers: {
    //                 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //             },
    //             url: "{!! route('service.print.digital.inquiry') !!}",
    //             data: data,
    //             success: function(response) {
    //                 if (response.price) {
    //                     html = `
    //                         <span class="text-[1.5rem] lg:text-[2rem] xl:text-[2.5rem] font-bold">${response.price.toLocaleString('en-US')}</span>
    //                         <span class="text-[1.2rem] lg:text-[1.5rem] xl:text-[2rem]">تومان</span>
    //                         `
    //                 } else {
    //                     html = `
    //                         <span class="text-[1.2rem] lg:text-[1.5rem] xl:text-[2rem]"> برای استعلام قیمت لطفا تماس بگیرید... </span>
    //                             `
    //                 }

    //                 $('#service-cost').html(html)
    //                 $('#digital-print-form-error-box').html(''); // reset error box
    //             },
    //             error: function(response) {
    //                 hideAjaxLoader()
    //                 var html = "";
    //                 var response = JSON.parse(response.responseText);
    //                 $.each(response.errors, function(key, value) {
    //                     html +=
    //                         `<div class=''><strong>${value}</strong></div>`;
    //                 });
    //                 $('#digital-print-form-error-box').html(html);
    //             }
    //         });
    //     }
    // });

    //  Price Inquiry Click
    $('#price-inquiry-btn').click(function() {
        if ($('#digital-print-form').valid()) {
            var data = $('#digital-print-form').serializeArray();
            $.ajax({
                type: "GET",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: "{!! route('service.print.digital.inquiry') !!}",
                data: data,

                success: function(response) {
                    if (response.status == 'success') {
                        let data = response.data;
                        $('#final-price-holder').html(data.final_price.toLocaleString(
                            'en-US'))
                        $('#call-for-price-message').addClass('hidden');

                    } else {
                        $('#final-price-holder').html('0')
                        $('#call-for-price-message').removeClass('hidden');
                    }

                    $('#digital-print-form-error-box').html(''); // reset error box
                },

                error: function(response) {
                    hideAjaxLoader()
                    var html = "";

                    if (response.status == 429) {
                        html +=
                            `<div class=''><strong>تعداد درخواست‌ها شما بیش از حد مجاز است! لطفا کمی صبر کنید...</strong></div>`;
                    } else {
                        var response = JSON.parse(response.responseText);
                        $.each(response.errors, function(key, value) {
                            html +=
                                `<div class=''><strong>${value}</strong></div>`;
                        });
                    }

                    $('#digital-print-form-error-box').html(html);
                    $('#final-price-holder').html('0')
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
</script>
