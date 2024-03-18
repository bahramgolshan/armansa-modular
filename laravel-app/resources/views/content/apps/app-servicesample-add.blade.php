@extends('layouts/layoutMaster')

@section('title', 'Add - ServiceSample')

@section('vendor-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/flatpickr/flatpickr.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/dropzone/dropzone.css') }}" />
@endsection

@section('vendor-script')
    <script src="{{ asset('assets/vendor/libs/flatpickr/flatpickr.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/cleavejs/cleave.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/cleavejs/cleave-phone.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/jquery-repeater/jquery-repeater.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/dropzone/dropzone.js') }}"></script>
@endsection


@section('page-script')
    <script src="{{ asset('assets/js/forms-file-upload.js') }}"></script>

    <script>
        $(document).ready(function() {
            $("#servicesample-form").on("submit", function() {
                let isFeatured = $('input[name="is_featured"]').is(":checked");
                $(('input[name="is_featured"]')).val(isFeatured)
            });
        });
    </script>
@endsection

@section('content')
    <form action="{{ route('app-servicesample-store') }}" enctype="multipart/form-data" class="row" id="servicesample-form"
        method="POST">
        @csrf
        <!-- ss Add-->
        <div class="col-lg-9 col-12 mb-lg-0 mb-4">
            <div class="">
                <!-- Multi Column with Form Separator -->
                <div class="card mb-4">
                    <h5 class="card-header mb-2">فرم ثبت نمونه های چاپ شده </h5>
                    <div class="card-body">
                        <div class="row pt-3">
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-title">عنوان</label>
                                <div class="col-sm-6">
                                    <input type="text" name="title" class="form-control" id="basic-default-title"
                                        placeholder="عنوان" />
                                    <small class="text-danger">{{ $errors->first('title') }}</small>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-description">توضیحات</label>
                                <div class="col-sm-6">
                                    <input type="text" name="description" class="form-control"
                                        id="basic-default-description" placeholder="توضیحات" />
                                    <small class="text-danger">{{ $errors->first('description') }}</small>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-order">ترتیب</label>
                                <div class="col-sm-6">
                                    <input type="text" name="order" class="form-control" id="basic-default-order"
                                        placeholder="ترتیب" />
                                    <small class="text-danger">{{ $errors->first('order') }}</small>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-service">سرویس</label>
                                <div class="col-sm-6">
                                    <select id="basic-default-service" name="service_id" autocomplete="service-name"
                                        class="form-select">
                                        <option>انتخاب کنید</option>
                                        @foreach ($services as $item)
                                            <option value="{{ $item->id }}">
                                                {{ __('app.serviceFullName.' . $item->serviceCategory->name . '-' . $item->name) }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <small class="text-danger">{{ $errors->first('service_id') }}</small>
                                </div>
                            </div>

                            <div class="row pt-3">
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="basic-default-file">تصویر</label>
                                    <div class="col-sm-10">
                                        <div class="fallback">
                                            <input name="file" type="file" />
                                        </div>
                                        <small class="text-danger">{{ $errors->first('file') }}</small>
                                    </div>
                                </div>
                            </div>



                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-message">ویژه</label>
                                <div class="col-sm-10 d-flex align-items-center flex-wrap pt-2">

                                    <div class="col-sm-9">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="is_featured"
                                                id="defaultCheck3" checked />
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /faqs Add-->

        <!-- faqs Actions -->
        <div class="col-lg-3 col-12">
            <div class="card mb-4">
                <div class="card-body">
                    <button type="submit" class="btn btn-primary d-grid w-100 mb-3">ذخیره</button>
                    <a href="{{ route('app-servicesample-list') }}" class="btn btn-outline-secondary d-grid w-100">لغو</a>
                </div>
            </div>
        </div>
        <!-- /faqs Actions -->
    </form>

@endsection
