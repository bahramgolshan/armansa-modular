<!-- statistics -->
<section class="bg-indigo-800 w-[100%] py-[1.5rem] large-container">
    <div
        class="primary-container mx-auto md:w-[100%] md:bg-indigo-800 flex flex-col gap-[3rem] md:justify-center md:gap-[10rem] md:flex-row py-[2rem]">
        @foreach ($achievements as $achievement)
            <div class="flex flex-col justify-center text-white">
                <div class="text-center text-2xl font-normal">{{ $achievement->prefix }}</div>
                <div class="text-center text-[64px] font-bold">{{ $achievement->number }}</div>
                <div class="text-center text-2xl font-normal">{{ $achievement->suffix }}</div>
            </div>
        @endforeach
    </div>
</section>
