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
                    <input type="hidden" name="service" value="{{ $digitalPrintData['service_id'] }}">
                    <div
                        class="primary-container mx-auto grid grid-cols-1 lg:gap-x-[5%] xl:gap-x-[10%] gap-y-[5rem] lg:gap-y-[0] lg:grid-cols-5 bg-white p-[1.5rem] rounded-lg text-[--primary-color]">
                        <!-- right -->
                        <div class="lg:col-span-3 flex flex-col gap-[2rem] text-[1.125rem]">
                            <!-- top -->
                            <div>
                                <div>
                                    <h3
                                        class="text-[1.2rem] lg:text-[1.4rem] xl:text-[1.6rem] 2xl:text-[2rem] font-bold text-[--primary-color]">
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
                                                class="reset-preview block w-full lg:max-w-[18.75rem] rounded-md border-0 py-1.5 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:leading-6">
                                                <option value="">انتخاب کنید</option>
                                                @foreach ($digitalPrintData['sizes'] as $item)
                                                    <option value="{{ $item->code }}">{{ $item->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-span-2 md:col-span-1">
                                        <label for="paper" class="block font-medium leading-6">نوع کاغذ:</label>
                                        <div class="mt-2">
                                            <select id="paper" name="paper" autocomplete="paper-name"
                                                class="block w-full lg:max-w-[18.75rem] rounded-md border-0 py-1.5 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:leading-6">
                                                <option value="">انتخاب کنید</option>
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
                                                <option value="">انتخاب کنید</option>
                                                @foreach ($digitalPrintData['colors'] as $item)
                                                    <option value="{{ $item->code }}">{{ $item->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-span-2 md:col-span-1">
                                        <label for="number-of-pages" class="block font-medium leading-6">تعداد
                                            صفحات:</label>
                                        <div class="mt-2">
                                            <input type="text" name="number-of-pages" id="number-of-pages"
                                                value="" autocomplete="given-name"
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
                                            <select id="cover" name="cover" autocomplete="cover-name"
                                                class="block w-full lg:max-w-[18.75rem] rounded-md border-0 py-1.5 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:leading-6">
                                                <option value="">انتخاب کنید</option>
                                                @foreach ($digitalPrintData['covers'] as $item)
                                                    <option value="{{ $item->code }}">{{ $item->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-span-2 md:col-span-1">
                                        <label for="binding" class="block font-medium leading-6">نوع صحافی:</label>
                                        <div class="mt-2">
                                            <select id="binding" name="binding" autocomplete="binding-name"
                                                class="block w-full lg:max-w-[18.75rem] rounded-md border-0 py-1.5 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:leading-6">
                                                <option value="">انتخاب کنید</option>
                                                @foreach ($digitalPrintData['bindings'] as $item)
                                                    <option value="{{ $item->code }}">{{ $item->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-span-2 md:col-span-1">
                                        <label for="cellophane" class="block font-medium leading-6">نوع سلفون:</label>
                                        <div class="mt-2">
                                            <select id="cellophane" name="cellophane" autocomplete="cellophane-name"
                                                class="block w-full lg:max-w-[18.75rem] rounded-md border-0 py-1.5 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:leading-6">
                                                <option value="">انتخاب کنید</option>
                                                @foreach ($digitalPrintData['cellophanes'] as $item)
                                                    <option value="{{ $item->code }}">{{ $item->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="flex flex-col gap-[1rem] mt-[2rem] items-start">
                                    <label class="block font-medium leading-6">جهت صحافی:</label>

                                    <ul
                                        class="w-[100%] xl:w-[75%] 2xl:w-[65%] grid gap-6 grid-cols-2 sm:grid-cols-4 book-direction">
                                        <li class="flex justify-center max-w-[9rem] lg:max-w-[10rem]">
                                            <input type="radio" id="binding-direction-extra-small"
                                                name="binding-direction" value="fa_v"
                                                class="reset-preview hidden peer" required />
                                            <label for="binding-direction-extra-small"
                                                class="flex flex-col justify-between w-[100%] h-[7.6875rem] border-[#3C4999] border-[1px] rounded-[0.4375rem] cursor-pointer peer-checked:bg-[--primary-color] peer-checked:text-white"
                                                for="">
                                                <div class="h-[77%] w-[100%]">
                                                    <img class="w-[100%] h-[100%]" src="" alt="" />
                                                </div>
                                                <span
                                                    class="block w-[100%] text-[0.875rem] h-[23%] leading-[1.5rem] text-center border-t-[#3C4999] border-t-[1px] peer-checked:bg-[--primary-color] peer-checked:text-white">
                                                    فارسی عمودی
                                                </span>
                                            </label>
                                        </li>
                                        <li class="flex justify-center max-w-[9rem] lg:max-w-[10rem]">
                                            <input type="radio" id="binding-direction-small"
                                                name="binding-direction" value="fa_h"
                                                class="reset-preview hidden peer" required />
                                            <label for="binding-direction-small"
                                                class="flex flex-col justify-between w-[100%] h-[7.6875rem] border-[#3C4999] border-[1px] rounded-[0.4375rem] cursor-pointer peer-checked:bg-[--primary-color] peer-checked:text-white"
                                                for="">
                                                <div class="h-[77%] w-[100%]">
                                                    <img class="w-[100%] h-[100%]" src="" alt="" />
                                                </div>
                                                <span
                                                    class="block w-[100%] text-[0.875rem] h-[23%] leading-[1.5rem] text-center border-t-[#3C4999] border-t-[1px] peer-checked:bg-[--primary-color] peer-checked:text-white">
                                                    فارسی افقی
                                                </span>
                                            </label>
                                        </li>
                                        <li class="flex justify-center max-w-[9rem] lg:max-w-[10rem]">
                                            <input type="radio" id="binding-direction-medium"
                                                name="binding-direction" value="en_v"
                                                class="reset-preview hidden peer" required />
                                            <label for="binding-direction-medium"
                                                class="flex flex-col justify-between w-[100%] h-[7.6875rem] border-[#3C4999] border-[1px] rounded-[0.4375rem] cursor-pointer peer-checked:bg-[--primary-color] peer-checked:text-white"
                                                for="">
                                                <div class="h-[77%] w-[100%]">
                                                    <img class="w-[100%] h-[100%]" src="" alt="" />
                                                </div>
                                                <span
                                                    class="block w-[100%] text-[0.875rem] h-[23%] leading-[1.5rem] text-center border-t-[#3C4999] border-t-[1px] peer-checked:bg-[--primary-color] peer-checked:text-white">
                                                    انگلیسی عمودی
                                                </span>
                                            </label>
                                        </li>
                                        <li class="flex justify-center max-w-[9rem] lg:max-w-[10rem]">
                                            <input type="radio" id="binding-direction-big" name="binding-direction"
                                                value="en_h" class="reset-preview hidden peer" />
                                            <label for="binding-direction-big"
                                                class="flex flex-col justify-between w-[100%] h-[7.6875rem] border-[#3C4999] border-[1px] rounded-[0.4375rem] cursor-pointer peer-checked:bg-[--primary-color] peer-checked:text-white"
                                                for="">
                                                <div class="h-[77%] w-[100%]">
                                                    <img class="w-[100%] h-[100%]" src="" alt="" />
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
                                    <h3 class="text-[1.5rem] lg:text-[1.6rem] xl:text-[2rem] font-bold">
                                        هزینه چاپ
                                    </h3>
                                    <div class="h-[1px] bg-black my-[1rem]"></div>
                                </div>
                                <div>
                                    <div id="service-cost" class="flex items-center gap-[1rem] justify-end">
                                        <span class="text-[1.5rem] lg:text-[2rem] xl:text-[2.5rem] font-bold"
                                            id="service-detail-price">1,234,567</span>
                                        <span class="text-[1.2rem] lg:text-[1.5rem] xl:text-[2rem]">تومان</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex justify-center lg:mt-[4rem] col-span-1 lg:col-span-5">
                            <button type="button" id="price-inquiry-btn"
                                class="text-[1.5rem] py-[.5rem] px-[2rem] bg-transparent rounded-lg text-[--primary-color] border-[--primary-color] border-2">
                                محاسبه قیمت
                            </button>
                            <a class="text-[1.5rem] bg-[--primary-color] text-white py-[.5rem] px-[3rem] mx-[1rem] rounded-lg "
                                href="{{ route('service.print.digital') }}">
                                ثبت سفارش </a>
                        </div>
                        <div id="digital-print-form-error-box" class="lg:mt-[4rem] col-span-1 lg:col-span-5"></div>
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
            <div class="custom-tab">
                <h1>Tab Two Content</h1>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                    enim ad minim veniam, quis nostrud exercitation ullamco laboris
                    nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                    reprehenderit in voluptate velit esse cillum dolore eu fugiat
                    nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                    sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
            </div>

            <input class="tab-input-radio" type="radio" name="tabs" id="tabthree" />
            <label for="tabthree" class="tab-header">
                <div class="label-inside">
                    <span
                        class="text-[1.2rem] lg:text-[1.4rem] xl:text-[1.6rem] 2xl:text-[2rem] font-bold text-[--primary-color]">آیتم
                        سوم</span>
                    <img class="lg:hidden w-[2rem] h-[2rem] lg:w-[3rem] lg:h-[3rem]"
                        src="{{ asset('assets/modules/website/images/icon/chevron-down.png') }}" alt="" />
                </div>
            </label>
            <div class="custom-tab">
                <h1>Tab Three Content</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </div>
        </div>
    </div>
</section>

<script>
    $('#digital-print-form').validate({
        ignore: 'input[type=hidden]',
        rules: {
            'size': {
                required: true
            },
            'paper': {
                required: true
            },
            'color': {
                required: true,
            },
            'size': {
                required: true
            },
            'number-of-pages': {
                required: true
            },
            'circulation': {
                required: true,
            },
            'cover': {
                required: true
            },
            'binding': {
                required: true
            },
            'cellophane': {
                required: true,
            },
        },
        // highlight: function(input) {
        //     $(input).parents('.form-group').addClass('error has-danger');
        //     $(input).addClass('form-control-danger');
        // },
        // unhighlight: function(input) {
        //     $(input).parents('.form-group').removeClass('error has-danger');
        //     $(input).parents('.form-group').addClass('has-success');
        //     $(input).removeClass('form-control-danger');
        //     $(input).addClass('form-control-success');
        // },
        // errorPlacement: function(error, element) {
        //     $(element).parents('.form-group').append(error);
        // }
    });

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
                    if (response.price) {
                        html = `
                            <span class="text-[1.5rem] lg:text-[2rem] xl:text-[2.5rem] font-bold">${response.price.toLocaleString('en-US')}</span>
                            <span class="text-[1.2rem] lg:text-[1.5rem] xl:text-[2rem]">تومان</span>
                            `
                    } else {
                        html = `
                            <span class="text-[1.2rem] lg:text-[1.5rem] xl:text-[2rem]"> برای استعلام قیمت لطفا تماس بگیرید... </span>
                                `
                    }

                    $('#service-cost').html(html)
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

    $(".reset-preview").on("change", function() {
        let size = $('select[name=size]').val()
        let bindingDirection = $("input[name=binding-direction]").val()

        if (size && bindingDirection) {
            let src =
                `{{ asset('assets/modules/website/images/home/form/previews/${size}_${bindingDirection}.svg') }}`
            $('#preview-image').attr('src', src)
        }
    });
</script>
