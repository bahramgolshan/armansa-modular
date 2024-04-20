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
    <script>
        $('button.edit-status').click(function() {
            $.ajax({
                type: "POST",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: "{!! route('app-invoice-edit-status', ['id' => $invoice->id]) !!}",
                data: {
                    status: $(this).data("value")
                },
                success: function(response) {
                    location.reload()
                },
                error: function(response) {
                    hideAjaxLoader()

                    location.reload()
                }
            });
        });
    </script>
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
                <div class="card-body">
                    <div class="px-4 d-flex justify-content-between flex-xl-row flex-md-column flex-sm-row flex-column">
                        <div class="mb-xl-0 pb-3">
                            <div class="d-flex svg-illustration align-items-center gap-2 mb-4">

                                <span class="h4 mb-0 app-brand-text fw-bold">سفارش {{ $invoice->id }}</span>
                            </div>
                            <p class="mb-1">نام مشتری: <span>{{ $invoice->customer->fullName() ?? '--' }}</span></p>
                            <p class="mb-1">تاریخ: <span>{{ verta($invoice->created_at)->format('Y-m-d') ?? '--' }}</p>
                            <p class="mb-1">شماره تلفن:<span>{{ $invoice->customer->mobile ?? '--' }}</span></p>
                            <p class="mb-1">آدرس:<span>{{ $invoice->customer->adderss ?? '--' }}</span></p>


                        </div>
                        <div>
                            <h5>شماره پیگیری: <span>{{ $invoice->id }}</span></h5>
                            <!-- <div class="mb-1">
                                            <span>شماره تلفن:</span>
                                            <span>{{ $invoice->customer->mobile ?? '--' }}</span>
                                        </div> -->
                            <div>
                                <span>قیمت :</span>
                                <span>{{ $invoiceDetail ? $invoiceDetail->serviceDetail->price : '' }}</span>
                                <span>تومان</span>
                            </div>
                            <div>
                                <span>تخفیف :</span>
                                <span>{{ $invoiceDetail ? $invoiceDetail->serviceDetail->discount : '' }}</span>
                                <span>{{ $invoiceDetail && $invoiceDetail->serviceDetail->discount_type == 'percent' ? '%' : 'تومان' }}</span>
                            </div>
                            <div>
                                <span>مبلغ اضافه :</span>
                                <span>{{ $invoice->additional_price }}</span>
                                <span>تومان</span>
                            </div>
                            <div>
                                <span>تخفیف اضافه :</span>
                                <span>{{ $invoice->additional_discount }}</span>
                                <span>تومان</span>
                            </div>
                            <div>
                                <span> مالیات :</span>
                                <span>{{ $invoice->tax }}</span>
                                <span>تومان</span>
                            </div>
                            <div>
                                <span>قیمت کل :</span>
                                <span>{{ $invoice->final_price }}</span>
                                <span>تومان</span>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="my-0" />
                <div class="card-body">
                    <div class="d-flex justify-content-between flex-wrap w-100">

                        <div class="my-3">
                            <h6 class="pb-2">مشخصات جلد و صحافی:</h6>
                            <table>
                                <tbody>
                                    <tr>
                                        <td class="pe-3 fw-medium">جنس جلد:</td>
                                        <td>{{ $invoiceDetail ? $invoiceDetail->serviceDetail->cover->name : '' }}</td>
                                    </tr>
                                    <tr>
                                        <td class="pe-3 fw-medium">نوع صحافی:</td>
                                        <td>{{ $invoiceDetail ? $invoiceDetail->serviceDetail->binding->name : '' }}</td>
                                    </tr>
                                    <tr>
                                        <td class="pe-3 fw-medium">نوع سلفون:</td>
                                        <td>{{ $invoiceDetail ? $invoiceDetail->serviceDetail->cellophane->name : '' }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="pe-3 fw-medium">جهت صحافی :</td>
                                        <td>{{ $invoiceDetail && $invoiceDetail->binding_direction ? __('app.bindingDirection.' . $invoiceDetail->binding_direction) : '' }}
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                        <div class="my-3">
                            <h6 class="pb-2">مشخصات کلی سفارش:</h6>
                            <table>
                                <tbody>
                                    <tr>
                                        <td class="pe-3 fw-medium">سایز:</td>
                                        <td>{{ $invoiceDetail ? $invoiceDetail->serviceDetail->size->name : '' }}</td>
                                    </tr>
                                    <tr>
                                        <td class="pe-3 fw-medium">نوع کاغذ:</td>
                                        <td>{{ $invoiceDetail ? $invoiceDetail->serviceDetail->paper->name : '' }}</td>
                                    </tr>
                                    <tr>
                                        <td class="pe-3 fw-medium">رنگ چاپ:</td>
                                        <td>{{ $invoiceDetail ? $invoiceDetail->serviceDetail->color->name : '' }}</td>
                                    </tr>
                                    <tr>
                                        <td class="pe-3 fw-medium">تعداد صفحات:</td>
                                        <td>{{ $invoiceDetail ? $invoiceDetail->number_of_pages : '' }}</td>
                                    </tr>
                                    <tr>
                                        <td class="pe-3 fw-medium">تیراژ :</td>
                                        <td>{{ $invoiceDetail ? $invoiceDetail->circulation : '' }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table m-0">
                        <thead class="table-light border-top">
                            <tr>
                                <th>شماره پیگیری</th>
                                <th>شماره پیگیری پرداخت</th>
                                <th>وضعیت</th>
                                <th>مبلغ</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($payments as $payment)
                                <tr>
                                    <td class="text-nowrap">{{ $payment->id }}</td>
                                    <td class="text-nowrap">{{ $payment->reterival_ref_no }}</td>
                                    <td><span
                                            class="badge bg-label-{{ $paymentStatusColors[$payment->status] }} me-1">{{ __('app.paymentStatus.' . $payment->status) }}</span>
                                    </td>
                                    <td>{{ $payment->amount }} <span>تومان</span></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <!-- <table class="table m-0">
                                    <tbody>

                                        <tr>
                                            <td colspan="3" class="align-top px-4 py-5">
                                                <p class="mb-2">
                                                    <span class="me-1 fw-semibold">
                                                        {{-- شرکت آرمانسا --}}
                                                    </span>
                                                </p>
                                            </td>
                                            <td class="text-end px-4 py-5">
                                                <p class="mb-2">قیمت:</p>
                                                <p class="mb-2">تخفیف:</p>
                                                <p class="mb-2">مبلغ اضافه:</p>
                                                <p class="mb-2">تخفیف اضافه:</p>
                                                <p class="mb-2">مالیات:</p>
                                                <p class="mb-0">قیمت کل:</p>
                                            </td>
                                            <td class="px-4 py-5">
                                                <p class="fw-semibold mb-2 text-end">
                                                    {{ $invoiceDetail ? $invoiceDetail->serviceDetail->price : '' }}
                                                    <span>تومان</span>
                                                </p>
                                                <p class="fw-semibold mb-2 text-end">
                                                    {{ $invoiceDetail ? $invoiceDetail->serviceDetail->discount : '' }}
                                                    <span>{{ $invoiceDetail && $invoiceDetail->serviceDetail->discount_type == 'percent' ? '%' : 'تومان' }}</span>
                                                </p>
                                                <p class="fw-semibold mb-2 text-end">{{ $invoice->additional_price }}
                                                    <span>تومان</span>
                                                </p>
                                                <p class="fw-semibold mb-2 text-end">{{ $invoice->additional_discount }}
                                                    <span>تومان</span>
                                                </p>
                                                <p class="fw-semibold mb-2 text-end">{{ $invoice->tax }} <span>تومان</span></p>
                                                <p class="fw-semibold mb-0 text-end">{{ $invoice->final_price }} <span>تومان</span></p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table> -->
                </div>
            </div>
        </div>
        <!-- /Invoice -->

        <!-- Invoice Actions -->
        <div class="col-xl-3 col-md-4 col-12 invoice-actions">
            <div class="card">
                <div class="card-body">
                    <button class="edit-status btn btn-primary d-grid w-100 mb-3" data-value="delivered">
                        <span class="d-flex align-items-center justify-content-center text-nowrap"><i
                                class="mdi mdi-send-outline scaleX-n1-rtl me-1"></i>تحویل سفارش</span>
                    </button>
                    <button class="edit-status btn btn-outline-secondary d-grid w-100 mb-3" data-value="processing">
                        تایید سفارش
                    </button>
                    <button class="edit-status btn btn-outline-secondary d-grid w-100 mb-3" data-value="rejected">
                        رد کردن سفارش
                    </button>
                </div>
            </div>
        </div>
        <!-- /Invoice Actions -->
    </div>
@endsection
