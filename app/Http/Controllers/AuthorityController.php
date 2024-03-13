<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\authority;
use Illuminate\Http\Request;

class AuthorityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $authority = authority::all();
        return view('authority.index' ,compact('authority'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::where('role_id',2)->get();
        return view('authority.create',compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $authority = new authority();
        $authority->email = $request->email;
        $user = User::where('email',$request->email)->first();
        $authority->id_user = $user->id;

        $user->akses = 3;
        $authority->save();
        $user->save();

        return redirect()->route('authority.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\authority  $authority
     * @return \Illuminate\Http\Response
     */
    public function show(authority $authority)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\authority  $authority
     * @return \Illuminate\Http\Response
     */
    public function edit(authority $authority)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\authority  $authority
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, authority $authority)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\authority  $authority
     * @return \Illuminate\Http\Response
     */
    public function destroy(authority $authority)
    {
        $user = User::find($authority->id_user);
        $user->akses = null;
        $user->save();
        $authority->delete();
        return back();
    }
}
