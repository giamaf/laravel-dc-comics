<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ Vite::asset('resources/img/dc-logo.png') }}" type="logo-dc">
    <title>{{ env('APP_NAME', 'DC Comics') }} | @yield('title')</title>

    {{-- CDN --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    {{-- Header --}}
    <header>
        @include('includes.header')

        {{-- todo Jumbo --}}
        @yield('jumbo')
    </header>

    {{-- # Main --}}
    <main id="@yield('section-id')">
        @yield('main')
    </main>

    {{-- * Aside --}}
    <aside>
        @include('includes.aside')
    </aside>

    {{-- ! Footer --}}
    <footer>

        {{-- ! Footer-top --}}
        @include('includes.footer_top')


        {{-- ! Footer-bottom --}}
        @include('includes.footer_bottom')

    </footer>

    {{-- Scripts --}}
    @yield('scripts')
</body>

</html>
