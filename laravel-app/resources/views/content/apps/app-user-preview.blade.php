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

    <div class="row">
        <!-- user -->
        <div class="col-xl-9 col-md-8 col-12 mb-md-0 mb-4">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between flex-xl-row flex-md-column flex-sm-row flex-column">
                        <div class="mb-xl-0 pb-3">
                            <div class="d-flex svg-illustration align-items-center gap-2 mb-2">
                                <h5>{{ $customer->fullName() }}</h5>
                            </div>
                            <p class="">{{ $customer->address }}</p>
                        </div>
                        <div>

                            <div class="mb-1">
                                <span>شماره تلفن:</span>
                                <span>{{ $customer->mobile }}</span>
                            </div>
                            <div>
                                <span>ایمیل:</span>
                                <span>{{ $customer->email }}</span>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="my-0" />
                <div class="card-body">
                    <div class="d-flex justify-content-between flex-wrap">
                        <div class="mt-1">
                            <h6 class="pb-2">سفارشات:</h6>
                            <!-- <p class="mb-1">Thomas shelby</p>
                                                                        <p class="mb-1">Shelby Company Limited</p>
                                                                        <p class="mb-1">Small Heath, B10 0HF, UK</p>
                                                                        <p class="mb-1">718-986-6062</p>
                                                                        <p class="mb-0">peakyFBlinders@gmail.com</p> -->
                        </div>
                        <!-- <div class="my-3">
                                                                        <h6 class="pb-2">Bill To:</h6>
                                                                        <table>
                                                                          <tbody>
                                                                            <tr>
                                                                              <td class="pe-3 fw-medium">Total Due:</td>
                                                                              <td>$12,110.55</td>
                                                                            </tr>
                                                                            <tr>
                                                                              <td class="pe-3 fw-medium">Bank name:</td>
                                                                              <td>American Bank</td>
                                                                            </tr>
                                                                            <tr>
                                                                              <td class="pe-3 fw-medium">Country:</td>
                                                                              <td>United States</td>
                                                                            </tr>
                                                                            <tr>
                                                                              <td class="pe-3 fw-medium">IBAN:</td>
                                                                              <td>ETD95476213874685</td>
                                                                            </tr>
                                                                            <tr>
                                                                              <td class="pe-3 fw-medium">SWIFT code:</td>
                                                                              <td>BR91905</td>
                                                                            </tr>
                                                                          </tbody>
                                                                        </table>
                                                                      </div> -->
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table m-0">
                        <thead class="table-light border-top">
                            <tr>
                                <th>شماره سفارش</th>
                                <th>تاریخ</th>
                                <th>وضعیت سفارش</th>
                                <th>تخفیف اضافی</th>
                                <th>قیمت اضافی</th>
                                <th>مالیات</th>
                                <th>مبلغ کل</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($invoices as $invoice)
                                <tr>
                                    <td><a
                                            href="{{ route('app-invoice-preview', ['id' => $invoice->id]) }}"><strong>{{ $invoice->id }}</strong></a>
                                    </td>
                                    <td>{{ verta($invoice->created_at)->format('Y/n/j') }}</td>

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

                {{-- <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <span class="fw-bold">Note:</span>
                            <span>It was a pleasure working with you and your team. We hope you will keep us in mind for
                                future freelance
                                projects. Thank You!</span>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
        <!-- /user -->

        <!-- user Actions -->
        <div class="col-xl-3 col-md-4 col-12 ">
            <div class="card">
                <div class="card-body">
                    <a class="btn btn-primary d-grid w-100 mb-3" href="{{ route('app-customer-list') }}">
                        <span class="d-flex align-items-center justify-content-center text-nowrap"><i
                                class="mdi mdi-send-outline scaleX-n1-rtl me-1"></i>بازگشت به لیست مشتریان</span>
                    </a>
                </div>
            </div>
        </div>
        <!-- /Invoice Actions -->
    </div>

@endsection
