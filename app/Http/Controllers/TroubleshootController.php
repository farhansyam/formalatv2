<?php

namespace App\Http\Controllers;

use Dompdf\Dompdf;
use App\Models\History;
use App\Models\Equipment;
use App\Models\GambarAct;
use App\Models\GambarAct2;
use Illuminate\Http\Request;
use App\Models\ServiceReport;
use App\Models\FormBeritaAcara;
use App\Http\Controllers\Controller;
use App\Models\ListKebutuhanBeritaAcara;

class TroubleshootController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $troubleshoot = ServiceReport::all();
        return view('servicereport.index', compact('troubleshoot'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $equipment = Equipment::find($id);
        
        return view('servicereport.create',compact('equipment'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());


        // Simpan data formberitaacara
        $formBeritaAcara = ServiceReport::create($request->all());

        // Lakukan multiple insert ke listkebutuhanberitaacara
        $deskripsilist = $request->input('deskripsilist');
        $modelpart = $request->input('modelpart');
        $qty = $request->input('qty');
        $keterangan = $request->input('keterangan');
        $type = "FormserviceReport";

        // Loop untuk menyimpan data listkebutuhanberitaacara
        foreach (range(0, count($deskripsilist) - 1) as $index) {
            // dd($deskripsilist[$index]);
            ListKebutuhanBeritaAcara::create([
                'id_beritaacara' => $formBeritaAcara->id,
                'deskripsilist' => $deskripsilist[$index], // Ubah menjadi 'deskripsi'
                'modelpart' => $modelpart[$index], // Ubah menjadi 'modelpart'
                'qty' => $qty[$index], // Ubah menjadi 'qty'
                'keterangan' => $keterangan[$index], // Ubah menjadi 'keterangan'
                'type' => $type, // Ubah menjadi 'keterangan'
            ]);
        }

        if ($request->file('gambar')) {
            foreach ($request->file('gambar') as $index => $gambar) {
                $gambarname = time() . '_' . $index . '.' . $gambar->getClientOriginalExtension();
                $gambar->move(public_path('gambar'), $gambarname);

                GambarAct::create([
                    'id_act' => $formBeritaAcara->id,
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
                    'id_act' => $formBeritaAcara->id,
                    'id_equipement' => $request->id_equipment,
                    'gambar' => $gambarname2,
                    'keterangan' => $request->keterangangambar2[$index],
                    'info' => $request->info2[$index],
                ]);
            }
        }
        $history = new History();
        $history->type = "Troubleshoot";
        $history->id_act = $formBeritaAcara->id;
        $history->id_equipment = $request->id_equipment;
        $history->id_user = auth()->user()->id;
        $history->save();
        $equipment = Equipment::find($request->id_equipment);
        $equipment->update_ts = date('Y-m-d');
        $equipment->save();
        return redirect()->route('equipment.show', $request->id_equipment)->with('success', 'Form Berita Acara telah disimpan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $service = ServiceReport::find($id);
        $list = ListKebutuhanBeritaAcara::where('type', 'FormserviceReport')->where('id_beritaacara', $id)->get();
        $gambar = GambarAct::where('id_act', $id)->get();
        $gambar2 = GambarAct2::where('id_act', $id)->get();
        return view('servicereport.show', compact('service', 'list','gambar','gambar2'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

        public function print($id)
    {
        $history = History::find($id);
        $ServiceReport = ServiceReport::find($id);
        $list = ListKebutuhanBeritaAcara::where('type', 'FormserviceReport')->where('id_beritaacara', $id)->get();
        $gambar = GambarAct::where('id_act', $id)->get();
        $gambar2 = GambarAct2::where('id_act', $id)->get();

        // Render view blade dengan gambar QR
        $pdfContent = view('pdf.troubleshoot', ['history' => $history, 'ServiceReport' =>$ServiceReport, 'list' =>$list, 'gambar' =>$gambar, 'gambar2' => $gambar2])->render();

        // Buat objek DOMPDF
        $dompdf = new Dompdf();

        // Muat konten PDF
        $dompdf->loadHtml($pdfContent);

        // Set ukuran dan orientasi dokumen
        $dompdf->setPaper('A4', 'landscape');

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
