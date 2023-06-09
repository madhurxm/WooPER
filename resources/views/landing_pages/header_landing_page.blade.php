<!DOCTYPE html>
<html lang="en">

<head>

    {{--  BASIC TAGS START  --}}
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />


    {{-- PHP = check title existance start --}}
    @if (@isset($title))
        <title>{{ $title }}</title>
    @else
        <title>WOOPER</title>
    @endif
    {{-- PHP = check title existance end --}}

    {{--  BASIC TAGS END  --}}

    {{--  BOOTSTRAP CDN START  --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
        crossorigin="anonymous" />
    {{--  BOOTSTRAP CDN END  --}}

    {{--  FONT AWESOME CDN END  --}}
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    {{--  FONT AWESOME CDN END  --}}

    {{--  GOOGLE FONTS START  --}}
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Anton&family=Faustina:wght@300;500&family=Oswald:wght@600&family=Questrial&display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Anton&family=Cookie&family=Crimson+Text&family=Poppins:wght@500&display=swap"
        rel="stylesheet">
    {{--  GOOGLE FONTS END  --}}

    {{--  CSS SCRIPT START  --}}
    <link href="{{ URL::asset('assets/pre_loader/preloader.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('assets/landing_pages/css/styles.css') }}" rel="stylesheet">
    {{--  CSS SCRIPT END  --}}

</head>


<body>
    {{--  PRELOADER START  --}}
    <div class="loader"></div>
    <script src="{{ URL::asset('assets/pre_loader/preloader.js') }}"></script>
    {{--  PRELOADER END  --}}

    <nav class="navbar navbar-dark sticky-top navbar_getstarted">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('get_started') }}">
                <img src="{{ URL::asset('assets/landing_pages/image/Wooper_logo_white.PNG') }}"
                    alt="" class="logo" />
            </a>
            <div class="mx-5">
                @if (Request::path() == 'login')
                    <a name="" id=""
                        class="btn btn-outline-dark rounded-pill btn-sm get_started_signin_btn"
                        href="{{ route('get_register') }}" role="button">SIGN UP</a>
                @else
                    <a name="" id=""
                        class="btn btn-outline-dark rounded-pill btn-sm get_started_signin_btn"
                        href="{{ route('get_login') }}" role="button">SIGN IN</a>
                @endif

            </div>
        </div>
    </nav>
