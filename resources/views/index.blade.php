@extends('layouts.back2')

@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-md-6">
      @foreach ($customer as $data)
      <br>
      <h5>Customer : {{$data->nama}}</h5>
      <div class="row" style="background-color: #9edda8;">
        <div class="col-sm-6 col-xl-4">
          <br>

          <div class="card bg-light-warning shadow-none">
            <div class="card-body p-2">
              @php
              $completedPMThisMonth = $data->history()
              ->where('created_at', '>=', Carbon\Carbon::now()->startOfMonth())
              ->whereNotIn('type', ['Survei', 'Troubleshoot'])
              ->count();

              $totalPMThisMonth = $data->schedulesthismonth()->count();

              // Hitung persentase jika totalPMThisMonth tidak sama dengan 0
              $percentage = ($totalPMThisMonth != 0) ? ($completedPMThisMonth / $totalPMThisMonth) * 100 : 0;
              @endphp

              <h6 class="mb-0 ms-3">TOTAL PM THIS MONTH : <br><br>
                {{ $completedPMThisMonth }} Unit dari {{ $totalPMThisMonth }} ({{ $percentage }}%)
              </h6>
            </div>
          </div>

        </div>
        <div class="col-sm-6 col-xl-4">
          <br>

          <div class="card bg-light-danger shadow-none">
            <div class="card-body p-2">
              <h6 class="mb-0 ms-3">TOTAL PM LAST MONTH : <br><br> @php

                $completelastmonth = $data->history()
                ->where('created_at', '>=', Carbon\Carbon::now()->subMonth()->startOfMonth())
                ->where('created_at', '<', Carbon\Carbon::now()->startOfMonth())
                  ->whereNotIn('type', ['Survey', 'Troubleshoot'])
                  ->count();

                  $totallastmonth = $data->schedulesthelastmonth()->count();

                  $percentage = ($totallastmonth != 0) ? ($completelastmonth / $totallastmonth) * 100 : 0;
                  @endphp
                  {{ $completelastmonth }} Unit dari {{ $totallastmonth }} ({{ $percentage }}%)
              </h6>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-xl-4">
          <br>

          <div class="card bg-light-primary shadow-none">
            <div class="card-body p-2">
              <h6 class="mb-0 ms-3">TOTAL PM 2 MONTH AGO : <br><br> @php

                $complete2month = $data->history()
                ->where('created_at', '>=', Carbon\Carbon::now()->subMonths(2)->startOfMonth())
                ->where('created_at', '<', Carbon\Carbon::now()->subMonths(1)->startOfMonth())
                  ->whereNotIn('type', ['Survey', 'Troubleshoot'])
                  ->count();

                  $total2month = $data->schedulesthetwomonthsago()->count();
                  $percentage = ($total2month != 0) ? ($complete2month / $total2month) * 100 : 0;
                  @endphp
                  {{ $complete2month }} Unit dari {{ $total2month }} ({{ $percentage }}%)
              </h6>
            </div>
          </div>
        </div>

      </div>
      @endforeach <br>
    </div>
    <div class="col-md-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title fw-semibold">History This Month</h5>
          <div class="table-responsive mt-4">
            <table class="table table-borderless text-nowrap align-middle mb-0" id="example">
              <thead>
                <th>No</th>
                <th>Id</th>
                <th>Jenis Equipment</th>
                <th>Room</th>
                <th>Date</th>
                <th>Action</th>
              </thead>
              <tbody>
                @php
                $no =1;
                @endphp
                @foreach ($history as $data)
                @php
                $equipment = \App\Models\Equipment::find($data->id_equipment);
                @endphp
                <tr class="bg-light">
                  <td class="rounded-start bg-transparent">
                    <div class="d-flex align-items-center gap-3">
                      <div>
                        <span class="">{{$no++}}</span>
                      </div>
                    </div>
                  </td>

                  <td class="bg-transparent">
                    <i class=""></i><?php
                                    // Array untuk memetakan angka ke jenis
                                    $jenis = [
                                      1 => "AC Split",
                                      2 => "AHUP",
                                      3 => "Cooled Water Chiller",
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
                                    $singkatan1 = isset($jenis[$equipment->jenis]) ? substr(str_replace(' ', '', ucwords(strtolower($jenis[$equipment->jenis]))), 0, 3) : '';
                                    $singkatan2 = strtoupper(substr($equipment->area, 0, 1));

                                    // Mengambil karakter tengah (atau kedua karakter dari tengah jika panjang genap)
                                    $panjang = strlen($equipment->area);
                                    $posisi_tengah = floor($panjang / 2);
                                    $singkatan2 .= strtoupper($equipment->kode_room);

                                    // Mengambil karakter terakhir
                                    $singkatan2 .= strtoupper(substr($equipment->area, -1));
                                    echo strtoupper($singkatan1 . $singkatan2 . $formattedId = sprintf('%05d', $equipment->id));
                                    // Mengambil karakter pertama


                                    ?>
                  </td>

                  <td class="bg-transparent">
                    @if($equipment->jenis == 1)
                    {{ "AC Split" }}
                    @elseif($equipment->jenis == 2)
                    {{ "AHUP" }}
                    @elseif($equipment->jenis == 3)
                    {{ "Cooled Water Chiller" }}
                    @elseif($equipment->jenis == 4)
                    {{ "PAC" }}
                    @elseif($equipment->jenis == 5)
                    {{ "Cold Storage" }}
                    @elseif($equipment->jenis == 6)
                    {{ "Cooling Unit & AC Panel" }}
                    @elseif($equipment->jenis == 7)
                    {{ "Mini Chiller" }}
                    @elseif($equipment->jenis == 8)
                    {{ "Evaporative Air Cooler" }}
                    @elseif($equipment->jenis == 9)
                    {{ "AHU" }}
                    @elseif($equipment->jenis == 10)
                    {{ "Cooling tower" }}
                    @elseif($equipment->jenis == 11)
                    {{ "Humidifier" }}
                    @elseif($equipment->jenis == 12)
                    {{ "Dehumidifier" }}
                    @elseif($equipment->jenis == 13)
                    {{ "FCU (Fan Cooling Unit)" }}
                    @elseif($equipment->jenis == 14)
                    {{ "Exhaust Fan" }}
                    @elseif($equipment->jenis == 15)
                    {{ "Pompa" }}
                    @elseif($equipment->jenis == 16)
                    {{ "Spot Cooling" }}
                    @elseif($equipment->jenis == 17)
                    {{ "Water Mist" }}
                    @elseif($equipment->jenis == 18)
                    {{ "Chiller Centrifugal" }}
                    @elseif($equipment->jenis == 19)
                    {{ "Floor Standing" }}
                    @elseif($equipment->jenis == 20)
                    {{ "Ac Cassette" }}
                    @elseif($data->jenis == 21)
                    {{ "Split Duct" }}
                    @elseif($data->jenis == 22)
                    {{ "Air Cooled Chiller" }}
                    @elseif($data->jenis == 23)
                    {{ "Centralize Chiller" }}
                    @elseif($data->jenis == 24)
                    {{ "Ultrasonic Humidifier" }}
                    @elseif($data->jenis == 25)
                    {{ "Piping & Accs" }}
                    @elseif($data->jenis == 26)
                    {{ "Panel SCR" }}
                    @elseif($data->jenis == 27)
                    {{ "ATCS" }}
                    @elseif($data->jenis == 28)
                    {{ "Lakos Filter" }}
                    @endif
                  </td>
                  <td class="bg-transparent">
                    {{$equipment->room}}
                  </td>
                  <td class="bg-transparent">{{$data->created_at}}</td>
                  <td class="text-end rounded-end bg-transparent">
                    <span class="badge bg-warning">{{$data->type}}</span>
                    <a href="{{ route('formberitaacara.show', $data->id_act) }}" class="badge bg-primary">Detail</a>
                  </td>
                </tr>
                @endforeach

              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection