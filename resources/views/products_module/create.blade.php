@extends('master.navbar')

@section('main')

    <div class="container mt-5 py-3">
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-8">
                <div class="card shadow-sm">               
                    <div class="card-body mt-3 mx-3">

                        <form method="POST" action="/products">
                            @csrf
                            @method('POST')
                
                            <!-- Name -->
                            <div class="text-start mb-4 pb-3">
                                <label class="form-label ms-2" for="name">Name</label>
                                <input type="text" class="form-control w-full" name="name" id="name" placeholder="Product identifier" required autofocus />
                            </div>

                            <!-- Description -->
                            <div class="text-start mb-4 pb-3">
                                <label class="form-label ms-2" for="description">Description</label>
                                <input type="text" class="form-control w-full" name="description" id="description" placeholder="Ex: Wooden chair" required autofocus />
                            </div>

                            <!-- Price -->
                            <div class="text-start mb-4 pb-3">
                                <label class="form-label ms-2" for="price">Price</label>
                                <input type="text" class="form-control w-full" name="price" id="price" placeholder="Ex: 10.2" pattern="[0-9]+(\.[0-9][0-9]?)?" title="Value must be a number (optional decimals)" required autofocus />
                            </div>

                            <!-- Stock -->
                            <div class="text-start mb-4 pb-3">
                                <label class="form-label ms-2" for="stock">Stock</label>
                                <input type="number" class="form-control w-full" name="stock" id="stock" placeholder="Ex: 3" required autofocus />
                            </div>

                            <!-- Monthly quota -->
                            <div class="text-start mb-4 pb-3">
                                <label class="form-label ms-2" for="monthly_quota">Monthly quota</label>
                                <input type="text" class="form-control w-full" name="monthly_quota" id="monthly_quota" placeholder="Ex: 1.3" pattern="[0-9]+(\.[0-9][0-9]?)?" title="Value must be a number (optional decimals)" required autofocus />
                            </div>

                            <!-- Duration -->
                            <div class="text-start mb-4 pb-3">
                                <label class="form-label ms-2" for="duration">Duration</label>
                                <input type="date" id="duration" class="form-control w-full text-body-secondary" name="duration" required autofocus autocomplete="duration" />
                            </div>
                         
                            <div class="mb-3 row">
                                <div class="text-end">
                                    <!-- Btn retroceder -->
                                    <a class="btn btn-secondary me-2" href="/products" role="button">Cancel</a>
                                    <!-- Btn crear -->
                                    <button type="submit" class="btn btn-success" role="button">Create product</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection