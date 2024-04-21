@extends('layouts/layoutMaster')

@section('title', 'Invoice List - Pages')

@section('vendor-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css') }}">
@endsection

@section('page-style')
    <style>
        .pagination {
            margin-bottom: 0;
            display: flex;
            justify-content: center;
            margin: 20px
        }
    </style>
@endsection

@section('vendor-script')
    <script src="{{ asset('assets/vendor/libs/moment/moment.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js') }}"></script>

@endsection

@section('page-script')
    <script src="{{ asset('assets/js/app-invoice-list.js') }}"></script>
@endsection

@section('content')
    @include('components.msg-success')
    @include('components.msg-error')
    @include('components.msg-validation')

    <h4 class="fw-bold py-3 mb-4">
        <span class="text-muted fw-light">سفارشات /</span> لیست سفارش ها
    </h4>

    {{-- add button --}}
    <!-- <a href="/app/invoice/add" class="btn btn-primary mb-3"><span class="tf-icons mdi mdi-plus-thick me-1"></span>افزودن</a> -->

    <!-- Invoice List Table -->
    <div class="card mb-5">
        <div class="card-datatable table-responsive text-nowrap">
            <table class="datatables-ajax invoice-list-table table">
                <thead class="table-light">
                    <tr>
                        <th>شماره سفارش</th>
                        <th>تاریخ</th>
                        <th>وضعیت سفارش</th>
                        <th>تخفیف اضافی</th>
                        <th>قیمت اضافی</th>
                        <th>مالیات</th>
                        <th>مبلغ کل</th>
                        <th class="cell-fit">اقدامات</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($invoices as $invoice)
                        <tr>
                            <td><a
                                    href="{{ route('app-invoice-preview', ['id' => $invoice->id]) }}"><strong>{{ $invoice->id }}</strong></a>
                            </td>
                            <td>{{ verta($invoice->created_at)->format('Y-m-d') }}</td>

                            <td><span
                                    class="badge bg-label-{{ $invoicesStatusColors[$invoice->status] }} me-1">{{ __('app.invoiceStatus.' . $invoice->status) }}</span>
                            </td>
                            <td><span class="">{{ $invoice->additional_discount }}</span></td>
                            <td><span class="">{{ $invoice->additional_price }}</span></td>
                            <td><span class="">{{ $invoice->tax }}</span></td>
                            <td><span class="">{{ $invoice->final_price }}</span></td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item"
                                            href="{{ route('app-invoice-preview', ['id' => $invoice->id]) }}"><i
                                                class="mdi mdi-eye-outline me-1"></i>مشاهده</a>
                                        {{-- <a class="dropdown-item" href="/app/invoice/edit"><i
                                                class="mdi mdi-pencil-outline me-1"></i> ویرایش</a>
                                        <a class="dropdown-item text-danger" href="javascript:void(0);"><i
                                                class="mdi mdi-trash-can-outline me-1 text-danger"></i> حذف</a> --}}
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $invoices->links() }}
        </div>
    </div>
@endsection
