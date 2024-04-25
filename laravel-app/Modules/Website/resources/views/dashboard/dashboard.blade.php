 @extends('website::layouts.front_master')

 @section('content')
     {{-- @include('website::partials.bread_crumb') --}}
     @include('website::partials.profile_dashboard')
     @include('website::partials.cart_dashboard')
     @include('website::partials.orders_dashboard')
     @include('website::partials.unsuccessful_dashboard')
     @include('website::partials.successful_dashboard')
     @include('website::partials.empty_cart_dashboard')
 @endsection
