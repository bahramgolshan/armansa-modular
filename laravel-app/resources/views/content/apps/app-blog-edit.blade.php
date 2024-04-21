@extends('layouts/layoutMaster')

@section('title', 'Edit - Blog')

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
                    <h5 class="card-header mb-2">فرم ثبت پست جدید</h5>
                    <div class="card-body">

                        <div class="row pt-3">
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="blog_category_id">دسته بندی</label>
                                <div class="col-sm-6">
                                    <select class="select2 form-select" data-allow-clear="true" name="blog_category_id">
                                        <option value="">انتخاب کنید</option>
                                        @foreach ($blogCategories as $item)
                                            <option value="{{ $item->id }}"
                                                {{ $item->id == $blogPost->blog_category_id ? 'selected' : '' }}>
                                                {{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                    <small class="text-danger">{{ $errors->first('blog_category_id') }}</small>
                                </div>
                            </div>
                        </div>

                        <div class="row pt-3">
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="title">عنوان</label>
                                <div class="col-sm-6">
                                    <input type="text" name="title" class="form-control" id="title"
                                        placeholder="عنوان مطلب" value="{{ $blogPost->title }}" />
                                    <small class="text-danger">{{ $errors->first('title') }}</small>
                                </div>
                            </div>
                        </div>

                        <div class="row pt-3">
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="slug">slug</label>
                                <div class="col-sm-6">
                                    <input type="text" name="slug" class="form-control" id="slug"
                                        placeholder="example-post-slug" onfocusout="slugify(this)"
                                        value="{{ $blogPost->slug }}" />
                                    <small class="text-muted">لطفا تنها از حروف، اعداد انگلیسی و خط فاصله (-) استفاده
                                        کنید.</small>
                                    <small class="text-danger d-block">{{ $errors->first('slug') }}</small>
                                </div>
                            </div>
                        </div>

                        <div class="row pt-3">
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="meta_keyword">کلید واژه</label>
                                <div class="col-sm-6 mb-4">
                                    <input id="TagifyBasic" class="form-control" name="meta_keyword"
                                        placeholder="tag1, tag2, tag3" value="{{ $blogPost->meta_keyword }}" />
                                    <small class="text-muted">
                                        لطفا با استفاده از کاما (،) کلیدواژه ها را تفکیک کنید.</small>
                                    <small class="text-danger">{{ $errors->first('meta_keyword') }}</small>
                                </div>

                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="meta_description">توضیحات متا</label>
                            <div class="col-sm-10">
                                <textarea id="meta_description" class="form-control" placeholder="توضیحات متا" aria-label="توضیحات متا"
                                    aria-describedby="basic-icon-default-message2" name="meta_description">{{ $blogPost->meta_description }}</textarea>
                                <small class="text-danger">{{ $errors->first('meta_description') }}</small>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="status">وضعیت</label>
                            <div class="col-sm-10 d-flex align-items-center flex-wrap pt-2">

                                <div class="col-sm-9">
                                    <div class="form-check mb-2">
                                        <input name="status" class="form-check-input" type="radio" value="publish"
                                            id="blog-post-publish" {{ $blogPost->status == 'publish' ? 'checked' : '' }} />
                                        <label class="form-check-label" for="blog-post-publish">انتشار</label>
                                    </div>
                                    <div class="form-check">
                                        <input name="status" class="form-check-input" type="radio" value="draft"
                                            id="blog-post-draft" {{ $blogPost->status == 'draft' ? 'checked' : '' }} />
                                        <label class="form-check-label" for="blog-post-draft">پیش
                                            نویس</label>
                                    </div>
                                    <small class="text-danger">{{ $errors->first('status') }}</small>
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
                                            {{ $blogPost->allow_comments == true ? 'checked' : '' }} />
                                        <label class="form-check-label" for="allow_comments-active">دارد</label>
                                    </div>
                                    <div class="form-check">
                                        <input name="allow_comments" class="form-check-input" type="radio"
                                            value="false" id="allow_comments-inactive"
                                            {{ $blogPost->allow_comments == false ? 'checked' : '' }} />
                                        <label class="form-check-label" for="allow_comments-inactive">ندارد</label>
                                    </div>
                                    <small class="text-danger">{{ $errors->first('allow_comments') }}</small>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-message">ویژه</label>
                            <div class="col-sm-10 d-flex align-items-center flex-wrap pt-2">

                                <div class="col-sm-9">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="is_featured"
                                            id="defaultCheck3" value="true"
                                            {{ $blogPost->is_featured == true ? 'checked' : '' }} />
                                        <small class="text-danger">{{ $errors->first('is_featured') }}</small>
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
                        {!! $blogPost->content !!}
                    </div>
                    <small class="text-danger">{{ $errors->first('content') }}</small>
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
                                aria-describedby="basic-icon-default-message2" name="summary">{{ $blogPost->summary }}</textarea>
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
                        <div class="fallback">
                            <input name="file" type="file" />
                        </div>
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
                    <div class="col-md-3">
                        <button type="submit" class="btn btn-primary w-100 mb-3 mb-lg-0">ذخیره</button>
                    </div>
                    <div class="col-md-3">
                        <a href="{{ route('app-blog-list') }}" class="btn btn-outline-secondary w-100">لغو</a>
                    </div>

                </div>
            </div>
        </div>
        <!-- /Blog Actions -->
    </form>


@endsection
