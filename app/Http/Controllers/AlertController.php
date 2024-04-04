<?php

namespace App\Http\Controllers;

use App\Models\Alert;
use Illuminate\Http\Request;

class AlertController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Alert::all();
        return view('alert_module.index', ['alerts' => $data]);
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('alert_module.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Alert::create($request->all());
        return redirect('/alerts');
    }

    /**
     * Display the specified resource.
     */
    public function show(Alert $alert)
    {
        return view('alert_module.show', ['alert' => $alert]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Alert $alert)
    {
        return view('alert_module.edit', [
            'alert' => $alert 
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Alert $alert)
    {
        $alert->update($request->all());
        return redirect('/alerts');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Alert $alert)
    {
        $alert->delete();
        return redirect('/alerts');
    }
}
