@extends('website::layouts.front_master')

@section('title', '| فرایند چاپ')
@section('content')
    <main class="bg-[#F5F5F5]">

        {{-- bread_crumb --}}

        {{-- static_header_page_text --}}
        <section class="custom-padding py-[1rem] lg:py-[20px] xl:py-[30px]">
            <div class="primary-container mx-auto">
                <div>
                    <h2 class="w-[100%] text-right text-[#3C4999] font-bold xl:text-[3rem] text-[2rem] font-bold">
                        فرایند چاپ
                    </h2>
                </div>
            </div>
        </section>

        {{-- main_static_text --}}
        <section class="custom-padding text-[#3C4999] pb-[1rem] lg:pb-[20px] xl:pb-[30px] bg-neutral-100">
            <div
                class="primary-container mx-auto py-[2rem] px-[1rem] bg-white rounded-[0.313rem] lg:rounded-[0.625rem] shadow-[-2px_2px_8px_1px_rgba(0,0,0,0.15)]">
                <div>
                    <div class="grid grid-cols-2 lg:grid-cols-5 gap-x-[1rem] gap-y-[2rem]">

                        <div class="">
                            <div class="bg-[#E3EEFF] py-[1rem]"><img class="mx-auto"
                                    src="{{ asset('assets/modules/website/images/home/services-navigation/editing.png') }}"
                                    alt=""></div>
                            <div class="bg-[--primary-color] text-white text-center py-[0.5rem]"><span
                                    class="lg:text-[1.4rem]">ویراستاری</span></div>
                            <div
                                class="border-[1px] border-[--primary-color] flex items-center justify-center p-[1rem] lg:min-h-[160px] xl:min-h-[150px]">
                                <p class="text-right lg:text-[1.1rem]">متن کتاب شما در صورت نیاز، ویراستاری فنی و ادبی
                                    می‌شود.</p>
                            </div>
                        </div>


                        <div>
                            <div class="bg-[#E3EEFF] py-[1rem]"><img class="mx-auto"
                                    src="{{ asset('assets/modules/website/images/home/services-navigation/layout.png') }}"
                                    alt=""></div>
                            <div class="bg-[--primary-color] text-white text-center py-[0.5rem]"><span
                                    class="lg:text-[1.4rem]">صفحه‌آرایی</span></div>
                            <div
                                class="border-[1px] border-[--primary-color] flex items-center justify-center p-[1rem] lg:min-h-[160px] xl:min-h-[150px]">
                                <p class="text-right lg:text-[1.1rem]">متن کتاب به صورت قالب خوانا و مناسب چاپ، تنظیم شده و
                                    طرح‌های گرافیکی لازم به آن اضافه می‌شود.</p>
                            </div>
                        </div>
                        <div>
                            <div class="bg-[#E3EEFF] py-[1rem]"><img class="mx-auto"
                                    src="{{ asset('assets/modules/website/images/home/services-navigation/permission.png') }}"
                                    alt=""></div>
                            <div class="bg-[--primary-color] text-white text-center py-[0.5rem]"><span
                                    class="lg:text-[1.4rem]">اخذ مجوزهای چاپ</span></div>
                            <div
                                class="border-[1px] border-[--primary-color] flex items-center justify-center p-[1rem] lg:min-h-[160px] xl:min-h-[150px]">
                                <p class="text-right lg:text-[1.1rem]">اقدامات لازم جهت گرفتن مجوز وزارت ارشاد و ثبت
                                    کتابخانه ملی انجام می‌شود.</p>
                            </div>
                        </div>
                        <div>
                            <div class="bg-[#E3EEFF] py-[1rem]"><img class="mx-auto"
                                    src="{{ asset('assets/modules/website/images/home/services-navigation/cover.png') }}"
                                    alt=""></div>
                            <div class="bg-[--primary-color] text-white text-center py-[0.5rem]"><span
                                    class="lg:text-[1.4rem]">طراحی جلد</span></div>
                            <div
                                class="border-[1px] border-[--primary-color] flex items-center justify-center p-[1rem] lg:min-h-[160px] xl:min-h-[150px]">
                                <p class="text-right lg:text-[1.1rem]">در صورت نیاز، جلدی زیبا و مناسب برای کتاب شما طراحی
                                    می‌شود.</p>
                            </div>
                        </div>
                        <div>
                            <div class="bg-[#E3EEFF] py-[1rem]"><img class="mx-auto"
                                    src="{{ asset('assets/modules/website/images/home/services-navigation/print.png') }}"
                                    alt=""></div>
                            <div class="bg-[--primary-color] text-white text-center py-[0.5rem]"><span
                                    class="lg:text-[1.4rem]">چاپ کتاب</span></div>
                            <div
                                class="border-[1px] border-[--primary-color] flex items-center justify-center p-[1rem] lg:min-h-[160px] xl:min-h-[150px]">
                                <p class="text-right lg:text-[1.1rem]">کتاب در تیراژ درخواستی شما چاپ و صحافی می‌شود.</p>
                            </div>
                        </div>

                    </div>
                </div>

                <h2
                    class="mt-[30px] w-[100%] h-9 text-right font-bold pr-[9px] lg:text-[2rem] text-[1.5rem] md:text-[1.7rem]">
                    1. ویراستاری
                </h2>
                <div>
                    <p class="mt-[20px] w-[100%] text-right xl:text-[1.5rem] md:text-[1.2rem] text-[1rem]">
                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است،
                        چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد
                        نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته
                        حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان
                        رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد کرد، در این صورت می توان امید
                        داشت که تمام و دشواری موجود در ارائه راهکارها، و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل
                        حروفچینی دستاوردهای اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار
                        گیرد.
                    </p>
                </div>

                <h2
                    class="mt-[30px] w-[100%] h-9 text-right font-bold pr-[9px] lg:text-[2rem] text-[1.5rem] md:text-[1.7rem]">
                    2. صفحه‌آرایی
                </h2>
                <div>
                    <p class="mt-[20px] w-[100%] text-right xl:text-[1.5rem] md:text-[1.2rem] text-[1rem]">
                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است،
                        چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد
                        نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته
                        حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان
                        رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد کرد، در این صورت می توان امید
                        داشت که تمام و دشواری موجود در ارائه راهکارها، و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل
                        حروفچینی دستاوردهای اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار
                        گیرد.
                    </p>
                </div>

                <h2
                    class="mt-[30px] w-[100%] h-9 text-right font-bold pr-[9px] lg:text-[2rem] text-[1.5rem] md:text-[1.7rem]">
                    3. اخذ مجوزهای چاپ
                </h2>
                <div>
                    <p class="mt-[20px] w-[100%] text-right xl:text-[1.5rem] md:text-[1.2rem] text-[1rem]">
                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است،
                        چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد
                        نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته
                        حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان
                        رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد کرد، در این صورت می توان امید
                        داشت که تمام و دشواری موجود در ارائه راهکارها، و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل
                        حروفچینی دستاوردهای اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار
                        گیرد.
                    </p>
                </div>

                <h2
                    class="mt-[30px] w-[100%] h-9 text-right font-bold pr-[9px] lg:text-[2rem] text-[1.5rem] md:text-[1.7rem]">
                    4. طراحی جلد
                </h2>
                <div>
                    <p class="mt-[20px] w-[100%] text-right xl:text-[1.5rem] md:text-[1.2rem] text-[1rem]">
                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است،
                        چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد
                        نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته
                        حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان
                        رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد کرد، در این صورت می توان امید
                        داشت که تمام و دشواری موجود در ارائه راهکارها، و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل
                        حروفچینی دستاوردهای اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار
                        گیرد.
                    </p>
                </div>

                <h2
                    class="mt-[30px] w-[100%] h-9 text-right font-bold pr-[9px] lg:text-[2rem] text-[1.5rem] md:text-[1.7rem]">
                    5. چاپ کتاب
                </h2>
                <div>
                    <p class="mt-[20px] w-[100%] text-right xl:text-[1.5rem] md:text-[1.2rem] text-[1rem]">
                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است،
                        چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد
                        نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته
                        حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان
                        رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد کرد، در این صورت می توان امید
                        داشت که تمام و دشواری موجود در ارائه راهکارها، و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل
                        حروفچینی دستاوردهای اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار
                        گیرد.
                    </p>
                </div>
            </div>
        </section>


    </main>
@endsection
