<?php

namespace App\Http\Controllers;

use App\Models\Kapasitas;
use Illuminate\Http\Request;

class KapasitasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kapasitas = Kapasitas::all();
        return view('kapasitas.index', compact('kapasitas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
                return view('kapasitas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kapasitas = new Kapasitas();
        $kapasitas->kapasitas = $request->kapasitas;
        $kapasitas->satuan = $request->satuan;
        $kapasitas->save();
        return redirect()->route('kapasitas.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kapasitas  $kapasitas
     * @return \Illuminate\Http\Response
     */
    public function show(Kapasitas $kapasitas)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kapasitas  $kapasitas
     * @return \Illuminate\Http\Response
     */
    public function edit($kapasitas)
    {
        $kapasitas = Kapasitas::find($kapasitas);
        return view('kapasitas.edit', compact('kapasitas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kapasitas  $kapasitas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $kapasitas = Kapasitas::find($request->id);
        $kapasitas->kapasitas = $request->kapasitas;
        $kapasitas->satuan = $request->satuan;
        $kapasitas->save();
        return redirect()->route('kapasitas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kapasitas  $kapasitas
     * @return \Illuminate\Http\Response
     */
    public function destroy($kapasitas)
    {
        $kapasitas = Kapasitas::find($kapasitas);
        $kapasitas->delete();
        return redirect()->route('kapasitas.index');
    }
}
