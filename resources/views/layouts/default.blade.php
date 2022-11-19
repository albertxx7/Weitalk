<!DOCTYPE html>
<html>

<head>
    <title>@yield('title', 'weitalk - 聊聊')</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script src="/js/app.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

    <!DOCTYPE html>
    <html>

    <head>
        <title>@yield('title', 'Weibo App') - Laravel</title>
        <link rel="stylesheet" href="/css/app.css">
    </head>

    <body>
        @include('layouts._header')

        <div class="container">
            <div class="offset-md-1 col-md-10">
                @yield('content')
                @include('layouts._footer')
            </div>
        </div>
    </body>

    </html>
