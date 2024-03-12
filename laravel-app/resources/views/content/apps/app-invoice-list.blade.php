@extends('layouts/layoutMaster')

@section('title', 'Invoice List - Pages')

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

@section('page-script')
<script src="{{asset('assets/js/app-invoice-list.js')}}"></script>
@endsection

@section('content')
<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">فاکتور /</span> لیست فاکتور ها
</h4>

{{-- add button --}}
            <!-- <a href="/app/invoice/add" class="btn btn-primary mb-3">
              <span class="tf-icons mdi mdi-plus-thick me-1"></span>افزودن
            </a> -->

<!-- Invoice List Table -->
<div class="card mb-5">
  <div class="card-datatable table-responsive text-nowrap">
    <table class="datatables-ajax invoice-list-table table">
      <thead class="table-light">
        <tr>
          <th>#ID</th>
          {{-- <th><i class='mdi mdi-trending-up'></i></th> --}}
          <th>تاریخ</th>
          <th>وضعیت فاکتور</th>
          <th>تخفیف اضافی</th>
          <th>قیمت اضافی</th>
          <th>مالیات</th>
          <th class="cell-fit">اقدامات</th>
        </tr>
      </thead>
      <tbody class="table-border-bottom-0">
        <tr>
          <td><a href="/app/invoice/preview"><strong>1</strong></a></td>
          <td>1402/11/10</td>

          <td><span class="badge bg-label-primary me-1">Active</span></td>
          <td><span class="">12312</span></td>
          <td><span class="">12312</span></td>
          <td><span class="">9%</span></td>
          <td>
            <div class="dropdown">
              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="/app/invoice/preview"><i class="mdi mdi-eye-outline me-1"></i>مشاهده</a>
                <!-- <a class="dropdown-item" href="/app/invoice/edit"><i class="mdi mdi-pencil-outline me-1"></i> ویرایش</a>
                <a class="dropdown-item text-danger" href="javascript:void(0);"><i class="mdi mdi-trash-can-outline me-1 text-danger"></i> حذف</a> -->
              </div>
            </div>
          </td>
        </tr>
        <tr>
          <td><a href="/app/invoice/preview"><strong>1</strong></a></td>
          <td>1402/11/10</td>


          <td><span class="badge bg-label-success me-1">Completed</span></td>
                   <td><span class="">12312</span></td>
          <td><span class="">12312</span></td>
          <td><span class="">9%</span></td>
          <td>
            <div class="dropdown">
              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="/app/invoice/preview"><i class="mdi mdi-eye-outline me-1"></i>مشاهده</a>
                <!-- <a class="dropdown-item" href="/app/invoice/edit"><i class="mdi mdi-pencil-outline me-1"></i> ویرایش</a>
                <a class="dropdown-item text-danger" href="javascript:void(0);"><i class="mdi mdi-trash-can-outline me-1 text-danger"></i> حذف</a> -->
              </div>
            </div>
          </td>
        </tr>
        <tr>
        <td><a href="/app/invoice/preview"><strong>1</strong></a></td>
          <td>1402/11/10</td>

          <td><span class="badge bg-label-info me-1">Scheduled</span></td>
                   <td><span class="">12312</span></td>
          <td><span class="">12312</span></td>
          <td><span class="">9%</span></td>
          <td>
            <div class="dropdown">
              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="/app/invoice/preview"><i class="mdi mdi-eye-outline me-1"></i>مشاهده</a>
                <!-- <a class="dropdown-item" href="/app/invoice/edit"><i class="mdi mdi-pencil-outline me-1"></i> ویرایش</a>
                <a class="dropdown-item text-danger" href="javascript:void(0);"><i class="mdi mdi-trash-can-outline me-1 text-danger"></i> حذف</a> -->
              </div>
            </div>
          </td>
        </tr>
        <tr>
        <td><a href="/app/invoice/preview"><strong>1</strong></a></td>
          <td>1402/11/10</td>
          <td><span class="badge bg-label-warning me-1">Pending</span></td>
                   <td><span class="">12312</span></td>
          <td><span class="">12312</span></td>
          <td><span class="">9%</span></td>
          <td>
            <div class="dropdown">
              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="/app/invoice/preview"><i class="mdi mdi-eye-outline me-1"></i>مشاهده</a>
                <!-- <a class="dropdown-item" href="/app/invoice/edit"><i class="mdi mdi-pencil-outline me-1"></i> ویرایش</a>
                <a class="dropdown-item text-danger" href="javascript:void(0);"><i class="mdi mdi-trash-can-outline me-1 text-danger"></i> حذف</a> -->
              </div>
            </div>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</div>

<!-- Ajax Sourced Server-side -->
<!-- <div class="card">
  <h5 class="card-header">Ajax Sourced Server-side</h5>
  <div class="card-datatable text-nowrap">
    <table class="datatables-ajax table table-bordered">
      <thead>
        <tr>
          <th>Full name</th>
          <th>Email</th>
          <th>Position</th>
          <th>Office</th>
          <th>Start date</th>
          <th>Salary</th>
        </tr>
      </thead>
    </table>
  </div>
</div> -->
<!--/ Ajax Sourced Server-side -->


@endsection
