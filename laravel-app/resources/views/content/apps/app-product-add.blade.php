@extends('layouts/layoutMaster')

@section('title', 'Add - Invoice')

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
        $('.calc-final-price').on('keyup change', function() {
            let discountType = $('#discount_type').val()
            let discount = $('#discount').val()
            let price = $('#price').val()
            let finalPrice = ''

            if (discount && discountType == 'fix') {
                finalPrice = price - discount
            } else if (discount && discountType == 'percent') {
                finalPrice = price - (price * (discount / 100))
            } else {
                finalPrice = price
            }

            $('#final-price').val(finalPrice)
        })
    </script>

@endsection

@section('content')
    @include('components.msg-success')
    @include('components.msg-error')
    @include('components.msg-validation')

    <form class="row" action="{{ route('app-product-store') }}" method="POST">
        @csrf
        <!-- product Add-->
        <div class="col-lg-9 col-12 mb-lg-0 mb-4">
            <div class="">
                <!-- Multi Column with Form Separator -->
                <div class="card mb-4">
                    <h5 class="card-header mb-2">فرم ایجاد محصول جدید</h5>
                    <div class="card-body">
                        <h6>1. نام سرویس</h6>
                        <div class="row g-4">
                            <div class="col-md-6">
                                <div class="form-floating form-floating-outline">
                                    <select type="text" id="service" name="service_id" class="form-control"
                                        placeholder="سرویس مورد نظر خود را وارد کنید">
                                        <option value=""></option>
                                        @foreach ($services as $item)
                                            <option value="{{ $item->id }}">
                                                {{ __('app.serviceFullName.' . $item->serviceCategory->name . '-' . $item->name) }}
                                            </option>
                                        @endforeach

                                    </select>
                                    <label for="size">سرویس</label>
                                    <small class="text-danger">{{ $errors->first('service_id') }}</small>
                                </div>
                            </div>
                        </div>
                        <hr class="my-4 mx-n4" />
                        <h6>2. مشخصات کلی</h6>
                        <div class="row g-4">
                            <div class="col-md-6">
                                <div class="form-floating form-floating-outline">
                                    <select type="text" id="size" name="size_id" class="form-control"
                                        placeholder="سایز مورد نظر خود را وارد کنید">
                                        <option value=""></option>
                                        @foreach ($digitalPrintData['sizes'] as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach

                                    </select>
                                    <label for="size">سایز</label>
                                    <small class="text-danger">{{ $errors->first('size_id') }}</small>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-floating form-floating-outline">
                                    <select type="text" id="paper" name="paper_id" class="form-control"
                                        placeholder="نوع کاغذ مورد نظر خود را وارد کنید">
                                        <option value=""></option>
                                        @foreach ($digitalPrintData['papers'] as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach

                                    </select>
                                    <label for="paper">نوع کاغذ</label>
                                    <small class="text-danger">{{ $errors->first('paper_id') }}</small>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-floating form-floating-outline">
                                    <select type="text" id="color" name="color_id" class="form-control"
                                        placeholder="رنگ چاپ مورد نظر خود را وارد کنید">
                                        <option value=""></option>
                                        @foreach ($digitalPrintData['colors'] as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach

                                    </select>
                                    <label for="color">رنگ چاپ</label>
                                    <small class="text-danger">{{ $errors->first('color_id') }}</small>
                                </div>
                            </div>

                        </div>
                        <hr class="my-4 mx-n4" />
                        <h6>3. مشخصات جلد و صحافی</h6>
                        <div class="row g-3">

                            <div class="col-md-6">
                                <div class="form-floating form-floating-outline">
                                    <select type="text" id="cover" name="cover_id" class="form-control"
                                        placeholder="جنس جلد مورد نظر خود را وارد کنید">
                                        <option value=""></option>
                                        @foreach ($digitalPrintData['covers'] as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach

                                    </select>
                                    <label for="cover">جنس جلد</label>
                                    <small class="text-danger">{{ $errors->first('cover_id') }}</small>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-floating form-floating-outline">
                                    <select type="text" id="binding" name="binding_id" class="form-control"
                                        placeholder="نوع صحافی مورد نظر خود را وارد کنید">
                                        <option value=""></option>
                                        @foreach ($digitalPrintData['bindings'] as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach

                                    </select>
                                    <label for="binding">نوع صحافی</label>
                                    <small class="text-danger">{{ $errors->first('binding_id') }}</small>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-floating form-floating-outline">
                                    <select type="text" id="cellophane" name="cellophane_id" class="form-control"
                                        placeholder="نوع سلفون مورد نظر خود را وارد کنید">
                                        <option value=""></option>
                                        @foreach ($digitalPrintData['cellophanes'] as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach

                                    </select>
                                    <label for="cellophane">نوع سلفون</label>
                                    <small class="text-danger">{{ $errors->first('cellophane_id') }}</small>
                                </div>
                            </div>

                        </div>
                        <hr class="my-4 mx-n4" />
                        <h6>4. جهت صحافی</h6>
                        <div class="row g-3">

                            <div class="col-md-6">
                                <div class="form-floating form-floating-outline">
                                    <select type="text" id="binding_direction" name="binding_direction_id"
                                        class="form-control" placeholder="زبان و جهت صحافی مورد نظر خود را وارد کنید">
                                        <option value=""></option>
                                        @foreach ($digitalPrintData['bindingDirections'] as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }}
                                            </option>
                                        @endforeach

                                    </select>
                                    <label for="cover">زبان و جهت صحافی</label>
                                    <small class="text-danger">{{ $errors->first('binding_direction_id') }}</small>
                                </div>
                            </div>

                        </div>
                        <hr class="my-4 mx-n4" />
                        <h6>5. قیمت گذاری</h6>
                        <div class="row g-4">

                            <div class="col-md-6">
                                <div class="form-floating form-floating-outline">
                                    <input type="number" min="0" step="any" id="discount" name="discount"
                                        class="calc-final-price form-control"
                                        placeholder="تخفیف مورد نظر خود را وارد کنید" />
                                    <label for="size">تخفیف</label>
                                    <small class="text-danger">{{ $errors->first('discount') }}</small>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating form-floating-outline">
                                    <select type="text" id="discount_type" name="discount_type"
                                        class="calc-final-price form-control"
                                        placeholder="نوع تخفیف مورد نظر خود را وارد کنید">
                                        @foreach ($discountTypes as $item)
                                            <option value="{{ $item }}">{{ __('app.discountType.' . $item) }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <label for="size">نوع تخفیف</label>
                                    <small class="text-danger">{{ $errors->first('discount_type') }}</small>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating form-floating-outline">
                                    <input type="number" min="0" step="any" id="price" name="price"
                                        class="calc-final-price form-control"
                                        placeholder="قیمت مورد نظر خود را وارد کنید" />
                                    <label for="size">قیمت (تومان)</label>
                                    <small class="text-danger">{{ $errors->first('price') }}</small>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating form-floating-outline">
                                    <input type="text" id="final-price" name="final-price" value="0"
                                        class="form-control" placeholder="قیمت نهایی محصول" disabled />
                                    <label for="size">قیمت نهایی (تومان)</label>
                                </div>
                            </div>

                        </div>
                        <hr class="my-4 mx-n4" />
                        <h6>6. وضعیت محصول</h6>
                        <div class="row g-4">

                            <div class="col-md-6">
                                <div class="form-floating form-floating-outline">
                                    <select type="text" id="status" name="status"
                                        class="calc-final-price form-control"
                                        placeholder="وضعیت مورد نظر خود را وارد کنید">
                                        @foreach ($status as $item)
                                            <option value="{{ $item }}">
                                                {{ __('app.serviceDetailStatus.' . $item) }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <label for="size">وضعیت</label>
                                    <small class="text-danger">{{ $errors->first('status') }}</small>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- /product Add-->

        <!-- product Actions -->
        <div class="col-lg-3 col-12">
            <div class="card mb-4">
                <div class="card-body">

                    <button type="submit" class="btn btn-primary d-grid w-100 mb-3">ذخیره</button>
                    <a href="{{ route('app-product-list') }}" class="btn btn-outline-secondary d-grid w-100">لغو</a>
                </div>
            </div>
        </div>
        <!-- /product Actions -->
    </form>

@endsection
