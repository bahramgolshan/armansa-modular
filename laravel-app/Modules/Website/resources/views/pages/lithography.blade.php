{{-- ویراستاری --}}
@extends('website::layouts.front_master')

@section('content')
    <main class="bg-[#F5F5F5] text-[#3C4999] pb-[2rem]">

      <section class="custom-padding py-[1rem] lg:py-[20px] xl:py-[30px]">
        <div class="primary-container mx-auto">
        <div>
          <h2
            class="w-[100%] text-right text-[#3C4999] font-bold xl:text-[3rem] text-[2rem] font-bold"
          >
            درباره ی فرآیند لیتوگرافی:
          </h2>
        </div>
        </div>
      </section>

      <section class="custom-padding bg-neutral-100">
          <div
              class="primary-container mx-auto py-[2rem] px-[1rem] bg-white rounded-[0.313rem] lg:rounded-[0.625rem] shadow-[-2px_2px_8px_1px_rgba(0,0,0,0.15)]">
              <div>
                  <p class="w-[100%] text-right xl:text-[1.5rem] md:text-[1.2rem] text-[1rem]">
یکی از مراحل واسط در چاپ افست ،مرحله لیتوگرافی می باشد .در فرآیند لیتوگرافی فایل ها می بایست به  4 رنگ اصلی تقسیم
شود.رنگ های اصلی شامل cmyk است .
سپس اطلاعات مربوطه به هرکدام ازاین  4 رنگ با نوعی پلیمر مخصوص و جداگانه و تک به تک بر روی صفحات فلزی تحت
عنوان زینک چاپ می شود.جنس سطح زینک از موادی ساخته شده است که به هیچ عنوان مرکب چاپ را جذب نمیکند و بالعکس
جنس مواد پلمیری که توسط دستگاه بر روی زینک چاپ شده ،جاذب مرکب است .
دستگاهی که اطلاعات را بر روی سطح زینک چاپ میکند پلیت ستر است .اطلاعات پس از ویرایش به صورت مستقیم به پلیت ستر
منتقل و زینک چاپ می شود زینک پس از آماده شدن در مرحله بعد وارد دستگاه دیگری به نام پروسسور میشود.دستگاه پروسسور
زینک را با موادی خاص به نام دارو آب می شوید و توسط غلتکهای خشک می کند.بعدازاین مرحله زینک ها آماده اند و به چاپخانه
ارسال می شوند.
                  </p>
              </div>

              <div class="px-4 sm:px-6 lg:px-8">

                      <div class="mt-8 flow-root">
                        <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                          <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                            <div class="overflow-hidden shadow sm:rounded-lg">
                              <table class="min-w-full divide-y divide-gray-500">
                                <thead class="bg-[#3C4999] text-white">
                                  <tr class="p-[1000px]">
                                    <th scope="col" class="py-3.5 pr-4 text-right text-sm font-semibold sm:pl-6 xl:text-[1.2rem] md:text-[1rem] text-[1rem]">سایز ماشین به ورق</th>
                                    <th scope="col" class="px-3 py-3.5 text-right text-sm font-semibold xl:text-[1.2rem] md:text-[1rem] text-[1rem]">نام ماشین چاپ</th>
                                    <th scope="col" class="px-3 py-3.5 text-right text-sm font-semibold xl:text-[1.2rem] md:text-[1rem] text-[1rem]">سایز کاغذ</th>
                                    <th scope="col" class="px-3 py-3.5 text-right text-sm font-semibold xl:text-[1.2rem] md:text-[1rem] text-[1rem]">ضخامت پلیت</th>
                                    <th scope="col" class="px-3 py-3.5 text-right text-sm font-semibold xl:text-[1.2rem] md:text-[1rem] text-[1rem]">ابعاد زینک</th>
                                  </tr>
                                </thead>
                                <tbody class="divide-y divide-[#3C4999] bg-white">
                                  <tr>
                                    <td class="whitespace-nowrap py-4 pr-4 text-sm xl:text-[1.2rem] md:text-[1.2rem] text-[1rem] ">یک ورقی</td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm xl:text-[1.2rem] md:text-[1.2rem] text-[1rem]">Gto</td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm xl:text-[1.2rem] md:text-[1.2rem] text-[1rem]">35×50</td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm xl:text-[1.2rem] md:text-[1.2rem] text-[1rem]">میکرون15</td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm xl:text-[1.2rem] md:text-[1.2rem] text-[1rem]">mm410×510</td>
                                  </tr>
                                  <tr>
                                    <td class="whitespace-nowrap py-4 pr-4 text-sm xl:text-[1.2rem] md:text-[1.2rem] text-[1rem]">یک ورقی</td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm xl:text-[1.2rem] md:text-[1.2rem] text-[1rem]">Speed master</td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm xl:text-[1.2rem] md:text-[1.2rem] text-[1rem]">35×50</td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm xl:text-[1.2rem] md:text-[1.2rem] text-[1rem]">میکرون15</td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm xl:text-[1.2rem] md:text-[1.2rem] text-[1rem]">525×425mm</td>
                                  </tr>
                                  <tr>
                                    <td class="whitespace-nowrap py-4 pr-4 text-sm xl:text-[1.2rem] md:text-[1.2rem] text-[1rem]">دو ورقی</td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm xl:text-[1.2rem] md:text-[1.2rem] text-[1rem]">معمولی</td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm xl:text-[1.2rem] md:text-[1.2rem] text-[1rem]">50×70</td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm xl:text-[1.2rem] md:text-[1.2rem] text-[1rem]">30 میکرون</td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm xl:text-[1.2rem] md:text-[1.2rem] text-[1rem]">724×615mm</td>
                                  </tr>
                                  <tr>
                                    <td class="whitespace-nowrap py-4 pr-4 text-sm xl:text-[1.2rem] md:text-[1.2rem] text-[1rem]">دو ورقی</td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm xl:text-[1.2rem] md:text-[1.2rem] text-[1rem]">Speed master</td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm xl:text-[1.2rem] md:text-[1.2rem] text-[1rem]">50×70</td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm xl:text-[1.2rem] md:text-[1.2rem] text-[1rem]">30 میکرون</td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm xl:text-[1.2rem] md:text-[1.2rem] text-[1rem]">745×605mm</td>
                                  </tr>
                                  <tr>
                                    <td class="whitespace-nowrap py-4 pr-4 text-sm xl:text-[1.2rem] md:text-[1.2rem] text-[1rem]">چهار و نیم ورقی</td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm xl:text-[1.2rem] md:text-[1.2rem] text-[1rem]">معمولی</td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm xl:text-[1.2rem] md:text-[1.2rem] text-[1rem]">100×70</td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm xl:text-[1.2rem] md:text-[1.2rem] text-[1rem]">30 میکرون</td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm xl:text-[1.2rem] md:text-[1.2rem] text-[1rem]">1030×820mm</td>
                                  </tr>

                                  <!-- More people... -->
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                </div>
              <h2
                  class="mt-[30px] w-[100%] h-9 text-right font-bold lg:text-[2rem] text-[1.5rem] md:text-[1.7rem]">
                  ویژگی زینک چاپ :
              </h2>
              <div>
                  <p class="mt-[20px] w-[100%] text-right text-[#3C4999] xl:text-[1.5rem] md:text-[1.2rem] text-[1rem]">
ویژگی اصلی وعمده این محصول حل نشدن آب و روغن است سطح زینک چاپ دو ویژگی متفاوت دارد.منطقه غیر حامل و منطقه
حامل قسمت حامل شامل اطلاعات و تصویر هایی است که آب را دفع میکند و جذب مرکب انجام می شود ،در منطقه غیر حامل
جذب آب وجود دارد.این محصولات سطحی صاف و یکدست دارند که قابلیت شکل پذیری یکی دیگر از ویژگی های آن محسوب می
شود .
                  </p>
              </div>





              <h2
                  class="mt-[30px] w-[100%] h-9 text-right font-bold lg:text-[2rem] text-[1.5rem] md:text-[1.7rem]">
                 خدمات آرمانسا در زمینه لیتوگرافی :
              </h2>
              <div>

                    <p class="mt-[20px] w-[100%] xl:text-[1.5rem] md:text-[1.2rem] text-[1rem]">
دراین مطلب به طور کامل گفته شد که لیتوگرافی چیست و فرآیند گرفتن زینک چگونه است .اما علاوه بر آشنایی با این موارد یکی
از موردهای مهم ،موضوع انتهاب بهترین مجموعه برای چاپ زینک است .مجموعه آرمانسا به طور کامل این اطمینان را به شما
می دهد که با بهترین کیفیت و در کمترین زمان ممکن کارهای مربوطه به لیتوگرافی پروژه شما انجام خواهد شد.در مجموعه آرمانسا
علاوه بر کیفیت بالا ،شما می توانید مناسبترین قیمت سفارش خود را به شدت برسانید .برای مشاوره و راهنمایی سفارشاتتان میتوانید
با ما در تماس باشید .
                    </p>
              </div>
          </div>
      </section>


    </main>
@endsection
