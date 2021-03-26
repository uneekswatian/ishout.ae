<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" href="{{ asset('favicon.png') }}" type="image/x-icon">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title')</title>

        <!-- Bootstrap core CSS -->
        <link href="{{ asset('/assets/css/bootstrap.css') }}" rel="stylesheet">

        <!-- Custom fonts for this template -->
        <link href="{{ asset('/assets/css/all.css') }}" rel="stylesheet" type="text/css">

        <!-- Slick slider CSS -->
        <link href="{{ asset('/assets/css/slick.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('/assets/css/slick-theme.css') }}" rel="stylesheet" type="text/css">

        <!-- Plugin CSS -->
        <link href="{{ asset('/assets/css/magnific-popup.css') }}" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="{{ asset('/assets/css/style.css') }}" rel="stylesheet">

    </head>

    <body id="page-top">

        @include ('layouts.website.partials.menu')
        @yield ('content')
        @if (Request::route()->uri != '/')
            @include ('layouts.website.partials.animated-pages-footer')
        @endif

        <script type="text/javascript">
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        </script>
        @yield("js")
    </body>

</html>