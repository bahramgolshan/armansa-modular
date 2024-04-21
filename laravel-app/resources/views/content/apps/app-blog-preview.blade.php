@extends('layouts/layoutMaster')

@section('title', 'Preview - Blog')

@section('vendor-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/tagify/tagify.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/flatpickr/flatpickr.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/quill/typography.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/quill/katex.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/quill/editor.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/dropzone/dropzone.css') }}" />
@endsection

@section('vendor-script')
    <script src="{{ asset('assets/vendor/libs/flatpickr/flatpickr.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/cleavejs/cleave.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/cleavejs/cleave-phone.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/jquery-repeater/jquery-repeater.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/quill/katex.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/quill/quill.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/tagify/tagify.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/dropzone/dropzone.js') }}"></script>
@endsection

@section('page-script')
    <script src="{{ asset('assets/js/forms-editors.js') }}"></script>
    <script src="{{ asset('assets/js/forms-tagify.js') }}"></script>
    <script src="{{ asset('assets/js/forms-file-upload.js') }}"></script>

    <script>
        $(document).ready(function() {
            $("#blog-post-form").on("submit", function() {
                // append editor value
                var hvalue = $('.ql-editor').html();
                $(this).append(`<textarea name='content' style='display:none'>${hvalue}</textarea>`);

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

    <form action="{{ route('app-blog-update', ['id' => $blogPost->id]) }}" enctype="multipart/form-data" class="row"
        id="blog-post-form" method="POST">
        @csrf
        <!-- Blog Add-->
        <div class="col-12 mb-lg-0 mb-4">
            <div class="">

                <!-- Multi Column with Form Separator -->
                <div class="card mb-4">
                    <h5 class="card-header mb-2">پیش نمایش پست #{{ $blogPost->id }}</h5>
                    <div class="card-body">

                        <div class="row pt-3">
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">دسته بندی</label>
                                <div class="col-sm-6">
                                    <input class=" form-select" data-allow-clear="true" name="blog_category_id"
                                        value="{{ $blogPost->blog_category_id }}" disabled>
                                    <small class="text-danger">{{ $errors->first('blog_category_id') }}</small>
                                </div>
                            </div>
                        </div>

                        <div class="row pt-3">
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-title">عنوان</label>
                                <div class="col-sm-6">
                                    <input type="text" name="title" class="form-control" id="basic-default-title"
                                        value="{{ $blogPost->title }}" placeholder="عنوان مطلب" disabled />
                                    <small class="text-danger">{{ $errors->first('title') }}</small>
                                </div>
                            </div>
                        </div>

                        <div class="row pt-3">
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-title">url</label>
                                <div class="col-sm-6">
                                    <input type="text" name="slug" class="form-control" id="basic-default-slug"
                                        value="{{ $blogPost->slug }}" placeholder="url" disabled />
                                    <small class="text-danger">{{ $errors->first('slug') }}</small>
                                </div>
                            </div>
                        </div>

                        <div class="row pt-3">
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">کلید واژه</label>
                                <div class="col-sm-6 mb-4">
                                    <input id="TagifyBasic" class="form-control" name="meta_keyword"
                                        value="{{ $blogPost->meta_keyword }}" disabled />
                                    <small class="text-danger">{{ $errors->first('meta_keyword') }}</small>
                                </div>

                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-message">توضیحات متا</label>
                            <div class="col-sm-10">
                                <textarea id="basic-default-message" class="form-control" placeholder="توضیحات متا" aria-label="توضیحات متا"
                                    aria-describedby="basic-icon-default-message2" name="meta_description" disabled>{{ $blogPost->meta_description }}"</textarea>
                                <small class="text-danger">{{ $errors->first('meta_description') }}</small>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-message">وضعیت</label>
                            <div class="col-sm-10 d-flex align-items-center flex-wrap pt-2">

                                <div class="col-sm-9">
                                    <div class="form-check mb-2">
                                        <input name="status" class="form-check-input" type="radio" value="publish"
                                            id="collapsible-addressType-home"
                                            {{ $blogPost->status == 'publish' ? 'checked' : '' }} disabled />
                                        <label class="form-check-label" for="collapsible-addressType-home">فعال</label>
                                    </div>
                                    <div class="form-check">
                                        <input name="status" class="form-check-input" type="radio" value="draft"
                                            id="collapsible-addressType-office"
                                            {{ $blogPost->status == 'draft' ? 'checked' : '' }} disabled />
                                        <label class="form-check-label" for="collapsible-addressType-office">غیر
                                            فعال</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-message">کامنت</label>
                            <div class="col-sm-10 d-flex align-items-center flex-wrap pt-2">

                                <div class="col-sm-9">
                                    <div class="form-check mb-2">
                                        <input name="allow_comments" class="form-check-input" type="radio"
                                            value="true" id="allow_comments-active"
                                            {{ $blogPost->allow_comments == true ? 'checked' : '' }} disabled />
                                        <label class="form-check-label" for="allow_comments-active">دارد</label>
                                    </div>
                                    <div class="form-check">
                                        <input name="allow_comments" class="form-check-input" type="radio"
                                            value="false" id="allow_comments-inactive"
                                            {{ $blogPost->allow_comments == false ? 'checked' : '' }} disabled />
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
                                        <input class="form-check-input" type="checkbox" name="is_featured"
                                            id="defaultCheck3" {{ $blogPost->is_featured == true ? 'checked' : '' }}
                                            disabled />
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
                    <div id="full-editor" style="position: relative">
                        {!! $blogPost->content !!}
                    </div>
                    <div class="overlay"
                        style="position: absolute; top: 0; right: 0; width: 100%; height: 100%; background: rgba(255, 0, 0, 0)">
                    </div>
                    <small class="text-danger">{{ $errors->first('service_id') }}</small>
                </div>
            </div>
        </div>
        <!-- /Full Editor -->

        <!-- summary -->
        <div class="col-12 mb-4">
            <div class="card">
                <h5 class="card-header">خلاصه مطلب</h5>
                <div class="card-body">
                    <div class="row mb-3">
                        {{-- <label class="col-sm-2 col-form-label" for="basic-default-message">خلاصه</label> --}}
                        <div class="col-sm-12">
                            <textarea id="basic-default-message" class="form-control" placeholder="خلاصه بلاگ" aria-label="خلاصه بلاگ"
                                aria-describedby="basic-icon-default-message2" name="summary" disabled>{{ $blogPost->summary }}</textarea>
                            <small class="text-danger">{{ $errors->first('summary') }}</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /summary -->

        <!-- featured image -->
        <div class="col-12 mb-4">
            <div class="card">
                <h5 class="card-header">تصویر اصلی</h5>
                <div class="card-body">

                    {{-- <label class="col-sm-2 col-form-label" for="basic-default-name">تصویر</label> --}}
                    <div class="col-sm-12">
                        <img class="w-50 h-auto"
                            src="{{ $blogPost->media_id ? asset(get_file_upload_path('image-blog-posts', $blogPost->media->id) . $blogPost->media->file_name) : '' }}"
                            alt="">
                        {{-- <div class="fallback">
                            <input name="file" type="file" />
                        </div> --}}
                        <small class="text-danger">{{ $errors->first('file') }}</small>
                    </div>
                </div>
            </div>
        </div>
        <!-- /featured image -->

        <!-- Blog Actions -->
        <div class="col-12">
            <div class="card">
                <div class="card-body d-md-flex gap-4">
                    {{-- <div class="col-md-3">
                        <button type="submit" class="btn btn-primary w-100 mb-3 mb-lg-0">ذخیره</button>
                    </div> --}}
                    <div class="col-md-3">
                        <a href="{{ route('app-blog-list') }}" class="btn btn-outline-secondary w-100">بازگشت</a>
                    </div>

                </div>
            </div>
        </div>
        <!-- /Blog Actions -->
    </form>


@endsection
