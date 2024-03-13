<?php

namespace App\Http\Controllers;

use App\Models\Reguler;
use Illuminate\Http\Request;

class RegulerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reguler = Reguler::all();
        return view('reguler.index', compact('reguler'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return  view('reguler.create');
    }

    public function store(Request $request)
    {
        $reguler = new Reguler();
        $reguler->reguler = $request->reguler;
        $reguler->type = $request->type;
        $reguler->value = $request->value;
        $reguler->save();
        return redirect()->route('reguler.index');
    }

    public function show(reguler $reguler)
    {
        //
    }

    public function edit($reguler)
    {
        $reguler = Reguler::find($reguler);
        return view('reguler.edit', compact('reguler'));
    }

    /**
     * Update the specified resource in storage.
     *
     */
    public function update(Request $request)
    {
        $reguler = Reguler::find($request->id);
        $reguler->reguler = $request->reguler;
        $reguler->type = $request->type;
        $reguler->value = $request->value;
        $reguler->save();
        return redirect()->route('reguler.index');
    }

    public function destroy($reguler)
    {
        $reguler = Reguler::find($reguler);
        $reguler->delete();
        return redirect()->route('reguler.index');
    }
}
