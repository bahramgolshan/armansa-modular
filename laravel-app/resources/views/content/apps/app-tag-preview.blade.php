@extends('layouts/layoutMaster')

@section('title', 'Preview - Tag')

@section('vendor-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/flatpickr/flatpickr.css') }}" />
@endsection

@section('vendor-script')
    <script src="{{ asset('assets/vendor/libs/flatpickr/flatpickr.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/cleavejs/cleave.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/cleavejs/cleave-phone.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/jquery-repeater/jquery-repeater.js') }}"></script>
@endsection

@section('content')
    @include('components.msg-success')
    @include('components.msg-error')
    @include('components.msg-validation')

    <div class="row">
        <!-- tag Preview-->
        <div class="col-lg-9 col-12 mb-lg-0 mb-4">
            <div class="">
                <!-- Multi Column with Form Separator -->
                <div class="card mb-4">
                    <h5 class="card-header mb-2">اطلاعات برچسب</h5>
                    <div class="card-body">
                        <div class="row pt-3">
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">عنوان</label>
                                <div class="col-sm-6">
                                    <input type="text" name="name" class="form-control" id="basic-default-name"
                                        value="{{ $tag->name }}" placeholder="عنوان دسته بندی بلاگ" disabled />
                                    <small class="text-danger">{{ $errors->first('name') }}</small>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-slug">url</label>
                                <div class="col-sm-6">
                                    <input type="text" name="slug" class="form-control" id="basic-default-slug"
                                        value="{{ $tag->slug }}" placeholder="url دسته بندی بلاگ" disabled />
                                    <small class="text-danger">{{ $errors->first('slug') }}</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /tag Add-->

        <!-- tag Actions -->
        <div class="col-lg-3 col-12">
            <div class="card mb-4">
                <div class="card-body">
                    <a href="{{ route('app-tag-list') }}" class="btn btn-outline-secondary d-grid w-100">بازگشت</a>
                </div>
            </div>
        </div>
        <!-- /tag Actions -->
    </div>

@endsection
