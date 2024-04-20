@extends('layouts/layoutMaster')

@section('title', 'Preview - Invoice')

@section('vendor-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/flatpickr/flatpickr.css') }}" />
@endsection

@section('page-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/pages/app-invoice.css') }}" />
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

    <div class="row invoice-preview">
        <!-- Invoice -->
        <div class="col-xl-9 col-md-8 col-12 mb-md-0 mb-4">
            <div class="card invoice-preview-card">
                <div class="card-header border d-flex justify-content-between">
                    <h5 class="d-inline-block mb-0">اطلاعات سند</h5>
                    <span
                        class="badge bg-label-{{ $paymentStatusColors[$payment->status] }}">{{ __('app.paymentStatus.' . $payment->status) }}</span>
                </div>
                <div class="card-body p-4">
                    <div class="card-text">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <label for="email" class="col-sm-4 col-form-label">شماره سند</label>
                                    <div class="col-sm-8">
                                        <input type="text" readonly class="form-control-plaintext" id="email"
                                            value="{{ $payment->id ?? '' }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <label for="email" class="col-sm-4 col-form-label">تاریخ</label>
                                    <div class="col-sm-8">
                                        <input type="text" readonly class="form-control-plaintext" id="email"
                                            value="{{ verta($payment->created_at)->format('Y-m-d') ?? '' }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <label for="address" class="col-sm-4 col-form-label">نتیجه تاییدیه</label>
                                    <div class="col-sm-8">
                                        <input type="text" readonly class="form-control-plaintext" id="address"
                                            value="{{ $payment->verification_result }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <label for="address" class="col-sm-4 col-form-label">کد پیگیری</label>
                                    <div class="col-sm-8">
                                        <input type="text" readonly class="form-control-plaintext" id="address"
                                            value="{{ $payment->reterival_ref_no }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <label for="address" class="col-sm-4 col-form-label">تاریخ تراکنش</label>
                                    <div class="col-sm-8">
                                        <input type="text" readonly class="form-control-plaintext" id="address"
                                            value="{{ verta($payment->transaction_date)->format('Y-m-d') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <label for="address" class="col-sm-4 col-form-label">نتیجه تراکنش</label>
                                    <div class="col-sm-8">
                                        <input type="text" readonly class="form-control-plaintext" id="address"
                                            value="{{ $payment->transaction_result }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <label for="address" class="col-sm-4 col-form-label">مبلغ</label>
                                    <div class="col-sm-8">
                                        <input type="text" readonly class="form-control-plaintext" id="address"
                                            value="{{ $payment->amount }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <label for="address" class="col-sm-4 col-form-label">شماره رهگیری سیستم</label>
                                    <div class="col-sm-8">
                                        <input type="text" readonly class="form-control-plaintext" id="address"
                                            value="{{ $payment->system_trace_no }}">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="card-header border d-flex justify-content-between">
                    <h5 class="d-inline-block mb-0">اطلاعات مشتری</h5>
                </div>
                <div class="card-body p-4">
                    <div class="card-text">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <label for="address" class="col-sm-4 col-form-label">نام مشتری</label>
                                    <div class="col-sm-8">
                                        <input type="text" readonly class="form-control-plaintext" id="address"
                                            value="{{ $payment->customer->fullname() ?? '' }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <label for="address" class="col-sm-4 col-form-label">شماره تماس</label>
                                    <div class="col-sm-8">
                                        <input type="text" readonly class="form-control-plaintext" id="address"
                                            value="{{ $payment->customer->mobile ?? '' }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <label for="address" class="col-sm-4 col-form-label">آدرس ایمیل</label>
                                    <div class="col-sm-8">
                                        <input type="text" readonly class="form-control-plaintext" id="address"
                                            value="{{ $payment->customer->email ?? '' }}">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- /Invoice -->

        <!-- Invoice Actions -->
        <div class="col-xl-3 col-md-4 col-12">
            <div class="card">
                <div class="card-body">
                    <a class="btn btn-outline-secondary d-grid w-100 mb-3" href="{{ route('app-payment-list') }}">
                        بازگشت
                    </a>
                </div>
            </div>
        </div>
        <!-- /Invoice Actions -->
    </div>

    <!-- Offcanvas -->
    @include('_partials/_offcanvas/offcanvas-send-invoice')
    @include('_partials/_offcanvas/offcanvas-add-payment')
    <!-- /Offcanvas -->
@endsection
