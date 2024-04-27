 @extends('website::layouts.front_master')

 @section('content')
     @if (count($awaitingPaymentInvoices) > 0)
         @include('website::partials.cart_dashboard')
     @else
         @include('website::partials.empty_cart_dashboard')
     @endif
 @endsection
