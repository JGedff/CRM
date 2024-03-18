@extends('master.navbar')

@section('main')
<!-- Segunda navbar (navbar2) -->
    <div class="d-flex ps-3 p-2 justify-content-between align-middle shadow navbar2">
        <div class="align-middle">
            <h4 class="fw-semibold mb-0">
                HOME
            </h4>                
        </div>
        <div class="d-flex">
            <!-- Botón nuevo curso -->
            <a class="btn btn-success btn-sm me-2 my-0 nbButton" href="" role="button">Button</a>
        </div>
    </div>

    <div class="container flex mt-5">
        <h1 class="m-3 p-3 border">VISTA PRINCIPAL</h1>
    </div>
    
@endsection