<!-- hero home -->
<section class="w-100% large-container mb-[4rem]">
    <div class="large-container mx-auto h-auto lg:auto relative text-white">
        <img class="object-cover h-[25rem] md:w-[100%] md:h-[auto]" src="{{ asset('images/front/home/hero/hero.png') }}"
            alt="" />

        <div class="hero-overlay absolute top-0 left-0 w-[100%] h-[100%]">
            <div
                class="h-[90%] lg:h-[80%] primary-container custom-padding mx-auto flex flex-col justify-end gap-[1.5rem]">
                <h3 class="text-center lg:text-start text-[1.5rem] md:text-[2rem] lg:text-[3rem] font-bold">
                    {{ $settings['heroDescription'] }}</h3>
                <a class="sm:w-[50%] sm:mx-auto lg:max-w-[10rem] lg:mx-0 py-[.7rem] bg-[--primary-color] text-[1.125rem] rounded-lg text-center"
                    href="{{ route('service.print.digital-print') }}">سفارش
                    دهید</a>
            </div>
        </div>
    </div>
</section>
