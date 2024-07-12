<?php

namespace App\Http\Controllers;

use App\Models\History;
use App\Models\Equipment;
use App\Models\GambarAct;
use App\Models\GambarAct2;
use Illuminate\Http\Request;
use App\Models\AirCooledWaterChiller;

class AirCooledWaterChillerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function create2($id)
    {
        $equipmentId = Equipment::find($id); // Placeholder value
        
        return view('equipment.AirCooledWaterChiller.create', compact('id'));
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
// dd($request->q56);
        // Mengumpulkan nilai dari tiga input menjadi satu string dengan pemisah koma untuk setiap pertanyaan
        $qData = [];
        for ($i = 1; $i <= 60; $i++) {
            $qData['q' . $i] = implode(',', $request->input('q' . $i));
        }
    
        // Simpan data ke dalam model AirCooledWaterChiller
        $AirCooledWaterChiller = AirCooledWaterChiller::create($qData);
        if ($request->file('gambar')) {
            foreach ($request->file('gambar') as $index => $gambar) {
                $gambarname = time() . '_' . $index . '.' . $gambar->getClientOriginalExtension();
                $gambar->move(public_path('gambar'), $gambarname);

                GambarAct::create([
                    'id_act' => $AirCooledWaterChiller->id,
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
                    'id_act' => $AirCooledWaterChiller->id,
                    'id_equipement' => $request->id_equipment,
                    'gambar' => $gambarname2,
                    'keterangan' => $request->keterangangambar2[$index],
                    'info' => $request->info2[$index],
                ]);
            }
        }
        // Pastikan $request->id_equipment tidak null sebelum menyimpan ke dalam tabel History
            $history = new History();
            $history->type = "Air Cooled Water Chiller"; // Sesuaikan dengan jenis equipment
            $history->id_act = $AirCooledWaterChiller->id;
            $history->id_equipment = $request->id;
            $history->id_user = auth()->user()->id; // Gunakan ID user yang sedang login
            $history->save();
            return redirect()->route('equipment.show',$request->id)->with('success', 'Task list telah disimpan.');
    }

    
    

    
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AirCooledWaterChiller  $AirCooledWaterChiller
     * @return \Illuminate\Http\Response
     */
    public function show(AirCooledWaterChiller $AirCooledWaterChiller,$id)
    {
        $history = History::find($id);
        $acwc = AirCooledWaterChiller::find($history->id_act);
        $id = $history->id_equipment;
        return view('equipment.AirCooledWaterChiller.show', compact('acwc','id'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AirCooledWaterChiller  $AirCooledWaterChiller
     * @return \Illuminate\Http\Response
     */
    public function edit(AirCooledWaterChiller $AirCooledWaterChiller,$id)
    {
        $history = History::find($id);
        $acwc = AirCooledWaterChiller::find($history->id_act);
        $id = $history->id_equipment;
        $idh = $history->id;
        return view('equipment.AirCooledWaterChiller.edit', compact('acwc','id','idh'));
        
    }


    public function update(Request $request, $id)
    {
        $history = History::find($id);
        $acs = AirCooledWaterChiller::find($history->id_act);

        // Mengumpulkan nilai dari tiga input menjadi satu string dengan pemisah koma untuk setiap pertanyaan
        $qData = [];
        for ($i = 1; $i <= 60; $i++) {
            $qData['q' . $i] = implode(',', $request->input('q' . $i));
        }
        // Simpan data ke dalam model CoolingUnit
        $acs->update($qData); // Atau bisa juga menggunakan $acs->fill($qData) diikuti dengan $acs->save();

        // Simpan data
        $acs->save();
        if ($request->file('gambar')) {
            foreach ($request->file('gambar') as $index => $gambar) {
                $gambarname = time() . '_' . $index . '.' . $gambar->getClientOriginalExtension();
                $gambar->move(public_path('gambar'), $gambarname);

                GambarAct::create([
                    'id_act' => $acs->id,
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
                    'id_act' => $acs->id,
                    'id_equipement' => $request->id_equipment,
                    'gambar' => $gambarname2,
                    'keterangan' => $request->keterangangambar2[$index],
                    'info' => $request->info2[$index],
                ]);
            }
        }
        return redirect()->route('acwc.show', $history->id);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AirCooledWaterChiller  $AirCooledWaterChiller
     * @return \Illuminate\Http\Response
     */
}