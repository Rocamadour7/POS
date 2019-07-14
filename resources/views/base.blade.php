<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ __('messages.pos') }} - @yield('title')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
    @yield('styles')
</head>

<body>
    @yield('modals')
    <div class="container-fluid">
        @yield('main')
    </div>
    <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
    @yield('scripts')
</body>

</html>