<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Mostrar todos los clientes
     */
    public function index()
    {
        $clients = Client::all();
        return view('client_module.index', ['clients' => $clients]);
    }
    

    /**
     * Formulario de creación nuevo cliente
     */
    public function create()
    {
        return view('client_module.create');
    }

    /**
     * Almacenar nuevo cliente en BD
     */
    public function store(Request $request)
    {
        Client::create($request->all());
        return redirect('/clients');
    }

    /**
     * Mostrar cliente específico
     */
    public function show(Client $client)
    {
        return view('client_module.show', ['client' => $client]);
    }

    /**
     * Formulario para editar cliente específico
     */
    public function edit(Client $client)
    {
        return view('client_module.edit', ['client' => $client]);
    }

    /**
     * Almacenar cambios del cliente en BD
     */
    public function update(Request $request, Client $client)
    {
        $client->update($request->all());
        return redirect('/clients');
    }

    /**
     * Eliminar cliente específico
     */
    public function destroy(Client $client)
    {
        $client->delete();
        return redirect('/clients');
    }
}
