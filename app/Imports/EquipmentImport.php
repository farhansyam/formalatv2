<?php

namespace App\Imports;

use App\Models\Area;
use App\Models\Room;
use App\Models\Equipment;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use App\Jobs\GenerateQRCodeJob;

class EquipmentImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        // Proses penyimpanan data Equipment
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
        $equipment->kode_room = Room::where('room', $row['room'])->value('kode');
        $equipment->site = Area::where('area', $row['area'])->value('site');
        $equipment->reguler = $row['reguler'];
        $equipment->kode = $row['kode'];
        $equipment->save();

        // Kirim job untuk membuat QR Code ke queue

        GenerateQRCodeJob::dispatch($equipment);
        return $equipment;
    }
}
