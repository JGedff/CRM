@extends('master.navbar')

@section('main')

<div>
    {{$client->name}}
    <br>
    {{$client->surname}}
    <br>
    {{$client->email}}
    <br>
    {{$client->phone}}
    <br>
    {{$client->adress}}
    <br>
    {{$client->type}}
    <br>

    
    <form action="/clients/{{ $client->id }}" method="POST">
        @csrf
        <input type="hidden" name="_method" value="PATCH" />
        <input type="text" name='name' id='name' />
        <input type="text" name='surname' id='surname' />
        <input type="text" name='email' id='email' />
        <input type="text" name='phone' id='phone' />
        <input type="text" name='adress' id='adress' />
        <input type="text" name='type' id='type' />
        <button>SEND</button>
    </form>
</div>

@endsection
