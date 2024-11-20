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
            <h4 class="card-title mb-0 text-center">Berita Acara Survey/Pengecekan</h4>
          </div>
          <div class="card-body">
            <form action="{{ route('formberitaacara.store') }}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="row">
                <div class="col-md-4 mb-3">
                  <label for="">Customer</label>
                  <input type="text" name="customer" class="form-control" id="" value="{{$equipment->customer}}" required="">
                  <input type="hidden" name="id_equipment" class="form-control" id="" value="{{$equipment->id}}" required="">
                  <input type="hidden" name="id_equipment" class="form-control" id="" value="{{$id}}" required="">
                  <label for="">No Kontak</label>
                  <input type="text" name="no_kontak" class="form-control" id="" value="" required="">
                  <label for="">Alamat</label>
                  <textarea class="form-control" required name="alamat" id="" cols="10" rows="4">{{$equipment->customer()->alamat}}</textarea>

                </div>
                <div class="col-md-4 mb-3">
                  <label for="">Engineer List</label>
                  <textarea class="form-control" name="engineer_list" required id="" cols="10" rows="4"></textarea>
                </div>
                <div class="col-md-4 mb-3">
                  <label for="">Tanggal Survey</label>
                  <div class="input-group">
                    <input type="date" class="form-control" id="" aria-describedby="inputGroupPrepend2" required="" name="tanggal_survey">
                  </div>
                </div>
              </div>
              <h5 class="text-center" style="background-color: black;color:white">Task List</h5>
              <div class="row">
                <div class="col-md-6 mb-3">
                  <div class="form-check">
                    <input type="checkbox" name="c1" value="1" class="form-check-input" id="invalidcheck1">
                    <label class="form-check-label" for="invalidcheck1">1. Intensive Safety Briefing</label>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" name="c2" value="1" class="form-check-input" id="invalidcheck2">
                    <label class="form-check-label" for="invalidcheck2">2. Memastikan tools teknisi memadai</label>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" name="c3" value="1" class="form-check-input" id="invalidcheck3">
                    <label class="form-check-label" for="invalidcheck3">3. Memastikan APD&Pernut-JSA lengkap</label>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" name="c4" value="1" class="form-check-input" id="invalidcheck4">
                    <label class="form-check-label" for="invalidcheck4">4. Dokumen penunjang memadai(jika dibutuhkan)</label>
                  </div>
                </div>
                <div class="col-md-6 mb-3">
                  <div class="form-check">
                    <input type="checkbox" name="c5" value="1" class="form-check-input" id="invalidcheck5">
                    <label class="form-check-label" for="invalidcheck5">5. Mencatat data equipment</label>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" name="c6" value="1" class="form-check-input" id="invalidcheck6">
                    <label class="form-check-label" for="invalidcheck6">6. Mencatat laporan/keluhan teknis user</label>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" name="c7" value="1" class="form-check-input" id="invalidcheck7">
                    <label class="form-check-label" for="invalidcheck7">7. Melakukan survey dengan aman,menyeluruh,dan terukur</label>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" name="c8" value="1" class="form-check-input" id="invalidcheck8">
                    <label class="form-check-label" for="invalidcheck8">8. Dokumen Melakukan analisa,tindakan,dan rekomendasi</label>
                  </div>

                </div>
              </div>

              <h5 class="text-center" style="background-color: black;color:white">Jenis Survey</h5>

              <div class="row">
                <div class="col-md-2 mb-2">
                  <input type="radio" name="jenis_survey" value="new" class="form-check-input" id="radio1">
                  <label class="form-check-label" for="radio1">&nbsp; New Install</label>
                </div>
                <div class="col-md-2 mb-2">
                  <input type="radio" name="jenis_survey" value="relokasi" class="form-check-input" id="radio2">
                  <label class="form-check-label" for="radio2">&nbsp; Relokasi/Modifikasi</label>
                </div>
                <div class="col-md-2 mb-2">
                  <input type="radio" name="jenis_survey" value="audit" class="form-check-input" id="radio3">
                  <label class="form-check-label" for="radio3">&nbsp;Audit Preparation</label>
                </div>
                <div class="col-md-2 mb-2">
                  <input type="radio" name="jenis_survey" value="trouble" class="form-check-input" id="radio4">
                  <label class="form-check-label" for="radio4">&nbsp;Laporan Trouble</label>
                </div>
                <div class="col-md-3">
                  <input type="radio" name="jenis_survey" value="lainnya" class="form-check-input" id="radio5" onchange="toggleLainnyaInput()">
                  <label class="form-check-label" for="radio5">&nbsp;Lainnya</label>
                  <input type="text" name="jenis_survey" placeholder="Lainnya" class="form-control" id="lainnyaInput" disabled>
                  <br>
                </div>
              </div>

              <script>
                function toggleLainnyaInput() {
                  var lainnyaInput = document.getElementById('lainnyaInput');
                  var radioLainnya = document.getElementById('radio5');

                  if (radioLainnya.checked) {
                    lainnyaInput.disabled = false;
                    lainnyaInput.focus();
                  } else {
                    lainnyaInput.disabled = true;
                  }
                }

                // Untuk memastikan input lainnya dinonaktifkan saat halaman dimuat
                document.addEventListener('DOMContentLoaded', function() {
                  var lainnyaInput = document.getElementById('lainnyaInput');
                  var radioLainnya = document.getElementById('radio5');

                  lainnyaInput.disabled = !radioLainnya.checked;
                });
              </script>

              <h5 class="text-center" style="background-color: black;color:white">Catatan Equipment </h5>
              <div class="row">
                <div class="col-md-6 mb-3">
                  <label for="">Jenis Equipment</label>
                  <input type="text" name="jenis_equipment" class="form-control" id="" value='@if($equipment->jenis == 1){{"AC Split"}}
                    @elseif($equipment->jenis == 2)
                    {{"AHUP"}}
                    @elseif($equipment->jenis == 3)
                    {{"Cooled Water Chiller"}}
                    @elseif($equipment->jenis == 4)
                    {{"PAC"}}
                    @elseif($equipment->jenis == 5)
                    {{"Cold Storage"}}
                    @elseif($equipment->jenis == 6)
                    {{"Cooling Unit & AC Panel"}}
                    @elseif($equipment->jenis == 7)
                    {{"Mini Chiller"}}
                    @elseif($equipment->jenis == 8)
                    {{"Evaporative Air Cooler"}}
                    @elseif($equipment->jenis == 9)
                    {{"AHU"}}
                    @elseif($equipment->jenis == 10)
                    {{"Cooling tower"}}
                    @elseif($equipment->jenis == 11)
                    {{"Humidifier"}}
                    @elseif($equipment->jenis == 12)
                    {{"Dehumidifier"}}
                    @elseif($equipment->jenis == 13)
                    {{"FCU (Fan Cooling Unit)"}}
                    @elseif($equipment->jenis == 14)
                    {{"Exhaust Fan"}}
                    @elseif($equipment->jenis == 15)
                    {{"Pompa"}}
                    @elseif($equipment->jenis == 16)
                    {{"Spot Cooling"}}
                    @elseif($equipment->jenis == 17)
                    {{"Water Mist"}}
                    @elseif($equipment->jenis == 18)
                    {{"Chiller Centrifugal"}}
                    @elseif($equipment->jenis == 19)
                    {{"Floor Standing"}}
                    @elseif($equipment->jenis == 20)
                    {{"Ac Cassette"}}
                    @elseif($equipment->jenis == 21)
                    {{"Split Duct"}}
                    @elseif($equipment->jenis == 22)
                    {{"Air Cooled Chiller"}}
                    @elseif($equipment->jenis == 23)
                    {{"Centralize Chiller"}}
                    @elseif($equipment->jenis == 24)
                    {{"Ultrasonic Humidifier"}}
                    @elseif($equipment->jenis == 25)
                    {{"Piping & Accs"}}
                    @elseif($equipment->jenis == 26)
                    {{"Panel SCR"}}
                    @elseif($equipment->jenis == 27)
                    {{"ATCS"}}
                    @elseif($equipment->jenis == 28)
                    {{"Lakos Filter"}}
                    
                    @endif' required="">
                  <label for="">Brand & Model</label>
                  <input type="text" name="brand" class="form-control" id="" value="{{$equipment->brand}}" required="">
                  <label for="">Serial No</label>
                  <input type="text" name="serial" class="form-control" id="" value="{{$equipment->serial_number}}" required="">
                </div>
                <div class="col-md-6 mb-3">
                  <br>
                  <label for="">Name Plate : &nbsp;</label>
                  <input type="radio" name="name_plate" value="ada" class="form-check-input" id="" name="jenis_survey" @if($equipment->nameplate=='ada') checked @endif>
                  <label class="form-check-label" for="">&nbsp; &nbsp;Ada</label>

                  <input type="radio" name="name_plate" value="tidak ada" class="form-check-input" id="" name="jenis_survey" @if($equipment->nameplate=='tidak ada') checked @endif>
                  <label class="form-check-label" for=""> &nbsp;&nbsp;Tidak Ada</label>
                  <br>
                  <br>

                  <label for="">Tahun Pembuatan</label>
                  <input type="text" name="tahun_pembuatan" class="form-control" id="" value="{{$equipment->tahun_pembuatan}}" required="">
                  <label for="">Tahun Install</label>
                  <input type="text" id="datepicker" name="tahun_install" class="form-control" id="" value="{{$equipment->tahun_installasi}}" required="">
                </div>
                <div class="col-md-12 mb-3">
                  <label for="">Deskripsi / Laporan User :</label>
                  <textarea class="form-control" name="deskripsi" id="" cols="10" rows="4"></textarea>
                </div>
                <div class="col-md-12 mb-2">
                  <label for="">Analisa Awal :</label>
                  <textarea class="form-control" name="analisa_awal" id="" cols="10" rows="4"></textarea>
                </div>
                <div class="col-md-12 mb-2">
                  <label for="">Tindakan :</label>
                  <textarea class="form-control" name="tindakan" id="" cols="10" rows="4"></textarea>
                </div>
                <div class="col-md-12 mb-2">
                  <label for="">Rekomendasi Teknisi Lapangan :</label>
                  <textarea class="form-control" name="rekomendasi_teknisi_lapangan" id="" cols="10" rows="4"></textarea>
                </div>
              </div>
              <h5 class="text-center" style="background-color: black;color:white">List Kebutuhan Part material dan jasa </h5>
              <table class="table table-bordered" id="personelTeamTable">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Deskripsi</th>
                    <th>Model/Part Number</th>
                    <th>Qty</th>
                    <th>Keterangan</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <!-- Initial row -->
                  <tr>
                    <td>1</td>
                    <td><input type="text" class="form-control" name="deskripsilist[]"></td>
                    <td><input type="text" class="form-control" name="modelpart[]"></td>
                    <td><input type="number" class="form-control" name="qty[]"></td>
                    <td><input type="text" class="form-control" name="keterangan[]"></td>
                    <td></td>
                  </tr>
                </tbody>
              </table>
              <button type="button" class="btn btn-primary" id="addPersonelTeam">Add List</button>
              <br>
              <script src="{{asset('dist/libs/jquery/dist/jquery.min.js')}}"></script>

              <script>
                $(document).ready(function() {
                  var personelCounter = 1;
                  var pekerjaanCounter = 1;

                  // Add a new row for Nama Personel Team
                  $("#addPersonelTeam").click(function() {
                    personelCounter++;
                    var newRow = `
        <tr>
            <td>${personelCounter}</td>
            <td><input type="text" class="form-control" name="deskripsilist[]"></td>
            <td><input type="text" class="form-control" name="modelpart[]"></td>
            <td><input type="number" class="form-control" name="qty[]"></td>
            <td><input type="text" class="form-control" name="keterangan[]"></td>
            <td><button type="button" class="btn btn-danger remove-row">X</button></td>

        </tr>
    `;
                    $("#personelTeamTable tbody").append(newRow);
                  });
                });


                // Remove a row from the Nama Personel Team table
                $("#personelTeamTable").on("click", ".remove-row", function() {
                  $(this).closest("tr").remove();
                  personelCounter--;
                  // Update the row numbers
                  $("#personelTeamTable tbody tr").each(function(index) {
                    $(this).find("td:first").text(index + 1);
                  });
                });
              </script>
              <br>
              <h5 class="text-center" style="background-color: black;color:white">Tambahkan Foto Equipment</h5>
              <table class="table table-bordered" id="GambarTable">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Gambar</th>
                    <th>Info</th>
                    <th>Keterangan</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <!-- Initial row -->
                  <tr>
                    <td>1</td>
                    <td><input type="file" class="form-control" name="gambar[]" required></td>
                    <td><input type="text" class="form-control" name="info[]" required></td>
                    <td><select name="keterangangambar[]" id="" class="form-select">
                        <option value="Before">Before</option>
                        <option value="After">After</option>
                      </select></td>
                    <td></td>
                  </tr>
                </tbody>
              </table>
              <button type="button" class="btn btn-primary" id="addGambar">Add Gambar</button>
              <br>
              <script src="{{asset('dist/libs/jquery/dist/jquery.min.js')}}"></script>

              <script>
                $(document).ready(function() {
                  var personelCounter = 1;
                  var pekerjaanCounter = 1;

                  // Add a new row for Nama Personel Team
                  $("#addGambar").click(function() {
                    personelCounter++;
                    var newRow = `
        <tr>
            <td>${personelCounter}</td>
            <td><input type="file" class="form-control" name="gambar[]"></td>
            <td><input type="text" class="form-control" name="info[]"></td>
            <td><select name="keterangangambar[]" id="" class="form-select">
                      <option value="Before">Before</option>
                      <option value="After">After</option>
                    </select></td>
            <td><button type="button" class="btn btn-danger remove-row">X</button></td>

        </tr>
    `;
                    $("#GambarTable tbody").append(newRow);
                  });
                });


                // Remove a row from the Nama Personel Team table
                $("#GambarTable").on("click", ".remove-row", function() {
                  $(this).closest("tr").remove();
                  personelCounter--;
                  // Update the row numbers
                  $("#GambarTable tbody tr").each(function(index) {
                    $(this).find("td:first").text(index + 1);
                  });
                });
              </script>
              <br>
              <h5 class="text-center" style="background-color: black;color:white">Tambahkan Foto Parameter</h5>
              <table class="table table-bordered" id="GambarTableParameter">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Gambar</th>
                    <th>Info</th>
                    <th>Keterangan</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <!-- Initial row -->
                  <tr>
                    <td>1</td>
                    <td><input type="file" class="form-control" name="gambar2[]" required></td>
                    <td><input type="text" class="form-control" name="info2[]" required></td>
                    <td><select name="keterangangambar2[]" id="" class="form-select">
                        <option value="Before">Before</option>
                        <option value="After">After</option>
                      </select></td>
                    <td></td>
                  </tr>
                </tbody>
              </table>
              <button type="button" class="btn btn-primary" id="addGambar">Add Gambar</button>
              <br>
              <script src="{{asset('dist/libs/jquery/dist/jquery.min.js')}}"></script>

              <script>
                $(document).ready(function() {
                  var personelCounter = 1;
                  var pekerjaanCounter = 1;

                  // Add a new row for Nama Personel Team
                  $("#addGambar").click(function() {
                    personelCounter++;
                    var newRow = `
        <tr>
            <td>${personelCounter}</td>
            <td><input type="file" class="form-control" name="gambar2[]"></td>
            <td><input type="text" class="form-control" name="info2[]"></td>
            <td><select name="keterangangambar2[]" id="" class="form-select">
                      <option value="Before">Before</option>
                      <option value="After">After</option>
                    </select></td>
            <td><button type="button" class="btn btn-danger remove-row">X</button></td>

        </tr>
    `;
                    $("#GambarTableParameter tbody").append(newRow);
                  });
                });


                // Remove a row from the Nama Personel Team table
                $("#GambarTableParameter").on("click", ".remove-row", function() {
                  $(this).closest("tr").remove();
                  personelCounter--;
                  // Update the row numbers
                  $("#GambarTableParameter tbody tr").each(function(index) {
                    $(this).find("td:first").text(index + 1);
                  });
                });
              </script>
              <button class="btn btn-info px-4 mt-3" type="submit">
                Submit form
              </button>
            </form>
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