<?php

namespace App\Imports;

use App\Models\Area;
use App\Models\Room;
use App\Models\Equipment;
use Illuminate\Support\Arr;
use Maatwebsite\Excel\Concerns\ToModel;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class EquipmentImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        // Ambil nilai id_combine dari Excel
        $id_combine = $row['id_combine'];

        if (!empty($id_combine)) {
            // Jika id_combine tidak kosong, cek di database
            $equipment = Equipment::where('id_combine', $id_combine)->first();

            if ($equipment) {
                // Jika ditemukan, update data
                $equipment->update([
                    'jenis' => $row['jenis'],
                    'customer' => $row['customer'],
                    'brand' => $row['brand'],
                    'serial_number' => $row['serial_number'],
                    'nameplate' => $row['nameplate'],
                    'tahun_installasi' => $row['tahun_installasi'],
                    'tahun_pembuatan' => $row['tahun_pembuatan'],
                    'kapasitas' => $row['kapasitas'],
                    'area' => $row['site'],
                    'jamoperasi' => $row['jamoperasi'],
                    'jenis_freon' => $row['jenis_freon'],
                    'room' => $row['room'],
                    'other' => $row['other'],
                    'kode_room' => Room::where('room', $row['room'])->value('kode'),
                    'reguler' => $row['reguler'],
                    'site' => Area::where('area', $row['area'])->value('site'),
                    'kode' => $row['kode'],
                    'foto' => isset($row['foto']) ? implode(',', explode(',', $row['foto'])) : null,
                ]);
            } else {
                // Jika tidak ditemukan, tambahkan data baru
                $equipment = $this->createNewEquipment($row, $id_combine);
            }
        } else {
            // Jika id_combine kosong, tambahkan data baru
            $equipment = $this->createNewEquipment($row);
        }

        // Generate QR Code dan simpan
        $route = route('equipment.show', ['equipment' => $equipment->id]);
        $qrCode = QrCode::format('png')->size(200)->generate($route);
        $namaGambar = 'qrcode_' . $equipment->id . '.png';
        $path = public_path($namaGambar);
        file_put_contents($path, $qrCode);

        // Update QR Code pada record
        $equipment->update([
            'qrcode' => $namaGambar,
        ]);

        return $equipment;
    }

    /**
     * Tambahkan data baru ke database.
     *
     * @param array $row
     * @param string|null $id_combine
     * @return Equipment
     */
    private function createNewEquipment(array $row, $id_combine = null)
    {

        // Generate id_combine jika belum ada
        if (!$id_combine) {
            $jenisMapping = [
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
                // Tambahkan mapping lainnya sesuai kebutuhan...
            ];

            $singkatan1 = isset($jenisMapping[$row['jenis']])
                ? substr(str_replace(' ', '', ucwords(strtolower($jenisMapping[$row['jenis']]))), 0, 3)
                : '';

            $room = Room::where('room', $row['room'])->first();
            $singkatan2 = $room ? $room->kode : '';

            $id_combine = strtoupper($singkatan1 . $singkatan2 . sprintf('%05d', Equipment::max('id') + 1));
        }


        return Equipment::create([
            'jenis' => $row['jenis'],
            'customer' => $row['customer'],
            'brand' => $row['brand'],
            'serial_number' => $row['serial_number'],
            'nameplate' => $row['nameplate'],
            'tahun_installasi' => $row['tahun_installasi'],
            'tahun_pembuatan' => $row['tahun_pembuatan'],
            'kapasitas' => $row['kapasitas'],
            'area' => $row['site'],
            'jamoperasi' => $row['jamoperasi'],
            'jenis_freon' => $row['jenis_freon'],
            'room' => $row['room'],
            'other' => $row['other'],
            'kode_room' => Room::where('room', $row['room'])->value('kode'),
            'reguler' => $row['reguler'],
            'site' => Area::where('area', $row['area'])->value('site'),
            'kode' => $row['kode'],
            'foto' => isset($row['foto']) ? implode(',', explode(',', $row['foto'])) : null,
            'id_combine' => $id_combine,
        ]);
    }
}
