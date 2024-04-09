@extends('master.navbar')

@section('main')
        
        <div class="card mx-5">
            <div class="card-body text-center">
                <h1>MÒDULS DISPONIBLES</h1>
            </div>
        </div>

</br>

<!--         <div class="justify-content-center text-center">
            <img src="{{ asset('img\marmi.png') }}" alt="">
        </div>
 -->

        <div class="d-flex justify-content-center align-items-center">
            
            <div class="card mt-5 justify-content-center align-items-center text-center" style="width: 18rem; margin-right: 2rem;">
                <div class="card-body">
                   

                    <div class="d-flex align-items-center">
                        <h5 class="card-title me-2">Mòdul Clients</h5>
                        <div class="form-check form-switch d-flex ms-2 justify-content-center align-items-center">
                            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                            <label class="form-check-label" for="flexSwitchCheckChecked"></label>
                        </div>
                    </div>
                    <img src="{{ asset('img\client.png') }}" alt="" style="width: 150px; height: 150px;">
                </div>
            </div>


            <div class="card mt-5 justify-content-center align-items-center text-center" style="width: 18rem; margin-right: 2rem;">
                <div class="card-body">
                    <h5 class="card-title">Mòdul Productes</h5>
                    <div class="form-check form-switch d-flex justify-content-center align-items-center">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                        <label class="form-check-label" for="flexSwitchCheckChecked"></label>
                    </div>
                    <img src="{{ asset('img\product.png') }}" alt="" style="width: 150px; height: 150px;">
                </div>
            </div>
            

            <div class="card mt-5 justify-content-center align-items-center text-center" style="width: 18rem; margin-right: 2rem;">
                <div class="card-body">
                    <h5 class="card-title">Mòdul Sale Proposals</h5>
                    <div class="form-check form-switch d-flex justify-content-center align-items-center">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                        <label class="form-check-label" for="flexSwitchCheckChecked"></label>
                    </div>
                    <img src="{{ asset('img\sale_product.png') }}" alt="" style="width: 150px; height: 150px;">
                </div>
            </div>
            

            <div class="card mt-5 justify-content-center align-items-center text-center" style="width: 18rem; margin-right: 2rem;">
                <div class="card-body">
                    <h5 class="card-title">Mòdul Sex</h5>
                    <div class="form-check form-switch d-flex justify-content-center align-items-center">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                        <label class="form-check-label" for="flexSwitchCheckChecked"></label>
                    </div>
                    <img src="{{ asset('img\marmi.png') }}" alt="" style="width: 150px; height: 150px;">
                </div>
            </div>
        </div>
        
        
    
@endsection
