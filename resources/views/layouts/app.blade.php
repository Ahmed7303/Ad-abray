<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="description" content="At-abraý ">
    <link href="images/favicon/favicon.png" rel="icon">
    <title>At-abraý - {{ __('strings.logistic_solutions') }} </title>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Roboto:400,700%7cWork+Sans:400,600,700&amp;display=swap">
    <link href="{{ asset('css/libraries.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/yanmap.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/tableOrders.css') }}" />
    
    <link rel="stylesheet" href="{{ asset('css/jquery.fancybox.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" />
</head>

<body>

    <body>
        {{-- <div class="preloader">
              <div class="loading"><span></span></div>
            </div><!-- /.preloader --> --}}
        <div class="wrapper">

            @include('include.header')

            {{-- @include('include.messages') --}}
            @yield('content')

            @include('include.footer')

            <button id="scrollTopBtn">
                <i class="fa fa-long-arrow-up"></i>
            </button>

            <div class="module__search-container">
                <i class="fa fa-times close-search"></i>
                <form class="module__search-form" action="{{ route('orders.find') }}" method="get">
                    <input type="text" class="search__input" name="search"
                        placeholder="{{ __('strings.track_trace_p2') }}">
                    <button class="module__search-btn"><i class="fa fa-search"></i></button>
                </form>
            </div><!-- /.module-search-container -->

        </div><!-- /.wrapper -->

        <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
        <script src="{{ asset('js/lightbox.js') }}"></script>
        <script src="{{ asset('js/slick.min.js') }}"></script>
        <script src="{{ asset('js/slider.js') }}"></script>
        <script src="{{ asset('js/modal-close.js') }}"></script>
        <script src="{{ asset('js/simpleTab.js') }}"></script>
        <script src="{{ asset('js/customSelect.js') }}"></script>
        <script src="{{ asset('js/jquery.fancybox.min.js') }}"></script>

        <script src="{{ asset('js/plugins.js') }}"></script>
        <script src="{{ asset('js/main.js') }}"></script>
        <script src="{{ asset('js/index.js') }}"></script>
        <script src="{{ asset('js/wel_tabs.js') }}"></script>


    </body>

</html>
