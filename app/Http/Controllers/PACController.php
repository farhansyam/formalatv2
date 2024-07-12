<?php

namespace App\Http\Controllers;

use App\Models\PAC;
use App\Models\History;
use App\Models\Equipment;
use App\Models\GambarAct;
use App\Models\GambarAct2;
use Illuminate\Http\Request;

class PACController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


     public function create2($id)
    {
        $equipmentId = Equipment::find($id); // Placeholder value
        
        return view('equipment.PAC.create', compact('id'));
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
        for ($i = 1; $i <= 77; $i++) {
            $qData['q' . $i] = implode(',', $request->input('q' . $i));
        }
    
        // Simpan data ke dalam model PAC
        $PAC = PAC::create($qData);
        if ($request->file('gambar')) {
            foreach ($request->file('gambar') as $index => $gambar) {
                $gambarname = time() . '_' . $index . '.' . $gambar->getClientOriginalExtension();
                $gambar->move(public_path('gambar'), $gambarname);

                GambarAct::create([
                    'id_act' => $PAC->id,
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
                    'id_act' => $PAC->id,
                    'id_equipement' => $request->id_equipment,
                    'gambar' => $gambarname2,
                    'keterangan' => $request->keterangangambar2[$index],
                    'info' => $request->info2[$index],
                ]);
            }
        }
        // Pastikan $request->id_equipment tidak null sebelum menyimpan ke dalam tabel History
            $history = new History();
            $history->type = "PAC"; // Sesuaikan dengan jenis equipment
            $history->id_act = $PAC->id;
            $history->id_equipment = $request->id;
            $history->id_user = auth()->user()->id; // Gunakan ID user yang sedang login
            $history->save();
            return redirect()->route('equipment.show',$request->id)->with('success', 'Task list telah disimpan.');
    }

    
    

    
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PAC  $PAC
     * @return \Illuminate\Http\Response
     */
    public function show(PAC $PAC,$id)
    {
        $history = History::find($id);
        $PAC = PAC::findOrFail($history->id_act); // Sesuaikan dengan model PAC
        return view('equipment.PAC.show', compact('PAC','id'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PAC  $PAC
     * @return \Illuminate\Http\Response
     */
    public function edit(PAC $PAC,$id)
    {
        $history = History::find($id);
        $PAC = PAC::findOrFail($history->id_act); // Sesuaikan dengan model PAC
        $id = $history->id_equipment;
        return view('equipment.PAC.edit', compact('PAC','id'));
        
    }

    function update(Request $request,$id){

        $qData = [];
        for ($i = 1; $i <= 77; $i++) {
            $qData['q' . $i] = implode(',', $request->input('q' . $i));
        }

        $pac = PAC::find($id);
        $pac->update($qData);
        if ($request->file('gambar')) {
            foreach ($request->file('gambar') as $index => $gambar) {
                $gambarname = time() . '_' . $index . '.' . $gambar->getClientOriginalExtension();
                $gambar->move(public_path('gambar'), $gambarname);

                GambarAct::create([
                    'id_act' => $pac->id,
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
                    'id_act' => $pac->id,
                    'id_equipement' => $request->id_equipment,
                    'gambar' => $gambarname2,
                    'keterangan' => $request->keterangangambar2[$index],
                    'info' => $request->info2[$index],
                ]);
            }
        }
        $pac->save();
        return redirect()->route('equipment.show', $request->id_equipment)->with('success', 'Task list telah disimpan.');



    }

    


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PAC  $PAC
     * @return \Illuminate\Http\Response
     */
}