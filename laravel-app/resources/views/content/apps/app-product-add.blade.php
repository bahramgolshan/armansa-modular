@extends('layouts/layoutMaster')

@section('title', 'Add - Invoice')

@section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/flatpickr/flatpickr.css')}}" />
@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/flatpickr/flatpickr.js')}}"></script>
<script src="{{asset('assets/vendor/libs/cleavejs/cleave.js')}}"></script>
<script src="{{asset('assets/vendor/libs/cleavejs/cleave-phone.js')}}"></script>
<script src="{{asset('assets/vendor/libs/jquery-repeater/jquery-repeater.js')}}"></script>
@endsection

@section('content')
<form class="row" action="/app/product/list">
  <!-- product Add-->
  <div class="col-lg-9 col-12 mb-lg-0 mb-4">
    <div class="">
      <!-- Multi Column with Form Separator -->
<div class="card mb-4">
  <h5 class="card-header mb-2">فرم ایجاد محصول جدید</h5>
  <div class="card-body">
        <h6>1. مشخصات کلی</h6>
    <div class="row g-4">
      <div class="col-md-6">
        <div class="form-floating form-floating-outline">
          <input type="text" id="size" name="size" class="form-control" placeholder="سایز مورد نظر خود را وارد کنید" />
          <label for="size">سایز</label>
        </div>
      </div>

      <div class="col-md-6">
        <div class="form-floating form-floating-outline">
          <input type="text" id="paper" name="paper" class="form-control" placeholder="نوع کاغذ مورد نظر خود را وارد کنید" />
          <label for="paper">نوع کاغذ</label>
        </div>
      </div>

      <div class="col-md-6">
        <div class="form-floating form-floating-outline">
          <input type="text" id="color" name="color" class="form-control" placeholder="رنگ چاپ مورد نظر خود را وارد کنید" />
          <label for="color">رنگ چاپ</label>
        </div>
      </div>

      <div class="col-md-6">
        <div class="form-floating form-floating-outline">
          <input type="text" id="number-of-pages" name="number-of-pages" class="form-control" placeholder="تعداد صفحات مورد نظر خود را وارد کنید" />
          <label for="number-of-pages">تعداد صفحات</label>
        </div>
      </div>

      <div class="col-md-6">
        <div class="form-floating form-floating-outline">
          <input type="text" id="circulation" name="circulation" class="form-control" placeholder="تعداد تیراژ مورد نظر خود را وارد کنید" />
          <label for="circulation">تیراژ</label>
        </div>
      </div>

    </div>
    <hr class="my-4 mx-n4" />
    <h6>2. مشخصات جلد و صحافی</h6>
    <div class="row g-3">

      <div class="col-md-6">
        <div class="form-floating form-floating-outline">
          <input type="text" id="cover" name="cover" class="form-control" placeholder="جنس جلد مورد نظر خود را وارد کنید" />
          <label for="cover">جنس جلد</label>
        </div>
      </div>

      <div class="col-md-6">
        <div class="form-floating form-floating-outline">
          <input type="text" id="binding" name="binding" class="form-control" placeholder="نوع صحافی مورد نظر خود را وارد کنید" />
          <label for="binding">نوع صحافی</label>
        </div>
      </div>

      <div class="col-md-6">
        <div class="form-floating form-floating-outline">
          <input type="text" id="cellophane" name="cellophane" class="form-control" placeholder="نوع سلفون مورد نظر خود را وارد کنید" />
          <label for="cellophane">نوع سلفون</label>
        </div>
      </div>

    </div>
  </div>
</div>
    </div>
  </div>
  <!-- /product Add-->

  <!-- product Actions -->
  <div class="col-lg-3 col-12">
    <div class="card mb-4">
      <div class="card-body">

        <button type="submit" class="btn btn-primary d-grid w-100 mb-3">ذخیره</button>
        <a href="/app/product/list" class="btn btn-outline-secondary d-grid w-100">لغو</a>
      </div>
    </div>
  </div>
  <!-- /product Actions -->
</form>

@endsection
