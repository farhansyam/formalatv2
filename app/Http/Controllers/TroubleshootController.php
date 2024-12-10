<?php

namespace App\Http\Controllers;

use Dompdf\Dompdf;
use Dompdf\Options;
use App\Models\Akun;
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


        // Simpan data formberitaacara
        // dd($request);
        $formBeritaAcara = ServiceReport::create([
            $request->all(),
            'created_by' => auth()->user()->name,
            'date_completed' => $request->status == 'Completed' ? date('Y-m-d') : null,
            'customer' => $request->customer, // Pastikan field ini ada di $request
            'no_kontak' => $request->no_kontak, // Pastikan field ini ada di $request
            'alamat' => $request->alamat, // Pastikan field ini ada di $request
            'engineer_list' => $request->engineer_list, // Pastikan field ini ada di $request
            'tanggal_survey' => $request->tanggal_survey, // Pastikan field ini ada di $request
            'jenis_equipment' => $request->jenis_equipment, // Pastikan field ini ada di $request
            'brand' => $request->brand, // Pastikan field ini ada di $request
            'serial' => $request->serial, // Pastikan field ini ada di $request

            'jenis_survey' => $request->jenis_survey, // Pastikan field ini ada di $request
            'defect_type' => $request->defect_type, // Pastikan field ini ada di $request
            'rekomendasi_teknisi_lapangan' => $request->rekomendasi_teknisi_lapangan, // Pastikan field ini ada di $request
            'tindakan' => $request->tindakan, // Pastikan field ini ada di $request
            'tindak_lanjut' => $request->tindak_lanjut, // Pastikan field ini ada di $request
            'tahun_install' => $request->tahun_install, // Pastikan field ini ada di $request
            'deskripsi' => $request->deskripsi, // Pastikan field ini ada di $request
            'tahun_pembuatan' => $request->tahun_pembuatan, // Pastikan field ini ada di $request
            'name_plate' => $request->name_plate, // Pastikan field ini ada di $request
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
                    'keterangan2' => $request->keterangan2[$index],

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
                    'keterangan' => $request->keterangangambar2[$index2],
                    'info' => $request->info2[$index2],
                    'type' => 'TS',
                    'keterangan2' => $request->keterangan22[$index2],

                ]);
            }
        }
        $history = new History();
        $history->type = "TS";
        $history->type2 = "TS2"; // Sesuaikan dengan jenis equipment

        $history->id_act = $formBeritaAcara->id;
        $history->id_equipment = $request->id_equipment;
        $history->id_user = auth()->user()->id;
        $history->save();
        $equipment = Equipment::find($request->id_equipment);
        $equipment->update_ts = date('Y-m-d');
        $equipment->priority = $request->defect_level;
        $equipment->status_ts = $request->status;
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
            $equipment = Equipment::find($request->id_equipment);
            $equipment->update_ts = date('Y-m-d');
            $equipment->priority = $request->defect_level;
            $equipment->status_ts = $request->status;
            $equipment->save();
            // Hapus data yang tidak ada di incomingIds
            $toDelete = array_diff($existingIds, $incomingIds);
            ListKebutuhanBeritaAcara::whereIn('id', $toDelete)->delete();
        }

        $beritaacara->update([
            $request->all(),
            'date_completed' => $request->status == 'Completed' ? date('Y-m-d') : null
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
                    'info' => $request->info[$index],
                    'type' => 'TS',
                    'keterangan2' => $request->keterangan2[$index],

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
                    'info' => $request->info2[$index2],
                    'type' => 'TS',
                    'keterangan2' => $request->keterangan22[$index],


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
        try {
            $history = History::find($id);
            if (!$history) {
                throw new \Exception("History with ID $id not found.");
            }

            $ServiceReport = ServiceReport::find($history->id_act);
            if (!$ServiceReport) {
                throw new \Exception("Service Report not found for ID $history->id_act.");
            }

            $list = ListKebutuhanBeritaAcara::where('type', 'FormserviceReport')
                ->where('id_beritaacara', $history->id_act)
                ->get();
            $spv = Akun::where('name', $ServiceReport->approved_by)->first();
            $teamlead = Akun::where('name', $ServiceReport->created_by)->first();
            $gambar = GambarAct::where('id_act', $history->id_act)->where('type', 'TS')->get();
            $gambar2 = GambarAct2::where('id_act', $history->id_act)->where('type', 'TS')->get();
            $equipment = Equipment::find($history->id_equipment);

            $pdfContent = view('pdf.troubleshoot', compact(
                'teamlead',
                'spv',
                'history',
                'ServiceReport',
                'list',
                'gambar',
                'gambar2',
                'equipment'
            ))->render();

            $options = new Options();
            $options->set('defaultFont', 'Courier');
            $options->set('isHtml5ParserEnabled', true);
            $options->set('isRemoteEnabled', true);

            $dompdf = new Dompdf($options);
            $dompdf->loadHtml($pdfContent);
            $dompdf->setPaper('A3', 'portrait'); // Disarankan pakai ukuran konsisten
            $dompdf->render();

            $formattedDate = \Carbon\Carbon::parse($ServiceReport->tanggal_survey)->format('dmy');
            $filename = "{$history->type}{$formattedDate} {$equipment->area} - {$equipment->id_combine}.pdf";
            $pdfFilePath = public_path($filename);

            file_put_contents($pdfFilePath, $dompdf->output());

            return redirect()->away(route('pdf.preview', ['filename' => $filename]));
        } catch (\Throwable $e) {
            // Log error dan tampilkan pesan kesalahan
            \Log::error("Error generating PDF: " . $e->getMessage());
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
