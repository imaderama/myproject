<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
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
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    @if ($tipe == 'medicine')
                    <div>
                        <h3>Medicines</h3>
                        <div class='cards' style="border-style:solid; float:left;">
                            <img src="{{ asset('img/Bisolvon.jpg')  }}" width="300" height="300"/>
                            <div class='cards-title'>
                                <a href="http://127.0.0.1:8000/catalog/medicines/Bisolvon">Bisolvon</a>
                            </div>
                        </div>
                        <div class='cards' style="border-style:solid; float:left;">
                            <img src="{{ asset('img/Allerin.jpg')  }}" width="300" height="300"/>
                            <div class='cards-title'>
                            <a href="http://127.0.0.1:8000/catalog/medicines/Allerin">Allerin</a>
                            </div>
                        </div>
                        
                    </div>
                    @else
                    <div>
                        <h3>Medicines Equipment</h3>
                        <div class='cards' style="border-style:solid; float:left;">
                            <img src="{{ asset('img/Stethoscope.png')  }}" width="300" height="300"/>
                            <div class='cards-title'>
                                <a href="http://127.0.0.1:8000/catalog/equipment/stethoscope">Stethoscope</a>
                            </div>
                        </div>
                        <div class='cards' style="border-style:solid; float:left;">
                            <img src="{{ asset('img/Thermometer.jpg')  }}" width="300" height="300"/>
                            <div class='cards-title'>
                            <a href="http://127.0.0.1:8000/catalog/equipment/thermometer">Thermometer</a>
                            </div>
                        </div>
                    </div>
                    @endif
                    
                    <!-- <img src="{{ asset('img/index.png')  }}" width="300" height="300"/> -->
                </div>

                <!-- <div class="links">
                    <a href="http://127.0.0.1:8000/catalog/medicines">Medicines</a>
                    <a href="https://laracasts.com">Medical Equipment</a>
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://vapor.laravel.com">Vapor</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div> -->
            </div>
        </div>
    </body>
</html>
