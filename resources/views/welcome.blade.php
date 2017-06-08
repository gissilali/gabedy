<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="shortcut icon" type="image/x-icon" href="logo.svg">
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
                background: url(../images/clock-bg.jpg);
                background-size:cover;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
                color:#fff;
            }
            .subtitle{
                color:#fff;
            }
            .links > a {
                color: #fff;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .logo{
                width:100px;
                margin:0 auto;
            }
            .logo > img{
                width:100%;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

            <div class="content">
                <div class="logo">
                    <img src="logo.svg" alt="logo">
                </div>
                <div class="title m-b-md">
                    gabedy.com
                </div>
                <div class="subtitle m-b-md">
                    <h1>coming soon</h1>
                </div>
                <div class="links">
                    <a href="#"><span id="days" class="circle">28</span> Days</a>
                    <a href="#"><span id="hours" class="circle">3</span> Hours</a>
                    <a href="#"><span id="minutes" class="circle">34</span> Minutes</a>
                    <a href="#"><span id="seconds" class="circle">20</span> Seconds</a>
                </div>
            </div>
        </div>
    </body>
</html>
