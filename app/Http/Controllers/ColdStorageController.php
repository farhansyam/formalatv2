<?php

namespace App\Http\Controllers;

use App\Models\History;
use App\Models\Equipment;
use App\Models\GambarAct;
use App\Models\GambarAct2;
use App\Models\ColdStorage;
use Illuminate\Http\Request;

class ColdStorageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


     public function create2($id)
     {

         return view('equipment.ColdStorage.create', compact('id'));
    
     }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // Mengumpulkan nilai dari tiga input menjadi satu string dengan pemisah koma untuk setiap pertanyaan

        $qData = [];
        for ($i = 1; $i <= 64; $i++) {
            $qData['q' . $i] = implode(',', $request->input('q' . $i));
        }
        $coldStorage = ColdStorage::create($qData);
        if ($request->file('gambar')) {
            foreach ($request->file('gambar') as $index => $gambar) {
                $gambarname = time() . '_' . $index . '.' . $gambar->getClientOriginalExtension();
                $gambar->move(public_path('gambar'), $gambarname);

                GambarAct::create([
                    'id_act' => $coldStorage->id,
                    'id_equipement' => $request->id_equipment,
                    'gambar' => $gambarname,
                    'keterangan' => $request->keterangangambar[$index],
                    'info' => $request->info[$index],
                ]);
            }
        }
        if ($request->file('gambar2')) {
            foreach ($request->file('gambar2') as $index2 => $gambar2) {
                $gambarname2 = time() . '_' . $index2 . '.' . $gambar2->getClientOriginalExtension();
                $gambar2->move(public_path('gambar2'), $gambarname2);

                GambarAct2::create([
                    'id_act' => $coldStorage->id,
                    'id_equipement' => $request->id_equipment,
                    'gambar' => $gambarname2,
                    'keterangan' => $request->keterangangambar2[$index],
                    'info' => $request->info2[$index],
                ]);
            }
        }
        // Pastikan $request->id_equipment tidak null sebelum menyimpan ke dalam tabel History
            $history = new History();
            $history->type = "Cold Storage"; // Sesuaikan dengan jenis equipment
            $history->id_act = $coldStorage->id;
            $history->id_equipment = $request->id;
            $history->id_user = "1"; // Gunakan ID user yang sedang login
            $history->save();
            return redirect()->route('equipment.show',$request->id)->with('success', 'Task list telah disimpan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ColdStorage  $coldStorage
     * @return \Illuminate\Http\Response
     */
    public function show(ColdStorage $coldStorage,$id)
    {
        $history = History::find($id);
        $coldStorage = ColdStorage::find($history->id_act);
        $gambar = GambarAct::where('id_act', $history->id_act)->get();
        $gambar2 = GambarAct2::where('id_act', $history->id_act)->get();
        return view('equipment.ColdStorage.show', compact('coldStorage','gambar','gambar2'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ColdStorage  $coldStorage
     * @return \Illuminate\Http\Response
     */
    public function edit(ColdStorage $coldStorage,$id)
    {
        $history = History::find($id);
        $gambar = GambarAct::where('id_act', $history->id_act)->get();
        $gambar2 = GambarAct2::where('id_act', $history->id_act)->get();
        $coldStorage = ColdStorage::find($history->id_act);
        $id = $history->id_equipment;
        return view('equipment.ColdStorage.edit', compact('coldStorage','id','gambar','gambar2'));
    }

    public function update(Request $request, $id)
    {
       // Temukan data ColdStorage berdasarkan ID yang sudah ada
       $coldStorage = ColdStorage::find($id);

        $qData = [];
        for ($i = 1; $i <= 64; $i++) {
            $qData['q' . $i] = implode(',', $request->input('q' . $i));
        }
    

    
   // Perbarui data ColdStorage dengan data yang baru
   $coldStorage->update($qData);
        if ($request->file('gambar')) {
            foreach ($request->file('gambar') as $index => $gambar) {
                $gambarname = time() . '_' . $index . '.' . $gambar->getClientOriginalExtension();
                $gambar->move(public_path('gambar'), $gambarname);

                GambarAct::create([
                    'id_act' => $coldStorage->id,
                    'id_equipement' => $request->id_equipment,
                    'gambar' => $gambarname,
                    'keterangan' => $request->keterangangambar[$index],
                    'info' => $request->info[$index],
                ]);
            }
        }
        if ($request->file('gambar2')) {
            foreach ($request->file('gambar2') as $index2 => $gambar2) {
                $gambarname2 = time() . '_' . $index2 . '.' . $gambar2->getClientOriginalExtension();
                $gambar2->move(public_path('gambar2'), $gambarname2);

                GambarAct2::create([
                    'id_act' => $coldStorage->id,
                    'id_equipement' => $request->id_equipment,
                    'gambar' => $gambarname2,
                    'keterangan' => $request->keterangangambar2[$index],
                    'info' => $request->info2[$index],
                ]);
            }
        }
        // Pastikan $request->id_equipment tidak null sebelum menyimpan ke dalam tabel History
        return redirect()->route('equipment.show',$request->id_h)->with('success', 'Task list telah disimpan.');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ColdStorage  $coldStorage
     * @return \Illuminate\Http\Response
     */
}