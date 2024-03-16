@extends('layouts/layoutMaster')

@section('title', 'Edit - Invoice')

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
        $(document).ready(function() {
            $('.calc-final-price').trigger('keyup')
        });

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

    <div class="row">
        <!-- product preview-->
        <div class="col-lg-9 col-12 mb-lg-0 mb-4">
            <div class="">
                <!-- Multi Column with Form Separator -->
                <div class="card mb-4">
                    <h5 class="card-header mb-2">پیش نمایش محصول #<span>{{ $serviceDetail->id }}</span></h5>
                    <div class="card-body">
                        <h6>1. نام سرویس</h6>
                        <div class="row g-4">
                            <div class="col-md-6">
                                <div class="form-floating form-floating-outline">
                                    <input type="text" id="service" name="service_id"
                                        value="{{ $serviceDetail->service->name }}" disabled class="form-control"
                                        placeholder="سرویس مورد نظر خود را وارد کنید" />
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
                                    <input type="text" id="size" name="size_id"
                                        value="{{ $serviceDetail->size->name }}" disabled class="form-control"
                                        placeholder="سایز مورد نظر خود را وارد کنید" />
                                    <label for="size">سایز</label>
                                    <small class="text-danger">{{ $errors->first('size_id') }}</small>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-floating form-floating-outline">
                                    <input type="text" id="paper" name="paper_id"
                                        value="{{ $serviceDetail->paper->name }}" disabled class="form-control"
                                        placeholder="نوع کاغذ مورد نظر خود را وارد کنید" />
                                    <label for="paper">نوع کاغذ</label>
                                    <small class="text-danger">{{ $errors->first('paper_id') }}</small>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-floating form-floating-outline">
                                    <input type="text" id="color" name="color_id"
                                        value="{{ $serviceDetail->color->name }}" disabled class="form-control"
                                        placeholder="رنگ چاپ مورد نظر خود را وارد کنید" />
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
                                    <input type="text" id="cover" name="cover_id"
                                        value="{{ $serviceDetail->cover->name }}" disabled class="form-control"
                                        placeholder="جنس جلد مورد نظر خود را وارد کنید" />
                                    <label for="cover">جنس جلد</label>
                                    <small class="text-danger">{{ $errors->first('cover_id') }}</small>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-floating form-floating-outline">
                                    <input type="text" id="binding" name="binding_id"
                                        value="{{ $serviceDetail->binding->name }}" disabled class="form-control"
                                        placeholder="نوع صحافی مورد نظر خود را وارد کنید" />
                                    <label for="binding">نوع صحافی</label>
                                    <small class="text-danger">{{ $errors->first('binding_id') }}</small>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-floating form-floating-outline">
                                    <input type="text" id="cellophane" name="cellophane_id"
                                        value="{{ $serviceDetail->cellophane->name }}" disabled class="form-control"
                                        placeholder="نوع سلفون مورد نظر خود را وارد کنید" />
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
                                    <input type="text" id="binding_direction" name="binding_direction_id"
                                        value="{{ $serviceDetail->bindingDirection->name }}" disabled class="form-control"
                                        placeholder="زبان و جهت صحافی مورد نظر خود را وارد کنید" />
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
                                        value="{{ $serviceDetail->discout }}" disabled
                                        value="{{ $serviceDetail->discount }}" class="calc-final-price form-control"
                                        placeholder="تخفیف مورد نظر خود را وارد کنید" />
                                    <label for="size">تخفیف</label>
                                    <small class="text-danger">{{ $errors->first('discount') }}</small>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating form-floating-outline">
                                    <input type="text" id="discount_type" name="discount_type"
                                        value="{{ __('app.discountType.' . $serviceDetail->discount_type) }}" disabled
                                        class="calc-final-price form-control"
                                        placeholder="نوع تخفیف مورد نظر خود را وارد کنید" />
                                    <label for="size">نوع تخفیف</label>
                                    <small class="text-danger">{{ $errors->first('discount_type') }}</small>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating form-floating-outline">
                                    <input type="number" min="0" step="any" id="price"
                                        name="price"value="{{ $serviceDetail->price }}" disabled
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
                                    <input type="text" id="status" name="status"
                                        value="{{ __('app.serviceDetailStatus.' . $serviceDetail->status) }}" disabled
                                        class="calc-final-price form-control"
                                        placeholder="وضعیت مورد نظر خود را وارد کنید" />
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
                    <a href="{{ route('app-product-list') }}" class="btn btn-outline-secondary d-grid w-100">بازگشت</a>
                </div>
            </div>
        </div>
        <!-- /product Actions -->
    </div>

@endsection
