<!-- Header -->
<header class="z-[200] w-[100%] fixed top-0" id="sticky-header">
    <section class="w-[100%] bg-white z-50 custom-padding">
        <div class="primary-container mx-auto">
            <nav class="relative py-4 flex items-center bg-white lg:justify-between sm:flex-row order-12">
                <div class="flex justify-between items-center">
                    <div class="lg:hidden sidebar-toggle">
                        <button class="navbar-burger flex items-center text-blue-600">
                            <img src="{{ asset('assets/modules/website/images/icon/hamburger.png') }}" alt="">
                        </button>
                    </div>

                    <a class="flex items-center" href="{{ route('home') }}">
                        <svg width="50" height="60" viewBox="0 0 100 100" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M63.9499 100C63.5194 99.7992 63.1038 99.568 62.7064 99.3081C59.1204 96.5568 55.6914 93.6082 52.4355 90.476C48.1389 86.2935 43.8458 82.1075 39.4484 78.0219C37.5728 76.2921 35.7701 74.3998 33.4116 73.2547C32.7812 72.9477 32.1229 72.7009 31.4457 72.5178C30.7059 72.3172 29.9174 72.0543 29.1845 72.1304C27.5381 72.3068 25.8778 72.5697 24.3981 73.4104C22.5399 74.469 20.692 75.5414 18.8407 76.6069C18.7295 76.6692 18.601 76.7038 18.3335 76.8145C20.0703 72.3552 21.7375 68.0413 23.4464 63.6304L39.9903 68.8681C38.7329 65.9413 37.5589 63.153 36.3328 60.3923C35.2282 57.9188 34.0264 55.4902 32.9184 53.0201C31.9077 50.7611 30.9177 48.4848 30.032 46.1773C29.8618 45.7345 30.1466 45.0668 30.3481 44.5548C30.9594 42.9865 31.6066 41.432 32.2897 39.8914C33.0782 38.1028 33.9188 36.3385 34.7211 34.5534C35.2873 33.2976 35.8118 32.0176 36.4023 30.7687C37.2116 29.039 38.0764 27.3577 38.8996 25.6418C39.643 24.0884 40.3307 22.504 41.0879 20.9576C42.0778 18.9442 43.1094 16.955 44.1237 14.9519C45.0163 13.1945 45.8708 11.4163 46.8121 9.68659C48.323 6.87056 49.8895 4.08221 51.4317 1.28349C51.6297 0.937538 51.8138 0.550075 52.0014 0.186829L52.1611 0.252559C51.8867 1.16586 51.6123 2.07571 51.3484 2.99939C50.8517 4.72914 50.3063 6.42083 49.8756 8.15057C49.3685 10.1294 48.8961 12.1082 48.5036 14.1182C48.191 15.6611 47.9896 17.2317 47.7742 18.785C47.4755 20.9541 47.1316 23.1232 46.951 25.3062C46.7704 27.4891 46.7739 29.6236 46.687 31.7823C46.6002 33.9411 46.3883 36.0859 46.4335 38.2343C46.5064 41.6938 46.7148 45.1256 46.9267 48.5678C47.0274 50.2214 47.2289 51.8716 47.4547 53.5149C47.7569 55.7428 48.0729 57.9707 48.4967 60.1848C48.9621 62.6929 49.4692 65.201 50.0736 67.6815C50.678 70.1619 51.3206 72.677 52.1577 75.0986C53.3491 78.5408 54.6446 81.9553 56.0653 85.311C57.2115 88.0233 58.4967 90.6836 59.9242 93.2678C61.1191 95.4542 62.571 97.5023 63.9013 99.6125C63.9291 99.6783 63.9152 99.7717 63.9499 100Z"
                                fill="#3B4999" />
                            <path
                                d="M68.6078 97.7756L68.4515 97.8413C67.0934 96.1115 65.6936 94.4095 64.391 92.6521C63.1545 90.9638 61.9874 89.2237 60.8516 87.4628C59.8825 85.9649 58.9551 84.4289 58.0937 82.8652C57.2636 81.3568 56.4925 79.807 55.7804 78.2364C55.0684 76.6658 54.3633 74.981 53.7798 73.3101C53.2587 71.8225 52.894 70.2761 52.4772 68.7505C51.9875 66.9515 51.4352 65.163 51.0601 63.3398C48.7593 52.3265 47.5046 40.5212 49.0802 29.3019C49.3407 27.2746 49.6499 25.2439 50.1222 23.2547C50.6398 21.0026 51.3136 18.7781 51.9805 16.5641C52.5154 14.7824 53.0573 12.9939 53.7554 11.271C54.6412 9.09847 55.6693 6.98127 56.6696 4.85714C57.4373 3.22426 58.25 1.6156 59.0455 0.013855L59.2782 0.100342C59.0489 0.702293 58.8301 1.31116 58.5835 1.90966C58.1597 2.9821 57.6978 4.0407 57.3053 5.12352C56.6106 7.05738 55.9159 8.99469 55.2976 10.9562C54.8148 12.4992 54.4154 14.0698 54.0437 15.6404C53.5505 17.7161 53.0469 19.7918 52.6822 21.8674C52.3415 23.8135 52.1096 25.7769 51.9875 27.7486C51.7895 30.9867 51.6401 34.2317 51.6401 37.4767C51.6644 40.3411 51.9423 43.209 52.1577 46.07C52.2758 47.6406 52.446 49.2078 52.6717 50.7611C52.9218 52.4908 53.2761 54.1791 53.5575 55.8881C53.7867 57.2719 53.877 58.6557 54.2 60.0222C54.7349 62.2466 55.381 64.4434 56.0305 66.6367C56.5446 68.3664 57.0969 70.0962 57.7012 71.8259C58.2223 73.2858 58.8023 74.7284 59.4379 76.1468C60.2056 77.8766 61.0288 79.5579 61.8693 81.2427C62.564 82.6265 63.4011 83.9514 64.0124 85.3698C64.5022 86.5011 64.7349 87.743 65.1066 88.9262C65.9228 91.5277 66.5897 94.1915 68.0485 96.5544C68.2578 96.9507 68.4445 97.3584 68.6078 97.7756Z"
                                fill="#3B4999" />
                            <path
                                d="M81.8936 58.4204C76.2875 60.42 71.97 63.8933 69.167 69.3628C68.6425 68.1277 68.1771 67.0207 67.7081 65.9033C67.076 64.4122 66.4091 62.935 65.8221 61.4232C65.3742 60.2952 64.9995 59.1396 64.7002 57.9638C63.1824 51.6487 62.3283 45.0225 62.5953 38.5283C62.6891 36.2139 62.9079 33.8995 63.1371 31.6094C63.2703 30.7687 63.4547 29.9369 63.6894 29.1185C66.0617 41.2406 72.6265 50.5985 81.8936 58.4204Z"
                                fill="#3B4999" />
                            <path
                                d="M67.4789 72.4106C66.3535 74.3098 65.2872 76.216 64.9329 78.4405C64.7488 79.6132 64.6133 80.7964 64.4466 82.0245C64.1931 81.5921 63.8874 81.1493 63.6651 80.6684C62.8975 79.0078 62.1403 77.3404 61.4213 75.659C60.5842 73.7044 59.7401 71.7498 58.9899 69.7572C54.3304 57.1561 53.419 42.5239 55.3081 29.2189C55.5964 27.1812 56.1834 25.1851 56.621 23.1648C56.7674 22.2748 56.9929 21.3996 57.2949 20.5494C57.0934 22.2169 56.8225 23.8809 56.7044 25.5553C56.5168 28.2433 56.3258 30.9417 56.3327 33.6366C56.3664 35.7594 56.5288 37.8781 56.819 39.9813C57.0587 41.9013 57.4338 43.811 57.8402 45.7033C58.2987 47.8344 58.8058 49.9585 59.3963 52.055C59.9617 54.2981 60.6576 56.5067 61.4803 58.6695C62.63 61.4648 64.0055 64.177 65.3636 66.8823C66.0168 68.192 66.7765 69.4462 67.6352 70.6324C68.2222 71.3831 67.7846 71.8986 67.4789 72.4106Z"
                                fill="#3B4999" />
                            <path
                                d="M37.5554 66.2008L37.3852 66.3911L24.0821 61.4232C25.5721 57.0608 27.0345 52.7745 28.4968 48.4778L28.726 48.4329C31.6692 54.3555 34.6123 60.2782 37.5554 66.2008Z"
                                fill="#E30813" />
                        </svg>
                        <span class="text-[#3B4999] mr-1 sm:text-[1.2rem] lg:text-[1.4rem] font-bold font-700">مجتمع چاپ
                            آرمانسا</span>
                    </a>
                </div>

                <div class="hidden lg:flex gap-[2rem] items-center text-[#3C4999]">
                    @if (Auth::check())
                        <a href="{{ route('dashboard.cart') }}">سبد خرید</a>
                        <div class="w-[0.3rem] h-[0.3rem] bg-[#3C4999] rotate-45"></div>
                        <a href="{{ route('dashboard.profile') }}">پروفایل</a>
                        <div class="w-[0.3rem] h-[0.3rem] bg-[#3C4999] rotate-45"></div>
                        <button
                            onclick="event.preventDefault(); document.getElementById('logout-form-lg').submit();">خروج
                            از حساب</button>
                        <form method="POST" id="logout-form-lg" action="{{ route('logout-submit') }}">
                            @csrf
                        </form>
                    @else
                        <a class="text-[1.3rem] bg-[--primary-color] text-white py-[.5rem] px-[1rem] mx-[1rem] rounded-lg"
                            href="{{ route('login') }}">ورود / ثبت نام</a>
                    @endif
                </div>
            </nav>
        </div>
    </section>
    <section class="bg-[#3C4999] custom-padding">
        <ul
            class="hidden primary-container text-white w-[100%] py-[12px] lg:flex md:mx-auto lg:mx-auto lg:flex lg:items-center lg:space-x-6">
            <li><a href="{{ route('page.service.print') }}" class="text-sm ml-3">خدمات چاپ</a></li>
            <li class="w-[0.3rem] h-[0.3rem] bg-white rotate-45"></li>
            <li><a href="{{ route('page.service.publication') }}" class="text-sm">خدمات‌‌‌‌‌‌‌‌‌‌ نشر </a></li>
            <li class="w-[0.3rem] h-[0.3rem] bg-white rotate-45"></li>
            <li><a href="{{ route('page.service.lithography') }}" class="text-sm">لیتوگرافی</a></li>
            <li class="w-[0.3rem] h-[0.3rem] bg-white rotate-45"></li>
            <li><a href="{{ route('page.service.calendar') }}" class="text-sm">سر رسید</a></li>
            <li class="w-[0.3rem] h-[0.3rem] bg-white rotate-45"></li>
            <li><a href="{{ route('page.service.samples') }}" class="text-sm">نمونه‌کار</a></li>
            <li class="w-[0.3rem] h-[0.3rem] bg-white rotate-45"></li>
            <li><a href="{{ route('page.about-us') }}" class="text-sm">درباره‌ما</a></li>
        </ul>
    </section>
</header>

<!-- Sidebar -->
<!-- start: Sidebar -->
<div
    class="z-[310] fixed gap-[2rem] hidden right-0 top-0 w-64 h-full sidebar-menu transition-transform overflow-y-scroll">
    <img src="{{ asset('assets/modules/website/images/icon/white-close.png') }}"
        class="absolute top-[2rem] right-[1rem] close-button" />

    <ul class="p-4 mt-[3rem]">
        <li class="mb-[1rem] group">
            <div class="flex items-center py-2 px-4 text-gray-300 sidebar-dropdown-toggle">
                <span class="text-white text-base font-semibold">خدمات چاپ</span>
                <img src="{{ asset('assets/modules/website/images/icon/white-chevron-down.png') }}"
                    class="ri-arrow-right-s-line mr-auto group-[.selected]:rotate-180" />
            </div>
            <ul class="pr-4 mt-2 hidden group-[.selected]:block">
                <li class="mb-3">
                    <a href="{{ route('page.service.print.digital') }}"
                        class="text-gray-300 text-white font-normal flex items-center hover:text-gray-100">چاپ
                        دیجیتال</a>
                </li>
                <li class="mb-3">
                    <a href="{{ route('page.service.print.offset') }}"
                        class="text-gray-300 text-white font-normal flex items-center hover:text-gray-100">چاپ افست</a>
                </li>
            </ul>
        </li>
        <li class="mb-[1rem] group">
            <div href="{{ route('page.service.print') }}"
                class="flex items-center py-2 px-4 text-gray-300 sidebar-dropdown-toggle">
                <span class="text-white text-base font-semibold">خدمات نشر</span>
                <img src="{{ asset('assets/modules/website/images/icon/white-chevron-down.png') }}"
                    class="ri-arrow-right-s-line mr-auto group-[.selected]:rotate-180" />
            </div>
            <ul class="pr-4 mt-2 hidden group-[.selected]:block">
                <li class="mb-3">
                    <a href="{{ route('page.service.publication.permission') }}"
                        class="text-gray-300 text-white font-normal flex items-center hover:text-gray-100">اخذ مجوز
                        چاپ</a>
                </li>
                <li class="mb-3">
                    <a href="{{ route('page.service.publication.layout') }}"
                        class="text-gray-300 text-white font-normal flex items-center hover:text-gray-100">صفحه‌آرایی</a>
                </li>
                <li class="mb-3">
                    <a href="{{ route('page.service.publication.editing') }}"
                        class="text-gray-300 text-white font-normal flex items-center hover:text-gray-100">ویراستاری</a>
                </li>
            </ul>
        </li>
        <li class="mb-[1rem] group">
            <div href="{{ route('page.service.print') }}"
                class="flex items-center py-2 px-4 text-gray-300 sidebar-dropdown-toggle">
                <span class="text-white text-base font-semibold">لیتوگرافی</span>
                <img src="{{ asset('assets/modules/website/images/icon/white-chevron-down.png') }}"
                    class="ri-arrow-right-s-line mr-auto group-[.selected]:rotate-180" />
            </div>
            <ul class="pr-4 mt-2 hidden group-[.selected]:block">
                <li class="mb-3">
                    <a href="{{ route('page.service.lithography.zinc-gto') }}"
                        class="text-gray-300 text-white font-normal flex items-center hover:text-gray-100">زینک GTO</a>
                </li>
                <li class="mb-3">
                    <a href="{{ route('page.service.lithography.zinc-dureghi') }}"
                        class="text-gray-300 text-white font-normal flex items-center hover:text-gray-100">زینک
                        دورقی</a>
                </li>
                <li class="mb-3">
                    <a href="{{ route('page.service.lithography.zinc-speed-master') }}"
                        class="text-gray-300 text-white font-normal flex items-center hover:text-gray-100">زینک اسپید
                        مستر</a>
                </li>
            </ul>
        </li>

        <li class="mb-1 group">
            <a href="{{ route('page.service.calendar') }}" class="flex items-center py-2 px-4 text-gray-300">
                <span class="text-white text-base font-semibold">سررسید</span>
            </a>
        </li>
        <li class="mb-1 group">
            <a href="{{ route('page.service.samples') }}" class="flex items-center py-2 px-4 text-gray-300">
                <span class="text-white text-base font-semibold">نمونه کارها</span>
            </a>
        </li>
        <li class="mb-1 group">
            <a href="{{ route('page.about-us') }}" class="flex items-center py-2 px-4 text-gray-300">
                <span class="text-white text-base font-semibold">درباره ما</span>
            </a>
        </li>
    </ul>
    <ul class="p-4 mt-[1rem]">
        @if (Auth::check())
            <li class="mb-1 group">
                <a href="{{ route('dashboard.cart') }}" class="flex items-center py-2 px-4 text-gray-300">
                    <span class="text-white font-bold">سبد خرید</span>
                </a>
            </li>
            <li class="mb-1 group">
                <a href="{{ route('dashboard.profile') }}" class="flex items-center py-2 px-4 text-gray-300">
                    <span class="text-white font-bold">پروفایل</span>
                </a>
            </li>
            <li class="mb-1 group">
                <a href="{{ route('dashboard.orders') }}" class="flex items-center py-2 px-4 text-gray-300">
                    <span class="text-white font-bold">سفارش های من</span>
                </a>
            </li>
            <li class="mb-1 group">
                <button class="flex items-center py-2 px-4 text-gray-300"
                    onclick="event.preventDefault(); document.getElementById('logout-form-sm').submit();">
                    <span class="text-[#FFA2A7] font-bold">خروج از حساب</span>
                </button>
                <form method="POST" id="logout-form-sm" action="{{ route('logout-submit') }}">
                    @csrf
                </form>
            </li>
        @else
            <li class="mb-1 group">
                <a href="{{ route('login') }}" class="flex items-center py-2 px-4 text-gray-300">
                    <span class="text-white font-bold">ورود / ثبت نام</span>
                </a>
            </li>
        @endif
    </ul>
</div>
<div class="z-[300] fixed hidden top-0 left-0 w-full h-full bg-black/50 z-40 md:hidden sidebar-overlay"></div>
<!-- end: Sidebar -->
