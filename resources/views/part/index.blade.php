@extends('layouts.back2')
@section('content')
<!-- --------------------------------------------------- -->
<!-- Header End -->
<!-- --------------------------------------------------- -->
<div class="container-fluid">
  <!-- --------------------------------------------------- -->
  <!--  Form Inputs Grid Start -->
  <!-- --------------------------------------------------- -->
  <section>
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="border-bottom title-part-padding">
            <h4 class="card-title mb-0 text-center">Part Proposal</h4>
          </div>
          <script src="{{asset('dist/libs/jquery/dist/jquery.min.js')}}"></script>
          <div class="card-body">
            <table class="table table-striped table-hover table-bordered table no-wrap tablesaw-columntoggle" data-tablesaw-mode="columntoggle" id="example">
              <thead>
                <tr>


                  <th scope="col" data-tablesaw-sortable-col="" data-tablesaw-priority="2" class="border tablesaw-priority-2">
                    No
                  </th>
                  <th scope="col" data-tablesaw-sortable-col="" data-tablesaw-priority="2" class="border tablesaw-priority-2">
                    Id
                  </th>
                  <th scope="col" data-tablesaw-sortable-col="" data-tablesaw-priority="2" class="border tablesaw-priority-2">
                    jenis
                  </th>
                  <th scope="col" data-tablesaw-sortable-col="" data-tablesaw-priority="2" class="border tablesaw-priority-2">
                    kapasitas(PK)
                  </th>
                  <th scope="col" data-tablesaw-sortable-col="" data-tablesaw-priority="2" class="border tablesaw-priority-2">
                    Area Site
                  </th>
                  <th scope="col" data-tablesaw-sortable-col="" data-tablesaw-priority="2" class="border tablesaw-priority-2">
                    Site
                  </th>
                  <th scope="col" data-tablesaw-sortable-col="" data-tablesaw-priority="2" class="border tablesaw-priority-2">
                    Room
                  </th>
                  <th scope="col" data-tablesaw-sortable-col="" data-tablesaw-priority="2" class="border tablesaw-priority-2">
                    Tanggal Submit Form
                  </th>
                  <th scope="col" data-tablesaw-sortable-col="" data-tablesaw-priority="1" class="border tablesaw-priority-1">
                    <abbr title="Rotten Tomato Rating">Jumlah</abbr>
                  </th>
                  <th scope="col" data-tablesaw-sortable-col="" data-tablesaw-priority="1" class="border tablesaw-priority-1">
                    <abbr title="Rotten Tomato Rating">Option</abbr>
                  </th>
                </tr>
              </thead>
              <tbody>
                @php
                $no = 1;
                @endphp
                @foreach ($history as $data)
                <tr>
                  <td>{{$no++}}</td>
                  <td>
                    <?php
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
                    $singkatan1 = isset($jenis[$data->equipment1()->jenis]) ? substr(str_replace(' ', '', ucwords(strtolower($jenis[$data->equipment1()->jenis]))), 0, 3) : '';
                    $singkatan2 = strtoupper($data->equipment1()->kode_room);
                    // Mengambil karakter terakhir
                    echo strtoupper($singkatan1 . $singkatan2 . $formattedId = sprintf('%05d', $data->equipment1()->id));
                    // Mengambil karakter pertama


                    ?>
                  </td>

                  <td class="tablesaw-priority-3">@if($data->equipment1()->jenis == 1)
                    {{ "AC Split" }}
                    @elseif($data->equipment1()->jenis == 2)
                    {{ "Cooled Water Chiller" }}
                    @elseif($data->equipment1()->jenis == 3)
                    {{ "AHUP" }}
                    @elseif($data->equipment1()->jenis == 4)
                    {{ "PAC" }}
                    @elseif($data->equipment1()->jenis == 5)
                    {{ "Cold Storage" }}
                    @elseif($data->equipment1()->jenis == 6)
                    {{ "Cooling Unit & AC Panel" }}
                    @elseif($data->equipment1()->jenis == 7)
                    {{ "Mini Chiller" }}
                    @elseif($data->equipment1()->jenis == 8)
                    {{ "Evaporative Air Cooler" }}
                    @elseif($data->equipment1()->jenis == 9)
                    {{ "AHU" }}
                    @elseif($data->equipment1()->jenis == 10)
                    {{ "Cooling tower" }}
                    @elseif($data->equipment1()->jenis == 11)
                    {{ "Humidifier" }}
                    @elseif($data->equipment1()->jenis == 12)
                    {{ "Dehumidifier" }}
                    @elseif($data->equipment1()->jenis == 13)
                    {{ "FCU (Fan Cooling Unit)" }}
                    @elseif($data->equipment1()->jenis == 14)
                    {{ "Exhaust Fan" }}
                    @elseif($data->equipment1()->jenis == 15)
                    {{ "Pompa" }}
                    @elseif($data->equipment1()->jenis == 16)
                    {{ "Spot Cooling" }}
                    @elseif($data->equipment1()->jenis == 17)
                    {{ "Water Mist" }}
                    @elseif($data->equipment1()->jenis == 18)
                    {{ "Chiller Centrifugal" }}
                    @elseif($data->equipment1()->jenis == 19)
                    {{ "Floor Standing" }}
                    @elseif($data->equipment1()->jenis == 20)
                    {{ "Ac Cassette" }}
                    @elseif($data->equipment1()->jenis == 21)
                    {{ "Split Duct" }}
                    @elseif($data->equipment1()->jenis == 22)
                    {{ "Air Cooled Chiller" }}
                    @elseif($data->equipment1()->jenis == 23)
                    {{ "Centralize Chiller" }}
                    @elseif($data->equipment1()->jenis == 24)
                    {{ "Ultrasonic Humidifier" }}
                    @elseif($data->equipment1()->jenis == 25)
                    {{ "Piping & Accs" }}
                    @elseif($data->equipment1()->jenis == 26)
                    {{ "Panel SCR" }}
                    @elseif($data->equipment1()->jenis == 27)
                    {{ "ATCS" }}
                    @elseif($data->equipment1()->jenis == 28)
                    {{ "Lakos Filter" }}
                    @endif
                  </td>
                  <td class="tablesaw-priority-3">{{$data->equipment1()->kapasitas}}</td>
                  <td class="tablesaw-priority-3">{{$data->equipment1()->area}}</td>
                  <td class="tablesaw-priority-3">{{$data->equipment1()->site}}</td>
                  <td class="tablesaw-priority-3">{{$data->equipment1()->room}}</td>
                  <td class="tablesaw-priority-3">{{ \Carbon\Carbon::parse($data->created_at)->format('d F Y') }}</td>
                  <td class="tablesaw-priority-3">{{$data->listCount}}</td>
                  <td class="tablesaw-priority-1">
                    <div style="display: flex; align-items: center;">
                      <a href="{{ route('part.show', $data->id_act) }}" style="text-decoration: none;">
                        <button class="btn btn-success">Detail Part Proposal</button>
                      </a>


                    </div>


                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

  </section>
  <!-- --------------------------------------------------- -->
  <!--  Form Inputs Grid End -->
  <!-- --------------------------------------------------- -->
</div>
</div>

</div>

@endsection