<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <link rel="stylesheet" type="text/css" href="/css/app.css">

        <title>@yield('title') - Atomix Editor</title>
        <style type="text/css">
            nav {
                background-color: black;
            }
            nav ul li.active {
                background-color: rgba(255, 255, 255, 0.2) !important;
            }

            body {
                background-image: url('/images/nav-background.jpg');
            }

            .formed-card {
                opacity: 0.8;
            }
            @yield('styles')
		</style>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>
    <body>
        @include('templates.partials.header')
		@include('templates.partials.alerts')
		@yield('content')
		@include('templates.partials.footer')
        <script type="text/javascript" src="js/app.js"></script>
        <script type="text/javascript">
			@yield('scripts')
		</script>
    </body>
</html>
