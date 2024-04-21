@extends('layouts/layoutMaster')

@section('title', 'Add - Tag')

@section('vendor-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/flatpickr/flatpickr.css') }}" />
@endsection

@section('vendor-script')
    <script src="{{ asset('assets/vendor/libs/flatpickr/flatpickr.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/cleavejs/cleave.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/cleavejs/cleave-phone.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/jquery-repeater/jquery-repeater.js') }}"></script>
@endsection

@section('page-script')
    <script>
        function slugify(object) {
            const slug = object.value
                .toLowerCase()
                .trim()
                .replace(/[^\w\s-]/g, '')
                .replace(/[\s_-]+/g, '-')
                .replace(/^-+|-+$/g, '');
            $(object).val(slug)
        }
    </script>
@endsection


@section('content')
    @include('components.msg-success')
    @include('components.msg-error')
    @include('components.msg-validation')

    <form class="row" action="{{ route('app-tag-store') }}" method="POST">
        @csrf
        <!-- tag Add-->
        <div class="col-lg-9 col-12 mb-lg-0 mb-4">
            <div class="">
                <!-- Multi Column with Form Separator -->
                <div class="card mb-4">
                    <h5 class="card-header mb-2">فرم ثبت اطلاعات برچسب</h5>
                    <div class="card-body">
                        <div class="row pt-3">
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="name">عنوان</label>
                                <div class="col-sm-6">
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="عنوان دسته بندی بلاگ" value="{{ old('name') }}" />
                                    <small class="text-danger">{{ $errors->first('name') }}</small>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="slug">url</label>
                                <div class="col-sm-6">
                                    <input type="text" name="slug" class="form-control" id="slug"
                                        placeholder="example-post-slug" value="{{ old('slug') }}"
                                        onfocusout="slugify(this)" />
                                    <small class="text-muted">لطفا تنها از حروف، اعداد انگلیسی و خط فاصله (-) استفاده
                                        کنید.</small>
                                    <small class="text-danger d-block">{{ $errors->first('slug') }}</small>
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
                    <button type="submit" class="btn btn-primary d-grid w-100 mb-3">ذخیره</button>
                    <a href="{{ route('app-tag-list') }}" class="btn btn-outline-secondary d-grid w-100">لغو</a>
                </div>
            </div>
        </div>
        <!-- /tag Actions -->
    </form>

@endsection
