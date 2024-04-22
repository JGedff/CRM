@extends('master.master')

@section('header')
    <div class="mb-2 pb-3 bg-danger bg-opacity-50 text-center text-dark border-bottom border-black">
        <b style="font-size: 80px">404</b>
    </div>
@endsection

@section('main')
    <div class="mt-3 ms-3 text-center">
        <h4 class="my-5">
            <p>
                Resource not found! :(
            </p>
        </h4>
        <a type="button" class="btn btn-secondary mt-5" href="/main">
            Main page
        </a>
    </div>
@endsection