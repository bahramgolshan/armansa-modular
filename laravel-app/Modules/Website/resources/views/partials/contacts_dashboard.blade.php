<!--Contacts-->
<section class="w-[100%] bg-[#F5F5F5] py-[3rem] custom-padding text-[--primary-color]">
    <div class="primary-container mx-auto">
        <div>
            <h1 class="text-center text-[1.5rem] lg:text-[1.6rem] xl:text-[2rem] font-bold mb-[1rem]">
                ویرایش پروفایل
            </h1>
        </div>
        <div class="mx-auto grid grid-cols-1 lg:gap-x-8 gap-y-8 lg:grid-cols-5 xl:gap-x-9">
            @include('website::partials.user_dashboard_sidebar')
            <form action="{{ route('dashboard.profile.update', ['id' => Auth::id()]) }}" method="POST"
                class="border-gray-300 border-2 col-span-1 lg:col-span-4 gap-[2rem] bg-white rounded-[0.313rem] lg:rounded-[0.625rem] shadow-[-2px_2px_8px_1px_rgba(0,0,0,0.15)] p-[3rem]">
                @csrf
                <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-2 sm:col-start-1">
                        <label for="full_name"
                            class="block text-sm font-medium leading-6 text-[#3B4999] lg:text-[18px]">نام و
                            نام‌خانوادگی:</label>
                        <div class="mt-2">
                            <input type="text" name="full_name" id="full_name"
                                class="block w-full pr-[0.5rem] rounded-md border-0 py-1.5 text-[#3B4999] shadow-sm ring-1 ring-inset ring-[#3C4999] placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 outline-none"
                                value="{{ Auth::user()->full_name }}" />
                        </div>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="phone"
                            class="block text-sm font-medium leading-6 text-[#3B4999] lg:text-[18px]">تلفن همراه
                            :</label>
                        <div class="mt-2">
                            <input type="text" name="mobile" id="mobile"
                                class="block w-full pr-[0.5rem] rounded-md border-0 py-1.5 text-[#3B4999] shadow-sm ring-1 ring-inset ring-[#3C4999] placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 outline-none"
                                value="{{ Auth::user()->mobile }}" />
                        </div>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="email"
                            class="block text-sm font-medium leading-6 text-[#3c4999] lg:text-[18px]">ادرس
                            ایمیل:</label>
                        <div class="mt-2">
                            <input type="email" name="email" id="email"
                                class="block w-full pr-[0.5rem] rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-[#3C4999] placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 outline-none"
                                value="{{ Auth::user()->email }}" disabled />
                        </div>
                    </div>
                    <div class="col-span-full">
                        <label for="street-address"
                            class="block text-sm font-medium leading-6 text-[#3c4999] lg:text-[18px]">ادرس پستی
                            :</label>
                        <div class="mt-2">
                            <textarea type="text" name="address" id="address"
                                class="block w-full px-[0.5rem] rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-[#3C4999] placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 outline-none">{{ Auth::user()->address }}</textarea>
                        </div>
                        <div class="flex items-center gap-[1rem] justify-center sm:justify-end mt-5">
                            <button
                                class="text-center text-[0.75rem] sm:text-[1rem] lg:text-[1.2rem] w-[200px] h-[40px] h-[50px] bg-[#00B6DE] rounded-lg text-white">
                                ثبت ویرایش
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
