<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Dompdf\Dompdf;
use App\Models\Akun;
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
        // dd($request);

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
            'created_by' => auth()->user()->name,
            'date_completed' => $request->status == 'Completed' ? date('Y-m-d') : null,
            'tanggal_schedule' => $request->input('tanggal_schedule'),
            'tanggal_survey' => $request->input('tanggal_survey'),
            'enginerlist' => $request->input('enginerlist'),
            'start' => $request->input('start'),
            'stop' => $request->input('stop'),
            'temuan' => $request->input('temuan'),
            'running_hour' => $request->input('running_hour'),
            'status' => $request->input('status'),
            'rekomendasi' => $request->input('rekomendasi'),
            'rekomendasi' => $request->input('rekomendasi'),
            'rekomendasi' => $request->input('rekomendasi'),
            'rekomendasi' => $request->input('rekomendasi'),
            'parameter_before1' => $request->input('parameter_before1'),
            'parameter_before2' => $request->input('parameter_before2'),
            'parameter_before3' => $request->input('parameter_before3'),
            'parameter_after1' => $request->input('parameter_after1'),
            'parameter_after2' => $request->input('parameter_after2'),
            'parameter_after3' => $request->input('parameter_after3'),
            'customer_note' => $request->input('customernote'),
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

            'q31' => 'Ac Split',
        ];
        $qData['q'] = $request->input('q');
        $qData['temuan'] = $request->input('temuan');
        $qData['running_hour'] = $request->input('running_hour');
        $qData['status'] = $request->input('status');
        $qData['rekomendasi'] = $request->input('rekomendasi');


        // Menghandle upload file untuk kolom foto
        $idMax = AcSplit::max('id') + 1;

        if ($request->file('fotoparameter_before1')) {
            $file = $request->file('fotoparameter_before1');
            $filename = $idMax . '-ts-' . Carbon::now()->format('Ymd') . '_fotoparameter_before1.' . $file->getClientOriginalExtension();
            $file->move(public_path('gambar'), $filename);
            $qData['fotoparameter_before1'] = $filename;
        }

        if ($request->file('fotoparameter_before2')) {
            $file = $request->file('fotoparameter_before2');
            $filename = $idMax . '-ts-' . Carbon::now()->format('Ymd') . '_fotoparameter_before2.' . $file->getClientOriginalExtension();
            $file->move(public_path('gambar'), $filename);
            $qData['fotoparameter_before2'] = $filename;
        }

        if ($request->file('fotoparameter_before3')) {
            $file = $request->file('fotoparameter_before3');
            $filename = $idMax . '-ts-' . Carbon::now()->format('Ymd') . '_fotoparameter_before3.' . $file->getClientOriginalExtension();
            $file->move(public_path('gambar'), $filename);
            $qData['fotoparameter_before3'] = $filename;
        }

        if ($request->file('fotoparameter_after1')) {
            $file = $request->file('fotoparameter_after1');
            $idMax = AcSplit::max('id') + 1;
            $filename = $idMax . '-ts-' . Carbon::now()->format('Ymd') . '_fotoparameter_after1.' . $file->getClientOriginalExtension();
            $file->move(public_path('gambar'), $filename);
            $qData['fotoparameter_after1'] = $filename;
        }

        if ($request->file('fotoparameter_after2')) {
            $file = $request->file('fotoparameter_after2');
            $filename = $idMax . '-ts-' . Carbon::now()->format('Ymd') . '_fotoparameter_after2.' . $file->getClientOriginalExtension();
            $file->move(public_path('gambar'), $filename);
            $qData['fotoparameter_after2'] = $filename;
        }

        if ($request->file('fotoparameter_after3')) {
            $file = $request->file('fotoparameter_after3');
            $filename = $idMax . '-ts-' . Carbon::now()->format('Ymd') . '_fotoparameter_after3.' . $file->getClientOriginalExtension();
            $file->move(public_path('gambar'), $filename);
            $qData['fotoparameter_after3'] = $filename;
        }

        if ($request->file('fotokomponen_beforr1')) {
            $file = $request->file('fotokomponen_beforr1');
            $filename = $idMax . '-ts-' . Carbon::now()->format('Ymd') . '_fotokomponen_beforr1.' . $file->getClientOriginalExtension();
            $file->move(public_path('gambar'), $filename);
            $qData['fotokomponen_beforr1'] = $filename;
        }

        if ($request->file('fotokomponen_befor2')) {
            $file = $request->file('fotokomponen_befor2');
            $filename = $idMax . '-ts-' . Carbon::now()->format('Ymd') . '_fotokomponen_befor2.' . $file->getClientOriginalExtension();
            $file->move(public_path('gambar'), $filename);
            $qData['fotokomponen_befor2'] = $filename;
        }

        if ($request->file('fotokomponen_befor3')) {
            $file = $request->file('fotokomponen_befor3');
            $filename = $idMax . '-ts-' . Carbon::now()->format('Ymd') . '_fotokomponen_befor3.' . $file->getClientOriginalExtension();
            $file->move(public_path('gambar'), $filename);
            $qData['fotokomponen_befor3'] = $filename;
        }

        if ($request->file('fotokomponen_after1')) {
            $file = $request->file('fotokomponen_after1');
            $filename = $idMax . '-ts-' . Carbon::now()->format('Ymd') . '_fotokomponen_after1.' . $file->getClientOriginalExtension();
            $file->move(public_path('gambar'), $filename);
            $qData['fotokomponen_after1'] = $filename;
        }

        if ($request->file('fotokomponen_after2')) {
            $file = $request->file('fotokomponen_after2');
            $filename = $idMax . '-ts-' . Carbon::now()->format('Ymd') . '_fotokomponen_after2.' . $file->getClientOriginalExtension();
            $file->move(public_path('gambar'), $filename);
            $qData['fotokomponen_after2'] = $filename;
        }

        if ($request->file('fotokomponen_after3')) {
            $file = $request->file('fotokomponen_after3');
            $filename = $idMax . '-ts-' . Carbon::now()->format('Ymd') . '_fotokomponen_after3.' . $file->getClientOriginalExtension();
            $file->move(public_path('gambar'), $filename);
            $qData['fotokomponen_after3'] = $filename;
        }

        $AcSplit = AcSplit::create($qData);

        // Pastikan $request->id_equipment tidak null sebelum menyimpan ke dalam tabel History
        $equipment = Equipment::find($request->id_equipment);
        $equipment->update_pm = date('Y-m-d');
        $equipment->save();
        $history = new History();
        $history->site = $equipment->site; // Sesuaikan dengan jenis equipment
        $history->type = "PM"; // Sesuaikan dengan jenis equipment
        $history->type2 = "PMACS"; // Sesuaikan dengan jenis equipment
        $history->id_act = $AcSplit->id;
        $history->id_equipment = $request->id_equipment;
        $history->id_user = auth()->user()->id; // Gunakan ID user yang sedang login
        $history->save();

        $schedule = ItemSchedule::where('id_eq', $request->id_equipment)->where('schedule', $request->tanggal_schedule)->first();
        $schedule->update([
            'id_act' => $AcSplit->id
        ]);



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
        $equipment = Equipment::find($history->id_equipment);
        $gambar = GambarAct::where('id_act', $history->id_act)->where('type', 'ACS')->get();
        $gambar2 = GambarAct2::where('id_act', $history->id_act)->where('type', 'ACS')->get();

        return view('Equipment.AcSplit.show', compact('acs', 'gambar', 'gambar2', 'id', 'equipment'));
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
        $equipment = Equipment::find($history->id_equipment);

        $gambar = GambarAct::where('id_act', $history->id_act)->where('type', 'ACS')->get();
        $gambar2 = GambarAct2::where('id_act', $history->id_act)->where('type', 'ACS')->get();

        return view('Equipment.AcSplit.edit', compact('acs', 'gambar', 'gambar2', 'id', 'equipment', 'history'));
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
            'date_completed' => $request->status == 'Completed' ? date('Y-m-d') : null,
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
        $idMax = $history->id_act;
        if ($request->file('fotoparameter_before1')) {
            $file = $request->file('fotoparameter_before1');
            $filename = $idMax . '-ts-' . Carbon::now()->format('Ymd') . '_fotoparameter_before1.' . $file->getClientOriginalExtension();
            $file->move(public_path('gambar'), $filename);
            $qData['fotoparameter_before1'] = $filename;
        }

        if ($request->file('fotoparameter_before2')) {
            $file = $request->file('fotoparameter_before2');
            $filename = $idMax . '-ts-' . Carbon::now()->format('Ymd') . '_fotoparameter_before2.' . $file->getClientOriginalExtension();
            $file->move(public_path('gambar'), $filename);
            $qData['fotoparameter_before2'] = $filename;
        }

        if ($request->file('fotoparameter_before3')) {
            $file = $request->file('fotoparameter_before3');
            $filename = $idMax . '-ts-' . Carbon::now()->format('Ymd') . '_fotoparameter_before3.' . $file->getClientOriginalExtension();
            $file->move(public_path('gambar'), $filename);
            $qData['fotoparameter_before3'] = $filename;
        }

        if ($request->file('fotoparameter_after1')) {
            $file = $request->file('fotoparameter_after1');
            $idMax = AcSplit::max('id') + 1;
            $filename = $idMax . '-ts-' . Carbon::now()->format('Ymd') . '_fotoparameter_after1.' . $file->getClientOriginalExtension();
            $file->move(public_path('gambar'), $filename);
            $qData['fotoparameter_after1'] = $filename;
        }

        if ($request->file('fotoparameter_after2')) {
            $file = $request->file('fotoparameter_after2');
            $filename = $idMax . '-ts-' . Carbon::now()->format('Ymd') . '_fotoparameter_after2.' . $file->getClientOriginalExtension();
            $file->move(public_path('gambar'), $filename);
            $qData['fotoparameter_after2'] = $filename;
        }

        if ($request->file('fotoparameter_after3')) {
            $file = $request->file('fotoparameter_after3');
            $filename = $idMax . '-ts-' . Carbon::now()->format('Ymd') . '_fotoparameter_after3.' . $file->getClientOriginalExtension();
            $file->move(public_path('gambar'), $filename);
            $qData['fotoparameter_after3'] = $filename;
        }

        if ($request->file('fotokomponen_beforr1')) {
            $file = $request->file('fotokomponen_beforr1');
            $filename = $idMax . '-ts-' . Carbon::now()->format('Ymd') . '_fotokomponen_beforr1.' . $file->getClientOriginalExtension();
            $file->move(public_path('gambar'), $filename);
            $qData['fotokomponen_beforr1'] = $filename;
        }

        if ($request->file('fotokomponen_befor2')) {
            $file = $request->file('fotokomponen_befor2');
            $filename = $idMax . '-ts-' . Carbon::now()->format('Ymd') . '_fotokomponen_befor2.' . $file->getClientOriginalExtension();
            $file->move(public_path('gambar'), $filename);
            $qData['fotokomponen_befor2'] = $filename;
        }

        if ($request->file('fotokomponen_befor3')) {
            $file = $request->file('fotokomponen_befor3');
            $filename = $idMax . '-ts-' . Carbon::now()->format('Ymd') . '_fotokomponen_befor3.' . $file->getClientOriginalExtension();
            $file->move(public_path('gambar'), $filename);
            $qData['fotokomponen_befor3'] = $filename;
        }

        if ($request->file('fotokomponen_after1')) {
            $file = $request->file('fotokomponen_after1');
            $filename = $idMax . '-ts-' . Carbon::now()->format('Ymd') . '_fotokomponen_after1.' . $file->getClientOriginalExtension();
            $file->move(public_path('gambar'), $filename);
            $qData['fotokomponen_after1'] = $filename;
        }

        if ($request->file('fotokomponen_after2')) {
            $file = $request->file('fotokomponen_after2');
            $filename = $idMax . '-ts-' . Carbon::now()->format('Ymd') . '_fotokomponen_after2.' . $file->getClientOriginalExtension();
            $file->move(public_path('gambar'), $filename);
            $qData['fotokomponen_after2'] = $filename;
        }

        if ($request->file('fotokomponen_after3')) {
            $file = $request->file('fotokomponen_after3');
            $filename = $idMax . '-ts-' . Carbon::now()->format('Ymd') . '_fotokomponen_after3.' . $file->getClientOriginalExtension();
            $file->move(public_path('gambar'), $filename);
            $qData['fotokomponen_after3'] = $filename;
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
                    'type' => 'ACS',

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
                    'type' => 'ACS',
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
        $gambar = GambarAct::where('id_act', $history->id_act)->where('type', 'ACS')->get();
        $gambar2 = GambarAct2::where('id_act', $history->id_act)->where('type', 'ACS')->get();
        $spv = Akun::where('name', $Acs->approved_by)->first();
        $teamlead = Akun::where('name', $Acs->created_by)->first();
        // Render view blade dengan gambar QR
        $pdfContent = view('pdf.acs', ['spv' => $spv, 'teamlead' => $teamlead, 'history' => $history, 'Acs' => $Acs, 'gambar' => $gambar, 'gambar2' => $gambar2, 'equipment' => $equipment])->render();

        // Buat objek DOMPDF
        $dompdf = new Dompdf();

        // Muat konten PDF
        $dompdf->loadHtml($pdfContent);

        // Set ukuran dan orientasi dokumen
        $dompdf->setPaper('A4', 'potrait');

        // Render PDF
        $dompdf->render();

        // Menghasilkan nama file unik
        $formattedDate = \Carbon\Carbon::parse($Acs->tanggal_survey)->format('dmy');

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
