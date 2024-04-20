@extends('layouts/layoutMaster')

@section('title', 'Preview - User')

@section('vendor-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/flatpickr/flatpickr.css') }}" />
@endsection

@section('page-script')
    <script src="{{ asset('assets/js/offcanvas-add-payment.js') }}"></script>
    <script src="{{ asset('assets/js/offcanvas-send-invoice.js') }}"></script>
@endsection

@section('vendor-script')
    <script src="{{ asset('assets/vendor/libs/moment/moment.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/flatpickr/flatpickr.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/cleavejs/cleave.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/cleavejs/cleave-phone.js') }}"></script>
@endsection

@section('content')
    @include('components.msg-success')
    @include('components.msg-error')
    @include('components.msg-validation')

    <div class="row">
        <!-- user -->
        <div class="col-xl-9 col-md-8 col-12 mb-md-0 mb-4">
            <div class="card">
                <div class="card-header invoice-customer border d-flex justify-content-between">
                    <h5 class="d-inline-block mb-0">اطلاعات مشتری</h5>
                </div>
                <div class="card-body p-4">
                    <div class="card-text">
                        <div class="row">
                            <div class="col-12">
                                <div class="row">
                                    <label for="fullname" class="col-sm-2 col-form-label">نام کامل</label>
                                    <div class="col-sm-10">
                                        <input type="text" readonly class="form-control-plaintext" id="fullname"
                                            value="{{ $customer->fullName() ?? '' }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="row">
                                    <label for="mobile" class="col-sm-2 col-form-label">شماره تماس</label>
                                    <div class="col-sm-10">
                                        <input type="text" readonly class="form-control-plaintext" id="mobile"
                                            value="{{ $customer->mobile ?? '' }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="row">
                                    <label for="email" class="col-sm-2 col-form-label">ایمیل</label>
                                    <div class="col-sm-10">
                                        <input type="text" readonly class="form-control-plaintext" id="email"
                                            value="{{ $customer->email ?? '' }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="row">
                                    <label for="address" class="col-sm-2 col-form-label">آدرس</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control-plaintext" id="address" name="w3review" rows="2" cols="20" readonly>{{ $customer->address ?? '' }}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>


                <div class="card-header invoice-payments border">
                    <h5 class="mb-0">سفارشات قبلی</h5>
                </div>
                <div class="table-responsive">
                    <table class="table m-0">
                        <thead class="table-light border-top">
                            <tr>
                                <th>شماره سفارش</th>
                                <th class="w-50">تاریخ</th>
                                <th class="w-25">وضعیت سفارش</th>
                                <th class="w-25">تخفیف اضافی</th>
                                <th class="w-25">قیمت اضافی</th>
                                <th class="w-25">مالیات</th>
                                <th class="w-25">مبلغ کل</th>
                            </tr>
                        </thead>
                        <tbody>
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
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- /user -->

        <!-- user Actions -->
        <div class="col-xl-3 col-md-4 col-12 ">
            <div class="card">
                <div class="card-body">
                    <a class="btn btn-outline-secondary d-grid w-100 mb-3" href="{{ route('app-customer-list') }}">
                        بازگشت
                    </a>
                </div>
            </div>
        </div>
        <!-- /Invoice Actions -->
    </div>

@endsection
