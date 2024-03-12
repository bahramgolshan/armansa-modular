@extends('layouts/layoutMaster')

@section('title', 'Product List - Pages')

@section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css')}}">
<link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css')}}">
<link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.css')}}">
<link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css')}}">
@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/moment/moment.js')}}"></script>
<script src="{{asset('assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js')}}"></script>

@endsection


@section('content')
<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">محصول /</span> لیست
</h4>

{{-- add button --}}
            <a href="/app/product/add" class="btn btn-primary mb-3">
              <span class="tf-icons mdi mdi-plus-thick me-1"></span>افزودن
            </a>

<!-- product List Table -->
<div class="card mb-5">
  <div class="card-datatable table-responsive text-nowrap">
    <table class="datatables-ajax  table">
      <thead class="table-light">
        <tr>
          <th>#ID</th>
          {{-- <th><i class='mdi mdi-trending-up'></i></th> --}}
          <th>سرویس</th>
          <th>سایز</th>
          <th>رنگ</th>
          <th>نوع کاغذ</th>
          <th>نوع صحافی</th>
          <th>نوع سلفون</th>
          <th>جنس جلد</th>
          <th class="cell-fit">اقدامات</th>
        </tr>
      </thead>
      <tbody class="table-border-bottom-0">
                <tr>
          <td><strong>1</strong></td>
          <td>سرویس 1</td>

          <td>12</td>
          <td><span class="">سفید</span></td>
          <td><span class="">نوع 1</span></td>
          <td><span class="">نوع 1</span></td>
          <td><span class="">نوع 1</span></td>
          <td><span class="">کاغذی</span></td>
          <td>
            <div class="dropdown">
              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="/app/product/preview"><i class="mdi mdi-eye-outline me-1"></i>مشاهده</a>
                <a class="dropdown-item" href="/app/product/edit"><i class="mdi mdi-pencil-outline me-1"></i> ویرایش</a>
                <a class="dropdown-item text-danger" href="javascript:void(0);"><i class="mdi mdi-trash-can-outline me-1 text-danger"></i> حذف</a>
              </div>
            </div>
          </td>
        </tr>        <tr>
          <td><strong>1</strong></td>
          <td>سرویس 1</td>

          <td>12</td>
          <td><span class="">سفید</span></td>
          <td><span class="">نوع 1</span></td>
          <td><span class="">نوع 1</span></td>
          <td><span class="">نوع 1</span></td>
          <td><span class="">کاغذی</span></td>
          <td>
            <div class="dropdown">
              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="/app/product/preview"><i class="mdi mdi-eye-outline me-1"></i>مشاهده</a>
                <a class="dropdown-item" href="/app/product/edit"><i class="mdi mdi-pencil-outline me-1"></i> ویرایش</a>
                <a class="dropdown-item text-danger" href="javascript:void(0);"><i class="mdi mdi-trash-can-outline me-1 text-danger"></i> حذف</a>
              </div>
            </div>
          </td>
        </tr>        <tr>
          <td><strong>1</strong></td>
          <td>سرویس 1</td>

          <td>12</td>
          <td><span class="">سفید</span></td>
          <td><span class="">نوع 1</span></td>
          <td><span class="">نوع 1</span></td>
          <td><span class="">نوع 1</span></td>
          <td><span class="">کاغذی</span></td>
          <td>
            <div class="dropdown">
              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="/app/product/preview"><i class="mdi mdi-eye-outline me-1"></i>مشاهده</a>
                <a class="dropdown-item" href="/app/product/edit"><i class="mdi mdi-pencil-outline me-1"></i> ویرایش</a>
                <a class="dropdown-item text-danger" href="javascript:void(0);"><i class="mdi mdi-trash-can-outline me-1 text-danger"></i> حذف</a>
              </div>
            </div>
          </td>
        </tr>
                <tr>
          <td><strong>1</strong></td>
          <td>سرویس 1</td>

          <td>12</td>
          <td><span class="">سفید</span></td>
          <td><span class="">نوع 1</span></td>
          <td><span class="">نوع 1</span></td>
          <td><span class="">نوع 1</span></td>
          <td><span class="">کاغذی</span></td>
          <td>
            <div class="dropdown">
              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="/app/product/preview"><i class="mdi mdi-eye-outline me-1"></i>مشاهده</a>
                <a class="dropdown-item" href="/app/product/edit"><i class="mdi mdi-pencil-outline me-1"></i> ویرایش</a>
                <a class="dropdown-item text-danger" href="javascript:void(0);"><i class="mdi mdi-trash-can-outline me-1 text-danger"></i> حذف</a>
              </div>
            </div>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</div>


@endsection
