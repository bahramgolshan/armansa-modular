 @extends('website::layouts.front_master')

 @section('content')
     @include('website::partials.hero')
     @include('website::partials.level_image_home')
     @include('website::partials.aboutus')
     @include('website::partials.statistics_home')
     @include('website::partials.orders_home')
     @include('website::partials.contact_information')
     @include('website::partials.gallery')
     @include('website::partials.printed_samples')
     @include('website::partials.questions')
 @endsection
