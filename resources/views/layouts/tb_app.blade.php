<!DOCTYPE html>
<html lang="fr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>EASYFOLLOW</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="title" content="EASYFOLLOW">
    <meta name="keywords" content="web, responsive, browser, dashboard, mobile, desktop, bootstrap">
    <meta name="description"
        content="EasyFollow est une application de pointage crossplatform (mobile, desktop, web).
        Avec une interface intuitive elle permet de suivre ses heures de travail et ses gains
        obtenus.">

    {{-- css --}}
    @vite([
        'resources/css/util.css',
        'resources/css/template.css',
        'resources/css/datatables.css',
        'resources/css/flatpickr.css',
        'resources/css/my_style.css',
    ])
</head>

<body>

    @include('partials.tb_header')

    <main>
        @yield('content')
    </main>  

    {{-- js --}}
    @vite([
        'resources/js/jquery.js',
        'resources/js/popper.js',
        'resources/js/cdn_bootstrap.js',
        'resources/js/headroom.js',
        'resources/js/nouislider.js',
        'resources/js/template.js',
        'resources/js/datatables.js',
        'resources/js/flatpickr.js',
        'resources/js/my_script.js',
        'resources/js/app.js',
    ])

</body>

</html>