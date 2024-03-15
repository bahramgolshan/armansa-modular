@extends('layouts/layoutMaster')

@section('title', 'User List - Pages')

@section('vendor-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css') }}">
@endsection

@section('vendor-script')
    <script src="{{ asset('assets/vendor/libs/moment/moment.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js') }}"></script>

@endsection

@section('content')
    <h4 class="fw-bold py-3 mb-4">
        <span class="text-muted fw-light">مشتری /</span> لیست مشتری ها
    </h4>

    {{-- add button --}}
    <!-- <a href="/app/invoice/add" class="btn btn-primary mb-3">
                                                  <span class="tf-icons mdi mdi-plus-thick me-1"></span>افزودن
                                                </a> -->

    <!-- User List Table -->
    <div class="card mb-5">
        <div class="card-datatable table-responsive text-nowrap">
            <table class="datatables-ajax table">
                <thead class="table-light">
                    <tr>
                        <th>#</th>
                        <th>نام و نام خانوادگی</th>
                        <th>شماره تلفن</th>
                        <th> آدرس</th>
                        <th>ایمیل</th>
                        <th class="cell-fit">اقدامات</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($customers as $customer)
                        <tr>
                            <td><span class="">{{ $customer->id }}</span></td>
                            <td><a href="/app/user/preview"><strong>{{ $customer->fullName() }}</strong></a></td>
                            <td><span class="">{{ $customer->mobile }}</span></td>
                            <td><span class="">{{ $customer->address }}</span></td>
                            <td><span class="">{{ $customer->email }}</span></td>

                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item"
                                            href="{{ route('app-customer-preview', ['id' => $customer->id]) }}"><i
                                                class="mdi mdi-eye-outline me-1"></i>مشاهده</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach

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
