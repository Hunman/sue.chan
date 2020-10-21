<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        {{-- CSRF Token --}}
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{config('app.name')}}</title>

        {{-- Fonts --}}
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        {{-- Styles --}}
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        {{-- Scripts --}}
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body>
        <div id="app">
            {{--
                You can see that I'm using a <b-navbar> and such tags, which are not standard HTML tags
                The reason for this is that this is BootstrapVue's doing.

                The original Bootstrap version uses jQuery, which is kindof a becoming obsolete.
                The quick summary of the whys:
                    Old browsers all worked different, so jQuery was born as a sollution to make it easy to write
                    code that behaved the same way in every browser. Browser creators caught on,
                    making browsers behave more and more similar and standard following,
                    thus the need for jQuery is diminishing, the drawbacks of jQuery start to outweight the good parts

                So by using BootstrapVue, I can use bootstrap with all it's functionality, but without having to use jQuery
            --}}
            <b-navbar toggleable="md" type="dark" variant="dark">
                <b-navbar-brand href="/">{{config('app.name')}}</b-navbar-brand>
            </b-navbar>
            <main role="main" class="container">
                @yield('content')
            </main>
        </div>
    </body>
</html>
