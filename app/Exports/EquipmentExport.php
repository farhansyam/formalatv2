<?php

namespace App\Exports;

use App\Models\Equipment;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class EquipmentExport implements FromCollection, WithHeadings, WithMapping
{
    private $index = 0; // Inisialisasi untuk nomor urut

    public function collection()
    {
        return Equipment::all();
    }

    public function headings(): array
    {
        return [
            'No', // Tambahkan header untuk nomor urut
            'Jenis',
            'Customer',
            'Brand',
            'Serial Number',
            'Nameplate',
            'Tahun Installasi',
            'Tahun Pembuatan',
            'Kapasitas',
            'Area',
            'Jam Operasi',
            'Jenis Freon',
            'Room',
            'Other',
            'Reguler',
            'Kode',
            'Site'
        ];
    }

    public function map($equipment): array
    {
        return [
            ++$this->index, // Increment untuk nomor urut
            $equipment->jenis,
            $equipment->customer,
            $equipment->brand,
            $equipment->serial_number,
            $equipment->nameplate,
            $equipment->tahun_installasi,
            $equipment->tahun_pembuatan,
            $equipment->kapasitas,
            $equipment->area,
            $equipment->jamoperasi,
            $equipment->jenis_freon,
            $equipment->room,
            $equipment->other,
            $equipment->reguler,
            $equipment->kode,
            $equipment->site,
        ];
    }
}
