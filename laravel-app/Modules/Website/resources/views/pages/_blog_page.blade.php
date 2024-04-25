 @extends('website::layouts.front_master')

 @section('content')
     <main class="bg-[#F5F5F5]">
         @include('website::partials.bread_crumb')
         @include('website::partials.details_blog_page')
         @include('website::partials.main_image_blog_page')
         @include('website::partials.main_blog_page')
         @include('website::partials.contact_information')
         @include('website::partials.questions')
     </main>
 @endsection
