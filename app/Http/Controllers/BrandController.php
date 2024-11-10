<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brand = Brand::all();
        return view('brand.index', compact('brand'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return  view('brand.create');
    }

    public function store(Request $request)
    {
        $brand = new brand();
        $brand->brand = $request->brand;
        $brand->save();
        return redirect()->route('brand.index');
    }

    public function show(brand $brand)
    {
        //
    }

    public function edit($brand)
    {
        $brand = Brand::find($brand);
        return view('brand.edit', compact('brand'));
    }

    /**
     * Update the specified resource in storage.
     *
     */
    public function update(Request $request)
    {
        $brand = Brand::find($request->id);
        $brand->brand = $request->brand;
        $brand->save();
        return redirect()->route('brand.index');
    }

    public function destroy($brand)
    {
        $brand = Brand::find($brand);
        $brand->delete();
        return redirect()->route('brand.index');
    }
}
