@extends('layouts/layoutMaster')

@section('title', 'payment List')

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


@section('content')
    @include('components.msg-success')
    @include('components.msg-error')
    @include('components.msg-validation')

    <h4 class="fw-bold py-3 mb-4">
        <span class="text-muted fw-light">فاکتور ها /</span> لیست فاکتور ها
    </h4>

    <!-- payment List Table -->
    <div class="card mb-5">
        <div class="card-datatable table-responsive text-nowrap">
            <table class="datatables-ajax payment-list-table table">
                <thead class="table-light">
                    <tr>
                        <th>#</th>
                        <th>شماره فاکتور</th>
                        <th>تاریخ</th>
                        <th>وضعیت فاکتور</th>
                        <th> شماره پیگیری فاکتور</th>
                        <th>مبلغ</th>
                        <th class="cell-fit">اقدامات</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($payments as $payment)
                        <tr>
                            <td>
                                <strong>{{ ($users->currentPage() - 1) * $users->perPage() + $loop->iteration }}</strong>
                            </td>
                            <td><a
                                    href="{{ route('app-payment-preview', ['id' => $payment->id]) }}"><strong>{{ $payment->id }}</strong></a>
                            </td>
                            <td>{{ verta($payment->created_at)->format('Y-m-d') }}</td>
                            <td><span
                                    class="badge bg-label-{{ $paymentsStatusColors[$payment->status] }} me-1">{{ __('app.paymentStatus.' . $payment->status) }}</span>
                            </td>
                            <td><span class="">{{ $payment->reterival_ref_no }}</span></td>
                            <td><span class="">{{ $payment->amount }}</span></td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item"
                                            href="{{ route('app-payment-preview', ['id' => $payment->id]) }}"><i
                                                class="mdi mdi-eye-outline me-1"></i>مشاهده</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $payments->links() }}
        </div>
    </div>


@endsection
