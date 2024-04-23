@extends('master.navbar')

@section('main')

<div class="card m-5 px-4 py-2">
    <div class="card-header pt-0 bg-white">
        <div class="row">
            <div class="col-sm-10 ps-0 align-items-center">
                <span class="fs-1">Sale proposal :: {{ $saleProposal->id }}</span>
            </div>
            <div class="col-sm-2 pe-0 align-items-center align-middle">
                <div class="d-flex justify-content-end pt-2">
                    <!-- Edit btn -->
                    <a class="btn btn-active" href="/clients/{{ $client->id }}/saleProposals/{{ $saleProposal->id }}/edit" role="button">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="25" height="25" fill="currentColor" class="bi bi-trash-fill">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M20.8477 1.87868C19.6761 0.707109 17.7766 0.707105 16.605 1.87868L2.44744 16.0363C2.02864 16.4551 1.74317 16.9885 1.62702 17.5692L1.03995 20.5046C0.760062 21.904 1.9939 23.1379 3.39334 22.858L6.32868 22.2709C6.90945 22.1548 7.44285 21.8693 7.86165 21.4505L22.0192 7.29289C23.1908 6.12132 23.1908 4.22183 22.0192 3.05025L20.8477 1.87868ZM18.0192 3.29289C18.4098 2.90237 19.0429 2.90237 19.4335 3.29289L20.605 4.46447C20.9956 4.85499 20.9956 5.48815 20.605 5.87868L17.9334 8.55027L15.3477 5.96448L18.0192 3.29289ZM13.9334 7.3787L3.86165 17.4505C3.72205 17.5901 3.6269 17.7679 3.58818 17.9615L3.00111 20.8968L5.93645 20.3097C6.13004 20.271 6.30784 20.1759 6.44744 20.0363L16.5192 9.96448L13.9334 7.3787Z" fill="#0F0F0F">
                            </path>
                        </svg>
                    </a>
                    <!-- Delete btn -->
                    <form method="POST" action="/clients/{{ $client->id }}/saleProposals/{{ $saleProposal->id }}">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-active ms-2" type="submit" role="button">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="25" height="25" fill="currentColor" class="bi bi-trash-fill">
                                <path fill="red" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5M8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5m3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0"/>
                            </svg>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="card-body justify-content-start pt-3">

        <!--State-->
        <div class="row ps-4 mb-3 fs-4">
            <div class="col-8 ps-0">
                <div class="row">
                    <div class="col-sm-2">
                        <span class="fw-bold">Status:</span>
                    </div>
                    <div class="col-auto">
                        @switch($saleProposal->state)
                            @case("completed")
                                <button type="button" class="btn btn-success">{{ $saleProposal->state }}</button>
                                @break
                            @case("cancelled")
                                <button type="button" class="btn btn-danger">{{ $saleProposal->state }}</button>
                                @break
                            @default
                                <button type="button" class="btn btn-warning">{{ $saleProposal->state }}</button>
                                @break                        
                        @endswitch
                    </div>
                </div>
            </div>
        </div>

        <!--Client-->
        <div class="row ps-4 mb-3 fs-4">
            <div class="col-8 ps-0">
                <div class="row">
                    <div class="col-sm-2">
                        <span class="fw-bold">Client:</span>
                    </div>
                    <div class="col-auto">
                        <span>{{ $client->name }} {{ $client->surname }}</span>
                    </div>
                </div>
            </div>
        </div>

        <!--Creation-->
        <div class="row ps-4 mb-3 fs-4">
            <div class="col-8 ps-0">
                <div class="row">
                    <div class="col-sm-2">
                        <span class="fw-bold">Creation:</span>
                    </div>
                    <div class="col-auto">
                        {{ $saleProposal->created_at }}
                    </div>
                </div>
            </div>
        </div>

        <!--Update-->
        <div class="row ps-4 mb-3 fs-4">
            <div class="col-8 ps-0">
                <div class="row">
                    <div class="col-sm-2">
                        <span class="fw-bold">Update:</span>
                    </div>
                    <div class="col-auto">
                        {{ $saleProposal->updated_at }}
                    </div>
                </div>
            </div>
        </div>

        <!--Products-->
        <div class="row ps-4 mb-3 fs-4">
            <div class="col-8 ps-0">
                <div class="row">
                    <div class="col-sm-2">
                        <span class="fw-bold">Product:</span>
                    </div>
                    <div class="col-auto">
                        @foreach ($products as $product)
                            @if ($product->id == $saleProposal->product_id)
                                {{ $product->id }} - [{{ $product->name }}] - {{ $product->description }}
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <!--Quantity-->
        <div class="row ps-4 mb-3 fs-4">
            <div class="col-8 ps-0">
                <div class="row">
                    <div class="col-sm-2">
                        <span class="fw-bold">Quantity:</span>
                    </div>
                    <div class="col-auto">
                        {{ $saleProposal->product_quantity }}
                    </div>
                </div>
            </div>
        </div>

        <!--Total price-->
        <div class="row ps-4 mb-3 fs-4">
            <div class="col-8 ps-0">
                <div class="row">
                    <div class="col-sm-2">
                        <span class="fw-bold">Total price:</span>
                    </div>
                    <div class="col-auto">
                        <span>{{ $saleProposal->total_price }} €</span>
                    </div>
                </div>
            </div>
        </div>
    
        <!--Return btn-->
        <div class="row mt-4 border-top border-secondary-subtle">
            <div class="d-flex ps-3 pt-4 align-middle justify-content-center">
                <a type="button" class="btn btn-secondary" href="/clients/{{ $client->id }}/saleProposals">
                    Return to sale proposals
                </a>
            </div>
        </div>

    </div>
</div>

@endsection
