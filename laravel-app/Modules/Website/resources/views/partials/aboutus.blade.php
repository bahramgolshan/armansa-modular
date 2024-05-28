<!-- about us -->
<section class="w-[100%] mb-[4rem] custom-padding">
    <div class="primary-container mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-[2rem] lg:gap-[5rem]">
            <div class="gap-[4rem] lg:gap-[0] items-center basis-1/2">
                <div class="gap-[3rem] lg:gap-[0] lg:mb-[5rem] flex flex-col justify-between h-[100%]">
                    <p class="text-[0.875rem] sm:text-[1rem] lg:text-[1.125rem]">
                        {{ $settings['aboutArmansa'] ?? '' }}
                    </p>

                    <div class="relative bg-white w-full mx-auto lg:pb-[2.5rem]">
                        <div class="swiper about-us-swiper mx-auto h-full">
                            <div class="swiper-wrapper">
                                @foreach ($partnerLogos as $partner)
                                    <div class="swiper-slide bg-white flex items-center justify-center">
                                        <img class="max-w-24 grayscale hover:grayscale-0"
                                            src="{{ $partner->media_id ? asset(get_file_upload_path('image-partners', $partner->media->id) . $partner->media->file_name) : '' }}"
                                            alt="{{ $partner->name }}" />
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @if (isset($settings['featuredVideoEmbedCode']))
                {!! $settings['featuredVideoEmbedCode'] !!}
            @else
                <div class="sm:w-[80%] lg:w-[100%] mx-auto flex items-center justify-end">
                    <video class="lg:h-[23rem] w-[100%] rounded-[1.5rem]" src="./videos/print.mp4" controls></video>
                </div>
            @endif
        </div>
    </div>
</section>
