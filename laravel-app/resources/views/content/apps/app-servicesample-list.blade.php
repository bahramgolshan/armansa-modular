@extends('layouts/layoutMaster')

@section('title', 'servicesample List')

@section('vendor-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/sweetalert2/sweetalert2.css') }}" />
@endsection

@section('vendor-script')
    <script src="{{ asset('assets/vendor/libs/moment/moment.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/sweetalert2/sweetalert2.js') }}"></script>
@endsection

@section('page-script')
    <script src="{{ asset('assets/js/extended-ui-sweetalert2.js') }}"></script>

    <script>
        function deleteItem(id) {
            const swal = Swal.mixin({
                customClass: {
                    confirmButton: "btn btn-danger",
                    cancelButton: "btn btn-secondary",
                },
                buttonsStyling: false,
            });

            swal.fire({
                title: "آیا مطمعن هستید؟",
                text: "پس از حذف امکان بازگشت وجود ندارد",
                icon: "warning",
                showConfirmButton: true,
                showCancelButton: true,
                confirmButtonText: "بله، حذف کن!",
                cancelButtonText: "خیر",
            }).then((result) => {
                if (result.isConfirmed) {
                    let route = "{!! route('app-servicesample-delete', ['id' => '-1']) !!}";
                    route = route.replace('-1', id)

                    $.ajax({
                        type: "POST",
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        url: route,
                        success: function(response) {
                            console.log('success');
                            if (response.status == 'success') {
                                swal.fire({
                                    title: "حذف شد!",
                                    text: "آیتم مورد نظر شما با موفقیت حذف شد.",
                                    icon: "success",
                                    showConfirmButton: false,
                                    showCancelButton: false,
                                    timer: 2000,
                                });

                                location.reload();
                            } else {
                                swal.fire({
                                    title: "خطا!",
                                    text: "درخواست شما با خطا روبرو شد!",
                                    icon: "error",
                                    showConfirmButton: false,
                                    showCancelButton: false,
                                    timer: 2000,
                                });

                                location.reload();
                            }
                        },
                        error: function(response) {
                            hideAjaxLoader()
                            console.log(response);
                        }
                    });
                }
            });

        }
    </script>
@endsection


@section('content')
    @include('components.msg-success')
    @include('components.msg-error')
    @include('components.msg-validation')

    <h4 class="fw-bold py-3 mb-4">
        <span class="text-muted fw-light">نمونه های چاپ شده /</span> لیست نمونه ها
    </h4>

    {{-- add button --}}
    <a href="/app/servicesample/add" class="btn btn-primary mb-3">
        <span class="tf-icons mdi mdi-plus-thick me-1"></span>افزودن
    </a>

    <!-- servicesample List Table -->
    <div class="card mb-5">
        <div class="card-datatable table-responsive text-nowrap">
            <table class="datatables-ajax table">
                <thead class="table-light">
                    <tr>
                        <th>اولویت</th>
                        <th>عنوان</th>
                        <th>توضیحات</th>
                        <th>سرویس</th>
                        <th>ویژه</th>
                        <th class="cell-fit">اقدامات</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($serviceSamples as $serviceSample)
                        <tr>
                            <td>{{ $serviceSample->order }}</td>
                            <td>{{ $serviceSample->title }}</td>
                            <td>{{ Str::limit($serviceSample->description, 20) }}</td>
                            <td>{{ __('app.serviceFullName.' . $serviceSample->service->code) }}</td>
                            <td>{{ $serviceSample->is_featured ? 'بله' : 'خیر' }}</td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item"
                                            href="{{ route('app-servicesample-preview', ['id' => $serviceSample->id]) }}"><i
                                                class="mdi mdi-eye-outline me-1"></i>مشاهده</a>
                                        <a class="dropdown-item"
                                            href="{{ route('app-servicesample-edit', ['id' => $serviceSample->id]) }}"><i
                                                class="mdi mdi-pencil-outline me-1"></i> ویرایش</a>
                                        <button class="dropdown-item text-danger"
                                            onclick="deleteItem({{ $serviceSample->id }})"><i
                                                class="mdi mdi-trash-can-outline me-1 text-danger"></i> حذف</button>
                                    </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>


@endsection
