@extends('master.navbar')

@section('main')

    <div class="row justify-content-center px-5">

        {{-- <div class="container text-end my-4">
                <a type="button" class="btn btn-primary" href="/product/create">
                    Add new product
                </a>
        </div> --}}

        @if ($products->isEmpty())

            <div class="card border-warning bg-warning-subtle mx-5 mb-5">
                <div class="card-body text-center">
                    <h2 class="fw-semibold">No products found!</h2>
                    <h4 class="mt-3">Start adding new products by clicking the button "Add new product"</h3>
                </div>
            </div>
        
        @else
        
            <div class="container mt-5 mb-4">
                <div class="card text-center shadow-sm">
                    <div class="card-header ps-4 fs-2 fw-semibold text-start">
                        Current products
                    </div>
                    <div class="card-body">
                        <div class="table-responsive text-center mt-1">
                            <table class="table table-striped">

                                <thead>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Price</th>
                                    <th>Stock</th>
                                    <th>Monthly quota</th>
                                    <th>Until</th>
                                    <th></th>
                                </thead>

                                <tbody>
                                    @foreach ($products as $product)
                                        <tr class="table-row align-middle">
                                            <td>{{ $product->name }}</td>
                                            <td>{{ $product->description }}</td>
                                            <td>{{ $product->price }} €</td>
                                            <td>{{ $product->stock }}</td>
                                            <td>{{ $product->monthly_quota }} €</td>
                                            <td>{{ $product->duration }}</td>
                                            <td>
                                                <div class="d-flex justify-content-end">
                                                    <!-- EDIT -->
                                                    <a class="btn btn-active btn-sm" href="/products/{{ $product->id }}/edit" role="button">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="25" height="25" fill="currentColor" class="bi bi-trash-fill">
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                d="M20.8477 1.87868C19.6761 0.707109 17.7766 0.707105 16.605 1.87868L2.44744 16.0363C2.02864 16.4551 1.74317 16.9885 1.62702 17.5692L1.03995 20.5046C0.760062 21.904 1.9939 23.1379 3.39334 22.858L6.32868 22.2709C6.90945 22.1548 7.44285 21.8693 7.86165 21.4505L22.0192 7.29289C23.1908 6.12132 23.1908 4.22183 22.0192 3.05025L20.8477 1.87868ZM18.0192 3.29289C18.4098 2.90237 19.0429 2.90237 19.4335 3.29289L20.605 4.46447C20.9956 4.85499 20.9956 5.48815 20.605 5.87868L17.9334 8.55027L15.3477 5.96448L18.0192 3.29289ZM13.9334 7.3787L3.86165 17.4505C3.72205 17.5901 3.6269 17.7679 3.58818 17.9615L3.00111 20.8968L5.93645 20.3097C6.13004 20.271 6.30784 20.1759 6.44744 20.0363L16.5192 9.96448L13.9334 7.3787Z" fill="#0F0F0F">
                                                            </path>
                                                        </svg>
                                                    </a>
                                                    <!-- DELETE -->
                                                    <form method="POST" action="/products/{{$product->id}}">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-active btn-sm ms-3" type="submit" role="button">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="25" height="25" fill="currentColor" class="bi bi-trash-fill">
                                                                <path fill="red" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5M8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5m3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0"/>
                                                            </svg>
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>

        @endif

@endsection
