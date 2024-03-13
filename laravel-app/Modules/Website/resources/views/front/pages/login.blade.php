@extends('front.layouts.front_master')

@section('content')
    @include('front.partials.header')

    @include('front.partials.main_login')
  
    @include('front.partials.bottom_navigation')
    @include('front.partials.footer')
@endsection