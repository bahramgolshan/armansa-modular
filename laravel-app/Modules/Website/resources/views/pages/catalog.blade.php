{{-- صحافی --}}
@extends('website::layouts.front_master')
@section('title', '|  کاتالوگ')

@section('content')
    <main class="bg-[#F5F5F5] text-[#3C4999] pb-[2rem]">

        <section class="custom-padding py-[1rem] lg:py-[20px] xl:py-[30px]">
            <div class="primary-container mx-auto">
                <div>
                    <h2 class="w-[100%] text-right text-[#3C4999] font-bold xl:text-[3rem] text-[2rem] font-bold">
                    کاتالوگ 
                    </h2>
                </div>
            </div>
        </section>

        <section class="custom-padding bg-neutral-100">
            <div
                class="primary-container mx-auto py-[2rem] px-[1rem] bg-white rounded-[0.313rem] lg:rounded-[0.625rem] shadow-[-2px_2px_8px_1px_rgba(0,0,0,0.15)]">

                <div>
                    <p class="mt-[20px] w-[100%] text-right text-[#3C4999] xl:text-[1.5rem] md:text-[1.2rem] text-[1rem]">
                    کاتالوگ کتابچه ، یا دفترچه ای جامعی است که شرکت ها و موسسات برای ارائه نمونه کارهای خود از آن استفاده میکنند .در کاتالوگ ریزترین جزئیات مانند انواع محصولات ،سایز ،رنگ ،تعداد ،جنس ومتریال به کار رفته ،ترکیبات ،سال تولید ،قیمت و...قرار میگیرد.در واقع میتوان گفت کاتالوگ ارائه دهنده محصولات و نمونه کارهای یک شرکت و یا موسسه است.
برخی به اشتباه ، تصور میکنند که بروشور و کاتالوگ تفاوتی باهم ندارند درحالی که این طور نیست .بروشور صرفا جنبه ی تبلیغاتی دارد و بیشتر برای جلب نظر و اعتماد مشتری استفاده می شود درحالی که کاتالوگ یک دفترچه برای ارائه کامل محصولات وانتخاب نهایی مشتری است.در حقیقت کاتالوگ برای مصرف کننده چاپ می شود.
بروشور اغلب کم حجم است و اطلاعات تقریبا اندکی در آن قرار دارد  ونسبت به کاتالوگ مقرون به صرفه تر است .اما کاتالوگ ها، اطلاعات دقیق تر و باجزئیات بیشتری دارد .طراحی و چاپ نهایی کاتالوگ گرانتر است زیرا عموما از کاغذهایی با گرم بالا استفاده می شود و سلفون کشی دارد ،تعداد صفحات آن بیشتر است البته که تعداد صفحات آن بسته به میزان محتوا و سلیقه کارفرما است. کاتالوگ ها معمولا در تیراژ محدود چاپ می شود در حالی که بوشور در تیراژ بالا توزیع و پخش می شود

                    </p>
                </div>

                <h2 class="mt-[30px] w-[100%] h-9 text-right font-bold lg:text-[2rem] text-[1.5rem] md:text-[1.7rem]">
                چاپ کاتالوگ :
                </h2>
                <div>
                    <p class="mt-[20px] w-[100%] text-right text-[#3C4999] xl:text-[1.5rem] md:text-[1.2rem] text-[1rem]">
                    برای ساخت یک کاتالوگ تمامی صفحات مربوطه به آن در ابتدا باید چاپ شود که نوع چاپ بستگی به انتخاب کارفرما به صورت دیجیتال و یا افست است که اگر افست باشد نیاز به تهیه زینک از صفحات چاپی است.پس از چاپ در صورت نیاز این صفحات می بایست سلفون شوند که باز هم بسته به انتخاب و سلیقه کارفرما میتواند سلفون براق ،مات و مخملی شنی باشد عموما برای جلد کاتالوگ از کاغذهایی با گرماژبالا همچون گلاسه گرم بالا استفاده می شود تا مقاومت و ایستایی کاتالوگ بیشتر شود بعد از انجام مرحله سلفون کشی نوبت به مرحله صحافی می رسد.
کاتالوگ به دلیل ماهیتی که دارد تقریبا مانند دفترچه ای کوچک است و نیاز به صحافی دارد وصحافی کاتالوگ کاملا سلیقه ای است و گاها به تعداد صفحات آن نیز وابسته است .برای کاتالوگ هایی با تعداد صفحات کمتر از 35 صفحه می توان از صحافی منگنه تخت و یا لوپ استفاده کرد ودر مواردی که تعداد صفحات بیشتری داشته باشد می توان از دیگر انواع صحافی مانند دوخت و چسب گرم هم استفاده کرد که معمولا خیلی کم این اتفاق می افتد.

                    </p>
                </div>



                <div class="flex gap-[2rem] justify-between items-center">
                    <div class="flex flex-col items-center justify-center gap-[1rem]">
                        <img src="{{ asset('assets/modules/website/images/catalog/tah-dookht.png') }}" alt="">
                        <span>صحافی ته دوخت</span>
                    </div>
                    <div class="flex flex-col items-center justify-center gap-[1rem]">
                        <img src="{{ asset('assets/modules/website/images/catalog/mangane-takht.png') }}" alt="">
                        <span>صحافی منگنه تخت</span>
                    </div>
                    <div class="flex flex-col items-center justify-center gap-[1rem]">
                        <img src="{{ asset('assets/modules/website/images/catalog/chasb-garm.png') }}" alt="">
                        <span>صحافی چسب گرم</span>
                    </div>
                    <div class="flex flex-col items-center justify-center gap-[1rem]">
                        <img src="{{ asset('assets/modules/website/images/catalog/mangane-loop.png') }}" alt="">
                        <span>صحافی منگنه لوپ</span>
                    </div>
                </div>
            </div>
        </section>


    </main>
@endsection
