<?php

namespace App\Http\Controllers;

use App\Models\SaleProposal;
use App\Models\Client;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    /**
     * Propuestas de cliente específico
     */
    public function clientSaleProposals($req_client)
    {
        $clients = Client::all();
        foreach ($clients as $dbClient) {
            if ($dbClient->id == $req_client) {
                $client = $dbClient;
            }
        }

        $sale_proposals = DB::table('sale_proposals')
            ->where([
                ['client_id', '=', $req_client],
            ])->get();

        return view('proposals_module.index_client', [
            'saleProposals' => $sale_proposals,
            'client' => $client,
        ]);
    }

    public function specificSalesListing($state)
    {
        $sales = SaleProposal::all();
        $clients = Client::all();

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
        $products = Product::all();

        return view('proposals_module.create', [
            'client' => $client,
            'products' => $products,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Client $client)
    {
        $products = Product::all();
        foreach ($products as $product) {
            if ($product->id == $request->product) {
                $product->stock = $product->stock - $request->quantity;
                break;
            }
        }

        SaleProposal::create($request->all());
        return redirect('/clients/' . $client->client_id);
    }

    /**
     * Display the specified resource.
     */
    public function show($req_sale)
    {
        $sales = SaleProposal::all();
        $clients = Client::all();
        $products = Product::all();
        $saleProposal = '';
        $client = '';

        foreach ($sales as $dbSale) {
            if ($dbSale->id == $req_sale) {
                $saleProposal = $dbSale;
                foreach ($clients as $dbClient) {
                    if ($dbSale->client_id == $dbClient->id) {
                        $client = $dbClient;
                    }
                }
                break;
            }
        }

        return view('proposals_module.show', [
            'saleProposal' => $saleProposal,
            'client' => $client,
            'products' => $products,
        ]);
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
        return redirect('/clients' . '/' . $saleProposal->client_id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Client $client, SaleProposal $saleProposal)
    {
        $saleProposal->delete();
        return redirect('/clients' . '/' . $client->id);
    }
}
