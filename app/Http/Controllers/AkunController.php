<?php

namespace App\Http\Controllers;

use App\Models\Akun;
use App\Models\Area;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AkunController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = Akun::all();
        return view('akun.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $customer = Customer::all();
        $area = Area::all();
        return view('akun.create', compact('area', 'customer'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->role == 'admin') {
            $akses = 4;
        } else {
            $akses = 3;
        }
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role_sipm' => $request->role,
            'akses' => $akses,
        ];

        // Tentukan penyimpanan customer atau site berdasarkan role
        if ($request->role === 'user') {
            $data['customer'] = $request->customer;
            $data['site'] = null; // Kosongkan site jika role adalah user
        } elseif ($request->role == 'admin') {
            $data['site'] = null; // Gabungkan array site menjadi string
            $data['customer'] = null; // Kosongkan customer jika role bukan user
        } else {
            $data['site'] = implode(',', $request->site); // Gabungkan array site menjadi string
            $data['customer'] = null; // Kosongkan customer jika role bukan user
        }

        // Simpan data ke dalam database
        Akun::create($data);

        return redirect()->route('akun.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Akun  $akun
     * @return \Illuminate\Http\Response
     */
    public function show(Akun $akun)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Akun  $akun
     * @return \Illuminate\Http\Response
     */
    public function edit(Akun $akun)
    {
        $customer = Customer::all();
        $area = Area::all();
        return view('akun.edit', compact('akun', 'customer', 'area'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Akun  $akun
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Validasi data


        // Temukan data akun berdasarkan ID
        $akun = Akun::findOrFail($id);

        // Tentukan akses berdasarkan role
        $akses = $request->role === 'admin' ? 4 : 3;

        // Persiapkan data untuk diupdate
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'role_sipm' => $request->role,
            'akses' => $akses,
        ];

        // Hash password jika diisi
        if ($request->filled('password')) {
            $data['password'] = Hash::make($request->password);
        }

        // Tentukan penyimpanan customer atau site berdasarkan role
        if ($request->role === 'customer') {
            $data['customer'] = $request->customer;
            $data['site'] = null; // Kosongkan site jika role adalah customer
        } elseif ($request->role === 'admin') {
            $data['customer'] = null; // Kosongkan customer jika role adalah admin
            $data['site'] = null; // Kosongkan site jika role adalah admin
        } else {
            $data['customer'] = null; // Kosongkan customer jika role bukan customer
            $data['site'] = implode(',', $request->site); // Gabungkan array site menjadi string
        }

        // Update data ke dalam database
        $akun->update($data);

        // Redirect ke halaman index
        return redirect()->route('akun.index')->with('success', 'Data akun berhasil diperbarui.');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Akun  $akun
     * @return \Illuminate\Http\Response
     */
    public function destroy(Akun $akun)
    {
        $akun->delete();
        return redirect()->route('akun.index');
    }
}
