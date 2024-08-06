<?php

namespace App\Http\Controllers;

use Dompdf\Dompdf;
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
            $qData['q' . $i] = implode(',', $request->input('q' . $i, []));
        }

        $data = [
            'tanggal' => $request->input('tanggal'),
            'rekomendasi' => $request->input('rekomendasi'),
            'status' => $request->input('status'),
            'temuan' => $request->input('temuan'),
            'enginer_list' => $request->input('enginer_list'),
            'start' => $request->input('start'),
            'end' => $request->input('end'),
            'intensive' => $request->input('intensive')
        ];

        // Merging $qData with $data
        $mergedData = array_merge($data,
            $qData
        );

        // Simpan data ke dalam model PAC
        $PAC = PAC::create($mergedData);
 if ($request->file('gambar')) {
            foreach ($request->file('gambar') as $index => $gambar) {
                $gambarname = time() . '_' . $index . '.' . $gambar->getClientOriginalExtension();
                $gambar->move(public_path('gambar'), $gambarname);

                GambarAct::create([
                    'id_act' => $PAC->id,
                    'id_equipement' => $request->id,
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
                    'id_equipement' => $request->id,
                    'gambar' => $gambarname2,
                    'keterangan' => $request->keterangangambar2[$index2],
                    'info' => $request->info2[$index2],
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
        $gambar = GambarAct::where('id_act', $history->id_act)->where('id_equipement', $history->id_equipment)->get();
        $gambar2 = GambarAct2::where('id_act', $history->id_act)->where('id_equipement', $history->id_equipment)->get();
        return view('equipment.PAC.show', compact('PAC','id','gambar','gambar2'));
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
        $gambar = GambarAct::where('id_act', $history->id_act)->where('id_equipement', $history->id_equipment)->get();
        $gambar2 = GambarAct2::where('id_act', $history->id_act)->where('id_equipement', $history->id_equipment)->get();
        return view('equipment.PAC.edit', compact('PAC', 'id', 'gambar', 'gambar2'));
        
    }

    function update(Request $request,$id){

        $qData = [];
        for ($i = 1; $i <= 77; $i++) {
            $qData['q' . $i] = implode(',', $request->input('q' . $i));
        }

        $pac = PAC::find($id);
        $qData = [];
        for ($i = 1; $i <= 77; $i++) {
            $qData['q' . $i] = implode(',', $request->input('q' . $i, []));
        }

        $data = [
            'tanggal' => $request->input('tanggal'),
            'rekomendasi' => $request->input('rekomendasi'),
            'status' => $request->input('status'),
            'temuan' => $request->input('temuan'),
            'enginer_list' => $request->input('enginer_list'),
            'start' => $request->input('start'),
            'end' => $request->input('end'),
            'intensive' => $request->input('intensive')
        ];

        // Merging $qData with $data
        $mergedData = array_merge($data, $qData);

        // Simpan data ke dalam model PAC

        $pac->update($mergedData);
        if ($request->file('gambar')) {
            foreach ($request->file('gambar') as $index => $gambar) {
                $gambarname = time() . '_' . $index . '.' . $gambar->getClientOriginalExtension();
                $gambar->move(public_path('gambar'), $gambarname);

                GambarAct::create([
                    'id_act' => $pac->id,
                    'id_equipement' => $request->id,
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
                    'id_equipement' => $request->id,
                    'gambar' => $gambarname2,
                    'keterangan' => $request->keterangangambar2[$index],
                    'info' => $request->info2[$index],
                ]);
            }
        }
        $pac->save();
        return redirect()->route('equipment.show', $request->id_equipment)->with('success', 'Task list telah disimpan.');



    }

    public function print($id)
    {
        $history = History::find($id);
        $equipment = Equipment::find($history->id_equipment);
        $ct = PAC::find($history->id_act);
        $gambar = GambarAct::where('id_act', $history->id_act)->where('id_equipement', $history->id_equipment)->get();
        $gambar2 = GambarAct2::where('id_act', $history->id_act)->where('id_equipement', $history->id_equipment)->get();

        // Render view blade dengan gambar QR
        $pdfContent = view('pdf.pac', ['history' => $history, 'ct' => $ct, 'gambar' => $gambar, 'gambar2' => $gambar2, 'equipment' => $equipment])->render();

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