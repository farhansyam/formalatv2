<?php

namespace App\Http\Controllers;

use Dompdf\Dompdf;
use App\Models\History;
use App\Models\Equipment;
use App\Models\GambarAct;
use App\Models\GambarAct2;
use App\Models\ItemSchedule;
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
        $schedule = ItemSchedule::where('id_equipement', $equipmentId->id_combine)->where('status', '#ffb6b6')->orderBy('schedule', 'ASC')->get();

        return view('equipment.AirCooledWaterChiller.create', compact('id', 'schedule'));
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
        if ($request->status == 'Completed') {
            $schedule = ItemSchedule::where('schedule', $request->tanggal_schedule)->where('id_eq', $request->id_equipment)->orderBy('schedule', 'ASC')->first();
            $schedule->status = '#13DEB9';
            $schedule->save();
        }
        if ($request->status == 'On Progres') {
            $schedule = ItemSchedule::where('schedule', $request->tanggal_schedule)->where('id_eq', $request->id_equipment)->orderBy('schedule', 'ASC')->first();
            $schedule->status = '#FFAE1F';
            $schedule->save();
        }

        // Mengumpulkan nilai dari tiga input menjadi satu string dengan pemisah koma untuk setiap pertanyaan
        $qData = [
            'tanggal_survey' => $request->input('tanggal_survey'),
            'enginerlist' => $request->input('enginerlist'),
            'tanggal_schedule' => $request->input('tanggal_schedule'),
            'start' => $request->input('start'),
            'stop' => $request->input('stop'),
            'temuan' => $request->input('temuan'),
            'status' => $request->input('status'),
            'rekomendasi' => $request->input('rekomendasi'),
        ];

        // Loop untuk mengambil data 'q1' hingga 'q60'
        for ($i = 1; $i <= 60; $i++) {
            $qData['q' . $i] = implode(',', (array) $request->input('q' . $i));
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
                    'keterangan' => $request->keterangangambar2[$index2],
                    'info' => $request->info2[$index2],
                ]);
            }
        }
        // Pastikan $request->id_equipment tidak null sebelum menyimpan ke dalam tabel History
        $history = new History();
        $history->type = "PM"; // Sesuaikan dengan jenis equipment
        $history->id_act = $AirCooledWaterChiller->id;
        $history->id_equipment = $request->id;
        $history->id_user = auth()->user()->id; // Gunakan ID user yang sedang login
        $history->save();
        $equipment = Equipment::find($request->id_equipment);
        $equipment->update_pm = date('Y-m-d');
        $equipment->save();
        return redirect()->route('equipment.show', $request->id)->with('success', 'Task list telah disimpan.');
    }





    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AirCooledWaterChiller  $AirCooledWaterChiller
     * @return \Illuminate\Http\Response
     */
    public function show(AirCooledWaterChiller $AirCooledWaterChiller, $id)
    {
        $history = History::find($id);
        $acwc = AirCooledWaterChiller::find($history->id_act);
        $id = $history->id_equipment;
        $gambar = GambarAct::where('id_act', $history->id_act)->get();
        $gambar2 = GambarAct2::where('id_act', $history->id_act)->get();
        return view('equipment.AirCooledWaterChiller.show', compact('acwc', 'id', 'gambar', 'gambar2'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AirCooledWaterChiller  $AirCooledWaterChiller
     * @return \Illuminate\Http\Response
     */
    public function edit(AirCooledWaterChiller $AirCooledWaterChiller, $id)
    {
        $history = History::find($id);
        $acwc = AirCooledWaterChiller::find($history->id_act);
        $id = $history->id_equipment;
        $idh = $history->id;
        $gambar = GambarAct::where('id_act', $history->id_act)->get();
        $gambar2 = GambarAct2::where('id_act', $history->id_act)->get();
        return view('equipment.AirCooledWaterChiller.edit', compact('acwc', 'id', 'idh', 'gambar', 'gambar2'));
    }


    public function update(Request $request, $id)
    {
        // dd($request->q56);
        if ($request->status == 'Completed') {
            $schedule = ItemSchedule::where('schedule', $request->tanggal_schedule)->where('id_eq', $request->id_equipment)->orderBy('schedule', 'ASC')->first();
            $schedule->status = '#13DEB9';
            $schedule->save();
        }
        if ($request->status == 'On Progres') {
            $schedule = ItemSchedule::where('schedule', $request->tanggal_schedule)->where('id_eq', $request->id_equipment)->orderBy('schedule', 'ASC')->first();
            $schedule->status = '#FFAE1F';
            $schedule->save();
        }
        $history = History::find($id);
        $acs = AirCooledWaterChiller::find($history->id_act);

        // Mengumpulkan nilai dari tiga input menjadi satu string dengan pemisah koma untuk setiap pertanyaan
        $qData = [
            'tanggal_survey' => $request->input('tanggal_survey'),
            'tanggal_schedule' => $request->input('tanggal_schedule'),
            'enginerlist' => $request->input('enginerlist'),
            'start' => $request->input('start'),
            'stop' => $request->input('stop'),
            'temuan' => $request->input('temuan'),
            'status' => $request->input('status'),
            'rekomendasi' => $request->input('rekomendasi'),
        ];

        // Loop untuk mengambil data 'q1' hingga 'q60'
        for ($i = 1; $i <= 60; $i++) {
            $qData['q' . $i] = implode(',', (array) $request->input('q' . $i));
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
        return redirect()->route('equipment.show', $request->id_equipment);
    }
    public function print($id)
    {
        $history = History::find($id);
        $equipment = Equipment::find($history->id_equipment);
        $acwc = AirCooledWaterChiller::find($history->id_act);
        $gambar = GambarAct::where('id_act', $history->id_act)->get();
        $gambar2 = GambarAct2::where('id_act', $history->id_act)->get();

        // Render view blade dengan gambar QR
        $pdfContent = view('pdf.acwc', ['history' => $history, 'acwc' => $acwc, 'gambar' => $gambar, 'gambar2' => $gambar2, 'equipment' => $equipment])->render();

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
