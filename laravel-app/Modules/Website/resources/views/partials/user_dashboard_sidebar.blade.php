          <div class="hidden lg:block lg:col-span-1 bg-transparent">
              <div
                  class="flex flex-col bg-white shadow-[-2px_2px_8px_1px_rgba(0,0,0,0.15)] rounded-[0.313rem] lg:rounded-[0.625rem]">
                  <div
                      class="flex flex-row justify-star rounded-t-lg hover:bg-[#3C4999] hover:text-white text-[#3C4999] items-center xl:gap-3 gap-1 px-4 py-2">
                      <img class="w-[24px] h-[24px]"
                          src="{{ asset('assets/modules/website/images/dashboard/edit.png') }}" />
                      <a href="{{ route('dashboard.profile.edit') }}"
                          class="text-center xl:text-[1.25rem] lg:text-[0.79rem] px-1 dashboard-sidebar-link">ویرایش
                          پروفایل</a>
                  </div>
                  <div
                      class="flex flex-row justify-star items-center hover:bg-[#3C4999] hover:text-white text-[#3C4999] xl:gap-3 gap-1 px-4 py-2">
                      <img class="w-[24px] h-[24px]"
                          src="{{ asset('assets/modules/website/images/dashboard/cart.png') }}" />
                      <a href="{{ route('dashboard.cart') }}"
                          class="text-center xl:text-[1.25rem] lg:text-[0.79rem] px-1 dashboard-sidebar-link">سبد
                          خرید</a>
                  </div>
                  <div
                      class="flex flex-row justify-star items-center hover:bg-[#3C4999] hover:text-white text-[#3C4999] xl:gap-3 gap-1 px-4 py-2">
                      <img class="w-[24px] h-[24px]"
                          src="{{ asset('assets/modules/website/images/dashboard/print.png') }}" />
                      <a href="{{ route('dashboard.orders') }}"
                          class="text-center xl:text-[1.25rem] lg:text-[0.79rem] px-1 dashboard-sidebar-link">سفارش
                          های من</a>
                  </div>
                  <div
                      class="flex flex-row justify-star items-center rounded-b-lg hover:bg-[#3C4999] hover:text-white text-[#E30813] xl:gap-3 gap-1 px-4 py-2">
                      <img class="w-[24px] h-[24px]"
                          src="{{ asset('assets/modules/website/images/dashboard/logout.png') }}" />
                      <button class="text-center xl:text-[1.25rem] lg:text-[0.79rem] px-1 dashboard-sidebar-link"
                          onclick="event.preventDefault(); document.getElementById('logout-form').submit();">خروج از
                          حساب</button>
                      <form method="POST" id="logout-form" action="{{ route('logout-submit') }}">
                          @csrf
                      </form>
                  </div>
              </div>
          </div>
