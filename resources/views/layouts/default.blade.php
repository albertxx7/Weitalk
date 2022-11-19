<!DOCTYPE html>
<html>

<head>
    <title>@yield('title', 'weitalk - 聊聊')</title>
    <link rel="stylesheet" href="/css/app.css">
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

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="/">Weitalk 微聊</a>
                <ul class="navbar-nav justify-content-end">
                    <li class="nav-item"><a class="nav-link" href="/help">幫助</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">登入</a></li>
                </ul>
            </div>
        </nav>

        <div class="container">
            @yield('content')
        </div>
    </body>

    </html>


    <div class="container">
        @yield('content')
    </div>

</body>

</html>
