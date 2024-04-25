<!-- contact information -->
<section class="bg-indigo-800 text-white py-[1rem] md:py-[1.5rem] lg:py-[2rem]">
    <div
        class="primary-container mx-auto flex flex-col gap-[.6rem] lg:gap-[0] justify-center items-center lg:flex-row md:w-[75%] lg:w-[75%] 2xl:w-[70%] md:justify-around mx-auto px-[1rem] sm:px-[0]">
        <div class="text-[1.2rem] sm:text-[1.4rem] font-[600] xl:text-[1.8rem] 2xl:text-[2rem] text-center">
            جهت مشاوره رایگان درباره خدمات چاپ با ما تماس بگیرید
        </div>
        <div
            class="text-[1.8rem] lg:text-[1.5rem] font-[600] xl:text-[2rem] 2xl:text-[2.2rem] flex items-center gap-[1rem]">
            <a href="tel:{{ $settings['phone1'] }}" class="flex items-center gap-[1rem]">
                <span class="mt-[0.3rem]"> {{ $settings['phone1'] }} </span>
                <img class="w-[1.8rem] h-[1.8rem] xl:w-[2rem] xl:h-[2rem] 2xl:w-[2.2rem] xl:h-[2.2rem]"
                    src="{{ asset('assets/modules/website/images/icon/phone.png') }}" alt="" />
            </a>
        </div>
    </div>
</section>
