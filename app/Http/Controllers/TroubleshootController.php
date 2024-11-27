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

        return view('servicereport.create', compact('equipment'));
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
        // dd($request);
        $formBeritaAcara = ServiceReport::create([
            $request->all(),
            'created_by' => auth()->user()->name,
            'date_completed' => $request->status == 'Completed' ? date('Y-m-d') : null
        ]);


        if (request()->has('ids')) {
            $items = ListKebutuhanBeritaAcara::where(
                'id',
                request()->ids
            )->get();

            foreach ($items as $item) {
                $item->status = $formBeritaAcara->id;
                $item->save();
            }
        }

        // Lakukan multiple insert ke listkebutuhanberitaacara
        $deskripsilist = $request->input('deskripsilist');
        $modelpart = $request->input('modelpart');
        $qty = $request->input('qty');
        $keterangan = $request->input('keterangan');
        $type = "FormserviceReport";

        // Pastikan bahwa $deskripsilist adalah array dan memiliki nilai
        if (is_array($deskripsilist) && count($deskripsilist) > 0) {
            // Loop untuk menyimpan data listkebutuhanberitaacara
            foreach (range(0, count($deskripsilist) - 1) as $index) {
                // Hanya simpan jika semua field terkait index ini memiliki nilai
                if (!empty($deskripsilist[$index]) || !empty($modelpart[$index]) || !empty($qty[$index]) || !empty($keterangan[$index])) {
                    ListKebutuhanBeritaAcara::create([
                        'id_beritaacara' => $formBeritaAcara->id,
                        'deskripsilist' => $deskripsilist[$index],
                        'modelpart' => $modelpart[$index],
                        'qty' => $qty[$index],
                        'keterangan' => $keterangan[$index],
                        'type' => $type,
                        'status' => $request->status,
                        'priority' => $request->defect_level,
                    ]);
                }
            }
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
                    'type' => 'TS',
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
                    'type' => 'TS',

                ]);
            }
        }
        $history = new History();
        $history->type2 = "TS2"; // Sesuaikan dengan jenis equipment
        $history->type = "TS";
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
        $history = History::find($id);
        $service = ServiceReport::find($history->id_act);
        $list = ListKebutuhanBeritaAcara::where('type', 'FormserviceReport')->where('id_beritaacara', $history->id_act)->get();
        $gambar = GambarAct::where('id_act', $history->id_act)->where('type', 'TS')->get();
        $gambar2 = GambarAct2::where('id_act', $history->id_act)->where('type', 'TS')->get();

        return view('servicereport.show', compact('service', 'list', 'gambar', 'gambar2'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $history = History::find($id);
        $service = ServiceReport::find($history->id_act);

        $list = ListKebutuhanBeritaAcara::where('type', 'FormserviceReport')->where('id_beritaacara', $history->id_act)->get();
        $gambar = GambarAct::where('id_act', $history->id_act)->where('type', 'TS')->get();
        $gambar2 = GambarAct2::where('id_act', $history->id_act)->where('type', 'TS')->get();

        return view('servicereport.edit', compact('service', 'list', 'gambar', 'gambar2', 'history'));
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
        // Validasi input dari form
        $beritaacara = ServiceReport::find($id);
        // Lakukan multiple insert ke listkebutuhanberitaacara
        $deskripsilist = $request->input('deskripsilist');
        $modelpart = $request->input('modelpart');
        $qty = $request->input('qty');
        $keterangan = $request->input('keterangan');
        $type = "FormserviceReport";
        if (is_array($deskripsilist) && count($deskripsilist) > 0) {
            // Dapatkan ID dari data lama untuk membandingkan
            $existingIds = ListKebutuhanBeritaAcara::where('id_beritaacara', $beritaacara->id)
                ->pluck('id')
                ->toArray();

            $incomingIds = [];
            foreach (
                range(
                    0,
                    count($deskripsilist) - 1
                ) as $index
            ) {
                // Hanya proses jika semua field terkait index ini memiliki nilai
                if (
                    !empty($deskripsilist[$index]) || !empty($modelpart[$index]) || !empty($qty[$index]) || !empty($keterangan[$index])
                ) {
                    $data = [
                        'id_beritaacara' => $beritaacara->id,
                        'deskripsilist' => $deskripsilist[$index],
                        'modelpart' => $modelpart[$index],
                        'qty' => $qty[$index],
                        'keterangan' => $keterangan[$index],
                        'type' => $type,
                        'status' => $request->status,
                        'priority' => $request->defect_level,
                    ];

                    if (!empty($idlist[$index])) {
                        // Jika ID ada, update data
                        $record = ListKebutuhanBeritaAcara::find($idlist[$index]);
                        if ($record) {
                            $record->update($data);
                        }
                        $incomingIds[] = $idlist[$index];
                    } else {
                        // Jika ID tidak ada, buat data baru
                        $newRecord = ListKebutuhanBeritaAcara::create($data);
                        $incomingIds[] = $newRecord->id;
                    }
                }
            }

            // Hapus data yang tidak ada di incomingIds
            $toDelete = array_diff($existingIds, $incomingIds);
            ListKebutuhanBeritaAcara::whereIn('id', $toDelete)->delete();
        }

        $beritaacara->update([
            $request->all(),
            'date_completed' => $request->status == 'Completed' ? date('Y-m-d') : null,
        ]);
        if ($request->file('gambar')) {
            foreach ($request->file('gambar') as $index => $gambar) {
                $gambarname = time() . '_' . $index . '.' . $gambar->getClientOriginalExtension();
                $gambar->move(public_path('gambar'), $gambarname);

                GambarAct::create([
                    'id_act' => $beritaacara->id,
                    'id_equipement' => $request->id_equipment,
                    'gambar' => $gambarname,
                    'keterangan' => $request->keterangangambar[$index],
                    'type' => 'TS',
                    'info' => $request->info[$index],
                ]);
            }
        }
        if ($request->file('gambar2')) {
            foreach ($request->file('gambar2') as $index2 => $gambar2) {
                $gambarname2 = time() . '_' . $index2 . '.' . $gambar2->getClientOriginalExtension();
                $gambar2->move(public_path('gambar2'), $gambarname2);

                GambarAct2::create([
                    'id_act' => $beritaacara->id,
                    'id_equipement' => $request->id_equipment,
                    'gambar' => $gambarname2,
                    'keterangan' => $request->keterangangambar2[$index2],
                    'type' => 'TS',
                    'info' => $request->info2[$index2],
                ]);
            }
        }


        // Redirect atau lakukan apa yang diperlukan setelah berhasil memperbarui
        return redirect()->route('equipment.show', $request->id_equipment)->with('success', 'Form Berita Acara telah disimpan.');
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
        $ServiceReport = ServiceReport::find($history->id_act);
        $list = ListKebutuhanBeritaAcara::where('type', 'FormserviceReport')->where('id_beritaacara', $history->id_act)->get();
        $gambar = GambarAct::where('id_act', $history->id_act)->where('type', 'TS')->get();
        $gambar2 = GambarAct2::where('id_act', $history->id_act)->where('type', 'TS')->get();
        $equipment = Equipment::find($history->id_equipment);
        // Render view blade dengan gambar QR
        $pdfContent = view('pdf.troubleshoot', ['history' => $history, 'ServiceReport' => $ServiceReport, 'list' => $list, 'gambar' => $gambar, 'gambar2' => $gambar2, 'equipment' => $equipment])->render();

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
