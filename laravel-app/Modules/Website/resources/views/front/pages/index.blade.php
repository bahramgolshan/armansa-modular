@extends('front.layouts.front_master')

@section('content')
    @include('front.partials.hero')
    @include('front.partials.level_image_home')
    @include('front.partials.aboutus')
    @include('front.partials.statistics_home')
    @include('front.partials.orders_home')
    @include('front.partials.contact_information')
    @include('front.partials.gallery')
    @include('front.partials.printed_samples')
    @include('front.partials.questions')
@endsection
