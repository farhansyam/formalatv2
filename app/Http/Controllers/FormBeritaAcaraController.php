<?php

namespace App\Http\Controllers;

use Dompdf\Dompdf;
use App\Models\AcSplit;
use App\Models\History;
use App\Models\Equipment;
use App\Models\GambarAct;
use App\Models\GambarAct2;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\FormBeritaAcara; // Pastikan Anda memiliki model "FormBeritaAcara" yang sesuai
use App\Models\ListKebutuhanBeritaAcara; // Pastikan Anda memiliki model "FormBeritaAcara" yang sesuai

class FormBeritaAcaraController extends Controller
{
    public function index()
    {
        $beritaacara = FormBeritaAcara::all();
        return view('formberitaacara.index', compact('beritaacara'));
    }

    public function create($id)
    {
        $equipment = Equipment::find($id);
        return view('formberitaacara.create', compact('id', 'equipment'));
    }

    public function store(Request $request)
    {

        // dd($request->all());

        // Simpan data formberitaacara
        $formBeritaAcara = FormBeritaAcara::create($request->all());

        // Lakukan multiple insert ke listkebutuhanberitaacara
        $deskripsilist = $request->input('deskripsilist');
        $modelpart = $request->input('modelpart');
        $qty = $request->input('qty');
        $keterangan = $request->input('keterangan');
        $type = "FormBeritaAcara";

        // Loop untuk menyimpan data listkebutuhanberitaacara
        if ($request->input('deskripsilist')) {
            foreach (range(0, count($deskripsilist) - 1) as $index) {
                // dd($deskripsilist[$index]);
                ListKebutuhanBeritaAcara::create([
                    'id_beritaacara' => $formBeritaAcara->id,
                    'deskripsilist' => $deskripsilist[$index], // Ubah menjadi 'deskripsi'
                    'modelpart' => $modelpart[$index], // Ubah menjadi 'modelpart'
                    'qty' => $qty[$index], // Ubah menjadi 'qty'
                    'keterangan' => $keterangan[$index], // Ubah menjadi 'keterangan'
                    'type' => $type, // Ubah menjadi 'keterangan'
                    'id_eq' => $request->id_equipment, // Ubah menjadi 'keterangan'
                ]);
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
        $equipment = Equipment::find($request->id_equipment);
        $history = new History();
        $history->type = "Survei";
        $history->id_act = $formBeritaAcara->id;
        $history->id_equipment = $request->id_equipment;
        $history->id_user = "1";
        $history->site = $equipment->site;
        $equipment = Equipment::find($request->id_equipment);
        $history->customer = $equipment->customer;
        $history->save();



        return redirect()->route('equipment.show', $request->id_equipment)->with('success', 'Form Berita Acara telah disimpan.');
    }


    public function show($id)
    {
        $beritaacara = FormBeritaAcara::find($id);
        $list = ListKebutuhanBeritaAcara::where('type', 'FormBeritaAcara')->where('id_beritaacara', $id)->get();
        $gambar = GambarAct::where('id_act', $id)->get();
        $gambar2 = GambarAct2::where('id_act', $id)->get();
        return view('formberitaacara.show', compact('beritaacara', 'list', 'gambar', 'gambar2'));
    }



    public function edit($id)
    {
        $beritaacara = FormBeritaAcara::find($id);
        $list = ListKebutuhanBeritaAcara::where('type', 'FormBeritaAcara')->where('id_beritaacara', $id)->get();
        $gambar = GambarAct::where('id_act', $id)->get();
        $gambar2 = GambarAct2::where('id_act', $id)->get();
        return view('formberitaacara.edit', compact('beritaacara', 'list', 'gambar', 'gambar2'));
    }

    public function update(Request $request, $id)
    {
        // Validasi input dari form
        $beritaacara = FormBeritaAcara::find($id);
        $beritaacara->update($request->all());
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
                ]);
            }
        }


        // Redirect atau lakukan apa yang diperlukan setelah berhasil memperbarui
        return redirect()->route('equipment.show', $request->id_equipment)->with('success', 'Form Berita Acara telah disimpan.');
    }
    public function destroy($id)
    {
        // Hapus semua data di tabel History yang terkait dengan id_equipment
        History::where('id_equipment', $id)->delete();

        // Temukan dan hapus data dari FormBeritaAcara
        $beritaacara = FormBeritaAcara::find($id);

        if ($beritaacara) {
            $beritaacara->delete();
        }

        // Redirect atau lakukan apa yang diperlukan setelah berhasil menghapus
        return redirect()->route('formberitaacara.index')->with('success', 'Data berhasil dihapus.');
    }

    public function print($id)
    {
        $history = History::find($id);
        $beritaacara = FormBeritaAcara::find($history->id_act);
        $list = ListKebutuhanBeritaAcara::where('type', 'FormBeritaAcara')->where('id_beritaacara', $id)->get();
        $gambar = GambarAct::where('id_act', $id)->get();
        $gambar2 = GambarAct2::where('id_act', $id)->get();
        $equipment = Equipment::find($history->id_equipment);

        // Render view blade dengan gambar QR
        $pdfContent = view('pdf.survey', ['history' => $history, 'beritaacara' => $beritaacara, 'list' => $list, 'gambar' => $gambar, 'gambar2' => $gambar2, 'equipment' => $equipment])->render();

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
