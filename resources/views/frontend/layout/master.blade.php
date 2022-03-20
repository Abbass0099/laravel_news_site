<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>News - @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('frontend/css/breaking-news-ticker.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
     <link rel="stylesheet" href="{{ asset('css/bootstrap4.3.1-rtl.css') }}">
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" />
		 <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <header>

        @include('frontend.layout.partials.header')

        @include('frontend.layout.partials.mainmenu')

    </header>

    @yield('content')

    <footer>

        @include('frontend.layout.partials.footer')

    </footer>

    <!-- jQuery 3 -->
    <script src="{{ asset('backend/components/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('frontend/js/breaking-news-ticker.min.js') }}"></script>

    @stack('scripts')

    <script>
        $(function(){
            $('#breakingnewsticker').breakingNews({radius: 0});
        });
    </script>

</body>
</html>
