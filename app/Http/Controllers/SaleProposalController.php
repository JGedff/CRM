<?php

namespace App\Http\Controllers;

use App\Models\SaleProposal;
use App\Models\Client;
use App\Models\Product;
use Illuminate\Http\Request;

class SaleProposalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sale_proposals = SaleProposal::all();
        $clients = Client::all();

        return view('proposals_module.index', [
            'saleProposals' => $sale_proposals,
            'clients' => $clients,
        ]);
    }

    public function allSaleProposals()
    {
        // Añadir cosas para mostrar la lista de saleProposals completa.
        $sales = SaleProposal::all();
        $clients = Client::all();

        /* foreach ($sales as $sale) {
            if ($sale->client_id == )
        } */
    }

    public function specificSalesListing($state)
    {
        $sales = SaleProposal::all();
        $clients = CLient::all();

        $sale_proposals = [];

        foreach ($sales as $sale) {
            if ($sale->state == $state) {
                $sale_proposals[] = $sale;
            }
        }

        return view('proposals_module.index', [
            'saleProposals' => $sale_proposals,
            'clients' => $clients,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Client $client)
    {
        $clients = Client::all();
        $products = Product::all();

        return view('proposals_module.create', [
            'clients' => $clients,
            'products' => $products,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Client $client)
    {        
        SaleProposal::create($request->all());
        return redirect('/clients/' . $client->client_id);



        $req = $request->all();
        $req['client_id'] = $client->id;

        $holiday = SaleProposal::create($req);
        return redirect('/clients/' . $client->client_id);
    }

    /**
     * Display the specified resource.
     */
    public function show(SaleProposal $saleProposal)
    {
        return view('proposals_module.show', ['saleProposal' => $saleProposal]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Client $client, SaleProposal $saleProposal)
    {
        return view('proposals_module.edit', [
            'client' => $client,
            'saleProposal' => $saleProposal
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Client $client, SaleProposal $saleProposal)
    {
        $req = $request->all();
        array_push($req, 'client_id');
        $req['client_id'] = $client->id;

        $saleProposal->update($request->all());
        return redirect('/clients/' . $saleProposal->client_id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Client $client, SaleProposal $saleProposal)
    {
        $saleProposal->delete();
        return redirect('/clients/' . $client->id);
    }
}
