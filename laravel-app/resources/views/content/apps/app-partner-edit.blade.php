@extends('layouts/layoutMaster')

@section('title', 'Edit - faqs')

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
            $("#partner-form").on("submit", function() {
                let isFeatured = $('input[name="is_featured"]').is(":checked");
                $(('input[name="is_featured"]')).val(isFeatured)
            });
        });
    </script>
@endsection

@section('content')
    @include('components.msg-success')
    @include('components.msg-error')
    @include('components.msg-validation')

    <form action="{{ route('app-partner-update', ['id' => $partner->id]) }}" enctype="multipart/form-data" class="row"
        id="partner-form" method="POST">
        @csrf
        <!-- faqs Edit-->
        <div class="col-lg-9 col-12 mb-lg-0 mb-4">
            <div class="">
                <!-- Multi Column with Form Separator -->
                <div class="card mb-4">
                    <h5 class="card-header mb-2">اطلاعات همکار</h5>
                    <div class="card-body">
                        <div class="row pt-3">
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">عنوان</label>
                                <div class="col-sm-6">
                                    <input type="text" name="name" class="form-control" id="basic-default-name"
                                        value="{{ $partner->name }}" />
                                </div>
                            </div>


                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">تصویر</label>
                                <div class="col-sm-6">
                                    <span type="text" class="" id="basic-default-name">
                                        <img class="w-50 h-auto"
                                            src="{{ $partner->media_id ? asset(get_file_upload_path('image-partners', $partner->media->id) . $partner->media->file_name) : '' }}"
                                            alt="">
                                        <div class="fallback mt-3">
                                            <input name="file" type="file" />
                                        </div>
                                    </span>
                                </div>
                            </div>


                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-message">ویژه</label>
                                <div class="col-sm-10 d-flex align-items-center flex-wrap pt-2">

                                    <div class="col-sm-9">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="is_featured"
                                                value="" id="is_featured"
                                                {{ $partner->is_featured ? 'checked' : '' }} />
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
                    <a href="{{ route('app-partner-list') }}" class="btn btn-outline-secondary d-grid w-100">لغو</a>
                </div>
            </div>
        </div>
        <!-- /faqs Actions -->
    </form>

@endsection
