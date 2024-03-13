@extends('front.layouts.front_master')

@section('content')
    <main class="bg-[#F5F5F5]">
        @include('front.partials.bread_crumb')
        @include('front.partials.details_blog_page')
        @include('front.partials.main_image_blog_page')
        @include('front.partials.main_blog_page')
        @include('front.partials.contact_information')
        @include('front.partials.questions')
    </main>
@endsection
