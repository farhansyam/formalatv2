<?php

namespace App\Http\Controllers;

use Dompdf\Dompdf;
use App\Models\Area;
use App\Models\Room;
use App\Models\Brand;
use App\Models\Freon;
use App\Models\History;
use App\Models\Reguler;
use App\Models\Customer;
use App\Models\Equipment;
use App\Models\GambarAct;
use App\Models\Kapasitas;
use App\Models\GambarAct2;
use App\Models\ItemSchedule;
use Illuminate\Http\Request;
use App\Models\FormBeritaAcara;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;
use App\Models\ListKebutuhanBeritaAcara;
use Illuminate\Support\Facades\Response;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Support\Facades\View; // Import the View facade

class EquipmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $room = Room::all();
        $equipment = Equipment::all();
        if (auth()->user()->role_sipm == 'user') {
            $equipment = Equipment::Where('customer', auth()->user()->customer)->get();
        }
        if (auth()->user()->role_sipm == 'spv') {
            $equipment = Equipment::Where('site', auth()->user()->site)->get();
        }
        if (auth()->user()->role_sipm == 'team_lead') {
            $equipment = Equipment::Where('site', auth()->user()->site)->get();
        }
        return view('Equipment.index', compact('equipment', 'room'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $area = Area::all();
        $brand = Brand::all();
        $kapasitas = Kapasitas::all();
        $customer = Customer::all();
        $freon = Freon::all();
        $reguler = Reguler::all();
        $room = Room::all();
        return view('Equipment.create', compact('area', 'kapasitas', 'customer', 'freon', 'reguler', 'room', 'brand'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $equipment = new Equipment;
        $equipment->jenis = $request->jenis;
        $equipment->customer = $request->customer;
        $equipment->brand = $request->brand;
        $equipment->model = $request->model;
        $equipment->serial_number = $request->serial_number;
        $equipment->nameplate = $request->nameplate;
        $equipment->tahun_installasi = $request->tahun_installasi;
        $equipment->tahun_pembuatan = $request->tahun_pembuatan;
        $equipment->kapasitas = $request->kapasitas;
        $equipment->area = $request->area;
        $equipment->jamoperasi = $request->jamoperasi;
        $equipment->jenis_freon = $request->jenis_freon;
        $equipment->room = $request->room;
        $equipment->other = $request->other;
        $room = Room::where('room', $request->room)->first();
        $equipment->kode_room = $room->kode;
        $equipment->reguler = $request->reguler;
        $site = Area::where('area', $request->area)->first();
        $site = $site->site;
        $equipment->site = $site;
        $equipment->kode = $request->kode;
        // $equipment->tanggaloperasi = $request->tanggaloperasi;
        // if ($request->hasFile('foto')) {
        //     $fileimg = $request->file('foto');
        //     $name = time() . '_' . $fileimg->getClientOriginalName();
        //     $fileimg->storeAs('public/image', $name);
        //     $equipment->foto = $name;
        // }

        // Inisialisasi string untuk menyimpan nama-nama file
        $imageNames = [];

        // Looping untuk setiap gambar yang diunggah
        foreach ($request->file('foto') as $image) {
            // Simpan gambar ke dalam folder yang ditentukan
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('image'), $imageName);
            // Tambahkan nama gambar ke array
            $imageNames[] = $imageName;
        }
        // Gabungkan nama-nama gambar dengan pemisah koma
        $imageNamesString = implode(',', $imageNames);
        $equipment->foto = $imageNamesString;
        $equipment->save();
        $jenis = [
            1 => "AC Split",
            2 => "Cooled Water Chiller",
            3 => "AHUP",
            4 => "PAC",
            5 => "Cold Storage",
            6 => "Cooling Unit & AC Panel",
            7 => "Mini Chiller",
            8 => "Evaporative Air Cooler",
            9 => "AHU",
            10 => "Cooling tower",
            11 => "Humidifier",
            12 => "Dehumidifier",
            13 => "FCU (Fan Cooling Unit)",
            14 => "Exhaust Fan",
            15 => "Pompa",
            16 => "Spot Cooling",
            17 => "Water Mist",
            18 => "Chiller Centrifugal",
            19 => "Floor Standing",
            20 => "Ac Cassette",
            21 => "Split Duct",
            22 => "Air Cooled Chiller",
            23 => "Centralize Chiller",
            24 => "Ultrasonic Humidifier",
            25 => "Piping & Accs",
            26 => "Panel SCR",
            27 => "ATCS",
            28 => "Lakos Filter"
        ];
        // Ambil singkatan dari jenis berdasarkan angka
        $singkatan1 = isset($jenis[$request->jenis]) ? substr(str_replace(' ', '', ucwords(strtolower($jenis[$request->jenis]))), 0, 3) : '';

        // Mengambil karakter tengah (atau kedua karakter dari tengah jika panjang genap)
        $panjang = strlen($request->area);
        $posisi_tengah = floor($panjang / 2);
        $singkatan2 = $room->kode;

        // Mengambil karakter terakhir
        $id_combine =  strtoupper($singkatan1 . $singkatan2 . $formattedId = sprintf('%05d', $equipment->id));

        $route = route('equipment.show', ['equipment' => $equipment->id]);

        // Membuat gambar QR
        // Membuat gambar QR
        $qrCode = QrCode::format('png')->size(200)->generate($route);

        $namaGambar = 'qrcode_' . $equipment->id . '.png'; // Nama gambar sesuai kebutuhan
        $path = public_path($namaGambar); // Path menuju direktori publik

        file_put_contents($path, $qrCode);

        // Mengupdate properti $equipment->qrcode dengan nama gambar yang disimpan
        $equipment->qrcode = $namaGambar;
        $equipment->id_combine = $id_combine;

        // Save QR code to the 'qrcode' column
        $equipment->save();
        return redirect()->route('equipment.index')->with('success', 'Data equipment berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Equipment  $equipment
     * @return \Illuminate\Http\Response
     */
    public function show(Equipment $equipment)
    {
        $history = History::where('id_equipment', $equipment->id)->get();
        $schedule = ItemSchedule::where('id_equipement', $equipment->id_combine)->orderBy('schedule', 'ASC')->get();
        return view('Equipment.show', compact('equipment', 'history', 'schedule'));
    }
    public function search(Request $request)
    {
        // Menghapus "0" di belakang string
        $kode_baru = substr($request->id, 6);
        $kode_baru2 = ltrim($kode_baru, '0');
        // Mencari peralatan berdasarkan ID yang telah dimodifikasi
        $equipment = Equipment::find($kode_baru2);

        // Jika peralatan tidak ditemukan, kembalikan tampilan 'search2'
        if ($equipment == null) {
            return view('Equipment.search2');
        }

        // Jika ditemukan, cari riwayat berdasarkan ID peralatan
        $history = History::where('id_equipment', $kode_baru2)->get();
        // Kembalikan tampilan 'show' dengan data peralatan dan riwayat
        return view('Equipment.show', compact('equipment', 'history'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Equipment  $equipment
     * @return \Illuminate\Http\Response
     */
    public function edit(Equipment $equipment)
    {
        $area = Area::all();
        $brand = Brand::all();

        $kapasitas = Kapasitas::all();
        $customer = Customer::all();
        $freon = Freon::all();
        $reguler = Reguler::all();
        $room = Room::all();

        return view('Equipment.edit', compact('area', 'kapasitas', 'customer', 'freon', 'equipment', 'reguler', 'room', 'brand'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Equipment  $equipment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $equipment = Equipment::find($request->id);
        $equipment->jenis = $request->jenis;
        $equipment->customer = $request->customer;
        $equipment->model = $request->model;
        $equipment->brand = $request->brand;
        $equipment->serial_number = $request->serial_number;
        $equipment->nameplate = $request->nameplate;
        $equipment->tahun_installasi = $request->tahun_installasi;
        $equipment->tahun_pembuatan = $request->tahun_pembuatan;
        $equipment->kapasitas = $request->kapasitas;
        $equipment->area = $request->area;
        $equipment->jamoperasi = $request->jamoperasi;
        $equipment->jenis_freon = $request->jenis_freon;
        $equipment->reguler = $request->reguler;
        $equipment->room = $request->room;
        $equipment->other = $request->other;
        $room = Room::where('room', $request->room)->first();
        $equipment->kode_room = $room->kode;
        $site = Area::where('area', $request->area)->first();
        $site = $site->site;
        $equipment->site = $site;
        $equipment->kode = $request->kode;

        if ($request->file('foto')) {
            $imageNames = [];

            // Looping untuk setiap gambar yang diunggah
            foreach ($request->file('foto') as $image) {
                // Simpan gambar ke dalam folder yang ditentukan
                $imageName = time() . '_' . $image->getClientOriginalName();
                $image->move(public_path('image'), $imageName);
                // Tambahkan nama gambar ke array
                $imageNames[] = $imageName;
            }

            // Gabungkan nama-nama gambar dengan pemisah koma
            $imageNamesString = implode(',', $imageNames);
            $equipment->foto = $imageNamesString;
        }
        $jenis = [
            1 => "AC Split",
            2 => "Cooled Water Chiller",
            3 => "AHUP",
            4 => "PAC",
            5 => "Cold Storage",
            6 => "Cooling Unit & AC Panel",
            7 => "Mini Chiller",
            8 => "Evaporative Air Cooler",
            9 => "AHU",
            10 => "Cooling tower",
            11 => "Humidifier",
            12 => "Dehumidifier",
            13 => "FCU (Fan Cooling Unit)",
            14 => "Exhaust Fan",
            15 => "Pompa",
            16 => "Spot Cooling",
            17 => "Water Mist",
            18 => "Chiller Centrifugal",
            19 => "Floor Standing",
            20 => "Ac Cassette",
            21 => "Split Duct",
            22 => "Air Cooled Chiller",
            23 => "Centralize Chiller",
            24 => "Ultrasonic Humidifier",
            25 => "Piping & Accs",
            26 => "Panel SCR",
            27 => "ATCS",
            28 => "Lakos Filter"
        ];
        // Ambil singkatan dari jenis berdasarkan angka
        $singkatan1 = isset($jenis[$request->jenis]) ? substr(str_replace(' ', '', ucwords(strtolower($jenis[$request->jenis]))), 0, 3) : '';
        $singkatan2 = strtoupper($room->kode);
        $id_combine =  strtoupper($singkatan1 . $singkatan2 . $formattedId = sprintf('%05d', $request->id));

        $equipment->id_combine = $id_combine;
        // Membuat gambar QR
        $route = route('equipment.show', ['equipment' => $equipment->id]);

        $qrCode = QrCode::format('png')->size(200)->generate($route);

        $namaGambar = 'qrcode_' . $equipment->id . '.png'; // Nama gambar sesuai kebutuhan
        $path = public_path($namaGambar); // Path menuju direktori publik

        file_put_contents($path, $qrCode);

        // Mengupdate properti $equipment->qrcode dengan nama gambar yang disimpan
        $equipment->qrcode = $namaGambar;
        $equipment->id_combine = $id_combine;
        $equipment->save();

        // Save QR code to the 'qrcode' column
        $equipment->save();
        return redirect()->route('equipment.index')->with('success', 'Data equipment berhasil ditambahkan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Equipment  $equipment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Equipment $equipment)
    {
        $history = History::where('id_equipment', $equipment->id)->get();
        foreach ($history as $record) {
            $record->delete();
        }
        $equipment->delete();
        return redirect()->route('equipment.index');
    }
    public function history_approve($equipment)
    {
        History::where('id_act', $equipment)->update(['approval' => 'Approve']);

        return back();
    }

    function scan()
    {
        return view('Equipment.search');
    }

    public function print($id)
    {
        $equipment = Equipment::findOrFail($id);

        // Generate QR Code
        $qrCode = QrCode::size(200)->generate($equipment->qrcode);

        // Render view blade dengan gambar QR
        $pdfContent = view('pdf.equipment', ['equipment' => $equipment, 'qrCode' => $qrCode])->render();

        // Buat objek DOMPDF
        $dompdf = new Dompdf();

        // Muat konten PDF
        $dompdf->loadHtml($pdfContent);

        // Set ukuran dan orientasi dokumen
        $dompdf->setPaper('A4', 'portrait');

        // Render PDF
        $dompdf->render();

        // Menghasilkan nama file unik
        $filename = 'equipment_qrcode_' . time() . '.pdf';

        // Simpan PDF ke server sementara
        $output = $dompdf->output();
        file_put_contents($filename, $output);

        // Tautan untuk membuka pratinjau PDF di tab baru
        $previewLink = route('pdf.preview', ['filename' => $filename]);

        // Redirect ke pratinjau PDF
        return redirect()->away($previewLink);
    }

    public function printpp($id)
    {
        $equipment = Equipment::findOrFail($id);
        return view('pdf.equipment', compact('equipment'));
    }

    function history_destoroy(History $history, $id)
    {
        $history = History::find($id);
        if ($history->type == "Survei") {
            $survey = FormBeritaAcara::find($history->id_act);
            $survey->delete();
        }
        $history->delete();
        return back();
    }
    function gambar1_destroy(GambarAct $gambar, $id)
    {
        $gambar = GambarAct::find($id);
        $gambar->delete();
        return back();
    }
    function gambar2_destroy(GambarAct $gambar, $id)
    {
        $gambar = GambarAct2::find($id);
        $gambar->delete();
        return back();
    }

    function part()
    {
        $history = History::all();
        return view('part.index', compact('history'));
    }
    function partshow($id)
    {
        $parts = ListKebutuhanBeritaAcara::where('id_beritaacara', $id)->get();
        return view('part.show', compact('parts'));
    }
}
