<?php

namespace App\Http\Controllers;

use Dompdf\Dompdf;
use App\Models\AcSplit;
use App\Models\History;
use App\Models\Equipment;
use App\Models\GambarAct;
use App\Models\GambarAct2;
use App\Models\ItemSchedule;
use Illuminate\Http\Request;
use App\Models\ListKebutuhanBeritaAcara;

class AcSplitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create2($id)
    {

        $equipment = Equipment::find($id);
        $schedule = ItemSchedule::where('id_equipement', $equipment->id_combine)->where('status', '#ffb6b6')->orderBy('schedule', 'ASC')->get();

        return view('equipment.AcSplit.create', compact('id', 'equipment', 'schedule'));
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
            'q' => $request->input('q'),
            'tanggal_schedule' => $request->input('tanggal_schedule'),
            'tanggal_survey' => $request->input('tanggal_survey'),
            'enginerlist' => $request->input('enginerlist'),
            'start' => $request->input('start'),
            'stop' => $request->input('stop'),
            'temuan' => $request->input('temuan'),
            'running_hour' => $request->input('running_hour'),
            'status' => $request->input('status'),
            'rekomendasi' => $request->input('rekomendasi'),
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

            'q20' => implode(',', $request->input('q20')),

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


            'q31' => 'Ac Split',
        ];
        $qData['q'] = $request->input('q');
        $qData['temuan'] = $request->input('temuan');
        $qData['running_hour'] = $request->input('running_hour');
        $qData['status'] = $request->input('status');
        $qData['rekomendasi'] = $request->input('rekomendasi');


        // Simpan data ke dalam model CoolingUnit
        $AcSplit = AcSplit::create($qData);
        if ($request->file('gambar')) {
            foreach ($request->file('gambar') as $index => $gambar) {
                $gambarname = time() . '_' . $index . '.' . $gambar->getClientOriginalExtension();
                $gambar->move(public_path('gambar'), $gambarname);

                GambarAct::create([
                    'id_act' => $AcSplit->id,
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
                    'id_act' => $AcSplit->id,
                    'id_equipement' => $request->id_equipment,
                    'gambar' => $gambarname2,
                    'keterangan' => $request->keterangangambar2[$index],
                    'info' => $request->info2[$index],
                ]);
            }
        }

        // Pastikan $request->id_equipment tidak null sebelum menyimpan ke dalam tabel History
        $history = new History();
        $history->type = "PM"; // Sesuaikan dengan jenis equipment
        $history->id_act = $AcSplit->id;
        $history->id_equipment = $request->id_equipment;
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $history = History::find($id);
        $acs = AcSplit::find($history->id_act);
        $gambar = GambarAct::where('id_act', $history->id_act)->get();
        $gambar2 = GambarAct2::where('id_act', $history->id_act)->get();
        return view('Equipment.AcSplit.show', compact('acs', 'gambar', 'gambar2', 'id'));
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
        $acs = AcSplit::find($history->id_act);
        $gambar = GambarAct::where('id_act', $history->id_act)->get();
        $gambar2 = GambarAct2::where('id_act', $history->id_act)->get();
        return view('Equipment.AcSplit.edit', compact('acs', 'gambar', 'gambar2', 'id'));
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

        $history = History::find($id);
        if ($request->status == 'Completed') {
            $schedule = ItemSchedule::where('schedule', $request->tanggal_schedule)->where('id_eq', $history->id_equipment)->orderBy('schedule', 'ASC')->first();
            $schedule->status = '#13DEB9';
            $schedule->save();
        }
        if ($request->status == 'On Progres') {
            $schedule = ItemSchedule::where('schedule', $request->tanggal_schedule)->where('id_eq', $history->id_equipment)->orderBy('schedule', 'ASC')->first();
            $schedule->status = '#FFAE1F';
            $schedule->save();
        }
        $acs = AcSplit::find($history->id_act);

        // Mengumpulkan nilai dari tiga input menjadi satu string dengan pemisah koma untuk setiap pertanyaan
        $qData = [
            'q' => $request->input('q'),
            'tanggal_schedule' => $request->input('tanggal_schedule'),
            'tanggal_survey' => $request->input('tanggal_survey'),
            'enginerlist' => $request->input('enginerlist'),
            'start' => $request->input('start'),
            'stop' => $request->input('stop'),
            'temuan' => $request->input('temuan'),
            'running_hour' => $request->input('running_hour'),
            'status' => $request->input('status'),
            'rekomendasi' => $request->input('rekomendasi'),
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

            'q20' => implode(',', $request->input('q20')),

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


        ];

        // Menambahkan input tambahan ke dalam array $qData
        $qData['q'] = $request->input('q');
        $qData['tanggal_schedule'] = $request->input('tanggal_schedule');
        $qData['status'] = $request->input('status');
        $qData['temuan'] = $request->input('temuan');
        $qData['rekomendasi'] = $request->input('rekomendasi');
        $qData['tanggal_survey'] = $request->input('tanggal_survey');
        $qData['enginerlist'] = $request->input('enginerlist');
        $qData['start'] = $request->input('start');
        $qData['stop'] = $request->input('stop');
        $qData['temuan'] = $request->input('temuan');
        $qData['running_hour'] = $request->input('running_hour');
        $qData['status'] = $request->input('status');
        $qData['rekomendasi'] = $request->input('rekomendasi');

        // Melakukan sesuatu dengan $qData, misalnya menyimpannya ke dalam database
        // Contoh:
        // $history->update($qData);

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
                    'keterangan' => $request->keterangangambar2[$index2],
                    'info' => $request->info2[$index2],
                ]);
            }
        }
        return redirect()->route('equipment.show', $history->id_equipment);
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
        $equipment = Equipment::find($history->id_equipment);
        $Acs = AcSplit::find($history->id_act);
        $gambar = GambarAct::where('id_act', $history->id_act)->get();
        $gambar2 = GambarAct2::where('id_act', $history->id_act)->get();


        // Render view blade dengan gambar QR
        $pdfContent = view('pdf.acs', ['history' => $history, 'Acs' => $Acs, 'gambar' => $gambar, 'gambar2' => $gambar2, 'equipment' => $equipment])->render();

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
