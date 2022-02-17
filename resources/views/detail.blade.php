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
                @if ($id == 'Bisolvon')
                    <div>
                        <h3>{{$id}}</h3>
                        <div class='cards' style="border-style:solid; float:left;" href="">
                            <img src="{{ asset('img/Bisolvon.jpg')  }}" width="300" height="300"/>
                            Bisolvon Tablet adalah obat dengan kandungan bahan aktif bromhexine HCl, yang merupakan agen mukolitik yang bekerja mengencerkan dan menipiskan dahak. Obat ini dapat mengatasi dan meredakan batuk berdahak. Setiap tablet Bisolvon Tablet mengandung 8 mg bromhexine HCl. 
                        </div>  
                        
                    </div>
                @elseif ($id == 'Allerin')
                <div>
                    <h3>{{$id}}</h3>
                    <div class='cards' style="border-style:solid; float:left;" href="">
                        <img src="{{ asset('img/Allerin.jpg')  }}" width="300" height="300"/>
                        Allerin Expectorant adalah obat dengan kandungan bahan aktif glyceryl guaiacolate, natrium citrate, diphenhydramine, dan pseudoephedrine. Obat ini bekerja sebagai ekspektoran, antitusif, antihistamin, sekaligus dekongestan hidung. Obat ini dapat mengatasi beberapa jenis batuk seperti batuk spasmodik (batuk tiba-tiba yang sulit dihentikan), batuk berdahak, hingga iritasi.  
                    </div>  
                    
                </div>
                @endif
                    
                </div>
            </div>
        </div>
    </body>
</html>
