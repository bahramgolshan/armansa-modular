@extends('front.layouts.front_master')

@section('content')
    @include('front.partials.bread_crumb')
    @include('front.partials.contacts_dashboard')
    @include('front.partials.cart_dashboard')
    @include('front.partials.orders_dashboard')
    @include('front.partials.unsuccessful_dashboard')
    @include('front.partials.successful_dashboard')
    @include('front.partials.empty_cart_dashboard')
@endsection
