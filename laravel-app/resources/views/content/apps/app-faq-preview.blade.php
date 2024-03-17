@extends('layouts/layoutMaster')

@section('title', 'Preview - faqs')

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
    <div class="row">
        <!-- faqs Preview-->
        <div class="col-lg-9 col-12 mb-lg-0 mb-4">
            <div class="">
                <!-- Multi Column with Form Separator -->
                <div class="card mb-4">
                    <h5 class="card-header mb-2">اطلاعات سوالات متداول</h5>
                    <div class="card-body">
                        <div class="row pt-3">
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-question">سوال</label>
                                <div class="col-sm-6">
                                    <input type="text" name="question" class="form-control" id="basic-default-question"
                                        value="{{ $faq->question }}" placeholder="عنوان سوال" disabled />
                                    <small class="text-danger">{{ $errors->first('question') }}</small>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-answer">جواب</label>
                                <div class="col-sm-6">
                                    <textarea id="basic-default-answer" class="form-control" placeholder="پاسخ" aria-label="پاسخ"
                                        aria-describedby="basic-icon-default-answer" name="answer" disabled>{{ $faq->answer }}</textarea>
                                    <small class="text-danger">{{ $errors->first('answer') }}</small>
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
                    <a href="{{ route('app-faq-list') }}" class="btn btn-outline-secondary d-grid w-100">بازگشت</a>
                </div>
            </div>
        </div>
        <!-- /faqs Actions -->
    </div>

@endsection
