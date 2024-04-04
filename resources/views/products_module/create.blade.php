@extends('master.navbar')

@section('main')

    <div class="container mt-5 py-3">
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-8">
                <div class="card shadow-sm">               
                    <div class="card-body mt-3 mx-3">

                        <form method="POST" action="/product">
                            @csrf
                            @method('POST')
                
                            <!-- Name -->
                            <div class="text-start mb-4 pb-3">
                                <label class="form-label ms-2" for="name">Nom</label>
                                <input type="text" class="form-control w-full" name="name" id="name" placeholder="Ex: John" required autofocus />
                            </div>

                            <!-- Description -->
                            <div class="text-start mb-4 pb-3">
                                <label class="form-label ms-2" for="name">Descripció</label>
                                <input type="text" class="form-control w-full" name="description" id="description" placeholder="Ex: Es molt sexy" required autofocus />
                            </div>

                            <!-- Precio -->
                            <div class="text-start mb-4 pb-3">
                                <label class="form-label ms-2" for="name">Preu</label>
                                <input type="number" class="form-control w-full" name="price" id="price" placeholder="Ex: 10" required autofocus />
                            </div>

                            <!-- Stock -->
                            <div class="text-start mb-4 pb-3">
                                <label class="form-label ms-2" for="name">Estoc</label>
                                <input type="number" class="form-control w-full" name="stock" id="stock" placeholder="Ex: 3" required autofocus />
                            </div>

                            <!-- monthly quota -->
                            <div class="text-start mb-4 pb-3">
                                <label class="form-label ms-2" for="name">Quota mensual</label>
                                <input type="number" class="form-control w-full" name="monthly_quota" id="monthly_quota" placeholder="Ex: 20" required autofocus />
                            </div>

                            <!-- Duration -->
                            <label for="fecha_inicio" class="form-label ms-2 my-0">Data d'inici</label>
                            <input type="date" id="duration" class="block mt-1 w-full text-body-secondary" name="duration" required autofocus autocomplete="duration" />
                         
                            <div class="mb-3 row">
                                <div class="text-end">
                                    <!-- Btn retroceder -->
                                    <a class="btn btn-secondary me-2" href="" role="button">Cancelar</a>
                                    <!-- Btn crear -->
                                    <button type="submit" class="btn btn-success text-black me-2" role="button">Crear producto</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection

@extends('master.navbar')

@section('main')

    <div class="container mt-5 py-3">
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-8">
                <div class="card shadow-sm">               
                    <div class="card-body mt-3 mx-3">

                        <form method="POST" action="/product">
                            @csrf
                            @method('POST')
                
                            <!-- Name -->
                            <div class="text-start mb-4 pb-3">
                                <label class="form-label ms-2" for="name">Nom</label>
                                <input type="text" class="form-control w-full" name="name" id="name" placeholder="Ex: John" required autofocus />
                            </div>

                            <!-- Description -->
                            <div class="text-start mb-4 pb-3">
                                <label class="form-label ms-2" for="name">Descripció</label>
                                <input type="text" class="form-control w-full" name="description" id="description" placeholder="Ex: Es molt sexy" required autofocus />
                            </div>

                            <!-- Precio -->
                            <div class="text-start mb-4 pb-3">
                                <label class="form-label ms-2" for="name">Preu</label>
                                <input type="number" class="form-control w-full" name="price" id="price" placeholder="Ex: 10" required autofocus />
                            </div>

                            <!-- Stock -->
                            <div class="text-start mb-4 pb-3">
                                <label class="form-label ms-2" for="name">Estoc</label>
                                <input type="number" class="form-control w-full" name="stock" id="stock" placeholder="Ex: 3" required autofocus />
                            </div>

                            <!-- monthly quota -->
                            <div class="text-start mb-4 pb-3">
                                <label class="form-label ms-2" for="name">Quota mensual</label>
                                <input type="number" class="form-control w-full" name="monthly_quota" id="monthly_quota" placeholder="Ex: 20" required autofocus />
                            </div>

                            <!-- Duration -->
                            <label for="fecha_inicio" class="form-label ms-2 my-0">Data d'inici</label>
                            <input type="date" id="duration" class="block mt-1 w-full text-body-secondary" name="duration" required autofocus autocomplete="duration" />
                         
                            <div class="mb-3 row">
                                <div class="text-end">
                                    <!-- Btn retroceder -->
                                    <a class="btn btn-secondary me-2" href="" role="button">Cancelar</a>
                                    <!-- Btn crear -->
                                    <button type="submit" class="btn btn-success text-black me-2" role="button">Crear producto</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection