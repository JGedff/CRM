@extends('master.navbar')

@section('main')
        
    <div class="card mx-5">
        <div class="card-body text-center">
            <h1>AVAILABLE MODULES</h1>
        </div>
    </div>

</br>

    <div class="d-flex justify-content-center">
        
        <!-- CLIENTS -->
        <div class="card m-4 p-3 justify-content-center align-items-center text-center informationCard">
            <div class="card-header bg-white pt-0 w-100">
                <div class="row align-items-center justify-content-between">
                    <h5 class="col-auto me-2 mb-0">Clients module</h5>
                    <div class="col-auto form-check form-switch ms-2 my-0 pt-1">
                        <input class="form-check-input" type="checkbox" role="switch" id="clientSwitch" checked>
                        <label class="form-check-label" for="clientSwitch"></label>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row justify-content-center">
                    <img src="{{ asset('img\client.png') }}" alt="" class="moduleIcon">
                </div>
            </div>
        </div>
        
        <!-- PRODUCTS -->
        <div class="card m-4 p-3 justify-content-center align-items-center text-center informationCard">
            <div class="card-header bg-white pt-0 w-100">
                <div class="row align-items-center justify-content-between">
                    <h5 class="col-auto me-2 mb-0">Products module</h5>
                    <div class="col-auto form-check form-switch ms-2 my-0 pt-1">
                        <input class="form-check-input" type="checkbox" role="switch" id="productSwitch" checked>
                        <label class="form-check-label" for="productSwitch"></label>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row justify-content-center">
                    <img src="{{ asset('img\product.png') }}" alt="" class="moduleIcon">
                </div>
            </div>
        </div>
        
        <!-- SALES -->
        <div class="card m-4 p-3 justify-content-center align-items-center text-center informationCard">
            <div class="card-header bg-white pt-0 w-100">
                <div class="row align-items-center justify-content-between">
                    <h5 class="col-auto me-2 mb-0">Sales module</h5>
                    <div class="col-auto form-check form-switch ms-2 my-0 pt-1">
                        <input class="form-check-input" type="checkbox" role="switch" id="saleSwitch" checked>
                        <label class="form-check-label" for="saleSwitch"></label>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row justify-content-center">
                    <img src="{{ asset('img\sale_product.png') }}" alt="" class="moduleIcon">
                </div>
            </div>
        </div>
        
        <!-- OTHERS -->
        <div class="card m-4 p-3 justify-content-center align-items-center text-center informationCard">
            <div class="card-header bg-white pt-0 w-100">
                <div class="row align-items-center justify-content-between">
                    <h5 class="col-auto me-2 mb-0">Others</h5>
                    <div class="col-auto form-check form-switch ms-2 my-0 pt-1">
                        <input class="form-check-input" type="checkbox" role="switch" id="othersSwitch" checked>
                        <label class="form-check-label" for="saleSwitch"></label>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row justify-content-center moduleIcon">
                    {{-- <img src="{{ asset('img\add_user_nobg.png') }}" alt="" class="moduleIcon"> --}}
                </div>
            </div>
        </div>

    </div>
    
@endsection
