@extends('master.master')

@section('header')

    <nav class="navbar navbar-expand-lg py-0 px-2 topNavbar">
        <div class="container-fluid px-0">
            <a class="navbar-brand ps-2" href="">
                <img class="nbIcon" src="{{ asset('img\navicon_blai.png') }}" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a type="button" class="nav-link px-4 fs-5 nbLink" href="/main">Home</a>
                    </li>
                    <li class="nav-item">
                        <a type="button" class="nav-link px-4 fs-5 nbLink" href="">Option 2</a>
                    </li>
                    <li class="nav-item">
                        <a type="button" class="nav-link px-4 fs-5 nbLink" href="">Option 3</a>
                    </li>
                </ul>

                <!-- Profile/Options & logout -->
                <div class="dropdown me-2">
                    <button class="btn btn-outline-light btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ Auth::user()->name }}
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="/profile">Perfil</a></li>
                        <li>
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="dropdown-item fw-bold">Sortir</button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

@endsection
