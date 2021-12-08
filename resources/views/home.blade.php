<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    {{-- css --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    {{-- font awesome cdn --}}
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div class="wrapper">
        <nav>
            <div class="nav-inner">
                <div class="nav_toggle" id="nav-toggle">
                    <i class="fas fa-chevron-right">
                    </i>
                </div>
                <ul>
                    <a href="#" class="#">
                        <span class="icon">
                            <i class="fas fa-th"></i>
                        </span>
                        <span class="text">
                            Home
                        </span>
                    </a>
                    <a href="#" class="#">
                        <span class="icon">
                            <i class="fas fa-user"></i>
                        </span>
                        <span class="text">
                            User
                        </span>
                    </a>
                    <a href="#" class="#">
                        <span class="icon">
                            <i class="fas fa-bell"></i>
                        </span>
                        <span class="text">
                            Notification
                        </span>
                    </a>
                    <a href="#" class="#">
                        <span class="icon">
                            <i class="fas fa-heart"></i>
                        </span>
                        <span class="text">
                            Favorites
                        </span>
                    </a>
                    <a href="#" class="#">
                        <span class="icon">
                            <i class="fas fa-save"></i>
                        </span>
                        <span class="text">
                            Save
                        </span>
                    </a>
                    <a href="#" class="#">
                        <span class="icon">
                            <i class="fas fa-comment"></i>
                        </span>
                        <span class="text">
                            Chat
                        </span>
                    </a>
                </ul>
            </div>
            <a href="#" class="#">
                <span class="icon">
                    <i class="fas fa-sign-out-alt"></i>
                </span>
                <span class="text">
                    Logout
                </span>
        </nav>
    </div>
</body>
<script>
    const showMenu = (toggle, navbar,
        bodyId) => {
        const toogle = document.
        getElementById(toggleId),
            navbar = document.
        getElementById(navbarId),
            bodypadding = document.
        getElementById(bodyId);

        if (toogle && navbar) {
            toogle.addEventListener('click', () => {
                //appear Menu
                navbar.classList.toggle
                ('show');
                bodypadding.classList.toggle
                ('rotate');
            });
        }
    }
    showMenu('nav-toggle', 'navbar', 'body');
</script>

</html>


















{{-- @extends('layouts.app')
<div class="btn"> <span class="fas fa-bars"></span> </div>
<nav class="sidebar">
    @section('content')
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">{{ __('Dashboard') }}</div>
                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                            {{ __('You are logged in!') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
@endsection --}}
