<?php

namespace App\Http\Controllers;

use App\Models\Equipment;
use App\Models\ItemSchedule;
use App\Models\Schedule;
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
        $schedule = Schedule::all();
        return view('schedule.index',compact('schedule'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $equipment = Equipment::all();
        return view('schedule.create',compact('equipment'));
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
                'customer' => $eq->customer
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
        return view('schedule.edit',compact('schedule','equipment'));
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

    function GetSchedule(){
        $events = ItemSchedule::all();

        $data_arr = [];

        foreach ($events as $event) {
            $data_arr[] = [
                'id' => $event->id,
                'title' => $event->id_equipement,
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
}
