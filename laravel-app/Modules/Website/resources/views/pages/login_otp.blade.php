 @extends('website::layouts.front_master')

 @section('content')
     @include('website::partials.header')

     @include('website::partials.main_login_otp')

     @include('website::partials.bottom_navigation')
     @include('website::partials.footer')
 @endsection
