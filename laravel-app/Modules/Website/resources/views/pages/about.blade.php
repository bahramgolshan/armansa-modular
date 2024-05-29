 @extends('website::layouts.front_master')
 @section('title', '| طراحی جلد')

 @section('content')
     <main class="bg-[#F5F5F5]">

         {{-- bread_crumb --}}

         {{-- static_header_page_text --}}
         <section class="custom-padding py-[1rem] lg:py-[20px] xl:py-[30px]">
             <div class="primary-container mx-auto">
                 <div>
                     <h2 class="w-[100%] text-right text-[#3C4999] font-bold xl:text-[3rem] text-[2rem] font-bold">
                         مجتمع چاپ آرمانسا
                     </h2>
                 </div>
             </div>
         </section>

         {{-- main_static_text --}}
         <section class="custom-padding pb-[1rem] lg:pb-[20px] xl:pb-[30px] bg-neutral-100">
             <div
                 class="primary-container mx-auto py-[2rem] px-[1rem] bg-white rounded-[0.313rem] lg:rounded-[0.625rem] shadow-[-2px_2px_8px_1px_rgba(0,0,0,0.15)]">
                 <div>
                     <p class="mt-[20px] w-[100%] text-right xl:text-[1.5rem] md:text-[1.2rem] text-[1rem]">
                         {{ $settings['aboutArmansa'] ?? '' }}
                     </p>
                 </div>

                 {{-- <h2
                     class="mt-[30px] w-[100%] h-9 text-right font-bold pr-[9px] lg:text-[2rem] text-[1.5rem] md:text-[1.7rem]">
                     عنوان پاراگراف
                 </h2>
                 <div>
                     <p class="mt-[20px] w-[100%] text-right xl:text-[1.5rem] md:text-[1.2rem] text-[1rem]">
                         لوازم ایپسوم متن ساختگی با تولید سادگی نا مفهوم از صنعت چاپ ، و با
                         استفاده از طراحان گرافیک است. لوازم ایپسوم متن ساختگی با تولید سادگی
                         نا مفهوم از صنعت چاپ ، و با استفاده از طراحان گرافیک است. لوازم
                         ایپسوم متن ساختگی با تولید سادگی نا مفهوم از صنعت چاپ ، و با استفاده
                         از طراحان گرافیک است. لوازم ایپسوم متن ساختگی با تولید سادگی نا
                         مفهوم از صنعت چاپ ، و با استفاده از طراحان گرافیک است. لوازم ایپسوم
                         متن ساختگی با تولید سادگی نا مفهوم از صنعت چاپ ، و با استفاده از
                         طراحان گرافیک است. لوازم ایپسوم متن ساختگی با تولید سادگی نا مفهوم
                         از صنعت چاپ ، و با استفاده از طراحان گرافیک است. لوازم ایپسوم متن
                         ساختگی با تولید سادگی نا مفهوم از صنعت چاپ ، و با استفاده از طراحان
                         گرافیک است. لوازم ایپسوم متن ساختگی با تولید سادگی نا مفهوم از صنعت
                         چاپ ، و با استفاده از طراحان گرافیک است. لوازم ایپسوم متن ساختگی با
                         تولید سادگی نا مفهوم از صنعت چاپ ، و با استفاده از طراحان گرافیک
                         است. لوازم ایپسوم متن ساختگی با تولید سادگی نا مفهوم از صنعت چاپ ، و
                         با استفاده از طراحان گرافیک است.
                     </p>
                 </div> --}}

                 <div class="mt-[30px] relative bg-white w-full mx-auto lg:pb-[2.5rem]">
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

                 @if (isset($settings['featuredVideoEmbedCode']))
                     {!! $settings['featuredVideoEmbedCode'] !!}
                 @else
                     <div class="mt-[30px] sm:w-[80%] lg:w-[100%] mx-auto flex items-center justify-end">
                         <video class="lg:h-[23rem] w-[100%] rounded-[1.5rem]" src="./videos/print.mp4" controls></video>
                     </div>
                 @endif

             </div>
         </section>


     </main>
 @endsection
