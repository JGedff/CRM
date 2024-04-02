<?php

namespace App\Http\Controllers;

use App\Models\SaleProposal;
use App\Models\Client;
use Illuminate\Http\Request;

class SaleProposalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = SaleProposal::all();
        return view ('proposals_module.index', ['saleProposals' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Client $client)
    {
        return view('proposal_module.create', ['client' => $client]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Client $client)
    {
        $req = $request->all();
        $req['client_id'] = $client->id;

        $holiday = SaleProposal::create($req);
        return redirect ('/clients/' . $client->client_id);
    }

    /**
     * Display the specified resource.
     */
    public function show(SaleProposal $saleProposal)
    {
        return view('proposal_module.show', ['saleProposal' => $saleProposal]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Client $client, SaleProposal $saleProposal)
    {
        return view('proposal_module', [
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
