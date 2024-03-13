<?php

namespace App\Http\Controllers;

use App\Models\Area;
use Illuminate\Http\Request;

class AreaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $area= Area::all();
        return view('area.index', compact('area'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return  view ('area.create');
    }

    public function store(Request $request)
    {
        $area= new Area();
        $area->area = $request->area;
        $area->site = $request->site;
        $area->save();
        return redirect()->route('area.index');
    }

    public function show(Area $area)
    {
        //
    }

    public function edit($area)
    {
        $area = Area::find($area);
        return view('area.edit', compact('area'));
    }

    /**
     * Update the specified resource in storage.
     *
     */
    public function update(Request $request)
    {
        $area = Area::find($request->id);
        $area->area = $request->area;
        $area->site = $request->site;
        $area->save();
        return redirect()->route('area.index');
    }

    public function destroy($area)
    {
        $area = Area::find($area);
        $area->delete();
        return redirect()->route('area.index');
    }
}
