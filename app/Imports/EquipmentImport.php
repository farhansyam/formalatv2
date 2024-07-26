<?php

namespace App\Imports;

use App\Models\Area;
use App\Models\Room;
use App\Models\Equipment;
use Maatwebsite\Excel\Concerns\ToModel;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class EquipmentImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        // Inisialisasi string untuk menyimpan nama-nama file
        $imageNames = [];

        // Looping untuk setiap gambar yang diunggah (sesuaikan dengan data dari Excel)
        // Asumsikan gambar disimpan di kolom 'foto', dipisahkan dengan koma
        if (isset($row['foto'])) {
            $fotos = explode(',', $row['foto']);
            foreach ($fotos as $foto) {
                // Tambahkan nama gambar ke array
                $imageNames[] = trim($foto);
            }
        }

        // Gabungkan nama-nama gambar dengan pemisah koma
        $imageNamesString = implode(',', $imageNames);

        // Cari kode_room dari Room berdasarkan kolom 'room'
        $room = Room::where('room', $row['room'])->first();
        $kode_room = $room ? $room->kode : null;
        
        // Cari site dari Area berdasarkan kolom 'area'
        $site_area = Area::where('area', $row['area'])->first();
        $site = $site_area ? $site_area->site : null;

        $equipment = new Equipment;
        $equipment->jenis = $row['jenis'];
        $equipment->customer = $row['customer'];
        $equipment->brand = $row['brand'];
        $equipment->serial_number = $row['serial_number'];
        $equipment->nameplate = $row['nameplate'];
        $equipment->tahun_installasi = $row['tahun_installasi'];
        $equipment->tahun_pembuatan = $row['tahun_pembuatan'];
        $equipment->kapasitas = $row['kapasitas'];
        $equipment->area = $row['area'];
        $equipment->jamoperasi = $row['jamoperasi'];
        $equipment->jenis_freon = $row['jenis_freon'];
        $equipment->room = $row['room'];
        $equipment->other = $row['other'];
        $equipment->kode_room = $kode_room;
        $equipment->reguler = $row['reguler'];
        $equipment->site = $site;
        $equipment->kode = $row['kode'];
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
        $singkatan1 = isset($jenis[$row['jenis']]) ? substr(str_replace(' ', '', ucwords(strtolower($jenis[$row['jenis']]))), 0, 3) : '';


        // Mengambil karakter tengah (atau kedua karakter dari tengah jika panjang genap)
        $panjang = strlen($row['area']);
        $posisi_tengah = floor($panjang / 2);
        $singkatan2 = $room ? $room->kode : '';

        // Mengambil karakter terakhir
        $id_combine = strtoupper($singkatan1 . $singkatan2 . sprintf('%05d', $equipment->id));

        $route = route('equipment.show', ['equipment' => $equipment->id]);

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

        return $equipment;
    }
}
