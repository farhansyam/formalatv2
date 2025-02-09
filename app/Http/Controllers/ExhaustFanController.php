<?php

namespace App\Http\Controllers;

use Dompdf\Dompdf;
use App\Models\History;
use App\Models\Equipment;
use App\Models\GambarAct;
use App\Models\ExhaustFan;
use App\Models\GambarAct2;
use App\Models\ItemSchedule;
use Illuminate\Http\Request;

class ExhaustFanController extends Controller
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
        return view('equipment.ExhaustFan.create', compact('id', 'schedule'));
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
        if ($request->status == 'Completed') {
            $schedule = ItemSchedule::where('schedule', $request->tanggal_schedule)->where('id_eq', $request->id)->orderBy('schedule', 'ASC')->first();
            $schedule->status = '#13DEB9';
            $schedule->save();
        }
        if ($request->status == 'On Progres') {
            $schedule = ItemSchedule::where('schedule', $request->tanggal_schedule)->where('id_eq', $request->id)->orderBy('schedule', 'ASC')->first();
            $schedule->status = '#FFAE1F';
            $schedule->save();
        }
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

            'q31' => implode(',', $request->input('q31')),

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
            'tanggal' => $request->input('tanggal'),
            'rekomendasi' => $request->input('rekomendasi'),
            'status' => $request->input('status'),
            'temuan' => $request->input('temuan'),
            'enginer_list' => $request->input('enginer_list'),
            'created_by' => auth()->user()->name,
            'date_completed' => $request->status == 'Completed' ? date('Y-m-d') : null,
            'start' => $request->input('start'),
            'end' => $request->input('end'),
            'intensive' => $request->input('intensive'),
            'tanggal_schedule' => $request->input('tanggal_schedule'),
            'created_by' => auth()->user()->name,
            'date_completed' => $request->status == 'Completed' ? date('Y-m-d') : null
        ];

        // Simpan data ke dalam model ExhaustFan
        $ExhaustFan = ExhaustFan::create($qData);
        if ($request->file('gambar')) {
            foreach ($request->file('gambar') as $index => $gambar) {
                $gambarname = time() . '_' . $index . '.' . $gambar->getClientOriginalExtension();
                $gambar->move(public_path('gambar'), $gambarname);

                GambarAct::create([
                    'id_act' => $ExhaustFan->id,
                    'id_equipement' => $request->id,
                    'gambar' => $gambarname,
                    'keterangan' => $request->keterangangambar[$index],
                    'info' => $request->info[$index],
                    'type' => 'EXA',
                ]);
            }
        }
        if ($request->file('gambar2')) {
            foreach ($request->file('gambar2') as $index2 => $gambar2) {
                $gambarname2 = time() . '_' . $index2 . '.' . $gambar2->getClientOriginalExtension();
                $gambar2->move(public_path('gambar2'), $gambarname2);

                GambarAct2::create([
                    'id_act' => $ExhaustFan->id,
                    'id_equipement' => $request->id,
                    'gambar' => $gambarname2,
                    'keterangan' => $request->keterangangambar2[$index2],
                    'info' => $request->info2[$index2],
                    'type' => 'EXA',

                ]);
            }
        }
        // Pastikan $request->id_equipment tidak null sebelum menyimpan ke dalam tabel History
        $equipment = Equipment::find($request->id);
        $equipment->update_pm = date('Y-m-d');
        $equipment->save();
        $history = new History();
        $history->site = $equipment->site; // Sesuaikan dengan jenis equipment
        $history->type2 = "PMEXA"; // Sesuaikan dengan jenis equipment
        $history->type = "PM"; // Sesuaikan dengan jenis equipment
        $history->id_act = $ExhaustFan->id;
        $history->id_equipment = $request->id;
        $history->id_user = auth()->user()->id; // Gunakan ID user yang sedang login
        $history->save();
        return redirect()->route('equipment.show', $request->id)->with('success', 'Task list telah disimpan.');
    }





    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ExhaustFan  $ExhaustFan
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $history = History::find($id);
        $ef = ExhaustFan::findOrFail($history->id_act); // Sesuaikan dengan model ExhaustFan
        $id = $history->id_equipment;
        $gambar = GambarAct::where('id_act', $history->id_act)->where('id_equipement', $history->id_equipment)->where('type', 'EXA')->get();
        $gambar2 = GambarAct2::where('id_act', $history->id_act)->where('id_equipement', $history->id_equipment)->where('type', 'EXA')->get();
        return view('equipment.ExhaustFan.show', compact('ef', 'id', 'gambar', 'gambar2'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ExhaustFan  $ExhaustFan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $history = History::find($id);
        $ef = ExhaustFan::findOrFail($history->id_act); // Sesuaikan dengan model ExhaustFan
        $id = $history->id_equipment;
        $gambar = GambarAct::where('id_act', $history->id_act)->where('id_equipement', $history->id_equipment)->where('type', 'EXA')->get();
        $gambar2 = GambarAct2::where('id_act', $history->id_act)->where('id_equipement', $history->id_equipment)->where('type', 'EXA')->get();
        return view('equipment.ExhaustFan.edit', compact('ef', 'id', 'gambar', 'gambar2'));
    }


    public function update(Request $request, $id)
    {
        if ($request->status == 'Completed') {
            $schedule = ItemSchedule::where('schedule', $request->tanggal_schedule)->where('id_eq', $request->id)->orderBy('schedule', 'ASC')->first();
            $schedule->status = '#13DEB9';
            $schedule->save();
        }
        if ($request->status == 'On Progres') {
            $schedule = ItemSchedule::where('schedule', $request->tanggal_schedule)->where('id_eq', $request->id)->orderBy('schedule', 'ASC')->first();
            $schedule->status = '#FFAE1F';
            $schedule->save();
        }
        $ef = ExhaustFan::find($id);
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

            'q31' => implode(',', $request->input('q31')),

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
            'tanggal' => $request->input('tanggal'),
            'rekomendasi' => $request->input('rekomendasi'),
            'date_completed' => $request->status
                == 'Completed' ? date('Y-m-d') : null,
            'status' => $request->input('status'),
            'temuan' => $request->input('temuan'),
            'enginer_list' => $request->input('enginer_list'),
            'start' => $request->input('start'),
            'end' => $request->input('end'),
            'intensive' => $request->input('intensive'),
            'tanggal_schedule' => $request->input('tanggal_schedule'),


        ];
        $ef->update($qData);
        if ($request->file('gambar')) {
            foreach ($request->file('gambar') as $index => $gambar) {
                $gambarname = time() . '_' . $index . '.' . $gambar->getClientOriginalExtension();
                $gambar->move(public_path('gambar'), $gambarname);

                GambarAct::create([
                    'id_act' => $ef->id,
                    'id_equipement' => $request->id,
                    'gambar' => $gambarname,
                    'keterangan' => $request->keterangangambar[$index],
                    'type' => 'EXA',
                    'info' => $request->info[$index],
                ]);
            }
        }
        if ($request->file('gambar2')) {
            foreach ($request->file('gambar2') as $index2 => $gambar2) {
                $gambarname2 = time() . '_' . $index2 . '.' . $gambar2->getClientOriginalExtension();
                $gambar2->move(public_path('gambar2'), $gambarname2);

                GambarAct2::create([
                    'id_act' => $ef->id,
                    'id_equipement' => $request->id,
                    'gambar' => $gambarname2,
                    'keterangan' => $request->keterangangambar2[$index2],
                    'info' => $request->info2[$index2],
                    'type' => 'EXA',

                ]);
            }
        }

        return redirect()->route('equipment.show', $request->id)->with('success', 'Task list telah disimpan.');
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ExhaustFan  $ExhaustFan
     * @return \Illuminate\Http\Response
     */

    public function print($id)
    {
        $history = History::find($id);
        $equipment = Equipment::find($history->id_equipment);
        $ct = ExhaustFan::find($history->id_act);
        $gambar = GambarAct::where('id_act', $history->id_act)->where('id_equipement', $history->id_equipment)->get();
        $gambar2 = GambarAct2::where('id_act', $history->id_act)->where('id_equipement', $history->id_equipment)->get();

        // Render view blade dengan gambar QR
        $pdfContent = view('pdf.exa', ['history' => $history, 'ct' => $ct, 'gambar' => $gambar, 'gambar2' => $gambar2, 'equipment' => $equipment])->render();

        // Buat objek DOMPDF
        $dompdf = new Dompdf();

        // Muat konten PDF
        $dompdf->loadHtml($pdfContent);

        // Set ukuran dan orientasi dokumen
        $dompdf->setPaper('A4', 'potrait');

        // Render PDF
        $dompdf->render();

        $formattedDate = \Carbon\Carbon::parse($ct->tanggal_survey)->format('dmy');

        // Menghasilkan nama file unik
        $filename = $history->type . $formattedDate . ' ' . $equipment->area . ' ' . '-' . ' ' . $equipment->id_combine . '.pdf';

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
