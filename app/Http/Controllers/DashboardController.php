<?php

namespace App\Http\Controllers;

use index;
use Carbon\Carbon;
use App\Models\History;
use App\Models\Customer;
use App\Models\Equipment;
use Illuminate\Http\Request;
use App\Models\FormBeritaAcara;
use App\Models\ItemSchedule;
use App\Models\ServiceReport;



class DashboardController extends Controller
{
    public function index()
    {
        $customer = Customer::all();
        $troubleshoot = ServiceReport::count();
        $equipment = Equipment::count();
        $survey = FormBeritaAcara::count();
        $now = Carbon::now();
        $month = $now->month;
        $history = History::whereMonth('created_at', $month)->get();

        if (auth()->user()->role_sipm == 'user' || auth()->user()->role_sipm == 'spv') {
            // Ambil nilai site dari user
            $sites = explode(',', auth()->user()->site); // Pisahkan jika multiple, tetap sebagai array jika single

            // Query jadwal berdasarkan site
            $jadwal = ItemSchedule::whereIn('site', $sites)->get();

            $groupedBySite = $jadwal->groupBy('site')->map(function ($items) {
                // Default nilai untuk setiap bulan
                $defaultMonths = [
                    'bulan_ini' => ['pending' => 0, 'progress' => 0, 'completed' => 0],
                    'bulan_lalu' => ['pending' => 0, 'progress' => 0, 'completed' => 0],
                    'dua_bulan_lalu' => ['pending' => 0, 'progress' => 0, 'completed' => 0],
                ];

                // Kelompokkan berdasarkan bulan
                $groupedByMonth = $items->groupBy(function ($item) {
                    $createdMonth = Carbon::parse($item->schedule)->startOfMonth();
                    $currentMonth = now()->startOfMonth();

                    if ($createdMonth->equalTo($currentMonth)) {
                        return 'bulan_ini';
                    } elseif ($createdMonth->equalTo($currentMonth->subMonth())) {
                        return 'bulan_lalu';
                    } elseif ($createdMonth->equalTo($currentMonth->subMonths(2))) {
                        return 'dua_bulan_lalu';
                    } else {
                        return 'lainnya';
                    }
                });

                // Hitung jumlah berdasarkan status dalam setiap bulan
                $countsByMonth = $groupedByMonth->map(function ($monthGroup) {
                    return [
                        'pending' => $monthGroup->where('status', '#FFB6B6')->count(),
                        'progress' => $monthGroup->where('status', '#FFAE1F')->count(),
                        'completed' => $monthGroup->where('status', '#13DEB9')->count(),
                    ];
                });

                // Gabungkan dengan data default, isi 0 jika tidak ada data
                return array_merge($defaultMonths, $countsByMonth->toArray());
            });
            return view('index', compact('customer', 'equipment', 'survey', 'history', 'troubleshoot', 'groupedBySite'));
        }

        return view('index', compact('customer', 'equipment', 'survey', 'history', 'troubleshoot'));
    }
}
