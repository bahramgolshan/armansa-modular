    <div class="  w-[100%] h-[24px] flex flex-row justify-around items-center">

            <div
                class=" font-[600] text-[2rem] flex items-center gap-[1rem]">
                <span class="mt-[0.3rem]"> {{ $settings['phone1'] }} </span>
                <img class="w-[1.8rem] h-[1.8rem] xl:w-[2rem] xl:h-[2rem] 2xl:w-[2.2rem] xl:h-[2.2rem]"
                    src="{{ asset('assets/modules/website/images/icon/phone.png') }}" alt="" />
            </div>

            <div class="w-[50%] flex flex-col xl:flex-row justify-around items-center">
                <div
                    class="flex flex-row justify-around xl:justify-center justify-items-center items-center mt-[12px] xl:ml-[12px]">
                    <a href="https://t.me/{{ $generalSettings['telegram'] }}" target="_blank"
                        class="text-right text-white text-xl font-light font-['IRANSans'] ml-[9px]">
                        {{ $generalSettings['telegram'] }}
                    </a>
                    <div
                        class="xl:w-[34px] xl:h-[34px] w-[24px] h-[24px] flex-col justify-start items-start inline-flex xl:ml-[16px]">
                        <img class="xl:w-[34px] xl:h-[34px] w-[24px] h-[24px]"
                            src="{{ asset('assets/modules/website/images/icon/telegram.png') }}" />
                    </div>
                </div>

                <div class="flex flex-row justify-around xl:justify-center items-center mt-[12px]">
                    <a href="https://www.instagram.com/{{ $generalSettings['instagram'] }}/" target="_blank"
                        class="text-right text-white text-xl font-light font-['IRANSans'] ml-[9px]">
                        {{ $generalSettings['instagram'] }}
                    </a>
                    <div
                        class="xl:w-[34px] xl:h-[34px] w-[24px] h-[24px] flex-col justify-start items-start inline-flex xl:ml-[16px]">
                        <img class="xl:w-[34px] xl:h-[34px] w-[24px] h-[24px]"
                            src="{{ asset('assets/modules/website/images/icon/instagram.png') }}" />
                    </div>
                </div>

                <div class="flex flex-row justify-around xl:justify-center items-center mt-[12px]">
                    <a href="https://eitaa.com/{{ $generalSettings['eitaa'] }}" target="_blank"
                        class="text-right text-white text-xl font-light font-['IRANSans'] ml-[9px]">
                        {{ $generalSettings['eitaa'] }}
                    </a>
                    <div
                        class="xl:w-[34px] xl:h-[34px] w-[24px] h-[24px] flex-col justify-start items-start inline-flex xl:ml-[16px]">
                        <img class="xl:w-[34px] xl:h-[34px] w-[24px] h-[24px]"
                            src="{{ asset('assets/modules/website/images/icon/eitaa-icon.png') }}" />
                    </div>
                </div>
            </div>

    </div>
