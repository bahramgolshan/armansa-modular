@extends('layouts/layoutMaster')

@section('title', 'faq List - Pages')

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
  <span class="text-muted fw-light">سوالات /</span> لیست سوالات
</h4>

{{-- add button --}}
            <a href="/app/faq/add" class="btn btn-primary mb-3">
              <span class="tf-icons mdi mdi-plus-thick me-1"></span>افزودن
            </a>

<!-- faq List Table -->
<div class="card mb-5">
  <div class="card-datatable table-responsive text-nowrap">
    <table class="datatables-ajax table">
      <thead class="table-light">
        <tr>
          {{-- <th><i class='mdi mdi-trending-up'></i></th> --}}
          <th>سوال</th>
          <th>جواب</th>
          <th class="cell-fit">اقدامات</th>
        </tr>
      </thead>
      <tbody class="table-border-bottom-0">
        <tr>
          <td>بلاگ</td>
          <td>بلاگ</td>
          <td>
            <div class="dropdown">
              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="/app/faq/preview"><i class="mdi mdi-eye-outline me-1"></i>مشاهده</a>
                <a class="dropdown-item" href="/app/faq/edit"><i class="mdi mdi-pencil-outline me-1"></i> ویرایش</a>
                <a class="dropdown-item text-danger" href="javascript:void(0);"><i class="mdi mdi-trash-can-outline me-1 text-danger"></i> حذف</a>
              </div>
            </div>
          </td>
        </tr>
        <tr>
          <td>بلاگ</td>
          <td>بلاگ</td>
          <td>
            <div class="dropdown">
              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="/app/faq/preview"><i class="mdi mdi-eye-outline me-1"></i>مشاهده</a>
                <a class="dropdown-item" href="/app/faq/edit"><i class="mdi mdi-pencil-outline me-1"></i> ویرایش</a>
                <a class="dropdown-item text-danger" href="javascript:void(0);"><i class="mdi mdi-trash-can-outline me-1 text-danger"></i> حذف</a>
              </div>
            </div>
          </td>
        </tr>
        <tr>
          <td>بلاگ</td>
          <td>بلاگ</td>
          <td>
            <div class="dropdown">
              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="/app/faq/preview"><i class="mdi mdi-eye-outline me-1"></i>مشاهده</a>
                <a class="dropdown-item" href="/app/faq/edit"><i class="mdi mdi-pencil-outline me-1"></i> ویرایش</a>
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
