@extends('master.navbar')

@section('main')

    <div class="row justify-content-center px-5">

        @if (empty($saleProposals) || $saleProposals->isEmpty())
            <div class="card border-warning bg-warning-subtle mx-5 mb-5">
                <div class="card-body text-center justify-content-center align-items-center">
                    <h2 class="fw-semibold">No sale proposals found!</h2>
                    <div class="d-flex text-center justify-content-center align-items-center">
                        <h4 class="mt-3">Start creating new sale proposals through your Clients.</h4>
                    </div>
                </div>
            </div>
        @else        
            <div class="container mt-5 mb-4">
                <div class="card text-center shadow-sm">
                    <div class="card-header ps-4 fs-2 fw-semibold text-start">
                        <div class="row">
                            <div class="col-auto">
                                {{ $client->name }} {{ $client->surname }} ({{ $client->id }})
                            </div>
                            <div class="col-auto">
                                --
                            </div>
                            <div class="col-auto">
                                Sale proposals
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive text-center mt-1">
                            <table class="table table-striped">

                                <thead>
                                    <th>Sale ID</th>
                                    <th>Creation date</th>
                                    <th>Total products</th>
                                    <th>Total price</th>
                                    <th>Sale state</th>
                                </thead>

                                <tbody>
                                    @foreach ($saleProposals as $sale)
                                        <tr class="table-row align-middle" data-href="/clients/{{ $client->id }}/saleProposals/{{ $sale->id }}" style="cursor: pointer;">
                                            <td>{{ $sale->id }}</td>
                                            <td>{{ $sale->created_at }}</td>
                                            <td>{{ $sale->product_quantity }}</td>
                                            <td>{{ $sale->total_price }} €</td>
                                            <td>
                                                @switch($sale->state)
                                                    @case("completed")
                                                        <button type="button" class="btn btn-success btn-sm">{{ $sale->state }}</button>
                                                        @break
                                                    @case("cancelled")
                                                        <button type="button" class="btn btn-danger btn-sm">{{ $sale->state }}</button>
                                                        @break
                                                    @default
                                                        <button type="button" class="btn btn-warning btn-sm">{{ $sale->state }}</button>
                                                        @break
                                                        
                                                @endswitch
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

@section('js')
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var tableRows = document.querySelectorAll(".table-row");
    
            tableRows.forEach(function(row) {
                row.addEventListener("click", function() {
                    window.location.href = row.getAttribute("data-href");
                });
            });
        });
    </script>
@endsection
