@extends('layouts.back2')
@section('content')
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="border-bottom title-part-padding">
        <h4 class="card-title mb-0 text-center">Tambah Schedule</h4>
      </div>
      <div class="card-body">
        <form action="{{ route('schedule.store') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="">Schedule</label>
              <input type="date" name="schedule" class="form-control" id="" value="" required="">
            </div>
            <div class="col-md-6 mb-3">
              <table class="table table-bordered" id="personelTeamTable">
                <thead>
                  <tr>
                    <!-- <th>No</th> -->
                    <th>Id Equipment</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <!-- Initial row -->
                  <tr>
                    <!-- <td>1</td> -->
                    <td>
                      <select name="id_equipment[]" id="id_equipment" class="form-control select2" data-live-search="true" required>
                        @foreach ($equipment as $data)
                        <option value="<?php
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


                                ?>"><?php
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

                                echo strtoupper($singkatan1 . $singkatan2 . $formattedId = sprintf('%05d', $data->id));
                                // Mengambil karakter pertama


                                ?>
</option>
                        @endforeach
                      </select>
                    </td>
                    <td></td>
                  </tr>
                  <tr>
                    <!-- <td>2</td> -->
                    <td>
                      <select name="id_equipment[]" id="" class="form-select select2" required>
                        @foreach ($equipment as $data)
                        <option value="<?php
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

                                echo strtoupper($singkatan1 . $singkatan2 . $formattedId = sprintf('%05d', $data->id));
                                // Mengambil karakter pertama


                                ?>"><?php
                                // Array untuk memetakan angka ke jenis
                                $jenis = [
                                   1 => "AC Split",
                                        3 => "AHUP",
                                        2 => "Cooled Water Chiller",
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

                                echo strtoupper($singkatan1 . $singkatan2 . $formattedId = sprintf('%05d', $data->id));
                                // Mengambil karakter pertama


                                ?>
</option>
                        @endforeach
                      </select>
                    </td>
                    <td><button type="button" class="btn btn-danger remove-row">X</button></td>

                  </tr>
                  <tr>
                    <!-- <td>3</td> -->
                    <td>
                      <select name="id_equipment[]" id="" class="form-select select2" required>
                        @foreach ($equipment as $data)
                        <option value="<?php
                                // Array untuk memetakan angka ke jenis
                                $jenis = [
                                   1 => "AC Split",
                                        3 => "AHUP",
                                        2 => "Cooled Water Chiller",
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

                                echo strtoupper($singkatan1 . $singkatan2 . $formattedId = sprintf('%05d', $data->id));
                                // Mengambil karakter pertama


                                ?>"><?php
                                // Array untuk memetakan angka ke jenis
                                $jenis = [
                                   1 => "AC Split",
                                        3 => "AHUP",
                                        2 => "Cooled Water Chiller",
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

                                echo strtoupper($singkatan1 . $singkatan2 . $formattedId = sprintf('%05d', $data->id));
                                // Mengambil karakter pertama


                                ?>
</option>
                        @endforeach
                      </select>
                    </td>
                    <td><button type="button" class="btn btn-danger remove-row">X</button></td>

                  </tr>
                  <tr>
                    <!-- <td>4</td> -->
                    <td>
                      <select name="id_equipment[]" id="" class="form-select select2" required>
                        @foreach ($equipment as $data)
                        <option value="<?php
                                // Array untuk memetakan angka ke jenis
                                $jenis = [
                                   1 => "AC Split",
                                        3 => "AHUP",
                                        2 => "Cooled Water Chiller",
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

                                echo strtoupper($singkatan1 . $singkatan2 . $formattedId = sprintf('%05d', $data->id));
                                // Mengambil karakter pertama


                                ?>"><?php
                                // Array untuk memetakan angka ke jenis
                                $jenis = [
                                   1 => "AC Split",
                                        3 => "AHUP",
                                        2 => "Cooled Water Chiller",
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

                                echo strtoupper($singkatan1 . $singkatan2 . $formattedId = sprintf('%05d', $data->id));
                                // Mengambil karakter pertama


                                ?>
</option>
                        @endforeach
                      </select>
                    </td>
                    <td><button type="button" class="btn btn-danger remove-row">X</button></td>

                  </tr>
                  <tr>
                    <!-- <td>5</td> -->
                    <td>
                      <select name="id_equipment[]" id="" class="form-select select2" required>
                        @foreach ($equipment as $data)
                        <option value="<?php
                                // Array untuk memetakan angka ke jenis
                                $jenis = [
                                   1 => "AC Split",
                                        3 => "AHUP",
                                        2 => "Cooled Water Chiller",
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

                                echo strtoupper($singkatan1 . $singkatan2 . $formattedId = sprintf('%05d', $data->id));
                                // Mengambil karakter pertama


                                ?>"><?php
                                // Array untuk memetakan angka ke jenis
                                $jenis = [
                                   1 => "AC Split",
                                        3 => "AHUP",
                                        2 => "Cooled Water Chiller",
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

                                echo strtoupper($singkatan1 . $singkatan2 . $formattedId = sprintf('%05d', $data->id));
                                // Mengambil karakter pertama


                                ?>
</option>
                        @endforeach
                      </select>
                    </td>
                    <td><button type="button" class="btn btn-danger remove-row">X</button></td>

                  </tr>
                </tbody>
              </table>
              <button type="button" class="btn btn-primary" id="addPersonelTeam">Add List</button>
              <br>
              <script src="{{asset('dist/libs/jquery/dist/jquery.min.js')}}"></script>

              <script>
                $(document).ready(function() {
                  var personelCounter = 5;

                  // Add a new row for Nama Personel Team
                  $("#addPersonelTeam").click(function() {
                    personelCounter++;
                    var newRow = `
        <tr>
          <td>
            <select name="id_equipment[]" class="form-select select2" required>
              @foreach ($equipment as $data)
              <option value="<?php
                                // Array untuk memetakan angka ke jenis
                                $jenis = [
                                   1 => "AC Split",
                                        3 => "AHUP",
                                        2 => "Cooled Water Chiller",
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

                                echo strtoupper($singkatan1 . $singkatan2 . $formattedId = sprintf('%05d', $data->id));
                                // Mengambil karakter pertama


                                ?>"><?php
                                // Array untuk memetakan angka ke jenis
                                $jenis = [
                                   1 => "AC Split",
                                        3 => "AHUP",
                                        2 => "Cooled Water Chiller",
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

                                echo strtoupper($singkatan1 . $singkatan2 . $formattedId = sprintf('%05d', $data->id));
                                // Mengambil karakter pertama


                                ?>
</option>
              @endforeach
            </select>
          </td>
          <td><button type="button" class="btn btn-danger remove-row">X</button></td>
        </tr>
      `;
                    $("#personelTeamTable tbody").append(newRow);

                    // Initialize Select2 for the newly added row
                    $(".select2").select2();
                  });

                  // Remove a row from the Nama Personel Team table
                  $("#personelTeamTable").on("click", ".remove-row", function() {
                    $(this).closest("tr").remove();
                    personelCounter--;
                    // Update the row numbers
                    $("#personelTeamTable tbody tr").each(function(index) {
                      // $(this).find("td:first").text(index + 1);
                    });
                  });

                  // Initialize Select2 for existing rows
                  $('.select2').select2();
                });
              </script>
            </div>
            <label for="">Id Equipment</label>

            <button class="btn btn-info px-4 mt-3" type="submit">
              Submit
            </button>
        </form>
      </div>
    </div>
  </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

<script>
  $('.select2').select2();
</script>
@endsection