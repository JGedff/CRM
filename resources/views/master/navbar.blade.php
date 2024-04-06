@extends('master.master')

@section('header')

    {{-- TOP NAVBAR --}}
    <nav class="navbar navbar-expand-lg py-0 px-2 topNavbar">
        <div class="container-fluid px-0">
            <a class="navbar-brand ps-2 my-2">
                <img class="nbIcon" src="{{ asset('img\favicon.png') }}" alt="">
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
                        <a type="button" class="nav-link px-4 fs-5 nbLink" href="/clients">Clients</a>
                    </li>
                    <li class="nav-item">
                        <a type="button" class="nav-link px-4 fs-5 nbLink" href="/products">Products</a>
                    </li>
                    <li class="nav-item">
                        <a type="button" class="nav-link px-4 fs-5 nbLink" href="/saleProposals">Sale proposals</a>
                    </li>
                </ul>

                <!-- Profile/Options & logout -->
                <div class="dropdown me-2">
                    <button class="btn btn-outline-light btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ Auth::user()->name }}
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="/profile">Profile</a></li>
                        <li>
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="dropdown-item fw-bold">Logout</button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    {{-- SECOND NAVBAR --}}
    <div class="d-flex ps-3 p-2 justify-content-between align-middle shadow navbar2">
        <div class="align-middle">
            <h4 class="mb-0">
                [PONER CONTENIDO]
            </h4>                
        </div>
        <div class="d-flex">
            <!-- Botón nuevo curso -->
            <a class="btn btn-success btn-sm me-2 my-0 nbButton" href="" role="button">Button</a>
        </div>
    </div>

@endsection
