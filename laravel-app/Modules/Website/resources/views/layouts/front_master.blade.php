@php
    $generalSettings = App\Models\Setting::where('key', 'websiteMetaDescriptions')
        ->orWhere('key', 'websiteMetaTags')
        ->orWhere('key', 'websiteTitle')
        ->orWhere('key', 'address')
        ->orWhere('key', 'phone1')
        ->orWhere('key', 'phone2')
        ->orWhere('key', 'phone3')
        ->orWhere('key', 'email')
        ->orWhere('key', 'telegram')
        ->orWhere('key', 'instagram')
        ->orWhere('key', 'eitaa')
        ->pluck('value', 'key')
        ->toArray();

    // convert websiteMetaTags to a tags string
    $jsonString = $generalSettings['websiteMetaTags'];
    $array = json_decode($jsonString, true);
    $values = array_map(function ($item) {
        return $item['value'];
    }, $array);
    $tagsString = implode(', ', $values);

    // check user's role
    $is_guest = Auth::guest();
@endphp

<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8" />
    <meta name="description" content="@yield('meta_description', config('app.name'))">
    <meta name="keywords" content="{{ $tagsString }}">
    <meta name="author" content="@yield('meta_author', config('app.name'))">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $generalSettings['websiteTitle'] }}</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/daisyui@4.6.1/dist/full.min.css" rel="stylesheet" type="text/css" /> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('assets/modules/website/css/style.css') }}" />

    @stack('head-scripts')
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="{{ asset('assets/plugins/jquery/jquery.js') }}"></script>
    <script src="{{ asset('assets/plugins/jquery-validation/jquery.validate.js') }}"></script>

</head>

<body class="pt-[92px] lg:pt-[140px]">

    @include('website::partials.header')

    {{-- Main --}}
    @yield('content')

    @include('website::partials.bottom_navigation')
    @include('website::partials.footer')

    {{-- AjaxLoader --}}
    <div id="ajax-loading">
        <div class="loading-bg">
            <div class="loading-svg">
                <img src="{{ asset('assets/modules/website/images/dna-loading.svg') }}">
            </div>
        </div>
    </div>
    @stack('body-scripts')
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="{{ asset('assets/modules/website/js/ajax-loader.js') }}?v=2"></script>
    <script src="{{ asset('assets/modules/website/js/main.js') }}"></script>
</body>

</html>
