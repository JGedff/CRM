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
        <div class="card mt-5 justify-content-center align-items-center text-center" style="width: 18rem; margin-right: 2rem;">
            <div class="card-header">
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
        <div class="card mt-5 justify-content-center align-items-center text-center" style="width: 18rem; margin-right: 2rem;">
            <div class="card-header">
                <div class="row align-items-center justify-content-between">
                    <h5 class="col-auto me-2 mb-0">Products module</h5>
                    <div class="col-auto form-check form-switch ms-2 my-0 pt-1">
                        <input class="form-check-input" type="checkbox" role="switch" id="clientSwitch" checked>
                        <label class="form-check-label" for="clientSwitch"></label>
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
        <div class="card mt-5 justify-content-center align-items-center text-center" style="width: 18rem; margin-right: 2rem;">
            <div class="card-header">
                <div class="row align-items-center justify-content-between">
                    <h5 class="col-auto me-2 mb-0">Sales module</h5>
                    <div class="col-auto form-check form-switch ms-2 my-0 pt-1">
                        <input class="form-check-input" type="checkbox" role="switch" id="clientSwitch" checked>
                        <label class="form-check-label" for="clientSwitch"></label>
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
        <div class="card mt-5 justify-content-center align-items-center text-center" style="width: 18rem; margin-right: 2rem;">
            <div class="card-header">
                <div class="row align-items-center justify-content-between">
                    <h5 class="col-auto me-2 mb-0">Others</h5>
                    <div class="col-auto form-check form-switch ms-2 my-0 pt-1">
                        <input class="form-check-input" type="checkbox" role="switch" id="clientSwitch" checked>
                        <label class="form-check-label" for="clientSwitch"></label>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row justify-content-center">
                    <img src="{{ asset('img\marmi.png') }}" alt="" class="moduleIcon">
                </div>
            </div>
        </div>


        {{--
        <div class="card mt-5 justify-content-center align-items-center text-center" style="width: 18rem; margin-right: 2rem;">
            <div class="card-body">
                <div class="row align-items-center">
                    <h5 class="card-title">Mòdul Productes</h5>
                    <div class="form-check form-switch d-flex justify-content-center">
                        <input class="form-check-input" type="checkbox" role="switch" id="productSwitch" checked>
                        <label class="form-check-label" for="productSwitch"></label>
                    </div>
                </div>
                <div class="row">
                    <img src="{{ asset('img\product.png') }}" alt="" class="moduleIcon">
                </div>                    
            </div>
        </div>
        

        <div class="card mt-5 justify-content-center align-items-center text-center" style="width: 18rem; margin-right: 2rem;">
            <div class="card-body">
                <h5 class="card-title">Mòdul Sale Proposals</h5>
                <div class="form-check form-switch d-flex justify-content-center align-items-center">
                    <input class="form-check-input" type="checkbox" role="switch" id="saleProposalSwitch" checked>
                    <label class="form-check-label" for="saleProposalSwitch"></label>
                </div>
                <img src="{{ asset('img\sale_product.png') }}" alt="" class="moduleIcon">
            </div>
        </div>
        

        <div class="card mt-5 justify-content-center align-items-center text-center" style="width: 18rem; margin-right: 2rem;">
            <div class="card-body">
                <h5 class="card-title">Altres</h5>
                <div class="form-check form-switch d-flex justify-content-center align-items-center">
                    <input class="form-check-input" type="checkbox" role="switch" id="otherSwitch" checked>
                    <label class="form-check-label" for="otherSwitch"></label>
                </div>
                <img src="{{ asset('img\add_user_nobg.png') }}" alt="" class="moduleIcon">
            </div>
        </div>
        --}}

    </div>
    
@endsection
