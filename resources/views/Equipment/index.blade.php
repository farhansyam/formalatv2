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
            <h4 class="card-title mb-0 text-center">equipment</h4>
          </div>
          <div class="card-body">
              @if (auth()->user()->role_sipm == 'user')
              @else
                  <a href="{{route('equipment.create')}}">
              <button class="btn btn-primary">Tambah</button></a>
              <a href="{{route('import.form')}}">
              <button class="btn btn-success">Import Excel</button></a>

              @endif
            <select id="jenisFilter">
              <option value="">Filter Jenis Equipment</option>
              <option value="AC Split">AC Split</option>
              <option value="Floor Standing">Floor Standing</option>
              <option value="Ac Cassette">Ac Cassette</option>
              <option value="Split Duct">Split Duct</option>
              <option value="Cooled Water Chiller">Cooled Water Chiller</option>
              <option value="AHUP">AHUP</option>
              <option value="PAC">PAC</option>
              <option value="old Storage">Cold Storage</option>
              <option value="Cooling Unit & AC Panel">Cooling Unit & AC Panel</option>
              <option value="Mini Chiller">Mini Chiller</option>
              <option value="Evaporative Air Cooler">Evaporative Air Cooler</option>
              <option value="AHU">AHU</option>
              <option value="Cooling tower">Cooling tower</option>
              <option value="Humidifier">Humidifier</option>
              <option value="Dehumidifier">Dehumidifier</option>
              <option value="FCU (Fan Cooling Unit)">FCU (Fan Cooling Unit)</option>
              <option value="Exhaust Fan">Exhaust Fan</option>
              <option value="Pompa">Pompa</option>
              <option value="Spot Cooling">Spot Cooling</option>
              <option value="Water Mist">Water Mist</option>
              <option value="Chiller Centrifugal">Chiller Centrifugal</option>
              <option value="Air Cooled Chiller">Air Cooled Chiller</option>
              <option value="Centralize Chiller">Centralize Chiller</option>
              <option value="Ultrasonic Humidifier">Ultrasonic Humidifier</option>
              <option value="Piping & Accs">Piping & Accs</option>
              <option value="Panel SCR">Panel SCR</option>
              <option value="ATCS">ATCS</option>
              <option value="Lakos Filter">Lakos Filter</option>
              <!-- Tambahkan opsi lainnya sesuai dengan jenis peralatan yang Anda miliki -->
            </select>
                  @if(auth()->user()->role_sipm != 'user')

            <select id="roomFilter">
              <option value="">Filter Room</option>
              @foreach ($room as $data)
              <option value="{{$data->room}}">{{$data->room}}</option>

              @endforeach
              <!-- Tambahkan opsi lainnya sesuai dengan ruangan yang Anda miliki -->
            </select>
            @endif
            <br><br>
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
                    Site
                  </th>
                  <th scope="col" data-tablesaw-sortable-col="" data-tablesaw-priority="2" class="border tablesaw-priority-2">
                    Customer
                  </th>
                  <th scope="col" data-tablesaw-sortable-col="" data-tablesaw-priority="2" class="border tablesaw-priority-2">
                    Last PM Date
                  </th>
                  <th scope="col" data-tablesaw-sortable-col="" data-tablesaw-priority="2" class="border tablesaw-priority-2">
                    Last TS Date
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
                @foreach ($equipment as $data)
                <tr>
                  <td>{{$no++}}</td>
                  <td>
                    <?php
                    // Array untuk memetakan angka ke jenis
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
                    $singkatan1 = isset($jenis[$data->jenis]) ? substr(str_replace(' ', '', ucwords(strtolower($jenis[$data->jenis]))), 0, 3) : '';
                    $singkatan2 = strtoupper($data->kode_room);
                    // Mengambil karakter terakhir
                    echo strtoupper($singkatan1 . $singkatan2 . $formattedId = sprintf('%05d', $data->id));
                    // Mengambil karakter pertama


                    ?>
                  </td>

                  <td class="tablesaw-priority-3">@if($data->jenis == 1)
                    {{ "AC Split" }}
                    @elseif($data->jenis == 2)
                    {{ "Cooled Water Chiller" }}
                    @elseif($data->jenis == 3)
                    {{ "AHUP" }}
                    @elseif($data->jenis == 4)
                    {{ "PAC" }}
                    @elseif($data->jenis == 5)
                    {{ "Cold Storage" }}
                    @elseif($data->jenis == 6)
                    {{ "Cooling Unit & AC Panel" }}
                    @elseif($data->jenis == 7)
                    {{ "Mini Chiller" }}
                    @elseif($data->jenis == 8)
                    {{ "Evaporative Air Cooler" }}
                    @elseif($data->jenis == 9)
                    {{ "AHU" }}
                    @elseif($data->jenis == 10)
                    {{ "Cooling tower" }}
                    @elseif($data->jenis == 11)
                    {{ "Humidifier" }}
                    @elseif($data->jenis == 12)
                    {{ "Dehumidifier" }}
                    @elseif($data->jenis == 13)
                    {{ "FCU (Fan Cooling Unit)" }}
                    @elseif($data->jenis == 14)
                    {{ "Exhaust Fan" }}
                    @elseif($data->jenis == 15)
                    {{ "Pompa" }}
                    @elseif($data->jenis == 16)
                    {{ "Spot Cooling" }}
                    @elseif($data->jenis == 17)
                    {{ "Water Mist" }}
                    @elseif($data->jenis == 18)
                    {{ "Chiller Centrifugal" }}
                    @elseif($data->jenis == 19)
                    {{ "Floor Standing" }}
                    @elseif($data->jenis == 20)
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
                  <td class="tablesaw-priority-3">{{$data->kapasitas}}</td>
                  <td class="tablesaw-priority-3">{{$data->site}}</td>
                  <td class="tablesaw-priority-3">{{$data->customer}}</td>
                  <td class="tablesaw-priority-3">{{$data->update_pm}}</td>
                  <td class="tablesaw-priority-3">{{$data->update_ts}}</td>
                  <td class="tablesaw-priority-1">
                    <div style="display: flex; align-items: center;">
                      <a href="{{ route('equipment.show', $data->id) }}" style="text-decoration: none;">
                        <button class="btn btn-success">Detail</button>
                      </a>
                      <a href="{{ route('equipment.print', $data->id) }}" target="_blank" style="text-decoration: none;margin-left: 10px;">
                        <button class="btn btn-warning">Print</button>
                      </a>
                      @if (auth()->user()->akses !=3)
                      <a href="{{ route('equipment.edit', $data->id) }}" style="text-decoration: none;margin-left: 10px;">
                        <button class="btn btn-info">Edit</button>
                      </a>

                      @endif

                    </div>


                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
            <script>
              $(document).ready(function() {
                $('#jenisFilter, #roomFilter').change(function() {
                  var jenis = $('#jenisFilter').val();
                  var room = $('#roomFilter').val();
                  $('#example tbody tr').hide();
                  $('#example tbody tr').each(function() {
                    if ((jenis === '' || $(this).find('td:eq(2)').text().indexOf(jenis) !== -1) &&
                      (room === '' || $(this).find('td:eq(6)').text().indexOf(room) !== -1)) {
                      $(this).show();
                    }
                  });
                });
              });
            </script>
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