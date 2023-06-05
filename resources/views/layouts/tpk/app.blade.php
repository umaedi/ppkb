<!doctype html>
<html lang="en">


<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="theme-color" content="#6236FF">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="token" content="{{ $_COOKIE['access_tokenku'] ?? ''}}">
    <title>{{ $title ?? 'PPKB' }}</title>
    <meta name="description" content="Finapp HTML Mobile Template">
    <meta name="keywords" content="bootstrap, wallet, banking, fintech mobile template, cordova, phonegap, mobile, html, responsive" />
    <link rel="icon" type="image/png" href="assets/tpk/img/favicon.png" sizes="32x32">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/tpk/img/icon/192x192.png') }}">
    <link rel="stylesheet" href="{{ asset('assets/tpk/css/style.css') }}">
    {{-- <link rel="manifest" href="__manifest.json"> --}}
</head>

<body>

    @include('layouts.tpk.navbar')
    @yield('content')
    @include('layouts.tpk.button_action')
    {{-- @include('layouts.tpk.sidebar') --}}

    <!-- Bootstrap -->
    <script src="{{ asset('assets/tpk/js/lib/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/tpk/js/jquery-3.4.1.min.js') }}"></script>
    {{-- <script src="{{ asset('assets/tpk/js/base.js') }}"></script> --}}
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script type="text/javascript" src="{{ asset('assets/tpk/js/sweetalert.min.js') }}"></script>

    <script type="text/javascript">
        var token =  $('meta[name="token"]').attr('content')
        async function transAjax(data) {
        html = null;
        data.headers = {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            'Authorization': `Bearer ${token}`,
        }
        await $.ajax(data).done(function(res) {
            html = res;
        })
            .fail(function() {
                return false;
            })
        return html
    }
    </script>
    @stack('js')
</body>
</html>