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
            <h4 class="card-title mb-0 text-center">Service Report Troubleshoot / Corrective</h4>
          </div>
          <div class="card-body">
            <form action="{{ route('troubleshoot.store') }}" method="POST">
              @csrf
              <div class="row">
                <div class="col-md-4 mb-3">
                  <label for="">Customer</label>
                  <input type="text" name="customer" class="form-control" id="" value="{{$equipment->customer}}" required="">
                  <input type="hidden" name="id_equipment" class="form-control" id="" value="{{$equipment->id}}" required="">
                  <label for="">No Kontak</label>
                  <input type="text" name="no_kontak" class="form-control" id="" value="" required="">
                  <label for="">Alamat</label>
                  <textarea class="form-control" name="alamat" id="" cols="10" rows="4"></textarea>

                </div>
                <div class="col-md-4 mb-3">
                  <label for="">Engineer List</label>
                  <textarea class="form-control" name="engineer_list" id="" cols="10" rows="4"></textarea>
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

              <h5 class="text-center" style="background-color: black;color:white">Tindak Lanjut Dari Laporan/Pekerjaan</h5>

              <div class="row">
                <div class="col-md-2 mb-2">
                  <input type="radio" name="jenis_survey" value="new" class="form-check-input" id="">
                  <label class="form-check-label" for="">&nbsp; PASCA PM</label>
                </div>
                <div class="col-md-2 mb-2">
                  <input type="radio" name="jenis_survey" value="relokasi" class="form-check-input" id="">
                  <label class="form-check-label" for="">&nbsp; TEMUAN DH/SRQ</label>
                </div>
                <div class="col-md-2 mb-2">
                  <input type="radio" name="jenis_survey" value="audit" class="form-check-input" id="">
                  <label class="form-check-label" for="">&nbsp; COMPLAIN</label>
                </div>
                <div class="col-md-3">
                  <div class="form-check">
                    <input type="radio" name="jenis_survey" value="other" class="form-check-input" id="">
                    <label class="form-check-label" for="">&nbsp; Lainnya</label>
                  </div>
                  <input type="text" name="other_jenis_survey" placeholder="Lainnya" class="form-control" id="other_jenis_survey_input" style="display: none;">
                </div>
              </div>

              <script>
                // Menampilkan input teks "Lainnya" saat opsi "Lainnya" dipilih
                const radioOther = document.getElementById('');
                const otherJenisSurveyInput = document.getElementById('other_jenis_survey_input');

                radioOther.addEventListener('change', function() {
                  if (radioOther.checked) {
                    otherJenisSurveyInput.style.display = 'block';
                  } else {
                    otherJenisSurveyInput.style.display = 'none';
                  }
                });
              </script>


              <div class="row">
                <div class="col-md-6 mb-3">
                  <h5 class="text-center" style="background-color: black; color: white">Defect Level</h5>
                  <div class="form-check">
                    <input type="radio" name="defect_level" value="High" class="form-check-input" id="_column1">
                    <label class="form-check-label" for="_column1">&nbsp; &nbsp;High</label>
                  </div>
                  <div class="form-check">
                    <input type="radio" name="defect_level" value="Medium" class="form-check-input" id="_column1">
                    <label class="form-check-label" for="_column1">&nbsp;&nbsp;Medium</label>
                  </div>
                  <div class="form-check">
                    <input type="radio" name="defect_level" value="Low" class="form-check-input" id="_column1">
                    <label class="form-check-label" for="_column1">&nbsp;&nbsp;Low</label>
                  </div>
                </div>
                <div class="col-md-6 mb-3">
                  <h5 class="text-center" style="background-color: black; color: white">Defect Type</h5>
                  <br>
                  <div class="form-check">
                    <input type="radio" name="defect_type" value="Minor" class="form-check-input" id="">
                    <label class="form-check-label" for="">Minor</label>
                  </div>
                  <div class="form-check">
                    <input type="radio" name="defect_type" value="Tidak standar" class="form-check-input" id="">
                    <label class="form-check-label" for="">Tidak standar</label>
                  </div>
                  <div class="form-check">
                    <input type="radio" name="defect_type" value="Area sulit dijangkau / Hard Access" class="form-check-input" id="">
                    <label class="form-check-label" for="">Area sulit dijangkau / Hard Access</label>
                  </div>
                  <div class="form-check">
                    <input type="radio" name="defect_type" value="Sumber kontaminasi produk" class="form-check-input" id="">
                    <label class="form-check-label" for="">Sumber kontaminasi produk</label>
                  </div>
                  <div class="form-check">
                    <input type="radio" name="defect_type" value="Mengurangi kualitas" class="form-check-input" id="">
                    <label class="form-check-label" for="">Mengurangi kualitas</label>
                  </div>
                  <div class="form-check">
                    <input type="radio" name="defect_type" value="Tidak Dibutuhkan" class="form-check-input" id="radio5">
                    <label class="form-check-label" for="radio5">Tidak Dibutuhkan</label>
                  </div>
                  <div class="form-check">
                    <input type="radio" name="defect_type" value="Tidak Safety" class="form-check-input" id="radio6">
                    <label class="form-check-label" for="radio6">Tidak Safety</label>
                  </div>
                  <div class="form-check">
                    <input type="radio" name="defect_type" value="Other" class="form-check-input" id="radio_other">
                    <label class="form-check-label" for="radio_other">Other</label>
                    <input type="text" name="other_defect_type" id="other_defect_input" style="display: none;">
                  </div>
                  <script>
                    // Menampilkan input teks saat opsi "Lainnya" dipilih
                    const radioOther = document.getElementById('radio_other');
                    const otherDefectInput = document.getElementById('other_defect_input');

                    radioOther.addEventListener('change', function() {
                      if (radioOther.checked) {
                        otherDefectInput.style.display = 'block';
                      } else {
                        otherDefectInput.style.display = 'none';
                      }
                    });
                  </script>
                  <br><br>
                </div>

                <h5 class="text-center" style="background-color: black;color:white">Catatan Equipment </h5>
                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label for="">Jenis Equipment</label>
                    <input type="text" name="jenis_equipment" class="form-control" id="" value='@if($equipment->jenis == 1)
                    {{"AC Split"}}
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
                    @endif' required="">
                    <label for="">Brand & Model</label>
                    <input type="text" name="brand" class="form-control" id="" value="{{$equipment->brand}}" required="">
                    <label for="">Serial No</label>
                    <input type="text" name="serial" class="form-control" id="" value="{{$equipment->serial_number}}" required="">
                  </div>
                  <div class="col-md-6 mb-3">
                    <br>
                    <label for="">Name Plate : &nbsp;</label>
                    <input type="radio" name="name_plate" value="ada" class="form-check-input">
                    <label class="form-check-label" for="">&nbsp; &nbsp;Ada</label>

                    <input type="radio" name="name_plate" value="tidak ada" class="form-check-input">
                    <label class="form-check-label" for=""> &nbsp;&nbsp;Tidak Ada</label>
                    <br>
                    <br>

                    <label for="">Tahun Pembuatan</label>
                    <input type="text" name="tahun_pembuatan" class="form-control" id="" value="{{$equipment->tahun_pembuatan}}" required="">
                    <label for="">Tahun Install</label>
                    <input type="text" id="datepicker" name="tahun_install" class="form-control" id="" value="{{$equipment->tahun_installasi}}" required="">
                  </div>
                  <div class="col-md-12 mb-3">
                    <label for="">Trouble Desc :</label>
                    <textarea class="form-control" name="deskripsi" id="" cols="10" rows="4"></textarea>
                  </div>
                  <div class="col-md-12 mb-2">
                    <label for="">Action :</label>
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