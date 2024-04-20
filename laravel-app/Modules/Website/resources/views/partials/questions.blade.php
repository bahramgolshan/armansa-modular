<!-- accordion -->
<section class="w-[100%] bg-[#f5f5f5] text-[--primary-color] py-[3rem] custom-padding">
    <h1 class="text-center text-[2.25rem] font-bold mb-[1rem]">
        سوالات متداول
    </h1>
    <div class="accordion-container mx-auto">
        <div class="accordion flex flex-col items-center justify-center gap-[1rem]">
            @foreach ($faqs as $index => $faq)
                @if ($index == 0)
                    <div class="bg-white shadow-[0px_4px_4px_rgba(0,0,0,0.24)] rounded-[10px] w-full">
                        <input type="radio" name="h-acc-q" id="h-acc-q{{ $index }}" class="hidden" checked>
                        <label for="h-acc-q{{ $index }}"
                            class="flex px-2 justify-between items-center py-2 gap-[1rem] cursor-pointer relative block p-4">
                            <span
                                class="font-bold text-[0.85rem] sm:text-[1rem] lg:text-[1.6rem]">{{ $faq->question }}</span>
                            <img class="transition-all duration-[400ms] w-[19px] h-[19px] h-acc-q"
                                src="{{ asset('assets/modules/website/images/icon/chevron-down.png') }}" alt="">
                        </label>
                        <div class="accordion__content overflow-hidden">
                            <p class="accordion__body p-4 text-[0.85rem] sm:text-[1rem] lg:text-[1.4rem]"
                                id="h-acc-q{{ $index }}">{{ $faq->answer }}</p>
                        </div>
                    </div>
                @else
                    <div class="bg-white shadow-[0px_4px_4px_rgba(0,0,0,0.24)] rounded-[10px] w-full">
                        <input type="radio" name="h-acc-q" id="h-acc-q{{ $index }}" class="hidden">
                        <label for="h-acc-q{{ $index }}"
                            class="flex px-2 justify-between items-center py-2 gap-[1rem] cursor-pointer relative block p-4">
                            <span
                                class="font-bold text-[0.85rem] sm:text-[1rem] lg:text-[1.6rem]">{{ $faq->question }}</span>
                            <img class="transition-all duration-[400ms] w-[19px] h-[19px] h-acc-q"
                                src="{{ asset('assets/modules/website/images/icon/chevron-down.png') }}" alt="">
                        </label>
                        <div class="accordion__content overflow-hidden">
                            <p class="accordion__body p-4 text-[0.85rem] sm:text-[1rem] lg:text-[1.4rem]"
                                id="h-acc-q{{ $index }}">{{ $faq->answer }}</p>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>

    </div>
</section>
