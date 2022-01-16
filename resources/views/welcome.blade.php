<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }}</title>
        <link rel="icon" href="{{ asset('img/app_logo.png') }}"/>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

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
                height: 10vh;
            }

            .carousel,.item,.active{
               height:500px;
             }
            .carousel-inner{
                height:550px;
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
                margin-bottom: 50px;
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

            .position-header {
                position: relative;
                display: flex;
                margin-right: 80%;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
        <div class="position-header"><h2>{{ __('Sistem Rumah Bersih') }}</h2></div>
            <div class="top-right links">
                @auth
                    <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                @else
                    <a href="{{ route('pelanggan.login') }}" class="text-sm text-gray-700 underline">Pelanggan</a>

                    <a href="{{ route('tukang-bersih.login') }}" class="ml-4 text-sm text-gray-700 underline">Tukang Bersih</a>
                @endauth
            </div>
        </div>
        <div class="content">
            <img src="/img/Selamat Datang1.png" style="width: 100%; height: 1080px">
        </div>

        <!-- jQuery -->
        <script src="{{ asset('AdminLTE/plugins/jquery/jquery.min.js') }}"></script>
        <!-- Bootstrap 4 -->
        <script src="{{ asset('AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    </body>
</html>
