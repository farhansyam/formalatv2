<?php

namespace App\Http\Controllers;

use Dompdf\Dompdf;
use App\Models\AUHP;
use App\Models\History;
use App\Models\Equipment;
use App\Models\GambarAct;
use App\Models\GambarAct2;
use Illuminate\Http\Request;

class AUHPController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function create2($id)
    {
        $equipmentId = Equipment::find($id); // Placeholder value
        
        return view('equipment.AUHP.create', compact('id'));
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
        ];
    
        // Simpan data ke dalam model AUHP
        $AUHP = AUHP::create($qData);
        if ($request->file('gambar')) {
            foreach ($request->file('gambar') as $index => $gambar) {
                $gambarname = time() . '_' . $index . '.' . $gambar->getClientOriginalExtension();
                $gambar->move(public_path('gambar'), $gambarname);

                GambarAct::create([
                    'id_act' => $AUHP->id,
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
                    'id_act' => $AUHP->id,
                    'id_equipement' => $request->id_equipment,
                    'gambar' => $gambarname2,
                    'keterangan' => $request->keterangangambar2[$index],
                    'info' => $request->info2[$index],
                ]);
            }
        }
        // Pastikan $request->id_equipment tidak null sebelum menyimpan ke dalam tabel History
            $history = new History();
            $history->type = "AUHP"; // Sesuaikan dengan jenis equipment
            $history->id_act = $AUHP->id;
            $history->id_equipment = $request->id;
            $history->id_user = auth()->user()->id; // Gunakan ID user yang sedang login
            $history->save();
            return redirect()->route('equipment.show',$request->id)->with('success', 'Task list telah disimpan.');
    }

    
    

    
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AUHP  $AUHP
     * @return \Illuminate\Http\Response
     */
    public function show(AUHP $AUHP,$id)
    {
        $history = History::find($id);
        $auhp = AUHP::findOrFail($history->id_act); // Sesuaikan dengan model AUHP
        return view('equipment.AUHP.show', compact('auhp','id'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AUHP  $AUHP
     * @return \Illuminate\Http\Response
     */
    public function edit(AUHP $AUHP,$id)
    {
        $history = History::find($id);
        $auhp = AUHP::findOrFail($history->id_act); // Sesuaikan dengan model AUHP
        $id = $history->id_equipment;
        return view('equipment.AUHP.edit', compact('auhp','id'));
    }

    function update(Request $request,$id){
        $acs = AUHP::find($id);

        // Mengumpulkan nilai dari tiga input menjadi satu string dengan pemisah koma untuk setiap pertanyaan
        $qData = [];
        for ($i = 1; $i <= 51; $i++) {
            $qData['q' . $i] = implode(',', $request->input('q' . $i));
        }
        // Simpan data ke dalam model CoolingUnit
        $acs->update($qData); 

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
        return redirect()->route('equipment.show', $request->id)->with('success', 'Task list telah disimpan.');

    }

    public function print($id)
    {
        $history = History::find($id);
        $equipment = Equipment::find($history->id_equipment);
        $ahup = AUHP::find($history->id_act);
        $gambar = GambarAct::where('id_act', $id)->get();
        $gambar2 = GambarAct2::where('id_act', $id)->get();

        // Render view blade dengan gambar QR
        $pdfContent = view('pdf.auhp', ['history' => $history, 'ahup' => $ahup, 'gambar' => $gambar, 'gambar2' => $gambar2, 'equipment' => $equipment])->render();

        // Buat objek DOMPDF
        $dompdf = new Dompdf();

        // Muat konten PDF
        $dompdf->loadHtml($pdfContent);

        // Set ukuran dan orientasi dokumen
        $dompdf->setPaper('A4', 'potrait');

        // Render PDF
        $dompdf->render();

        // Menghasilkan nama file unik
        $filename = 'equipment_qrcode_' . time() . '.pdf';

        // Simpan PDF ke server sementara
        // Simpan PDF ke folder public
        $pdfFilePath = public_path($filename);
        file_put_contents($pdfFilePath, $dompdf->output());

        // Tautan untuk membuka pratinjau PDF di tab baru
        $previewLink = route('pdf.preview', ['filename' => $filename]);

        // Redirect ke pratinjau PDF
        return redirect()->away($previewLink);
    }
}