<?php

namespace App\Http\Controllers;

use App\Models\Freon;
use Illuminate\Http\Request;

class FreonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $freon =  Freon::all();
        return view ('freon.index',compact('freon'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('freon.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $freon = new Freon();
        $freon->jenis_freon = $request->jenis_freon;
        $freon->save();
        return redirect()->route('freon.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Freon  $freon
     * @return \Illuminate\Http\Response
     */
    public function show(Freon $freon)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Freon  $freon
     * @return \Illuminate\Http\Response
     */
    public function edit(Freon $freon)
    {
        return view('freon.edit',compact('freon'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Freon  $freon
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $freon = Freon::find($request->id);
        $freon->jenis_freon = $request->jenis_freon;
        $freon->save();
        return redirect()->route('freon.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Freon  $freon
     * @return \Illuminate\Http\Response
     */
    public function destroy(Freon $freon)
    {
        $freon = Freon::find($freon);
        $freon->delete();
        return redirect()->route('freon.index');
    }
}
