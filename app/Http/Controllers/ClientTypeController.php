<?php

namespace App\Http\Controllers;

use App\Models\ClientType;
use Illuminate\Http\Request;

class ClientTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = ClientType::all();
        return view ('client_type.index', ['saleProposals' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('client_type.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        ClientType::create($request->all());
        return redirect('/client_types');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ClientType $clientType)
    {
        return view('client_type.edit', [
            'client_type' => $clientType 
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ClientType $clientType)
    {
        $clientType->update($request->all());
        return redirect('/client_types');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ClientType $clientType)
    {
        $clientType->delete();
        return redirect('/client_types');
    }
}
