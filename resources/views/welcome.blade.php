@extends('layouts.app')
@section('content')
    <div class="container">
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->

        <div class="flex-center position-ref full-height">


            <div class="content">
                <div class="title m-b-md">
                    SystemBar
                </div>

                <div class="links">
                    <a href="/producto">Productos</a>
                    <a href="https://laracasts.com">Ventas</a>
                    <a href="https://laravel-news.com">Caja</a>
                    <a href="https://blog.laravel.com">Empleados</a>
                    <a href="https://nova.laravel.com">Proveedores</a>
                    {{--                    <a href="https://forge.laravel.com">Forge</a>--}}
                    {{--                    <a href="https://github.com/laravel/laravel">GitHub</a>--}}
                </div>
            </div>
        </div>
    </div>




@endsection
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
