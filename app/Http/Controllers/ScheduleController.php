<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\Schedule;
use App\Models\Equipment;
use App\Models\ItemSchedule;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $area = Area::all();
        return view('schedule.index', compact('area'));
    }
    public function all()
    {
        $area = Area::all();
        return view('schedule.all', compact('area'));
    }
    public function progres()
    {
        $area = Area::all();
        return view('schedule.progress', compact('area'));
    }
    public function pending()
    {
        $area = Area::all();
        return view('schedule.index', compact('area'));
    }
    public function finish()
    {
        $area = Area::all();
        return view('schedule.complete', compact('area'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $equipment = Equipment::all();
        return view('schedule.create', compact('equipment'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $schedule = new Schedule();
        $schedule->schedule = $request->schedule;
        // $schedule->id_equipement = $request->id_equipment;

        $schedule->save();



        $id_equipment = $request->input('id_equipment');

        // Loop untuk menyimpan data list kebutuhan berita acara
        foreach (range(0, count($id_equipment) - 1) as $index) {
            // Menghapus "0" di belakang string
            $kode_baru = substr($id_equipment[$index], 6);
            $kode_baru2[] = ltrim($kode_baru, '0');

            // Menggunakan $kode_baru2 untuk mencari peralatan dengan ID yang sesuai
            $eq = Equipment::find($kode_baru2[$index]);

            ItemSchedule::create([
                'id_schedule' => $schedule->id,
                'id_eq' => $kode_baru2[$index],
                'id_equipement' => $id_equipment[$index], // Menggunakan deskripsi dari peralatan
                'status' => "#ffb6b6", // Menggunakan deskripsi dari peralatan
                'schedule' => $request->schedule,
                'customer' => $eq->customer,
                'site' => $eq->area
            ]);
        }

        return redirect()->route('schedule.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function show(Schedule $schedule)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function edit(Schedule $schedule)
    {
        $equipment = Equipment::all();
        return view('schedule.edit', compact('schedule', 'equipment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Schedule $schedule)
    {
        $schedule->schedule = $request->schedule;
        $schedule->id_equipement = $request->id_equipment;
        $schedule->save();
        return redirect()->route('schedule.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function destroy(Schedule $schedule)
    {

        $schedule->delete();
        return redirect()->route('schedule.index');
    }

    function GetSchedule()
    {
        if (session()->has('site')) {
            if (session('site') === 'all') {
                // Jika session 'site' bernilai 'all', ambil semua data
                $events = ItemSchedule::where('status', '#ffb6b6')->get();
            } else {
                // Jika session 'site' memiliki nilai tertentu, filter berdasarkan 'site'
                $events = ItemSchedule::where('status', '#ffb6b6')
                    ->where('site', session('site'))
                    ->get();
            }
        } else {
            // Jika tidak ada session 'site', ambil semua data
            $events = ItemSchedule::where('status', '#ffb6b6')->get();
        }

        $data_arr = [];


        foreach ($events as $event) {
            // Mengambil 5 angka terakhir setelah menghilangkan angka 0 di depan
            preg_match('/(\d{5})$/', ltrim($event->id_equipement, '0'), $matches);
            $numericId = isset($matches[0]) ? intval($matches[0]) : null; // Ambil angka yang sudah diproses
            $data_arr[] = [
                'id' => $event->id,
                'title' => $event->id_equipement,
                'numeric_id' => $numericId, // Tambahkan angka belakang
                'start' => date("Y-m-d", strtotime($event->schedule)),
                'end' => date("Y-m-d", strtotime($event->schedule)),
                'color' => $event->status, // 'green'; pass colour name
                // 'url' => 'https://www.shinerweb.com',
            ];
        }

        if (count($data_arr) > 0) {
            $data = [
                'status' => true,
                'msg' => 'successfully!',
                'data' => $data_arr
            ];
        } else {
            $data = [
                'status' => false,
                'msg' => 'Error!'
            ];
        }

        return response()->json($data);
    }
    function GetScheduleProgres()
    {

        if (session()->has('site')) {
            if (session('site') === 'all') {
                // Jika session 'site' bernilai 'all', ambil semua data
                $events = ItemSchedule::where('status', '#FFAE1F')->get();
            } else {
                // Jika session 'site' memiliki nilai tertentu, filter berdasarkan 'site'
                $events = ItemSchedule::where('status', '#FFAE1F')
                    ->where('site', session('site'))
                    ->get();
            }
        } else {
            // Jika tidak ada session 'site', ambil semua data
            $events = ItemSchedule::where('status', '#FFAE1F')->get();
        }
        $data_arr = [];


        foreach ($events as $event) {
            // Mengambil 5 angka terakhir setelah menghilangkan angka 0 di depan
            preg_match('/(\d{5})$/', ltrim($event->id_equipement, '0'), $matches);
            $numericId = isset($matches[0]) ? intval($matches[0]) : null; // Ambil angka yang sudah diproses
            $data_arr[] = [
                'id' => $event->id,
                'title' => $event->id_equipement,
                'numeric_id' => $numericId, // Tambahkan angka belakang
                'start' => date("Y-m-d", strtotime($event->schedule)),
                'end' => date("Y-m-d", strtotime($event->schedule)),
                'color' => $event->status, // 'green'; pass colour name
                // 'url' => 'https://www.shinerweb.com',
            ];
        }

        if (count($data_arr) > 0) {
            $data = [
                'status' => true,
                'msg' => 'successfully!',
                'data' => $data_arr
            ];
        } else {
            $data = [
                'status' => false,
                'msg' => 'Error!'
            ];
        }

        return response()->json($data);
    }
    function GetScheduleAll()
    {
        if (session('site') === 'all') {
            $events = ItemSchedule::all();
        } else {

            $events = ItemSchedule::where('site', session('site'))->get();
        }

        $data_arr = [];


        foreach ($events as $event) {
            // Mengambil 5 angka terakhir setelah menghilangkan angka 0 di depan
            preg_match('/(\d{5})$/', ltrim($event->id_equipement, '0'), $matches);
            $numericId = isset($matches[0]) ? intval($matches[0]) : null; // Ambil angka yang sudah diproses
            $data_arr[] = [
                'id' => $event->id,
                'title' => $event->id_equipement,
                'numeric_id' => $numericId, // Tambahkan angka belakang
                'start' => date("Y-m-d", strtotime($event->schedule)),
                'end' => date("Y-m-d", strtotime($event->schedule)),
                'color' => $event->status, // 'green'; pass colour name
                // 'url' => 'https://www.shinerweb.com',
            ];
        }

        if (count($data_arr) > 0) {
            $data = [
                'status' => true,
                'msg' => 'successfully!',
                'data' => $data_arr
            ];
        } else {
            $data = [
                'status' => false,
                'msg' => 'Error!'
            ];
        }

        return response()->json($data);
    }
    function GetScheduleComplete()
    {
        // Mengecek apakah ada session 'site'
        if (session()->has('site')) {
            if (session('site') === 'all') {
                // Jika session 'site' bernilai 'all', ambil semua data
                $events = ItemSchedule::where('status', '#13DEB9')->get();
            } else {
                // Jika session 'site' memiliki nilai tertentu, filter berdasarkan 'site'
                $events = ItemSchedule::where('status', '#13DEB9')
                    ->where('site', session('site'))
                    ->get();
            }
        } else {
            // Jika tidak ada session 'site', ambil semua data
            $events = ItemSchedule::where('status', '#13DEB9')->get();
        }

        $data_arr = [];


        foreach ($events as $event) {
            // Mengambil 5 angka terakhir setelah menghilangkan angka 0 di depan
            preg_match('/(\d{5})$/', ltrim($event->id_equipement, '0'), $matches);
            $numericId = isset($matches[0]) ? intval($matches[0]) : null; // Ambil angka yang sudah diproses
            $data_arr[] = [
                'id' => $event->id,
                'title' => $event->id_equipement,
                'numeric_id' => $numericId, // Tambahkan angka belakang
                'start' => date("Y-m-d", strtotime($event->schedule)),
                'end' => date("Y-m-d", strtotime($event->schedule)),
                'color' => $event->status, // 'green'; pass colour name
                // 'url' => 'https://www.shinerweb.com',
            ];
        }

        if (count($data_arr) > 0) {
            $data = [
                'status' => true,
                'msg' => 'successfully!',
                'data' => $data_arr
            ];
        } else {
            $data = [
                'status' => false,
                'msg' => 'Error!'
            ];
        }

        return response()->json($data);
    }

    function schedulession($session)
    {
        // Hapus session sebelumnya dengan nama 'site'
        session()->forget('site');

        // Set session baru dengan nama 'site' menggunakan parameter yang diberikan
        session(['site' => $session]);

        return back();
    }
}
