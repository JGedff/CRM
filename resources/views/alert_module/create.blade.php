@extends('master.navbar')

@section('main')

    <div class="container mt-5 py-3">
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-8">
                <div class="card shadow-sm">               
                    <div class="card-body mt-3 mx-3">

                        <form method="POST" action="/alerts">
                            @csrf
                            @method('POST')
                
                            <!-- Name -->
                            <div class="text-start mb-4 pb-3">
                                <label class="form-label ms-2" for="content" >Content</label>
                                <input type="text" class="form-control w-full" name="content" id="content" placeholder="Ex: There are no products!" required autofocus />
                            </div>
                
                            <!-- Surname -->
                            <div class="text-start mb-4 pb-3">
                                <label class="form-label ms-2" for="username" >Username</label>
                                <input type="text" class="form-control w-full" name="username" id="username" placeholder="Ex: Joe" required autofocus />
                            </div>

                            <div class="mb-3 row">
                                <div class="text-end">
                                    <!-- Btn retroceder -->
                                    <a class="btn btn-secondary me-2" href="/alert" role="button">Cancel</a>
                                    <!-- Btn crear -->
                                    <button type="submit" class="btn btn-success" role="button">Add alert</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection