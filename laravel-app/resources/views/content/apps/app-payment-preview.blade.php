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

    <div class="row invoice-preview">
        <!-- Invoice -->
        <div class="col-xl-9 col-md-8 col-12 mb-md-0 mb-4">
            <div class="card invoice-preview-card">
                <div class="card-body">
                    <div class="px-4 d-flex justify-content-between flex-xl-row flex-md-column flex-sm-row flex-column">
                        <div class="mb-xl-0 pb-3">
                            <div class="d-flex svg-illustration align-items-center gap-2 mb-4">

                                <span class="h4 mb-0 app-brand-text fw-bold">فاکتور {{ $payment->id }}</span>
                            </div>
                            <p class="mb-1">نام مشتری</p>
                            <p class="mb-1">تاریخ</p>

                            <span>آدرس:</span>
                            <span>{{ $payment->customer->address }}</span>
                        </div>
                        <div class="mt-4">

                            <div class="mb-1">
                                <span>شماره تلفن:</span>
                                <span>{{ $payment->customer->mobile }} </span>
                            </div>
                            <div class="mb-1">
                                <span>آدرس ایمیل:</span>
                                <span>{{ $payment->customer->email }} </span>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="my-0" />
                <div class="card-body">
                    <div class="d-flex justify-content-between flex-wrap px-4">

                        <div class="my-3">
                            <h6 class="pb-2"> مشخصات فاکتور</h6>
                            <table>
                                <tbody>
                                    <tr>
                                        <td class="pe-3 fw-medium">شماره فاکتور :</td>
                                        <td>{{ $payment->id }}</td>
                                    </tr>
                                    <tr>
                                        <td class="pe-3 fw-medium">وضعیت :</td>
                                        <td>{{ __('app.paymentStatus.' . $payment->status) }}</td>
                                    </tr>
                                    <tr>
                                        <td class="pe-3 fw-medium">نتیجه تاییدیه: </td>
                                        <td>{{ $payment->verification_result }}</td>
                                    </tr>
                                    <tr>
                                        <td class="pe-3 fw-medium">کد پیگیری: </td>
                                        <td>{{ $payment->reterival_ref_no }}</td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                        <div class="my-5">
                            <!-- <h6 class="pb-2"> کلی فاکتور:</h6> -->
                            <table>
                                <tbody>
                                    <tr>
                                        <td class="pe-3 fw-medium"> شماره رهگیری سیستم:</td>
                                        <td>{{ $payment->system_trace_no }}</td>
                                    </tr>
                                    <tr>
                                        <td class="pe-3 fw-medium"> تاریخ تراکنش:</td>
                                        <td>{{ verta($payment->transaction_date)->format('Y-m-d') }}</td>
                                    </tr>
                                    <tr>
                                        <td class="pe-3 fw-medium">نتیجه تراکنش :</td>
                                        <td>{{ $payment->transaction_result }}</td>
                                    </tr>
                                    <tr>
                                        <td class="pe-3 fw-medium"> قیمت :</td>
                                        <td>{{ $payment->amount }}</td>
                                    </tr>
                                    <!-- <tr>
                                                                                  <td class="pe-3 fw-medium">تیراژ :</td>
                                                                                  <td>9</td>
                                                                                </tr> -->
                                </tbody>
                            </table>
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
                    {{-- <button class="btn btn-primary d-grid w-100 mb-3" data-bs-toggle="offcanvas"
                        data-bs-target="#sendInvoiceOffcanvas">
                        <span class="d-flex align-items-center justify-content-center text-nowrap"><i
                                class="mdi mdi-send-outline scaleX-n1-rtl me-1"></i>پرینت فاکتور</span>
                    </button> --}}

                    <a class="btn btn-outline-secondary d-grid w-100 mb-3" href="{{ route('app-payment-list') }}">
                        برگشت به لیست فاکتور ها
                    </a>

                    {{-- <button class="btn btn-success d-grid w-100" data-bs-toggle="offcanvas"
                        data-bs-target="#addPaymentOffcanvas">
                        <span class="d-flex align-items-center justify-content-center text-nowrap"><i
                                class="mdi mdi-currency-usd me-1"></i>فاکتور پرداخت مشتری</span>
                    </button> --}}
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
