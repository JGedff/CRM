@extends('master.navbar')

@section('main')

    <div class="container mt-5 py-3">
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-8">
                <div class="card shadow-sm">               
                    <div class="card-body mt-3 mx-3">

                        <form method="POST" action="/clients/{{ $client->id }}">
                            @csrf
                            @method('PUT')
                
                            <!-- Name -->
                            <div class="text-start mb-4 pb-3">
                                <label class="form-label ms-2" for="name" >Name</label>
                                <input type="text" class="form-control w-full" name="name" id="name" value="{{ $client->name }}" required autofocus />
                            </div>
                
                            <!-- Surname -->
                            <div class="text-start mb-4 pb-3">
                                <label class="form-label ms-2" for="surname" >Surname</label>
                                <input type="text" class="form-control w-full" name="surname" id="surname" value="{{ $client->surname }}" required autofocus />
                            </div>
                
                            <!-- Email -->
                            <div class="text-start mb-4 pb-3">
                                <label class="form-label ms-2" for="email" >Email</label>
                                <input type="email" class="form-control w-full" name="email" id="email" value="{{ $client->email }}" required autofocus />
                            </div>
                
                            <!-- Phone -->
                            <div class="text-start mb-4 pb-3">
                                <label class="form-label ms-2" for="phone" >Phone</label>
                                <input type="text" class="form-control w-full" name="phone" id="phone" value="{{ $client->phone }}" required autofocus />
                            </div>
                
                            <!-- Address -->
                            <div class="text-start mb-5">
                                <label class="form-label ms-2" for="adress">Address</label>
                                <input type="text" class="form-control w-full text-body-secondary" name="adress" id="adress" value="{{ $client->adress }}" required autofocus />
                            </div>
                
                            <!-- Client type -->
                            <div class="text-start mb-5">
                                <label class="form-label ms-2" for="type">Client type</label>
                                <input type="text" class="form-control w-full text-body-secondary" name="type" id="type" value="{{ $client->type }}" required autofocus />
                            </div>

                            <div class="mb-3 row">
                                <div class="text-end">
                                    <!-- Btn retroceder -->
                                    <a class="btn btn-secondary me-2" href="/clients/{{ $client->id }}" role="button">Cancel</a>
                                    <!-- Btn crear -->
                                    <button type="submit" class="btn btn-success" role="button">Save changes</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection