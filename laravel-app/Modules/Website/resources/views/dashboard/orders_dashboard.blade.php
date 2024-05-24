 @extends('website::layouts.front_master')
 @section('title', '| سفارش های من')

 @section('content')
     @if (count($paidInvoices) > 0)
         @include('website::partials.orders_dashboard')
     @else
         @include('website::partials.empty_orders_dashboard')
     @endif
 @endsection
