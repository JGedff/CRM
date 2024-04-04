@extends('master.navbar')

@section('main')
        
    <div class="card mx-5">
        <div class="card-body text-center">
            <h1>Vista principal CLIENTES</h1>
        </div>
    </div>

    {{-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content px-4">
                <div class="modal-header">
                    <h1 class="modal-title fs-2" id="exampleModalLabel">New client</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="" method="post" id="newLandlord">
                    <div class="modal-body p-2">
                        <div class="row mb-2">
                            <label class="col">
                                <strong class="ps-2">Name</strong>
                                <input type="text" name="userName" id="userName" class="form-control" placeholder="Insert a name" required/>
                            </label>
                            <label class="col">
                                <strong class="ps-2">Surnames</strong>
                                <input type="text" name="userSurnames" id="userSurnames" class="form-control" placeholder="Insert one or more surnames" />
                            </label>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" onclick="clearForm()">Close</button>
                        <button type="submit" class="btn btn-success border border-none">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div> --}}

    <div class="row justify-content-center">

        <!--New client card-->
        <a href="/client/create" class="card m-4 p-3 align-items-center informationCard">
            <div class="d-flex justify-content-center p-2">
                <h4>Add new client</h4>
            </div>
            <div class="d-flex justify-content-center p-2">
                <img src="{{ asset('img\add_user_nobg.png') }}">
            </div>
        </a>

        <!--Clients cards-->
        @foreach ($clients as $client)

            <a href="#" class="card m-4 p-3 informationCard">
                <div class="d-grid gap-2 d-md-flex">
                    <div class="col justify-content-center ps-1">
                        <div class="row">
                            <h3 class="w-100">{{ $client->name }}</h3><br>
                        </div>
                        <div class="row">
                            <h4 class="w-100">{{ $client->surname }}</h4>
                        </div>
                    </div>
                </div>
                <div class="justify-content-start pt-1">
                    <div class="row">
                        <i class="bi bi-telephone"></i>
                        {{ $client->phone }}<br>
                    </div>
                    <div class="row">
                        {{ $client->email }}<br>
                    </div>
                    <div class="row">
                        {{ $client->adress }}<br>
                    </div>
                    <div class="row">
                        {{ $client->type }}<br>
                    </div>
                </div>
            </a>

        @endforeach

    </div>

@endsection
