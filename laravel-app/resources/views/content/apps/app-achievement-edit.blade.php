@extends('layouts/layoutMaster')

@section('title', 'Edit - achievements')

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
    <form class="row" action="{{ route('app-achievement-update', ['id' => $achievement->id]) }}" method="POST">
        @csrf
        <!-- achievements Edit-->
        <div class="col-lg-9 col-12 mb-lg-0 mb-4">
            <div class="">
                <!-- Multi Column with Form Separator -->
                <div class="card mb-4">
                    <h5 class="card-header mb-2">فرم ثبت آمار</h5>
                    <div class="card-body">
                        <div class="row pt-3">
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-prefix">پیشوند</label>
                                <div class="col-sm-6">
                                    <input type="text" name="prefix" class="form-control" id="basic-default-prefix"
                                        placeholder="پیشوند" value="{{ $achievement->prefix }}" />
                                    <small class="text-danger">{{ $errors->first('prefix') }}</small>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-number">عدد</label>
                                <div class="col-sm-6">
                                    <input type="text" name="number" class="form-control" id="basic-default-number"
                                        placeholder="عدد" value="{{ $achievement->number }}" />
                                    <small class="text-danger">{{ $errors->first('number') }}</small>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-suffix">پسوند</label>
                                <div class="col-sm-6">
                                    <input type="text" name="suffix" class="form-control" id="basic-default-suffix"
                                        placeholder="پسوند" value="{{ $achievement->suffix }}" />
                                    <small class="text-danger">{{ $errors->first('suffix') }}</small>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-order">اولویت</label>
                                <div class="col-sm-6">
                                    <input type="number" name="order" class="form-control" id="basic-default-order"
                                        placeholder="اولویت" value="{{ $achievement->order }}" />
                                    <small class="text-danger">{{ $errors->first('order') }}</small>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="is_featured">ویژه</label>
                                <div class="col-sm-10 d-flex align-items-center flex-wrap pt-2">

                                    <div class="col-sm-9">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="is_featured"
                                                {{ $achievement->is_featured ? 'checked' : '' }} />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /achievements Add-->

        <!-- achievements Actions -->
        <div class="col-lg-3 col-12">
            <div class="card mb-4">
                <div class="card-body">
                    <button type="submit" class="btn btn-primary d-grid w-100 mb-3">ذخیره</button>
                    <a href="{{ route('app-achievement-list') }}" class="btn btn-outline-secondary d-grid w-100">لغو</a>
                </div>
            </div>
        </div>
        <!-- /achievements Actions -->
    </form>

@endsection
