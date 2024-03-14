@extends('layouts/layoutMaster')

@section('title', 'Account settings - Account')

@section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/tagify/tagify.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/select2/select2.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/formvalidation/dist/css/formValidation.min.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/animate-css/animate.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/sweetalert2/sweetalert2.css')}}" />
@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/select2/select2.js')}}"></script>
<script src="{{asset('assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js')}}"></script>
<script src="{{asset('assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js')}}"></script>
<script src="{{asset('assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js')}}"></script>
<script src="{{asset('assets/vendor/libs/cleavejs/cleave.js')}}"></script>
<script src="{{asset('assets/vendor/libs/cleavejs/cleave-phone.js')}}"></script>
<script src="{{asset('assets/vendor/libs/sweetalert2/sweetalert2.js')}}"></script>
<script src="{{asset('assets/vendor/libs/tagify/tagify.js')}}"></script>
@endsection

@section('page-script')
<script src="{{asset('assets/js/pages-account-settings-account.js')}}"></script>
<script src="{{asset('assets/js/forms-tagify.js')}}"></script>
@endsection

@section('content')
<h4 class="fw-bold py-3 mb-4">
   تنظیمات
</h4>

<div class="row">
  <div class="col-md-12">
    <div class="card mb-4">
      <h4 class="card-header">فرم اطلاعات تنظیمات</h4>
      <!-- Setting -->
      <div class="card-body pt-2 mt-1">
        <form id="" method="POST" onsubmit="return false">
          <div class="row mt-2 gy-4">
            <div class="col-md-6">
              <div class="">
                <label class="mb-1" for="websiteTitle">عنوان سایت</label>
                <input class="form-control" type="text" id="websiteTitle" name="websiteTitle" value="عنوان سایت"  />
              </div>
            </div>
            <div class="col-md-6">
              <div class="">
                <label class="mb-1" for="websiteMetaDescriptions">توضیحات متا سایت</label>
                <textarea class="form-control" name="websiteMetaDescriptions" id="websiteMetaDescriptions" value="">
                  توضیحات متا سایت
                </textarea>
              </div>
            </div>
          <div class="col-md-6">

            <label class="mb-1" for="basic-default-name">کلید واژه</label>
            <div class="mb-4">
                <input id="TagifyBasic" class="form-control" name="meta_keyword" value="Tag1, Tag2, Tag3" />
            </div>

          </div>

                      <div class="col-md-6">
              <div class="">
                <label class="mb-1" for="heroImageSrc">عکس هیرو</label>
                <input class="form-control" type="text" id="heroImageSrc" name="heroImageSrc" value="عنوان سایت"  />
              </div>
            </div>

                 <div class="col-md-6">
              <div class="">
                <label class="mb-1" for="heroDescription">توضیحات هیرو</label>
                <textarea class="form-control" name="heroDescription" id="heroDescription" value="">
                  توضیحات هیرو
                </textarea>
              </div>
            </div>

            <div class="col-md-6">
              <div class="">
                <label class="mb-1" for="aboutArmansa">درباره آرمانسا</label>
                <textarea class="form-control" name="aboutArmansa" id="aboutArmansa" value="">
                  درباره آرمانسا
                </textarea>
              </div>
            </div>

            <div class="col-md-6">
              <div class="">
                <label class="mb-1" for="featuredVideoEmbedCode">لینک ویدیو</label>
                <input class="form-control" type="text" id="featuredVideoEmbedCode" name="featuredVideoEmbedCode" value="لینک ویدیو"  />
              </div>
            </div>

            <div class="col-md-6">
              <div class="">
                <label class="mb-1" for="customersCount">تعداد مشتریان</label>
                <input class="form-control" type="text" id="customersCount" name="customersCount" value="تعداد مشتریان"  />
              </div>
            </div>

            <div class="col-md-6">
              <div class="">
                <label class="mb-1" for="ordersCount">تعداد سفارشات</label>
                <input class="form-control" type="text" id="ordersCount" name="ordersCount" value="لینک ویدیو"  />
              </div>
            </div>

            <div class="col-md-6">
              <div class="">
                <label class="mb-1" for="usersCount">تعداد مشتریان</label>
                <input class="form-control" type="text" id="usersCount" name="usersCount" value="لینک ویدیو"  />
              </div>
            </div>

            <div class="col-md-6">
              <div class="">
                <label class="mb-1" for="phone1">شماره تماس اول</label>
                <input class="form-control" type="text" id="phone1" name="phone1" value="021222222"  />
              </div>

            </div>
            <div class="col-md-6">
              <div class="">
                <label class="mb-1" for="phone2">شماره تماس دوم</label>
                <input class="form-control" type="text" id="phone2" name="phone2" value="021222222"  />
              </div>
            </div>
            <div class="col-md-6">
              <div class="">
                <label class="mb-1" for="phone3">شماره تماس سوم</label>
                <input class="form-control" type="text" id="phone3" name="phone3" value="021222222"  />
              </div>
            </div>

            <div class="col-md-6">
              <div class="">
                <label class="mb-1" for="instagram">اینستاگرام</label>
                <input class="form-control" type="text" id="instagram" name="instagram" value="021222222"  />
              </div>
            </div>

            <div class="col-md-6">
              <div class="">
                <label class="mb-1" for="telegram">تلگرام</label>
                <input class="form-control" type="text" id="telegram" name="telegram" value="021222222"  />
              </div>
            </div>

            <div class="col-md-6">
              <div class="">
                <label class="mb-1" for="eitaa">تعداد مشتریان</label>
                <input class="form-control" type="text" id="eitaa" name="eitaa" value="021222222"  />
              </div>
            </div>

            <div class="col-md-6">
              <div class="">
                <label class="mb-1" for="address">آدرس</label>
                <input class="form-control" type="text" id="address" name="address" value="021222222"  />
              </div>
            </div>

          </div>
          <div class="mt-4">
            <button type="submit" class="btn btn-primary me-2">ذخیره تغییرات</button>
            <button type="reset" class="btn btn-outline-secondary">لفو</button>
          </div>
        </form>
      </div>
    </div>

  </div>
</div>

@endsection
