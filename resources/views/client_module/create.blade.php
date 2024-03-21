@extends('master.navbar')

@section('main')

    <div class="container mt-5 py-3">
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-8">
                <div class="card shadow-sm">               
                    <div class="card-body mt-3 mx-3">

                        <form method="POST" action="/client">
                            @csrf
                            @method('POST')
                
                            <!-- Name -->
                            <div class="text-start mb-4 pb-3">
                                <label class="form-label ms-2" for="name" >Name</label>
                                <input type="text" class="form-control w-full" name="name" id="name" placeholder="Ex: John" required autofocus />
                            </div>
                
                            <!-- Surname -->
                            <div class="text-start mb-4 pb-3">
                                <label class="form-label ms-2" for="surname" >Surname</label>
                                <input type="text" class="form-control w-full" name="surname" id="surname" placeholder="Ex: Doe" required autofocus />
                            </div>
                
                            <!-- Email -->
                            <div class="text-start mb-4 pb-3">
                                <label class="form-label ms-2" for="email" >Email</label>
                                <input type="text" class="form-control w-full" name="email" id="email" placeholder="Ex: name@email.com" required autofocus />
                            </div>
                
                            <!-- Phone -->
                            <div class="text-start mb-4 pb-3">
                                <label class="form-label ms-2" for="phone" >Phone</label>
                                <input type="text" class="form-control w-full" name="phone" id="phone" placeholder="Ex: 2023-2024" required autofocus />
                            </div>
                
                            <!-- Address -->
                            <div class="text-start mb-5">
                                <label class="form-label ms-2" for="address">Address</label>
                                <input type="date" class="form-control w-full text-body-secondary" name="address" id="address" required />
                            </div>
                
                            <!-- Client type -->
                            <div class="text-start mb-5">
                                <label class="form-label ms-2" for="client_type">Client type</label>
                                <input type="date" class="form-control w-full text-body-secondary" name="client_type" id="client_type" required />
                            </div>

                            <div class="mb-3 row">
                                <div class="text-end">
                                    <!-- Btn retroceder -->
                                    <a class="btn btn-secondary me-2" href="/client" role="button">Cancel</a>
                                    <!-- Btn crear -->
                                    <button type="submit" class="btn btn-success" role="button">Add client</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection