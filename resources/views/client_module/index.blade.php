@extends('master.navbar')

@section('main')

    <div class="row justify-content-center px-5">

        @if ($clients->isEmpty())

            <div class="card border-warning bg-warning-subtle mx-5 mb-5">
                <div class="card-body text-center">
                    <h2 class="fw-semibold">No clients found!</h2>
                    <h4 class="mt-3">Start creating clients by clicking the button below</h3>
                </div>
            </div>

        @endif

        <!--New client card-->
        <a href="/clients/create" class="card m-4 p-3 align-items-center informationCard">
            <div class="d-flex justify-content-center p-2">
                <h4>Add new client</h4>
            </div>
            <div class="d-flex justify-content-center p-2">
                <img src="{{ asset('img\add_user_nobg.png') }}">
            </div>
        </a>

        <!--Clients cards-->
        @foreach ($clients as $client)

            <a href="/clients/{{ $client->id }}" class="card m-4 px-3 py-2 informationCard">
                <div class="card-header pt-0">
                    <span class="fs-2">{{ $client->name . ' ' . $client->surname }}</span>
                </div>
                <div class="card-body justify-content-start pt-3">
                    <div class="row mb-1">
                        <div class="d-flex px-0 align-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill me-2" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z"/>
                            </svg>
                            {{ $client->phone }}
                        </div>
                    </div>
                    <div class="row mb-1">
                        <div class="d-flex px-0 align-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill me-2" viewBox="0 0 16 16">
                                <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414zM0 4.697v7.104l5.803-3.558zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586zm3.436-.586L16 11.801V4.697z"/>
                            </svg>
                            {{ $client->email }}
                        </div>
                    </div>
                    <div class="row mb-1">
                        <div class="d-flex px-0 align-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-signpost-2-fill me-2" viewBox="0 0 16 16">
                                <path d="M7.293.707A1 1 0 0 0 7 1.414V2H2a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h5v1H2.5a1 1 0 0 0-.8.4L.725 8.7a.5.5 0 0 0 0 .6l.975 1.3a1 1 0 0 0 .8.4H7v5h2v-5h5a1 1 0 0 0 1-1V8a1 1 0 0 0-1-1H9V6h4.5a1 1 0 0 0 .8-.4l.975-1.3a.5.5 0 0 0 0-.6L14.3 2.4a1 1 0 0 0-.8-.4H9v-.586A1 1 0 0 0 7.293.707"/>
                            </svg>
                            {{ $client->adress }}<br>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="d-flex px-0 align-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-question-circle-fill me-2" viewBox="0 0 16 16">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M5.496 6.033h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286a.237.237 0 0 0 .241.247m2.325 6.443c.61 0 1.029-.394 1.029-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94 0 .533.425.927 1.01.927z"/>
                            </svg>
                            {{ $client->type }}<br>
                        </div>
                    </div>
                </div>
            </a>

        @endforeach

    </div>

@endsection