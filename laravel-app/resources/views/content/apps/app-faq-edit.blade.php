@extends('layouts/layoutMaster')

@section('title', 'Edit - faqs')

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
    <form class="row" action="{{ route('app-faq-update', ['id' => $faq->id]) }}" method="POST">
        @csrf
        <!-- faqs Edit-->
        <div class="col-lg-9 col-12 mb-lg-0 mb-4">
            <div class="">
                <!-- Multi Column with Form Separator -->
                <div class="card mb-4">
                    <h5 class="card-header mb-2">فرم ویرایش سوالات متداول</h5>
                    <div class="card-body">
                        <div class="row pt-3">
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-question">سوال</label>
                                <div class="col-sm-6">
                                    <input type="text" name="question" class="form-control" id="basic-default-question"
                                        value="{{ $faq->question }}" placeholder="عنوان سوال" />
                                    <small class="text-danger">{{ $errors->first('question') }}</small>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-answer">جواب</label>
                                <div class="col-sm-6">
                                    <textarea id="basic-default-answer" class="form-control" placeholder="پاسخ" aria-label="پاسخ"
                                        aria-describedby="basic-icon-default-answer" name="answer">{{ $faq->answer }}</textarea>
                                    <small class="text-danger">{{ $errors->first('answer') }}</small>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-answer">اولویت</label>
                                <div class="col-sm-6">
                                    <input type="text" name="order" class="form-control" id="basic-default-order"
                                        value="{{ $faq->order }}" placeholder="اولویت" />
                                    <small class="text-danger">{{ $errors->first('order') }}</small>
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
                    <a href="{{ route('app-faq-list') }}" class="btn btn-outline-secondary d-grid w-100">لغو</a>
                </div>
            </div>
        </div>
        <!-- /faqs Actions -->
    </form>

@endsection
