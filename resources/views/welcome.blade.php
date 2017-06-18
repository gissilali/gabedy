<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('logo.svg') }}">
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
            #day{
                position: relative;
                  top: 25px; /* 25% of parent */
                  font-size: 50px; /* 50% of parent */
                  line-height: 50px; /* 50% of parent */
                  color: #000;
                  font-family: "Courier New", monospace;
                  font-weight: bold;
            }
            .circle{
                width: 100px;
                  height: 100px;
                  background-color:white;
                  text-align: center;
                  border-radius: 50%;
                  -webkit-border-radius: 50%;
                  -moz-border-radius: 50%;
                  margin:0 auto;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">

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
                    <div class="circle">
                        <span id="day" class="circle"></span>
                    </div>
                    <p style="text-transform: uppercase;font-weight: bold; font-size:24px;padding-top:5px;color:#2ab27b;">Days</p>
                    <div id="getting-started"></div>
                </div>
            </div>
        </div>

        <script src="{{ asset('js/app.js') }}"></script>
        <script src="{{ asset('js/jquery-countdown.min.js') }}"></script>
        <script type="text/javascript">
              $("#day")
              .countdown("2017/06/30", function(event) {
                $(this).text(
                  event.strftime('%D')
                );
              });
        </script>
    </body>
</html>
