<?php

namespace App\Http\Controllers;

use App\Models\Equipment;
use App\Models\History;
use App\Models\Dehumidifier;
use Illuminate\Http\Request;

class DehumidifierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function create2($id)
    {
        
        return view('equipment.Dehumidifier.create', compact('id'));
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
    
        $qData = [
            'q1' => implode(',', $request->input('q1')),

            'q2' => implode(',', $request->input('q2')),

            'q3' => implode(',', $request->input('q3')),

            'q4' => implode(',', $request->input('q4')),

            'q5' => implode(',', $request->input('q5')),

            'q6' => implode(',', $request->input('q6')),

            'q7' => implode(',', $request->input('q7')),

            'q8' => implode(',', $request->input('q8')),

            'q9' => implode(',', $request->input('q9')),

            'q10' => implode(',', $request->input('q10')),

            'q11' => implode(',', $request->input('q11')),

            'q12' => implode(',', $request->input('q12')),

            'q13' => implode(',', $request->input('q13')),

            'q14' => implode(',', $request->input('q14')),

            'q15' => implode(',', $request->input('q15')),

            'q16' => implode(',', $request->input('q16')),

            'q17' => implode(',', $request->input('q17')),

            'q18' => implode(',', $request->input('q18')),

            'q19' => implode(',', $request->input('q19')),

            'q20' => implode(',', $request->input('q20')),#

            'q21' => implode(',', $request->input('q21')),

            'q22' => implode(',', $request->input('q22')),

            'q23' => implode(',', $request->input('q23')),

            'q24' => implode(',', $request->input('q24')),

            'q25' => implode(',', $request->input('q25')),

            'q26' => implode(',', $request->input('q26')),

            'q27' => implode(',', $request->input('q27')),

            'q28' => implode(',', $request->input('q28')),

            'q29' => implode(',', $request->input('q29')),

            'q30' => implode(',', $request->input('q30')),

            'q31' => implode(',', $request->input('q31')),#

            'q32' => implode(',', $request->input('q32')),

            'q33' => implode(',', $request->input('q33')),

            'q34' => implode(',', $request->input('q34')),

            'q35' => implode(',', $request->input('q35')),

            'q36' => implode(',', $request->input('q36')),

            'q37' => implode(',', $request->input('q37')),

            'q38' => implode(',', $request->input('q38')),

            'q39' => implode(',', $request->input('q39')),

            'q40' => implode(',', $request->input('q40')),

            'q41' => implode(',', $request->input('q41')),

            'q42' => implode(',', $request->input('q42')),

            'q43' => implode(',', $request->input('q43')),

            'q44' => implode(',', $request->input('q44')),

            'q45' => implode(',', $request->input('q45')),

            'q46' => implode(',', $request->input('q46')),

            'q47' => implode(',', $request->input('q47')),

            'q48' => implode(',', $request->input('q48')),

            'q49' => implode(',', $request->input('q49')),

            'q50' => implode(',', $request->input('q50')),

            'q51' => implode(',', $request->input('q51')),
            
            'q52' => implode(',', $request->input('q52')),
        ];
    
        // Simpan data ke dalam model Dehumidifier
        $Dehumidifier = Dehumidifier::create($qData);

        // Pastikan $request->id_equipment tidak null sebelum menyimpan ke dalam tabel History
            $history = new History();
            $history->type = "Dehumidifier"; // Sesuaikan dengan jenis equipment
            $history->id_act = $Dehumidifier->id;
            $history->id_equipment = $request->id;
            $history->id_user = auth()->user()->id; // Gunakan ID user yang sedang login
            $history->save();
            return redirect()->route('equipment.show',$request->id)->with('success', 'Task list telah disimpan.');
    }

    
    

    
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dehumidifier  $Dehumidifier
     * @return \Illuminate\Http\Response
     */
    public function show(Dehumidifier $Dehumidifier,$id)
    {
        $history = History::find($id);
        $dehumidifier = Dehumidifier::findOrFail($history->id_act); // 
        return view('equipment.Dehumidifier.show', compact('dehumidifier','id'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dehumidifier  $Dehumidifier
     * @return \Illuminate\Http\Response
     */
    public function edit(Dehumidifier $Dehumidifier,$id)
    {
        $history = History::find($id);
        $dehumidifier = Dehumidifier::findOrFail($history->id_act); // 
        $id = $history->id_equipment;
        return view('equipment.Dehumidifier.edit', compact('dehumidifier','id'));
        
    }

    public function update(Request $request, $id)
    {

        // Mengumpulkan nilai dari tiga input menjadi satu string dengan pemisah koma untuk setiap pertanyaan
        $dehumidifier = Dehumidifier::find($id);

        $qData = [
            'q1' => implode(',', $request->input('q1')),

            'q2' => implode(',', $request->input('q2')),

            'q3' => implode(',', $request->input('q3')),

            'q4' => implode(',', $request->input('q4')),

            'q5' => implode(',', $request->input('q5')),

            'q6' => implode(',', $request->input('q6')),

            'q7' => implode(',', $request->input('q7')),

            'q8' => implode(',', $request->input('q8')),

            'q9' => implode(',', $request->input('q9')),

            'q10' => implode(',', $request->input('q10')),

            'q11' => implode(',', $request->input('q11')),

            'q12' => implode(',', $request->input('q12')),

            'q13' => implode(',', $request->input('q13')),

            'q14' => implode(',', $request->input('q14')),

            'q15' => implode(',', $request->input('q15')),

            'q16' => implode(',', $request->input('q16')),

            'q17' => implode(',', $request->input('q17')),

            'q18' => implode(',', $request->input('q18')),

            'q19' => implode(',', $request->input('q19')),

            'q20' => implode(',', $request->input('q20')), #

            'q21' => implode(',', $request->input('q21')),

            'q22' => implode(',', $request->input('q22')),

            'q23' => implode(',', $request->input('q23')),

            'q24' => implode(',', $request->input('q24')),

            'q25' => implode(',', $request->input('q25')),

            'q26' => implode(',', $request->input('q26')),

            'q27' => implode(',', $request->input('q27')),

            'q28' => implode(',', $request->input('q28')),

            'q29' => implode(',', $request->input('q29')),

            'q30' => implode(',', $request->input('q30')),

            'q31' => implode(',', $request->input('q31')), #

            'q32' => implode(',', $request->input('q32')),

            'q33' => implode(',', $request->input('q33')),

            'q34' => implode(',', $request->input('q34')),

            'q35' => implode(',', $request->input('q35')),

            'q36' => implode(',', $request->input('q36')),

            'q37' => implode(',', $request->input('q37')),

            'q38' => implode(',', $request->input('q38')),

            'q39' => implode(',', $request->input('q39')),

            'q40' => implode(',', $request->input('q40')),

            'q41' => implode(',', $request->input('q41')),

            'q42' => implode(',', $request->input('q42')),

            'q43' => implode(',', $request->input('q43')),

            'q44' => implode(',', $request->input('q44')),

            'q45' => implode(',', $request->input('q45')),

            'q46' => implode(',', $request->input('q46')),

            'q47' => implode(',', $request->input('q47')),

            'q48' => implode(',', $request->input('q48')),

            'q49' => implode(',', $request->input('q49')),

            'q50' => implode(',', $request->input('q50')),

            'q51' => implode(',', $request->input('q51')),

            'q52' => implode(',', $request->input('q52')),

        ];
        $dehumidifier->update($qData);

        return redirect()->route('equipment.show', $request->id)->with('success', 'Task list telah disimpan.');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dehumidifier  $Dehumidifier
     * @return \Illuminate\Http\Response
     */
}