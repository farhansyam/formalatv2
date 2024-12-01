<?php

namespace App\Exports;

use App\Models\History;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class HistoryExport implements FromCollection, WithHeadings
{
    protected $site, $jenis, $startDate, $endDate;

    public function __construct($site, $jenis, $startDate, $endDate)
    {
        $this->site = $site;
        $this->jenis = $jenis;
        $this->startDate = $startDate;
        $this->endDate = $endDate;
    }

    public function collection()
    {
        $query = History::whereHas('equipment', function ($query) {
            // Filter by site if provided
            if ($this->site && $this->site != 'all') {
                $query->where('area', $this->site);
            }

            // Filter by jenis if provided and it's not 'all'
            if ($this->jenis && $this->jenis != 'all') {
                $query->where('jenis', $this->jenis);
            }
        })
            ->whereBetween('created_at', [$this->startDate, $this->endDate])
            ->with('equipment'); // Include related data from the equipment table

        return $query->get()->map(function ($history, $index) {
            // Human-readable 'jenis' mapping
            $jenisName = '-';
            if ($history->equipment->jenis == 1) {
                $jenisName = 'AC Split';
            } elseif ($history->equipment->jenis == 19) {
                $jenisName = 'Floor Standing';
            } elseif ($history->equipment->jenis == 20) {
                $jenisName = 'AC Cassette';
            } elseif ($history->equipment->jenis == 21) {
                $jenisName = 'Split Duct';
            } elseif ($history->equipment->jenis == 2) {
                $jenisName = 'Cooled Water Chiller';
            } elseif ($history->equipment->jenis == 9) {
                $jenisName = 'AHU';
            } elseif ($history->equipment->jenis == 14) {
                $jenisName = 'Exhaust Fan';
            }

            return [
                'no' => $index + 1,
                'id_hvac' => $history->equipment->id_combine ?? '-',
                'jenis' => $jenisName,  // Display the human-readable 'jenis'
                'status' => $history->approval,
                'type' => $history->type,
            ];
        });
    }



    public function headings(): array
    {
        return ['No', 'ID HVAC', 'Jenis', 'Status', 'Type'];
    }
}
