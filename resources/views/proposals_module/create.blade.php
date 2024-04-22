@extends('master.navbar')

@section('main')
        
    <div class="card mx-5 border-secondary bg-primary-subtle">
        <div class="card-body">
            <div class="row justify-content-between px-5">
                <div class="col-auto m-0 p-0">
                    <h1>
                        {{ $client->name }} {{ $client->surname }} ({{ $client->id }})
                    </h1>
                </div>
                <div class="col-auto m-0 p-0">
                    <h1><b>Sale proposal creation</b></h1>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5 py-3">
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-8">
                <div class="card shadow-sm">               
                    <div class="card-body mt-3 mx-3">

                        <form method="POST" action="/saleProposals">
                            @csrf
                            @method('POST')

                            <!-- Products -->
                            <div class="text-start mb-4 pb-3">
                                <label class="form-label ms-2" for="product-selector">Choose a product</label>
                                <select name="product" class="col-sm-12 form-select-sm border-secondary-subtle selector" id="product-selector">
                                    <option selected disabled>Product</option>
                                    @foreach ($products as $product)
                                        <option value="{{ $product->id }}">{{ $product->id }} - {{ $product->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                
                            <!-- Quantity -->
                            <div class="text-start mb-4 pb-3">
                                <label class="form-label ms-2" for="name" >Quantity</label>
                                <input type="number" class="form-control w-full" name="quantity" id="quantity" placeholder="Ex: 3" required autofocus />
                            </div>
                
                            <!-- Total cost -->
                            <div class="text-start mb-4 pb-3">
                                <label class="form-label ms-2" for="total_cost" >Total cost</label>
                                <input type="text" class="form-control w-full" name="total_cost" id="total_cost" placeholder="Total cost" readonly required />
                            </div>

                            <div class="mb-3 row">
                                <div class="text-end">
                                    <!-- Btn retroceder -->
                                    <a class="btn btn-secondary me-2" href="/clients/{{ $client->id }}" role="button">Cancel</a>
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

@section('js')
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Obtener elementos del DOM
        var productSelector = document.getElementById('product-selector');
        var quantityInput = document.getElementById('quantity');
        var totalCostInput = document.getElementById('total_cost');

        // Función para calcular el precio total
        function calculateTotalCost() {
            // Obtener el precio del producto seleccionado
            var selectedProductOption = productSelector.options[productSelector.selectedIndex];
            var productPrice = selectedProductOption.getAttribute('price');

            // Obtener la cantidad introducida por el usuario
            var quantity = parseFloat(quantityInput.value);

            // Calcular el precio total
            var totalCost = productPrice * quantity;

            // Actualizar el valor del campo de entrada del precio total
            totalCostInput.value = totalCost.toFixed(2); // Redondear a 2 decimales
        }

        // Escuchar cambios en el selector de productos y en el campo de entrada de cantidad
        productSelector.addEventListener('change', calculateTotalCost);
        quantityInput.addEventListener('input', calculateTotalCost);
    });
</script>
@endsection
