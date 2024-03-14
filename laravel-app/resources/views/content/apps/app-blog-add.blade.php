@extends('layouts/layoutMaster')

@section('title', 'Add - Blog')

@section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/tagify/tagify.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/flatpickr/flatpickr.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/quill/typography.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/quill/katex.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/quill/editor.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/dropzone/dropzone.css')}}" />
@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/flatpickr/flatpickr.js')}}"></script>
<script src="{{asset('assets/vendor/libs/cleavejs/cleave.js')}}"></script>
<script src="{{asset('assets/vendor/libs/cleavejs/cleave-phone.js')}}"></script>
<script src="{{asset('assets/vendor/libs/jquery-repeater/jquery-repeater.js')}}"></script>
<script src="{{asset('assets/vendor/libs/quill/katex.js')}}"></script>
<script src="{{asset('assets/vendor/libs/quill/quill.js')}}"></script>
<script src="{{asset('assets/vendor/libs/tagify/tagify.js')}}"></script>
<script src="{{asset('assets/vendor/libs/dropzone/dropzone.js')}}"></script>
@endsection

@section('page-script')
<script src="{{asset('assets/js/forms-editors.js')}}"></script>
<script src="{{asset('assets/js/forms-tagify.js')}}"></script>
<script src="{{asset('assets/js/forms-file-upload.js')}}"></script>
@endsection

{{-- @section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/tagify/tagify.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/quill/typography.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/quill/katex.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/quill/editor.css')}}" />
@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/dropzone/dropzone.js')}}"></script>
<script src="{{asset('assets/vendor/libs/quill/katex.js')}}"></script>
<script src="{{asset('assets/vendor/libs/quill/quill.js')}}"></script>
@endsection

@section('page-script')
<script src="{{asset('assets/js/forms-file-upload.js')}}"></script>
@endsection --}}

@section('content')
<form class="row">
  <!-- Blog Add-->
  <div class="col-12 mb-lg-0 mb-4">
    <div class="">

      <!-- Multi Column with Form Separator -->
<div class="card mb-4">
  <h5 class="card-header mb-2">فرم ثبت اطلاعات برچسب</h5>
  <div class="card-body">

    <div class="row pt-3">
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-default-name">عنوان</label>
            <div class="col-sm-6">
              <input type="text" name="name" class="form-control" id="basic-default-name" placeholder="عنوان دسته بندی بلاگ" />
            </div>
          </div>
    </div>

                  <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-default-message">محتوا</label>
            <div class="col-sm-10">
              <textarea id="basic-default-message" class="form-control" placeholder="محتوا بلاگ" aria-label="محتوا بلاگ" aria-describedby="basic-icon-default-message2" name="content"></textarea>
            </div>
          </div>

              <div class="row pt-3">
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-default-name">کلید واژه</label>
          <div class="col-md-10 mb-4">

              <input id="TagifyBasic" class="form-control" name="meta_keyword" value="Tag1, Tag2, Tag3" />
          </div>

          </div>
    </div>

                      <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-default-message">توضیحات متا</label>
            <div class="col-sm-10">
              <textarea id="basic-default-message" class="form-control" placeholder="توضیحات متا بلاگ" aria-label="توضیحات متا بلاگ" aria-describedby="basic-icon-default-message2" name="meta_description"></textarea>
            </div>
          </div>

    <div class="row pt-3">
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-default-name">تصویر</label>
            <div class="col-sm-10">
        <div action="/upload" class="dropzone needsclick" id="dropzone-basic">
          <div class="dz-message needsclick">
            فایل ها را در اینجا رها کنید یا برای انتخاب فایل کلیک کنید
          </div>
          <div class="fallback">
            <input name="media_id" type="file" />
          </div>
        </div>
            </div>
          </div>
    </div>

        <div class="row pt-3">
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-default-name">دسته بندی</label>
            <div class="col-sm-4">

                    <select class="select2 form-select" data-allow-clear="true" name="blog_category_id">
              <option value="">انتخاب کنید</option>
              <option value="Australia">Australia</option>
            </select>
            </div>
          </div>
    </div>


              <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-default-message">خلاصه</label>
            <div class="col-sm-10">
              <textarea id="basic-default-message" class="form-control" placeholder="خلاصه بلاگ" aria-label="خلاصه بلاگ" aria-describedby="basic-icon-default-message2" name="summary"></textarea>
            </div>
          </div>

          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-default-message">وضعیت</label>
            <div class="col-sm-10 d-flex align-items-center flex-wrap pt-2">

                                <div class="col-sm-9">
                    <div class="form-check mb-2">
                      <input name="status" class="form-check-input" type="radio" value="" id="collapsible-addressType-home" checked="" />
                      <label class="form-check-label" for="collapsible-addressType-home">فعال</label>
                    </div>
                    <div class="form-check">
                      <input name="status" class="form-check-input" type="radio" value="" id="collapsible-addressType-office" />
                      <label class="form-check-label" for="collapsible-addressType-office">غیر فعال</label>
                    </div>
                  </div>
            </div>
          </div>

          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-default-message">کامنت</label>
            <div class="col-sm-10 d-flex align-items-center flex-wrap pt-2">

            <div class="col-sm-9">
                    <div class="form-check mb-2">
                      <input name="allow_comments" class="form-check-input" type="radio" value="" id="allow_comments-active" checked="" />
                      <label class="form-check-label" for="allow_comments-active">دارد</label>
                    </div>
                    <div class="form-check">
                      <input name="allow_comments" class="form-check-input" type="radio" value="" id="allow_comments-inactive" />
                      <label class="form-check-label" for="allow_comments-inactive">ندارد</label>
                    </div>
                  </div>
            </div>
          </div>

          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-default-message">ویژه</label>
            <div class="col-sm-10 d-flex align-items-center flex-wrap pt-2">

            <div class="col-sm-9">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="is_featured" value="" id="defaultCheck3" checked />
          </div>
            </div>
            </div>
          </div>

  </div>
</div>





    </div>
  </div>
  <!-- /Blog Add-->


              <!-- Full Editor -->
  <div class="col-12 mb-4">
    <div class="card">
      <h5 class="card-header">ویرایشگر بلاگ</h5>
      <div class="card-body">
        <div id="full-editor">
          <h6>Quill Rich Text Editor</h6>
          <p> Cupcake ipsum dolor sit amet. Halvah cheesecake chocolate bar gummi bears cupcake. Pie macaroon bear claw. Soufflé I love candy canes I love cotton candy I love. </p>
        </div>
      </div>
    </div>
  </div>
  <!-- /Full Editor -->

  <!-- Blog Actions -->
  <div class="col-12">
    <div class="card">
      <div class="card-body d-md-flex gap-4">
        <div class="col-md-3">
                  <button type="submit" class="btn btn-primary w-100 mb-3 mb-lg-0">ذخیره</button>
        </div>
<div class="col-md-3">
          <a href="/app/blog/list" class="btn btn-outline-secondary w-100">لغو</a>
</div>

      </div>
    </div>
  </div>
  <!-- /Blog Actions -->
</form>


@endsection
