@extends('layouts/layoutMaster')

@section('title', 'Product List')

@section('vendor-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/sweetalert2/sweetalert2.css') }}" />
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
    <script src="{{ asset('assets/vendor/libs/sweetalert2/sweetalert2.js') }}"></script>
@endsection

@section('page-script')
    <script src="{{ asset('assets/js/extended-ui-sweetalert2.js') }}"></script>

    <script>
        function resetFilters() {
            console.log('reseting');
        }

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
                    let route = "{!! route('app-product-delete', ['id' => '-1']) !!}";
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
        <span class="text-muted fw-light">محصولات /</span> لیست محصول ها
    </h4>

    <div class="card mb-3 p-3">
        <form id="product-list-filter" class="row mb-2" action="{{ route('app-product-list') }}" method="GET">
            @csrf
            <div class="row">
                <div class="col-md-2 my-2">
                    <label for="service" class="form-label">نام سرویس</label>
                    <select type="text" id="service" name="service_id" class="form-control"
                        placeholder="سرویس مورد نظر خود را وارد کنید">
                        <option value=""></option>
                        @foreach ($digitalPrintData['services'] as $item)
                            <option value="{{ $item->id }}"
                                @isset($query['service_id'])
                    {{ $item->id == $query['service_id'] ? 'selected' : '' }}
                  @endisset>
                                {{ __('app.service.' . $item->name) }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="col-md-2 my-2">
                    <label for="size" class="form-label">سایز</label>
                    <select type="text" id="size" name="size_id" class="form-control"
                        placeholder="سایز مورد نظر خود را وارد کنید">
                        <option value=""></option>
                        @foreach ($digitalPrintData['sizes'] as $item)
                            <option value="{{ $item->id }}"
                                @isset($query['size_id'])
                    {{ $item->id == $query['size_id'] ? 'selected' : '' }}
                  @endisset>
                                {{ $item->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-md-2 my-2">
                    <label for="paper" class="form-label">نوع کاغذ</label>
                    <select type="text" id="paper" name="paper_id" class="form-control"
                        placeholder="نوع کاغذ مورد نظر خود را وارد کنید">
                        <option value=""></option>
                        @foreach ($digitalPrintData['papers'] as $item)
                            <option value="{{ $item->id }}"
                                @isset($query['paper_id'])
                    {{ $item->id == $query['paper_id'] ? 'selected' : '' }}
                  @endisset>
                                {{ $item->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-md-2 my-2">
                    <label for="color" class="form-label">رنگ چاپ</label>
                    <select type="text" id="color" name="color_id" class="form-control"
                        placeholder="رنگ چاپ مورد نظر خود را وارد کنید">
                        <option value=""></option>
                        @foreach ($digitalPrintData['colors'] as $item)
                            <option value="{{ $item->id }}"
                                @isset($query['color_id'])
                    {{ $item->id == $query['color_id'] ? 'selected' : '' }}
                  @endisset>
                                {{ $item->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-md-2 my-2">
                    <label for="cover" class="form-label">جنس جلد</label>
                    <select type="text" id="cover" name="cover_id" class="form-control"
                        placeholder="جنس جلد مورد نظر خود را وارد کنید">
                        <option value=""></option>
                        @foreach ($digitalPrintData['covers'] as $item)
                            <option value="{{ $item->id }}"
                                @isset($query['cover_id'])
                    {{ $item->id == $query['cover_id'] ? 'selected' : '' }}
                  @endisset>
                                {{ $item->name }}</option>
                        @endforeach
                    </select>
                </div>


                <div class="col-md-2 my-2">
                    <label for="binding" class="form-label">نوع صحافی</label>
                    <select type="text" id="binding" name="binding_id" class="form-control"
                        placeholder="نوع صحافی مورد نظر خود را وارد کنید">
                        <option value=""></option>
                        @foreach ($digitalPrintData['bindings'] as $item)
                            <option value="{{ $item->id }}"
                                @isset($query['binding_id'])
                    {{ $item->id == $query['binding_id'] ? 'selected' : '' }}
                  @endisset>
                                {{ $item->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2 my-2">
                    <label for="cellophane" class="form-label">نوع سلفون</label>
                    <select type="text" id="cellophane" name="cellophane_id" class="form-control"
                        placeholder="نوع سلفون مورد نظر خود را وارد کنید">
                        <option value=""></option>
                        @foreach ($digitalPrintData['cellophanes'] as $item)
                            <option value="{{ $item->id }}"
                                @isset($query['cellophane_id'])
                    {{ $item->id == $query['cellophane_id'] ? 'selected' : '' }}
                  @endisset>
                                {{ $item->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-md-2 my-2">
                    <label for="binding_direction" class="form-label">جهت صحافی</label>
                    <select type="text" id="binding_direction" name="binding_direction_id" class="form-control"
                        placeholder="زبان و جهت صحافی مورد نظر خود را وارد کنید">
                        <option value=""></option>
                        @foreach ($digitalPrintData['bindingDirections'] as $item)
                            <option value="{{ $item->id }}"
                                @isset($query['binding_direction_id'])
                    {{ $item->id == $query['binding_direction_id'] ? 'selected' : '' }}
                  @endisset>
                                {{ $item->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="col-md-2 my-2">
                    <label for="status" class="form-label">وضعیت</label>
                    <select type="text" id="status" name="status" class="form-control"
                        placeholder="زبان و جهت صحافی مورد نظر خود را وارد کنید">
                        <option value=""></option>
                        @foreach ($serviceDetailStatus as $item)
                            <option value="{{ $item }}"
                                @isset($query['status'])
                            {{ $item == $query['status'] ? 'selected' : '' }}
                          @endisset>
                                {{ __('app.serviceDetailStatus.' . $item) }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="col-md-2 my-2 align-self-end">
                    <button type="submit" class="btn btn-primary w-100">فیلتر</button>
                </div>
                <div class="col-md-2 my-2 align-self-end">
                    <a class="btn btn-outline-primary w-100" href="{{ route('app-product-list') }}">بازنشانی</a>
                </div>
            </div>
        </form>
    </div>

    {{-- add button --}}
    <a href="/app/product/add" class="btn btn-primary mb-3">
        <span class="tf-icons mdi mdi-plus-thick me-1"></span>افزودن
    </a>



    <!-- product List Table -->
    <div class="card mb-5">
        <div class="card-datatable table-responsive text-nowrap">
            <table class="datatables-ajax  table">
                <thead class="table-light">
                    <tr>
                        <th>#</th>
                        <th>سرویس</th>
                        <th>سایز</th>
                        <th>رنگ</th>
                        <th>نوع کاغذ</th>
                        <th>نوع صحافی</th>
                        <th>نوع سلفون</th>
                        <th>جنس جلد</th>
                        <th>وضعیت</th>
                        <th class="cell-fit">اقدامات</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($serviceDetails as $serviceDetail)
                        <tr>
                            <td>
                                <strong>{{ ($serviceDetails->currentPage() - 1) * $serviceDetails->perPage() + $loop->iteration }}</strong>
                            </td>
                            <td>{{ __('app.serviceCategory.' . $serviceDetail->service->serviceCategory->name) .
                                ' ' .
                                __('app.service.' . $serviceDetail->service->name) }}
                            </td>
                            <td>{{ $serviceDetail->size->name }}</td>
                            <td><span class="">{{ $serviceDetail->color->name }}</span></td>
                            <td><span class="">{{ $serviceDetail->paper->name }}</span></td>
                            <td><span class="">{{ $serviceDetail->binding->name }}</span></td>
                            <td><span class="">{{ $serviceDetail->cellophane->name }}</span></td>
                            <td><span class="">{{ $serviceDetail->cover->name }}</span></td>
                            <td><span class="">{{ __('app.serviceDetailStatus.' . $serviceDetail->status) }}</span>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item"
                                            href="{{ route('app-product-preview', ['id' => $serviceDetail->id]) }}"><i
                                                class="mdi mdi-eye-outline me-1"></i>مشاهده</a>
                                        <a class="dropdown-item"
                                            href="{{ route('app-product-edit', ['id' => $serviceDetail->id]) }}"><i
                                                class="mdi mdi-pencil-outline me-1"></i> ویرایش</a>
                                        <button class="dropdown-item text-danger"
                                            onclick="deleteItem({{ $serviceDetail->id }})"><i
                                                class="mdi mdi-trash-can-outline me-1 text-danger"></i> حذف</button>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $serviceDetails->links() }}
        </div>
    </div>


@endsection
