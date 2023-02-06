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
        'resources/css/animate.css',
        'resources/css/paddle.css',
        'resources/css/app.css',
    ])
</head>

<body>

    @include('partials.header')

    <main>
        @yield('content')
    </main>
    
    @include('partials.footer')   

    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>

    {{-- js --}}
    @vite([
        'resources/js/headroom.js',
        /*
         * fix
         * 'resources/js/on-screen.umd.js',
         */
        'resources/js/nouislider.js',
        'resources/js/bootstrap-datepicker.js',
        'resources/js/jquery.waypoints.js',
        'resources/js/owl.carousel.js',
        /*
         * fix
         * 'resources/js/jarallax.js',
         */
        'resources/js/jquery.counterup.js',
        'resources/js/jquery.countdown.js',
        'resources/js/smooth-scroll.polyfills.js',
        'resources/js/prism.js',
        'resources/js/buttons.js',
        'resources/js/template.js',
        'resources/js/paddle.js',
        'resources/js/app.js',
    ])

</body>

</html>